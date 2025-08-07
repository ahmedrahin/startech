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
    public $sortBy = '';
    public $categorySlug;
    public $subcategorySlug;
    public $subsubcategorySlug;
    
    protected $queryString = [
        'perPage' => ['except' => ''],
        'sortBy' => ['except' => ''],
    ];
    
    public function mount($categorySlug = null, $subcategorySlug = null, $subsubcategorySlug = null)
    {
        $this->categorySlug = $categorySlug;
        $this->subcategorySlug = $subcategorySlug;
        $this->subsubcategorySlug = $subsubcategorySlug;

        $this->perPage = 1;
    }

    public function render()
    {
        $productsQuery = Product::query()
            ->activeProducts()
            ->with(['category', 'subcategory', 'subsubcategory']); 


        if ($this->categorySlug) {
            $productsQuery->whereHas('category', function($query) {
                $query->where('slug', $this->categorySlug)
                    ->where('status', 1);
            });
        }

        if ($this->subcategorySlug) {
            $productsQuery->whereHas('subcategory', function($query) {
                $query->where('slug', $this->subcategorySlug)
                    ->where('status', 1);
            });
        }

        // Apply subsubcategory filter if slug exists
        if ($this->subsubcategorySlug) {
            $productsQuery->whereHas('subsubcategory', function($query) {
                $query->where('slug', $this->subsubcategorySlug)
                    ->where('status', 1);
            });
        }

        // Apply sorting
        if ($this->sortBy) {
            [$column, $direction] = explode('-', $this->sortBy);
            $productsQuery->orderBy($column, $direction);
        } else {
            $productsQuery->latest(); 
        }

        // Paginate results
        $products = $productsQuery->paginate($this->perPage);

        return view('livewire.frontend.shop.shop-product', compact('products'));
    }

}
