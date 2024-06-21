<!--breadcumb area start -->
<div class="breadcumb-area breadcumb-3 overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>{{ __("About Details") }}</h5>
        </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="/">{{ __("Home") }}</a></li>
            <li class="active">{{ __("About Us") }}</li>
        </ol>
    </div>
</div>
<!--breadcumb area end -->

<!-- about-us-area start-->
<div class="about-us-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h5 class="uppercase">{{ __("About Us") }}</h5>
                </div>
            </div>
            <div class="about-us-wrap row">
                <div class="col-lg-6">
                    <div class="about-img"><img src="{{ RvMedia::getImageUrl($shortcode->image, 'full') }}" alt="About image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="about-des">
                        <p>{{ $shortcode->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-us-area end-->
