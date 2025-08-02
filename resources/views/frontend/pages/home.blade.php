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



<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lenovo IdeaPad 5 2-in-1 14AHP9 Laptop Price in Bangladesh | Star Tech</title>
    <base href="https://www.startech.com.bd/" />
    <meta name="description" content="Buy Lenovo IdeaPad 5 2-in-1 14AHP9 Laptop at best price in Bangladesh. Latest Lenovo IdeaPad 5 2-in-1 Laptop available at Star Tech. Order online for delivery in BD." />    <meta name="keywords" content= "Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://www.startech.com.bd/image/catalog/logo.png" rel="icon" />            <meta property="fb:app_id" content="1973296469592243" />
        <meta property="og:title" content="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" />
        <meta property="og:type" content="product" />
        <meta property="og:url" content="https://www.startech.com.bd/lenovo-ideapad-5-2-in-1-14ahp9-laptop" />
        <meta property="og:description" content="Buy Lenovo IdeaPad 5 2-in-1 14AHP9 Laptop at best price in Bangladesh. Latest Lenovo IdeaPad 5 2-in-1 Laptop available at Star Tech. Order online for delivery in BD." />
        <meta property="og:site_name" content="Star Tech Ltd " />
        <meta property="og:image" content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-008-500x500.webp" />
        <meta property="product:brand" content="Lenovo" />
        <meta property="product:availability" content="In Stock" />
        <meta property="product:condition" content="new" />
        <meta property="product:price:amount" content="99500.0000" />
        <meta property="product:price:currency" content="BDT" />
        <meta property="product:retailer_item_id" content="42737" />
        <link rel="preload" href="catalog/view/theme/starship/fonts/MaterialIcons-Regular.woff2" as="font" crossorigin>
    <link href="catalog/view/theme/starship/style/product.min.12.css" type="text/css" rel="stylesheet" media="screen" />        <script type="text/javascript">var app={mgs_type: "popup", enablePopup: 1, popupDuration: 6, onReady:function(d,a,e,f,t){a=Array.isArray(a)?a:[a];t=t||2E3;for(var g=!0,b=d,c=0;c<a.length;c++){var h=a[c];if("undefined"==typeof b[h]){g=!1;break}b=b[h]}g?e():f&&setTimeout(function(){app.onReady(d,a,e,--f)},t)}};</script>
    <script async src="catalog/view/theme/starship/javascript/site.min.47.js" type="text/javascript"></script>
    <script async src="catalog/view/javascript/prod/product.min.17.js" type="text/javascript"></script>    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2BV6E3DJTL"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2BV6E3DJTL');
</script>


<script>
  !function(f,b,e,v,n,t,s)
  { if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '378818912571012');
  fbq('track', 'PageView');
