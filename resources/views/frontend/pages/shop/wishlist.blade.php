@extends('frontend.layout.app')

@section('page-title')
    Wishlist
@endsection

@section('body-content')
    {{-- quick view modal --}}
    <livewire:frontend.cart.quick-view />

    <livewire:frontend.wishlist.wishlist-list />
@endsection

@section('page-script')
@endsection
