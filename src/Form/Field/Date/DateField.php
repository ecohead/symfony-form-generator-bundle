<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Date;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DateField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = DateType::class;

        $this->options['widget'] = 'single_text';
        $this->options['html5'] = false;
        $this->defineTimezones(modelTimezone: 'Etc/GMT', viewTimezone: 'Etc/GMT');
    }

    public function isImmutable(bool $state = true): static
    {
        $this->setOption('input', $state ? 'datetime_immutable' : 'datetime');

        return $this;
    }

    public function defineTimezones(string $modelTimezone, string $viewTimezone): static
    {
        $this->setOption('model_timezone', $modelTimezone);
        $this->setOption('view_timezone', $viewTimezone);

        return $this;
    }

    /** @phpstan-param \IntlDateFormatter::*|string $format */
    public function setFormat(int|string $format): static
    {
        $this->setOption('format', $format);

        return $this;
    }
}
