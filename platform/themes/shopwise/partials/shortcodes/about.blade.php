<!--breadcumb area start -->
@if( $shortcode->header)
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
@endif
<!-- about-us-area end-->
<section class="about section" id="about">
    <div class="about__container container grid">
        <h2 class="section__title-1">
            <span>{{ $shortcode->title }}</span>
        </h2>

        <div class="about__perfil">
            <div class="about__image">
                <img src="{{ RvMedia::getImageUrl($shortcode->image, 'full') }}" alt="image" class="about__img">

                <div class="about__shadow"></div>

                <div class="geometric-box"></div>

                <div class="about__box"></div>
            </div>
        </div>

        <div class="about__info">
            <p class="about__description">
                {{ $shortcode->text1 }}
            </p>

            <ul class="about__list">
                <li class="about__item">
                    {{ $shortcode->text2 }}
                </li>
            </ul>

            <div class="about__buttons">
                <a href="/contact-us" class="btn-def" tabindex="0">
                    {{__('Contact Us')}}</a>


            </div>
        </div>
    </div>
</section>