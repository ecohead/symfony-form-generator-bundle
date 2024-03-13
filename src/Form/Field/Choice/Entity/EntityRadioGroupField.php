<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Entity;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EntityRadioGroupField extends AbstractEntityField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = EntityType::class;

        $this->setOption('multiple', false);
        $this->setOption('expanded', true);
    }
}
