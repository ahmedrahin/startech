<!-- Plugin JS File -->
<script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('frontend/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('frontend/vendor/skrollr/skrollr.min.js') }}"></script>

<script src="{{ asset('frontend/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

<!-- Swiper JS -->
<script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>

<!-- Main JS -->
<script src="{{ asset('frontend/js/main.js') }}"></script>

<script src="{{ asset('frontend/js/toastify.js') }}"></script>

<script src="{{ asset('frontend/vendor/sticky/sticky.min.js') }}"></script>

{{-- messages --}}
@if (session('success') || session('error') || session('info') || session('warning'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let message =
                "{{ session('success') ?? (session('error') ?? (session('info') ?? session('warning'))) }}";
            let type =
                "{{ session('success') ? 'success' : (session('error') ? 'error' : (session('info') ? 'info' : 'warning')) }}";

            let iconHtml = "";
            switch (type) {
                case "success":
                    iconHtml = '<i class="bi bi-check-circle-fill" style="color: #28a745; font-size: 18px;"></i>';
                    break;
                case "error":
                    iconHtml = '<i class="bi bi-x-circle-fill" style="color: #e74c3c; font-size: 18px;"></i>';
                    break;
                case "info":
                    iconHtml = '<i class="bi bi-info-circle-fill" style="color: #3498db; font-size: 18px;"></i>';
                    break;
                case "warning":
                    iconHtml =
                        '<i class="bi bi-exclamation-circle-fill" style="color: #f39c12; font-size: 18px;"></i>';
                    break;
                default:
                    iconHtml = "";
            }

            Toastify({
                text: `<span>
                     <span style="margin-right: 6px; font-size: 18px;">${iconHtml}</span>
                     <span>${message}</span>
                    </span>`,
                duration: 3000,
                gravity: "bottom",
                position: "center",
                close: true,
                escapeMarkup: false,
                style: {
                    background: "#fff",
                    color: "#000",
                    boxShadow: "0px 4px 10px rgba(0,0,0,0.1)",
                    borderRadius: "8px",
                    padding: "10px 15px",
                    fontSize: "16px",
                    fontWeight: '600',
                    border: "2px solid #ddd",
                    marginBottom: "5px",
                    bottom: "100px",
                    marginBottom: "30px",
                }
            }).showToast();
        });
    </script>
@endif

<script>
    document.addEventListener('livewire:load', () => {
        Livewire.on('success', (message) => showToast(message, "success"));
        Livewire.on('info', (message) => showToast(message, "info"));
        Livewire.on('warning', (message) => showToast(message, "warning"));
        Livewire.on('error', (message) => showToast(message, "error"));
    });

    function showToast(message, type = "default") {
        let iconHtml = "";
        let borderColor = "#ddd";

        // Icons for different message types
        switch (type) {
            case "success":
                iconHtml = '<i class="bi bi-check-circle-fill" style="color: #28a745; font-size: 18px;"></i>';
                break;
            case "error":
                iconHtml = '<i class="bi bi-x-circle-fill" style="color: #e74c3c; font-size: 18px;"></i>';
                break;
            case "info":
                iconHtml = '<i class="bi bi-info-circle-fill" style="color: #3498db; font-size: 18px;"></i>';
                break;
            case "warning":
                iconHtml = '<i class="bi bi-exclamation-circle-fill" style="color: #f39c12; font-size: 18px;"></i>';
                break;
            default:
                iconHtml = "";
        }

        Toastify({
            text: `<span>
                    <span style="margin-right: 6px; font-size: 18px;">${iconHtml}</span>
                    <span>${message}</span>
                   </span>`,
            duration: 3000,
            gravity: "bottom",
            position: "center",
            close: true,
            escapeMarkup: false,
            style: {
                background: "#fff",
                color: "#000",
                boxShadow: "0px 4px 10px rgba(0,0,0,0.1)",
                borderRadius: "8px",
                padding: "10px 15px",
                fontSize: "16px",
                fontWeight: '600',
                border: `2px solid ${borderColor}`,
                marginBottom: "5px",
                bottom: "100px",
            }
        }).showToast();
    }

    function error(message) {
        showToast(message, "error");
    }
</script>

<script>
    function message(type, message) {
        let iconHtml = "";
        switch (type) {
            case "success":
                iconHtml = '<i class="bi bi-check-circle-fill" style="color: #28a745; font-size: 18px;"></i>';
                break;
            case "error":
                iconHtml = '<i class="bi bi-x-circle-fill" style="color: #e74c3c; font-size: 18px;"></i>';
                break;
            case "info":
                iconHtml = '<i class="bi bi-info-circle-fill" style="color: #3498db; font-size: 18px;"></i>';
                break;
            case "warning":
                iconHtml = '<i class="bi bi-exclamation-circle-fill" style="color: #f39c12; font-size: 18px;"></i>';
                break;
            default:
                iconHtml = "";
        }

        Toastify({
            text: `<span>
                     <span style="margin-right: 6px; font-size: 18px;">${iconHtml}</span>
                     <span>${message}</span>
                    </span>`,
            duration: 3000,
            gravity: "bottom",
            position: "center",
            close: true,
            escapeMarkup: false,
            style: {
                background: "#fff",
                color: "#000",
                boxShadow: "0px 4px 10px rgba(0,0,0,0.1)",
                borderRadius: "8px",
                padding: "10px 15px",
                fontSize: "16px",
                fontWeight: '600',
                border: "2px solid #ddd",
                marginBottom: "5px",
                bottom: "100px",
                marginBottom: "30px",
            }
        }).showToast();
    }
</script>

{{-- added cart side notification --}}
<script>
    document.addEventListener('livewire:load', function() {
        Livewire.on('cartAdded', function() {
            // Find nearest product context (adjust as needed)
            var $product = $('.product-single, .product-popup').first();

            // Grab product details
            var productName = $product.find('.product-name, .product-title').text();
            var nameLink = $product.find('.product-name > a, .product-title > a').attr('href');
            var imageSrc = $product.find('.product-media img, .product-image:first-child img').attr(
                'src');
            var imageLink = nameLink;

            // Fallbacks (optional)
            if (!productName) productName = 'Product';

            Wolmart.Minipopup.open({
                productClass: ' product-cart',
                name: productName,
                nameLink: nameLink,
                imageSrc: imageSrc,
                imageLink: imageLink,
                message: '<p>has been added to cart:</p>',
                actionTemplate: `
                    <a href="{{ route('cart') }}" class="btn btn-rounded btn-sm">View Cart</a>
                    <a href="/checkout" class="btn btn-dark btn-rounded btn-sm">Checkout</a>
                `
            });
        });
    });

    document.addEventListener('livewire:load', function () {
        let lastClickedProductElement = null;
        document.addEventListener('click', function (e) {
            const btn = e.target.closest('.btn-cart');
            if (btn) {
                lastClickedProductElement = btn.closest('.product');
            }
        });

        Livewire.on('cartAdded', function () {
            let $product = lastClickedProductElement;

            if (!$product) return;

            // Extract product details
            const productName = $product.querySelector('.product-name a')?.innerText || 'Product';
            const nameLink = $product.querySelector('.product-name a')?.getAttribute('href') || '#';
            const imageSrc = $product.querySelector('.product-media img')?.getAttribute('src') || '';
            const imageLink = nameLink;

            Wolmart.Minipopup.open({
                productClass: 'product-cart',
                name: productName,
                nameLink: nameLink,
                imageSrc: imageSrc,
                imageLink: imageLink,
                message: '<p>has been added to cart:</p>',
                actionTemplate: `
                    <a href="{{ route('cart') }}" class="btn btn-rounded btn-sm">View Cart</a>
                    <a href="/checkout" class="btn btn-dark btn-rounded btn-sm">Checkout</a>
                `
            });

            // Reset last clicked product reference
            lastClickedProductElement = null;
        });
    });
</script>


{{-- reload js after livewire load --}}
<script>
    document.addEventListener("livewire:load", function() {
        addTocartFuncation();
        Livewire.hook('message.processed', (message, component) => {
            addTocartFuncation();

            document.querySelectorAll('.quickview').forEach(function(element) {
                element.addEventListener('click', function() {
                    Livewire.emit('get_productId', this.getAttribute(
                        'data-product-id'));
                });
            });
        });
    });
</script>

{{-- quick veiw modal --}}
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('btnClose', () => {
          setTimeout(() => {
            const modalElement = document.getElementById('quick-view');
            const modalInstance = bootstrap.Modal.getInstance(modalElement);
            modalInstance.hide();
          }, 1000);
        });
    });

    document.querySelectorAll('.quickview').forEach(function(element) {
        element.addEventListener('click', function() {
            Livewire.emit('get_productId', this.getAttribute('data-product-id'));
        });
    });
