@php
    SeoHelper::setTitle(__('404 - Not found'));
    Theme::fireEventGlobalAssets();
    Theme::breadcrumb()->add(__('Home'), route('public.index'))->add(SeoHelper::getTitle());
@endphp

{!! Theme::partial('header') !!}
{{-- <div class="breadcrumb_section bg_gray page-title-mini">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="page-title">
                    <h1>{{ Theme::get('pageName') }}</h1>
                </div>
            </div>
            <div class="col-md-6">
                {!! Theme::partial('breadcrumbs') !!}
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="error_wrap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 order-lg-first">
                    <div class="text-center">
                        <div class="error_txt">404</div>
                        <h5 class="mb-2 mb-sm-3">{{ __('Oops! The page you requested was not found!') }}</h5>
                        <p>{{ __('The page you are looking for was moved, removed, renamed or might never existed.') }}</p>
                        @if (is_plugin_active('ecommerce'))
                            <div class="search_form pb-3 pb-md-4">
                                <form action="{{ route('public.products') }}" method="GET">
                                    <input name="q" type="text" placeholder="{{ __('Search') }}" class="form-control">
                                    <button type="submit" class="btn icon_search"><i class="ion-ios-search-strong"></i></button>
                                </form>
                            </div>
                        @endif
                        <a href="{{ route('public.single') }}" class="btn btn-fill-out">{{ __('Back To Home') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--breadcumb area start -->
<div class="breadcumb-area breadcumb-3 overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>{{ __("Error Details") }}</h5> </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="">{{ __("Home") }}</a></li>
            <li class="active">404</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!--404 area start-->
<div class="area-404 ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-404 text-center">
                    <img src="https://thecastletextile.com/storage/images/404-castel.png" alt="404 Page image">
                    <div class="text-404">
                        <h1>{{ __("Oops ! that page can't be found.") }}</h1>
                        <p>{{ __("Can't find what you need? Take a moment and do a search below!") }}</p>
                    </div>
                    <div class="search-box serch-404">
                        <form action="{{ route('public.products') }}" method="GET">
                            <div class="input-box">
                                <input name="q" type="text" placeholder="{{ __('Search') }}" class="single-input">
                                <button type="submit" class="btn icon_search src-btn src-btn-blog"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--404 area end-->

{!! Theme::partial('footer') !!}
