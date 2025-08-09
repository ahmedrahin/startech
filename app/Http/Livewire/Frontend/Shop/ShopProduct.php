<?php

namespace App\Http\Livewire\Frontend\Shop;

use Livewire\Component;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ShopProduct extends Component
{
    public $productId;
    public $quantity = 1;
     public $selectedAttributes = [];

    public function mount($productId)
    {
        $this->productId = $productId;
    }
    
    public function addToCart()
    {
        $product = Product::with('productStock.attributeOptions.attribute')->find($this->productId);

        if (!$product) {
            $this->emit('error', 'Product not found.');
            return;
        }

        // Validate required attributes based on stock
        $requiredAttributes = [];

        foreach ($product->productStock as $stock) {
            foreach ($stock->attributeOptions as $option) {
                $attrName = $option->attribute->attr_name;
                $requiredAttributes[$attrName] = true;
            }
        }

        // Check if all required attributes are selected
        foreach (array_keys($requiredAttributes) as $attrName) {
            if (empty($this->selectedAttributes[$attrName])) {
                $this->attributeErrors[$attrName] = "Please select $attrName";
            }
        }

        if (!empty($this->attributeErrors)) {
            $this->emit('error', 'Please select all required options.');
            return;
        }

        // Validate quantity
        if ($this->quantity <= 0 || !is_numeric($this->quantity)) {
            $this->emit('error', 'Invalid product quantity.');
            return;
        }

        // Build cart key dynamically
        $cart = session()->get('cart', []);

        $cartKey = "{$this->productId}";
        foreach ($this->selectedAttributes as $key => $value) {
            $cartKey .= "-{$key}:{$value}";
        }

        $existingQuantity = isset($cart[$cartKey]) ? $cart[$cartKey]['quantity'] : 0;
        $newTotalQuantity = $existingQuantity + $this->quantity;

        if ($newTotalQuantity > $product->quantity) {
            $this->emit('error', "You have exceeded available stock for {$product->name}. Only {$product->quantity} available.");
            return;
        }

        // Store in cart
        $cart[$cartKey] = [
            'product_id' => $this->productId,
            'quantity' => $newTotalQuantity,
            'attributes' => $this->selectedAttributes,
            'added_at' => now(),
        ];

        session()->put('cart', $cart);

        $this->emit('success', 'Product added to cart.');
        $this->emit('cartUpdated');
        $this->emit('cartAdded');
        // dd($cart);
    }

    public function render()
    {
        $product = Product::with('productStock')->find($this->productId);
        return view('livewire.frontend.shop.shop-product', compact('product'));
    }

}
