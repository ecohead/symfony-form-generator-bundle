<?php

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice;

use Ecohead\FormGeneratorBundle\Form\Field\AbstractAutocompleteField;
use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;

class AbstractChoiceField extends AbstractAutocompleteField
{
    /**
     * @param mixed[] $choices
     */
    public function setChoices(array $choices): static
    {
        $this->setOption('choices', $choices);

        return $this;
    }

    public function setChoiceAttribute(mixed $attribute): static
    {
        $this->setOption('choice_attr', $attribute);

        return $this;
    }

    public function setChoiceFilter(mixed $attributes): static
    {
        $this->setOption('choice_filter', $attributes);

        return $this;
    }

    public function setChoiceLabel(mixed $label): static
    {
        $this->setOption('choice_label', $label);

        return $this;
    }

    public function setChoiceLoader(ChoiceLoaderInterface $choiceLoader): static
    {
        $this->setOption('choice_loader', $choiceLoader);

        return $this;
    }

    public function setChoiceName(mixed $name): static
    {
        $this->setOption('choice_name', $name);

        return $this;
    }

    public function setChoiceValue(mixed $value): static
    {
        $this->setOption('choice_value', $value);

        return $this;
    }

    public function groupBy(mixed $groupBy): static
    {
        $this->setOption('group_by', $groupBy);

        return $this;
    }

    public function setPreferredChoices(mixed $preferredChoices): static
    {
        $this->setOption('preferred_choices', $preferredChoices);

        return $this;
    }

    public function setQueryBuilder(mixed $queryBuilder): static
    {
        $this->setOption('query_builder', $queryBuilder);

        return $this;
    }
}
