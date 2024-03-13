<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\File;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Vich\UploaderBundle\Form\Type\VichFileType;

class FileField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = VichFileType::class;
    }

    public function allowDelete(bool $state = true): static
    {
        $this->setOption('allow_delete', $state);

        return $this;
    }

    public function setDeleteLabel(string $label): static
    {
        $this->setOption('delete_label', $label);

        return $this;
    }

    public function useAssetHelper(bool $state = false): static
    {
        $this->setOption('asset_helper', $state);

        return $this;
    }

    public function setDownloadUri(mixed $uri): static
    {
        $this->setOption('download_uri', $uri);

        return $this;
    }

    public function setDownloadLabel(mixed $label): static
    {
        $this->setOption('download_label', $label);

        return $this;
    }
}
