@extends('frontend.layout.app')

@section('page-title')
    {{ $product->name }}
@endsection

@section('page-css')
    <link href="{{ asset('frontend/style/product.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .short-description p {
            margin-bottom: 1px !important;
            color: black !important;
        }

        .short-description span,
        .short-description li {
            color: black !important;
        }

        .short-description ul {
            padding: 0;
            margin: 0;
        }
    </style>
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1055;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal.show {
            display: block;
        }
        .product-details .review .average-rating{
            line-height: inherit;
        }
        .modal-dialog {
            position: relative;
            margin: auto;
            top: 15%;
            max-width: 600px;
            width: 100%;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .modal-header h4 {
            margin: 0;
        }

        .modal .btn-close {
            background: none;
            border: none;
            font-size: 1.2rem;
        }

        .modal-button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px;
        }

        .modal .btn {
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .modal .btn-cancel {
            background: #8080806b;
        }

        .modal .spinner-border-sm {
            width: 1rem;
            height: 1rem;
            border-width: .2em;
        }
    </style>

    <style>
        .reviews-product {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .reviews-product img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }
        .reviews-product h5 {
            font-size: 20px;
            color: black;
            margin-bottom: 5px;
        }
        .reviews-product .customer-rating {
            padding: 20px 0;
        }
        .selectrating {
            border: none;
            display: inline-flex;
            flex-direction: row-reverse;
            /* Reverse the order of the stars */
        }

        .selectrating>input {
            display: none;
        }

        .customer-rating {
            padding: 10px 0 10px;
        }

        .selectrating>label:before {
            margin: 2px;
            font-size: 16px;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
            margin-bottom: 0;
        }


        .selectrating>label {
            color: #ddd;
            cursor: pointer;
        }

        /* Highlight stars on hover and selection */
        .selectrating>input:checked~label,
        .selectrating>label:hover,
        .selectrating>label:hover~label {
            color: #f93;
        }
        .modal label {
            font-weight: 500;
            font-size: 15px;
            color: #000000c9;
            padding-bottom: 7px;
            display: inline-block;
        }
        .selectrating label {
            color: #00000061;
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
                                <a href="{{ asset($product->thumb_image) }}" data-fancybox="gallery"
                                    data-caption="{{ $product->name }}">
                                    <img class="main-img" src="{{ asset($product->thumb_image) }}"
                                        alt="{{ $product->name }}" width="500" height="500" />
                                </a>
                            </div>

                            @if ($product->galleryImages->count() > 0)
                                <ul class="thumbnails">
                                    <li>
                                        <a class="thumbnail" href="{{ asset($product->thumb_image) }}"
                                            title="{{ $product->name }}"><img src="{{ asset($product->thumb_image) }}"
                                                title="{{ $product->name }}" alt="{{ $product->name }}"
                                                data-fancybox="gallery" data-caption="{{ $product->name }}" width="74"
                                                height="74" /></a>
                                    </li>
                                    @foreach ($product->galleryImages ?? [] as $gellary)
                                        <li>
                                            <a class="thumbnail" href="{{ asset($gellary->image) }}"
                                                title="{{ $product->name }}"><img src="{{ asset($gellary->image) }}"
                                                    title="{{ $product->name }}" alt="{{ $product->name }}" width="74"
                                                    height="74" /></a>
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
                                                <del
                                                    style="padding-left: 5px;color: #df1414;">{{ $product->base_price }}৳</del>
                                            @endif
                                        </td>
                                    </tr>

                                    <tr class="product-info-group">
                                        <td class="product-info-label">Status</td>
                                        @if ($product->quantity > 0)
                                            <td class="product-info-data product-status">In Stock</td>
                                        @else
                                            <td class="product-info-data product-status" style="color:#ff0000a8;">Out of
                                                Stock!</td>
                                        @endif
                                    </tr>

                                    <tr class="product-info-group">
                                        <td class="product-info-label">Product Code</td>
                                        <td class="product-info-data product-code">{{ $product->sku_code }}</td>
                                    </tr>
                                    @if ($product->brand && !is_null($product->brand_id))
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
                                    <span class="qty"><input type="text" name="quantity" id="input-quantity"
                                            value="1" size="2"></span>
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
                                <li data-area="write-review">Reviews ({{ $product->reviews->count() }})</li>
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
                       @include('frontend.pages.product.related-product')
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        function setRating(value) {
            Livewire.emit('updatedRating', value);
        }

        const modal = document.querySelector('#Reviews-modal');
        modal.addEventListener('show.bs.modal', (e) => {
            Livewire.emit('open_add_modal');
        });

        document.addEventListener('livewire:load', function () {
                Livewire.on('success', function () {
                const cancelButton = document.querySelector('.cancel-modal-review');
                if (cancelButton) {
                    cancelButton.click();
                }
                });
            });

    </script>
@endsection
