@extends('frontend.layout.app')

@section('page-title')
Cart
@endsection

@section('page-css')

@endsection


@section('body-content')


<main class="main cart">
    <!-- Start of Breadcrumb -->
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb shop-breadcrumb bb-no">
                <li class="active"><a href="{{ route('cart') }}">Shopping Cart</a></li>
                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                <li><span>Order Complete</span></li>
            </ul>
        </div>
    </nav>
    <!-- End of Breadcrumb -->

    <livewire:frontend.cart.cart-list />

</main>


@endsection