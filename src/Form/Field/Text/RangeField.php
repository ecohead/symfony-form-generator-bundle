<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\RangeType;

class RangeField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = RangeType::class;
    }
}
