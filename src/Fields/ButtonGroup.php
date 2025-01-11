<?php

declare(strict_types=1);

namespace MoonShine\AdvancedFields\Fields;

use Closure;
use MoonShine\UI\Fields\Field;

class ButtonGroup extends Field
{
    /**
     * @var array<string, int|string>
     */
    protected array $options = [];

    protected bool $multiple = false;

    protected ?Closure $optionAttributes = null;

    protected string $view = 'moonshine-af::fields.button-group';

    /**
     * @param array<string, int|string> $options
     */
    public function options(array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @param Closure(int|string $value): array $callback
     */
    public function optionAttributes(Closure $callback): self
    {
        $this->optionAttributes = $callback;

        return $this;
    }

    public function multiple(): self
    {
        $this->multiple = true;

        return $this->group();
    }

    protected function viewData(): array
    {
        return [
            'options' => $this->options,
            'multiple' => $this->multiple,
            'optionAttributes' => $this->optionAttributes,
        ];
    }
}