</script></head>
<body class="product-product-42737">
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
                <a class="brand" href="https://www.startech.com.bd/"><img src="https://www.startech.com.bd/image/catalog/logo.png" title="Star Tech Ltd " width="144" height="164" alt="Star Tech Ltd "></a>
                <div class="mbl-right h-desk">
                    <div class="ac search-toggler"><i class="material-icons">search</i></div>
                    <div class="ac mc-toggler"><i class="material-icons">shopping_basket</i><span class="counter" data-count="0">0</span></div>
                </div>
            </div>
            <div class="ht-item search"  id="search">
                <input type="text" name="search" placeholder="Search"  autocomplete="off" />
                <button class="material-icons">search</button>
            </div>
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
                <div class="ac">
                                        <a class="ic" href="https://www.startech.com.bd/account/login"><i class="material-icons">person</i></a>
                    <div class="ac-content">
                        <a href="https://www.startech.com.bd/account/login"><h5>Account</h5></a>
                        <p><a href="https://www.startech.com.bd/account/register">Register</a> or <a href="https://www.startech.com.bd/account/login">Login</a></span></p>
                    </div>                </div>
                <div class="ac build-pc m-hide">
                    <a class="btn" href="https://www.startech.com.bd/tool/pc_builder">PC Builder</a>
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
                        <a class="nav-link" href="https://www.startech.com.bd/special-pc">Desktop Offer</a></li>
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
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/gaming-pc/intel-gaming-pc">Intel PC</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/gaming-pc/amd-gaming-pc">RYZEN PC</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc">Brand PC</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc/acer-desktop">Acer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc/asus-desktop">ASUS</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc/dell-desktop">Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc/hp-desktop">HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/brand-pc/lenovo-desktop">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/msi-brand-pc">MSI</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/desktops/all-in-one-pc">All-in-One PC</a>
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
                                <a class="nav-link" href="https://www.startech.com.bd/desktops/all-in-one-pc/lenovo-all-in-one">LENOVO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/teclast-all-in-one-pc">Teclast</a>
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
                        <a class="nav-link" href="https://www.startech.com.bd/desktops/portable-mini-pc">Portable Mini PC</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-mini-pc"> Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zotac-portable-mini-pc">Zotac</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-mac-mini">Apple Mac Mini</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-imac">Apple iMac</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-mac-studio">Apple Mac Studio</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-mac-pro">Apple Mac Pro</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/desktops" class="see-all">Show All Desktop</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook">Laptop</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop">All Laptop</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop/msi-laptop">MSI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lenovo-laptop">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-laptop"> Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hp-laptop"> HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/acer-laptop">Acer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smart-laptop">Smart</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop/dell-laptop">Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/apple-macbook">MacBook</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/microsoft-surface-laptop">Microsoft</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/infinix-laptop">Infinix</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/chuwi-laptop">Chuwi</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gigabyte-laptop">Gigabyte</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/walton-laptop">Walton</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/aoc-laptop">AOC</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/Gaming-Laptop">Gaming Laptop</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hp-gaming-laptop">HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/Gaming-Laptop/lenovo">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/Gaming-Laptop/asus">Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/msi-gaming-laptop">MSI </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/acer-gaming-laptop">Acer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gigabyte-gaming-laptop">Gigabyte</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dell-gaming-laptop">Dell</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook">Premium Ultrabook</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/asus">Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/acer">Acer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/hp">HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/microsoft">Microsoft</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/dell">Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/ultrabook/lenovo">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/msi-premium-ultrabook">MSI </a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/laptop-bag-backpack">Laptop Bag</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-laptop-bag-backpack"> Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dell-laptop-bag-backpack">Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fantech-laptop-bag-backpack">Fantech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lenovo-laptop-bag-backpack">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/maxgreen-laptop-bag">MaxGreen</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/targus-laptop-bag-backpack">Targus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tucano-bag-backpack">Tucano</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ugreen-laptop-bag">UGREEN</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/wiwu-laptop-bag-backpack">WiWU</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xiaomi-laptop-bag-backpack">Xiaomi</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/arctic-hunter-laptop-bag-backpack">Arctic Hunter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/honor-laptop-bag">Honor</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop-accessories">Laptop Accessories</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-cooler">Laptop Cooler</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-desk">Laptop Desk</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-stand">Laptop Stand</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-battery">Laptop Battery</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-adapter">Laptop Charger / Adapter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop-accessories/laptop-display">Display</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-notebook/laptop-accessories/laptop-keyboard">Laptop Keyboard</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/laptop-hdd-caddy">Caddy</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="https://www.startech.com.bd/laptop-notebook" class="see-all">Show All Laptop</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/component">Component</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/processor">Processor</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/processor/amd-processor">AMD</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/processor/intel-processor">Intel</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/component/CPU-Cooler">CPU Cooler</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/msi-cpu-cooler">MSI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/CPU-Cooler/Antec-Cooler">Antec</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/CPU-Cooler/gamdias-cpu-cooler">Gamdias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/arctic-cpu-cooler">ARCTIC</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/CPU-Cooler/corsair-cpu-cooler">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/deepcool-cpu-cooler">DeepCool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-cpu-cooler">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/1stplayer-cpu-cooler">1STPLAYER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-cpu-cooler">NZXT</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thermalright-cpu-cooler">Thermalright</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thermaltake-cpu-cooler">Thermaltake</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cooler-master-cpu-cooler">Cooler Master</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cougar-cpu-cooler">Cougar</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/gigabyte-cpu-cooler">Gigabyte</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xigmatek-cpu-cooler">Xigmatek</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/huntkey-cpu-cooler">Huntkey</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-cpu-cooler">Xtreme </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/team-cpu-cooler">TEAM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/uphere-cpu-cooler">upHere</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/water-or-liquid-cooling">Water / Liquid Cooling</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ekwb-water-or-liquid-cooling">EKWB</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/motherboard">Motherboard</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/msi-motherboard">MSI (Intel)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/msi-ryzen-motherboard">MSI (AMD)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/asrock-intel-motherboard">ASRock (Intel)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/asrock-motherboard">ASRock (AMD)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/asus-motherboard">ASUS (Intel)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/asus-amd-motherboard">ASUS (AMD)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/gigabyte-motherboard">GIGABYTE (Intel)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/motherboard/gigabyte-amd-motherboard">GIGABYTE (AMD)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/colorful-intel-motherboard">Colorful (Intel)</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/colorful-amd-motherboard">Colorful (AMD)</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card">Graphics Card</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/colorful-graphics-card">Colorful</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card/asus-graphics-card">ASUS</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card/gigabyte-graphics-card">GIGABYTE</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/intel-graphics-card">INTEL</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card/ZOTAC-Graphics">ZOTAC</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card/msi-graphics-card">MSI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/graphics-card/sapphire-graphics-card">Sapphire</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gunnir-graphics-card">GUNNIR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/arktek-graphics-card">ARKTEK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/peladn-graphics-card">PELADN</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ocpc-graphics-card">OCPC</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/palit-graphics-card">Palit</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/powercolor-graphics-card">PowerColor</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/pny-graphics-card">PNY</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/manli-graphics-card">Manli</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vga-holder">VGA Holder</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/ram">RAM (Desktop)</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/team-ram">TEAM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/colorful-ram">Colorful</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/corsair-ram">Corsair</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/kingston-ram">Kingston</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/gigabyte-ram">Gigabyte</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/pny-desktop-ram">PNY</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/g-skill-ram">G.Skill</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/adata-ram">Adata</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/transcend-ram">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/ram/hp-ram">HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lexar-ram">Lexar</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/netac-desktop-ram">Netac</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kimtigo-ram">Kimtigo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ocpc-ram">OCPC</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/agi-ram">AGI</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/laptop-ram">RAM (Laptop)</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/laptop-ram/team-laptop-ram">TEAM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/colorful-laptop-ram">Colorful</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/laptop-ram/adata-laptop-ram">Adata</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/transcend-laptop-ram">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/g-skill-laptop-ram">G.Skill</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/crucial-laptop-ram">Crucial</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/laptop-ram/kingston-laptop-ram">Kingston</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lexar-laptop-ram">Lexar</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/corsair-laptop-ram">Corsair</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ocpc-laptop-ram">OCPC </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/bory-laptop-ram">Bory</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/netac-laptop-ram">Netac</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/component/power-supply">Power Supply</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/msi-power-supply">MSI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/antec-power-supply">Antec</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/power-supply/gamdias-power-supply">Gamdias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/1stplayer-power-supply">1STPLAYER </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/corsair-power-supply">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thermaltake-power-supply">Thermaltake</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cooler-master-power-supply">Cooler Master</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/gigabyte-power-supply">Gigabyte</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-power-supply">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/deepcool-power-supply">DeepCool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-power-supply">NZXT</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-power-supply">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/acer-power-supply">Acer</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xigmatek-power-supply">Xigmatek</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cougar-power-supply">Cougar</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/huntkey-power-supply">Huntkey</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/hard-disk-drive">Hard Disk Drive</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/hard-disk-drive/seagate-hard-disk">Seagate</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/hard-disk-drive/toshiba-hdd">Toshiba</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/hard-disk-drive/western-digital-hdd">Western Digital</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/portable-hard-disk-drive">Portable Hard Disk Drive</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/portable-hard-disk-drive/toshiba-portable-hard-disk">Toshiba</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/adata-portable-hdd">ADATA</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tanscend-portable-hdd">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/portable-hard-disk-drive/western-digital-portable-hard-disk">Western Digital</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/portable-hard-disk-drive/seagate-portable-hdd">Seagate</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lacie-portable-hdd">LaCie</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sandisk-portable-hard-disk">SanDisk</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/ssd">SSD</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/team-ssd">TEAM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/colorful-ssd">Colorful</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/miphi-ssd">MiPhi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/corsair-ssd">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/kingston-ssd">Kingston</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/orico-ssd">ORICO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/western-digital-ssd">Western Digital</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/lexar-ssd">Lexar</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/transcend-ssd">Transcend</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/samsung-ssd">Samsung</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/adata-ssd">Adata</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hp-ssd">HP</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/gigabyte-ssd">Gigabyte</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/seagate-ssd">Seagate</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/msi-ssd">MSI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aitc-ssd">AITC</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/netac-ssd">Netac</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/agi-ssd">AGI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/kimtigo-ssd">Kimtigo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ocpc-ssd">OCPC</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hikvision-ssd">Hikvision</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oscoo-ssd">OSCOO</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/portable-ssd">Portable SSD</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/team-portable-ssd">TEAM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sandisk-portable-ssd">SanDisk</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-portable-ssd">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/transcend-portable-ssd">Transcend </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/seagate-portable-ssd">Seagate</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lexar-portable-ssd">Lexar</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/crucial-portable-ssd">Crucial</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/adata-portable-ssd">Adata</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/corsair-portable-ssd">Corsair</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kingston-portable-ssd">Kingston</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/component/casing">Casing</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/msi-casing">MSI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing/Antec-Casing">Antec</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing/gamdias-casing">Gamdias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing/maxgreen-casing">MaxGreen</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/corsair-case">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-casing">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/1stplayer-casing">1STPLAYER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-casing">NZXT</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing/gigabyte-casing">Gigabyte</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-casing">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thermaltake-casing">Thermaltake</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xigmatek-casing">Xigmatek </a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/deepcool-casing">DeepCool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/value-top-casing">Value-Top</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cougar-casing">Cougar</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ovo-casing">OVO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/pc-power-casing">PC Power</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/huntkey-casing">Huntkey</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/monarch-casing">Monarch</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/acer-casing">Acer</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/carbono-casing">Carbono</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ars-casing">ARS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/maxcool-casing">Maxcool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/t-wolf-casing">T-Wolf</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/component/casing-cooler">Casing Cooler</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing-cooler/antec-casing-cooler">Antec</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-casing-cooler">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/lian-li-casing-fan">Lian Li</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/maxgreen-casing-cooler">MaxGreen</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing-cooler/gamdias-casing-fan">Gamdias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/1stplayer-casing-cooler">1STPLAYER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/component/casing-cooler/corsair-casing-cooler">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-casing-cooler">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-casing-cooler">NZXT</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cooler-master-casing-cooler">Cooler Master</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/deepcool-casing-cooler">Deepcool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-casing-cooler">Redragon </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/value-top-casing-cooler">Value-Top</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/orico-casing-cooler">ORICO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xigmatek-casing-cooler">Xigmatek</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/arctic-casing-cooler">ARCTIC</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/uphere-casing-cooler">upHere</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/component/optical-hdd">Optical Disk Drive</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/optical-hdd/external-optical-hdd">External Optical Disk Drive</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/component/optical-hdd/internal-optical-hdd">Internal Optical Disk Drive</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/vertical-graphics-card-holder">Vertical Graphics Card Holder</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/component" class="see-all">Show All Component</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child multi-col">
                <a class="nav-link" href="https://www.startech.com.bd/monitor">Monitor</a>
                <div class="drop-down drop-menu-1">
                                        <ul>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/aoc-monitor">AOC</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/msi">MSI</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/lg">LG </a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/asus">Asus</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/hp">HP</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/dell">Dell</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/samsung">Samsung</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/gigabyte">GIGABYTE</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/viewsonic">Viewsonic</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/corsair-monitor">Corsair</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/lenovo-monitor">Lenovo</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/acer">Acer</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/benq">BenQ</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/philips">PHILIPS</a>
                        </li>

                                            </ul>
                                        <ul>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/dahua-monitor">Dahua</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/value-top-monitor">Value-Top</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/pc-power-monitor">PC Power</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/hikvision-monitor">Hikvision</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/aiwa-monitor">AIWA</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor/xiaomi">XIAOMI</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/walton-monitor">Walton</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/gigasonic-monitor">Gigasonic</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/thuderobot-monitor">ThundeRobot</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/gaming-monitor">Gaming Monitor</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/curved-monitor">Curved Monitor</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/touch-screen-monitor">Touch Monitor</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/4k-monitor">4K Monitor</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/monitor-arm">Monitor Arm</a>
                        </li>

                                                <li>
                            <a href="https://www.startech.com.bd/monitor" class="see-all">Show All Monitor</a>
                        </li>
                                            </ul>
                                    </div>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/ups-ips">UPS</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/online-ups">Online UPS</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/online-ups/maxgreen">MaxGreen</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/santak-online-ups">SANTAK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/online-ups/tecnoware">Tecnoware</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/digital-x-online-ups">Digital X</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/online-ups/zigor">ZIGOR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/online-ups/apollo">APOLLO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ensmart-online-ups">EnSmart</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/marsriva-online-ups">MARSRIVA </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kstar-online-ups">KSTAR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/power-pac-online-ups">Power Pac</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/power-guard-online-ups">Power Guard</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vertiv-online-ups">Vertiv</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/apc-online-ups">APC</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/ups-ips/offline-ups">Offline UPS</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ups-ips/offline-ups/maxgreen-offline-ups">MaxGreen</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/santak-offline-ups">SANTAK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ups-ips/offline-ups/digital-x-offline-ups">Digital X</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/prolink-offline-ups">Prolink</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/apollo-offline-ups">APOLLO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/power-guard-offline-ups">Power Guard</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ups-ips/offline-ups/kstar-offline-ups">KSTAR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/pc-power-offline-ups">PC Power</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/marsriva-offline-ups">MARSRIVA </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/power-pac-offline-ups">Power Pac</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-offline-ups">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-offline-ups">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vertiv-offline-ups">Vertiv</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/mini-ups">Mini UPS</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/marsriva-ups">MARSRIVA</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/power-guard-mini-ups">Power Guard</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/pc-power-mini-ups">PC Power</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/ups-battery">UPS Battery</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/stabilizer">Voltage Stabilizer</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/ips">IPS</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/ups-ips" class="see-all">Show All UPS</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/mobile-phone">Phone</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-iphone">iPhone</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/google-pixel-phone">Google</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/samsung-mobile-phone">Samsung</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/xiaomi-mobile-phone">Xiaomi</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/honor-mobile-phone">HONOR</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/oneplus-mobile-phone">OnePlus</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/oppo-mobile-phone">OPPO</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/vivo-mobile-phone">Vivo</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/realme-mobile-phone">Realme</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/infinix-mobile-phone">Infinix</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tecno-mobile-phone">TECNO</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tcl-mobile-phone">TCL</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/nokia-mobile-phone">Nokia</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/zte-mobile-phone">ZTE</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/benco-mobile-phone">benco</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/symphony-mobile-phone">Symphony</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/umidigi-mobile-phone">UMIDIGI</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/walton-mobile-phone">Walton</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/xtra-mobile-phone">XTRA</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/feature-phone">Feature Phone</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/mobile-phone-accessories">Mobile Accessories</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/mobile-phone-charger-adapter">Charger &amp; Adapter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/mobile-phone-holder-stand">Holder &amp; Stand</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/mobile-phone-case">Case &amp; Cover</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/mobile-phone-cooler">Mobile Phone Cooler</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="https://www.startech.com.bd/mobile-phone" class="see-all">Show All Phone</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/tablet-pc">Tablet</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/graphics-tablet">Graphics Tablet</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xp-pen-graphics-tablet">XP-PEN</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/huion-graphics-tablet">Huion</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/wacom-graphics-tablet">Wacom</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/veikk-graphics-tablet">VEIKK</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/apple-ipad">iPad</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/black-shark-tablet">Black Shark</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tablet-pc/lenovo-tablet-pc">Lenovo</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/samsung-tablet">Samsung</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/honor-tablet-pc">HONOR</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/xiaomi-tablet-pc">Xiaomi </a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/huion-tablet">Huion</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/walton-tablet-pc">Walton</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tablet-pc/huawei-tablet-pc">HUAWEI</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/chuwi-tablet-pc">Chuwi</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/amazon-tablet-pc">Amazon</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/pixel-tablet">Google</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/oneplus-tablet">OnePlus</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tablet-pc/stylus">Stylus</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/teclast-tablet">Teclast</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/symphony-tablet">Symphony</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/zte-tablet">ZTE</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/motorola-tablet">Motorola</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/tablet-pc" class="see-all">Show All Tablet</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child multi-col">
                <a class="nav-link" href="https://www.startech.com.bd/office-equipment">Office Equipment</a>
                <div class="drop-down drop-menu-1">
                                        <ul>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/projector">Projector</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/optoma-projector">Optoma</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/benq-projector">BenQ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/acer-projector">Acer</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-projector">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/viewsonic-projector">ViewSonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/projector/vivitek">VIVItek</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/boxlight-projector">Boxlight</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/xiaomi-projector">Xiaomi</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/aun-projector">AUN</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/projector/infocus">InFocus</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/projector/cheerlux">Cheerlux</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/philips-projector">Philips</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/havit-projector">Havit</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/xinji-projector">XINJI </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/blisbond-projector">Blisbond</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/projection-screen">Projection Screen</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/projector-mount">Projector Mount</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/conference-systems">Conference System</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/logitech-conference-system">Logitech</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/jabra-conference-system">Jabra</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/htdz-conference-system">HTDZ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/cmx-conference-system">CMX</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/tev-conference-system">TEV</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/avermedia-conference-system">AVerMedia</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/rapoo-conference-system">Rapoo</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/poly-conference-system">Poly</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/benq-conference-system">BenQ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/aver-conference-system">AVer</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/grandstream-conference-system">Grandstream</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/screenbeam-conference-system">ScreenBeam</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/maxhub-conference-system">MAXHUB</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/pa-system">PA System</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/tev-pa-system">TEV</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/cmx-pa-system">CMX</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/grandstream-pa-system">Grandstream</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/jbl-pa-system">JBL</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/interactive-flat-panel">Interactive Flat Panel</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/infocus-interactive-flat-panel">InFocus</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/optoma-interactive-flat-panel">Optoma</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/dahua-interactive-flat-panel">Dahua </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/benq-interactive-flat-panel">BenQ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/lg-interactive-flat-panel">LG</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hikvision-interactive-flat-panel">Hikvision</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hitachi-interactive-flat-panel">Hitachi</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/viewsonic-interactive-flat-panel">ViewSonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/metz-interactive-flat-panel">METZ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/armor-interactive-flat-panel">ARMOR</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/boxlight-interactive-flat-panel">BoxLight</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/panasonic-interactive-flat-panel">Panasonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zkteco-interactive-flat-panel">ZKTeco</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/maxhub-interactive-flat-panel">MAXHUB</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/newline-interactive-flat-panel">Newline</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/iboard-interactive-flat-panel">iBoard</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/video-wall">Video Wall</a>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/signage">Signage</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/benq-signage">BenQ</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/viewsonic-signage">ViewSonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/lg-signage">LG</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/panasonic-signage">Panasonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hikvision-signage">Hikvision</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/maxhub-signage">MAXHUB</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/kiosk">Kiosk</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/viewsonic-kiosk">ViewSonic</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/armor-kiosk">ARMOR</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hikvision-kiosk">Hikvision</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/innovtech-signage">Innovtech</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/printer">Printer</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/pantum-printer">Pantum</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-printer">Brother</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/canon-printer">Canon</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-printer">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-printer">HP </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/fujifilm-printer">Fujifilm</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/laser-printer">Laser Printer</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/large-format-printer">Large Format Printer</a>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/id-card-printer">ID Card Printer</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zebra-id-card-printer">Zebra</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/evolis-id-card-printer">Evolis</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hid-printer">HID</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/pos-printer">POS Printer</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/deli-pos-printer">Deli</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/rongta-pos-printer">RONGTA</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sewoo-pos-printer">Sewoo</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-pos-printer">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/xprinter-pos-printer">Xprinter</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sprt-pos-printer">SPRT</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sunmi-pos-printer">Sunmi</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/citizen-pos-printer">Citizen</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/g-printer-pos-printer">G-Printer </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/bixolon-pos-printer">Bixolon</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/label-printer">Label Printer</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/deli-label-printer">Deli</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-label-printer">Brother</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/xprinter-label-printer">Xprinter</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zebra-label-printer">Zebra</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sewoo-label-printer">Sewoo</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/tsc-label-printer">TSC</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/rongta-label-printer">Rongta</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/g-printer-label-printer">G-Printer</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/godex-label-printer">GoDEX</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/non-brand-label-printer">Others</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/photocopier">Photocopier</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/toshiba-photocopier">Toshiba</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/canon-photocopier">Canon</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sharp-photocopier">Sharp</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-photocopier"> HP</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/ricoh-photocopier">Ricoh</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/toner">Toner</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-toner">HP </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/pantum-toner">Pantum</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/office-equipment/toner/canon-toner">Canon</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-toner">Brother</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/fujifilm-toner-cartridge">Fujifilm</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/toshiba-toner">Toshiba</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/power-print-toner">Power Print</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/true-trust-toner">True Trust</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/starink-toner">Starink</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/g-and-g-toner">G&amp;G</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/maxgreen-toner">MaxGreen</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/print-rite-toner">Print-Rite</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sharp-toner">Sharp</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/longprint-toner">LongPrint</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/safeway-toner">SafeWay</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/ricoh-toner">Ricoh</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/samsung-toner">Samsung </a>
                                </li>
                                                            </ul>
                        </li>

                                            </ul>
                                        <ul>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/cartridge">Cartridge</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/canon-cartridge">Canon</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-cartridge">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-cartridge">HP </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-cartridge">Brother</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/ink-bottle">Ink Bottle</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-ink-bottle">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-ink-bottle">Brother</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-ink-bottle">HP</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/canon-ink-bottle">Canon</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/printer-paper">Printer Paper</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/ribbon">Ribbon</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/printer-drum">Printer Drum</a>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/Scanner">Scanner</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/hp-scanner">HP </a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/canon-scanner">Canon</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/epson-scanner">Epson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/brother-scanner">Brother</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/office-equipment/Scanner/plustek">Plustek</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/office-equipment/Scanner/avision">Avision</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/fujitsu-scanner">Fujitsu</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/kodak-scanner">Kodak </a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/Barcode-Scanner">Barcode Scanner</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/deli-barcode-scanner">Deli</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/winson-barcode-scanner">Winson</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/yumite-barcode-scanner">Yumite</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zebex-barcode-scanner">ZEBEX</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zebra-barcode-scanner">Zebra</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sewoo-barcode-scanner">SEWOO</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/honeywell-barcode-scanner">Honeywell</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/sunlux-barcode-scanner">Sunlux</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zkteco-barcode-scanner">ZKTeco</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/cash-drawer">Cash Drawer</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/telephone-set">Telephone Set</a>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/ip-phone">IP Phone</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/mitel-ip-phone">Mitel</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/grandstream-ip-phone">Grandstream</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/cisco-ip-phone">Cisco</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/avaya-ip-phone">Avaya</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/dinstar-ip-phone">DINSTAR</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/snom-ip-phone">Snom</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/flyingvoice-ip-phone">Flyingvoice</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/ip-pabx-system">PABX System</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/mitel-pabx-system">Mitel</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/grandstream-pabx-system">Grandstream</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/dinstar-ip-pbx">DINSTAR</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/zycoo-pabx-system">Zycoo</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/panasonic-pabx-system">Panasonic</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/money-counting-machine">Money Counting Machine</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/apollo-money-counting-machine">Apollo</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/kington-money-counting-machine">Kington</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/domens-money-counting-machine">Domens</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/yumite-money-counter-machine">Yumite</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/namibind-money-counting-machine">Namibind</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/safescan-money-counting-machine">Safescan</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/chihua-money-counting-machine">Chihua</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/julong-money-counting-machine">Julong</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/maxsell-money-counting-machine">Maxsell</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/tay-chian-money-counting-machine">Tay-Chian</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/deli-money-counting-machine">Deli</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item has-child">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/paper-shredder">Paper Shredder</a>
                            <ul class="drop-down drop-menu-2">
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/deli-paper-shredder">Deli</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/ofitech-paper-shredder">Ofitech</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/aurora-paper-shredder">Aurora</a>
                                </li>
                                                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.startech.com.bd/xtreme-paper-shredder">Xtreme</a>
                                </li>
                                                            </ul>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/office-equipment/laminating-machine">Laminating Machine</a>
                        </li>
                                                <li class="nav-item">
                            <a class="nav-link" href="https://www.startech.com.bd/binding-machine">Binding Machine</a>
                        </li>

                                                <li>
                            <a href="https://www.startech.com.bd/office-equipment" class="see-all">Show All Office Equipment</a>
                        </li>
                                            </ul>
                                    </div>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/camera">Camera</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/action-camera">Action Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gopro-action-camera">GoPro</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dji-action-camera">DJI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/insta360-action-camera">Insta360</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sjcam-action-camera">SJCAM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/akaso-action-camera">AKASO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/eken-action-camera">EKEN</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ausek-action-camera">AUSEK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ordro-action-camera">ORDRO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/feiyu-action-camera">Feiyu</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/blisbond-action-camera">Blisbond</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/action-camera-accessories">Action Camera Accessories</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/camera-lenses">Camera Lenses</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/camera-lenses/canon-camera-lenses">Canon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/camera-lenses/nikon-camera-lenses">Nikon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/camera-lenses/sony-lenses">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fujifilm-lens">FUJIFILM</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/digital-camera">Digital Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/digital-camera/sony-digital-camera">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/canon-digital-camera">Canon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/digital-camera/fujifilm-digtal-camera">Fujifilm</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/dslr-camera">DSLR</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/canon-dslr-camera">Canon</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/Handycam">Handycam</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/mirrorless-camera">Mirrorless Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/canon-mirrorless-camera">Canon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sony-mirrorless-camera">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nikon-mirrorless-camera">Nikon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fujifilm-mirrorless-camera">FUJIFILM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/panasonic-mirrorless-camera">Panasonic</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/dash-cam">Dash Cam</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/transcend-dashcam">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/70mai-dashcam">70mai</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/video-camera">Video Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/video-camera/sony">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera/video-camera/panasonic">Panasonic</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/canon-video-camera">Canon</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/instant-camera">Instant Camera</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera-accessories">Camera Accessories</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera-flash-light">Camera Flash</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/studio-light">Studio Light</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/softbox">Softbox</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lens-filter">Lens Filter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lens-adapter">Lens Adapter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/battery-and-charger">Battery &amp; Charger</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/camera-bag-backpack">Camera Bag</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dry-cabinet">Dry Cabinet</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/camera/camera-tripod">Camera Tripod</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/manbily-camera-tripod">Manbily</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/k-and-f-concept-camera-tripod">K&amp;F Concept</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/digipod-camera-tripod">Digipod</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/yunteng-camera-tripod">Yunteng</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kingjoy-camera-tripod">Kingjoy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/manfrotto-camera-tripod">Manfrotto</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/libec-camera-tripod">Libec</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jmary-camera-tripod">Jmary</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/telesin-camera-tripod">Telesin</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fantech-camera-tripod">Fantech</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="https://www.startech.com.bd/camera" class="see-all">Show All Camera</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera">Security</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/wifi-camera">Portable WiFi Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/meari-wifi-camera">Meari</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-wifi-camera">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/imou-wifi-camera">Imou</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ezviz-wifi-camera">EZVIZ</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jovision-wifi-camera">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-wifi-camera">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/srihome-wifi-camera">SriHome</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tenda-wifi-camera">Tenda</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zkteco-wifi-camera">ZKTeco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xiaomi-wifi-camera">Xiaomi</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vimtag-wifi-camera">Vimtag</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/ip-camera">IP Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-ip-camera">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jovision-ip-camera">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-ip-camera">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/havit-ip-camera">Havit</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/uniview-ip-camera">Uniview </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-ip-camera">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tiandy-ip-camera">Tiandy</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/cc-camera">CC Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/cc-camera/dahua-cc-camera">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/cc-camera/jovision-cc-camera">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/uniview-cc-camera">Uniview </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/cc-camera/hikvision-cc-camera">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/armor-cc-camera">ARMOR</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/ptz-camera">PTZ Camera</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-ptz-camera"> Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/ptz-camera/hikvision-ptz-camera">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/uniview-ptz-camera">Uniview</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jovision-ptz-camera">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-ptz-camera">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tiandy-ptz-camera">Tiandy</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/cc-camera-package">CC Camera Package</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-cc-camera-package">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-cc-camera-package">Dahua</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/ip-camera-package">IP Camera Package</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-ip-camera-package">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-ip-camera-package">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-ip-camera-package">TP-Link</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/dvr">DVR</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/dvr/jovision">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/dvr/hikvision">Hikvision</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/nvr">NVR</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-nvr">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-nvr">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jovision-nvr">Jovision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/uniview-nvr">Uniview</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-nvr">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tiandy-nvr">Tiandy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ezviz-nvr">EZVIZ</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/xvr">XVR</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-xvr">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/uniview-xvr">Uniview </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jovision-xvr">Jovision</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/cc-camera-accessories">CC Camera Accessories</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/door-lock">Door Lock</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/door-lock/zkteco-door-lock">ZKTeco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/stata-door-lock">STATA</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smartx-door-lock">SmartX</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smartlife-door-lock">SmartLife</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nexakey-door-lock">Nexakey</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/home-security-door-bell">Smart Door Bell</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/access-control">Access Control</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/access-control/zkteco-access">ZKTeco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-access-control">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/Security-Camera/access-control/onspot-access-control">Onspot</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ubiquiti-access-control">Ubiquiti</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nexakey-access-control">NexaKey</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/access-control-accessories">Access Control Accessories</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/entrance-control">Entrance Control</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/digital-locker">Digital Locker &amp; Vault</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/kvm-switch">KVM Switch</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/Security-Camera" class="see-all">Show All Security</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/networking">Networking</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/starlink">Starlink</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/networking/router">Router</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-router">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tenda-router">Tenda</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cudy-router">Cudy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/mikrotik-router">Mikrotik</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/d-link-router">D-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ruijie-router">Ruijie </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/asus-router-bd"> ASUS</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/mercusys-router">Mercusys</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zyxel-router">Zyxel</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/totolink-router">TOTOLINK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/bdcom-router">BDCOM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/netgear-router">NETGEAR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/netis-router">Netis</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/planet-router">Planet</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/grandstream-router">Grandstream</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/cisco-router">Cisco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hikvision-router">Hikvision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/router/prolink-router">PROLINK</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/pocket-router">Pocket Router</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-pocket-router">TP-Link</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/networking/access-point">Access Point &amp; Range Extender</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zyxel-network-extender">Zyxel</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/tp-link-access-point">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/tenda-access-point">Tenda</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/netgear-access-point">NETGEAR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/mikrotik-access-point">MikroTik</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/d-link-access-point">D-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/grandstream-wifi-range-extender">Grandstream</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ubiquiti-access-point">Ubiquiti</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cambium-access-point">Cambium</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cudy-range-extender">Cudy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/edgecore-access-point">Edgecore</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ruijie-access-point">Ruijie</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/trendnet-access-point">TRENDnet</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ip-com-access-point">IP-COM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/huawei-access-point">Huawei</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/bdcom-access-point">BDCOM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/access-point/cisco-access-point">Cisco</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch">Network Switch</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zyxel-network-switch">Zyxel</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/cisco-switch">Cisco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/mikrotik-switch">MikroTik</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/tp-link-switch">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/tenda-switch">Tenda</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cudy-switch">Cudy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ruijie-switch">Ruijie</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/bdcom-switch">BDCOM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/netgear-switch">NETGEAR</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/d-link-switch">D-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/hikvision-network-switch">HikVision</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/networking/network-switch/netis-switch">Netis</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/solitine-network-switch">Solitine</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/trendnet-network-switch">TRENDnet</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/c-data-network-switch">C-Data</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-network-switch">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/grandstream-network-switch">Grandstream</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/huawei-network-switch">Huawei</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/levelone-switch">Levelone </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ip-com-network-switch">IP-COM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vsol-network-switch">VSOL</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/firewall">Firewall</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/wifi-adapter">WiFi Adapter</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-wifi-adapter">TP-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tenda-wifi-adapter">Tenda</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cudy-wifi-adapter">Cudy</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vention-wifi-adapter">Vention</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/trendnet-wifi-adapter">TRENDnet</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/yuanxin-wifi-adapter">Yuanxin </a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/lan-card">LAN Card</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/networking-cable">Networking Cable</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/utp-cable-and-accessories">UTP Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fiber-optic-cable-and-accessories">Fiber Optic Cable</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/patch-cord">Patch Cord</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/cable-connector">Connector</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/olt">OLT</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/onu">ONU</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/splicer-machine">Splicer Machine</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/crimping-tool">Crimping Tool</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/otdr">OTDR</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/poe-injector">PoE Injector</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/network-transceivers">Network Transceivers</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/faceplate">Faceplate</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/patch-panel">Patch Panel</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/media-converter">Media Converter</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/d-link-media-converter">D-Link</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/tp-link-media-converter">TP-Link</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/cable-tester">Cable Tester</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/networking" class="see-all">Show All Networking</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/software">Software</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/operating-system">Operating System</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/microsoft-windows">Microsoft Windows</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/redhat">Red Hat</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/office-application">Office Application</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/microsoft-office">Microsoft Office</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/database-server-solution">Database Server Solution</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/mail-server-solution">Mail Server Solution</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/cloud-solution">Cloud Solutions</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/software/antivirus">Antivirus</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/software/antivirus/for-home-user">For Home User</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/software/antivirus/for-business-users">For Business Users</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/bangla-typing-software">Bangla Typing Software</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/bijoy-bangla-typing-software">Bijoy</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/software/adobe">Adobe</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/software/vmware">VMware</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/software/autodesk">AutoDesk</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/anydesk-software">AnyDesk</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/software" class="see-all">Show All Software</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/server-networking">Server &amp; Storage</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/server-networking/server">Server</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/server-networking/server/dell-server">Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hpe-server">HPE</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/server-networking/server/cisco-server">Cisco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-server">ASUS </a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gpu-server">GPU Server</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/server-rack">Server Rack</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/toten-server-rack">Toten</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/safenet-server-rack">Safenet</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cote-server-rack">Cote</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dateup-server-rack">DateUP</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/server-networking/workstation">Workstation</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/server-networking/workstation/workstation-hp"> HP</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/server-networking/workstation/dell-workstation"> Dell</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lenovo-workstation">Lenovo</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/nas-storage">NAS Storage</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asustor-nas-storage">Asustor</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/synology-nas-storage">Synology</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/orico-nas-storage">Orico</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/san-storage">SAN Storage</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dell-san-storage">DELL</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/das-storage">DAS Storage</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/server-hdd">Server HDD</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/server-hdd-bay">Server HDD Bay</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/server-ram">Server RAM</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/server-ssd">Server SSD</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/server-power-supply">Server Power Supply</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/server-networking" class="see-all">Show All Server &amp; Storage</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/accessories">Accessories</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/keyboards">Keyboard</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrike-me-keyboard">Xtrike Me</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/razer-keyboard">RAZER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/gamdias-keyboard">GAMDIAS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/logitech-keyboard">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/a4-tech-keyboard">A4Tech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-keyboard">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/havit-keyboard">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aula-keyboard">AULA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/corsair-keyboard">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hyperx-keyboard">HyperX</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/rapoo-keyboard">Rapoo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-keyboard">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-keyboard">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/micropack-keyboard">Micropack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dareu-keyboard">Dareu</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-keyboard">Redragon</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/rk-royal-kludge-keyboard">ROYAL KLUDGE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-keyboard">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/gigabyte-keyboard">GIGABYTE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/meetion-keyboard">MeeTion</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/matis-keyboard">Matias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/t-wolf-keyboard">T-WOLF</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/keyboards/microsoft-surface-pro-keyboard">Microsoft</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-keyboard">NZXT</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/monka-keyboard">MONKA </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/targus-keyboard">Targus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/pc-power-keyboard">PC Power</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jedel-keyboard">Jedel</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-keyboard">Onikuma</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse">Mouse</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrike-me-mouse">Xtrike Me</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/razer-mouse"> RAZER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/gamdias-gaming-mouse">GAMDIAS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrfy-mouse">Xtrfy</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/asus-mouse">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/prolink-mouse">PROLiNK</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/apple-mouse">Apple</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/logitech-mouse">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/xiaomi-mouse">Xiaomi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-mouse">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/rapoo-mouse">Rapoo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/a4-tech-mouse">A4Tech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/havit-mouse">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/corsair-mouse">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dareu-mouse">Dareu</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-mouse">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/mouse/lenovo-mouse">Lenovo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-mouse">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hyperx-mouse">HyperX</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/matias-mouse">Matias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thunderobot-mouse">ThundeRobot</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/micropack-mouse">Micropack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-mouse">WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-mouse">Redragon</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/msi-mouse">MSI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/meetion-mouse">MeeTion</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/t-wolf-mouse">T-WOLF</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/nzxt-mouse">NZXT</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aula-mouse">AULA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/deepcool-mouse">DeepCool</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xigmatek-mouse">XIGMATEK</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jedel-mouse">Jedel</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/monka-mouse">Monka</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/pc-power-mouse">PC Power</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/powercolor-mouse">PowerColor</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-mouse">Onikuma</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-mouse">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/rk-royal-kludge-mouse">ROYAL KLUDGE</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/headphone">Headphone</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/razer-headphone">RAZER</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/logitech-headphone">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrike-me-headphone">Xtrike Me</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-headphone">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/havit-headphone">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/corsair-headphone">Corsair</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-headphone">Redragon</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/a4-tech-headphone">A4Tech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/edifier-headphone">Edifier</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/rapoo-headset">Rapoo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/jabra-headphone">Jabra</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-headphone">Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aula-headphone">AULA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/inbertec-headphone">Inbertec</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/jbl-headphones">JBL</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/eksa-headphone">EKSA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/apple-headphone">Apple</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/micropack-headphone">Micropack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hyperx-headphone">HyperX</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/rode-headphone">RODE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sony-headphone">Sony</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/t-wolf-headphone">T-WOLF</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/anker-headphone">Anker</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/headphone/audio-technica-headphone">Audio Technica</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/beyerdynamic-headphone">Beyerdynamic</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-headphone">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hifuture-headphone">HiFuture</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/akg-headphone">AKG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-headphone">JOYROOM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/awei-headphone">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/soundpeats-headphone">SoundPEATS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/tribit-headphone">Tribit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-headphone">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-headphone">WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/zoook-headphone">ZOOOK</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fastrack-headphone">Fastrack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-headphone">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thonet-and-vander-headphone">Thonet &amp; Vander</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/pc-power-headphone">PC Power</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/powercolor-headphone">PowerColor</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-headphone">Onikuma</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oneodio-headphone">OneOdio</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/vention-headphone">Vention</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/remax-headphone">Remax</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/bluetooth-headphone">Bluetooth Headphone</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse-pad">Mouse Pad</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse-pad/razer-mouse-pad">RAZER</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xtrike-me-mouse-pad">Xtrike Me</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-mouse-pad">Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/corsair-mouse-pad">Corsair</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fantech-mouse-pad">Fantech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse-pad/havit-mouse-pad">Havit</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse-pad/logitech-mouse-pad">Logitech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/mouse-pad/rapoo-mouse-pad">Rapoo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/steelseries-mouse-pad">SteelSeries </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/redragon-mouse-pad">Redragon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/meetion-mouse-pad">MeeTion</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/deepcool-mouse-pad">DeepCool</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/aula-mouse-pad">AULA</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/x-raypad-mouse-pad">X-Raypad</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/elgato-mouse-pad">Elgato</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/t-wolf-mouse-pad">T-Wolf</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/onikuma-mouse-pad">Onikuma</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/wrist-rest">Wrist Rest</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/headphone-stand">Headphone Stand</a></li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/speaker-and-home-theater">Speaker &amp; Home Theater</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jbl-speakers">JBL</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/bose-speaker">Bose</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sony-speaker">Sony</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/samsung-speaker">Samsung</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrike-me-speaker">Xtrike Me</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/edifier-speaker">Edifier</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/logitech-speaker">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/f-and-d-speaker">F&amp;D</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-speaker">Redragon</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/microlab-speaker">Microlab</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-speaker">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-speakers">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtreme-speaker">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yamaha-speaker">Yamaha</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/t-wolf-speaker">T-WOLF</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aula-speaker">AULA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/rapoo-speaker">Rapoo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/awei-speaker">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thonet-and-vander-speaker">Thonet &amp; Vander</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-speaker">Onikuma</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/bluetooth-speaker">Bluetooth Speakers</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aula-bluetooth-speaker">AULA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/anker-bluetooth-speakers">Anker</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtrike-me-bluetooth-speaker">Xtrike Me</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/awei">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/baseus-bluetooth-speaker">Baseus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/edifier">Edifier</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/earfun-bluetooth-speaker">EarFun</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/f-and-d">F&amp;D</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-bluetooth-speaker">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-bluetooth-speaker">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/havit">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hifuture-bluetooth-speaker">HiFuture</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-bluetooth-speaker">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jbl-bluetooth-speaker">JBL</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-bluetooth-speaker">JOYROOM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/lenovo-bluetooth-speaker">Lenovo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/marshall-bluetooth-speaker">Marshall</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/microlab">Microlab</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thunderobot-bluetooth-speaker">Thunderobot</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/micropack">Micropack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/logitech-bluetooth-speaker">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xinji-bluetooth-speaker">XINJI </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/samsung-bluetooth-speaker">Samsung</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sony-bluetooth-speaker">Sony</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/tribit-bluetooth-speaker">Tribit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-bluetooth-speaker">WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/xiaomi">XIAOMI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/bluetooth-speaker/xtreme">Xtreme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xpert-bluetooth-speaker">Xpert</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ldnio-bluetooth-speaker">LDNIO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-bluetooth-speaker">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ikarao-bluetooth-speaker">Ikarao</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-bluetooth-speaker">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thonet-and-vander-bluetooth-speaker">Thonet &amp; Vander</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/qcy-bluetooth-speaker">QCY</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-bluetooth-speaker">Onikuma</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/soundbar">Soundbar</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/webcam">Webcam</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/webcam/a4-tech-webcam">A4TECH</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/accessories/webcam/logitech-webcam">Logitech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-webcam">Asus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fantech-webcam">Fantech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/avermedia-webcam">AVerMedia</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/redragon-webcam">Redragon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rapoo-webcam">Rapoo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/magpie-webcam">Magpie</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/elgato-webcam">Elgato</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/cable">Cable</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/usb-cable">USB Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/type-c-cable">Type-C Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/audio-cable">Audio Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hdmi-cable">HDMI Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vga-cable">VGA Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/displayport-cable">DisplayPort Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dvi-cable">DVI Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lightning-cable">Lightning Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/printer-cable">Printer Cable</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cable-organizer">Cable Organizer</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/converter">Converter</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/usb-converter">USB Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/audio-converter">Audio Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/type-c-converter">Type-C Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hdmi-converter">HDMI Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vga-converter">VGA Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/displayport-converter">DisplayPort Converter</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dvi-converter">DVI Converter</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/card-reader">Card Reader</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/hub-and-dock">Hubs &amp; Docks</a></li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/microphone">Microphone</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/gamdias-microphone">Gamdias</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/maono-microphone">Maono</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/boya-microphone">BOYA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-microphone">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/microphone/audio-technica-microphone">Audio Technica</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/microphone/rode-microphone">RODE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/elgato-microphone">Elgato</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/microphone/sennheiser-microphone">Sennheiser</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/accessories/microphone/avermedia-microphone">AVerMedia</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-microphone">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hollyland-microphone">Hollyland</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/logitech-microphone">Logitech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/shure-microphone">Shure</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/k-and-f-concept-microphone">K&amp;F Concept</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/akg-microphone">AKG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/redragon-microphone">Redragon</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/synco-microphone">SYNCO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/saramonic-microphone">Saramonic</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/mirfak-microphone">MIRFAK</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/rapoo-microphone">Rapoo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/neumann-microphone">Neumann</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fifine-microphone">FIFINE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dji-microphone">DJI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-microphone"> Asus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-microphone">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ulanzi-microphone">Ulanzi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ugreen-microphone">UGREEN</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/a4tech-microphone">A4Tech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-microphone">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-microphone">Onikuma</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-microphone">WiWU</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/digital-voice-recorder">Digital Voice Recorder</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sony-digital-voice-recorder">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zoom-digital-voice-recorder">ZOOM</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/presenter">Presenter</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/logitech-presenter">Logitech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/targus-presenter">Targus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rapoo-presenter">Rapoo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/micropack-presenter">Micropack</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/baseus-presenter">Baseus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/prolink-presenter">PROLiNK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ugreen-presenter">Ugreen</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/a4tech-presenter">A4Tech</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/memory-card">Memory Card</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/team-memory-card">TEAM</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/pny-memory-card">PNY</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sandisk-memory-card">SanDisk</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/transcend-memory-card">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/apacer-memory-card">Apacer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lexar-memory-card">Lexar</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/adata-memory-card">Adata</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sony-memory-card">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/twinmos-memory-card">TwinMOS</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-memory-card">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nikon-memory-card">Nikon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dahua-memory-card">Dahua</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smart-memory-card">Smart</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hiksemi-memory-card">Hiksemi</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/sound-card">Sound Card</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/capture-card">Capture Card</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/avermedia-capture-card">AVerMedia</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/orico-capture-card">ORICO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ugreen-capture-card">Ugreen</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vention-capture-card">Vention</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/elgato-capture-card">Elgato</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/pen-drive">Pen Drive</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/team-pen-drive">TEAM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/transcend-pen-drive">Transcend</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/twinmos-pen-drive">TWINMOS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/adata-pen-drive">ADATA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ugreen-pen-drive">UGREEN</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sandisk-pen-drive">SanDisk</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/kingston-pen-drive">Kingston</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/apacer-pen-drive">Apacer</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/lexar-pen-drive">Lexar</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dahua-pen-drive">Dahua</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/netec-pen-drive">Netac</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/smart-pen-drive">Smart</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hiksemi-pen-drive">Hiksemi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/eaget-pen-drive">Eaget</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/zymak-pen-drive">Zymak</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/thermal-paste">Thermal Paste</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/accessories/enclosure">HDD-SSD Enclosure</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/orico-enclosure">Orico</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ugreen-enclosure">UGREEN</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/transcend-enclosure">Transcend</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/yuanxin-enclosure">Yuanxin</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cooler-master-enclosure">Cooler Master</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vention-enclosure">Vention</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/power-strip">Power Strip</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/deli-power-strip">Deli</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/havit-power-strip">Havit</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/huntkey-power-strip">Huntkey</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/maxline-power-strip">Maxline</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nano-power-strip">Nano</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/orico-power-strip">ORICO</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/belkin-power-strip">Belkin</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/anker-power-strip">Anker</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hoco-power-strip">Hoco</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/baseus-power-strip">Baseus</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/bluetooth-adapter">Bluetooth Adapter</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/accessories" class="see-all">Show All Accessories</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/gadget">Gadget</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/gadget/smart-watch">Smart Watch</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/amazfit-smart-watch">Amazfit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/apple-smart-watch">Apple</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/black-shark-smart-watch">Black Shark</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/boat-smart-watch">boAt</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cmf-smart-watch">cmf</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/colmi-smart-watch">COLMI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dizo-smart-watch">DIZO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fastrack-smart-watch">Fastrack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fireboltt-smart-watch">Fire-Boltt</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/g-tide-smartwatch">G-TiDE</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/google-smart-watch">Google</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-smart-watch">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/haylou-smart-watch">Haylou</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hifuture-smart-watch">HiFuture</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/huawei-smart-watch">HUAWEI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/imilab-smart-watch">IMILAB</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/kieslect-smart-watch">Kieslect</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/kospet-smart-watch">KOSPET</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/mibro-smart-watch">Mibro</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oneplus-smart-watch">OnePlus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-smart-watch">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/qcy-smart-watch">QCY</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/riversong-smart-watch">RIVERSONG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/samsung-smart-watch">Samsung</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/tagg-smart-watch">TAGG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/titan-smart-watch">Titan</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xiaomi-smart-watch">Xiaomi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xinji-smart-watch">XINJI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtra-smartwatch">XTRA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-smartwatch">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/zeblaze-smart-watch">Zeblaze</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/remax-smart-watch">Remax</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-smart-watch">Joyroom</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/infinix-smart-watch">Infinix</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/smart-band">Smart Band</a></li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/earphone">Earphone</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/apple-earphone">Apple</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/charg-earphone">CHARG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/awei-earphone">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/baseus-earphone">Baseus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/edifier-earphone">Edifier</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/energizer-earphone">Energizer</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-earphone">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-earphone">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jbl-earphone">JBL</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-earphone">JOYROOM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/blon-earphone">BLON</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/foneng-earphone">FONENG</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oneplus-earphone">OnePlus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-earphone">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/riversong-earphone">RIVERSONG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/earfun-earphone">EarFun</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xiaomi-earphone">Xiaomi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-earphone">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/zoook-earphone">ZOOOK</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hifuture-earphone">HiFuture</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thonet-and-vander-earphone">Thonet &amp; Vander</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-earphone">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/acefast-earphone">Acefast</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/earbuds">Earbuds</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/anker-earbuds">Anker</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/apple-airpods">Apple</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/charg-earbuds">CHARG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/asus-earbuds">ASUS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aukey-earbuds">AUKEY</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/awei-earbuds">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/baseus-earbuds">Baseus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/black-shark-earbuds">Black Shark</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/earfun-earbuds">EarFun</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/edifier-earbuds">Edifier</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fastrack-earbuds">Fastrack</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/foneng-earbuds">FONENG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-earbuds">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/haylou-earbuds">Haylou</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hifuture-earbuds">HiFuture</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-earbuds">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/honor-earbuds">HONOR </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/huawei-earbuds">HUAWEI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/imilab-earbuds">IMILAB</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jabra-earbuds">Jabra</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/jbl-earbuds">JBL</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-earbuds">JOYROOM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/mibro-earbuds">Mibro</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oneplus-earbuds">OnePlus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-earbuds">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/qcy-earbuds">QCY</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/realme-earbuds">Realme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/riversong-earbuds">RIVERSONG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/samsung-earbuds">Samsung</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sony-earbuds">Sony</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/soundpeats-earbuds">SoundPEATS</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/vyvylabs-earbuds">Vyvylabs</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-earbuds">WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xiaomi-earbuds">Xiaomi</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xinji-earbuds">XINJI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-earbuds">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/choetech-earbuds">Choetech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cmf-earbuds">cmf</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/steelseries-earbuds">SteelSeries</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/onikuma-earbuds">Onikuma</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/tecno-earbuds">Tecno</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/vention-earbuds">Vention</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/mini-fan">Mini Fan</a></li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/neckband">Neckband</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/baseus-neckband">Baseus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/charg-neckband">CHARG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/dizo-neckband">DIZO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-neckband">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/honor-neckband">HONOR</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/lenovo-neckband">Lenovo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/megastar-neckband">Megastar </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oneplus-neckband">OnePlus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-neckband">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/realme-neckband">Realme</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/riversong-neckband">RIVERSONG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wavefun-neckband">Wavefun</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-neckband">WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xiaomi-neckband">XIAOMI</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xtra-neckband">XTRA</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-neckband">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/qcy-neckband">QCY</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/govo-neckband">GOVO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/foneng-neckband">FONENG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/cmf-neckband">cmf</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/thonet-and-vander-neckband">Thonet &amp; Vander</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/acefast-neckband">Acefast</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/microlab-neckband">Microlab</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/smart-glasses">Smart Glasses</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/smart-ring">Smart Ring</a></li>
                                        <li class="nav-item has-child multi-col">
                        <a class="nav-link" href="https://www.startech.com.bd/power-bank">Power Bank</a>
                        <div class="drop-down drop-menu-2">
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/adata-power-bank">Adata</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/anker-power-bank">Anker</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/awei-power-bank">Awei</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/basues-power-bank">Baseus</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/havit-power-bank">Havit</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/hoco-power-bank">Hoco</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/joyroom-power-bank">JOYROOM</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/oraimo-power-bank">Oraimo</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/recci-power-bank">RECCI </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/remax-power-bank">Remax</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/vyvylabs-power-bank">Vyvylabs</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ugreen-power-adapter">UGREEN</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/xiaomi-power-bank">Xiaomi</a>
                                </li>
                                                            </ul>
                                                        <ul>
                                                                <li>
                                    <a href="https://www.startech.com.bd/wiwu-power-bank"> WiWU</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/ldnio-power-bank">LDNIO</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/yison-power-bank">Yison</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/aukey-power-bank">AUKEY </a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/voltme-power-bank">VOLTME</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/vention-power-bank">Vention</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/choetech-power-bank">Choetech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/fantech-power-bank">Fantech</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/foneng-power-bank">FONENG</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/honor-power-bank">Honor</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/charg-power-bank">Charg</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/sannai-power-bank">Sannai</a>
                                </li>
                                                                <li>
                                    <a href="https://www.startech.com.bd/mkb-power-bank">MKB</a>
                                </li>
                                                            </ul>
                                                    </div>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/portable-power-station">Portable Power Station</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ecoflow-portable-power-station">EcoFlow</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/tv-box">TV Box</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/studio-equipment">Studio Equipment</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/studio-microphones">Studio Microphones</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/studio-monitors">Studio Monitors</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/studio-headphones">Studio Headphones</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/audio-interfaces">Audio Interfaces</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/switcher">Switcher</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/musical-keyboard">Musical Keyboard</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/drone">Drones</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dji-drone">DJI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/mini-toy-drone">Mini Toy Drone</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/4k-drone">4K Drone</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/professional-drone">Professional Drone</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/enterprise-drone">Enterprise Drone</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/drone-accessories">Drone Accessories</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/gimbal">Gimbal</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/dji-gimbal">DJI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zhiyun-gimbal">Zhiyun</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/insta360-gimbal">Insta360</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/baseus-gimbal">Baseus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hohem-gimbal">Hohem</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/feiyutech-gimbal">Feiyu</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gadget/daily-lifestyle">Daily Lifestyle</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/calculator">Calculator</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/casio-calculator">Casio</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/scientific-calculator">Scientific Calculator</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/blower-machine">Blower Machine</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/stream-deck">Stream Deck</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/gadget" class="see-all">Show All Gadget</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/gaming">Gaming</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-chair">Gaming Chair</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/phantom-edge-gaming-chair">Phantom Edge</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/cougar-gaming-chair">Cougar</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gamemax-gaming-chair">GameMax</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/meetion-gaming-chair">MeeTion</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/corsair-gaming-chair">Corsair</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-desk">Gaming Desk</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-keyboard">Keyboard</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-mouse">Mouse</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-headphone">Headphone</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-mouse-pad">Mouse Pad</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/game-pad">Gamepad</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/razer-gamepad-controller">Razer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xbox-gamepad-controller">Xbox</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/playstation-gamepad-controller">PlayStation</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nintendo-gamepad">Nintendo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xtrike-me-gamepad">Xtrike Me</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gaming/game-pad/logitech-gamepad">Logitech</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/fantech-gamepad">Fantech </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/havit-gamepad">Havit</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rapoo-gamepad">Rapoo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/redragon-gamepad">Redragon</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/steelseries-gamepad">SteelSeries</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/corsair-gamepad">Corsair</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/vr">VR</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/gaming-console">Gaming Console</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/play-station">PlayStation</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xbox">Xbox</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/nintendo-gaming-console">Nintendo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/asus-gaming-console">Asus </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lenovo-gaming-console">Lenovo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/steam-deck-gaming-console">Steam Deck</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/ps4-n-x-box-one-games">Games</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/gaming" class="see-all">Show All Gaming</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/television-shop">TV</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/television-startech">All TV</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hisense-tv">Hisense</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-television">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sony-television">Sony</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xiaomi-television">XIAOMI</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/haier-television">Haier</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/singer-television">SINGER</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lg-tv">LG</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rowa-television">ROWA</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/oneplus-television">OnePlus</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/daewoo-television">Daewoo</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smart-brand-tv">SMART</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rangs-television">Rangs</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/beko-television">beko</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/led-tv">LED TV</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/smart-tv">Smart TV</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/android-tv">Android TV</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/4k-tv">4K TV</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/akash-dth">AKASH Digital TV</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/wall-mount">TV Stand &amp; Wall Mount</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/television-shop" class="see-all">Show All TV</a>
                    </li>
                </ul>
            </li>
                        <li class="nav-item has-child">
                <a class="nav-link" href="https://www.startech.com.bd/appliance">Appliance</a>
                <ul class="drop-down drop-menu-1">
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/air-conditioner">AC</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hisense-ac">Hisense</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gree-ac">Gree</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/haier-air-conditioner">Haier</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/midea-ac">Midea</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/general-air-conditioner">General</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smart-ac"> SMART</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-air-conditioner">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sharp-ac">Sharp</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xiaomi-ac">Xiaomi</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/walton-ac">Walton</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/panasonic-ac">Panasonic</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/beko-ac">beko</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/singer-air-conditioner">SINGER</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/elite-air-conditioner">Elite</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hyundai-ac">Hyundai</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lg-ac">LG</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kelvinator-ac">Kelvinator</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/daewoo-ac">Daewoo</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/refrigerator">Refrigerator </a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sharp-refrigerator">Sharp</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hisense-refrigerator">Hisense</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/haier-refrigerator">Haier</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/beko-refrigerator">beko</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lg-refrigerator">LG</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/kelvinator-refrigerator">Kelvinator</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/whirlpool-refrigerator">Whirlpool</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/rangs-refrigerator">Rangs</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/smart-refrigerator">Smart</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/washing-machine">Washing Machine</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/haier-washing-machine">Haier </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-washing-machine">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hisense-washing-machine">Hisense</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sharp-washing-machine">Sharp</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/singer-washing-machine">Singer</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/beko-washing-machine">beko</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/whirlpool-washing-machine">Whirlpool</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/lg-washing-machine">LG</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/fan">Fan</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/charger-fan">Charger Fan</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/ceiling-fan">Ceiling Fan</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/stand-fan">Stand Fan</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/sewing-machine">Sewing Machine</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/jack-sewing-machine">JACK</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/singer-sewing-machine">SINGER</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/zoje-sewing-machine">ZOJE</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/air-purifier">Air Purifier</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/air-cooler">Air Cooler</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/gree-air-cooler">Gree</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/vision-air-cooler">Vision</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/air-fryer">Air Fryer</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/vacuum-cleaner">Vacuum Cleaner</a></li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/oven">Oven</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/walton-oven">Walton</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/sharp-oven">Sharp</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/panasonic-oven">Panasonic</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/samsung-oven">Samsung</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/hisense-oven">Hisense</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/blender">Blender</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/panasonic-blender">Panasonic</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/xiaomi-blender">Xiaomi </a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/philips-blender">Philips</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item has-child">
                        <a class="nav-link" href="https://www.startech.com.bd/geyser-water-heater">Geyser</a>
                        <ul class="drop-down drop-menu-2">
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/midea-geyser-and-water-heater">Midea</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/shameem-geyser-and-water-heater">Shameem</a>
                            </li>
                                                        <li class="nav-item">
                                <a class="nav-link" href="https://www.startech.com.bd/haier-geyser-and-water-heater">Haier</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/room-heater">Room Heater</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/electric-kettle">Electric Kettle</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/cooker">Cooker</a></li>
                                        <li class="nav-item">
                        <a class="nav-link" href="https://www.startech.com.bd/iron">Iron</a></li>
                                        <li>
                        <a href="https://www.startech.com.bd/appliance" class="see-all">Show All Appliance</a>
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
    <span class="counter">0</span>
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
    <div class="content"><div class="loader"></div></div>
    <div class="footer btn-wrap"></div>
