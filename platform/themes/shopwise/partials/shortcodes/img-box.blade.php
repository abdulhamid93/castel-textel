<!--new arrival area start-->
<div class="new-arrival-area products-home pt-70 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h2 class="uppercase ">{{$shortcode->title}}</h2>
                    <p class="text-left f-18">{!!  $shortcode->subtitle!!}</p>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img width="100%" alt=""
                     src="{{ RvMedia::getImageUrl($shortcode->img, 'full') }}" class="primary-image"/>

            </div>
        </div>
    </div>
</div>
<!--new arrival area end-->
