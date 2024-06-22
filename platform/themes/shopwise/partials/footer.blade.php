@php
    $lang = app()->getLocale();
@endphp
<!-- footer area start-->
<div class="footer-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="single-footer contact-us">
                    <img width="120"
                         src="{{ RvMedia::getImageUrl(theme_option('logo_footer') ? theme_option('logo_footer') : theme_option('logo')) }}"
                         alt="{{ theme_option('site_title') }}" loading="lazy" />

                    <div class="footer-title uppercase">
                        <br>
                        <h5>{{ __('Contact US') }}</h5>
                    </div>
                    <ul>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-pin-drop"></i> </div>
                            <div class="contact-text">
                                <p>{{ theme_option('address') }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-email-open"></i> </div>
                            <div class="contact-text">
                                <p><span><a href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a></span></p>
                            </div>
                        </li>
                        <li>
                            <div class="contact-icon"> <i class="zmdi zmdi-phone-paused"></i> </div>
                            <div class="contact-text">
                                <p><a href="tel://{{ theme_option('hotline') }}">{{ theme_option('hotline') }}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-4">
                <div class="single-footer informaton-area">
                    <div class="footer-title uppercase">
                        <h5>{{ __("Information") }}</h5>
                    </div>
                    <div class="informatoin">
                        <ul>
                            <li><a href="/{{ $lang }}/privacy-policy">{{ __('Privacy Policy') }}</a></li>
                            <li><a href="/{{ $lang }}/about-us">{{ __('About Us') }}</a></li>
                            <li><a href="/{{ $lang }}/conatc-us">{{ __('Contact Us') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 d-md-none d-block d-lg-block">
                <div class="single-footer instagrm-area">
                    <div class="footer-title uppercase">
                        <h5>{{__('Latest Products')}}</h5>
                    </div>
                    <div class="instagrm footer-img">
                        <ul>
                            @php
                                $products = get_products(['take' => 4]);

                            @endphp

                            @foreach($products as $product)
                                <li>
                                    <a href="{{ $product->url }}">
                                        <img src="{{ RvMedia::getImageUrl($product->image, 'full', false, RvMedia::getDefaultImage()) }}" alt="{{ $product->name }}">
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 offset-xl-1">
                <div class="single-footer newslatter-area">
                    <div class="footer-title uppercase">
                        <h5>Get Newsletters</h5>
                    </div>
                    <div class="newslatter">
                        <form action="#" method="post">
                            <div class="input-box pos-rltv">
                                <input placeholder="Type Your Email hear" type="text">
                                <a href="#">
                                    <i class="zmdi zmdi-arrow-right"></i>
                                </a>
                            </div>
                        </form>
                        <div class="social-icon socile-icon-style-3 mt-40">
                            <div class="footer-title uppercase">
                                <h5>Social Network</h5>
                            </div>
                            <ul>
                                <li><a href="#"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-linkedin"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-pinterest"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-google"></i></a></li>
                                <li><a href="#"><i class="zmdi zmdi-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer area start-->

<!--footer bottom area start-->
<div class="footer-bottom global-table">
    <div class="global-row">
        <div class="global-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyrigth"> Copyright @
                            <a href="https://devcreative.tech">DevCreative</a> {{ __('All right reserved') }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="payment-support text-right">
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay1.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay2.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay3.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay4.png" alt="" /></a>
                            </li>
                            <li>
                                <a href="#"><img src="themes/shopwise/clothe/images/icons/pay5.png" alt="" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer bottom area end-->



</div>

    {!! Theme::footer() !!}

    </body>
</html>