</div>

<div class="drawer m-cart" id="m-cart">
    <div class="title">
        <p>YOUR CART</p>
        <span class="mc-toggler"><i class="material-icons">close</i></span>
    </div>
    <div class="content"><div class="loader"></div></div>
    <div class="footer"></div>
</div>

<section class="after-header">
    <div class="container">
        <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li><a href="https://www.startech.com.bd/"><i class="material-icons" title="Home">home</i></a></li>
                        <li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="https://www.startech.com.bd/laptop-notebook"><span itemprop="name">Laptop</span></a><meta itemprop="position" content="1" /></li>
                        <li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="https://www.startech.com.bd/laptop-notebook/laptop"><span itemprop="name">All Laptop</span></a><meta itemprop="position" content="2" /></li>
                        <li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="https://www.startech.com.bd/lenovo-laptop"><span itemprop="name">Lenovo</span></a><meta itemprop="position" content="3" /></li>
                        <li  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemtype="http://schema.org/Thing" itemprop="item" href="https://www.startech.com.bd/lenovo-ideapad-5-2-in-1-14ahp9-laptop"><span itemprop="name">Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop</span></a><meta itemprop="position" content="4" /></li>
                    </ul>
    </div>
</section>
<div class="product-details content" itemscope itemtype="http://schema.org/Product">
    <meta itemprop="sku" content="42737">
    <div class="product-details-summary">
        <div class="container">
            <div class="pd-q-actions">
                <div class="share-on">
                    <span class="share" >Share:</span>
                    <span class="icon-sprite share-ico messenger-dark" data-type="messenger"></span>
                    <span class="icon-sprite share-ico pinterest-dark" data-type="pinterest"></span>
                    <span class="icon-sprite share-ico whatsapp-dark" data-type="whatsapp"></span>
                </div>
                <div class="options">
                    <span class="add-list" onclick="wishlist.add('42737');"><i class="material-icons">bookmark_border</i> Save</span>
                    <span class="add-compare" onclick="compare.add('42737');"><i class="material-icons">library_add</i> Add to Compare</span>
                </div>
            </div>
            <div class="basic row">
                <div class="col-md-5 left">
                    <div class="images product-images">
                                                <div class="product-img-holder">
                            <a class="thumbnail" href="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-008-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop"><img class="main-img" src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-008-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" alt="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" width="500" height="500"/></a>
                            <meta itemprop="image"  content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-008-500x500.webp"/>
                        </div>
                                                                        <ul class="thumbnails">
                                                        <li><a class="thumbnail" href="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-02-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-02-74x74.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" alt="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" width="74" height="74"/></a></li>
                            <meta itemprop="image"  content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-02-500x500.webp"/>
                                                        <li><a class="thumbnail" href="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-03-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-03-74x74.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" alt="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" width="74" height="74"/></a></li>
                            <meta itemprop="image"  content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-03-500x500.webp"/>
                                                        <li><a class="thumbnail" href="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-04-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-04-74x74.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" alt="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" width="74" height="74"/></a></li>
                            <meta itemprop="image"  content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-04-500x500.webp"/>
                                                        <li><a class="thumbnail" href="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-06-500x500.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-06-74x74.webp" title="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" alt="Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop" width="74" height="74"/></a></li>
                            <meta itemprop="image"  content="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-5-2-in-1-14ahp9/ideapad-5-2-in-1-14ahp9-06-500x500.webp"/>
                                                    </ul>
                                            </div>    <div class="ads" data-position="18"></div>
                  </div>
                <div class="col-md-7 right" id="product">
                    <div class="pd-summary">
                        <div class="product-short-info">
                            <h1 itemprop="name" class="product-name">Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop</h1>
                            <table class="product-info-table">
                                <tr class="product-info-group">
                                    <td class="product-info-label">Price</td>
                                                                        <td class="product-info-data product-price">99,500৳</td>
                                                                    </tr>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Regular Price</td>
                                    <td class="product-info-data product-regular-price">107,800৳</td>
                                </tr>                                <tr class="product-info-group">
                                    <td class="product-info-label">Status</td>
                                    <td class="product-info-data product-status">In Stock</td>
                                </tr>
                                <tr class="product-info-group">
                                    <td class="product-info-label">Product Code</td>
                                    <td class="product-info-data product-code">42737</td>
                                </tr>
                                <tr class="product-info-group" itemprop="brand" itemtype="http://schema.org/Thing" itemscope>
                                    <td class="product-info-label">Brand</td>
                                    <td class="product-info-data product-brand" itemprop="name">Lenovo</td>
                                </tr>
                            </table>
                        </div>
                        <div class="short-description" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <link itemprop="availability" href="http://schema.org/InStock"/>
                            <link itemprop="itemCondition" href="http://schema.org/NewCondition">
                            <meta itemprop="priceCurrency" content="BDT" />
                            <meta itemprop="price" content="99500.0000" />
                            <h2>Key Features</h2>
                            <ul><li>MPN: 83DR0080LK</li><li>Model: IdeaPad 5 2-in-1 14AHP9</li><li>Processor: AMD Ryzen 5 8645HS (16MB L3 Cache, Up to 5.0GHz)
