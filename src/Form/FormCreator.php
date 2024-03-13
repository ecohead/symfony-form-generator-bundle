<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;

final readonly class FormCreator
{
    private FormBuilderInterface $formBuilder;

    private function __construct(FormBuilderInterface $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }

    public static function new(FormBuilderInterface $formBuilder): self
    {
        return new self($formBuilder);
    }

    public function add(AbstractField $fieldDefinitions): self
    {
        $this->formBuilder->add(...$fieldDefinitions());
        return $this;
    }

    public function addNative(string|FormBuilderInterface $child, string $type = null, array $options = []): self
    {
        $this->formBuilder->add($child, $type, $options);
        return $this;
    }

}
