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
    <nav class="navbar" id="main-nav">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item has-child">
                    <a class="nav-link" href="https://www.startech.com.bd/desktops">Desktop</a>
                    <ul class="drop-down drop-menu-1">
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/special-pc">Desktop Offer</a>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/desktops/star-pc">Star PC</a>
                            <ul class="drop-down drop-menu-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/intel-pc">Intel PC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/ryzen-pc">Ryzen PC</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/desktops/gaming-pc">Gaming PC</a>
                            <ul class="drop-down drop-menu-2">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/gaming-pc/intel-gaming-pc">Intel
                                        PC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/gaming-pc/amd-gaming-pc">RYZEN
                                        PC</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc">Brand PC</a>
                            <ul class="drop-down drop-menu-2">
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/brand-pc/acer-desktop">Acer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/brand-pc/asus-desktop">ASUS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/brand-pc/dell-desktop">Dell</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/brand-pc/hp-desktop">HP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/brand-pc/lenovo-desktop">Lenovo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/msi-brand-pc">MSI</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/desktops/all-in-one-pc">All-in-One
                                PC</a>
                            <ul class="drop-down drop-menu-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/dell-all-in-one-pc">Dell</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-all-in-one-pc">HP</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/asus-all-in-one-pc">ASUS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/desktops/all-in-one-pc/lenovo-all-in-one">LENOVO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/teclast-all-in-one-pc">Teclast</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/aoc-all-in-one-pc">AOC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/smart-all-in-one-pc">Smart</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/desktops/portable-mini-pc">Portable
                                Mini PC</a>
                            <ul class="drop-down drop-menu-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/asus-mini-pc"> Asus</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="https://www.startech.com.bd/zotac-portable-mini-pc">Zotac</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/apple-mac-mini">Apple Mac Mini</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/apple-imac">Apple iMac</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/apple-mac-studio">Apple Mac
                                Studio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/apple-mac-pro">Apple Mac Pro</a>
                        </li>
                        <li>
                            <a href="https://www.startech.com.bd/desktops" class="see-all">Show All Desktop</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>


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
