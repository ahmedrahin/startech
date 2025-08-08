<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ShopController extends Controller
{   
    // show product in shop page
    public function allProducts(){
        return view('frontend.pages.shop.shop');
    }

   public function categoryProduct(Request $request, string $slug)
    {
        $category = Category::where('slug', $slug)->where('status', 1)->firstOrFail();

        $perPage = $request->get('limit', config('website_settings.item_per_page'));
        $sort = $request->get('sort', '');

        $query = Product::where('category_id', $category->id);

        if ($sort) {
            [$column, $direction] = explode('-', $sort);
            $query->orderBy($column, $direction);
        }

        $products = $query->paginate($perPage)->appends($request->except('page'));

        if ($request->ajax()) {
            // return only the product list + pagination partial
            return view('frontend.pages.shop.partials.category-product-list', compact('products'))->render();
        }

        return view('frontend.pages.shop.category-product', compact('category', 'slug', 'products', 'perPage'));
    }


    // product details page
    public function productDetails(string $slug)
    {
        if ($slug) {
            $product = Product::activeProducts()
                ->where('slug', $slug)
                ->with([
                    'category:id,name',
                    'brand:id,name',
                    'galleryImages:id,product_id,image',
                    'tags:id,product_id,name',
                    'productStock:id,product_id',
                    'productStock.attributeOptions:id,product_stock_id,attribute_id,attribute_value_id'
                ])
                ->first();

            // Check if the product exists and is active
            if (!$product) {
                return redirect()->route('shop')->with('error', 'The product is unavailable.');
            }
        }

        return view('frontend.pages.product.details', compact('product'));
    }

    // product wishlist
    public function wishlist(){
        return view('frontend.pages.shop.wishlist');
    }

}
