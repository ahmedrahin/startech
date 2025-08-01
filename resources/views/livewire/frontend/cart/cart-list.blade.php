<div class="page-content">
    <form action="{{ route('message') }}" method="POST" onsubmit="return confirm('Are you sure')"
        style="display: none;">
        @csrf
        <button type="submit">Delete All</button>
    </form>
    <div class="container">
        <div class="row gutter-lg mb-10">
            <div class="col-lg-8 pr-lg-4 mb-0">
                <table class="shop-table cart-table">
                    <thead>
                        <tr>
                            <th class="product-name"><span>Product</span></th>
                            <th></th>
                            <th class="product-price"><span>Price</span></th>
                            <th class="product-quantity"><span>Quantity</span></th>
                            <th class="product-subtotal"><span>Subtotal</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart as $cartKey => $item)
                            <tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="{{ route('product-details', $item['slug']) }}">
                                            <figure>
                                                <img src="{{ asset($item['image_url']) }}" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" class="btn btn-close"
                                            wire:click="removeItem('{{ $cartKey }}')"><i class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="{{ route('product-details', $item['slug']) }}"
                                        style="font-size: 15px !important;">
                                        {{ $item['name'] }}
                                    </a>
                                    <p class="mb-0" style="font-size: 12px;">
                                        @if(isset($item['size']) && $item['size'])
                                        <strong>Size:</strong> {{ $item['size'] }}
                                        @endif
                                        @if(isset($item['color']) && $item['color'])
                                        <strong>Color:</strong> {{ $item['color'] }}
                                        @endif
                                    </p>
                                </td>
                                <td class="product-price"><span class="amount">৳{{ $item['offer_price'] }}</span></td>
                                <td class="product-quantity">
                                    <div class="input-group">
                                        <input class=" form-control" type="number"
                                            wire:model.lazy="quantities.{{ $cartKey }}" min="1"
                                            wire:change="updateQuantities('{{ $cartKey }}', $event.target.value)"
                                            value="{{ $item['quantity'] }}">
                                        <button class="quantity-plus w-icon-plus"
                                            wire:click="incrementQuantity('{{ $cartKey }}')"></button>
                                        <button class="quantity-minus w-icon-minus"
                                            wire:click="decrementQuantity('{{ $cartKey }}')"></button>
                                    </div>
                                </td>
                                <td class="product-subtotal">
                                    <span class="amount">৳{{ $item['offer_price'] * $item['quantity'] }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="cart-action mb-6">
                    <a href="{{ route('shop') }}" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i
                            class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                    <button type="button" class="btn btn-rounded btn-default btn-clear" id="clearAllButton"
                        wire:click="clearCart">Clear Cart</button>
                </div>

            </div>


            <div class="col-lg-4 sticky-sidebar-wrapper">
                <div class="pin-wrapper" >
                    <div class="sticky-sidebar" >
                        <div class="cart-summary mb-4">
                            <h3 class="cart-title text-uppercase">Cart Totals</h3>
                            <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                <label class="ls-25">Total Cart Items:</label>
                                <span>({{count($cart)}} Items)</span>
                            </div>
                            <div class="cart-subtotal d-flex align-items-center justify-content-between mt-1">
                                <label class="ls-25">Total Cart Qty:</label>
                                <span>{{ array_sum(array_column($cart, 'quantity')) }}</span>
                            </div>

                            <hr class="divider mb-6">
                            <div class="order-total d-flex justify-content-between align-items-center">
                                <label>Total</label>
                                <span class="ls-50 text-primary">৳{{ number_format($this->getTotalAmount(), 2) }}</span>
                            </div>

                            @if( config('website_settings.guest_checkout') == 1 && Auth::check() )
                                <a href="{{ route('checkout') }}"
                                class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                            @elseif( config('website_settings.guest_checkout') == 0 && !Auth::check() )
                                 <button
                                class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout" onclick="message('warning', 'Please log in at first to checkout')">
                                Proceed to checkout<i class="w-icon-long-arrow-right"></i></button>
                            @else
                                <a href="{{ route('checkout') }}"
                                class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
