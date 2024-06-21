<!--new arrival area start-->
<div class="pm-section new-arrival-area pt-20 p-area-2 ">
    <div class="container  bg-sec pt-30 pb-30">
        <div class="row">
            <div class="col-lg-6 text-center">
                <div class="heading-title heading-style pos-rltv mb-50  ">
                    <h2 class="uppercase text-left">{{$shortcode->title}}</h2>
                    <p class="text-left">{{$shortcode->subtitle}}</p>
                    <a href="{{$shortcode->url1}}" class="btn-def" tabindex="0">{{__('Read More')}}</a>
                    <br><br>
                    <div>
                    <img width="120" alt="" src="{{ RvMedia::getImageUrl($shortcode->logo, 'full') }}"
                         class="secondary-image"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">

                    <div class="single-product col-lg-6">
                        <div class="product-img">
                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                                                                     class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                                                                                                 class="secondary-image"> </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-product col-lg-6">
                        <div class="product-img">
                            <div class="single-prodcut-img  product-overlay pos-rltv">
                                <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image2, 'full') }}"
                                                                     class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image2, 'full') }}"
                                                                                                 class="secondary-image"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