</li><li>Ram: 16GB LPDDR5x-6400MHz, Storage: 512GB M.2 PCIe 4.0x4 NVMe SSD
</li><li>Display: 14&quot; WUXGA (1920x1200) IPS 300nits Glossy, Glass, Touch
</li><li>Features: Backlit Keyboard, Privacy Shutter, Fingerprint, Type-C, Wi-Fi 6</li><li class="view-more" data-area="specification">View More Info</li></ul>
                        </div>
                                                <div class="stickers">

                                                                                                                <div class="sticker reward">
                                <span class="material-icons">stars</span>
                                <span class="points">500</span>
                                <span class="text">Star Points</span>
                            </div>
                                                                                </div>
                                                                                                                        <h2>Payment Options</h2>
                        <div class="product-price-options">
                            <label class="p-wrap cash active">
                                <input type="radio" name="enable_emi" checked value="0"/>
                                                                <span class="price">99,500৳</span>
                                                                <div class="p-tag">Cash Discount Price</div>                                <div class="p-tag fade">Online / Cash Payment</div>
                            </label>
                                                        <label class="p-wrap emi">
                                <input type="radio" name="enable_emi" value="1" />
                                <span class="price">8,983৳/month</span>
                                <div class="p-tag regular">Regular Price: 107,800৳</div>
                                <div class="p-tag fade">0% EMI for up to 12 Months***</div>
                            </label>
                                                    </div>
                        <div class="cart-option">
                            <label class="quantity">
                                <span class="ctl"><i class="material-icons">remove</i></span>
                                <span class="qty"><input type="text" name="quantity" id="input-quantity" value="1" size="2"></span>
                                <span  class="ctl increment"><i class="material-icons">add</i></span>
                                <input type="hidden" name="product_id" value="42737" />
                            </label>
                            <button id="button-cart" class="btn submit-btn" data-loading-text="Loading...">Buy Now</button>
                                                    </div>
                                                                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pd-full">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12"><div class="navs">
    <ul class="nav">
        <li data-area="specification">Specification</li><li data-area="description">Description</li><li class="hidden-xs" data-area="ask-question">Questions (0)</li><li data-area="write-review">Reviews (0)</li>
    </ul>
