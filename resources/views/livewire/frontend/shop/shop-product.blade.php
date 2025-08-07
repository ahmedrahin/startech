<div id="content" class="col-xs-12 col-md-9 product-listing">
    <div class="top-bar ws-box">
        <div class="row">
            <div class="col-sm-4 col-xs-2 actions">
                <button class="tool-btn" id="lc-toggle"><i class="material-icons">filter_list</i>
                    Filter</button>
                <label class="page-heading m-hide">Desktop</label>
            </div>
            <div class="col-sm-8 col-xs-10 show-sort">
                <div class="form-group rs-none">
                    <label for="input-limit">Show:</label>
                    <div class="custom-select">
                        <select id="input-limit">
                            <option value="20" selected="selected">20</option>
                            <option value="24">24</option>
                            <option value="48">48</option>
                            <option value="75">75</option>
                            <option value="90">90</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-sort">Sort By:</label>
                    <div class="custom-select">
                        <select id="input-sort">
                            <option value="">Default</option>
                            <option value="p.price-ASC">Price (Low &gt; High)</option>
                            <option value="p.price-DESC">Price (High &gt; Low)</option>
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
                        <div class="p-item-img"><a
                                href="{{ $product->name }}"><img
                                    src="{{ asset($product->thumb_image) }}"
                                    alt="{{ $product->name }}" width="228" height="228"></a></div>
                        <div class="p-item-details">
                            <h4 class="p-item-name"> <a
                                    href="{{ route('product-details', $product->slug) }}">
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
                                <span class="st-btn btn-compare" ><i
                                        class="material-icons">library_add</i>Add to Compare</span>
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
                            <li><a wire:click="previousPage" wire:loading.attr="disabled" role="button" style="cursor:pointer;">PREV</a></li>
                        @endif

                        {{-- Page Numbers --}}
                        @for ($page = 1; $page <= $products->lastPage(); $page++)
                            @if ($page == $products->currentPage())
                                <li class="active"><span>{{ $page }}</span></li>
                            @else
                                <li>
                                    <a wire:click="gotoPage({{ $page }})" wire:loading.attr="disabled" style="cursor:pointer;">{{ $page }}</a>
                                </li>
                            @endif
                        @endfor

                        {{-- NEXT Button --}}
                        @if ($products->hasMorePages())
                            <li><a wire:click="nextPage" wire:loading.attr="disabled" role="button" style="cursor:pointer;">NEXT</a></li>
                        @else
                            <li><span class="disabled">NEXT</span></li>
                        @endif
                    </ul>
                </div>

                <div class="col-md-6 rs-none text-right">
                    <p>
                        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} ({{ $products->lastPage() }} Pages)
                    </p>
                </div>
            </div>
        </div>
    @endif

</div>