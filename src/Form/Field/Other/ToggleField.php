<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Other;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Ecohead\FormGeneratorBundle\Form\Type\SwitchType;

class ToggleField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = SwitchType::class;

        $this->setFalsyValues(null, false, 'false', 'off', '', 0, '0');
        $this->defaultChecked(false);
    }

    public function setFalsyValues(string|int|bool|null ...$values): static
    {
        $this->setOption('false_values', $values);

        return $this;
    }

    public function defaultChecked(bool $state): static
    {
        $this->setOption('value', $state);

        return $this;
    }
}
