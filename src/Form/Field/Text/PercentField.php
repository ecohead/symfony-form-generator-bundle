<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use Symfony\Component\Form\Extension\Core\Type\PercentType;

class PercentField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = PercentType::class;

        $this->setRoundingMode(\NumberFormatter::ROUND_HALFUP);
        $this->isNativeHTMLInput(true);
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
     * Set this to 'integer' if your entity property is
     * of type INTEGER, 'fractional' otherwise.
     *
     * @phpstan-param 'fractional'|'integer' $format
     */
    public function setInputFormat(string $format): static
    {
        $this->setOption('type', $format);

        return $this;
    }

    public function isNativeHTMLInput(bool $state): static
    {
        $this->setOption('html5', $state);

        return $this;
    }

    public function setSymbol(string|false $symbol): static
    {
        $this->setOption('symbol', $symbol);

        return $this;
    }
}
