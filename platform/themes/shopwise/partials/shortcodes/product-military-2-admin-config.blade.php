
<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input type="text" name="title" value="{{ Arr::get($attributes, 'title') }}" class="form-control" placeholder="{{ __('Title') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <textarea name="subtitle" class="form-control" placeholder="{{ __('Subtitle') }}" rows="3">{{ Arr::get($attributes, 'subtitle') }}</textarea>
</div>
<div class="mb-3">
    <label class="form-label">Image 1 (370x370)</label>
    {!! Form::mediaImage('image1', Arr::get($attributes, 'image1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">Image 3 (logo)</label>
    {!! Form::mediaImage('logo', Arr::get($attributes, 'logo')) !!}
</div>

<div class="mb-3">
    <label class="form-label">URL 1</label>
    <input type="text" name="url1" value="{{ Arr::get($attributes, 'url1') }}" class="form-control" placeholder="URL 1">
</div>








