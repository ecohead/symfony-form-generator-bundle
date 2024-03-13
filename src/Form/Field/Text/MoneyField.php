<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Text;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractField;
use PrinsFrank\Standards\Currency\CurrencyAlpha3;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class MoneyField extends AbstractField
{
    public function __construct(string $name)
    {
        parent::__construct($name);
        $this->formType = MoneyType::class;

        $this->enableGrouping(false);
        $this->setRoundingMode(\NumberFormatter::ROUND_HALFUP);
        $this->isNativeHTMLInput(true);
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

    public function setCurrency(CurrencyAlpha3|false $currency): static
    {
        $this->setOption('currency', false === $currency ? false : $currency->value);

        return $this;
    }

    public function diviseByBeforeDisplay(int $number): static
    {
        $this->setOption('divisor', $number);

        return $this;
    }
}
