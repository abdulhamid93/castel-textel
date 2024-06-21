@php
    Theme::set('pageName', $product->name);
    // Theme::asset()->usePath()->add('lightGallery-css', 'plugins/lightGallery/css/lightgallery.min.css');
    // Theme::asset()->container('footer')->usePath()
    //     ->add('lightGallery-js', 'plugins/lightGallery/js/lightgallery.min.js', ['jquery']);
@endphp

{{-- <div class="wrapper sigle-product"> --}}

    <!--breadcumb area start -->
    <div class="breadcumb-area overlay pos-rltv">
        <div class="bread-main">
            <div class="bred-hading text-center">
                <h2>{{ $product->name }}</h2>
            </div>
            <ol class="breadcrumb">
                <li class="home"><a title="Go to Home Page" href="/">{{ __("Home") }}</a></li>
                <li class="active">{{ $product->name }}</li>
            </ol>
        </div>
    </div>
    <!--breadcumb area end -->

    <!--single-protfolio-area are start-->
    <div class="single-protfolio-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul class="nav">
                                        @foreach ($productImages as $index => $img)
                                            <li>
                                                <a class="{{ $index == 0 ? 'active' : '' }}" href="#view{{ $index + 1 }}" class="shadow-box"
                                                    aria-controls="view{{ $index + 1 }}" data-toggle="tab">
                                                    <img src="{{ RvMedia::getImageUrl($img, 'thumb') }}" alt="" />
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                            <div class="social-tag">
                                <a href="#"><i class="zmdi zmdi-share"></i></a>
                            </div>
                            @foreach ($productImages as $index => $img)
                                <div role="tabpanel" class="tab-pane {{ $index == 0 ? 'active' : '' }}" id="view{{ $index + 1 }}">
                                    <div class="product-img">
                                        <a class="fancybox" data-fancybox-group="group"
                                            href="{{ RvMedia::getImageUrl($img, 'medium') }}">
                                            <img src="{{ RvMedia::getImageUrl($img , 'medium') }}" alt="{{ $product->name }}" />
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="single-product-description">
                        {{-- <div class="sp-top-des">
                            <h3>{{ $product->name }} <span>({{ $product->brand }})</span></h3>
                            <div class="prodcut-ratting-price">
                                <div class="prodcut-ratting">
                                    @for ($i = 0; $i < 5; $i++)
                                        <a href="#" tabindex="0"><i class="fa fa-star{{ $i < $product->rating ? '' : '-o' }}"></i></a>
                                    @endfor
                                </div>
                                <div class="prodcut-price">
                                    <div class="new-price"> ${{ $product->new_price }} </div>
                                    @if ($product->old_price)
                                        <div class="old-price"> <del>${{ $product->old_price }}</del> </div>
                                    @endif
                                </div>
                            </div>
                        </div> --}}

                        <div class="sp-des">
                            <p>{{ $product->description }}</p>
                        </div>
                        <div class="sp-bottom-des">
                            {{-- <div class="single-product-option">
                                <div class="sort product-type">
                                    <label>Color: </label>
                                    <select id="input-sort-color">
                                        @foreach ($product->colors as $color)
                                            <option value="{{ $color }}">{{ ucfirst($color) }}</option>
                                        @endforeach
                                        <option value="#" selected>Choose Your Color</option>
                                    </select>
                                </div>
                                <div class="sort product-type">
                                    <label>Size: </label>
                                    <select id="input-sort-size">
                                        @foreach ($product->sizes as $size)
                                            <option value="{{ $size }}">{{ strtoupper($size) }}</option>
                                        @endforeach
                                        <option value="#" selected>Choose Your Size</option>
                                    </select>
                                </div>
                            </div> --}}
                            {{-- <div class="quantity-area">
                                <label>Qty :</label>
                                <div class="cart-quantity">
                                    <form action="#" method="POST" id="myform">
                                        <div class="product-qty">
                                            <div class="cart-quantity">
                                                <div class="cart-plus-minus">
                                                    <div class="dec qtybutton">-</div>
                                                    <input type="text" value="01" name="qtybutton" class="cart-plus-minus-box">
                                                    <div class="inc qtybutton">+</div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            {{-- <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><a href="#" data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></li>
                                    <li><a href="#" data-tooltip="Wishlist" class="w-list" tabindex="0"><i class="fa fa-heart-o"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare" class="cpare" tabindex="0"><i class="fa fa-refresh"></i></a></li>
                                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-target=".modal" data-product="{{ htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') }}" tabindex="0"><i class="fa fa-eye"></i></a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--single-protfolio-area are start-->

    <!--descripton-area start -->
    <div class="descripton-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-area tab-cars-style">
                        <div class="title-tab-product-category row">
                            <div class="col-lg-12 text-center">
                                <ul class="nav mb-40 heading-style-2" role="tablist">
                                    <li role="presentation"><a href="#newarrival" aria-controls="newarrival"
                                            role="tab" data-toggle="tab">Description</a></li>
                                    <li role="presentation"><a class="active" href="#bestsellr"
                                            aria-controls="bestsellr" role="tab" data-toggle="tab">Review</a></li>
                                    <li role="presentation"><a href="#specialoffer" aria-controls="specialoffer"
                                            role="tab" data-toggle="tab">Tags</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12">
                            <div class="content-tab-product-category">
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fix fade in" id="newarrival">
                                        <div class="review-wraper">
                                            {!! apply_filters('ecommerce_before_product_description', null, $product) !!}
                                            <p>{!! BaseHelper::clean($product->description) !!}</p>
                                            {!! apply_filters('ecommerce_after_product_description', null, $product) !!}
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fix fade show active" id="bestsellr">
                                        <div class="review-wraper">

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fix fade in" id="specialoffer">
                                        @if (!$product->tags->isEmpty())
                                            <ul class="tag-filter">
                                                @foreach ($product->tags as $tag)
                                                    <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--descripton-area end-->

    <!--new arrival area start-->
    <div class="new-arrival-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="heading-title heading-style pos-rltv mb-50 text-center">
                        <h5 class="uppercase">{{ __('Related Products') }}</h5>
                        @php
                            $relatedProducts = get_related_products($product);
                        @endphp
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="total-new-arrival row">
                        @if (!empty($relatedProducts))
                            @foreach ($relatedProducts as $related)
                                <div class="col-lg-3">
                                    <!-- single product start-->
                                    <div class="single-product">
                                        <div class="product-img">
                                            <div class="product-label">
                                                <div class="new">New</div>
                                            </div>
                                            <div class="single-prodcut-img product-overlay pos-rltv">
                                                <a href="{{ $related->url }}">
                                                    <img alt="{{ $related->name }}" src="{{ RvMedia::getImageUrl($related->image, 'medium', false, RvMedia::getDefaultImage()) }}" class="primary-image">
                                                    @if ($related->secondary_image)
                                                        <img alt="{{ $related->name }}" src="{{ RvMedia::getImageUrl($related->secondary_image, 'medium', false, RvMedia::getDefaultImage()) }}" class="secondary-image">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product-icon socile-icon-tooltip text-center">
                                                <ul>
                                                    {{-- <li><a href="#" data-tooltip="Add To Cart" class="add-cart" data-placement="left"><i class="fa fa-cart-plus"></i></a></li> --}}
                                                    {{-- <li><a href="#" data-tooltip="Wishlist" class="w-list"><i class="fa fa-heart-o"></i></a></li> --}}
                                                    {{-- <li><a href="#" data-tooltip="Compare" class="cpare"><i class="fa fa-refresh"></i></a></li> --}}
                                                    {{-- <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-product="{{ htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') }}" data-target=".modal"><i class="fa fa-eye"></i></a></li> --}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-text">
                                            <div class="prodcut-name">
                                                <a href="{{ $related->url }}">{{ $related->name }}</a>
                                            </div>
                                            <div class="prodcut-ratting-price">
                                                <div class="prodcut-price">
                                                    <div class="new-price">{{ format_price($related->front_sale_price_with_taxes) }}</div>
                                                    @if ($related->front_sale_price !== $related->price)
                                                        <div class="old-price"><del>{{ format_price($related->price_with_taxes) }}</del></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single product end-->
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--new arrival area end-->