</script>


<script>
    function toggleSearchBox() {
        const searchBox = document.getElementById('mobileSearchBox');
        const isHidden = searchBox.style.display === 'none' || searchBox.style.display === '';
        searchBox.style.display = isHidden ? 'block' : 'none';
    }

    function closeSearchBox(event) {
        const searchBox = document.getElementById('mobileSearchBox');
        const toggleIcon = document.querySelector('.w-icon-search');

        // Do not close if click is on the toggle icon
        if (toggleIcon.contains(event.target)) return;

        // Close only if clicking outside the search box
        if (searchBox && !searchBox.contains(event.target)) {
            searchBox.style.display = 'none';
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.addEventListener('click', closeSearchBox);

        // Listen to Livewire events
        Livewire.on('serchUpdate', function () {
            toggleSearchBox();
        });
    });

    document.addEventListener('click', function (event) {
        const productList = document.getElementById('product-list');
        const searchInput = document.getElementById('search-input');

        if (productList) {
            if (!productList.contains(event.target) && !searchInput.contains(event.target)) {
                productList.style.display = 'none';
            } else if (searchInput.contains(event.target)) {
                productList.style.display = 'block';
            }
        }
    });
</script>



{{-- quick add to cart --}}
<script>
    function addTocartFuncation() {
        const plusMinus = document.querySelectorAll('.quantity-box');

        plusMinus.forEach((element) => {
            const addButton = element.querySelector('.plus');
            const subButton = element.querySelector('.minus');
            const inputEl = element.querySelector(".quntity-filed");

            if (inputEl && inputEl.dataset.quantity) {
                const maxQuantity = parseInt(inputEl.dataset.quantity);

                // Clone buttons to remove existing event listeners
                const newAddButton = addButton.cloneNode(true);
                const newSubButton = subButton.cloneNode(true);

                addButton.replaceWith(newAddButton);
                subButton.replaceWith(newSubButton);

                newAddButton.addEventListener('click', function() {
                    let currentValue = Number(inputEl.value);
                    if (currentValue < maxQuantity) {
                        inputEl.value = currentValue + 1;
                        Livewire.emit('updateQuantity', inputEl.value);
                    }

                    newAddButton.disabled = (inputEl.value >= maxQuantity);
                    newSubButton.disabled = false;
                });

                newSubButton.addEventListener('click', function() {
                    let currentValue = Number(inputEl.value);
                    if (currentValue > 1) {
                        inputEl.value = currentValue - 1;
                        Livewire.emit('updateQuantity', inputEl.value);
                    }

                    newSubButton.disabled = (inputEl.value <= 1);
                });

                // Initial button state
                newAddButton.disabled = (inputEl.value >= maxQuantity);
                newSubButton.disabled = (inputEl.value <= 1);
            }
        });

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

    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cartContainer = document.getElementById('cart-products');
        if (cartContainer && cartContainer.offsetHeight > 500) {
            cartContainer.classList.add('scrollable');
        }
    });
</script>


@yield('page-script')
@yield('addcart-js')
@stack('scripts')
