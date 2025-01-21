@props([])
<div {{ $attributes }}>
    @foreach($components as $component)
        {!! $component !!}
    @endforeach
</div>
