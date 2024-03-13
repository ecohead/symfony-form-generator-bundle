<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Enum;

use Ecohead\FormGeneratorBundle\Form\Field\Choice\AbstractChoiceField;

class AbstractEnumField extends AbstractChoiceField
{
    public function setEnumClass(string $class): static
    {
        $this->setOption('class', $class);

        return $this;
    }
}
