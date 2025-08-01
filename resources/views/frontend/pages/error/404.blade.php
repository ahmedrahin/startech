@extends('frontend.layout.app')

@section('page-title')
    404 Not found
@endsection

@section('page-css')
    <style>
        .not-found-title{
            text-align: center;
            font-size: 100px;
            margin-bottom: 0px;
        }
        .error-404 .banner-content {
            margin-top: 2.5rem !important;
        }
    </style>
@endsection


@section('body-content')
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Error 404</li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content error-404">
            <div class="container">
                <div class="banner">
                    <figure>
                        <h1 class="not-found-title">404</h1>
                    </figure>
                    <div class="banner-content text-center">
                        <h2 class="banner-title">
                            <span class="text-secondary">Oops!!!</span> Page Not Found
                        </h2>
                        <p class="text-light">The page you're looking for doesn't exist, or something went wrong.</p>
                <a href="{{ url('/') }}" class="btn btn-dark btn-rounded btn-icon-right">Go Back Home<i
                                class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
@endsection
