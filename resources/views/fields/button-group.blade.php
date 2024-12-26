@props([
    'formName' => 'default',
    'value',
    'multiple' => false,
    'values' => []
])
<div {{ $attributes->merge(['class' => 'flex']) }}>
    @foreach($options as $option => $label)
        <label>
            <x-moonshine::link-button x-on:click="$event.target.classList.toggle('btn-primary')" :attributes="$attributes->only([])->class(['btn-primary' => $multiple ? in_array($option, $value) : $option === $value])->merge($optionAttributes === null ? [] : $optionAttributes($option))">
                <x-moonshine::form.input
                    :type="$multiple ? 'checkbox' : 'radio'"
                    :attributes="$attributes->only(['name'])->merge(['style' => 'display: none;','checked' => $multiple ? in_array($option, $value) : $option === $value])"
                    value="{{ $option }}"
                />
                {!! $label !!}
            </x-moonshine::link-button>
        </label>
    @endforeach
</div>
