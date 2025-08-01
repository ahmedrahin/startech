<div>

    @php
        $productStocks = $product->productStock ?? collect();
        $attributesList = $attributes->keyBy('id');
        $attributesValuesList = $attributesValues->keyBy('id');
        $groupedAttributes = [];

        $singleVariationStocks = $productStocks->filter(function ($productStock) {
            return $productStock->attributeOptions->count() === 1;
        });
    @endphp

    @if ($singleVariationStocks->isNotEmpty())
        {{-- Group attributes and their values --}}
        @foreach ($singleVariationStocks as $productStock)
            @foreach ($productStock->attributeOptions as $attributeOption)
                @php
                    $groupedAttributes[$attributeOption->attribute_id][] =
                        $attributesValuesList[$attributeOption->attribute_value_id] ?? '';
                @endphp
            @endforeach
        @endforeach

        {{-- Product Color Swatch --}}
        @php
            $colorAttribute = $attributesList->firstWhere('attr_name', 'Color');
            $colorValues = $colorAttribute ? $groupedAttributes[$colorAttribute->id] ?? [] : [];
        @endphp

        @if (!empty($colorValues))
            <div class="product-form product-variation-form product-color-swatch">
                <label>Color:</label>
                <div class="d-flex align-items-center product-variations">
                    @foreach ($colorValues as $color)
                        <a href="javascript:void(0)"
                            class="color {{ $color->attr_value == $selectedColor ? 'active' : '' }}"
                            style="background-color: {{ $color->option ?: $color->attr_value }};"
                            data-color="{{ $color->attr_value }}">
                        </a>
                    @endforeach
                </div>
                @if ($colorError)
                    <div class="text-danger variant-error mt-1">{{ $colorError }}</div>
                @endif
            </div>
        @endif

        {{-- Product Size Swatch --}}
        @foreach ($groupedAttributes as $attribute_id => $attributeValues)
            @if ($attributesList[$attribute_id]->attr_name != 'Color' && $attributesList[$attribute_id]->attr_name == 'Size')
                <div class="product-form product-variation-form product-size-swatch">
                    <label class="mb-1">{{ $attributesList[$attribute_id]->attr_name }}:</label>
                    <div class="flex-wrap d-flex align-items-center product-variations">
                        @foreach ($attributeValues as $value)
                            <a href="javascript:void(0)"
                                class="size {{ $value->attr_value == $selectedSize ? 'active' : '' }}"
                                data-size="{{ $value->attr_value }}">
                                {{ $value->attr_value }}
                            </a>
                        @endforeach
                    </div>
                    @if ($sizeError)
                        <div class="text-danger variant-error mt-1">{{ $sizeError }}</div>
                    @endif
                </div>
            @endif
        @endforeach
    @endif


    {{-- <div class="product-variation-price">
        <span></span>
    </div> --}}

    <div class="product-sticky-content sticky-content">
        <div class="product-form container quantity-box">
            <div class="product-qty-form">
                <div class="input-group" id="quantity">
                    <input class=" quntity-filed form-control" type="number" wire:model="quantity" min="1"
                        data-quantity="{{ $product->quantity }}">
                    <button class="quantity-plus w-icon-plus plus"></button>
                    <button class="quantity-minus w-icon-minus minus"></button>
                </div>
            </div>

            @if ($product->quantity > 0)
                <button class="btn btn-primary btn-cart" wire:click="addToCart">
                    <i class="w-icon-cart"></i>
                    <span>Add to Cart</span>
                </button>
                 <button class="btn btn-primary btn-cart buynow" wire:click="buyNow">
                    <i class="w-icon-shop"></i>
                    <span>Buy Now</span>
                </button>
            @else
                <button class="btn btn-primary btn-cart disabled">
                    Out of stock!
                </button>
            @endif
        </div>
    </div>


    @section('addcart-js')
        <script>
            // quantity js
            document.addEventListener("DOMContentLoaded", () => {
                const plusMinus = document.querySelectorAll('#quantity');

                plusMinus.forEach((element) => {
                    const addButton = element.querySelector('.plus');
                    const subButton = element.querySelector('.minus');
                    const inputEl = element.querySelector(".quntity-filed");

                    // Check if inputEl exists and has a quantity dataset
                    if (inputEl && inputEl.dataset.quantity) {
                        const maxQuantity = parseInt(inputEl.dataset.quantity);

                        addButton?.addEventListener('click', function() {
                            let currentValue = Number(inputEl.value);
                            if (currentValue < maxQuantity) {
                                inputEl.value = currentValue + 1;
                                Livewire.emit('updateQuantity', inputEl.value);
                            }

                            addButton.disabled = (inputEl.value >= maxQuantity);
                            subButton.disabled = false;
                        });

                        subButton?.addEventListener('click', function() {
                            let currentValue = Number(inputEl.value);
                            if (currentValue > 1) {
                                inputEl.value = currentValue - 1;
                                Livewire.emit('updateQuantity', inputEl.value);
                            }

                            subButton.disabled = (inputEl.value <= 1);
                        });

                        // Initial button state on page load
                        addButton.disabled = (inputEl.value >= maxQuantity);
                    }
                });
            });
        </script>

        {{-- product qty and variaiton js --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Size swatches (new theme selector: .product-variations .size)
                var sizeItems = document.querySelectorAll('.product-variations .size');
                sizeItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        sizeItems.forEach(function(sizeItem) {
                            sizeItem.classList.remove('active');
                        });
                        this.classList.add('active');
                        var selectedSize = this.getAttribute('data-size');
                        Livewire.emit('selectSize', selectedSize);
                    });
                });

                // Color swatches (new theme selector: .product-variations .color)
                var colorItems = document.querySelectorAll('.product-variations .color');
                colorItems.forEach(function(item) {
                    item.addEventListener('click', function() {
                        colorItems.forEach(function(colorItem) {
                            colorItem.classList.remove('active');
                        });
                        this.classList.add('active');
                        var selectedColor = this.getAttribute('data-color');
                        Livewire.emit('selectColor', selectedColor);
                    });
                });

                // Clean All button (optional)
                var clearBtn = document.querySelector('.product-variation-clean');
                if (clearBtn) {
                    clearBtn.addEventListener('click', function() {
                        sizeItems.forEach(item => item.classList.remove('active'));
                        colorItems.forEach(item => item.classList.remove('active'));
                        Livewire.emit('clearSelections');
                    });
                }
            });
        </script>
    @endsection
</div>
