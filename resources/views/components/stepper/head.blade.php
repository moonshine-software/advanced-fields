@props([
    'done' => false,
    'active' => false,
    'index' => 1,
    'title' => null,
    'description' => null,
    'icon',
])
<div {{ $attributes->merge(['class' => 'js-stepper-head js-stepper-head-' . $index, '@click' => 'current(`'.$index.'`)']) }}>
    <div class="js-stepper-head-state-active" @if(!$active && !$done) style="display: none" @endif>
        <div>{!! $icon !!}{{ $title ?? $index }}</div>
        @if($description) <div>{{ $description }}</div> @endif
    </div>
    <div class="js-stepper-head-state-default {{ $done ? 'js-stepper-head-state-done' : '' }}" @if(!$active || $done) style="display: none" @endif>
        <div>{{ $index }}</div>
    </div>
</div>
