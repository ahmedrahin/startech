<div class="ht-item search" id="search" wire:ignore.self>
    <input 
        type="text" 
        wire:model.debounce.300ms="searchQuery" 
        placeholder="Search products..." 
        autocomplete="off"
        wire:keydown.enter="performSearch"
    />
    
    @if(!empty($searchQuery))
        <div class="dropdown-menu" id="searchDropdown" style="display: block;">
            <div class="search-details">
                <ul class="nav nav-tabs">
                    <li 
                        wire:click="setActiveTab('products')" 
                        class="{{ $activeTab === 'products' ? 'active' : '' }}"
                    >
                        Products ({{ count($products) }})
                    </li>
                    <li 
                        wire:click="setActiveTab('categories')" 
                        class="{{ $activeTab === 'categories' ? 'active' : '' }}"
                    >
                        Categories ({{ count($filteredCategories) }})
                    </li>
                </ul>
                
                @if($activeTab === 'products')
                    <div id="tab-prod" class="search-results" style="display: block;">
                        @forelse($products as $product)
                            <div class="search-item">
                                <a href="{{ route('product-details', $product['slug']) }}">
                                    <div class="image">
                                        <img src="{{ asset($product['thumb_image']) }}" alt="{{ $product['name'] }}">
                                    </div>
                                    <div class="name">{{ $product['name'] }}</div>
                                    <div class="price">
                                        {{ number_format($product['offer_price'], 2) }}৳
                                        @if (isset($product['discount_option']) && $product['discount_option'] != 1)
                                            <del class="price-old">{{ number_format($product['base_price'], 2) }}৳</del>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="no-results">No products found</div>
                        @endforelse
                    </div>
                @else
                    <div id="tab-cat" class="search-results" style="display: block;">
                        @forelse($filteredCategories as $category)
                        <div class="search-item category">
                            <a href="">
                                <div class="image">
                                    <img  src="{{ $category->image ? asset($category->image) : asset('frontend/image/blank-image.svg') }}" >
                                </div>
                                <div class="name">{{ $category->name }}</div>
                                <div class="product-count">{{ $category->product_count }} products</div>
                            </a>
                        </div>
                        @empty
                        <div class="no-results">No categories found</div>
                        @endforelse
                    </div>
                @endif
            </div>
        </div>
    @endif
    
    <button wire:click="performSearch" class="material-icons">search</button>
</div>