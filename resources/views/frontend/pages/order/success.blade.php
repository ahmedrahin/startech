@extends('frontend.layout.app')

@section('page-title')
    Checkout Successful | {{ config('app.name') }}
@endsection

@section('page-css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .success-wrapper {
            background: #f9f9f9;
            padding: 40px 20px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 40px;
        }

        .success-icon {
            width: 70px;
            height: 70px;
            background: #28a745;
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .order-summary, .shipping-info {
            background: #ffffff;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-bottom: 25px;
        }

        .order-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .order-item img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-right: 15px;
        }

        .order-item-details {
            flex-grow: 1;
        }

        .order-summary .summary-total {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }

        .btn-group-actions {
            margin-top: 25px;
        }

        .btn-group-actions .btn {
            width: 48%;
        }

        .btn_black {
            background-color: #222;
            color: white;
            border-radius: 6px;
            /* padding: 10px 15px; */
            text-decoration: none;
            text-align: center;
            transition: 0.3s;
        }

        .btn_black:hover {
            background-color: #000;
        }

        @media (max-width: 768px) {
            .order-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .order-item img {
                margin-bottom: 10px;
            }

            .btn-group-actions .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
@endsection

@section('body-content')
    @php
        $payment = match ($order->payment_type) {
            'cod' => 'Cash On Delivery',
            'sslcommerz' => 'Online Payment',
            default => 'Unknown',
        };
    @endphp

    <div class="container my-5">
        <!-- Success Message -->
        <div class="success-wrapper">
            <div class="success-icon">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="text-success mb-2">Thank You! Your Order is Confirmed</h3>
            <p class="text-muted">
                Payment Method: <strong>{{ $payment }}</strong><br>
                Order ID: <strong>{{ $order->order_id }}</strong><br>
                Total Amount: <strong>৳{{ number_format($order->grand_total, 2) }}</strong>
            </p>
        </div>

        <div class="row" style="margin-bottom:50px;">
            <!-- Left: Order Items -->
            <div class="col-lg-8">
                <div class="order-summary">
                    <h5 class="mb-4">Order Items</h5>
                    @foreach ($order->orderItems as $item)
                        <div class="order-item">
                            <img src="{{ asset($item->product->thumb_image) }}" alt="">
                            <div class="order-item-details">
                                <h6 class="mb-1">
                                    <a href="{{ route('product-details', $item->product->slug) }}">
                                        {{ $item->product->name }}
                                    </a>
                                </h6>
                                @if ($item->orderItemVariations->count())
                                    <small class="text-muted">
                                        @foreach ($item->orderItemVariations as $variant)
                                            {{ ucfirst($variant->attribute_name) }}: {{ ucfirst($variant->attribute_value) }}
                                            @if (!$loop->last) - @endif
                                        @endforeach
                                    </small><br>
                                @endif
                                <small>Qty: {{ $item->quantity }} | Unit Price: ৳{{ $item->price }}</small>
                            </div>
                            <div>
                                <strong>৳{{ $item->price * $item->quantity }}</strong>
                            </div>
                        </div>
                    @endforeach

                    <div class="summary-total d-flex justify-content-between pt-3">
                        <span>Total</span>
                        <span>৳{{ number_format($order->orderItems->sum(fn($i) => $i->price * $i->quantity), 2) }}</span>
                    </div>
                </div>
            </div>

            <!-- Right: Summary -->
            <div class="col-lg-4">
                <div class="order-summary">
                    <h5 class="mb-4">Payment Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <span>৳{{ number_format($order->orderItems->sum(fn($i) => $i->price * $i->quantity), 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping</span>
                        <span>৳{{ number_format($order->shipping_cost, 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Discount</span>
                        <span>-৳{{ number_format($order->coupon_discount, 2) }}</span>
                    </div>
                    <div class="summary-total d-flex justify-content-between pt-3">
                        <span>Total</span>
                        <strong class="text-primary">৳{{ number_format($order->grand_total, 2) }}</strong>
                    </div>
                </div>

                <div class="shipping-info">
                    <h5 class="mb-3">Shipping Address</h5>
                    <p class="mb-1">{{ $order->shipping_address }}</p>
                    <p class="mb-1">{{ $order->district->name }}</p>
                    <small class="text-muted">
                        Order Date: {{ \Carbon\Carbon::parse($order->order_date)->format('M d, Y - h:i A') }}
                    </small>
                </div>

                <div class="btn-group-actions d-flex justify-content-between">
                    <a href="{{ route('order.invoice.pdf', $order->order_id) }}" class="btn btn_black">
                        <i class="fas fa-download me-1"></i> Invoice
                    </a>
                    <a href="{{ route('shop') }}" class="btn btn_black">
                        <i class="fas fa-shopping-bag me-1"></i> Shop More
                    </a>
                </div>
            </div>
        </div>
    </div>
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
