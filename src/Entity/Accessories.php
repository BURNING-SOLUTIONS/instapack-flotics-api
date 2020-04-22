<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AccessoriesRepository")
 * @ApiFilter(SearchFilter::class, properties={"accessory": "partial"})
 * @ApiFilter(OrderFilter::class, properties={"accessory"})
 */
class Accessories
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $accessory;
    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccessory(): ?string
    {
        return $this->accessory;
    }

    public function setAccessory(string $accessory): self
    {
        $this->accessory = $accessory;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

}