</div>
<section class="specification-tab m-tb-10" id="specification">
    <div class="section-head">
        <h2>Specification</h2>
    </div>
    <table class="data-table flex-table" cellpadding="0" cellspacing="0">
        <colgroup>
            <col class="name"/>
            <col class="value"/>
        </colgroup>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Processor</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Processor Brand</td><td class="value">AMD </td>
        </tr><tr>
            <td  class="name">Processor Model</td><td class="value">Ryzen 5 8645HS</td>
        </tr><tr>
            <td  class="name">Processor Frequency</td><td class="value">4.3 / 5.0GHz</td>
        </tr><tr>
            <td  class="name">Processor Core</td><td class="value">6 Core</td>
        </tr><tr>
            <td  class="name">Processor Thread</td><td class="value">12T</td>
        </tr><tr>
            <td  class="name">CPU Cache</td><td class="value">16MB L3 Cache</td>
        </tr><tr>
            <td  class="name">NPU</td><td class="value">Integrated AMD Ryzen AI, up to 16 TOPS</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Chipset</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Chipset Model</td><td class="value">AMD SoC Platform</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Display</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Display Size</td><td class="value">14&quot;</td>
        </tr><tr>
            <td  class="name">Display Type</td><td class="value">IPS</td>
        </tr><tr>
            <td  class="name">Display Resolution</td><td class="value">WUXGA (1920x1200)</td>
        </tr><tr>
            <td  class="name">Touch Screen</td><td class="value">Yes, 10-point Multi-touch</td>
        </tr><tr>
            <td  class="name">Refresh Rate</td><td class="value">60Hz</td>
        </tr><tr>
            <td  class="name">Display Features</td><td class="value">300nits Glossy, 45% NTSC, TÜV Low Blue Light, Glass</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Memory</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">RAM</td><td class="value">16GB (Soldered)<br />
