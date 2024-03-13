<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field;

use Doctrine\ORM\QueryBuilder;
use Symfony\Bundle\SecurityBundle\Security;

abstract class AbstractAutocompleteField extends AbstractField
{
    public function enableAutocomplete(bool $state = true): static
    {
        $this->setOption('autocomplete', $state);

        return $this;
    }

    public function setTomSelectOptions(mixed $options): static
    {
        $this->setOption('tom_select_options', $options);

        return $this;
    }

    public function setOptionsAsHTML(bool $state): static
    {
        $this->setOption('options_as_html', $state);

        return $this;
    }

    public function setAutoCompleteUrl(string $url): static
    {
        $this->setOption('autocomplete_url', $url);

        return $this;
    }

    public function setNoResultsText(string $text): static
    {
        $this->setOption('no_results_found_text', $text);

        return $this;
    }

    public function setNoMoreResultsText(string $text): static
    {
        $this->setOption('no_more_results_text', $text);

        return $this;
    }

    /** @param string[]|null $fields */
    public function setSearchableFields(?array $fields): static
    {
        $this->setOption('searchable_fields', $fields);

        return $this;
    }

    /** @phpstan-param false|string|callable(Security $security): bool $security */
    public function isGranted(false|string|callable $security): static
    {
        $this->setOption('security', $security);

        return $this;
    }

    /**
     * @phpstan-param null|callable(QueryBuilder $qb, string $query, mixed $repository): void $filter
     */
    public function filterQuery(?callable $filter): static
    {
        $this->setOption('filter_query', $filter);

        return $this;
    }

    public function setMaxResults(int $number): static
    {
        $this->setOption('max_results', $number);

        return $this;
    }

    public function setMinResults(int $number): static
    {
        $this->setOption('min_results', $number);

        return $this;
    }

    public function setPreload(string $preload): static
    {
        $this->setOption('preload', $preload);

        return $this;
    }
}
