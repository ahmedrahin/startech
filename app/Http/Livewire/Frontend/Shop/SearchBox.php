<?php

namespace App\Http\Livewire\Frontend\Shop;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;

class SearchBox extends Component
{
    public $searchQuery = '';
    public $selectedCategory = '';
    public $products = [];

    public function updatedSearchQuery()
    {
        $this->fetchProducts();
    }

    public function updatedSelectedCategory()
    {
        $this->fetchProducts();
    }

    public function fetchProducts()
    {
        $this->products = Product::whereIn('status', [1, 3])
            ->where(function ($query) {
                $query->whereNull('publish_at')
                    ->orWhere('publish_at', '<=', Carbon::now());
            })
            ->where(function ($query) {
                $query->whereNull('expire_date')
                    ->orWhere('expire_date', '>', Carbon::now());
            })
            ->when($this->searchQuery, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->searchQuery . '%')
                      ->orWhereHas('tags', function ($tagQuery) {
                          $tagQuery->where('name', 'like', '%' . $this->searchQuery . '%');
                      });
                });
            })
            ->when($this->selectedCategory, function ($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->orderBy('id', 'desc')
            ->get()
            ->toArray();
    }

    public function search()
    {
        $queryParams = ['query' => $this->searchQuery];
        if ($this->selectedCategory) {
            $queryParams['category'] = $this->selectedCategory;
        }

        return redirect()->to('/shop?' . http_build_query($queryParams));
    }

    public function render()
    {
        $categories = Category::where('status', 1)->orderBy('name')->get();
        return view('livewire.frontend.shop.search-box', compact('categories'));
    }
}
