<?php

declare(strict_types=1);

namespace MoonShine\AdvancedFields\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class AdvancedFieldsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-af');

        Blade::componentNamespace('MoonShine\AdvancedFields\Fields', 'moonshine-af');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-af'),
        ], ['moonshine-af', 'laravel-assets']);
    }
}
