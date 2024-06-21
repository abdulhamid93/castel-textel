<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Reason1') }}</label>
    <input type="text" name="reason1" value="{{ Arr::get($attributes, 'reason1') }}" class="form-control" placeholder="{{ __('Reason1') }}">
</div>
<div class="mb-3">
    <label class="form-label">Image</label>
    {!! Form::mediaImage('image1', Arr::get($attributes, 'image1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Reason2') }}</label>
    <input type="text" name="reason2" value="{{ Arr::get($attributes, 'reason2') }}" class="form-control" placeholder="{{ __('Reason2') }}">
</div>
<div class="mb-3">
    <label class="form-label">Image</label>
    {!! Form::mediaImage('image2', Arr::get($attributes, 'image2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Reason3') }}</label>
    <input type="text" name="reason3" value="{{ Arr::get($attributes, 'reason3') }}" class="form-control" placeholder="{{ __('Reason3') }}">
</div>
<div class="mb-3">
    <label class="form-label">Image</label>
    {!! Form::mediaImage('image3', Arr::get($attributes, 'image3')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Reason4') }}</label>
    <input type="text" name="reason4" value="{{ Arr::get($attributes, 'reason4') }}" class="form-control" placeholder="{{ __('Reason4') }}">
</div>
<div class="mb-3">
    <label class="form-label">Image</label>
    {!! Form::mediaImage('image4', Arr::get($attributes, 'image4')) !!}
</div>
