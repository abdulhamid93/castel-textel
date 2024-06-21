<div class="breadcumb-area breadcumb-3 overlay pos-rltv">
    <div class="bread-main">
        <div class="bred-hading text-center">
            <h5>{{ __("Contact Details") }}</h5> </div>
        <ol class="breadcrumb">
            <li class="home"><a title="Go to Home Page" href="/">{{ __("Home") }}</a></li>
            <li class="active">{{ __("Contact Us") }}</li>
        </ol>
    </div>
</div>

<!--delivery service start-->
<div class="col-lg-12 text-center">
    <div class="heading-title heading-style pos-rltv mtb-50 text-center">
        <h5 class="uppercase">{{ __("Conatct Us") }}</h5>
    </div>
</div>
<div class="delivery-service-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-service shadow-box text-center">
                    <img src="{{ RvMedia::getImageUrl($shortcode->image1) }}" alt="{{ $shortcode->reason1 }}">
                    <h5>{{ $shortcode->reason1 }}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-service shadow-box text-center">
                    <img src="{{ RvMedia::getImageUrl($shortcode->image2) }}" alt="{{ $shortcode->reason2 }}">
                    <h5>{{ $shortcode->reason1 }}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-service shadow-box text-center">
                    <img src="{{ RvMedia::getImageUrl($shortcode->image3) }}" alt="{{ $shortcode->reason3 }}">
                    <h5>{{ $shortcode->reason1 }}</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-service shadow-box text-center">
                    <img src="{{ RvMedia::getImageUrl($shortcode->image4) }}" alt="{{ $shortcode->reason4 }}">
                    <h5>{{ $shortcode->reason1 }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