</td>
        </tr><tr>
            <td  class="name">RAM Type</td><td class="value">LPDDR5x</td>
        </tr><tr>
            <td  class="name">Removable</td><td class="value">No</td>
        </tr><tr>
            <td  class="name">Bus Speed</td><td class="value">6400MHz</td>
        </tr><tr>
            <td  class="name">Total RAM Slot</td><td class="value">N/A</td>
        </tr><tr>
            <td  class="name">Max RAM Capacity</td><td class="value">16GB</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Storage</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Storage Type</td><td class="value">M.2 2242 PCIe 4.0x4 NVMe SSD</td>
        </tr><tr>
            <td  class="name">Storage Capacity</td><td class="value">512GB </td>
        </tr><tr>
            <td  class="name">Extra M.2 Slot</td><td class="value">N/A</td>
        </tr><tr>
            <td  class="name">Supported SSD Type</td><td class="value">M.2 2242 PCIe 4.0 x4</td>
        </tr><tr>
            <td  class="name">Storage Upgrade</td><td class="value">up to 1TB M.2 2242 SSD</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Graphics</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Graphics Model</td><td class="value">AMD Radeon 760M Graphics</td>
        </tr><tr>
            <td  class="name">Graphics Memory</td><td class="value">Shared</td>
        </tr><tr>
            <td  class="name">Graphics Type</td><td class="value">Integrated</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Keyboard &amp; TouchPad</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Keyboard Type</td><td class="value">Backlit, English (EU)</td>
        </tr><tr>
            <td  class="name">TouchPad</td><td class="value">Buttonless Mylar surface multi-touch touchpad, supports Precision TouchPad (PTP), 75 x 120 mm (2.95 x 4.72 inches)</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Camera &amp; Audio</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">WebCam</td><td class="value">FHD 1080p</td>
        </tr><tr>
            <td  class="name">Speaker</td><td class="value">Stereo speakers, 2W x2<br />
