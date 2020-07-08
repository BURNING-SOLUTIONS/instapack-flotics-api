<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *  normalizationContext={"groups"={"get_VehicleWorkshop","history_workshop"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\VehicleWorkshopRepository")
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
     * @ORM\Column(type="datetime")
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
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Workshop", inversedBy="vehicleWorkshops")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_VehicleWorkshop","history_workshop"})
     */
    private $workshop;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="vehicleWorkshops")
     * @Groups({"get_VehicleWorkshop"})
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

    public function __construct()
    {
        $this->vehicleWorkshopBills = new ArrayCollection();
        $this->incidents = new ArrayCollection();
        $this->vehicleHistories = new ArrayCollection();
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

    public function setHasCrane(bool $hasCrane): self
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

}
