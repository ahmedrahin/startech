@extends('frontend.layout.app')

@section('page-title')
  Contact Us
@endsection

@section('page-css')

<style>
  .btn_black {
    width: 150px;
    height: 50px;
  }

  .btn_black span {
    color: white;
    font-size: 16px;
  }
  form input {
    margin-bottom: 0 !important;
  }
</style>

@endsection

@section('body-content')

<main class="main">
  <!-- Start of Page Header -->
  <div class="page-header">
    <div class="container">
      <h1 class="page-title mb-0">Contact Us</h1>
    </div>
  </div>
  <!-- End of Page Header -->

  <!-- Start of Breadcrumb -->
  <nav class="breadcrumb-nav mb-10 pb-1">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Contact Us</li>
      </ul>
    </div>
  </nav>
  <!-- End of Breadcrumb -->

  <!-- Start of PageContent -->
  <div class="page-content contact-us">
    <div class="container">
      <section class="content-title-section mb-10">
        <h3 class="title title-center mb-3">Contact
          Information
        </h3>
        <p class="text-center">Lorem ipsum dolor sit amet,
          consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut</p>
      </section>
      <!-- End of Contact Title Section -->

      <section class="contact-information-section mb-10">
        <div class=" swiper-container swiper-theme " data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 1,
                            'breakpoints': {
                                '480': {
                                    'slidesPerView': 2
                                },
                                '768': {
                                    'slidesPerView': 3
                                },
                                '992': {
                                    'slidesPerView': 4
                                }
                            }
                        }">
          <div class="swiper-wrapper row cols-xl-4 cols-md-3 cols-sm-2 cols-1" style="justify-content: center;">
            <div class="swiper-slide icon-box text-center icon-box-primary">
              <span class="icon-box-icon icon-email">
                <i class="w-icon-envelop-closed"></i>
              </span>
              <div class="icon-box-content">
                <h4 class="icon-box-title">E-mail Address</h4>
                <p>{{ config('app.email') }}</p>
              </div>
            </div>
            <div class="swiper-slide icon-box text-center icon-box-primary">
              <span class="icon-box-icon icon-headphone">
                <i class="w-icon-headphone"></i>
              </span>
              <div class="icon-box-content">
                <h4 class="icon-box-title">Phone Number</h4>
                <p>{{ config('app.phone') }} / {{ config('app.phone2') }}</p>
              </div>
            </div>
            <div class="swiper-slide icon-box text-center icon-box-primary">
              <span class="icon-box-icon icon-map-marker">
                <i class="w-icon-map-marker"></i>
              </span>
              <div class="icon-box-content">
                <h4 class="icon-box-title">Address</h4>
                <p>{{ config('app.address') }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of Contact Information section -->

      <hr class="divider mb-10 pb-1">

      <section class="contact-section">
        <div class="row gutter-lg pb-3">
          
          @livewire('frontend.user.contact-message')
          
        </div>
      </section>
      <!-- End of Contact Section -->
    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div class="google-map contact-google-map" id="googlemaps"></div>
    <!-- End Map Section -->
  </div>
  <!-- End of PageContent -->
</main>


@endsection

@section('page-script')

@endsection