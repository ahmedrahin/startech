<?php

namespace App\Http\Livewire\Frontend\Shop;

use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\WithPagination;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class ShopProduct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $perPage;
    public $wishlist = [];
    public $selectedCategories = [];
    public $selectedSubCategories = [];
    public $selectedSubSubCategories = [];
    public $selectedCollections = [];
    public $searchQuery = '';
    public $sortOrder = '';

    public $quantity = 1;

    protected $queryString = [
        'selectedCategories' => ['as' => 'categories', 'except' => []],
        'selectedSubCategories' => ['as' => 'subcategories', 'except' => []],
        'selectedCollections' => ['as' => 'collections', 'except' => []],
        'searchQuery' => ['as' => 'query', 'except' => ''],
        'sortOrder' => ['as' => 'sort', 'except' => ''],
        'perPage' => ['as' => 'perpage', 'except' => ''],
    ];

    protected $listeners = [
        'filterUpdated' => 'updateFilter',
        'subcategoryFilterUpdated' => 'updateSubcategories',
        'subsubcategoryFilterUpdated' => 'updateSubSubcategories',
        'searchUpdated' => 'updateSearchQuery',
        'sortOrderUpdated' => 'updateSortOrder',
        'collectionFilterUpdated' => 'updateCollections',
        'wishlistUpdated' => 'loadWishlist',
        'updatedShowPerPage' => 'updatePerPage',
    ];

    public function mount()
    {
        $this->loadWishlist();
        if (!$this->perPage) {
            $this->perPage = config('website_settings.item_per_page');
        }
    }

    public function loadWishlist()
    {
        if (Auth::check()) {
            $this->wishlist = Wishlist::where('user_id', Auth::id())->pluck('product_id')->toArray();
        } else {
            $sessionId = session()->getId();
            $this->wishlist = Wishlist::where('session_id', $sessionId)->pluck('product_id')->toArray();
        }
    }

    public function updateFilter($categories)
    {
        $this->selectedCategories = array_values($categories);
        $this->resetPage();
    }

    public function updateSelectedCategories($categories)
    {
        $this->selectedCategories = array_values($categories);
        $this->resetPage();
    }
    public function updateSubcategories($subcategories)
    {
        $this->selectedSubCategories = array_values($subcategories);
        $this->resetPage();
    }
    public function updateSubSubcategories($subsubcategories)
    {
        $this->selectedSubSubCategories = array_values($subsubcategories);
        $this->resetPage();
    }

    public function updateCollections($collections)
    {
        $this->selectedCollections = array_values($collections);
        $this->resetPage();
    }

    public function updateSearchQuery($query)
    {
        $this->searchQuery = $query;
        $this->resetPage();
    }

    public function updateSortOrder($order)
    {
        $this->sortOrder = $order;
        $this->resetPage();
    }

    public function updatePerPage($count)
    {
        if (empty($count)) {
            $this->perPage = config('website_settings.item_per_page');
            $this->resetPage();
            // remove from query string manually
            request()->merge(['perpage' => null]);
        } else {
            $this->perPage = (int) $count;
            $this->resetPage();
        }
    }

    public function addToCart($productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            $this->emit('error', 'Product not found.');
            return;
        }

        if ($product->quantity < 1) {
            $this->emit('error', 'This product is out of stock.');
            return;
        }

        if ($this->quantity == 0 || empty($this->quantity)) {
            $this->emit('error', 'Please select a quantity');
            return;
        } elseif (!is_numeric($this->quantity) || $this->quantity <= 0) {
            $this->emit('error', 'Invalid product quantity. Please enter a valid positive quantity');
            return;
        }

        $cart = session()->get('cart', []);
        $cartKey = (string) $productId;

        $existingQuantity = isset($cart[$cartKey]) ? $cart[$cartKey]['quantity'] : 0;
        $newTotalQuantity = $existingQuantity + $this->quantity;

        if ($newTotalQuantity > $product->quantity) {
            $this->emit('error', "Only {$product->quantity} items available in stock.");
            return;
        }

        if (!isset($cart[$cartKey])) {
            $cart[$cartKey] = [
                'product_id' => $productId,
                'quantity' => $this->quantity,
                'added_at' => now(),
            ];
            $this->emit('success', 'Product added to cart.');
        } else {
            $cart[$cartKey]['quantity'] = $newTotalQuantity;
            $this->emit('success', 'Product quantity updated.');
        }

        session()->put('cart', $cart);
        $this->emit('cartUpdated');
        $this->emit('cartAdded');
    }

    public function render()
    {
        $products = Product::query()
            ->activeProducts()
            ->when(
                !empty($this->selectedCategories) ||
                !empty($this->selectedSubCategories) ||
                !empty($this->selectedSubSubCategories),
                function ($query) {
                    $query->where(function ($q) {
                        if (!empty($this->selectedCategories)) {
                            $q->whereIn('category_id', $this->selectedCategories);
                        }
                        if (!empty($this->selectedSubCategories)) {
                            $q->orWhereIn('subcategory_id', $this->selectedSubCategories);
                        }
                        if (!empty($this->selectedSubSubCategories)) {
                            $q->orWhereIn('subsubcategory_id', $this->selectedSubSubCategories);
                        }
                    });
                }
            )
            ->when(!empty($this->selectedCollections), function ($query) {
                $query->where(function ($q) {
                    if (in_array('new_arrivals', $this->selectedCollections)) {
                        $q->orWhere(function ($query) {
                            $query->where('created_at', '>=', now()->subDays(10))
                                ->orWhere('is_new', 1);
                        });
                    }
                });

                if (in_array('top_selling', $this->selectedCollections)) {
                    $query->withCount('orderItems')
                        ->orderBy('order_items_count', 'desc');
                }
            })
            ->when($this->searchQuery, function ($query) {
                $query->where('name', 'like', '%' . $this->searchQuery . '%')
                    ->orWhereHas('tags', function ($q) {
                        $q->where('name', 'like', '%' . $this->searchQuery . '%');
                    });
            })
            ->when($this->sortOrder, function ($query) {
                if ($this->sortOrder === 'price_desc') {
                    $query->orderBy('offer_price', 'desc');
                } elseif ($this->sortOrder === 'price_asc') {
                    $query->orderBy('offer_price', 'asc');
                } elseif ($this->sortOrder == 'offer') {
                    $query->where('discount_option', '!=', 1);
                }elseif ($this->sortOrder == 'top_selling') {
                   $query->withCount('orderItems')
                        ->orderBy('order_items_count', 'desc');
                }
            })
            ->orderBy('is_featured', 'asc')
            ->orderBy('id', 'desc')
            ->paginate($this->perPage);

        return view('livewire.frontend.shop.shop-product', compact('products'));
    }

}
