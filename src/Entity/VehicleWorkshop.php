<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use App\Controller\VehicleWorkshopController;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\RangeFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use App\Controller\ExportVehiclesWorkshopsController;

const PAY_BUSINESS = array("id" => 0, "msg" => "La Empresa");
const PAY_RENTAL_AGENCY = array("id" => 1, "msg" => "Renting");
const PAY_VEHICLE_SECURE = array("id" => 2, "msg" => "Franquicia-Seguro");
const PAY_SHARED = array("id" => 3, "msg" => "Gasto Compartido");

/**
 * @ApiResource(
 *  normalizationContext={
 *     "groups"={"get_VehicleWorkshop","history_workshop"}
 *  },
 *  collectionOperations={
 *       "get",
 *       "post"={
 *          "method"="POST",
 *          "controller"=VehicleWorkshopController::class
 *         },
 *         "export_vehicles_workshops"={
 *              "method"="GET",
 *              "path"="/vehicle_workshops/export/{format}",
 *              "requirements"={"format"="excel|pdf"},
 *              "controller"=ExportVehiclesWorkshopsController::class,
 *              "pagination_enabled"=false,
 *              "pagination_items_per_page"=5000,
 *         }
 *     },
 *     itemOperations={
 *        "get",
 *        "put",
 *        "delete",
 *        "patch"={
 *          "method"="PATCH",
 *          "controller"=VehicleWorkshopController::class
 *        },
 *      }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\VehicleWorkshopRepository")
 * @ApiFilter(DateFilter::class, properties={"startDate": DateFilter::EXCLUDE_NULL, "endDate": DateFilter::EXCLUDE_NULL})
 * @ApiFilter(RangeFilter::class, properties={"price","estimationDays"})
 * @ApiFilter(SearchFilter::class, properties={"cranePayment": "exact","workshopPayment": "exact"})
 * @ApiFilter(OrderFilter::class, properties={"startDate","endDate","cranePayment","workshopPayment"})
 * @ApiFilter(BooleanFilter::class, properties={"hasCrane","finalized"})
 */
