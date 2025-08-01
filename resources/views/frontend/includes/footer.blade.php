<footer class="footer appear-animate" data-animation-options="{
            'name': 'fadeIn'
        }">

    {{-- <livewire:frontend.subscription /> --}}

    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about">
                        @if (config('app.footer_logo'))
                            <a href="{{ url('/') }}" class="logo-footer">
                                <img src="{{ asset(config('app.footer_logo')) }}" class="footer-logo" />
                            </a>
                        @endif
                        <div class="widget-body">
                            <p class="widget-about-title">Got Question? Call us 24/7</p>
                            <ul class="contact-info">
                                <li>
                                    <i class="w-icon-call"></i>
                                    <a href="tel:{{ config('app.phone') }}" class="widget-about-call">
                                        {{ config('app.phone') }}
                                    </a>
                                </li>
                                <li>
                                    <i class="w-icon-call"></i>
                                    <a href="tel:{{ config('app.phone2') }}" class="widget-about-call">
                                        {{ config('app.phone2') }}
                                    </a>
                                </li>
                                <li>
                                    <i class="w-icon-envelop-closed"></i>
                                    <a href="mailto:{{ config('app.email') }}" class="widget-about-call">
                                        {{ config('app.email') }}
                                    </a>
                                </li>
                                
                            </ul>


                            <div class="social-icons social-icons-colored">
                                @if (!is_null(config('app.facebook'))  && !empty(config('app.facebook')))
                                    <a href="{{ config('app.facebook') }}" target="_blank"
                                        class="social-icon social-facebook w-icon-facebook"></a>
                                @endif

                                @if (!is_null(config('app.instra')) && !empty(config('app.instra')))
                                    <a href="{{ config('app.instra') }}" target="_blank"
                                        class="social-icon social-instagram w-icon-instagram"></a>
                                @endif

                                @if (!is_null(config('app.youtube')) && !empty(config('app.youtube')) )
                                    <a href="{{ config('app.youtube') }}" target="_blank"
                                        class="social-icon social-youtube w-icon-youtube"></a>
                                @endif

                                @if (!is_null(config('app.whatsapp'))  && !empty(config('app.whatsapp')) )
                                    <a href="{{ config('app.whatsapp') }}" target="_blank"
                                        class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Information</h3>
                        <ul class="widget-body">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ route('shop') }}">Product Collections</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6">
                    <div class="widget mb-0">
                        <h4 class="widget-title">Need Help</h4>
                        <ul class="widget-body">
                            <li><a href="{{ route('terms') }}">Term and Conditions</a></li>
                            <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                            <li><a href="{{ route('refund.policy') }}">Refund Policy</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom justify-content-center">
            <p class="copyright">Copyright © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>
