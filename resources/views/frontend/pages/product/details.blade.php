@extends('frontend.layout.app')

@section('page-title')
    {{ $product->name }}
@endsection

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/photoswipe/photoswipe.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/photoswipe/default-skin/default-skin.min.css') }}">
    <style>
        .product-single .product-categories span:not(:last-child):after,
        .product-single .product-sku span:not(:last-child):after {
            display: none;
        }

        del {
            color: #ff0000d6;
            font-size: 20px;
            padding: 0 5px;
            font-weight: 600;
        }

        .offer-btn {
            color: #808080b8 !important;
            font-size: 15px;
            font-weight: 600;
        }

        .product-price .new-price {
            font-size: 26px;
        }

        .selectrating {
            border: none;
            display: inline-flex;
            flex-direction: row-reverse;
            /* Reverse the order of the stars */
        }

        .selectrating>input {
            display: none;
        }

        .selectrating>label:before {
            margin: 2px;
            font-size: 16px;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
            margin-bottom: 0;
        }

        .selectrating>label {
            color: #ddd;
            cursor: pointer;
        }

        /* Highlight stars on hover and selection */
        .selectrating>input:checked~label,
        .selectrating>label:hover,
        .selectrating>label:hover~label {
            color: #f93;
        }

        .comments .comment {
            padding: 2rem 0;
        }

        .submited-review ul li {
            display: block;
        }

        .submited-review .rating li {
            display: inline-block !important;
        }

        .submited-review h4 {
            font-size: 15px;
        }

        .submited-review i {
            font-size: 10px;
        }

        .submited-review {
            background: #F8F8F8;
            padding: 20px;
            margin-top: 25px;
            position: relative;
        }

        .delete-review {
            background: none;
            border: none;
            padding: 0;
            position: absolute;
            right: 15px;
            top: 12px;
        }

        .delete-review i {
            color: #ff4f4f;
            font-size: 15px
        }

        #product-tab-reviews .review-form .form-control {
            margin-bottom: 5px;
        }
        .product-details{
            background: transparent !important;
        }

    </style>
@endsection


