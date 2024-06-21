@php Theme::set('pageName', $category->name) @endphp

<div class="section">
    <form action="{{ $category->url }}" method="GET">
        @if (request()->has('q'))
            <input type="hidden" name="q" value="{{ BaseHelper::stringify(request()->query('q')) }}">
        @endif

        @if (request()->has('categories'))
            <input type="hidden" name="categories[]" value="{{ Arr::first(request()->query('categories', [])) }}">
        @endif
        <div class="shop-main-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 order-lg-2 order-md-2 order-1">
                        <div class="shop-wraper">
                            <div class="col-lg-12">
                                @include(Theme::getThemeNamespace() . '::views/ecommerce/includes/sort')
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div class="shop-total-product-area clearfix mt-35">
                                    <div class="tab-content">
                                        @if ($products->count() > 0)
                                            <div role="tabpanel" class="tab-pane fade show active" id="grid">
                                                <div class="total-shop-product-grid row">
                                                    @foreach ($products as $product)
                                                        <div class="col-lg-4 col-md-6 item">
                                                            {!! Theme::partial('product-item-grid', compact('product')) !!}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="list">
                                                <div class="total-shop-product-list row">
                                                    @foreach ($products as $product)
                                                        <div class="col-md-12 item">
                                                            {!! Theme::partial('product-item-list', compact('product')) !!}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>


                                            <!--pagination start-->
                                            <div class="col-lg-12">
                                                {!! $products->appends(request()->query())->onEachSide(1)->links() !!}
                                            </div>
                                            <!--pagination end-->
                                        @else
                                            <br>
                                            <div class="col-12 text-center">{{ __('No products!') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 order-lg-1 order-md-1 order-2">
                        <div class="shop-sidebar">
                            @include(Theme::getThemeNamespace() . '::views/ecommerce/includes/filters')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- END SECTION SHOP -->

<style>
    .col-lg-12 .pagination {
        border-bottom: 1px solid #ddd;
        border-top: 1px solid #ddd;
        padding: 10px 0;
        text-align: center;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: .25rem;
        flex-wrap: nowrap;
        justify-content: center;
    }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #1c1e1f;
        border-color: #1c1e1f;
    }

    .col-lg-12 .pagination li {
        padding: 0 10px;
    }
</style>
