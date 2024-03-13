<?php

declare(strict_types=1);

namespace Ecohead\FormGeneratorBundle\Form\Field\Choice\Entity;

use Ecohead\FormGeneratorBundle\Form\Field\Choice\AbstractChoiceField;
use Doctrine\Persistence\ObjectManager;

class AbstractEntityField extends AbstractChoiceField
{
    /** @param class-string $class */
    public function setEntityClass(string $class): static
    {
        $this->setOption('class', $class);

        return $this;
    }

    public function setEntityManager(string|ObjectManager $manager): static
    {
        $this->setOption('em', $manager);

        return $this;
    }

    public function setQueryBuilder(mixed $queryBuilder): static
    {
        $this->setOption('query_builder', $queryBuilder);

        return $this;
    }
}
