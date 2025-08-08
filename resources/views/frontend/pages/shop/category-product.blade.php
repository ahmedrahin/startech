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
            <div id="content" class="col-xs-12 col-md-9 product-listing" data-category-slug="{{ $categorySlug }}">
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
                                        <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>20</option>
                                        <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>50</option>
                                        <option value="80" {{ $perPage == 80 ? 'selected' : '' }}>80</option>
                                        <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>100</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input-sort">Sort By:</label>
                                <div class="custom-select">
                                    <select id="input-sort">
                                        <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                                        <option value="p.price-ASC" {{ request('sort') == 'p.price-ASC' ? 'selected' : '' }}>Price (Low &gt; High)</option>
                                        <option value="p.price-DESC" {{ request('sort') == 'p.price-DESC' ? 'selected' : '' }}>Price (High &gt; Low)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="main-content p-items-wrap">
                    @if (!$products->isEmpty())
                        @foreach ($products as $product)
                            <div class="p-item">
                                <div class="p-item-inner">
                                    <div class="p-item-img"><a href="{{ $product->name }}"><img
                                                src="{{ asset($product->thumb_image) }}" alt="{{ $product->name }}" width="228"
                                                height="228"></a></div>
                                    <div class="p-item-details">
                                        <h4 class="p-item-name"> <a href="{{ route('product-details', $product->slug) }}">
                                                {{ $product->name }}</a></h4>
                                        <div class="short-description">
                                            <ul>
                                                <li>AMD Ryzen 5 3400G Processor with Radeon RX Vega 11 Graphics
                                                </li>
                                                <li>MSI A520M-A Pro AM4 AMD Micro-ATX Motherboard
                                                </li>
                                                <li>Corsair Vengeance LPX 8GB 3200MHz DDR4 Desktop RAM
                                                </li>
                                                <li>MiPhi MP300G3 256GB M.2 PCIe Gen3 NVMe SSD</li>
                                            </ul>
                                        </div>
                                        <div class="p-item-price">
                                            <span>23,950৳</span>
                                        </div>
                                        <div class="actions">
                                            <span class="st-btn btn-add-cart" type="button" onclick="cart.add('38903', '1');"><i
                                                    class="material-icons">shopping_cart</i> Buy Now</span>
                                            <span class="st-btn btn-compare"><i class="material-icons">library_add</i>Add to
                                                Compare</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else

                    @endif

                </div>

                @if (!$products->isEmpty())
                    <div class="bottom-bar">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <ul class="pagination">
                                    {{-- PREV Button --}}
                                    @if ($products->onFirstPage())
                                    <li><span class="disabled">PREV</span></li>
                                    @else
                                    <li>
                                        <a href="{{ $products->previousPageUrl() }}" style="cursor:pointer;">PREV</a>
                                    </li>
                                    @endif

                                    {{-- Page Numbers --}}
                                    @for ($page = 1; $page <= $products->lastPage(); $page++)
                                        @if ($page == $products->currentPage())
                                        <li class="active"><span>{{ $page }}</span></li>
                                        @else
                                        <li>
                                            <a href="{{ $products->url($page) }}" style="cursor:pointer;">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endfor

                                        {{-- NEXT Button --}}
                                        @if ($products->hasMorePages())
                                        <li>
                                            <a href="{{ $products->nextPageUrl() }}" style="cursor:pointer;">NEXT</a>
                                        </li>
                                        @else
                                        <li><span class="disabled">NEXT</span></li>
                                        @endif
                                </ul>
                            </div>

                            <div class="col-md-6 rs-none text-right">
                                <p>
                                    Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{
                                    $products->total() }} ({{ $products->lastPage() }} Pages)
                                </p>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </div>
</section>

@endsection


@section('page-script')


@endsection