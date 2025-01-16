<?php

declare(strict_types=1);

namespace MoonShine\Advanced\Components\Tabs;

use MoonShine\Support\Traits\Makeable;
use MoonShine\UI\Traits\WithIcon;

/**
 * @method static static make(string $label, string $href)
 */
final class AsyncTab
{
    use Makeable;
    use WithIcon;

    public function __construct(
        public string $label,
        public string $href,
    ) {}
}
