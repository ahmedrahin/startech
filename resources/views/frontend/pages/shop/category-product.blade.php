@extends('frontend.layout.app')

@section('page-title')
{{ $category->name }}
@endsection

@section('page-css')
<link href="{{ asset('frontend/style/category.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
@endsection

@section('body-content')

<section class="after-header p-tb-10">
    <div class="container c-intro">
        <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li><a href="https://www.startech.com.bd/"><i class="material-icons" title="Home">home</i></a></li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a
                    itemtype="http://schema.org/Thing" itemprop="item" href="https://www.startech.com.bd/desktops"><span
                        itemprop="name">Desktop</span></a>
                <meta itemprop="position" content="1" />
            </li>
        </ul>
        <h1>Desktop PC Price in Bangladesh (BD)</h1>
        <p><span style="font-weight: bold;">Desktop PC</span> Price in Bangladesh starts from BDT 25000 and depending on
            the configuration the price may go up to BDT 600,000 or more, At Star Tech you can get the latest configured
            custom Desktop PC, Gaming
            PC, Brand PC, All-in-One PC, Portable Mini PC etc. Browse below and Order yours now!</p>
        <div class="child-list">
            <a href="https://www.startech.com.bd/special-pc">Desktop Offer</a><a
                href="https://www.startech.com.bd/desktops/star-pc">Star PC</a><a
                href="https://www.startech.com.bd/desktops/gaming-pc">Gaming PC</a><a
                href="https://www.startech.com.bd/desktops/brand-pc">Brand PC</a>
            <a href="https://www.startech.com.bd/desktops/all-in-one-pc">All-in-One PC</a><a
                href="https://www.startech.com.bd/desktops/portable-mini-pc">Portable Mini PC</a><a
                href="https://www.startech.com.bd/apple-mac-mini">Apple Mac Mini</a><a
                href="https://www.startech.com.bd/apple-imac">Apple iMac</a>
            <a href="https://www.startech.com.bd/apple-mac-studio">Apple Mac Studio</a><a
                href="https://www.startech.com.bd/apple-mac-pro">Apple Mac Pro</a>
        </div>
    </div>
</section>
<section class="p-item-page bg-bt-gray p-tb-15">
    <div class="container">
        <div class="row">
            <column id="column-left" class="col-sm-3">
                <span class="lc-close"><i class="material-icons" aria-hidden="true">close</i></span>
                <div class="filters">
                    <div class="price-filter ws-box">
                        <div class="label">
                            <span>Price Range</span>
                        </div>
                        <div class="pf-wrap">
                            <div id="rang-slider" class="noUi-horizontal" data-from="0" data-to="799799" data-min="0"
                                data-max="799799"></div>
                        </div>
                        <div class="range-label from"><input type="text" id="range-to" name="from"></div>
                        <div class="range-label to"><input type="text" id="range-from" name="to"></div>
                    </div>
                    <div class="filter-group ws-box show" data-group-type="status">
                        <div class="label">
                            <span>Availability</span>
                        </div>
                        <div class="items">
                            <label class="filter">
                                <input type="checkbox" name="status" value="7" />
                                <span>In Stock</span>
                            </label>
                            <label class="filter">
                                <input type="checkbox" name="status" value="8" />
                                <span>Pre Order</span>
                            </label>
                            <label class="filter">
                                <input type="checkbox" name="status" value="9" />
                                <span>Up Coming</span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-group ws-box show" data-group-id="76">
                        <div class="label">
                            <span>Processor</span>
                        </div>
                        <div class="items">
                            <label class="filter">
                                <input type="checkbox" name="filter" value="404" />
                                <span>Intel</span>
                            </label>
                            <label class="filter">
                                <input type="checkbox" name="filter" value="405" />
                                <span>AMD</span>
                            </label>
                            <label class="filter">
                                <input type="checkbox" name="filter" value="1166" />
                                <span>Apple</span>
                            </label>
                        </div>
                    </div>
                </div>
            </column>

           <livewire:frontend.shop.shop-product :categorySlug="$categorySlug" />

            
        </div>
    </div>
</section>

@endsection


@section('page-script')


@endsection