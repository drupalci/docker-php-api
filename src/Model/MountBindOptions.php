<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class MountBindOptions
{
    /**
     * @var mixed
     */
    protected $propagation;

    /**
     * @return mixed
     */
    public function getPropagation()
    {
        return $this->propagation;
    }

    /**
     * @param mixed $propagation
     *
     * @return self
     */
    public function setPropagation($propagation): self
    {
        $this->propagation = $propagation;

        return $this;
    }
}