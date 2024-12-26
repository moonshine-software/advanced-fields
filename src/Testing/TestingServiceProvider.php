<?php

declare(strict_types=1);

namespace VendorName\PackageName\Testing;

use MoonShine\Laravel\Providers\MoonShineApplicationServiceProvider;
use MoonShine\Laravel\Resources\MoonShineUserResource;
use MoonShine\Laravel\Resources\MoonShineUserRoleResource;

final class TestingServiceProvider extends MoonShineApplicationServiceProvider
{
    protected function resources(): array
    {
        return [
            MoonShineUserResource::class,
            MoonShineUserRoleResource::class,
        ];
    }
}
