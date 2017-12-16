<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ResourcesUlimitsItem
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $soft;
    /**
     * @var int
     */
    protected $hard;

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getSoft(): ?int
    {
        return $this->soft;
    }

    /**
     * @param int $soft
     *
     * @return self
     */
    public function setSoft(?int $soft): self
    {
        $this->soft = $soft;

        return $this;
    }

    /**
     * @return int
     */
    public function getHard(): ?int
    {
        return $this->hard;
    }

    /**
     * @param int $hard
     *
     * @return self
     */
    public function setHard(?int $hard): self
    {
        $this->hard = $hard;

        return $this;
    }
}