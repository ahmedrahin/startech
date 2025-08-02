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

    <div class="bg-gray content p-tb-30">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-9">
                    <div class="home-slider">
                        @foreach (App\Models\HomeSlider::get() as $banner)
                            <div class="slide" itemprop="itemListElement">
                                <a href="{{ url('/') }}" itemprop="url">
                                    <img src="{{ asset($banner->image) }}"  class="img-responsive" width="982" height="500"
                                        itemprop="contentUrl" /></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-3">
                    <div class="mdl-compare">
                        <h4>Compare Products</h4>
                        <p>Choose Two Products to Compare</p>
                        <form method="post" action="common/compare/add" class="form-cmpr">
                            <input type="hidden" name="product_id">
                            <div class="cmpr-field">
                                <i class="material-icons">search</i>
                                <input class="cmpr-product" type="text" placeholder="Search and Select Product" />
                                <input type="hidden" class="prod-id">
                            </div>
                            <div class="cmpr-field">
                                <i class="material-icons">search</i>
                                <input class="cmpr-product" type="text" placeholder="Search and Select Product" />
                                <input type="hidden" class="prod-id">
                            </div>
                            <button class="btn st-outline">View Comparison</button>
                        </form>
                    </div>
                    <div class="ads loaded"><a href="https://www.startech.com.bd/career"><img
                                src="https://www.startech.com.bd/image/catalog/home/job-career-2024.webp"
                                alt="Home | Career" width="300" height="193"></a></div>
                </div>
            </div>
            <div class="sliding_text_wrap">
                <marquee direction="left">Friday, 01 August, All our outlets are open except Mymensingh, Rajshahi,
                    Chattogram Agrabad, Rangpur &amp; Khulna Branch. Additionally, our online activities are open
                    and operational.</marquee>
            </div>
            <div class="row r-lnk-wrap m-home">
                <div class="col-lg-3 col-md-6 col-sm-6"><a href="tool/finder" class="c-card ws-box">
                        <div class="ic"><i class="material-icons">laptop</i></div>
                        <div><span class="blurb">Laptop Finder</span>
                            <p class="m-hide">Find Your Laptop Easily</p>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://complain.startech.info.bd/" target="_blank"
                        rel="noopener" class="c-card ws-box">
                        <div class="ic"><i class="material-icons">feedback</i></div>
                        <div><span class="blurb">Raise a Complain</span>
                            <p class="m-hide">Share your experience</p>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://service.startech.com.bd/home-service"
                        target="_blank" rel="noopener" class="c-card ws-box">
                        <div class="ic"><i class="material-icons">home</i></div>
                        <div><span class="blurb">Home Service
                            </span>
                            <p class="m-hide">Get expert help.
                            </p>
                        </div>
                    </a></div>
                <div class="col-lg-3 col-md-6 col-sm-6"><a href="https://service.startech.com.bd/" target="_blank"
                        rel="noopener" class="c-card ws-box">
                        <div class="ic"><i class="material-icons">settings</i></div>
                        <div><span class="blurb">Servicing Center</span>
                            <p class="m-hide">Repair Your Device</p>
                        </div>
                    </a></div>
            </div>
            <div class="m-home m-cat">
                <h2 class="m-header">Featured Category</h2>
                <p class="m-blurb">Get Your Desired Product from Featured Category!</p>
                <div class="cat-items-wrap">
                    <div class="cat-item">
                        <a href="https://www.startech.com.bd/drone" class="cat-item-inner">
                            <span class="cat-icon"><img
                                    src="https://www.startech.com.bd/image/cache/catalog/category-thumb/drone-48x48.png"
                                    alt="Drone Icon" width="48" height="48"></span>
                            <p>Drone</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="m-compare m-home" id="module-2068">
                <h3 class="m-header">Featured Comparisons</h3>
                <p class="m-blurb">Compare &amp; Choose Your Desired Product!</p>
                <div class="cmp-items-wrap p-items-wrap">
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/haier-1-6-ton-energycool-ac"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/air-conditioner/haier/hsu-18energycool/hsu-12energycool-official-200x200.webp"
                                                alt="Haier 1.6 Ton EnergyCool Inverter AC" width="228"
                                                height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/haier-1-6-ton-energycool-ac">Haier 1.6
                                                Ton EnergyCool Inverter AC</a></h4>
                                        <div class="p-item-price">
                                            55,493৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/midea-1-5-ton-inverter-ac"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/air-conditioner/midea/msi-12crn/msi-12crn-official-200x200.webp"
                                                alt="Midea 1.5 Ton Inverter AC" width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/midea-1-5-ton-inverter-ac">Midea 1.5
                                                Ton Inverter AC</a></h4>
                                        <div class="p-item-price">
                                            54,686৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=40612,39793">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/tecno-spark-40-pro"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/mobile/tecno/spark-40-pro/spark-40-pro-ink-black-official-200x200.webp"
                                                alt="Tecno SPARK 40 Pro" width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/tecno-spark-40-pro">Tecno SPARK 40
                                                Pro</a></h4>
                                        <div class="p-item-price">
                                            19,690৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a href="https://www.startech.com.bd/vivo-y29"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/mobile/vivo/y29/vivo-y29-elegant-white-01-200x200.webp"
                                                alt="Vivo Y29" width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a href="https://www.startech.com.bd/vivo-y29">Vivo
                                                Y29</a></h4>
                                        <div class="p-item-price">
                                            19,999৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=43393,40469">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/haylou-solar-5"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/smart-watch/haylou/solar-5/solar-5-metal-strap-black-official-200x200.webp"
                                                alt="Haylou Solar 5 Smart Watch with Metallic Strap" width="228"
                                                height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/haylou-solar-5">Haylou Solar 5 Smart
                                                Watch with Metallic Strap</a></h4>
                                        <div class="p-item-price">
                                            5,990৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/amazfit-bip-5-unity-bluetooth-calling-smart-watch"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/smartwatch/amazfit/bip-5-unity/bip-5-unity-grey-official-200x200.webp"
                                                alt="Amazfit Bip 5 Unity" width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/amazfit-bip-5-unity-bluetooth-calling-smart-watch">Amazfit
                                                Bip 5 Unity</a></h4>
                                        <div class="p-item-price">
                                            5,490৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=38458,36370">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/oraimo-spacebuds-neo-tws-earbuds"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/earbuds/oraimo/spacebuds-neo/spacebuds-neo-mysterious-blue-200x200.webp"
                                                alt="Oraimo SpaceBuds Neo" width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/oraimo-spacebuds-neo-tws-earbuds">Oraimo
                                                SpaceBuds Neo</a></h4>
                                        <div class="p-item-price">
                                            1,300৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/xiaomi-haylou-x1-neo-true-wireless-earbuds"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/earbuds/xiaomi/haylou-x1-neo/haylou-x1-neo-02-200x200.webp"
                                                alt="Haylou X1 Neo True Wireless Earbuds" width="228"
                                                height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/xiaomi-haylou-x1-neo-true-wireless-earbuds">Haylou
                                                X1 Neo True Wireless Earbuds</a></h4>
                                        <div class="p-item-price">
                                            1,390৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=39802,27038">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/aoc-22b20jh2-fhd-monitor"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/monitor/aoc/24b20jh2/24b20jh2-08-200x200.webp"
                                                alt="AOC 22B20JH2 22&quot; 100Hz 1ms IPS FHD Monitor" width="228"
                                                height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/aoc-22b20jh2-fhd-monitor">AOC 22B20JH2
                                                22&quot; 100Hz 1ms IPS FHD Monitor</a></h4>
                                        <div class="p-item-price">
                                            12,000৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/msi-pro-mp225-fhd-monitor"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/monitor/msi/pro-mp225/pro-mp225-04-200x200.webp"
                                                alt="MSI PRO MP225 21.5&quot; 100Hz IPS FHD Monitor" width="228"
                                                height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/msi-pro-mp225-fhd-monitor">MSI PRO
                                                MP225 21.5&quot; 100Hz IPS FHD Monitor</a></h4>
                                        <div class="p-item-price">
                                            12,800৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=40561,34983">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                    <div class="cmp-item p-item">
                        <div class="cmp-item-inner ws-box">
                            <div class="cmp-p-item-wrap">
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-15iru8-i3-13th-gen-laptop-with-fingerprint"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i-15iru8/ideapad-slim-3i-15iru8-01-200x200.webp"
                                                alt="Lenovo IdeaPad Slim 3i 15IRU8 Core i3 13th Gen 15.6&quot; FHD Military Grade Laptop with Fingerprint"
                                                width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-15iru8-i3-13th-gen-laptop-with-fingerprint">Lenovo
                                                IdeaPad Slim 3i 15IRU8 Core i3 13th Gen 15.6&quot; FHD Military Grade
                                                Laptop with Fingerprint</a></h4>
                                        <div class="p-item-price">
                                            59,500৳ </div>
                                    </div>
                                </div>
                                <div class="cmp-p-item">
                                    <div class="cmp-p-item-img"> <a
                                            href="https://www.startech.com.bd/asus-vivobook-go-15-l1504fa-ryzen-5-7520u-laptop"><img
                                                src="https://www.startech.com.bd/image/cache/catalog/laptop/asus/vivobook-go-15-l1504fa/vivobook-go-15-l1504fa-mixed-black-01-200x200.webp"
                                                alt="ASUS Vivobook Go 15 L1504FA Ryzen 5 7520U 15.6&quot; FHD Laptop"
                                                width="228" height="228" /></a></div>
                                    <div class="cmp-p-item-details">
                                        <h4 class="p-item-name"> <a
                                                href="https://www.startech.com.bd/asus-vivobook-go-15-l1504fa-ryzen-5-7520u-laptop">ASUS
                                                Vivobook Go 15 L1504FA Ryzen 5 7520U 15.6&quot; FHD Laptop</a></h4>
                                        <div class="p-item-price">
                                            59,500৳ </div>
                                    </div>
                                </div> <span class="vs">VS</span>
                            </div>
                            <div class="actions">
                                <a class="st-btn full-compare"
                                    href="https://www.startech.com.bd/common/compare/add?product_id=34358,39896">Full
                                    Comparison</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-home store-finder ws-box p-30">
                <div class="row" style="align-items: center">
                    <div class="col-md-7 col-sm-12 info d-fc">
                        <div class="ic"><i class="material-icons lg">place</i></div>
                        <div class="txt">
                            <h3>20+ Physical Stores</h3>
                            <p>Visit Our Store & Get Your Desired IT Product!</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 store-find"><a href="information/contact" class="btn find d-fc">Find
                            Our Store<i class="material-icons">search</i></a></div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="m-product m-home" id="module-481">
                <h3 class="m-header">Featured Products</h3>
                <p class="m-blurb">Check &amp; Get Your Desired Product!</p>
                <div class="p-items-wrap">

                    @foreach (App\Models\Product::activeProducts()->where('is_featured', 1)->latest()->get() as $product)
                        <div class="p-item">
                            <div class="p-item-inner">
                                <div class="marks">
                                    <span class="mark">Save: 9,360৳ (-18%)</span>
                                </div>
                                <div class="p-item-img">
                                    <a href="{{ route('product-details', $product->slug) }}">
                                        <img src="{{ asset($product->thumb_image) }}" alt="{{ $product->name }}" width="228" height="228" /></a>
                                </div>
                                <div class="p-item-details">
                                    <h4 class="p-item-name"> 
                                        <a href="{{ route('product-details', $product->slug) }}">{{ $product->name }}</a>
                                    </h4>

                                    <div class="p-item-price">
                                        <span class="price-new">{{ $product->offer_price }}৳</span>
                                        @if ($product->discount_option != 1 )
                                            <span class="price-old">{{ $product->base_price }}৳</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>

@endsection

@section('page-script')

@endsection


