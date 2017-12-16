<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class TaskSpecPlacement
{
    /**
     * @var string[]
     */
    protected $constraints;

    /**
     * @return string[]
     */
    public function getConstraints(): ?array
    {
        return $this->constraints;
    }

    /**
     * @param string[] $constraints
     *
     * @return self
     */
    public function setConstraints(?array $constraints): self
    {
        $this->constraints = $constraints;

        return $this;
    }
}