<div class="dropdown-box" wire:ignore.self>
    <div class="cart-header">
        <span>Shopping Cart</span>
        <a href="#" class="">Close<i class="w-icon-long-arrow-right"></i></a>
    </div>

     @if( !empty($cart) )
        <div class="products" id="cart-products">
            @foreach($cart as $cartKey => $item)
                <div class="product product-cart">
                    <div class="product-detail">
                        <a href="{{ route('product-details', $item['slug']) }}" class="product-name mb-0">
                            {{ Str::limit($item['name'], 20, '...') }}
                        </a>
                        @if( isset($item['size']) || isset($item['color']) )
                            <p style="font-size: 11px;" class="mb-0">
                                @if(isset($item['size']) && $item['size'])
                                    <strong>Size:</strong> {{ $item['size'] }}
                                @endif
                                @if(isset($item['color']) && $item['color'])
                                    <strong>Color:</strong> {{ $item['color'] }}
                                @endif
                            </p>
                        @endif
                        <div class="price-box">
                            <span class="product-quantity">{{ $item['quantity'] }}</span>
                            <span class="product-price mb-0">৳{{ number_format($item['offer_price'], 0) }} = </span>
                            <span class="product-total">৳{{ $item['offer_price'] * $item['quantity'] }}</span>
                        </div>
                    </div>
                    <figure class="product-media">
                        <a href="{{ route('product-details', $item['slug']) }}">
                            <img src="{{ asset($item['image_url']) }}" alt="product" height="84" width="94">
                        </a>
                    </figure>
                    <button class="btn btn-link btn-close" wire:click="removeItem('{{ $cartKey }}')" aria-label="button">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            @endforeach
        </div>
    @endif

     @if( empty($cart) )
        <div class="no-cart">
            <img src="{{asset('frontend/images/no-shopping-cart.png')}}" alt="">
            <h5>Your Cart is Empty</h5>
            <a href="{{route('shop')}}" class="btn btn-primary">
                Start shopping
                <i class="bi bi-arrow-right-circle-fill"></i>
            </a>
        </div>
    @endif

    @if( !empty($cart) )
        <div>
            <div class="cart-total">
                <label>Subtotal:</label>
                <span class="price">৳{{ number_format($this->getTotalAmount(), 2) }}</span>
            </div>

            <div class="cart-action">
                <a href="{{route('cart')}}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>

                @if( config('website_settings.guest_checkout') == 1 && Auth::check() )
                <a href="{{route('checkout')}}" class="btn btn-primary  btn-rounded">Checkout</a>
                @elseif( config('website_settings.guest_checkout') == 0 && !Auth::check() )
                <button class="btn btn-primary  btn-rounded"
                    onclick="message('warning', 'Please log in at first to checkout')">Checkout</button>
                @else
                <a class="btn btn-primary  btn-rounded" href="{{route('checkout')}}"> Checkout</a>
                @endif
            </div>
        </div>
    @endif
</div>
