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
    


    public function render()
    {
        $products = '';

        return view('livewire.frontend.shop.shop-product', compact('products'));
    }

}
