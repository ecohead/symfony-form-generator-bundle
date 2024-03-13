<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

class ColorField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = ColorType::class;

        $this->enableHexColorRegex(true);
    }

    public function enableHexColorRegex(bool $state): static
    {
        $this->setOption('html5', $state);

        return $this;
    }
}
