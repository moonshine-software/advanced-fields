@props([
    'contentClass' => 'async-tabs-content',
    'components' => []
])
<div x-data="asyncTabs" {{ $attributes }}>
    <x-moonshine::layout.flex class="async-tabs-container">
        @foreach($components as $button)
            {!! $button !!}
        @endforeach
    </x-moonshine::layout.flex>

    <div class="{{ $contentClass }}"></div>
</div>
