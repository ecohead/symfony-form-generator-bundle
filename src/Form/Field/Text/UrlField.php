<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class UrlField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = UrlType::class;

        $this->setDefaultProtocol('https');
    }

    public function setDefaultProtocol(string $protocol): static
    {
        $this->setOption('default_protocol', $protocol);

        return $this;
    }
}
