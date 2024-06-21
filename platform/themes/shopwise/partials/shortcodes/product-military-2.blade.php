<!--new arrival area start-->
<div class="pm-section new-arrival-area pt-70 p-area-2 ">
    <div class="container  bg-sec pt-30 pb-30">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="heading-title heading-style pos-rltv mb-50  ">
                    <h2 class="uppercase text-left">{{$shortcode->title}}</h2>
                    <p class="text-left">{!!$shortcode->subtitle!!}</p>
                    <div><a style="margin-right:30px" href="{{$shortcode->url1}}" class="btn-def" tabindex="0">{{__('Read More')}}</a>
                        <img width="120" alt="" src="{{ RvMedia::getImageUrl($shortcode->logo, 'full') }}"
                             class="secondary-image"></div>
                </div>
            </div>
            <div class="col-lg-6">


                <a href="{{$shortcode->url1}}"> <img  alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                                                     class="primary-image scale-img">  </a>

            </div>
        </div>
    </div>
</div>