class VehicleWorkshop
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Groups({"get_VehicleWorkshop","history_workshop"})
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $estimationDays;

    /**
     * @ORM\Column(type="datetime", options={"default"="CURRENT_TIMESTAMP"})
     * @Groups({"get_VehicleWorkshop"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $endDate;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_VehicleWorkshop"})
     */
    private $hasCrane;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="vehicleWorkshops")
     * @Groups({"get_VehicleWorkshop"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiFilter(SearchFilter::class, properties={"vehicle.registration":"partial" })
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Workshop", inversedBy="vehicleWorkshops")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_VehicleWorkshop","history_workshop"})
     * @ApiFilter(SearchFilter::class, properties={"workshop.name":"partial" })
     */
    private $workshop;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="vehicleWorkshops")
     * @Groups({"get_VehicleWorkshop"})
     * @ApiFilter(SearchFilter::class, properties={"rentalAgency.name":"partial" })
     */
    private $rentalAgency;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_VehicleWorkshop"})
     */
    private $startDate;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\WorkshopRating", mappedBy="vehicleWorkshop", cascade={"persist", "remove"})
     * @Groups({"get_VehicleWorkshop"})
     */
    private $rating;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleWorkshopBill", mappedBy="vehicleWorkshop")
     * @Groups({"get_VehicleWorkshop"})
     */
    private $vehicleWorkshopBills;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleIncident", mappedBy="vehicleWorkshop")
     * @Groups({"get_VehicleWorkshop"})
     */
    private $incidents;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleHistory", mappedBy="workshop")
     */
    private $vehicleHistories;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $price;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $cranePayment;

    /**
     * @Groups({"get_VehicleWorkshop"})
     */
    private $craneMsg;

    /**
     * @Groups({"get_VehicleWorkshop"})
     */
    private $workshopMsg;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $workshopPayment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_VehicleWorkshop"})
     */
    private $invoiceCopy;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_VehicleWorkshop"})
     */
    private $finalized;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\WorkshopServices", inversedBy="vehicleWorkshops")
     * @Groups({"get_VehicleWorkshop"})
     * @ApiFilter(SearchFilter::class, properties={"services.name":"exact"})
     */
    private $services;

    public function __construct()
    {
        $this->vehicleWorkshopBills = new ArrayCollection();
        $this->incidents = new ArrayCollection();
        $this->vehicleHistories = new ArrayCollection();

        # default values for created at, hasCrane and finalized attributes
        $this->createdAt = new \DateTime();
        $this->finalized = false;
        $this->hasCrane = false;
        $this->services = new ArrayCollection();

        if ($this->cranePayment && (int)$this->cranePayment >= 0) {
            $this->hasCrane = true;
        } else {
            $this->hasCrane = false;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstimationDays(): ?int
    {
        return $this->estimationDays;
    }

    public function setEstimationDays(?int $estimationDays): self
    {
        $this->estimationDays = $estimationDays;

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

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getHasCrane(): ?bool
    {
        return $this->hasCrane;
    }

    public function setHasCrane(?bool $hasCrane): self
    {
        $this->hasCrane = $hasCrane;

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

    public function getWorkshop(): ?Workshop
    {
        return $this->workshop;
    }

    public function setWorkshop(?Workshop $workshop): self
    {
        $this->workshop = $workshop;

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

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getRating(): ?WorkshopRating
    {
        return $this->rating;
    }

    public function setRating(WorkshopRating $rating): self
    {
        $this->rating = $rating;

        // set the owning side of the relation if necessary
        if ($rating->getVehicleWorkshop() !== $this) {
            $rating->setVehicleWorkshop($this);
        }

        return $this;
    }

    /**
     * @return Collection|VehicleWorkshopBill[]
     */
    public function getVehicleWorkshopBills(): Collection
    {
        return $this->vehicleWorkshopBills;
    }

    public function addVehicleWorkshopBill(VehicleWorkshopBill $vehicleWorkshopBill): self
    {
        if (!$this->vehicleWorkshopBills->contains($vehicleWorkshopBill)) {
            $this->vehicleWorkshopBills[] = $vehicleWorkshopBill;
            $vehicleWorkshopBill->setVehicleWorkshop($this);
        }

        return $this;
    }

    public function removeVehicleWorkshopBill(VehicleWorkshopBill $vehicleWorkshopBill): self
    {
        if ($this->vehicleWorkshopBills->contains($vehicleWorkshopBill)) {
            $this->vehicleWorkshopBills->removeElement($vehicleWorkshopBill);
            // set the owning side to null (unless already changed)
            if ($vehicleWorkshopBill->getVehicleWorkshop() === $this) {
                $vehicleWorkshopBill->setVehicleWorkshop(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|VehicleIncident[]
     */
    public function getIncidents(): Collection
    {
        return $this->incidents;
    }

    public function addIncident(VehicleIncident $incident): self
    {
        if (!$this->incidents->contains($incident)) {
            $this->incidents[] = $incident;
            $incident->setVehicleWorkshop($this);
        }

        return $this;
    }

    public function removeIncident(VehicleIncident $incident): self
    {
        if ($this->incidents->contains($incident)) {
            $this->incidents->removeElement($incident);
            // set the owning side to null (unless already changed)
            if ($incident->getVehicleWorkshop() === $this) {
                $incident->setVehicleWorkshop(null);
            }
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
            $vehicleHistory->setWorkshop($this);
        }

        return $this;
    }

    public function removeVehicleHistory(VehicleHistory $vehicleHistory): self
    {
        if ($this->vehicleHistories->contains($vehicleHistory)) {
            $this->vehicleHistories->removeElement($vehicleHistory);
            // set the owning side to null (unless already changed)
            if ($vehicleHistory->getWorkshop() === $this) {
                $vehicleHistory->setWorkshop(null);
            }
        }

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCranePayment(): ?int
    {
        return $this->cranePayment;
    }

    public function getCraneMsg(): ?string
    {
        $msg = "";
        if (is_null($this->cranePayment)) {
            return "";
        }
        switch ($this->cranePayment) {
            case 0:
                $msg = PAY_BUSINESS['msg'];
                break;
            case 1:
                $msg = PAY_RENTAL_AGENCY['msg'];
                break;
            case 2:
                $msg = PAY_VEHICLE_SECURE['msg'];
                break;
            case 3:
                $msg = PAY_SHARED['msg'];
                break;
        }

        return $msg;
    }

    public function setCranePayment(?int $cranePayment): self
    {
        $this->cranePayment = $cranePayment;

        return $this;
    }

    public function getWorkshopPayment(): ?int
    {
        return $this->workshopPayment;
    }

    public function getWorkshopMsg(): ?string
    {
        $msg = "";
        if (is_null($this->workshopPayment)) {
            return "";
        }

        switch ($this->workshopPayment) {
            case 0:
                $msg = PAY_BUSINESS['msg'];
                break;
            case 1:
                $msg = PAY_RENTAL_AGENCY['msg'];
                break;
            case 2:
                $msg = PAY_VEHICLE_SECURE['msg'];
                break;
            case 3:
                $msg = PAY_SHARED['msg'];
                break;
        }

        return $msg;
    }

    public function setWorkshopPayment(?int $workshopPayment): self
    {
        $this->workshopPayment = $workshopPayment;

        return $this;
    }

    public function getInvoiceCopy(): ?string
    {
        return $this->invoiceCopy;
    }

    public function setInvoiceCopy(?string $invoiceCopy): self
    {
        $this->invoiceCopy = $invoiceCopy;

        return $this;
    }

    public function getFinalized(): ?bool
    {
        return $this->finalized;
    }

    public function setFinalized(?bool $finalized): self
    {
        $this->finalized = $finalized;

        return $this;
    }

    /**
     * @return Collection|WorkshopServices[]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function getStrServices(): string
    {
        $services = $this->getServices();
        $servicesLength = count($services);
        $strServicesName = "";

        foreach ($services as $index => $service) {
            $strServicesName .= $service->getName();
            if ($index < $servicesLength - 1) {
                $strServicesName .= ', ';
            }
        }

        return $strServicesName;
    }

    public function addService(WorkshopServices $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
        }

        return $this;
    }

    public function removeService(WorkshopServices $service): self
    {
        if ($this->services->contains($service)) {
            $this->services->removeElement($service);
        }

        return $this;
    }

}
