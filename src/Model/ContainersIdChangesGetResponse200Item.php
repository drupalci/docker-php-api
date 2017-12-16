<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class ContainersIdChangesGetResponse200Item
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var int
     */
    protected $kind;

    /**
     * @return string
     */
    public function getPath(): ?string
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return int
     */
    public function getKind(): ?int
    {
        return $this->kind;
    }

    /**
     * @param int $kind
     *
     * @return self
     */
    public function setKind(?int $kind): self
    {
        $this->kind = $kind;

        return $this;
    }
}