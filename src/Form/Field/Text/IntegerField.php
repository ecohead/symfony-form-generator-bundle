<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class IntegerField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = IntegerType::class;

        $this->enableGrouping(false);
        $this->setRoundingMode(\NumberFormatter::ROUND_DOWN);
    }

    public function enableGrouping(bool $state): static
    {
        $this->setOption('grouping', $state);

        return $this;
    }

    /** @phpstan-param \NumberFormatter::ROUND_* $mode */
    public function setRoundingMode(int $mode): static
    {
        $this->setOption('rounding_mode', $mode);

        return $this;
    }
}
