@if (!$products->isEmpty())
    <section class="related-product-section">
        <div class="title-link-wrapper mb-4">
            <h4 class="title">Related Products</h4>
            <a href="{{ route('shop') }}" class="btn btn-dark btn-link btn-slide-right btn-icon-right">Shop
                Products<i class="w-icon-long-arrow-right"></i></a>
        </div>
        <div class="swiper-container swiper-theme"
            data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 3
                            }
                        }
                    }">

                <div class="swiper-wrapper row cols-lg-3 cols-md-4 cols-sm-3 cols-2">
                    @foreach ($products as $product)
                        <div class="swiper-slide product">
                            <div class="product-wrap">
                                <div class="product text-center position-relative">
                                    <figure class="product-media">
                                        <a href="{{ route('product-details', $product->slug) }}">
                                            <img src="{{ asset($product->thumb_image) }}" alt="Product" width="300"
                                                height="338" />
                                            @if ($product->back_image)
                                                <img src="{{ asset($product->back_image) }}" alt="Product" width="300"
                                                    height="338" />
                                            @endif
                                        </a>
                                        <div class="product-action-horizontal">
                                            <button wire:click="addToCart({{ $product->id }})"
                                                class="btn-product-icon w-icon-cart btn-cart"
                                                style="{{ $product->productStock->count() > 0 ? 'display: none;' : '' }}"
                                                title="Add to cart"></button>

                                            <button class="btn-product-icon w-icon-cart quickview" data-bs-toggle="modal"
                                                data-bs-target="#quick-view" data-product-id="{{ $product->id }}"
                                                style="{{ $product->productStock->count() == 0 ? 'display: none;' : '' }}"
                                                title="Select Color & Size"></button>

                                            @if (config('website_settings.show_wishlist') == true)
                                                @if (in_array($product->id, $wishlist))
                                                    <button class="btn-product-icon btn-wishlist w-icon-heart-full added"
                                                        style="color:#F4442C;"
                                                        wire:click="$emit('removeFromWishlist', {{ $product->id }})"
                                                        title="Wishlist"></button>
                                                @else
                                                    <button class="btn-product-icon btn-wishlist w-icon-heart"
                                                        wire:click="$emit('get_id', {{ $product->id }})"
                                                        title="Wishlist"></button>
                                                @endif
                                            @endif

                                            <button class="btn-product-icon btn-quickview w-icon-search quickview"
                                                data-bs-toggle="modal" data-bs-target="#quick-view"
                                                data-product-id="{{ $product->id }}" title="Quick View"></button>
                                        </div>
                                    </figure>


                                    <div class="product-details">
                                        @if ($product->category_id)
                                            <div class="product-cat">
                                                <a
                                                    href="{{ route('product-details', $product->slug) }}">{{ $product->category->name ?? '' }}</a>
                                            </div>
                                        @endif
                                        <h3 class="product-name">
                                            <a
                                                href="{{ route('product-details', $product->slug) }}">{{ Str::limit($product->name, 20, '...') }}</a>
                                        </h3>

                                        @if (config('website_settings.show_review') == true)
                                            @php
                                                $reviews = \App\Models\Review::where('product_id', $product->id)->get();
                                                $averageRating = round($reviews->avg('rating'), 1);
                                                $ratingPercentage = ($averageRating / 5) * 100;
                                            @endphp

                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: {{ $ratingPercentage }}%;"></span>
                                                    <span class="tooltiptext tooltip-top">{{ $averageRating }} out of
                                                        5</span>
                                                </div>
                                                <span class="rating-reviews">
                                                    ({{ $reviews->count() }} reviews)
                                                </span>
                                            </div>
                                        @endif

                                        <div class="product-pa-wrapper">
                                            <div class="product-price">
                                                {{ $product->offer_price }}৳
                                                @if ($product->discount_option == 2 || $product->discount_option == 3)
                                                    <del class="text-danger opacity-80"
                                                        style="font-size: 14px;padding-left:3px;">{{ $product->base_price }}৳
                                                    </del>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($product->discount_option == 2 || $product->discount_option == 3)
                                    @php
                                        $discountPercentage = round(
                                            ($product->discount_amount / $product->base_price) * 100,
                                        );
                                    @endphp

                                    <span class="discountvalue">-{{ $discountPercentage }}%</span>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>
@endif
