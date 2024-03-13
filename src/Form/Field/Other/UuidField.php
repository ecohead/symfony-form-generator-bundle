<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Other;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\UuidType;

class UuidField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = UuidType::class;
    }
}
