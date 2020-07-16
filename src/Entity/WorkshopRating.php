<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRatingRepository")
 */
class WorkshopRating
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $fast;

    /**
     * @ORM\Column(type="integer")
     */
    private $quality;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\VehicleWorkshop", inversedBy="rating", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicleWorkshop;

    /**
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFast(): ?int
    {
        return $this->fast;
    }

    public function setFast(int $fast): self
    {
        $this->fast = $fast;

        return $this;
    }

    public function getQuality(): ?int
    {
        return $this->quality;
    }

    public function setQuality(int $quality): self
    {
        $this->quality = $quality;

        return $this;
    }

    public function getVehicleWorkshop(): ?VehicleWorkshop
    {
        return $this->vehicleWorkshop;
    }

    public function setVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        $this->vehicleWorkshop = $vehicleWorkshop;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
