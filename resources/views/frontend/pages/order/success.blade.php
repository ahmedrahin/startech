@extends('frontend.layout.app')

@section('page-title')
    Checkout Successful | {{ config('app.name') }}
@endsection

@section('page-css')
    <style>
        .btn-coupon span {
            color: white;
            font-size: 15px;
        }

        .cart-btn {
            display: none;
        }

        .order-box-1 {
            text-align: center;
            padding: 40px 20px;
            background-color: #f8f9fa;
            margin-bottom: 40px;
        }

        .order-box-1 h4 {
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }

        .order-items,
        .summery-box,
        .summery-footer {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 24px;
        }

        .order-items h4,
        .sidebar-title h4 {
            font-size: 20px;
            margin-bottom: 15px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .order-table table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th,
        .order-table td {
            padding: 12px;
            text-align: left;
            vertical-align: middle;
            border-bottom: 1px solid #f0f0f0;
        }

        .cart-box {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .cart-box img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .summery-content ul {
            padding-left: 0;
            list-style: none;
            margin-bottom: 15px;
        }

        .summery-content li {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .summery-footer ul {
            list-style: none;
            padding-left: 0;
        }

        .summery-footer li h6 {
            font-size: 15px;
            color: #444;
        }

        .btn.btn_black {
            background-color: #222;
            color: #fff;
            border-radius: 6px;
            padding: 8px 20px;
            display: inline-block;
            text-align: center;
            transition: background 0.3s ease;
        }

        .btn.btn_black:hover {
            background-color: #000;
        }

        .summery-content p {
            margin-bottom: 0 !important;
        }

        .short {
            margin-top: 20px;
            font-weight: 500;
            font-size: 16px;
        }

        @media (max-width: 767px) {
            .cart-box {
                flex-direction: column;
                align-items: flex-start;
            }

            .order-items,
            .summery-box,
            .summery-footer {
                padding: 15px;
            }
        }
    </style>
@endsection

@section('body-content')
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="passed"><span>Shopping Cart</span></li>
                <li class="passed"><span>Checkout</span></li>
                <li class="active"><span>Order Complete</a></li>
            </ul>
        </div>
    </nav>

    @php
        $payment = match ($order->payment_type) {
            'cod' => 'Cash On Delivery',
            'sslcommerz' => 'Online Payment',
            default => 'Unknown',
        };
    @endphp


    <section class="section-b-space py-0 mb-5">
        <div class="container">
            <div class="order-box-1">
                <h4 class="mb-0">Thank you! We've received your order.</h4>
                <p class="mb-0 short">
                    Your order is placed with {{ $payment }}.Your order reference is <b style="color:black;">{{ $order->order_id }}</b> and total
                    order value is BDT {{ number_format($order->grand_total, 0) }}.
                </p>
            </div>

            <div class="row gy-4">
                <!-- Left: Order Items -->
                <div class="col-xl-8">
                    <div class="order-items sticky">
                        <h4>Order Information</h4>

                        <div class="order-table">
                            <div class="table-responsive theme-scrollbar">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th class="text-center">Qty</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $subtotal = 0; @endphp

                                        @foreach ($order->orderItems as $item)
                                            @php $subtotal += $item->price * $item->quantity; @endphp
                                            <tr>
                                                <td>
                                                    <div class="cart-box">
                                                        <a href="{{ route('product-details', $item->product->slug) }}">
                                                            <img src="{{ asset($item->product->thumb_image) }}"
                                                                alt="">
                                                        </a>
                                                        <div>
                                                            <a href="{{ route('product-details', $item->product->slug) }}">
                                                                <h5 class="mb-0">{{ $item->product->name }}</h5>
                                                            </a>
                                                            @if ($item->orderItemVariations->count())
                                                                <p class="mb-0">
                                                                    @foreach ($item->orderItemVariations as $variant)
                                                                        {{ ucfirst($variant->attribute_name) }}:
                                                                        {{ ucfirst($variant->attribute_value) }}
                                                                        @if (!$loop->last)
                                                                            -
                                                                        @endif
                                                                    @endforeach
                                                                </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>৳{{ $item->price }}</td>
                                                <td class="text-center">{{ $item->quantity }}</td>
                                                <td>৳{{ $item->price * $item->quantity }}</td>
                                            </tr>
                                        @endforeach

                                        <tr>
                                            <td colspan="2"></td>
                                            <td class="fw-bold">Total:</td>
                                            <td class="fw-bold">৳{{ number_format($subtotal, 2) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Summary -->
                <div class="col-xl-4">
                    <div class="summery-box">
                        <div class="sidebar-title">
                            <h4>Order Details</h4>
                        </div>
                        <div class="summery-content">
                            <ul>
                                <li>
                                    <p class="fw-semibold">Product Sub-total ({{ $order->orderItems->sum('quantity') }}
                                        pcs)</p>
                                    <h6 class="mb-0">৳{{ number_format($subtotal, 2) }}</h6>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <p>Shipping Costs</p><span>৳{{ $order->shipping_cost }}</span>
                                </li>
                                <li>
                                    <p>Discount</p><span>৳{{ $order->coupon_discount }}</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <h6 class="mb-0">Total</h6>
                                <h5 class="mb-0 text-primary">৳{{ number_format($order->grand_total, 2) }}</h5>
                            </div>
                        </div>
                    </div>

                    <div class="summery-footer">
                        <div class="sidebar-title">
                            <h4>Shipping Address</h4>
                        </div>
                        <ul>
                            <li>
                                <h6 class="mb-2">{{ $order->shipping_address }},</h6>
                                <h6>{{ $order->district->name }}</h6>
                            </li>
                            <li>
                                <h5>{{ \Carbon\Carbon::parse($order->order_date)->format('M d, Y - h:i A') }}</h5>
                            </li>
                        </ul>
                    </div>

                    <a class="btn btn_black me-2" href="{{ route('order.invoice.pdf', $order->order_id) }}">Download
                        Invoice</a>
                    <a class="btn btn_black" href="{{ route('shop') }}">Continue Shopping</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-script')
    @if (session('success'))
        <script>
            Toastify({
                text: "{{ session('success') }}",
                duration: 3000,
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)"
            }).showToast();
        </script>
    @endif
@endsection
