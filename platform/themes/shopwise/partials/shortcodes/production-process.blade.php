<!--new arrival area start-->
<!--best-product-area-start-->
<div class="best-product-area production-process mt-70">
    <div class="container">
        <div class="best-product  ptb-70"
        style=
        "background: rgba(0, 0, 0, 0) url({{ RvMedia::getImageUrl($shortcode->image2, 'full') }}) no-repeat scroll 0 0;
            background-size: cover;">
            <div class="row">
                <div class="col-lg-6 best-heading text-center">
                    <h3>{{$shortcode->title}}</h3>
                    <a class="view-all" href="/">{{ __('NOW')}}</a>
                    <img width="140" alt="" src="{{ RvMedia::getImageUrl($shortcode->image1, 'full') }}"
                         class="primary-image"/>
                    <div class="best-text">
{{--                        <p>{!! $shortcode->subtitle !!}</p>--}}

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="best-product-area production-process yellow ">
    <div class="container">
        <div class="best-product2 ptb-30 col-12">
            <h3>{{$shortcode->subtitle}}</h3>
            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-2">
                        <div class="s-container">
                            <img width="100%" alt="" src="{{ RvMedia::getImageUrl($shortcode->{'service_image' . $i}, 'full') }}" class="primary-image"/>
                            <p>{!!  $shortcode->{'service' . $i} !!}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</div>
<!--new arrival area end-->

