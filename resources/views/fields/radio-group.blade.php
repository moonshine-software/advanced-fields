@props([
    'formName' => 'default',
    'value',
    'values' => []
])
<div {{ $attributes }}>
    @foreach($options as $option => $label)
        <div x-id="['field-{{ $formName }}']">
            <x-moonshine::form.label>
                <x-moonshine::form.input
                    type="radio"
                    :attributes="$attributes->except(['type', 'checked', 'value'])
                        ->merge(['checked' => $option === $value])
                        ->merge($optionAttributes === null ? [] : $optionAttributes($option))"
                    value="{{ $option }}"
                />

                {{ $label }}
            </x-moonshine::form.label>
        </div>
    @endforeach
</div>
