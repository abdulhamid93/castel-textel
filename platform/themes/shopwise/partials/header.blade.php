<!DOCTYPE html>
<html {!! Theme::htmlAttributes() !!}>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! Theme::typography()->renderCssVariables() !!}

    <style>
        :root {
            --color-2: '#bd9d2f';
            --color-3: '#363824';
            --color-4: '#6d663c';
            --primary-color: {{ theme_option('primary_color', '#FF324D') }};
            --color-2nd: {{ theme_option('secondary_color', '#1D2224') }};
            --secondary-color: {{ theme_option('secondary_color', '#1D2224') }};
        }
    </style>


    @php
        Theme::asset()->remove('language-css');
        Theme::asset()->remove('content-styles.css');
        Theme::asset()->container('footer')->remove('language-public-js');
        Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-css');
        Theme::asset()->container('footer')->remove('simple-slider-owl-carousel-js');
        Theme::asset()->container('footer')->remove('simple-slider-css');
        Theme::asset()->container('footer')->remove('simple-slider-js');
    @endphp


    {!! Theme::header() !!}
</head>

<body>
    {!! apply_filters(THEME_FRONT_BODY, null) !!}

    <div id="alert-container"></div>

    <!-- Body main wrapper start -->
    <div class="wrapper" {!! Theme::bodyAttributes() !!}>

        <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="login-register-area">
                                <ul>
                                    <li><a href="/contact"><i class="fa fa-envelope"></i>{{ __("Contact Us") }}</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> {{ theme_option('hotline') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-md-block"></div>
                        <div class="col-md-4 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    @php
                                        $socialLinks = json_decode(theme_option('social_links'), true);
                                    @endphp

                                    <ul>
                                        <li><a href="{{ $socialLinks[0][2]['value'] }}" title="facebook"><i
                                                    class="fa fa-facebook"></i></a> </li>
                                        <li><a href="{{ $socialLinks[2][2]['value'] }}" title="twitter"><i
                                                    class="fa fa-close"></i></a> </li>
                                        <li> <a href="{{ $socialLinks[1][2]['value'] }}" title="dribble"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li> <a href="{{ $socialLinks[3][2]['value'] }}" title="dribble"><i
                                                    class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-10"><a href="/">
                                        <img width="140" src="{{ RvMedia::getImageUrl(theme_option('logo')) }}"
                                            alt="main logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    {!! Menu::renderMenuLocation('main-menu', [
                                        'view' => 'menu',
                                        'options' => ['class' => 'main-menu'],
                                    ]) !!}
                                </nav>
                            </div>
                            <div class="col-lg-3 d-none d-lg-block">
                                <div class="search-box global-table">
                                    <div class="global-row">
                                        <div class="global-cell">
                                            <form action="{{ route('public.products') }}" method="GET">
                                                <div class="input-box">
                                                    <input name="q" class="single-input" placeholder="{{ __("Search anything") }}"
                                                        type="text">
                                                    <button class="src-btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                {!! Menu::renderMenuLocation('main-menu', [
                                                    'view' => 'menu',
                                                    'options' => ['class' => 'main-menu'],
                                                ]) !!}
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->
