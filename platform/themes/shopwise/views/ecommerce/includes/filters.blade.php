@php
    [
        $categories,
        $brands,
        $tags,
        $rand,
        $categoriesRequest,
        $urlCurrent,
        $categoryId,
        $maxFilterPrice,
    ] = EcommerceHelper::dataForFilter($category ?? null);
    $categories = ProductCategoryHelper::getActiveTreeCategories();
@endphp


<!--single aside start-->
<aside class="single-aside search-aside search-box">
    <form action="#">
        <div class="input-box">
            <input class="single-input" placeholder="Search...." type="text">
            <button class="src-btn sb-2"><i class="fa fa-search"></i></button>
        </div>
    </form>
</aside>
<!--single aside end-->

<!--single aside start-->
<aside class="single-aside catagories-aside">
    <div class="heading-title aside-title pos-rltv">
        <h5 class="uppercase">categories</h5>
    </div>
    <div id="cat-treeview" class="product-cat">
        <ul>
            @foreach ($categories as $category)
                <li class="closed @if ($category->activeChildren->count()) expandable @endif">
                    <a href="{{ $category->url }}">{{ $category->name }}</a>
                    @if ($category->activeChildren->count())
                        @include(Theme::getThemeNamespace() . '::views.ecommerce.includes.sub-categories', [
                            'children' => $category->activeChildren,
                        ])
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</aside>
<!--single aside end-->

<!--single aside start-->
@if ($tags->isNotEmpty())
    <aside class="single-aside tag-aside">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">{{ __('Product Tags') }}</h5>
        </div>
        <ul class="tag-filter mt-30">
            @foreach ($tags as $tag)
                <li>
                    <a href="#" class="tag-button" data-tag-id="{{ $tag->id }}">{{ $tag->name }}</a>
                </li>
            @endforeach
        </ul>
    </aside>

    <!-- Add hidden inputs for tags inside the existing form -->
    @foreach ($tags as $tag)
        <input type="hidden" name="tags[]" id="tag-hidden-{{ $tag->id }}" value="{{ $tag->id }}"
            @if (in_array($tag->id, request()->input('tags', []))) checked @endif>
    @endforeach
@endif
<!--single aside end-->

@php
    $maxFilterPrice = 1000;
@endphp


<!--single aside start-->
@if ($maxFilterPrice)
    <aside class="single-aside price-aside fix">
        <div class="heading-title aside-title pos-rltv">
            <h5 class="uppercase">{{ __('Price') }}</h5>
        </div>
        <div class="price_filter">
            <div id="slider-range" data-min="0" data-max="{{ $maxFilterPrice }}"
                data-min-value="{{ BaseHelper::stringify(request()->input('min_price', 0)) }}"
                data-max-value="{{ BaseHelper::stringify(request()->input('max_price', $maxFilterPrice)) }}"></div>
            <div class="price_slider_amount">
                <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                <input type="submit" value="Filter" />
            </div>
        </div>
    </aside>
@endif
<!--single aside end-->


@if(isset($product))
<!--single aside start-->
<aside class="single-aside product-aside">
    <div class="heading-title aside-title pos-rltv">
        <h5 class="uppercase">{{ __("Recent Products") }}</h5>
    </div>
    <div class="recent-prodcut-wraper total-rectnt-slider">

        @php
            $relatedProducts = get_related_products($product);
        @endphp

        <div class="single-rectnt-slider">
            @foreach ($relatedProducts as $product)
                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img product-overlay pos-rltv">
                            <a href="{{ $product->url }}">
                                <img alt="{{ $product->name }}"
                                    src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                    class="primary-image">
                                @if ($product->secondary_image)
                                    <img alt="{{ $product->name }}"
                                        src="{{ RvMedia::getImageUrl($product->secondary_image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                        class="secondary-image">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name">
                            <a href="{{ $product->url }}">{{ $product->name }}</a>
                        </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting">
                                @for ($i = 0; $i < 5; $i++)
                                    <a href="#"><i
                                            class="fa fa-star{{ $i < $product->rating ? '' : '-o' }}"></i></a>
                                @endfor
                            </div>
                            <div class="prodcut-price">
                                <div class="new-price">{{ format_price($product->front_sale_price_with_taxes) }}</div>
                                @if ($product->front_sale_price !== $product->price)
                                    <div class="old-price">
                                        <del>{{ format_price($product->price_with_taxes) }}</del>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->
            @endforeach
        </div>
    </div>

</aside>
<!--single aside end-->
@else
<!--single aside start-->
<aside class="single-aside product-aside">
    <div class="heading-title aside-title pos-rltv">
        <h5 class="uppercase">{{ __("Featured Products") }}</h5>
    </div>
    <div class="recent-prodcut-wraper total-rectnt-slider">

        @php
            $relatedProducts = get_featured_products();
        @endphp

        <div class="single-rectnt-slider">
            @foreach ($relatedProducts as $product)
                <!-- single product start-->
                <div class="single-product recent-single-product">
                    <div class="product-img">
                        <div class="single-prodcut-img product-overlay pos-rltv">
                            <a href="{{ $product->url }}">
                                <img alt="{{ $product->name }}"
                                    src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                    class="primary-image">
                                @if ($product->secondary_image)
                                    <img alt="{{ $product->name }}"
                                        src="{{ RvMedia::getImageUrl($product->secondary_image, 'medium', false, RvMedia::getDefaultImage()) }}"
                                        class="secondary-image">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="product-text">
                        <div class="prodcut-name">
                            <a href="{{ $product->url }}">{{ $product->name }}</a>
                        </div>
                        <div class="prodcut-ratting-price">
                            <div class="prodcut-ratting">
                                @for ($i = 0; $i < 5; $i++)
                                    <a href="#"><i
                                            class="fa fa-star{{ $i < $product->rating ? '' : '-o' }}"></i></a>
                                @endfor
                            </div>
                            <div class="prodcut-price">
                                <div class="new-price">{{ format_price($product->front_sale_price_with_taxes) }}</div>
                                @if ($product->front_sale_price !== $product->price)
                                    <div class="old-price">
                                        <del>{{ format_price($product->price_with_taxes) }}</del>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product end-->
            @endforeach
        </div>
    </div>

</aside>
<!--single aside end-->
@endif


<!--single aside start-->
<aside class="single-aside add-aside">
    <a href="single-product.html"><img src="/storage/images/004-2.png" alt="" style="width: 100px"></a>
</aside>
<!--single aside end-->

{{-- <aside class="widget" style="border: none">
    {!! render_product_swatches_filter([
        'view' => Theme::getThemeNamespace() . '::views.ecommerce.attributes.attributes-filter-renderer',
    ]) !!}
</aside> --}}
