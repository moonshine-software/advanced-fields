<?php

declare(strict_types=1);

namespace MoonShine\Advanced\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

final class AdvancedServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-advanced');

        Blade::componentNamespace('MoonShine\Advanced\Fields', 'moonshine-advanced');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-advanced'),
        ], ['moonshine-advanced', 'laravel-assets']);
    }
}
