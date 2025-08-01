@extends('frontend.layout.app')

@section('page-title')
    Home
@endsection

@section('page-css')
    <style>
        .banner .intro-wrapper {
            margin: 0 !important;
        }
    </style>
@endsection

@section('body-content')
     <livewire:frontend.cart.quick-view />
    {{-- add wishlist --}}
    <livewire:frontend.wishlist.add-wishlist></livewire>

    <main class="main">
        <div class="">
            <div class="row">
                <div class="intro-slide-wrapper col-md-12 mb-4">
                    <div class="swiper-container swiper-theme pg-inner animation-slider"
                        data-swiper-options="{
                                'nav': false,
                                'dots': true,
                                'slidesPerView': 1,
                                'autoplay': {
                                    'delay': 8000,
                                    'disableOnInteraction': false
                                }}">

                        <div class="swiper-wrapper row gutter-no cols-1">
                            @foreach (App\Models\HomeSlider::get() as $banner)
                                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                                    style="background-image: url({{ asset($banner->image) }}); background-color: #E7ECF0;">

                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container banner pb-10 mb-2">

            <div class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm bg-white mt-2 mb-8"
                data-swiper-options="{
                    'spaceBetween': 0,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }}">
                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                    <div class="swiper-slide icon-box icon-box-side text-dark">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-call"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder">Call Us</h4>
                            <p class="text-default">{{ config('app.phone') }}</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="swiper-slide icon-box icon-box-side text-dark icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bolder">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
            </div>

            @livewire('frontend.home.product-collections')

        </div>


        <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
            <div class="container pb-2">
                <h2 class="title justify-content-center pt-1 ls-normal mb-10">Top Categories</h2>
                <div class="shop-default-category category-ellipse-section mb-0" style="border: none;padding:0;">
                        <div class="swiper-container swiper-theme shadow-swiper"
                            data-swiper-options="{
                              'spaceBetween': 20,
                              'slidesPerView': 2,
                              'breakpoints': {
                                  '480': {
                                      'slidesPerView': 3
                                  },
                                  '576': {
                                      'slidesPerView': 4
                                  },
                                  '768': {
                                      'slidesPerView': 6
                                  },
                                  '992': {
                                      'slidesPerView': 7
                                  },
                                  '1200': {
                                      'slidesPerView': 8,
                                      'spaceBetween': 30
                                  }
                              }
                          }">

                            <div class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">

                                @foreach (App\Models\Category::where('featured', 1)->where('status', 1)->latest()->get() as $category)
                                    <div class="swiper-slide category-wrap">
                                        <div class="category category-ellipse">
                                            <figure class="category-media">
                                                <a href="{{ url('/shop') }}?categories[0]={{ $category->id }}">
                                                    <img src="{{ asset($category->image) }}" alt="Categroy" width="190"
                                                        height="190" style="background-color: #5C92C0;" />
                                                </a>
                                            </figure>
                                            <div class="category-content">
                                                <h4 class="category-name">
                                                    <a href="{{ url('/shop') }}?categories[0]={{ $category->id }}">{{ $category->name }} </a>
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
            </div>
        </section>


        <div class="container">
            <div class="vendor-wrapper mt-10 mb-6">
                <livewire:frontend.home.highlighted-product/>
            </div>



        </div>
    </main>
@endsection

@section('page-script')

@endsection
