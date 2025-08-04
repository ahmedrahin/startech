<div>
    <div class="cart-option">
        <label class="quantity">
            <span class="ctl minus"><i class="material-icons">remove</i></span>
            <span class="qty">
                <input class="quntity-filed form-control" type="text" wire:model="quantity" min="1"
                    data-quantity="{{ $product->quantity }}" value="1">
            </span>
            <span class="ctl plus"><i class="material-icons">add</i></span>
        </label>

        @if ($product->quantity > 0)
            <button id="button-cart" class="btn submit-btn" wire:click="addToCart">
                <span wire:loading.remove wire:target="addToCart">Buy Now</span>
                <span wire:loading wire:target="addToCart">
                    Loading...
                </span>
            </button>
        @else
            <button class="btn submit-btn"
                style="background: #8080806b;border-color:#8080806b;box-shadow:rgba(0, 0, 0, 0.2) 0px 50px inset;"
                disabled>Out of stock!</button>
        @endif
    </div>


    @section('addcart-js')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
                const plusMinusWrappers = document.querySelectorAll('.quantity');

                plusMinusWrappers.forEach((wrapper) => {
                    const addButton = wrapper.querySelector('.plus');
                    const subButton = wrapper.querySelector('.minus');
                    const inputEl = wrapper.querySelector('.quntity-filed');

                    if (inputEl && inputEl.dataset.quantity) {
                        const maxQuantity = parseInt(inputEl.dataset.quantity);

                        addButton?.addEventListener('click', function () {
                            let currentValue = Number(inputEl.value);
                            if (currentValue < maxQuantity) {
                                inputEl.value = currentValue + 1;
                                inputEl.dispatchEvent(new Event('input'));
                            }

                            addButton.disabled = (inputEl.value >= maxQuantity);
                            subButton.disabled = false;
                        });

                        subButton?.addEventListener('click', function () {
                            let currentValue = Number(inputEl.value);
                            if (currentValue > 1) {
                                inputEl.value = currentValue - 1;
                                inputEl.dispatchEvent(new Event('input')); // trigger Livewire update
                            }

                            subButton.disabled = (inputEl.value <= 1);
                        });

                        // Optional: Initial button state on page load
                        addButton.disabled = (inputEl.value >= maxQuantity);
                        subButton.disabled = (inputEl.value <= 1);
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