
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
    <label class="form-label">Image 2 (370x370)</label>
    {!! Form::mediaImage('image2', Arr::get($attributes, 'image2')) !!}
</div>
<div class="mb-3">
    <label class="form-label">Image 3 (370x370)</label>
    {!! Form::mediaImage('image3', Arr::get($attributes, 'image3')) !!}
</div>
<div class="mb-3">
    <label class="form-label">Image 4 (370x370)</label>
    {!! Form::mediaImage('image4', Arr::get($attributes, 'image4')) !!}
</div>
<div class="mb-3">
    <label class="form-label">URL 1</label>
    <input type="text" name="url1" value="{{ Arr::get($attributes, 'url1') }}" class="form-control" placeholder="URL 1">
</div>








