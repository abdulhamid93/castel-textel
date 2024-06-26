<div class="container">
    {{-- <div class="section pb_0">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-map2"></i>
                    </div>
                    <div class="contact_text">
                        <span>{{ __('Address') }}</span>
                        <p>{{ theme_option('address') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-envelope-open"></i>
                    </div>
                    <div class="contact_text">
                        <span>{{ __('Email Address') }}</span>
                        <a href="mailto:{{ theme_option('email') }}">{{ theme_option('email') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact_wrap contact_style3">
                    <div class="contact_icon">
                        <i class="linearicons-tablet2"></i>
                    </div>
                    <div class="contact_text">
                        <span>{{ __('Phone') }}</span>
                        <p>{{ theme_option('hotline') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section pt-0">
        <div class="row">
            <div class="col-12">
                <div class="heading_s1">
                    <h2>{{ __('Get In touch') }}</h2>
                </div>
                <div class="field_form">
                    {!! Form::open(['route' => 'public.send.contact', 'class' => 'form--contact contact-form', 'method' => 'POST']) !!}
                        {!! apply_filters('pre_contact_form', null) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_name" class="form-label required">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name"
                                           placeholder="{{ __('Name') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_email" class="form-label required">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email"
                                           placeholder="{{ __('Email') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_address" class="form-label">{{ __('Address') }}</label>
                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="contact_address"
                                           placeholder="{{ __('Address') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="contact_phone" class="form-label">{{ __('Phone') }}</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone"
                                           placeholder="{{ __('Phone') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="contact_subject" class="form-label">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="contact_subject"
                                           placeholder="{{ __('Subject') }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="contact_content" class="form-label required">{{ __('Message') }}</label>
                                    <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{{ __('Message') }}">{{ old('content') }}</textarea>
                                </div>
                            </div>

                            {!! apply_filters('after_contact_form', null) !!}

                            <div class="col-12">
                                {!! apply_filters('form_extra_fields_render', null, \Botble\Contact\Forms\Fronts\ContactForm::class) !!}
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-fill-out dark-text">{{ __('Send Message') }}</button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="contact-message contact-success-message" style="display: none"></div>
                            <div class="contact-message contact-error-message" style="display: none"></div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- END SECTION CONTACT -->

</div>


<style>

.dark-text{
    color: #000;
}
</style>
