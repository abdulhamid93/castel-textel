<!--new arrival area start-->
<div class="new-arrival-area products-home pt-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

                <div class="heading-title heading-style pos-rltv mb-50 text-center">
                    <h2 class="uppercase ">{{$shortcode->title}}</h2>
                    <p class="text-left">{!!  $shortcode->subtitle!!}</p>
                </div>

            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                    <?php
                    $products = get_featured_products();
                    ?>
                    @foreach($products as $product)
                        <div class="col-lg-3">
                            <!-- single product start-->
                            <div class="single-product">
                                <div class="product-img">
                                    <div class="product-label">
                                        {{--                                        <div class="new">New</div>--}}
                                    </div>
                                    <div class="single-prodcut-img  product-overlay pos-rltv">
                                        <a href="{{ $product->url }}"> <img alt=""
                                                                            src="{{ RvMedia::getImageUrl($product->image, 'full', false, RvMedia::getDefaultImage()) }}"
                                                                            class="primary-image"> <img alt=""
                                                                                                        src="{{ RvMedia::getImageUrl($product->image, 'full', false, RvMedia::getDefaultImage()) }}"
                                                                                                        class="secondary-image">
                                        </a>
                                    </div>
                                    <div class="product-icon socile-icon-tooltip text-center">
                                        <ul>
                                            <li><a href="{{ $product->url }}">{{ $product->name }}
                                                <br><span
                                                        class="price">{{ format_price($product->front_sale_price_with_taxes) }}</span>
                                                @if ($product->front_sale_price !== $product->price)
                                                    <del>{{ format_price($product->price_with_taxes) }}</del>
                                                    <div class="on_sale">
                                                        <span>{{ __(':percentage Off', ['percentage' => get_sale_percentage($product->price, $product->front_sale_price)]) }}</span>
                                                    </div>
                                                @endif
                                                </a>
                                            </li>
                                            {{--                                            <li><a href="#" data-tooltip="Add To Cart" class="add-cart"--}}
                                            {{--                                                   data-placement="left"><i class="fa fa-cart-plus"></i></a></li>--}}
                                            {{--                                            <li><a href="#" data-tooltip="Wishlist" class="w-list"><i--}}
                                            {{--                                                        class="fa fa-heart-o"></i></a></li>--}}
                                            {{--                                            <li><a href="#" data-tooltip="Compare" class="cpare"><i--}}
                                            {{--                                                        class="fa fa-refresh"></i></a></li>--}}
                                            {{--                                            <li><a href="#" data-tooltip="Quick View" class="q-view"--}}
                                            {{--                                                   data-toggle="modal" data-target=".modal"><i--}}
                                            {{--                                                        class="fa fa-eye"></i></a></li>--}}
                                        </ul>
                                    </div>
                                </div>
                                {{--<div class="product-text">--}}
                                {{--<div class="prodcut-name"><a href="{{ $product->url }}">{{ $product->name }}--}}
                                {{--<br>--}}

                                {{--<div class="prodcut-ratting-price">--}}
                                {{--<div class="prodcut-price">--}}
                                {{--<div class="new-price">--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                            </div>
                            <!-- single product end-->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
<!--new arrival area end-->
