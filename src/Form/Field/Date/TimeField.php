<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Date;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Carbon\Carbon;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class TimeField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = TimeType::class;

        $this->options['widget'] = 'single_text';
        $this->options['html5'] = false;
        $this->setFormat('H:i:s');
        $this->defineTimezones(modelTimezone: 'Etc/GMT', viewTimezone: 'Europe/Paris');
    }

    public function isMutable(bool $state): static
    {
        $this->setOption('input', $state ? 'datetime_immutable' : 'datetime');

        return $this;
    }

    public function defineTimezones(string $modelTimezone, string $viewTimezone): static
    {
        $this->setOption('reference_date', Carbon::now()->toDateTime());
        $this->setOption('model_timezone', $modelTimezone);
        $this->setOption('view_timezone', $viewTimezone);

        return $this;
    }

    public function setFormat(string $format): static
    {
        $this->setOption('format', $format);

        return $this;
    }
}
