<!-- START SECTION BANNER -->
<!--banner-area-are-start-->
<div class="banner-area mt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 nopadding">
                <div class="banner-area-left ">
                    <div class="banner-single pos-rltv fix mb-30">
                        <div class="banner-img banner-1">
                            <img src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}" alt="">
                        </div>
                        <div class="banner-content">
                            <div class="heading-title big-title heading-style pos-rltv">
                                <h3 class=""><a href="#">{{$shortcode->title}}</a></h3>
                            </div>
                            <p>{{$shortcode->subtitle}} </p> <a href="{{$shortcode->url1}}" class="btn-def" tabindex="0">{{__('Read More')}}</a>
                        </div>
                    </div>
                    <div class="banner-single pos-rltv fix">
                        <div class="banner-img  banner-2 left-type">
                            <img src="{{ RvMedia::getImageUrl($shortcode->image3, 'full') }}" alt="">
                        </div>
                        <div class="banner-content left-type">
                            <div class="heading-title big-title heading-style pos-rltv">
                                <h3 class=""><a href="{{$shortcode->url2}}">{{$shortcode->title2}}</a></h3>
                            </div>
                            <p>{{$shortcode->subtitle2}} </p> <a href="{{$shortcode->url2}}" class="btn-def" tabindex="0">{{__('Read More')}}</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-md-none d-block d-lg-block nopadding bg-sec">
                <div class="banner-img-2  banner-3 pos-rltv"> <img src="{{ RvMedia::getImageUrl($shortcode->image2, 'full') }}" alt="">
{{--                    <div class="banner-timer shadow-box-2">--}}
{{--                        <div class="timer-wraper text-center">--}}
{{--                            <div class="timer timr-2">--}}
{{--                                <div data-countdown="2015/02/01"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="banner-content-2 mt-25">
                    <div class="content">
                    <div class="heading-title big-title">
                        <h3 class=""><a href="{{$shortcode->url3}}">{{$shortcode->title}}</a></h3>
                    </div>
                    <p>
                        {{$shortcode->subtitle}} </p>
                    <a href="{{$shortcode->url3}}" class="btn-def" tabindex="0">{{__('Read More')}}</a>
                </div></div>
            </div>
        </div>
    </div>
</div>
<!--banner-area-are-end-->
{{--{{ RvMedia::getImageUrl($image1, 'small') }}--}}
{{--{{ url((string)$url1) }}--}}

