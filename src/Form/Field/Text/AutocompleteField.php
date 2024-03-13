<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractAutocompleteField;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AutocompleteField extends AbstractAutocompleteField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = TextType::class;
    }
}
