<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\File;

use Vich\UploaderBundle\Form\Type\VichImageType;

class ImageField extends FileField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = VichImageType::class;
    }

    public function setImageUri(mixed $uri): static
    {
        $this->setOption('image_uri', $uri);

        return $this;
    }

    /** @phpstan-param VichImageType::STORAGE_RESOLVE_* $method */
    public function setStorageResolveMethod(int $method = VichImageType::STORAGE_RESOLVE_PATH_ABSOLUTE): static
    {
        $this->setOption('storage_resolve_method', $method);

        return $this;
    }
}
