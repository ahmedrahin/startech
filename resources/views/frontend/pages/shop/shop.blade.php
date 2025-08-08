@extends('frontend.layout.app')

@section('page-title')
    Shop Products 
@endsection

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/nouislider/nouislider.min.css') }}">
@endsection

@section('body-content')
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->
        <livewire:frontend.cart.quick-view />
        <livewire:frontend.wishlist.add-wishlist></livewire>
            
            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <!-- Start of Shop Category -->
                    <div class="shop-default-category category-ellipse-section mb-6">
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

                            <div
                                class="swiper-wrapper row gutter-lg cols-xl-8 cols-lg-7 cols-md-6 cols-sm-4 cols-xs-3 cols-2">


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
                    <!-- End of Shop Category -->

                    <!-- Start of Shop Content -->
                    <div class="shop-content row gutter-lg mb-10">
                        <!-- Start of Sidebar, Shop Sidebar -->
                        <livewire:frontend.shop.product-filter />
                        <!-- End of Shop Sidebar -->
                        
                        <div class="main-content">
                           <div class="tagsandsorting">
                                <livewire:frontend.shop.selected-tags 
                                    :initial-categories="request()->get('categories', [])" 
                                    :initial-subcategories="request()->get('subcategories', [])"
                                    :initial-subsubcategories="request()->get('subsubcategories', [])" 
                                />
                                <livewire:frontend.shop.sorting></livewire>
                           </div>
                            <livewire:frontend.shop.shop-product></livewire>
                        </div>

                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
    </main>
@endsection


@section('page-script')
   


@endsection
