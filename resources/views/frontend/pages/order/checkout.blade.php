@extends('frontend.layout.app')

@section('page-title')
    Checkout | {{ config('app.name') }}
@endsection

@section('page-css')
    <style>
        .btn-coupon span {
            color: white;
            font-size: 15px;
        }

        .form .form-control {
            margin-bottom: 0 !important;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .shipping-methods .custom-radio {
            line-height: 2.3;
        }

        #shipping-method {
            margin-top: 10px;
        }

        .btn-coupon span {
            font-size: 14px !important;
        }

        .coupon-discount {
            border-bottom: 1px solid #eee !important;
        }

        .coupon-discount td {
            padding-bottom: 2rem !important;
        }

        .payment-methods {
            max-width: 600px;
            padding: 20px;
            border-radius: 8px;
        }

        .payment-methods h4 {
            margin-bottom: 15px;
            font-size: 18px;
            font-weight: bold;
        }

        .payment-option {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 0;
            border-top: 1px solid #eee;
            cursor: pointer;
        }

        .payment-option:first-of-type {
            border-top: none;
        }

        .payment-option input[type="radio"] {
            margin-top: 5px;
            accent-color: #222;
            cursor: pointer;
        }

        .method-details strong {
            display: block;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .method-details p {
            font-size: 14px;
            color: #555;
            margin: 0;
        }

        input[type="radio"] {
            accent-color: #000;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
    </style>
@endsection


@section('body-content')
    <main class="main checkout">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb shop-breadcrumb bb-no">
                    <li class="passed"><a href="{{ route('cart') }}">Shopping Cart</a></li>
                    <li class="active"><a href="{{ route('checkout') }}">Checkout</a></li>
                    <li><span>Order Complete</a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->


        <livewire:frontend.order.checkout />

    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.hook('message.processed', (message, component) => {
                let url = component.get('sslcommerzUrl');
                if (url) {
                    window.location.href = url; // Full page redirect triggered after Livewire updates
                }
            });
        });
    </script>
@endpush
