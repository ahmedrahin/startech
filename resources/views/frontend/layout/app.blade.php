
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

<head>
    @include('frontend.includes.header')
    @include('frontend.includes.css')
    @livewireStyles
</head>

<body class="">
    {{-- cart btn --}}
    @if( !request()->routeIs('cart') && !request()->routeIs('checkout') )
        {{-- <livewire:frontend.cart.btnshopping /> --}}
    @endif
    
    <div class="page-wrapper">
         @include('frontend.includes.menu')

        <!-- body content -->
        @yield('body-content')

        @include('frontend.includes.footer')
        @include('frontend.includes.cart-sidebar')
    </div>
        
   @include('frontend.includes.bottom-content')
    @include('frontend.includes.script')

    @livewireScripts
</body>

</html>
