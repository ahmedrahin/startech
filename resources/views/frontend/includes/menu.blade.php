<header class="header">

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                </a>
                <a href="{{ url('/') }}" class="logo ml-lg-0">
                    <img src="{{ asset(config('app.logo')) }}" alt="logo"  height="45" />
                </a>
                <nav class="main-nav">
                    <ul class="menu">
                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="{{ request()->is('shop*') ? 'active' : '' }}">
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a href="{{ route('contact') }}">Contact Us</a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="header-right ml-4">

                @if (auth()->check())
                     @php
                        $route = Auth::user()->isAdmin == 1 ? route('admin-management.admin-list.show', Auth::id()) : route('user.dashboard');
                    @endphp
                    <div class="account align-items-center d-sm-show">
                        <a class="login inline-type d-flex ls-normal" href="{{ $route }}">
                            <i class="w-icon-account d-flex align-items-center justify-content-center br-50"></i>
                            <span class="d-flex flex-column justify-content-center ml-1 d-xl-show">
                                <b class="d-block font-weight-bold ls-25">{{ auth()->user()->name }}</b>
                            </span>
                        </a>
                    </div>
                @else
                <div class="account align-items-center d-sm-show m-0">
                    <a class="login inline-type d-flex ls-normal" href="{{ route('user.login') }}">
                        <span class="d-flex flex-column justify-content-center  d-xl-show" style="font-weight: 500;">
                            Login
                        </span>
                    </a>
                </div>
                <span class="m-2">/</span>
                <div class="account align-items-center d-sm-show m-0">
                    <a class="login inline-type d-flex ls-normal" href="{{ route('register') }}">
                        <span class="d-flex flex-column justify-content-center  d-xl-show" style="font-weight: 500;">
                            Register
                        </span>
                    </a>
                </div>
                @endif
                <span class="mr-6 d-xl-show"></span>
                <div class="dropdown cart-dropdown search-boxmenu for-mobile">
                    <i class="w-icon-search" onclick="toggleSearchBox()" style="margin-right: 0 !important"></i>
                </div>

                <div class="dropdown cart-dropdown mr-0 mr-4">
                    <div class="cart-overlay"></div>
                    <a href="{{ route('wishlist') }}" class="cart-toggle label-down link">
                        <i class="w-icon-heart">
                            <livewire:frontend.wishlist.count-wishlist />
                        </i>
                        <span class="cart-label">Wishlist</span>
                    </a>
                </div>

                <div class="dropdown cart-dropdown cart-offcanvas mr-0">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <livewire:frontend.cart.btn-cart />
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>

                    <livewire:frontend.cart.shopping-cart />
                </div>

            </div>
        </div>
        <livewire:frontend.shop.search-box-mobile />
    </div>
    <!-- End of Header Middle -->

    <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left flex-1">
                    <div class="dropdown category-dropdown has-border" data-visible="true">
                        <a href="#" class="category-toggle text-white " role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories"
                            style="border:none;">
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                @foreach( App\Models\Category::with('subcategories')->where('status', 1)->get() as $category )

                                <li class="{{ $category->subcategories->count() > 0 ? 'has-submenu' : '' }}">
                                    <a href="{{ url('/shop') }}?categories[0]={{ $category->id }}">
                                        <i class="w-icon-{{ Str::lower($category->name) }}"></i>
                                        <span class="cat-name">{{ $category->name }}</span>
                                    </a>
                                    @if($category->subcategories->count() > 0)
                                        <ul class="megamenu">
                                            <li>
                                                <ul>
                                                    @foreach($category->subcategories as $subcategory)
                                                    <li>
                                                        <a href="{{ url('/shop') }}?subcategories[0]={{ $subcategory->id }}">
                                                            {{ $subcategory->name }}
                                                        </a>
                                                        @if($subcategory->subsubcategories->count() > 0)
                                                            <ul class="sub-submenu">
                                                                @foreach($subcategory->subsubcategories as $subsubcategory)
                                                                <li>
                                                                    <a href="{{ url('/shop') }}?subsubcategories[0]={{ $subsubcategory->id }}">
                                                                        {{ $subsubcategory->name }}
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <livewire:frontend.shop.search-box />
                </div>
                <div class="header-right">
                    <a href="mailto:{{ config('app.email') }}" class="d-xl-show"><i class="w-icon-envelop-closed"></i>{{
                        config('app.email') }}</a>
                    <a href="tel:{{ config('app.phone') }}"><i class="w-icon-call"></i>{{ config('app.phone') }}</a>
                </div>
            </div>
        </div>
    </div>

</header>
