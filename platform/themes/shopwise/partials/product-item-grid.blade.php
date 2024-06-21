@if ($product)
    <div class="single-product">
        <div class="product-img">
            <div class="single-prodcut-img product-overlay pos-rltv">
                <a href="{{ $product->url }}">
                    <img alt="{{ $product->name }}" src="{{ RvMedia::getImageUrl($product->image, 'medium', false, RvMedia::getDefaultImage()) }}" class="primary-image">
                    @if ($product->secondary_image)
                        <img alt="{{ $product->name }}" src="{{ RvMedia::getImageUrl($product->secondary_image, 'medium', false, RvMedia::getDefaultImage()) }}" class="secondary-image">
                    @endif
                </a>
            </div>
            <div class="product-icon socile-icon-tooltip text-center">
                <ul>
                    <li><a href="{{ route('public.ajax.quick-view', $product->id) }}" data-tooltip="Quick View" class="q-view popup-ajax" rel="nofollow" data-toggle="modal" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                    <li><a href="#" data-tooltip="Quick View" class="q-view" data-toggle="modal" data-product="{{ htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') }}" data-target=".modal"><i class="fa fa-eye"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="product-text">
            <div class="prodcut-name">
                <a href="{{ $product->url }}">{{ $product->name }}</a>
            </div>
            <div class="prodcut-ratting-price">
                <div class="prodcut-price">
                    <div class="new-price">{{ format_price($product->front_sale_price_with_taxes) }}</div>
                    @if ($product->front_sale_price !== $product->price)
                        <div class="old-price"><del>{{ format_price($product->price_with_taxes) }}</del></div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif
