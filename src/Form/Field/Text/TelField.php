<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class TelField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = TelType::class;
    }
}
