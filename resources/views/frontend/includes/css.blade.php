<!-- Favicon icon-->
<link rel="icon" href="{{asset(config('app.favicon'))}}" type="image/x-icon" />
<link rel="shortcut icon" href="{{asset(config('app.favicon'))}}" type="image/x-icon" />

<!-- WebFont.js -->
<script>
    WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{ asset("frontend/js/webfont.js") }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
</script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<link rel="preload" href="{{ asset('frontend/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/fonts/wolmart.woff?png09e') }}" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/vendors/fontawesome.css')}}"/> --}}

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.min.css') }}">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}">

    <link rel="stylesheet" type="text/css" id="rtl-link" href="{{asset('frontend/css/bootstrap.css')}}"/>

    <!-- Default CSS -->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/toastify.css')}}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/demo14.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" />
{{-- page css file --}}
@yield('page-css')
