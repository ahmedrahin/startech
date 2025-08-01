<?php

namespace App\Http\Livewire\Frontend\Order;

use Livewire\Component;
use App\Models\ShippingMethod;
use App\Models\District;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Coupon;
use App\Mail\OrderPlaced;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Library\SslCommerz\SslCommerzNotification;


class Checkout extends Component
{
    public $name;
    public $email;
    public $phone;
    public $shipping_address;
    public $district_id;
    public $note;
    public $payment_type;
    public $selectedShippingMethodId;
    public $selectedShippingCharge = 0 ;

    public $cart = [];
    public $quantities = [];
    public $shippingMethods;
    public $couponCode;
    public $discountAmount = 0;
    public $appliedCoupon;
    private $cacheKey;

    public $sslcommerzUrl ;

    protected $listeners = [
        'cartUpdated' => 'refreshCart',
    ];

    public function __construct()
    {
        $this->cacheKey = config('dbcachekey.order');
    }

    public function mount()
    {
        $this->loadCart();
        $this->loadShippingMethods();
        $this->payment_type = 'cod';

        $this->appliedCoupon = session()->get('applied_coupon', null);

        if( Auth::check() ){
            $this->name = Auth::user()->name;
            $this->email = Auth::user()->email;
            $this->phone = Auth::user()->phone;
            $this->shipping_address = Auth::user()->address_line1;
        }
    }

    public function loadCart()
    {
        // Retrieve the cart from the session
        $sessionCart = session()->get('cart', []);

        $validCart = []; // Temporary array for valid items

        foreach ($sessionCart as $cartKey => $item) {
            $productId = explode('-', $cartKey)[0];
            $product = Product::find($productId);

            if ($product && ($product->status == 1 || $product->status == 3) && $product->quantity > 0) {
                $validCart[$cartKey] = $item;
                $validCart[$cartKey]['name'] = $product->name;
                $validCart[$cartKey]['slug'] = $product->slug;
                $validCart[$cartKey]['offer_price'] = $product->offer_price;
                $validCart[$cartKey]['price'] = $product->base_price;
                $validCart[$cartKey]['image_url'] = $product->thumb_image;
                $validCart[$cartKey]['available_quantity'] = $product->quantity;
                $validCart[$cartKey]['discount_option'] = $product->discount_option;
                $validCart[$cartKey]['quantity'] = $item['quantity'] ?? 1;
            }
        }

        // Assign valid items to the cart
        $this->cart = $validCart;
    }


    public function applyCoupon()
    {
        if( $this->couponCode == null ){
            $this->emit('error', 'please enter your coupon code.');
            return;
        }

        $coupon = Coupon::whereRaw('BINARY code = ?', [$this->couponCode])
                ->where('status', 1)
                ->whereDate('start_at', '<=', now())
                ->where(function ($query) {
                    $query->whereNull('expire_date')
                        ->orWhereDate('expire_date', '>=', now());
                })
                ->first();

        if (!$coupon) {
            $this->emit('error', 'Invalid or expired coupon code!');
            $this->couponCode = '';
            return;
        }

        if( $coupon->min_purchase_amount && ($coupon->min_purchase_amount > $this->getTotalAmount() ) ){
            $this->emit('error', 'You need to minimum purchase ' . $coupon->min_purchase_amount . 'tk for use this coupon');
            $this->couponCode = '';
            return;
        }

        // Check usage limit
        $usage = $coupon->orders()->count();
        if ($coupon->usage_limit && ($usage >= $coupon->usage_limit)) {
            $this->emit('error', 'The coupon usage limit has been reached.');
            $this->couponCode = '';
            return;
        }

        // Apply the discount based on coupon type
        if ($coupon->discount_type == 'percentage') {
            $this->discountAmount = $this->getTotalAmount() * ($coupon->discount_amount / 100);
        } else {
            $this->discountAmount = $coupon->discount_amount;
        }

        // Store the coupon and discount amount
        session()->put('applied_coupon', [
            'code' => $this->couponCode,
            'discount' => $this->discountAmount,
        ]);
        $this->appliedCoupon = session()->get('applied_coupon');
        $this->emit('success', 'Coupon applied successfully!');
    }

    public function removeCoupon()
    {
        $this->couponCode = null;
        $this->discountAmount = 0;
        $this->appliedCoupon = [];
        session()->forget('applied_coupon');

        // $this->emit('info', 'Coupon removed.');
    }

    public function updatedDistrictId($value)
    {
        $methods = ShippingMethod::where('status', 1)->where('base_id', $value)->first();

        if ($methods) {

            $this->selectedShippingMethodId = $methods->id;
            $this->selectedShippingCharge = $methods->base_charge;
            $this->shippingMethods = collect();
        } else {
            $this->loadShippingMethods();
        }
    }

