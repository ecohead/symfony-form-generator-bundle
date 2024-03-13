<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Enum;

use Symfony\Component\Form\Extension\Core\Type\EnumType;

class EnumSelectField extends AbstractEnumField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = EnumType::class;

        $this->setOption('multiple', false);
        $this->setOption('expanded', false);
    }
}
