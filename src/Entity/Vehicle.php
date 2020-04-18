<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiProperty;

/**
 * @ORM\Table(indexes={
@ORM\Index(name="global_search_vehicle", columns={"registration","frame"})
})
 * @ApiResource(normalizationContext={"groups"={"vehicle_fuel","get_agency","get_vehicleType"}})
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 * @UniqueEntity("registration")
 * @UniqueEntity("frame")
 * @UniqueEntity("transportCard")
 * @ApiFilter(OrderFilter::class, properties={"registration", "frame","capacity","co2","mom","mma","brand","model","insurance","vehicleType"})
 * @ApiFilter(SearchFilter::class, properties={"registration": "partial", "brand": "partial", "frame": "partial","insurance": "partial","model":"partial", "color":"partial","co2":"partial","mom":"partial","mma":"partial","capacity":"partial","transportCardPrice":"partial","transportCard":"partial",
 *     "drivingLicense":"partial","dataSheet":"partial","environmental":"partial","madridSer":"partial","madridCentral":"partial","madridCentralRenovation":"partial","madridSerPrice":"partial"})
 */
class Vehicle
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ApiProperty(identifier=true)
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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $drivingLicense;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $dataSheet;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $environmental;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $madridSer;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $madridCentral;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $madridCentralRenovation;
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $madridSerPrice;
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $transportCard;
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     */
    private $transportCardPrice;
    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="FuelType", inversedBy="vehicle")
     * @Groups({"vehicle_fuel","get_agency","get_vehicleType"})
     * @ApiFilter(SearchFilter::class, properties={"fuelVehicle.type":"partial" })
     *
     */
    private $fuelVehicle;

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
     *
     * @Groups({"vehicle_fuel","get_agency"})
     */

    private $vehiclecontracts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EquipmentVehicle", mappedBy="vehicle")
     */
    private $equipmentVehicles;


    public function __construct()
    {
        $this->vehiclecontracts = new ArrayCollection();
        $this->equipmentVehicles = new ArrayCollection();
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

    public function getFuelVehicle(): ?FuelType
    {
        return $this->fuelVehicle;
    }

    public function setFuelVehicle(FuelType $fuelVehicle): self
    {
        $this->fuelVehicle = $fuelVehicle;

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


    public function getVehiclecontracts()
    {
        return $this->vehiclecontracts;
    }


    public function setVehiclecontracts(Contract $vehiclecontracts): void
    {
        $this->vehiclecontracts = $vehiclecontracts;
    }

    /**
     * @return mixed
     */
    public function getDrivingLicense()
    {
        return $this->drivingLicense;
    }

    /**
     * @param mixed $drivingLicense
     */
    public function setDrivingLicense($drivingLicense): void
    {
        $this->drivingLicense = $drivingLicense;
    }

    /**
     * @return mixed
     */
    public function getDataSheet()
    {
        return $this->dataSheet;
    }

    /**
     * @param mixed $dataSheet
     */
    public function setDataSheet($dataSheet): void
    {
        $this->dataSheet = $dataSheet;
    }

    /**
     * @return mixed
     */
    public function getEnvironmental()
    {
        return $this->environmental;
    }

    /**
     * @param mixed $environmental
     */
    public function setEnvironmental($environmental): void
    {
        $this->environmental = $environmental;
    }

    /**
     * @return mixed
     */
    public function getMadridSer()
    {
        return $this->madridSer;
    }

    /**
     * @param mixed $madridSer
     */
    public function setMadridSer($madridSer): void
    {
        $this->madridSer = $madridSer;
    }

    /**
     * @return mixed
     */
    public function getMadridCentral()
    {
        return $this->madridCentral;
    }

    /**
     * @param mixed $madridCentral
     */
    public function setMadridCentral($madridCentral): void
    {
        $this->madridCentral = $madridCentral;
    }

    /**
     * @return mixed
     */
    public function getMadridCentralRenovation()
    {
        return $this->madridCentralRenovation;
    }

    /**
     * @param mixed $madridCentralRenovation
     */
    public function setMadridCentralRenovation($madridCentralRenovation): void
    {
        $this->madridCentralRenovation = $madridCentralRenovation;
    }

    /**
     * @return mixed
     */
    public function getMadridSerPrice()
    {
        return $this->madridSerPrice;
    }

    /**
     * @param mixed $madridSerPrice
     */
    public function setMadridSerPrice($madridSerPrice): void
    {
        $this->madridSerPrice = $madridSerPrice;
    }

    /**
     * @return mixed
     */
    public function getTransportCard()
    {
        return $this->transportCard;
    }

    /**
     * @param mixed $transportCard
     */
    public function setTransportCard($transportCard): void
    {
        $this->transportCard = $transportCard;
    }

    /**
     * @return mixed
     */
    public function getTransportCardPrice()
    {
        return $this->transportCardPrice;
    }

    /**
     * @param mixed $transportCardPrice
     */
    public function setTransportCardPrice($transportCardPrice): void
    {
        $this->transportCardPrice = $transportCardPrice;
    }

    /**
     * @return Collection|EquipmentVehicle[]
     */
    public function getEquipmentVehicles(): Collection
    {
        return $this->equipmentVehicles;
    }

    public function addEquipmentVehicle(EquipmentVehicle $equipmentVehicle): self
    {
        if (!$this->equipmentVehicles->contains($equipmentVehicle)) {
            $this->equipmentVehicles[] = $equipmentVehicle;
            $equipmentVehicle->addIdVehicle($this);
        }

        return $this;
    }

    public function removeEquipmentVehicle(EquipmentVehicle $equipmentVehicle): self
    {
        if ($this->equipmentVehicles->contains($equipmentVehicle)) {
            $this->equipmentVehicles->removeElement($equipmentVehicle);
            $equipmentVehicle->removeIdVehicle($this);
        }

        return $this;
    }


}