High Definition (HD) Audio</td>
        </tr><tr>
            <td  class="name">Microphone</td><td class="value">2x, Array Microphone</td>
        </tr><tr>
            <td  class="name">Audio Features</td><td class="value">Optimized with Dolby Audio</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Ports &amp; Slots</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Optical Drive</td><td class="value">N/A</td>
        </tr><tr>
            <td  class="name">Card Reader</td><td class="value">1x microSD Card Reader</td>
        </tr><tr>
            <td  class="name">HDMI Port</td><td class="value">1x HDMI 1.4b</td>
        </tr><tr>
            <td  class="name">USB 3 Port</td><td class="value">1x USB-A (USB 5Gbps / USB 3.2 Gen 1)<br />
1x USB-A (USB 5Gbps / USB 3.2 Gen 1), Always On</td>
        </tr><tr>
            <td  class="name">USB Type-C / Thunderbolt Port</td><td class="value">2x USB-C (USB 10Gbps / USB 3.2 Gen 2), with USB PD 3.1 and DisplayPort™ 1.4</td>
        </tr><tr>
            <td  class="name">Headphone &amp; Microphone Port</td><td class="value">1x Headphone / microphone combo jack (3.5mm)</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Network &amp; Connectivity</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">LAN</td><td class="value">N/A</td>
        </tr><tr>
            <td  class="name">WiFi</td><td class="value">Wi-Fi 6, 802.11ax 2x2</td>
        </tr><tr>
            <td  class="name">Bluetooth</td><td class="value">Bluetooth 5.3</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Security</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Fingerprint Sensor</td><td class="value">Touch Style, on Palm Rest</td>
        </tr><tr>
            <td  class="name">Camera Privacy Shutter</td><td class="value">Yes</td>
        </tr><tr>
            <td  class="name">Security Chip</td><td class="value">Microsoft Pluton TPM 2.0 Enabled</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Software</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Operating System</td><td class="value">Windows 11 Home Single Language, English</td>
        </tr><tr>
            <td  class="name">Other Pre-installed Softwares</td><td class="value">Office Trial</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Power</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Battery Type</td><td class="value">Integrated</td>
        </tr><tr>
            <td  class="name">Battery Capacity</td><td class="value">57Wh</td>
        </tr><tr>
            <td  class="name">Adapter Type</td><td class="value">65W USB-C (3-pin)</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Physical Specification</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Color</td><td class="value">Cosmic Blue</td>
        </tr><tr>
            <td  class="name">Dimensions</td><td class="value">313 x 227 x 17.9 mm (12.32 x 8.94 x 0.70 inches)</td>
        </tr><tr>
            <td  class="name">Weight</td><td class="value">Starting at 1.6 kg (3.53 lbs)</td>
        </tr><tr>
            <td  class="name">Body Material</td><td class="value">Surface Treatment: Metallic Painting<br />
Case Material: PC-ABS + 40% GF (Top), PC-ABS + 40% GF (Bottom)</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Other Features</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Other Features</td><td class="value">Green Certifications:<br />
ENERGY STAR 8.0<br />
EPEAT Gold Registered<br />
ErP Lot 6/26<br />
RoHS compliant<br />
Other Certifications	<br />
Models with IPS panel: TÜV Rheinland Low Blue Light (Software Solution)<br />
Mil-Spec Test: MIL-STD-810H military test passed (21 test items)<br />
Stylus Included</td>
        </tr>        </tbody>
                <thead>
        <tr>
            <td class="heading-row" colspan="3">Warranty</td>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td  class="name">Warranty Details</td><td class="value">02 years Limited Warranty (Terms &amp; Conditions Apply As Per Lenovo)</td>
        </tr>        </tbody>
            </table>
