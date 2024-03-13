<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Classic;

use Ecohead\FormGeneratorBundle\Form\Field\Choice\AbstractChoiceField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ClassicCheckboxGroupField extends AbstractChoiceField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = ChoiceType::class;

        $this->setOption('multiple', true);
        $this->setOption('expanded', true);
    }
}
