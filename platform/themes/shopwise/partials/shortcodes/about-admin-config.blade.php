<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">Image</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('text 1') }}</label>
    <textarea name="text1" class="form-control" placeholder="{{ __('text1') }}" rows="3">{{ Arr::get($attributes, 'text1') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('text 2') }}</label>
    <textarea name="text2" class="form-control" placeholder="{{ __('text2') }}" rows="3">{{ Arr::get($attributes, 'text2') }}</textarea>
</div>
<hr>
<input type="checkbox" name="header">Enable Header