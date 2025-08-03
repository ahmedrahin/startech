@extends('frontend.layout.app')

@section('page-title')
{{ $product->name }}
@endsection

@section('page-css')
    <link href="{{ asset('frontend/style/product.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <style>
        .short-description p {
            margin-bottom: 1px !important;
            color: black !important;
        }
        .short-description span,.short-description li {
            color: black !important;
        }
        .short-description ul {
            padding: 0;
            margin: 0;
        }
    </style>
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
                                                data-fancybox="gallery"
                                                data-caption="{{ $product->name }}"
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
                                        <td class="product-info-data product-price">
                                            <ins>{{ $product->offer_price }}৳</ins>
                                            @if ($product->discount_option != 1)
                                                <del style="padding-left: 5px;color: #df1414;">{{ $product->base_price }}৳</del>
                                            @endif
                                        </td>
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

                            @if (!is_null($product->key_features) && $product->key_features != '<p><br></p>')
                                <div class="short-description">
                                    <h2>Key Features</h2>
                                    {!! $product->key_features !!}
                                </div>
                            @endif

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
                                
                            </table>
                        </section>
                        <section class="description bg-white m-tb-15" id="description">
                            <div class="section-head">
                                <h2>Description</h2>
                            </div>
                            <div class="full-description" itemprop="description">
                                {!! $product->long_description !!}
                            </div>
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

                        <livewire:frontend.product.product-review :productId="$product->id" />
                        
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
   

@endsection
