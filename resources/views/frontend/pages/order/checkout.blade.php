@extends('frontend.layout.app')

@section('page-title')
    Checkout | {{ config('app.name') }}
@endsection

@section('page-css')
    <link href="{{ asset('frontend/style/checkout.min.12.css') }}" type="text/css" rel="stylesheet" media="screen" />
    <style>
         @media screen and (min-width: 991px) {
            .btncouopn {
                width: 200px;
            }
            
        }
    </style>
@endsection


@section('body-content')
    <livewire:frontend.order.checkout />
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
