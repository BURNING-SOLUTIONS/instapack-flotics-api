<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Messages\VehicleHistoryMessage;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiProperty;
use App\Controller\VehicleController;
use App\Controller\ExportVehiclesController;
use function GuzzleHttp\Psr7\str;

/**
 * @ORM\Table(indexes={
@ORM\Index(name="global_search_vehicle", columns={"registration","frame"})
})
 * @ApiResource(
 *     normalizationContext={"groups"={"get_vehicle","vehicle_contract","vehicle_agency","vehicle_authorizations","get_VehicleWorkshop"}},
 *     collectionOperations={
 *         "get",
 *         "post"={
 *             "method"="POST",
 *             "controller"=VehicleController::class
 *         },
 *         "export_vehicles"={
 *              "method"="GET",
 *              "path"="/vehicles/export/{format}",
 *              "requirements"={"format"="excel|pdf"},
 *              "controller"=ExportVehiclesController::class,
 *              "pagination_enabled"=false,
 *              "pagination_items_per_page"=5000,
 *         }
 *      },
 *     itemOperations={
 *         "get",
 *         "put",
 *         "delete",
 *         "patch"={
 *             "method"="PATCH",
 *             "controller"=VehicleController::class
 *          },
 *      }
 *  )
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 * @UniqueEntity("registration")
 * @UniqueEntity("frame")
 * @UniqueEntity("transportCard")
 * @ApiFilter(OrderFilter::class, properties={"registration", "frame","capacity","co2","mom","mma","brand","model","vehicleType","currentKms"})
 * @ApiFilter(SearchFilter::class, properties={"registration": "partial", "brand": "partial", "frame": "partial","model":"partial", "currentKms":"partial","color":"partial","co2":"partial","mom":"partial","mma":"partial","capacity":"partial","transportCardPrice":"partial","transportCard":"partial","drivingLicense":"partial","dataSheet":"partial","environmental":"partial"})
 */
