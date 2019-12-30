<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\AccessoriesRepository")
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
}
