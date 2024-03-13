<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Entity;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntityCheckboxGroupField extends AbstractEntityField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = EntityType::class;

        $this->setOption('multiple', true);
        $this->setOption('expanded', true);
    }
}
