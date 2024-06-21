<!--new arrival area start-->
<div class="new-arrival-area pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h2 class="uppercase ">{{$shortcode->title}}</h2>
                    <p class="text-left">{{$shortcode->subtitle}}</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">

                <div class=" row">

                        <!-- single product start-->
                        <div class="single-product col-lg-3">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                                                                        class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                                                                                                    class="secondary-image"> </a>
                                </div>
                            </div>
                        </div>
                        <!-- single product end-->
                        <!-- single product start-->
                        <div class="single-product col-lg-3">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image2, 'full') }}"
                                                                         class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image2, 'full') }}"
                                                                                                     class="secondary-image"> </a>
                                </div>
                            </div>
                        </div>
                        <!-- single product end-->
                        <!-- single product start-->
                        <div class="single-product col-lg-3">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image3, 'full') }}"
                                                                         class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image3, 'full') }}"
                                                                                                     class="secondary-image"> </a>
                                </div>
                            </div>
                        </div>
                        <!-- single product end-->
                        <!-- single product start-->
                        <div class="single-product col-lg-3">
                            <div class="product-img">
                                <div class="single-prodcut-img  product-overlay pos-rltv">
                                    <a href="{{$shortcode->url1}}"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image4, 'full') }}"
                                                                         class="primary-image"> <img alt="" src="{{ RvMedia::getImageUrl($shortcode->image4, 'full') }}"
                                                                                                     class="secondary-image"> </a>
                                </div>
                            </div>
                        </div>
                        <!-- single product end-->

                </div>
            </div>
        </div>
    </div>
</div>
<!--new arrival area end-->

