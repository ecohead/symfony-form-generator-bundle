<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TextareaField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = TextareaType::class;
    }
}
