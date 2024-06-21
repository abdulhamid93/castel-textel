<div class="shop-area-top">
    <div class="row">
        <div class="col-xl-6 col-lg-9 col-md-9">
            <div class="sort product-show">
                <label>{{ __("View") }}</label>
                <select id="input-amount" class="submit-form-on-change" name="num">
                    @foreach (EcommerceHelper::getShowParams() as $key => $name)
                        <option value="{{ $key }}" @selected(request()->input('num') == $key)>{{ $name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="sort product-type">
                <label>{{ __("Sort By") }}</label>
                <select id="input-sort" name="sort-by" class="submit-form-on-change">
                    @foreach (EcommerceHelper::getSortParams() as $key => $name)
                        <option value="{{ $key }}" @if (request()->input('sort-by') == $key) selected @endif>
                            {{ $name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3">
            <div class="list-grid-view text-center">
                <ul class="nav" role="tablist">
                    <li role="presentation">
                        <a href="#grid" aria-controls="grid" role="tab" data-toggle="tab"><i class="zmdi zmdi-widgets"></i></a>
                    </li>
                    <li role="presentation">
                        <a class="active" href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