</section><section class="description bg-white m-tb-15" id="description">
    <div class="section-head">
        <h2>Description</h2>
    </div>
    <div class="full-description" itemprop="description"><h2>Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14" WUXGA Touch Laptop</h2><p>The Lenovo <strong>IdeaPad 5 2-in-1 14AHP9</strong> is a multifunctional and powerful <a href="https://www.startech.com.bd/laptop-notebook/laptop" target="" style="color: rgb(0, 0, 0);">laptop</a>. Designed for users that require power, portability, and flexibility. It is powered by the AMD Ryzen 5 8645HS CPU, which features 6 cores and 12 threads, capable of reaching speeds of up to 5.0 GHz. It easily handles multitasking and demanding workloads. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 Touch Laptop features AMD Ryzen AI, delivering up to 16 TOPS for next-generation AI capabilities, and Radeon 760M graphics, which support fluid visuals and everyday gaming. The 14-inch WUXGA IPS touchscreen display has a 1920x1200 resolution, 300 nits of brightness, and TÜV Low Blue Light certification, making it gentle on the eyes and suitable for both productivity and entertainment. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 AI Laptop's convertible form and 10-point multi-touch capability provide additional versatility for work, drawing, and media consumption. The Lenovo touch AI laptop comes with 16GB of LPDDR5x-6400 RAM soldered in dual-channel mode and a 512GB PCIe 4.0x4 SSD for quick, responsive storage. The Lenovo IdeaPad 5 2-in-1 14AHP9 Touch Laptop boasts broad connectivity, including two USB-C 3.2 Gen 2 ports (supporting USB PD 3.1 and DisplayPort 1.4), two USB-A 3.2 Gen 1 ports (one always-on), HDMI 1.4b, a microSD card reader, and a 3.5mm audio jack. It supports Wi-Fi 6 and Bluetooth 5.3 for speedy wireless communications. The audio quality is improved with 2W stereo speakers with Dolby Audio and twin array microphones. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 Touch Laptop includes a Full HD 1080p camera with a privacy shutter and a touch-style fingerprint reader on the palm rest for extra protection and privacy. The 57Wh battery provides long-lasting performance and charges with a 65W USB-C adaptor. This Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14" WUXGA Touch Laptop is both functional and stylish, thanks to its aluminum design, backlit keyboard, and Windows 11 Home operating system. It fulfills MIL-STD-810H durability standards and has several green certifications, including ENERGY STAR 8.0 and EPEAT Gold, making it a dependable and environmentally aware option.</p><h2>Buy Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Touch Laptop from Star Tech</h2><p>In Bangladesh, you can get original <strong>Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Touch Laptop</strong> From Star Tech. We have a large collection of latest <a href="https://www.startech.com.bd/lenovo-laptop" target="" style="">Lenovo Laptop</a> to purchase. Order Online Or Visit your Nearest <a href="https://www.startech.com.bd" target="">Star Tech Shop</a> to get yours at lowest price. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Touch Laptop comes with 2-year warranty (Battery &amp; Adapter 1 Year).</p></div>
</section>
<section class="latest-price bg-white m-tb-15" id="latest-price">
    <div class="section-head">
        <h2>What is the price of Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop in Bangladesh?</h2>
    </div>
    <p>The latest price of Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop in Bangladesh is 99,500৳. You can buy the Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop at best price from our website or visit any of our showrooms.</p>
</section><section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
    <div class="section-head">
        <div class="title-n-action">
            <h2>Questions (0)</h2>
            <p class="section-blurb">Have question about this product? Get specific details about this product from expert.</p>
        </div>
        <div class="q-action">
            <a href="https://www.startech.com.bd/account/question?product_id=42737" class="btn st-outline">Ask Question</a>
        </div>
    </div>
    <div id="question"><div class="empty-content">
    <span class="icon material-icons">textsms</span>
    <div class="empty-text">There are no questions asked yet. Be the first one to ask a question.</div>
</div>
</div>
</section>
<section class="review  q-n-r-section bg-white m-tb-15" id="write-review">
    <div class="section-head">
        <div class="title-n-action">
            <h2>Reviews (0)</h2>
            <p class="section-blurb">Get specific details about this product from customers who own it.</p>
            <div class="average-rating">
                            </div>
        </div>
        <div class="q-action">
            <a href="https://www.startech.com.bd/account/review?product_id=42737" class="btn st-outline">Write a Review</a>
        </div>
    </div>
    <div id="review">  <div class="empty-content">
      <span class="icon material-icons">assignment</span>
      <div class="empty-text">This product has no reviews yet. Be the first one to write a review.</div>
  </div>
</div>
</section></div>
                <div class="col-lg-3 col-md-12 c-left">
                    <section class="related-product-list">
                        <h3>Related Product</h3>
                                                <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-core-i5-12th-gen-15-6-inch-laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i-i5/ideapad-slim-3i-80x80.webp" alt="Lenovo IdeaPad Slim 3i 15IAU7 Core i5 12th Gen 15.6&quot; FHD Laptop with Windows 11" width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-core-i5-12th-gen-15-6-inch-laptop">Lenovo IdeaPad Slim 3i 15IAU7 Core i5 12th Gen 15.6&quot; FHD Laptop with Windows 11</a>
                                </h4>
                                <div class="p-item-price price">
                                                                        <span class="price-new">77,000৳</span> <span class="price-old">83,000৳</span>
                                                                    </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('31493');"><i class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                                                <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/lenovo-ideapad-3i-15itl6-core-i7-11th-gen-16gb-ram-laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i-15itl6/ideapad-slim-3i-15itl6-80x80.webp" alt="Lenovo IdeaPad 3i 15ITL6 core i7 11th Gen 16GB RAM 15.6&quot; FHD Laptop" width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/lenovo-ideapad-3i-15itl6-core-i7-11th-gen-16gb-ram-laptop">Lenovo IdeaPad 3i 15ITL6 core i7 11th Gen 16GB RAM 15.6&quot; FHD Laptop</a>
                                </h4>
                                <div class="p-item-price price">
                                                                        <span class="price-new">76,000৳</span> <span class="price-old">81,500৳</span>
                                                                    </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('34371');"><i class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                                                <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/lenovo-loq-15iax9-i5-12th-gen-gaming-laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/loq-15iax9/loq-15iax9-01-80x80.webp" alt="Lenovo LOQ 15IAX9 Core i5 12th Gen RTX 2050 4GB Graphics 15.6&quot; FHD 144Hz Gaming Laptop" width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/lenovo-loq-15iax9-i5-12th-gen-gaming-laptop">Lenovo LOQ 15IAX9 Core i5 12th Gen RTX 2050 4GB Graphics 15.6&quot; FHD 144Hz Gaming Laptop</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>99,500৳</span>                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('37171');"><i class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                                                <div class="p-s-item">
                            <div class="image-holder">
                                <a href="https://www.startech.com.bd/lenovo-ideapad-slim-5-16imh9-core-ultra-5-125h-laptop"><img src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-5-16imh9/ideapad-slim-5-16imh9-01-80x80.webp" alt="Lenovo IdeaPad Slim 5 16IMH9 Core Ultra 5 125H AI Integrated 16&quot; WUXGA Laptop" width="80" height="80"></a>
                            </div>
                            <div class="caption">
                                <h4 class="product-name">
                                    <a href="https://www.startech.com.bd/lenovo-ideapad-slim-5-16imh9-core-ultra-5-125h-laptop">Lenovo IdeaPad Slim 5 16IMH9 Core Ultra 5 125H AI Integrated 16&quot; WUXGA Laptop</a>
                                </h4>
                                <div class="p-item-price price">
                                    <span>118,000৳</span>                                </div>
                                <div class="actions">
                                    <span class="btn-compare" onclick="compare.add('39229');"><i class="material-icons">library_add</i>Add to Compare</span>
                                </div>
                            </div>
                        </div>
                                            </section>
                    <section class="related-product-list">
                        <h3>Recently Viewed</h3>
                                            </section>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="main-footer">

            <div class="footer-block contact-us">
                <h4>Support</h4>

                <a href="tel:16793" class="helpline-btn footer-big-btn">
                    <div class="ic"><i class="material-icons">phone</i></div>
                    <p>9 AM - 8 PM </p>
                    <h5>16793</h5>
                </a>

                <a href="https://www.startech.com.bd/information/contact" class="store-locator-btn footer-big-btn">
                    <div class="ic"><i class="material-icons">place</i></div>
                    <p>Store Locator</p>
                    <h5>Find Our Stores</h5>
                </a>
            </div>

            <div class="footer-block about-us">
                <h4>About Us</h4>
                <ul>
                                        <li><a href="https://www.startech.com.bd/affiliate-program">Affiliate Program</a></li>
                                        <li><a href="https://www.startech.com.bd/emi-terms">EMI Terms</a></li>
                                        <li><a href="https://www.startech.com.bd/about_us">About Us</a></li>
                                        <li><a href="https://www.startech.com.bd/online-delivery">Online Delivery</a></li>
                                        <li><a href="https://www.startech.com.bd/privacy">Privacy Policy</a></li>
                                        <li><a href="https://www.startech.com.bd/warranty-policy">Terms and Conditions</a></li>
                                        <li><a href="https://www.startech.com.bd/refund-policy">Refund and Return Policy</a></li>
                                        <li><a href="https://www.startech.com.bd/star-point-policy">Star Point Policy</a></li>
                                        <li><a href="https://www.startech.com.bd/career">Career</a></li>
                                        <li><a href="https://www.startech.com.bd/blog">Blog</a></li>
                    <li><a href="https://www.startech.com.bd/information/contact">Contact Us</a></li>
                    <li><a href="https://www.startech.com.bd/product/manufacturer">Brands</a></li>
                </ul>
            </div>
            <div class="footer-block org-info">
                <h4>Stay Connected</h4>
                <p><b class="store-name">Star Tech Ltd</b><br/>Head Office: 28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka 1000</p>
                <p><b>Email:</b><br/><a href="mailto:webteam@startechbd.com">webteam@startechbd.com</a> </p>
            </div>
        </div>

        <div class="social-footer">
            <div class="app-links">
                <span class="app-link-text">Experience Star Tech App on your mobile:</span>
                <span class="app-link-items">
                    <a class="app-link" href="https://play.google.com/store/apps/details?id=com.startech.shop" target="_blank" rel="noopener" title="Star Tech Android APP">
                        <span class="icon-sprite playstore"></span>
                        <span class="app-link-text">
                            <span class="download">Download on</span>
                            <span class="app-store">Google Play</span>
                        </span>
                    </a>
                    <a class="app-link" href="https://apps.apple.com/app/id6443544088" target="_blank" rel="noopener" title="Star Tech ISO APP">
                        <span class="icon-sprite applestore"></span>
                        <span class="app-link-text">
                            <span class="download">Download on</span>
                            <span class="app-store">App Store</span>
                        </span>
                    </a>
                </span>
            </div>
            <div class="social-links">
                <a href="https://whatsapp.com/channel/0029VaSRMY9AO7RINROxvC3u" target="_blank" rel="noopener" title="Whatsapp">
                    <span class="icon-sprite whatsapp"></span>
                </a>
                <a href="https://www.facebook.com/star.tech.ltd/" target="_blank" rel="noopener" title="Facebook">
                    <span class="icon-sprite fb"></span>
                </a>
                <a href="https://www.youtube.com/channel/UC-SDF_4DM3unoP7JeAodz2g" target="_blank" rel="noopener" title="Youtube">
                    <span class="icon-sprite youtube"></span>
                </a>
                <a href="https://www.instagram.com/startech.com.bd/" target="_blank" rel="noopener" title="Instagram">
                    <span class="icon-sprite insta"></span>
                </a>
            </div>
        </div>
        <div class="row sub-footer">
            <div class="col-md-6 copyright-info">
                <p>© 2025 Star Tech Ltd | All rights reserved</p>
            </div>
            <div class="col-md-6 powered-by">
                <p>Powered By: Star Tech</p>
            </div>
        </div>
    </div>
</footer>
<div class="overlay"></div>
</body></html>
<script>
var product_id = 42737;
fbq('track', 'ViewContent', {
    content_ids: ['42737'],
    content_type: 'product',
    value: 99500.0000,
    currency: 'BDT'
});

//G4 View Item Event
gtag('event', 'view_item', {
    items: [{
        item_name: 'Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14&quot; WUXGA Touch Laptop',
        item_id: 42737,
        price: 99500.0000,
        currency: 'BDT'
    }]
});
</script>
