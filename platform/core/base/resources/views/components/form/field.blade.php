@props([
    'showLabel' => true,
    'showField' => true,
    'options' => [],
    'name',
    'nameKey' => null,
    'prepend' => null,
    'append' => null,
    'showError' => true,
])

@if ($showLabel && $showField)
    @if ($options['wrapper'] !== false)
        <div {!! $options['wrapperAttrs'] !!}>
            @endif
            @endif

            @if ($showLabel && $options['label'] !== false && $options['label_show'])
                {!! $label ?? null !!}
            @endif

            @if ($showField)
                @if ($prepend = Arr::get($options, 'prepend'))
                    {!! $prepend !!}
                @endif

                {!! $slot !!}

                @if ($append = Arr::get($options, 'append'))
                    {!! $append !!}
                @endif

                @include('core/base::forms.partials.help-block')
            @endif

            @include('core/base::forms.partials.errors')

            @if ($showLabel && $showField)
                @if ($options['wrapper'] !== false)
        </div>
    @endif
@endif
