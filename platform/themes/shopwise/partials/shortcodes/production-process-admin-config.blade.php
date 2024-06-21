
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

<hr>
<div class="mb-3">
    <label class="form-label">Background (1920 x 900)</label>
    {!! Form::mediaImage('image2', Arr::get($attributes, 'image2')) !!}
</div>
<hr>
<div class="mb-3">
    <label class="form-label">{{ __('FABRIC 2') }}</label>
    <textarea name="fabric2" class="form-control" placeholder="{{ __('fabric2') }}" rows="3">{{ Arr::get($attributes, 'fabric2') }}</textarea>
</div>
<hr>
<div class="mb-3">
    <label class="form-label">Service Img 1 </label>
    {!! Form::mediaImage('service_image1', Arr::get($attributes, 'service_image1')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 1') }}</label>
    <textarea name="service1" class="form-control" rows="3">{{ Arr::get($attributes, 'service1') }}</textarea>
</div>
<hr>
<div class="mb-3">
    <label class="form-label">Service Img 2 </label>
    {!! Form::mediaImage('service_image2', Arr::get($attributes, 'service_image2')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 2') }}</label>
    <textarea name="service2" class="form-control" rows="3">{{ Arr::get($attributes, 'service2') }}</textarea>
</div>
<hr>
<div class="mb-3">
    <label class="form-label">Service Img 3 </label>
    {!! Form::mediaImage('service_image3', Arr::get($attributes, 'service_image3')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 3') }}</label>
    <textarea name="service3" class="form-control" rows="3">{{ Arr::get($attributes, 'service3') }}</textarea>
</div>
<hr>

<div class="mb-3">
    <label class="form-label">Service Img 4 </label>
    {!! Form::mediaImage('service_image4', Arr::get($attributes, 'service_image4')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 4') }}</label>
    <textarea name="service4" class="form-control" rows="3">{{ Arr::get($attributes, 'service4') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Service Img 5 </label>
    {!! Form::mediaImage('service_image5', Arr::get($attributes, 'service_image5')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 5') }}</label>
    <textarea name="service5" class="form-control" rows="3">{{ Arr::get($attributes, 'service5') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Service Img 6 </label>
    {!! Form::mediaImage('service_image6', Arr::get($attributes, 'service_image6')) !!}
</div>
<div class="mb-3">
    <label class="form-label">{{ __('service 6') }}</label>
    <textarea name="service6" class="form-control" rows="3">{{ Arr::get($attributes, 'service6') }}</textarea>
</div>








