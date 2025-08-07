<header id="header">
    <div class="top">
        <div class="container">
            <div class="ht-item logo">
                <div class="mbl-nav-top h-desk">
                    <div id="nav-toggler">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <a class="brand" href="{{ url('/') }}"><img
                        src="{{ asset(config('app.logo')) }}" title="Star Tech Ltd " width="144"
                        height="164" alt="Star Tech Ltd "></a>
                <div class="mbl-right h-desk">
                    <div class="ac search-toggler"><i class="material-icons">search</i></div>
                    <div class="ac mc-toggler"><i class="material-icons">shopping_basket</i><span class="counter"
                            data-count="0">0</span></div>
                </div>
            </div>
           
            <livewire:frontend.shop.search-box />

            <div class="ht-item q-actions">
                <a href="https://www.startech.com.bd/information/offer" class="ac h-offer-icon">
                    <div class="ic"><i class="material-icons">card_giftcard</i></div>
                    <div class="ac-content">
                        <h5>Offers</h5>
                        <p>Latest Offers</p>
                    </div>
                </a>
                <a href="https://www.startech.com.bd/happy-hour" class="ac h-offer-icon">
                    <div class="ic"><i class="material-icons blink">flash_on</i></div>
                    <div class="ac-content">
                        <h5>Happy Hour</h5>
                        <p>Special Deals</p>
                    </div>
                </a>
                <a href="https://www.startech.com.bd/tool/pc_builder" class="ac h-desk build-pc">
                    <div class="ic"><i class="material-icons">important_devices</i></div>
                    <div class="ac-content">
                        <h5 class="text">PC Builder</h5>
                    </div>
                </a>
                <div class="ac cmpr-toggler h-desk">
                    <div class="ic"><i class="material-icons">library_add</i></div>
                    <div class="ac-content">
                        <h5 class="text">Compare (0)</h5>
                    </div>
                </div>


                @if( !auth()->check() )
                    <div class="ac">
                        <a class="ic" href="{{ route('user.login') }}"><i
                                class="material-icons">person</i></a>
                        <div class="ac-content">
                            <a href="{{ route('user.login') }}">
                                <h5>Account</h5>
                            </a>
                            <p><a href="{{ route('register') }}">Register</a> or <a
                                    href="{{ route('user.login') }}">Login</a></span></p>
                        </div>
                    </div>
                @else
                    @php
                        $route = Auth::user()->isAdmin == 1 ? route('admin-management.admin-list.show', Auth::id()) : route('user.dashboard');
                    @endphp
                    <div class="ac">
                        <a class="ic" href="{{ $route }}"><i
                                class="material-icons">person</i></a>
                        <div class="ac-content">
                            <a href="{{ $route }}">
                                <h5>Account</h5>
                            </a>
                            <p>
                                <a href="{{ $route }}">Profile</a> or
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></span></p>
                        </div>
                    </div>
                @endif

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

                <div class="ac build-pc m-hide">
                    <a class="btn" href="">PC Builder</a>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.includes.menu-category')

</header>

<div class="f-btn mc-toggler" id="cart">
    <i class="material-icons">shopping_basket</i>
    <div class="label">Cart</div>
    <livewire:frontend.cart.btn-cart />
</div>

<div class="f-btn cmpr-toggler" id="cmpr-btn">
    <i class="material-icons">library_add</i>
    <div class="label">Compare</div>
    <span class="counter">0</span>
</div>

<div class="drawer cmpr-panel " id="cmpr-panel">
    <div class="title">
        <p>Compare Product</p>
        <span class="cmpr-toggler"><i class="material-icons">close</i></span>
    </div>
    <div class="content">
        <div class="loader"></div>
    </div>
    <div class="footer btn-wrap"></div>
</div>

<livewire:frontend.cart.shopping-cart />
