@extends('frontend.layout.app')

@section('page-title')
{{ $product->name }}
@endsection

@section('page-css')
    <link href="catalog/view/theme/starship/style/product.min.12.css" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endsection


@section('body-content')

    <section class="after-header">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}"><i class="material-icons" title="Home">home</i></a></li>
                <li>
                    <a href=""><span itemprop="name">Laptop</span></a>
                </li>
                <li>
                    <a href="{{ route('product-details', $product->slug) }}">
                        <span itemprop="name">{{ $product->name }}</span></a>
                </li>
            </ul>
        </div>
    </section>

    <div class="product-details content">
        <div class="product-details-summary">
            <div class="container">
                <div class="pd-q-actions">
                    <div class="share-on">
                        <span class="share">Share:</span>
                        <span class="icon-sprite share-ico messenger-dark" data-type="messenger"></span>
                        <span class="icon-sprite share-ico pinterest-dark" data-type="pinterest"></span>
                        <span class="icon-sprite share-ico whatsapp-dark" data-type="whatsapp"></span>
                    </div>
                    <div class="options">
                        <span class="add-list" onclick="wishlist.add('42737');"><i
                                class="material-icons">bookmark_border</i> Save</span>
                        <span class="add-compare" onclick="compare.add('42737');"><i class="material-icons">library_add</i>
                            Add to Compare</span>
                    </div>
                </div>
                
                <div class="basic row">
                    <div class="col-md-5 left">
                        <div class="images product-images">
                            <div class="product-img-holder">
                                <a 
                                    href="{{ asset($product->thumb_image) }}" 
                                    data-fancybox="gallery" 
                                    data-caption="{{ $product->name }}"
                                >
                                    <img 
                                        class="main-img" 
                                        src="{{ asset($product->thumb_image) }}" 
                                        alt="{{ $product->name }}" 
                                        width="500" 
                                        height="500"
                                    />
                                </a>
                            </div>

                            @if( $product->galleryImages->count() > 0 )
                                <ul class="thumbnails">
                                    <li>
                                        <a class="thumbnail" href="{{ asset($product->thumb_image) }}"
                                            title="{{ $product->name }}"><img
                                                src="{{ asset($product->thumb_image) }}"
                                                title="{{ $product->name }}"
                                                alt="{{ $product->name }}"
                                                width="74" height="74" /></a>
                                    </li>
                                    @foreach ($product->galleryImages ?? [] as $gellary)
                                        <li>
                                            <a class="thumbnail" href="{{ asset($gellary->image) }}"
                                                title="{{ $product->name }}"><img
                                                    src="{{ asset($gellary->image) }}"
                                                    title="{{ $product->name }}"
                                                    alt="{{ $product->name }}"
                                                    width="74" height="74" /></a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                        </div>
                    </div>

                    <div class="col-md-7 right" id="product">
                        <div class="pd-summary">
                            <div class="product-short-info">
                                <h1 itemprop="name" class="product-name">{{ $product->name }}</h1>
                                <table class="product-info-table">
                                    <tr class="product-info-group">
                                        <td class="product-info-label">Price</td>
                                        <td class="product-info-data product-price"><ins>1,349৳</ins><del style="padding-left: 5px;color: #df1414;">1,550৳</del></td>
                                    </tr>
                                    
                                    <tr class="product-info-group">
                                        <td class="product-info-label">Status</td>
                                        @if( $product->quantity > 0 )
                                            <td class="product-info-data product-status">In Stock</td>
                                        @else
                                            <td class="product-info-data product-status" style="color:#ff0000a8;">Out of Stock!</td>
                                        @endif
                                    </tr>

                                    <tr class="product-info-group">
                                        <td class="product-info-label">Product Code</td>
                                        <td class="product-info-data product-code">{{ $product->sku_code }}</td>
                                    </tr>
                                    @if( $product->brand && !is_null($product->brand_id) )
                                    <tr class="product-info-group">
                                        <td class="product-info-label">Brand</td>
                                        <td class="product-info-data product-brand">{{ $product->brand->name }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                            <div class="short-description" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <link itemprop="availability" href="http://schema.org/InStock" />
                                <link itemprop="itemCondition" href="http://schema.org/NewCondition">
                                <meta itemprop="priceCurrency" content="BDT" />
                                <meta itemprop="price" content="99500.0000" />
                                <h2>Key Features</h2>
                                <ul>
                                    <li>MPN: 83DR0080LK</li>
                                    <li>Model: IdeaPad 5 2-in-1 14AHP9</li>
                                    <li>Processor: AMD Ryzen 5 8645HS (16MB L3 Cache, Up to 5.0GHz)
                                    </li>
                                    <li>Ram: 16GB LPDDR5x-6400MHz, Storage: 512GB M.2 PCIe 4.0x4 NVMe SSD
                                    </li>
                                    <li>Display: 14&quot; WUXGA (1920x1200) IPS 300nits Glossy, Glass, Touch
                                    </li>
                                    <li>Features: Backlit Keyboard, Privacy Shutter, Fingerprint, Type-C, Wi-Fi 6</li>
                                    <li class="view-more" data-area="specification">View More Info</li>
                                </ul>
                            </div>

                            
                            <div class="cart-option">
                                <label class="quantity">
                                    <span class="ctl"><i class="material-icons">remove</i></span>
                                    <span class="qty"><input type="text" name="quantity" id="input-quantity" value="1"
                                            size="2"></span>
                                    <span class="ctl increment"><i class="material-icons">add</i></span>
                                    <input type="hidden" name="product_id" value="42737" />
                                </label>
                                <button id="button-cart" class="btn submit-btn" data-loading-text="Loading...">Buy
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd-full">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="navs">
                            <ul class="nav">
                                <li data-area="specification">Specification</li>
                                <li data-area="description">Description</li>
                                <li class="hidden-xs" data-area="ask-question">Questions (0)</li>
                                <li data-area="write-review">Reviews (0)</li>
                            </ul>
                        </div>
                        <section class="specification-tab m-tb-10" id="specification">
                            <div class="section-head">
                                <h2>Specification</h2>
                            </div>
                            <table class="data-table flex-table" cellpadding="0" cellspacing="0">
                                <colgroup>
                                    <col class="name" />
                                    <col class="value" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Processor</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Processor Brand</td>
                                        <td class="value">AMD </td>
                                    </tr>
                                    <tr>
                                        <td class="name">Processor Model</td>
                                        <td class="value">Ryzen 5 8645HS</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Processor Frequency</td>
                                        <td class="value">4.3 / 5.0GHz</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Processor Core</td>
                                        <td class="value">6 Core</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Processor Thread</td>
                                        <td class="value">12T</td>
                                    </tr>
                                    <tr>
                                        <td class="name">CPU Cache</td>
                                        <td class="value">16MB L3 Cache</td>
                                    </tr>
                                    <tr>
                                        <td class="name">NPU</td>
                                        <td class="value">Integrated AMD Ryzen AI, up to 16 TOPS</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Chipset</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Chipset Model</td>
                                        <td class="value">AMD SoC Platform</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Display</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Display Size</td>
                                        <td class="value">14&quot;</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Display Type</td>
                                        <td class="value">IPS</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Display Resolution</td>
                                        <td class="value">WUXGA (1920x1200)</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Touch Screen</td>
                                        <td class="value">Yes, 10-point Multi-touch</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Refresh Rate</td>
                                        <td class="value">60Hz</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Display Features</td>
                                        <td class="value">300nits Glossy, 45% NTSC, TÜV Low Blue Light, Glass</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Memory</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">RAM</td>
                                        <td class="value">16GB (Soldered)<br />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="name">RAM Type</td>
                                        <td class="value">LPDDR5x</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Removable</td>
                                        <td class="value">No</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Bus Speed</td>
                                        <td class="value">6400MHz</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Total RAM Slot</td>
                                        <td class="value">N/A</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Max RAM Capacity</td>
                                        <td class="value">16GB</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Storage</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Storage Type</td>
                                        <td class="value">M.2 2242 PCIe 4.0x4 NVMe SSD</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Storage Capacity</td>
                                        <td class="value">512GB </td>
                                    </tr>
                                    <tr>
                                        <td class="name">Extra M.2 Slot</td>
                                        <td class="value">N/A</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Supported SSD Type</td>
                                        <td class="value">M.2 2242 PCIe 4.0 x4</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Storage Upgrade</td>
                                        <td class="value">up to 1TB M.2 2242 SSD</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Graphics</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Graphics Model</td>
                                        <td class="value">AMD Radeon 760M Graphics</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Graphics Memory</td>
                                        <td class="value">Shared</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Graphics Type</td>
                                        <td class="value">Integrated</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Keyboard &amp; TouchPad</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Keyboard Type</td>
                                        <td class="value">Backlit, English (EU)</td>
                                    </tr>
                                    <tr>
                                        <td class="name">TouchPad</td>
                                        <td class="value">Buttonless Mylar surface multi-touch touchpad, supports
                                            Precision TouchPad (PTP), 75 x 120 mm (2.95 x 4.72 inches)</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Camera &amp; Audio</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">WebCam</td>
                                        <td class="value">FHD 1080p</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Speaker</td>
                                        <td class="value">Stereo speakers, 2W x2<br />
                                            High Definition (HD) Audio</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Microphone</td>
                                        <td class="value">2x, Array Microphone</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Audio Features</td>
                                        <td class="value">Optimized with Dolby Audio</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Ports &amp; Slots</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Optical Drive</td>
                                        <td class="value">N/A</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Card Reader</td>
                                        <td class="value">1x microSD Card Reader</td>
                                    </tr>
                                    <tr>
                                        <td class="name">HDMI Port</td>
                                        <td class="value">1x HDMI 1.4b</td>
                                    </tr>
                                    <tr>
                                        <td class="name">USB 3 Port</td>
                                        <td class="value">1x USB-A (USB 5Gbps / USB 3.2 Gen 1)<br />
                                            1x USB-A (USB 5Gbps / USB 3.2 Gen 1), Always On</td>
                                    </tr>
                                    <tr>
                                        <td class="name">USB Type-C / Thunderbolt Port</td>
                                        <td class="value">2x USB-C (USB 10Gbps / USB 3.2 Gen 2), with USB PD 3.1 and
                                            DisplayPort™ 1.4</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Headphone &amp; Microphone Port</td>
                                        <td class="value">1x Headphone / microphone combo jack (3.5mm)</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Network &amp; Connectivity</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">LAN</td>
                                        <td class="value">N/A</td>
                                    </tr>
                                    <tr>
                                        <td class="name">WiFi</td>
                                        <td class="value">Wi-Fi 6, 802.11ax 2x2</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Bluetooth</td>
                                        <td class="value">Bluetooth 5.3</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Security</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Fingerprint Sensor</td>
                                        <td class="value">Touch Style, on Palm Rest</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Camera Privacy Shutter</td>
                                        <td class="value">Yes</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Security Chip</td>
                                        <td class="value">Microsoft Pluton TPM 2.0 Enabled</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Software</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Operating System</td>
                                        <td class="value">Windows 11 Home Single Language, English</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Other Pre-installed Softwares</td>
                                        <td class="value">Office Trial</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Power</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Battery Type</td>
                                        <td class="value">Integrated</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Battery Capacity</td>
                                        <td class="value">57Wh</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Adapter Type</td>
                                        <td class="value">65W USB-C (3-pin)</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Physical Specification</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Color</td>
                                        <td class="value">Cosmic Blue</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Dimensions</td>
                                        <td class="value">313 x 227 x 17.9 mm (12.32 x 8.94 x 0.70 inches)</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Weight</td>
                                        <td class="value">Starting at 1.6 kg (3.53 lbs)</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Body Material</td>
                                        <td class="value">Surface Treatment: Metallic Painting<br />
                                            Case Material: PC-ABS + 40% GF (Top), PC-ABS + 40% GF (Bottom)</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Other Features</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Other Features</td>
                                        <td class="value">Green Certifications:<br />
                                            ENERGY STAR 8.0<br />
                                            EPEAT Gold Registered<br />
                                            ErP Lot 6/26<br />
                                            RoHS compliant<br />
                                            Other Certifications <br />
                                            Models with IPS panel: TÜV Rheinland Low Blue Light (Software
                                            Solution)<br />
                                            Mil-Spec Test: MIL-STD-810H military test passed (21 test items)<br />
                                            Stylus Included</td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr>
                                        <td class="heading-row" colspan="3">Warranty</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="name">Warranty Details</td>
                                        <td class="value">02 years Limited Warranty (Terms &amp; Conditions Apply As Per
                                            Lenovo)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                        <section class="description bg-white m-tb-15" id="description">
                            <div class="section-head">
                                <h2>Description</h2>
                            </div>
                            <div class="full-description" itemprop="description">
                                <h2>Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS 14" WUXGA Touch Laptop</h2>
                                <p>The Lenovo <strong>IdeaPad 5 2-in-1 14AHP9</strong> is a multifunctional and powerful
                                    <a href="https://www.startech.com.bd/laptop-notebook/laptop" target=""
                                        style="color: rgb(0, 0, 0);">laptop</a>. Designed for users that require power,
                                    portability, and flexibility. It is powered by the AMD Ryzen 5 8645HS CPU, which
                                    features 6 cores and 12 threads, capable of reaching speeds of up to 5.0 GHz. It
                                    easily handles multitasking and demanding workloads. The Lenovo IdeaPad 5 2-in-1
                                    14AHP9 Ryzen 5 Touch Laptop features AMD Ryzen AI, delivering up to 16 TOPS for
                                    next-generation AI capabilities, and Radeon 760M graphics, which support fluid
                                    visuals and everyday gaming. The 14-inch WUXGA IPS touchscreen display has a
                                    1920x1200 resolution, 300 nits of brightness, and TÜV Low Blue Light certification,
                                    making it gentle on the eyes and suitable for both productivity and entertainment.
                                    The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 AI Laptop's convertible form and 10-point
                                    multi-touch capability provide additional versatility for work, drawing, and media
                                    consumption. The Lenovo touch AI laptop comes with 16GB of LPDDR5x-6400 RAM soldered
                                    in dual-channel mode and a 512GB PCIe 4.0x4 SSD for quick, responsive storage. The
                                    Lenovo IdeaPad 5 2-in-1 14AHP9 Touch Laptop boasts broad connectivity, including two
                                    USB-C 3.2 Gen 2 ports (supporting USB PD 3.1 and DisplayPort 1.4), two USB-A 3.2 Gen
                                    1 ports (one always-on), HDMI 1.4b, a microSD card reader, and a 3.5mm audio jack.
                                    It supports Wi-Fi 6 and Bluetooth 5.3 for speedy wireless communications. The audio
                                    quality is improved with 2W stereo speakers with Dolby Audio and twin array
                                    microphones. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 Touch Laptop includes a Full
                                    HD 1080p camera with a privacy shutter and a touch-style fingerprint reader on the
                                    palm rest for extra protection and privacy. The 57Wh battery provides long-lasting
                                    performance and charges with a 65W USB-C adaptor. This Lenovo IdeaPad 5 2-in-1
                                    14AHP9 Ryzen 5 8645HS 14" WUXGA Touch Laptop is both functional and stylish, thanks
                                    to its aluminum design, backlit keyboard, and Windows 11 Home operating system. It
                                    fulfills MIL-STD-810H durability standards and has several green certifications,
                                    including ENERGY STAR 8.0 and EPEAT Gold, making it a dependable and environmentally
                                    aware option.
                                </p>
                                <h2>Buy Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Touch Laptop from Star Tech</h2>
                                <p>In Bangladesh, you can get original <strong>Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5
                                        8645HS Touch Laptop</strong> From Star Tech. We have a large collection of
                                    latest <a href="https://www.startech.com.bd/lenovo-laptop" target="" style="">Lenovo
                                        Laptop</a> to purchase. Order Online Or Visit your Nearest <a
                                        href="https://www.startech.com.bd" target="">Star Tech Shop</a> to get yours at
                                    lowest price. The Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Touch Laptop comes
                                    with 2-year warranty (Battery &amp; Adapter 1 Year).</p>
                            </div>
                        </section>
                        <section class="latest-price bg-white m-tb-15" id="latest-price">
                            <div class="section-head">
                                <h2>What is the price of Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop in
                                    Bangladesh?</h2>
                            </div>
                            <p>The latest price of Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop in Bangladesh is
                                99,500৳. You can buy the Lenovo IdeaPad 5 2-in-1 14AHP9 Ryzen 5 8645HS Laptop at best
                                price from our website or visit any of our showrooms.</p>
                        </section>
                        <section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
                            <div class="section-head">
                                <div class="title-n-action">
                                    <h2>Questions (0)</h2>
                                    <p class="section-blurb">Have question about this product? Get specific details
                                        about this product from expert.</p>
                                </div>
                                <div class="q-action">
                                    <a href="https://www.startech.com.bd/account/question?product_id=42737"
                                        class="btn st-outline">Ask Question</a>
                                </div>
                            </div>
                            <div id="question">
                                <div class="empty-content">
                                    <span class="icon material-icons">textsms</span>
                                    <div class="empty-text">There are no questions asked yet. Be the first one to ask a
                                        question.</div>
                                </div>
                            </div>
                        </section>
                        <section class="review  q-n-r-section bg-white m-tb-15" id="write-review">
                            <div class="section-head">
                                <div class="title-n-action">
                                    <h2>Reviews (0)</h2>
                                    <p class="section-blurb">Get specific details about this product from customers who
                                        own it.</p>
                                    <div class="average-rating">
                                    </div>
                                </div>
                                <div class="q-action">
                                    <a href="https://www.startech.com.bd/account/review?product_id=42737"
                                        class="btn st-outline">Write a Review</a>
                                </div>
                            </div>
                            <div id="review">
                                <div class="empty-content">
                                    <span class="icon material-icons">assignment</span>
                                    <div class="empty-text">This product has no reviews yet. Be the first one to write a
                                        review.</div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-md-12 c-left">
                        <section class="related-product-list">
                            <h3>Related Product</h3>
                            <div class="p-s-item">
                                <div class="image-holder">
                                    <a
                                        href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-core-i5-12th-gen-15-6-inch-laptop"><img
                                            src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i-i5/ideapad-slim-3i-80x80.webp"
                                            alt="Lenovo IdeaPad Slim 3i 15IAU7 Core i5 12th Gen 15.6&quot; FHD Laptop with Windows 11"
                                            width="80" height="80"></a>
                                </div>
                                <div class="caption">
                                    <h4 class="product-name">
                                        <a
                                            href="https://www.startech.com.bd/lenovo-ideapad-slim-3i-core-i5-12th-gen-15-6-inch-laptop">Lenovo
                                            IdeaPad Slim 3i 15IAU7 Core i5 12th Gen 15.6&quot; FHD Laptop with Windows
                                            11</a>
                                    </h4>
                                    <div class="p-item-price price">
                                        <span class="price-new">77,000৳</span> <span class="price-old">83,000৳</span>
                                    </div>
                                    <div class="actions">
                                        <span class="btn-compare" onclick="compare.add('31493');"><i
                                                class="material-icons">library_add</i>Add to Compare</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-s-item">
                                <div class="image-holder">
                                    <a
                                        href="https://www.startech.com.bd/lenovo-ideapad-3i-15itl6-core-i7-11th-gen-16gb-ram-laptop"><img
                                            src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-3i-15itl6/ideapad-slim-3i-15itl6-80x80.webp"
                                            alt="Lenovo IdeaPad 3i 15ITL6 core i7 11th Gen 16GB RAM 15.6&quot; FHD Laptop"
                                            width="80" height="80"></a>
                                </div>
                                <div class="caption">
                                    <h4 class="product-name">
                                        <a
                                            href="https://www.startech.com.bd/lenovo-ideapad-3i-15itl6-core-i7-11th-gen-16gb-ram-laptop">Lenovo
                                            IdeaPad 3i 15ITL6 core i7 11th Gen 16GB RAM 15.6&quot; FHD Laptop</a>
                                    </h4>
                                    <div class="p-item-price price">
                                        <span class="price-new">76,000৳</span> <span class="price-old">81,500৳</span>
                                    </div>
                                    <div class="actions">
                                        <span class="btn-compare" onclick="compare.add('34371');"><i
                                                class="material-icons">library_add</i>Add to Compare</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-s-item">
                                <div class="image-holder">
                                    <a href="https://www.startech.com.bd/lenovo-loq-15iax9-i5-12th-gen-gaming-laptop"><img
                                            src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/loq-15iax9/loq-15iax9-01-80x80.webp"
                                            alt="Lenovo LOQ 15IAX9 Core i5 12th Gen RTX 2050 4GB Graphics 15.6&quot; FHD 144Hz Gaming Laptop"
                                            width="80" height="80"></a>
                                </div>
                                <div class="caption">
                                    <h4 class="product-name">
                                        <a href="https://www.startech.com.bd/lenovo-loq-15iax9-i5-12th-gen-gaming-laptop">Lenovo
                                            LOQ 15IAX9 Core i5 12th Gen RTX 2050 4GB Graphics 15.6&quot; FHD 144Hz
                                            Gaming Laptop</a>
                                    </h4>
                                    <div class="p-item-price price">
                                        <span>99,500৳</span>
                                    </div>
                                    <div class="actions">
                                        <span class="btn-compare" onclick="compare.add('37171');"><i
                                                class="material-icons">library_add</i>Add to Compare</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-s-item">
                                <div class="image-holder">
                                    <a
                                        href="https://www.startech.com.bd/lenovo-ideapad-slim-5-16imh9-core-ultra-5-125h-laptop"><img
                                            src="https://www.startech.com.bd/image/cache/catalog/laptop/lenovo/ideapad-slim-5-16imh9/ideapad-slim-5-16imh9-01-80x80.webp"
                                            alt="Lenovo IdeaPad Slim 5 16IMH9 Core Ultra 5 125H AI Integrated 16&quot; WUXGA Laptop"
                                            width="80" height="80"></a>
                                </div>
                                <div class="caption">
                                    <h4 class="product-name">
                                        <a
                                            href="https://www.startech.com.bd/lenovo-ideapad-slim-5-16imh9-core-ultra-5-125h-laptop">Lenovo
                                            IdeaPad Slim 5 16IMH9 Core Ultra 5 125H AI Integrated 16&quot; WUXGA
                                            Laptop</a>
                                    </h4>
                                    <div class="p-item-price price">
                                        <span>118,000৳</span>
                                    </div>
                                    <div class="actions">
                                        <span class="btn-compare" onclick="compare.add('39229');"><i
                                                class="material-icons">library_add</i>Add to Compare</span>
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

@endsection

@section('page-script')

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
    Fancybox.bind("[data-fancybox='gallery']", {
        // Optional: custom options
        Thumbs: false,
        Toolbar: true
    });
</script>

@endsection