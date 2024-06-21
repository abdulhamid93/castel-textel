@php Theme::set('pageName', __('Products')) @endphp

<div class="section">
    <form action="{{ URL::current() }}" method="GET">
        @if (request()->has('q'))
            <input type="hidden" name="q" value="{{ BaseHelper::stringify(request()->query('q')) }}">
        @endif

        @if (request()->has('categories'))
            <input type="hidden" name="categories[]" value="{{ Arr::first(request()->query('categories', [])) }}">
        @endif

        <div class="shop-main-area ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row align-items-center mb-4 pb-1">
                            <div class="col-12">
                                <div class="product_header">
                                    @include(Theme::getThemeNamespace() . '::views/ecommerce/includes/sort')
                                </div>
                            </div>
                        </div>
                        <div class="row shop_container grid">
                            @if ($products->count() > 0)
                                @foreach($products as $product)
                                    <div class="col-md-4 col-6">
                                        {!! Theme::partial('product-item-grid', compact('product')) !!}
                                    </div>
                                @endforeach

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
                    <div class="col-lg-3 order-lg-first mt-4 pt-2 mt-lg-0 pt-lg-0">
                        <div class="sidebar">
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
    .col-lg-12 .pagination{
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