@section('body-content')

    <!-- Start of Main -->
    <main class="main mb-10 pb-1">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav container">
            <ul class="breadcrumb bb-no">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>{{ $product->name }}</li>
            </ul>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg">

                    <div class="">
                        <div class="product product-single row">
                            <div class="col-md-6 mb-4 mb-md-8">
                                <div class="product-gallery product-gallery-sticky">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                        data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="{{ asset($product->thumb_image) }}"
                                                        data-zoom-image="{{ asset($product->thumb_image) }}" width="800"
                                                        height="900">
                                                </figure>
                                            </div>

                                            @foreach ($product->galleryImages ?? [] as $gellary)
                                                <div class="swiper-slide">
                                                    <figure class="product-image">
                                                        <img src="{{ asset($gellary->image) }}"
                                                            data-zoom-image="{{ asset($gellary->image) }}" width="488"
                                                            height="549">
                                                    </figure>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                        <a href="#" class="product-gallery-btn product-image-full"><i
                                                class="w-icon-zoom"></i></a>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container"
                                        data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">

                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">

                                            <div class="product-thumb swiper-slide">
                                                <img src="{{ asset($product->thumb_image) }}" alt="Product Thumb"
                                                    width="800" height="900">
                                            </div>

                                            @foreach ($product->galleryImages ?? [] as $gellary)
                                                <div class="product-thumb swiper-slide">
                                                    <img src="{{ asset($gellary->image) }}" alt="Product Thumb"
                                                        width="800" height="900">
                                                </div>
                                            @endforeach

                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-6 mb-md-8">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title">{{ $product->name }}</h1>
                                    @if (config('website_settings.product_info') == true)
                                        <div class="product-bm-wrapper">
                                            {{-- @if ($product->brand_id)
                                    <figure class="brand">
                                        <img src="{{ asset($product->brand->image) }}" alt="Brand" width="105"
                                            height="48" />
                                    </figure>
                                    @endif --}}
                                            <div class="product-meta mb-0">
                                                @if ($product->category_id && isset($product->category))
                                                    <div class="product-categories">
                                                        Category:
                                                        <span class="product-category"><a
                                                                href="{{ url('/shop') }}?categories[0]={{ $product->category_id }}">{{ $product->category->name ?? '' }}</a></span>
                                                        @if ($product->subcategory)
                                                            <span class="product-category"><a
                                                                    href="{{ url('/shop') }}?subcategories[0]={{ $product->subcategory_id }}"><i
                                                                        class="bi bi-arrow-right-short"></i>
                                                                    {{ $product->subcategory->name }}</a></span>
                                                            @if ($product->subsubcategory)
                                                                <span class="product-category"><a href="#"><i
                                                                            class="bi bi-arrow-right-short"></i>
                                                                        {{ $product->subsubcategory->name }}</a></span>
                                                            @endif
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif

                                    <hr class="product-divider">

                                    <div class="product-price">
                                        <ins class="new-price">
                                            {{ $product->offer_price }}৳
                                            @if ($product->discount_option == 2 || $product->discount_option == 3)
                                                @php
                                                    $discountPercentage = round(
                                                        ($product->discount_amount / $product->base_price) * 100,
                                                    );
                                                @endphp
                                                <del>{{ $product->base_price }}৳</del><span
                                                    class="offer-btn">({{ $discountPercentage }}% off)</span>
                                            @endif
                                        </ins>
                                    </div>

                                    {{-- rating --}}
                                    <livewire:frontend.product.review-count :productId="$product->id" />

                                    @if (!is_null($product->short_description) && $product->short_description !== '<p><br></p>')
                                        <div class="product-short-desc mb-3">
                                            {!! $product->short_description !!}
                                        </div>
                                    @endif

                                    <hr class="product-divider">

                                    <livewire:frontend.cart.add-cart :productId="$product->id" />

                                    <div class="social-links-wrapper">
                                        <div class="social-links">
                                            <div class="social-icons social-no-color border-thin">
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" class="social-icon social-facebook w-icon-facebook" target="_blank"></a>
                                                <a href="https://wa.me/?text={{ urlencode(url()->current()) }}" class="social-icon social-whatsapp fab fa-whatsapp" target="_blank"></a>
                                                <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}" class="social-icon social-youtube fab fa-linkedin-in" target="_blank"></a>
                                            </div>
                                        </div>
                                        <span class="divider d-xs-show"></span>

                                        <livewire:frontend.wishlist.towishlist :productId="$product->id">
                                            </livewire>
                                            <livewire:frontend.wishlist.add-wishlist></livewire>

                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a href="#product-tab-description" class="nav-link active">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#product-tab-specification" class="nav-link">Specification</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#product-tab-reviews" class="nav-link">Customer Reviews
                                        ({{ $product->reviews->count() }})</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="product-tab-description">
                                    <div class="row mb-4">
                                        @if (!is_null($product->long_description) && $product->long_description != '<p><br></p>')
                                            {!! $product->long_description !!}
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane" id="product-tab-specification">

                                </div>


                                <div class="tab-pane " id="product-tab-reviews">
                                    <livewire:frontend.product.product-review :productId="$product->id" />
                                </div>

                            </div>
                        </div>

                       @include('frontend.pages.product.related-product')
                    </div>

                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->


    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

        <!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
        <div class="pswp__bg"></div>

        <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">

            <!-- Container that holds slides.
                   PhotoSwipe keeps only 3 of them in the DOM to save memory.
                   Don't modify these 3 pswp__item elements, data is added later on. -->
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">

                <div class="pswp__top-bar">

                    <!--  Controls are self-explanatory. Order can be changed. -->

                    <div class="pswp__counter"></div>

                    <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>

                    <div class="pswp__preloader">
                        <div class="loading-spin"></div>
                    </div>
                </div>

                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>

                <button class="pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
                <button class="pswp__button--arrow--right" aria-label="Next (arrow right)"></button>

                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script>
        function setRating(value) {
            Livewire.emit('updatedRating', value);
        }
    </script>


    <script src="{{ asset('frontend/vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/zoom/jquery.zoom.js') }}"></script>


    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('cartAdded', function() {
                onAddToCartSingle();
            });
        });

        function onAddToCartSingle() {
            var $this = $('.btn-cart'), // fallback reference
                $alert = $('.main-content > .alert, .container > .alert'),
                productName;

            if ($alert.length) {
                $alert.fadeOut(function() {
                    $alert.fadeIn();
                })
            } else {
                productName = $('.product-single').find('.product-title').first().text();
                var alertHtml = '<div class="alert alert-success alert-cart-product mb-2">\
                                            <a href="{{ route('cart') }}" class="btn btn-success btn-rounded">View Cart</a>\
                                            <p class="mb-0 ls-normal">“' + productName + '” has been added to your cart.</p>\
                                            <a href="#" class="btn btn-link btn-close" aria-label="button">\
                                                <i class="close-icon"></i>\
                                            </a>\
                                        </div>';
                $('.product-single').first().before(alertHtml);
            }

            $('.product-sticky-content').trigger('recalc.pin');
        }
    </script>
@endsection
