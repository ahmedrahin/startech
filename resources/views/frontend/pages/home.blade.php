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
                    <div class="home-slider" itemscope itemtype="https://schema.org/ItemList">
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ImageObject">
                            <a href="https://www.startech.com.bd/sony-wh-1000xm6-headphone" itemprop="url"><img
                                    src="https://www.startech.com.bd/image/cache/catalog/home/banner/2025/Sony-WH-1000XM6-Noise-Cancelling-Wireless-Headphone-(Official)-982x500.webp"
                                    alt="Sony " class="img-responsive" width="982" height="500"
                                    itemprop="contentUrl" /></a>
                            <meta itemprop="position" content="1" />
                            <meta itemprop="name" content="Sony " />
                            <meta itemprop="caption" content="" />
                        </div>
                        <meta itemprop="name" content="Homepage Banners" />
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ImageObject">
                            <a href="https://www.startech.com.bd/information/offer/info?offer_id=1264"
                                itemprop="url"><img
                                    src="https://www.startech.com.bd/image/cache/catalog/home/banner/2025/bkash-offer-web-banner-982x500.webp"
                                    alt="Bkash Offer" class="img-responsive" width="982" height="500"
                                    itemprop="contentUrl" /></a>
                            <meta itemprop="position" content="2" />
                            <meta itemprop="name" content="Bkash Offer" />
                            <meta itemprop="caption" content="" />
                        </div>
                        <meta itemprop="name" content="Homepage Banners" />
                        <div class="slide" itemprop="itemListElement" itemscope
                            itemtype="https://schema.org/ImageObject">
                            <a href="https://www.startech.com.bd/starlink" itemprop="url"><img
                                    src="https://www.startech.com.bd/image/cache/catalog/home/banner/2025/star-link-home-banner-july-982x500.webp"
                                    alt="Star link " class="img-responsive" width="982" height="500"
                                    itemprop="contentUrl" /></a>
                            <meta itemprop="position" content="3" />
                            <meta itemprop="name" content="Star link " />
                            <meta itemprop="caption" content="" />
                        </div>
                        <meta itemprop="name" content="Homepage Banners" />
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
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 9,360৳ (-18%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/gree-1-ton-non-inverter-ac-gs-12xmu32"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/air-conditioner/gree/gs-12xmu32/gs-12xmu32-official-200x200.webp"
                                        alt="Gree 1 Ton Muse-Split Non-Inverter AC" width="228" height="228" /></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/gree-1-ton-non-inverter-ac-gs-12xmu32">Gree 1
                                        Ton Muse-Split Non-Inverter AC</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">42,640৳</span> <span class="price-old">52,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 12,918৳ (-19%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/gree-1-5-ton-non-inverter-ac"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/air-conditioner/gree/gs-18xcm32/gs-18xcm32-official-200x200.webp"
                                        alt="Gree 1.5 Ton Non-Inverter AC" width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/gree-1-5-ton-non-inverter-ac">Gree 1.5 Ton
                                        Non-Inverter AC</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">55,072৳</span> <span class="price-old">67,990৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 3,150৳ (-6%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/amd-ryzen-7-7700-budget-gaming-pc"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/desktop-pc/desktop-offer/amd-ryzen-7-7700-budget-gaming-pc-05-200x200.webp"
                                        alt="AMD Ryzen 7 7700 Budget Gaming Desktop PC" width="228" height="228" /></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/amd-ryzen-7-7700-budget-gaming-pc">AMD Ryzen 7
                                        7700 Budget Gaming Desktop PC</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">52,999৳</span> <span class="price-old">56,149৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/amd-ryzen-5-3400g-processor-desktop-pc"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/desktop-pc/desktop-offer/38903-000100-200x200.webp"
                                        alt="AMD Ryzen 5 3400G Processor Desktop PC" width="228" height="228" /></a>
                            </div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/amd-ryzen-5-3400g-processor-desktop-pc">AMD
                                        Ryzen 5 3400G Processor Desktop PC</a></h4>
                                <div class="p-item-price">
                                    23,950৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 4,001৳ (-13%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/black-shark-pad-6-11-inch-tablet"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/tablet-pc/black-shark/pad-6/black-shark-pad-6-grey-with-cover-200x200.webp"
                                        alt="Black Shark Pad 6 8GB RAM 256GB Storage 11&quot; FHD+ Tablet With Flip Cover (Dual Sim Supported)"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/black-shark-pad-6-11-inch-tablet">Black Shark
                                        Pad 6 8GB RAM 256GB Storage 11&quot; FHD+ Tablet With Flip Cover
                                        (Dual Sim Supported)</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">25,999৳</span> <span class="price-old">30,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 299৳ (-8%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/xinji-nothing-2-smart-watch"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/smart-watch/xinji/nothing-2/nothing-2-black-official-200x200.webp"
                                        alt="XINJI NOTHING 2 Smart Watch" width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/xinji-nothing-2-smart-watch">XINJI NOTHING 2
                                        Smart Watch</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">3,500৳</span> <span class="price-old">3,799৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Earn Point: 100</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/aoc-25b36h-24-5-inch-120hz-fhd-ips-monitor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/monitor/aoc/25b26h/25b26h-01-200x200.webp"
                                        alt="AOC 25B36H 24.5&quot; 120Hz 1ms FHD IPS Monitor" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/aoc-25b36h-24-5-inch-120hz-fhd-ips-monitor">AOC
                                        25B36H 24.5&quot; 120Hz 1ms FHD IPS Monitor</a></h4>
                                <div class="p-item-price">
                                    15,900৳ </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 5,000৳ (-6%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/aoc-agon-pro-ag276fk-27-inch-520hz-fhd-gaming-monitor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/monitor/aoc/agon-pro-ag276fk/agon-pro-ag276fk-01-200x200.webp"
                                        alt="AOC AGON PRO AG276FK 27&quot; 520Hz FHD Fast IPS Gaming Monitor"
                                        width="228" height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/aoc-agon-pro-ag276fk-27-inch-520hz-fhd-gaming-monitor">AOC
                                        AGON PRO AG276FK 27&quot; 520Hz FHD Fast IPS Gaming Monitor</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">80,000৳</span> <span class="price-old">85,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-item">
                        <div class="p-item-inner">
                            <div class="marks">
                                <span class="mark">Save: 15,100৳ (-10%)</span>
                            </div>
                            <div class="p-item-img"> <a
                                    href="https://www.startech.com.bd/aoc-agon-pro-ag276qkd-26-5-inch-480hz-qhd-oled-gaming-monitor"><img
                                        src="https://www.startech.com.bd/image/cache/catalog/monitor/aoc/agon-pro-ag276qkd/agon-pro-ag276qkd-01-200x200.webp"
                                        alt="AOC AGON PRO AG276QKD 26.5&quot; 480Hz QHD OLED Gaming Monitor" width="228"
                                        height="228" /></a></div>
                            <div class="p-item-details">
                                <h4 class="p-item-name"> <a
                                        href="https://www.startech.com.bd/aoc-agon-pro-ag276qkd-26-5-inch-480hz-qhd-oled-gaming-monitor">AOC
                                        AGON PRO AG276QKD 26.5&quot; 480Hz QHD OLED Gaming Monitor</a></h4>
                                <div class="p-item-price">
                                    <span class="price-new">139,900৳</span> <span class="price-old">155,000৳</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        
        </div>
    </div>
    
@endsection

@section('page-script')

@endsection
