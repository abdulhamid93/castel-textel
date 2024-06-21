<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <!--slider area start-->
    <div class="slider-area pos-rltv carosule-pagi cp-line">


            <div class="active-slider">
                @foreach($sliders->loadMissing('metadata') as $slider)
                    @php
                    $tabletImage = $slider->getMetaData('tablet_image', true) ?: $slider->image;
                    $mobileImage = $slider->getMetaData('mobile_image', true) ?: $tabletImage;
                    @endphp
            <div class="single-slider pos-rltv" style="background: url({{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }});background-size: cover;background-position: center">
                <div class="slider-img"><img style="opacity: 0;" src="{{ RvMedia::getImageUrl($slider->image, null, false, RvMedia::getDefaultImage()) }}" alt=""></div>
                <div class="slider-content pos-abs">

                    <h1 class="uppercase pos-rltv underline">{{ $slider->title }}</h1>
                    <h4>{{ $slider->sub_title }}</h4>
                    <p>{{ $slider->description }}</p>
                    <a href="#" class="btn-def btn-white">Shop Now</a>
                </div>
            </div>
                @endforeach
            {{--<div class="single-slider pos-rltv">--}}
                {{--<div class="slider-img"><img src="themes/shopwise/clothe/images/slider/slider01.jpg" alt=""></div>--}}
                {{--<div class="slider-content pos-abs">--}}
                    {{--<h4>Best Collection</h4>--}}
                    {{--<h1 class="uppercase pos-rltv underline">exclusive Fashion 2019</h1>--}}
                    {{--<a href="#" class="btn-def btn-white">Shop Now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="single-slider pos-rltv">--}}
                {{--<div class="slider-img"><img src="themes/shopwise/clothe/images/slider/slider02.jpg" alt=""></div>--}}
                {{--<div class="slider-content pos-abs">--}}
                    {{--<h4>Best Collection</h4>--}}
                    {{--<h1 class="uppercase pos-rltv underline">exclusive Fashion 2019</h1>--}}
                    {{--<a href="#" class="btn-def btn-white">Shop Now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
    <!--slider area start-->
</div>
