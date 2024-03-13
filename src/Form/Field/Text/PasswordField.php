<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = PasswordType::class;
    }

    public function setAlwaysEmpty(bool $value): static
    {
        $this->setOption('always_empty', $value);

        return $this;
    }

    public function setHashPropertyPath(?string $value): static
    {
        $this->setOption('hash_property_value', $value);

        return $this;
    }
}
