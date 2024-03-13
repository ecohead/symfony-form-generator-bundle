<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field;

use Symfony\Component\Validator\Constraint;

abstract class AbstractField
{
    /** @var class-string */
    protected string $formType;

    /** @var array<string, mixed> */
    protected array $options = [];

    public function __construct(protected string $name)
    {
    }

    public static function new(string $name): static
    {
        return new static($name);
    }

    public function setLabel(string $label): static
    {
        $this->setOption('label', $label);

        return $this;
    }

    public function setHelp(string $label): static
    {
        $this->setOption('help', $label);

        return $this;
    }

    public function isRequired(bool $required = true): static
    {
        $this->options['required'] = $required;

        return $this;
    }

    public function isMapped(bool $mapped = true): static
    {
        $this->options['mapped'] = $mapped;

        return $this;
    }

    public function inheritData(bool $state = false): static
    {
        $this->options['inherit_data'] = $state;

        return $this;
    }

    public function setData(mixed $data): static
    {
        $this->options['data'] = $data;

        return $this;
    }

    public function isDisabled(bool $disabled = true): static
    {
        $this->options['disabled'] = $disabled;

        return $this;
    }

    public function trim(bool $trim = true): static
    {
        $this->options['trim'] = $trim;

        return $this;
    }

    public function setEmptyData(mixed $data): static
    {
        $this->options['empty_data'] = $data;

        return $this;
    }

    public function setPlaceholder(mixed $data): static
    {
        $this->options['placeholder'] = $data;

        return $this;
    }

    /** @phpstan-param array<string, mixed> $parameters */
    public function setInvalidMessage(string $message, array $parameters = []): static
    {
        $this->options['invalid_message'] = $message;

        if (count($parameters) > 0) {
            $this->options['invalid_message_parameters'] = $parameters;
        }

        return $this;
    }

    public function enableSanitizer(string $sanitizerName): static
    {
        $this->options['sanitize_html'] = true;
        $this->options['sanitizer'] = $sanitizerName;

        return $this;
    }

    public function addInputAttribute(string $name, mixed $value): static
    {
        $this->addAttribute('attr', $name, $value);

        return $this;
    }

    /**
     * @param array<string, string|bool|int> $attributes
     *
     * @return $this
     */
    public function addInputAttributes(array $attributes): static
    {
        foreach ($attributes as $name => $value) {
            $this->addAttribute('attr', $name, $value);
        }

        return $this;
    }

    public function addRowAttribute(string $name, string|int|bool $value): static
    {
        $this->addAttribute('row_attr', $name, $value);

        return $this;
    }

    /**
     * @param array<string, string|bool|int> $attributes
     *
     * @return $this
     */
    public function addRowAttributes(array $attributes): static
    {
        foreach ($attributes as $name => $value) {
            $this->addAttribute('row_attr', $name, $value);
        }

        return $this;
    }

    public function addLabelAttribute(string $name, string|int|bool $value): static
    {
        $this->addAttribute('label_attr', $name, $value);

        return $this;
    }

    /**
     * @param array<string, string|bool|int> $attributes
     *
     * @return $this
     */
    public function addLabelAttributes(array $attributes): static
    {
        foreach ($attributes as $name => $value) {
            $this->addAttribute('label_attr', $name, $value);
        }

        return $this;
    }

    public function addHelpAttribute(string $name, string|int|bool $value): static
    {
        $this->addAttribute('help_attr', $name, $value);

        return $this;
    }

    /**
     * @param array<string, string|bool|int> $attributes
     *
     * @return $this
     */
    public function addHelpAttributes(array $attributes): static
    {
        foreach ($attributes as $name => $value) {
            $this->addAttribute('help_attr', $name, $value);
        }

        return $this;
    }

    public function addConstraint(Constraint $constraint): static
    {
        if (!isset($this->options['constraints']) || !is_array($this->options['constraints'])) {
            $this->options['constraints'] = [];
        }

        $this->options['constraints'] = array_merge($this->options['constraints'], [$constraint]);

        return $this;
    }

    /** @param Constraint[] $constraints */
    public function addConstraints(array $constraints): static
    {
        if (!isset($this->options['constraints']) || !is_array($this->options['constraints'])) {
            $this->options['constraints'] = [];
        }

        $this->options['constraints'] = array_merge($this->options['constraints'], $constraints);

        return $this;
    }

    /**
     * @param array<string, string|int|bool|array> $extras
     * @return $this
     */
    public function setTemplateVars(array $extras): static
    {
        $this->options['template_vars'] = $extras;

        return $this;
    }

    public function addTemplateVar(string $key, int|string|bool|array $value): static
    {
        if (!isset($this->options['template_vars']) || !is_array($this->options['template_vars'])) {
            $this->options['template_vars'] = [];
        }

        $this->options['template_vars'] = array_merge($this->options['template_vars'], [$key => $value]);

        return $this;
    }

    public function __invoke(): array
    {
        return [$this->name, $this->formType, $this->options];
    }

    protected function setOption(string $key, mixed $value): void
    {
        $this->options[$key] = $value;
    }

    private function addAttribute(string $key, string $name, mixed $value): void
    {
        if (!isset($this->options[$key]) || !is_array($this->options[$key])) {
            $this->options[$key] = [];
        }

        $this->options[$key][$name] = $value;
    }
}
