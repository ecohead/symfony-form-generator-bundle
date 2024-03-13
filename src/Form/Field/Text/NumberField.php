<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class NumberField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = NumberType::class;

        $this->enableGrouping(false);
        $this->setRoundingMode(\NumberFormatter::ROUND_HALFUP);
        $this->isNativeHTMLInput(true);
    }

    public function enableGrouping(bool $state): static
    {
        $this->setOption('grouping', $state);

        return $this;
    }

    public function disableButtons(): static
    {
        $this->addRowAttribute('disable_buttons', true);

        return $this;
    }

    /** @phpstan-param \NumberFormatter::ROUND_* $mode */
    public function setRoundingMode(int $mode): static
    {
        $this->setOption('rounding_mode', $mode);

        return $this;
    }

    public function setScale(int $scale): static
    {
        $this->setOption('scale', $scale);

        return $this;
    }

    /**
     * Set this to 'string' if your entity property is
     * of type DECIMAL (to prevent rounding errors).
     *
     * @phpstan-param 'string'|'number' $format
     */
    public function setInputFormat(string $format): static
    {
        $this->setOption('input', $format);

        return $this;
    }

    public function isNativeHTMLInput(bool $state): static
    {
        $this->setOption('html5', $state);

        return $this;
    }
}
