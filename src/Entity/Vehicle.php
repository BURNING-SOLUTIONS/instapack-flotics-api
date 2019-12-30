<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 */
class Vehicle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vehicleRegistration;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vehicleFrame;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $color;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $co2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $mma;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vehicleCapacity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insurance;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="FuelType", inversedBy="vehicle")
     */
    private $fuelvehicle;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="VehicleType", inversedBy="vehicle")
     */
    private $vehicleType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicleRegistration(): ?string
    {
        return $this->vehicleRegistration;
    }

    public function setVehicleRegistration(string $vehicleRegistration): self
    {
        $this->vehicleRegistration = $vehicleRegistration;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getVehicleFrame(): ?string
    {
        return $this->vehicleFrame;
    }

    public function setVehicleFrame(string $vehicleFrame): self
    {
        $this->vehicleFrame = $vehicleFrame;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getCo2(): ?int
    {
        return $this->co2;
    }

    public function setCo2(?int $co2): self
    {
        $this->co2 = $co2;

        return $this;
    }

    public function getMom(): ?int
    {
        return $this->mom;
    }

    public function setMom(?int $mom): self
    {
        $this->mom = $mom;

        return $this;
    }

    public function getMma(): ?int
    {
        return $this->mma;
    }

    public function setMma(?int $mma): self
    {
        $this->mma = $mma;

        return $this;
    }

    public function getVehicleCapacity(): ?int
    {
        return $this->vehicleCapacity;
    }

    public function setVehicleCapacity(?int $vehicleCapacity): self
    {
        $this->vehicleCapacity = $vehicleCapacity;

        return $this;
    }

    public function getInsurance(): ?string
    {
        return $this->insurance;
    }

    public function setInsurance(?string $insurance): self
    {
        $this->insurance = $insurance;

        return $this;
    }

    public function getFuelvehicle(): ?FuelType
    {
        return $this->fuelvehicle;
    }

    public function setFuelvehicle(FuelType $fuelvehicle): self
    {
        $this->fuelvehicle = $fuelvehicle;

        return $this;
    }

    public function getVehicleType(): ?VehicleType
    {
        return $this->vehicleType;
    }

    public function setVehicleType(VehicleType $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }
}