    public function loadShippingMethods()
    {
        $this->shippingMethods = ShippingMethod::where('status', 1)
            ->where('base_id', null)
            ->get();

        if ($this->shippingMethods->count() === 1) {
            $singleMethod = $this->shippingMethods->first();
            $this->selectedShippingMethodId = $singleMethod->id;
            $this->selectedShippingCharge = $singleMethod->provider_charge;
        } elseif ($this->shippingMethods->count() > 1) {
            $this->selectedShippingMethodId = null;
            $this->selectedShippingCharge = 0;
        }
    }

    public function updatedSelectedShippingMethodId()
    {
        // Validate and fetch the charge securely
        $shippingMethod = ShippingMethod::where('id', $this->selectedShippingMethodId)
            ->first();

        if ($shippingMethod) {
            $this->selectedShippingCharge = $shippingMethod->provider_charge;
        } else {
            $this->selectedShippingCharge = 0;
        }
    }

    public function order()
    {
        $rules = [
            'name' => 'required',
            'email' => 'nullable|email',
            'phone' => 'required|numeric',
            'shipping_address' => 'required',
            'district_id' => 'required',
        ];

        $this->validate($rules);

        if ($this->selectedShippingMethodId === null) {
            $this->emit('warning', 'Select a shipping method');
            return;
        }

        if ($this->payment_type === '') {
            $this->emit('warning', 'Select a payment method');
            return;
        }

        $letters = Str::upper(Str::random(4));
        $numbers = (string) rand(1000, 9999);
        $orderId = str_shuffle($letters . $numbers);


        if ($this->payment_type === 'cod') {
            $order = Order::create([
                'order_id' => $orderId,
                'user_id' => Auth::id(),
                'user_type' => 'customer',
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'shipping_address' => $this->shipping_address,
                'district_id' => $this->district_id,
                'payment_type' => 'cod',
                'shipping_method' => $this->selectedShippingMethodId,
                'shipping_cost' => $this->selectedShippingCharge,
                'order_date' => Carbon::now(),
                'note' => $this->note,
                'grand_total' => $this->grandTotal(),
                'subtotal'   => $this->getTotalAmount(),
                'cupon_code' => $this->appliedCoupon['code'] ?? null,
                'coupon_discount' => $this->appliedCoupon['discount'] ?? 0,
            ]);

            foreach (session('cart') as $item) {
                $product = Product::find($item['product_id']);
                if ($product && $product->quantity >= $item['quantity']) {
                    $price = $item['offer_price'];
                    $product->decrement('quantity', $item['quantity']);

                    $orderItem = $order->orderItems()->create([
                        'product_id' => $product->id,
                        'quantity' => $item['quantity'],
                        'price' => $price,
                    ]);

                    foreach (['size', 'color'] as $attr) {
                        if (!empty($item[$attr])) {
                            $orderItem->orderItemVariations()->create([
                                'attribute_name' => $attr,
                                'attribute_value' => $item[$attr],
                            ]);
                        }
                    }
                }
            }

            // add notification
            $notification = new \App\Models\Notification();
            $notification->create([
                'type' => 'order',
                'order_id' => $order->id,
            ]);

            Mail::to(config('app.email'))->send(new OrderPlaced($order));
            session()->forget('cart');
            session()->forget('applied_coupon');

            return redirect()->route('success.order', ['order_id' => $orderId]);
        }

        if ($this->payment_type === 'sslcommerz') {
            return redirect()->route('sslcommerz.redirect')->with('ssl_payment_data', [
                'order_id' => $orderId,
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'shipping_address' => $this->shipping_address,
                'district_id' => $this->district_id,
                'user_id' => Auth::id(),
                'shipping_method_id' => $this->selectedShippingMethodId,
                'shipping_charge' => $this->selectedShippingCharge,
                'cart' => session()->get('cart'),
                'coupon' => $this->appliedCoupon,
                'note' => $this->note,
                'grand_total' => $this->grandTotal(),
                'subtotal'  => $this->getTotalAmount(),
            ]);

        }

        $this->emit('error', 'Invalid payment method selected.');
    }


    public function refreshCart()
    {
        $this->loadCart();
    }

    public function getTotalAmount()
    {
        $total = 0;
        foreach ($this->cart as $item) {
            $total += $item['quantity'] * $item['offer_price'];
        }
        return $total;
    }

    public function grandTotal()
    {
        $discount = $this->appliedCoupon ? ($this->appliedCoupon['discount'] ?? 0) : 0;
        return $this->getTotalAmount() + $this->selectedShippingCharge - $discount;
    }


    public function hydrate()
    {
        // Reset error bag and validation
        $this->resetErrorBag();
        $this->resetValidation();
    }

    private function refreshCache()
    {
        Cache::forget($this->cacheKey);
        Cache::rememberForever($this->cacheKey, function () {
            return Order::orderBy('id', 'desc')->get();
        });
    }

    public function render()
    {
        $districts = District::orderBy('name', 'asc')->where('status',1)->get();
        return view('livewire.frontend.order.checkout', compact('districts'));
    }
}
