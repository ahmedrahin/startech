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
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}"><i class="material-icons" title="Home">home</i></a></li>
            <li><a href=""><span>{{ $category->name }}</span></a>
            </li>
        </ul>
        <h1></h1>
        <p>
            <span style="font-weight: bold;">{{ $category->name }}</span>
            {{ $category->description ?? '' }}
        </p>
        <div class="child-list">
            @foreach ($category->subcategories as $subcategory)
            <a href="">{{ $subcategory->name }}</a>
            @endforeach
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

            {{-- product show --}}
            <div id="content" class="col-xs-12 col-md-9 product-listing" data-category-slug="{{ $slug }}">
                <div class="top-bar ws-box">
                    <div class="row">
                        <div class="col-sm-4 col-xs-2 actions">
                            <button class="tool-btn" id="lc-toggle"><i class="material-icons">filter_list</i>
                                Filter</button>
                            <label class="page-heading m-hide">{{ $category->name }} ({{ $category->product->count() }})</label>
                        </div>

                        <div class="col-sm-8 col-xs-10 show-sort">
                            <div class="form-group rs-none">
                                <label for="input-limit">Show:</label>
                                <div class="custom-select">
                                    <select id="input-limit">
                                        <option value="20" {{ request('limit') == 20 ? 'selected' : '' }}>20</option>
                                        <option value="50" {{ request('limit') == 50 ? 'selected' : '' }}>50</option>
                                        <option value="80" {{ request('limit') == 80 ? 'selected' : '' }}>80</option>
                                        <option value="100" {{ request('limit') == 100 ? 'selected' : '' }}>100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="input-sort">Sort By:</label>
                                <div class="custom-select">
                                    <select id="input-sort">
                                        <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                                        <option value="offer_price" {{ request('sort') == 'offer_price' ? 'selected' : '' }}>Price (Low &gt; High)</option>
                                        <option value="offer_price_desc" {{ request('sort') == 'offer_price_desc' ? 'selected' : '' }}>Price (High &gt; Low)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="product-list">
                    @include('frontend.pages.shop.category-product-list')
                </div>
                
            </div>

        </div>
    </div>
</section>


<div id="ajax-loader">
    <div style="width: 100%;height:100%;display:flex;align-items: center;justify-content: center;">
        <div class="spinner"></div>
    </div>
</div>


@endsection


@section('page-script')

    <script>
        jQuery(function($) {

            function getFilters() {
                let params = new URLSearchParams(window.location.search);
                params.set('limit', $('#input-limit').val());

                let sortVal = $('#input-sort').val();
                if (sortVal === '') {
                    params.delete('sort');
                    params.delete('order');
                } else if (sortVal.endsWith('_desc')) {
                    params.set('sort', sortVal.replace('_desc', ''));
                    params.set('order', 'DESC');
                } else {
                    params.set('sort', sortVal);
                    params.set('order', 'ASC');
                }

                return params.toString();
            }

            function loadProducts() {
                let queryString = getFilters();
                let url = window.location.pathname + '?' + queryString;

                $.ajax({
                    url: url,
                    type: 'GET',
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    beforeSend: function () {
                        $('#product-list').addClass('loading');
                        $('#ajax-loader').show();
                    },
                    success: function (data) {
                        $('#product-list').html(data);
                        Livewire.rescan();
                        history.pushState(null, '', url);
                    },
                    complete: function () {
                        $('#product-list').removeClass('loading');
                        $('#ajax-loader').hide();
                    },
                    error: function () {
                        alert('Failed to load products');
                    }
                });
            }

            // When Show or Sort changes
            $('#input-limit, #input-sort').on('change', function () {
                loadProducts();
            });

            // Handle pagination links inside #product-list (delegated)
            $(document).on('click', '#product-list .pagination a', function (e) {
                e.preventDefault();
                let url = $(this).attr('href');
                $.ajax({
                    url: url,
                    type: 'GET',
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    beforeSend: function () {
                        $('#product-list').addClass('loading');
                        $('#ajax-loader').show();
                    },
                    success: function (data) {
                        $('#product-list').html(data);
                        Livewire.rescan();
                        history.pushState(null, '', url);
                    },
                    complete: function () {
                        $('#product-list').removeClass('loading');
                        $('#ajax-loader').hide();
                    },
                    error: function () {
                        alert('Failed to load products');
                    }
                });
            });

            // Handle browser back/forward buttons
            window.onpopstate = function () {
                $.ajax({
                    url: location.href,
                    type: 'GET',
                    headers: { 'X-Requested-With': 'XMLHttpRequest' },
                    success: function (data) {
                        $('#product-list').html(data);
                    }
                });
            };
        });

    </script>

@endsection