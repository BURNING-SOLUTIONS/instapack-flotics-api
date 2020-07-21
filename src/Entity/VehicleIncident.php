<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VehicleIncidentRepository")
 */
class VehicleIncident
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="vehicleIncidents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $messenger;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $decription;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $albaran;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VehicleWorkshop", inversedBy="incidents")
     */
    private $vehicleWorkshop;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getMessenger(): ?string
    {
        return $this->messenger;
    }

    public function setMessenger(?string $messenger): self
    {
        $this->messenger = $messenger;

        return $this;
    }

    public function getDecription(): ?string
    {
        return $this->decription;
    }

    public function setDecription(?string $decription): self
    {
        $this->decription = $decription;

        return $this;
    }

    public function getAlbaran(): ?string
    {
        return $this->albaran;
    }

    public function setAlbaran(?string $albaran): self
    {
        $this->albaran = $albaran;

        return $this;
    }

    public function getVehicleWorkshop(): ?VehicleWorkshop
    {
        return $this->vehicleWorkshop;
    }

    public function setVehicleWorkshop(?VehicleWorkshop $vehicleWorkshop): self
    {
        $this->vehicleWorkshop = $vehicleWorkshop;

        return $this;
    }
}
