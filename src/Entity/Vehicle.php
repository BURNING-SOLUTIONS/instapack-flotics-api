<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"vehicle_fuel","get_agency","get_vehicleType"}})
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 * @UniqueEntity("registration")
 * @UniqueEntity("frame")
 * @ApiFilter(OrderFilter::class, properties={"registration", "frame","capacity","co2","mom","mma","brand","model","insurance","vehicleType"})
 * @ApiFilter(SearchFilter::class, properties={"registration": "partial", "brand": "partial", "frame": "partial","insurance": "partial","model":"partial", "color":"partial","co2":"partial","mom":"partial","mma":"partial","capacity":"partial"})
 */
class Vehicle
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"vehicle_fuel","get_vehicle","get_agency","get_vehicleType"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"vehicle_fuel","get_vehicle","get_agency","get_vehicleType"})
     */
    private $registration;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $frame;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $color;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $co2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $mom;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $mma;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $insurance;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="FuelType", inversedBy="vehicle")
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     * @ApiFilter(SearchFilter::class, properties={"fuelvehicle.type":"partial" })
     *
     */
    private $fuelvehicle;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="VehicleType", inversedBy="vehicle")
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     * @ApiFilter(SearchFilter::class, properties={"vehicleType.type":"partial" })
     *
     */
    private $vehicleType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="vehicles")
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     * @ApiFilter(SearchFilter::class, properties={"rentalAgency.name":"partial" })
     */
    private $rentalAgency;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contract", mappedBy="vehicle")
     * @Groups({"vehicle_fuel","get_agency"})
     *
     */
    private $contracts;


    public function __construct()
    {
        $this->contracts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param mixed $registration
     */
    public function setRegistration($registration): void
    {
        $this->registration = $registration;
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

    /**
     * @return mixed
     */
    public function getFrame()
    {
        return $this->frame;
    }

    /**
     * @param mixed $frame
     */
    public function setFrame($frame): void
    {
        $this->frame = $frame;
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

    /**
     * @return mixed
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param mixed $capacity
     */
    public function setCapacity($capacity): void
    {
        $this->capacity = $capacity;
    }



    public function getInsurance()
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

    public function getRentalAgency(): ?RentalAgency
    {
        return $this->rentalAgency;
    }

    public function setRentalAgency(?RentalAgency $rentalAgency): self
    {
        $this->rentalAgency = $rentalAgency;

        return $this;
    }

    /**
     * @return Collection|Contract[]
     */
    public function getContracts(): Collection
    {
        return $this->contracts;
    }

    /**
     * @param ArrayCollection $contracts
     */
    public function setContracts(ArrayCollection $contracts): void
    {
        $this->contracts = $contracts;
    }


}
