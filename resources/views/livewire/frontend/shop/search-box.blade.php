<div class="position-relative search-items">
    <form wire:submit.prevent="search"
        class="header-search hs-expanded hs-round bg-white br-xs d-md-flex input-wrapper" style="width: 100%; max-width: 100%;">

        {{-- Category Selector --}}
        <div class="select-box border-no">
            <select id="category" name="category" class="ls-normal" wire:model="selectedCategory">
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Search Input --}}
        <input type="text" class="form-control text-light border-no" name="search" id="search-input"
            placeholder="Search products..." wire:model.debounce.300ms="searchQuery" />

        <button class="btn btn-search border-no" type="submit">
            <i class="w-icon-search"></i>
        </button>
    </form>

    {{-- Live Dropdown Results --}}
    @if (!empty($searchQuery))
        <div class="product-list theme-scrollbar" id="product-list" style="position: absolute; width: 100%; background: #fff; z-index: 9999; max-height: 400px; overflow-y: auto; padding: 10px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <ul class="list-unstyled m-0 p-2">
                @forelse($products as $product)
                    <li class="py-2 d-flex align-items-center border-bottom">
                        <a href="{{ route('product-details', $product['slug']) }}"
                            class="d-flex align-items-center text-dark text-decoration-none w-100">
                            <div class="product-img me-3" style="flex: 0 0 50px;">
                                <img src="{{ asset($product['thumb_image']) }}" alt="" class="img-fluid" style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            <div class="product-info flex-grow-1">
                                <div class="fw-semibold">{{ $product['name'] }}</div>
                                <span class="d-block text-muted small">
                                    {{ $product['offer_price'] }}৳
                                    @if ($product['discount_option'] != 1)
                                        <del class="text-danger ms-1">{{ $product['base_price'] }}৳</del>
                                    @endif
                                </span>
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="py-2 text-muted text-center">No product found</li>
                @endforelse
            </ul>
        </div>
    @endif
</div>