class Vehicle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ApiProperty(identifier=true)
     * @ORM\Column(type="integer")
     * @Groups({"get_vehicle","get_contract","get_VehicleWorkshop"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_vehicle","get_contract","get_VehicleWorkshop"})
     */
    private $registration;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_vehicle","get_contract"})
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_vehicle","get_contract"})
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_vehicle","get_contract","get_VehicleWorkshop"})
     */
    private $frame;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_vehicle"})
     */
    private $color;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $co2;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $mom;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $mma;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $capacity;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $drivingLicense;
    /**
     * @ORM\Column(type="string", nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $dataSheet;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $environmental;
    /**
     * @ORM\Column(type="string", length=255, unique=true, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $transportCard;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $transportCardPrice;
    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="FuelType", inversedBy="vehicle")
     * @Groups({"get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"fuelVehicle.type":"partial" })
     */
    private $fuelVehicle;

    /**
     * Many features have one product. This is the owning side.
     * @ORM\ManyToOne(targetEntity="VehicleType", inversedBy="vehicle")
     * @Groups({"get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"vehicleType.type":"exact"})
     *
     */
    private $vehicleType;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="vehicles")
     * @Groups({"vehicle_agency"})
     * @ApiFilter(SearchFilter::class, properties={"rentalAgency.name":"partial" })
     */
    private $rentalAgency;

    /**
     * @ORM\OneToOne(targetEntity="Contract", mappedBy="vehicle", cascade={"persist"})
     * @ApiFilter(SearchFilter::class, properties={"contract.number":"partial"})
     * @ApiFilter(ExistsFilter::class, properties={"contract"})
     * @Groups({"vehicle_contract","get_vehicle"})
     */
    private $contract;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EquipmentVehicle", mappedBy="vehicle", cascade={"remove"})
     * @ApiSubresource
     */
    private $equipmentVehicles;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $currentMma;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Groups({"get_vehicle"})
     */
    private $usefulCharge;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleWorkshop", mappedBy="vehicle")
     */
    private $vehicleWorkshops;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $currentKms;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleIncident", mappedBy="vehicle")
     */
    private $vehicleIncidents;

    /**
     * @ORM\Column(type="json", nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $client = null;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleHistory", mappedBy="vehicle")
     * @ApiSubresource
     */
    private $vehicleHistories;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleAuthorization", mappedBy="vehicle")
     * @Groups({"vehicle_authorizations"})
     * @ApiSubresource
     */
    private $vehicleAuthorizations;

    /**
     * @ORM\Column(type="json", nullable=true)
     * @Groups({"get_vehicle"})
     */
    private $deliveryMan = null;

    //private $hasActiveWorkshop;

    public function __construct()
    {
        $this->equipmentVehicles = new ArrayCollection();
        $this->vehicleWorkshops = new ArrayCollection();
        $this->vehicleIncidents = new ArrayCollection();
        $this->vehicleHistories = new ArrayCollection();
        $this->vehicleAuthorizations = new ArrayCollection();
    }

    /*public function getHasActiveWorkshop(): bool
    {
        $myWorksops = $this->getVehicleWorkshops();
        $existActiveWorkshop = false;
        foreach ($myWorksops as $item) {
            if ($item instanceof VehicleWorkshop) {
                if (!$item->getFinalized()) {
                    $existActiveWorkshop = true;
                }
            }
        }

        return $existActiveWorkshop;
    }*/

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

    public function getCo2()
    {
        return $this->co2;
    }

    public function setCo2(?float $co2): self
    {
        $this->co2 = $co2;

        return $this;
    }

    public function getMom()
    {
        return $this->mom;
    }

    public function setMom(?float $mom): self
    {
        $this->mom = $mom;

        return $this;
    }

    public function getMma()
    {
        return $this->mma;
    }

    public function setMma(?float $mma): self
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
    public function setCapacity(?float $capacity): void
    {
        $this->capacity = $capacity;
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

    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    public function setContract(?Contract $contract): self
    {
        $this->contract = $contract;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getDrivingLicense()
    {
        return $this->drivingLicense;
    }

    /**
     * @param mixed $drivingLicensedataSheet
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
    public function setTransportCardPrice(?float $transportCardPrice): void
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
            $equipmentVehicle->setVehicle($this);
        }

        return $this;
    }

    public function removeEquipmentVehicle(EquipmentVehicle $equipmentVehicle): self
    {
        if ($this->equipmentVehicles->contains($equipmentVehicle)) {
            $this->equipmentVehicles->removeElement($equipmentVehicle);
            $equipmentVehicle->setVehicle($this);
        }

        return $this;
    }

    public function getCurrentMma(): ?string
    {
        return $this->currentMma;
    }

    public function setCurrentMma(?string $currentMma): self
    {
        if (!$currentMma) {
            $currentMma = $this->mma;
        }

        $this->currentMma = $currentMma;
        return $this;
    }

    public function getUsefulCharge(): ?string
    {
        return $this->usefulCharge;
    }

    public function setUsefulCharge(string $usefulCharge): self
    {
        $calculateUseful = (float)$this->mma - (float)$this->mom;
        $this->usefulCharge = (string)$calculateUseful;

        return $this;
    }

    /**
     * @return Collection|VehicleWorkshop[]
     */
    public function getVehicleWorkshops(): Collection
    {
        return $this->vehicleWorkshops;
    }

    public function addVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if (!$this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops[] = $vehicleWorkshop;
            $vehicleWorkshop->setVehicle($this);
        }

        return $this;
    }

    public function removeVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if ($this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops->removeElement($vehicleWorkshop);
            // set the owning side to null (unless already changed)
            if ($vehicleWorkshop->getVehicle() === $this) {
                $vehicleWorkshop->setVehicle(null);
            }
        }

        return $this;
    }

    public function getCurrentKms(): ?string
    {
        return $this->currentKms;
    }

    public function setCurrentKms(?string $currentKms): self
    {
        $this->currentKms = $currentKms;

        return $this;
    }

    /**
     * @return Collection|VehicleIncident[]
     */
    public function getVehicleIncidents(): Collection
    {
        return $this->vehicleIncidents;
    }

    public function addVehicleIncident(VehicleIncident $vehicleIncident): self
    {
        if (!$this->vehicleIncidents->contains($vehicleIncident)) {
            $this->vehicleIncidents[] = $vehicleIncident;
            $vehicleIncident->setVehicle($this);
        }

        return $this;
    }

    public function removeVehicleIncident(VehicleIncident $vehicleIncident): self
    {
        if ($this->vehicleIncidents->contains($vehicleIncident)) {
            $this->vehicleIncidents->removeElement($vehicleIncident);
            // set the owning side to null (unless already changed)
            if ($vehicleIncident->getVehicle() === $this) {
                $vehicleIncident->setVehicle(null);
            }
        }

        return $this;
    }

    public function getClient(): ?array
    {
        return $this->client;
    }

    public function setClient(?array $client): self
    {
        if (!$client) {
            $this->client = null;
        } else {
            $this->client = $client;
        }

        return $this;
    }

    /**
     * @return Collection|VehicleHistory[]
     */
    public function getVehicleHistories(): Collection
    {
        return $this->vehicleHistories;
    }

    public function addVehicleHistory(VehicleHistory $vehicleHistory): self
    {
        if (!$this->vehicleHistories->contains($vehicleHistory)) {
            $this->vehicleHistories[] = $vehicleHistory;
            $vehicleHistory->setVehicle($this);
        }

        return $this;
    }

    public function removeVehicleHistory(VehicleHistory $vehicleHistory): self
    {
        if ($this->vehicleHistories->contains($vehicleHistory)) {
            $this->vehicleHistories->removeElement($vehicleHistory);
            // set the owning side to null (unless already changed)
            if ($vehicleHistory->getVehicle() === $this) {
                $vehicleHistory->setVehicle(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|VehicleAuthorization[]
     */
    public function getVehicleAuthorizations(): Collection
    {
        return $this->vehicleAuthorizations;
    }

    public function addVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): self
    {
        if (!$this->vehicleAuthorizations->contains($vehicleAuthorization)) {
            $this->vehicleAuthorizations[] = $vehicleAuthorization;
            $vehicleAuthorization->setVehicle($this);
        }

        return $this;
    }

    public function removeVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): self
    {
        if ($this->vehicleAuthorizations->contains($vehicleAuthorization)) {
            $this->vehicleAuthorizations->removeElement($vehicleAuthorization);
            // set the owning side to null (unless already changed)
            if ($vehicleAuthorization->getVehicle() === $this) {
                $vehicleAuthorization->setVehicle(null);
            }
        }

        return $this;
    }

    public function getDeliveryMan(): ?array
    {
        return $this->deliveryMan;
    }

    public function setDeliveryMan(?array $deliveryMan): self
    {
        if (!$deliveryMan) {
            $this->deliveryMan = null;
        } else {
            $this->deliveryMan = $deliveryMan;
        }

        return $this;
    }

}
