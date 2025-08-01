<div>

    <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
        @if (!$products->isEmpty())
            @foreach ($products as $product)
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
                                            wire:click="$emit('get_id', {{ $product->id }})" title="Wishlist"></button>
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
                                        href="{{ url('/shop') }}?categories[0]={{ $product->category_id }}">{{ $product->category->name ?? '' }}</a>
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
                                        <span class="tooltiptext tooltip-top">{{ $averageRating }} out of 5</span>
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
                            $discountPercentage = round(($product->discount_amount / $product->base_price) * 100);
                        @endphp

                        <span class="discountvalue">-{{ $discountPercentage }}%</span>
                    @endif
                </div>
            @endforeach
        @endif
    </div>

    @if ($products->isEmpty())
        <div class="alert alert-danger mt-5">No products found.</div>
    @endif

    @if (!$products->isEmpty())
        <div class="toolbox toolbox-pagination justify-content-between">
            <p class="showing-info mb-2 mb-sm-0">
                Showing <span>{{ $products->firstItem() }}–{{ $products->lastItem() }} of
                    {{ $products->total() }}</span>
                Products
            </p>

            <ul class="pagination">
                {{-- Previous Page Link --}}
                <li class="prev {{ $products->onFirstPage() ? 'disabled' : '' }}">
                    <a href="#" wire:click.prevent="previousPage" aria-label="Previous">
                        <i class="w-icon-long-arrow-left"></i>Prev
                    </a>
                </li>

                {{-- Pagination Elements --}}
                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $products->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="#"
                            wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Next Page Link --}}
                <li class="next {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                    @if ($products->hasMorePages())
                        <a href="#" wire:click.prevent="nextPage" aria-label="Next">
                            Next<i class="w-icon-long-arrow-right"></i>
                        </a>
                    @else
                        <span>Next<i class="w-icon-long-arrow-right"></i></span>
                    @endif
                </li>
            </ul>

        </div>
    @endif
</div>
