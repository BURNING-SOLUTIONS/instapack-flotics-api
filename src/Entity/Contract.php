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
 * @ApiResource(normalizationContext={"groups"={"get_agency","get_bill","get_clauses","get_vehicle","get_instagroup"},"enable_max_depth"=true})
 * @ORM\Entity(repositoryClass="App\Repository\ContractRepository")
 * @UniqueEntity("number")
 * @ApiFilter(SearchFilter::class, properties={"number": "partial", "type": "partial", "startDate": "partial","endDate": "partial","annualKM":"partial","monthlyKM":"partial","deliveryAddress":"partial","exitKm":"partial","devolutionAddress":"partial","paymentPeriod":"partial","initialDeposit":"partial","clauses":"partial","bills":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"id","number", "type","startDate","endDate","annualKM","monthlyKM","exitKm","paymentPeriod","paymentMethod","initialDeposit"})
 *
 *
 */
class Contract
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_agency","get_bill","get_clauses","get_vehicle","get_instagroup"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=255, unique=true)
     * @Groups({"get_contract","get_agency","get_bill","get_clauses","get_vehicle"})
     */
    private $number;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContractType", mappedBy="contract")
     * @Groups({"get_agency","get_bill","get_clauses","get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"type.type":"partial" })
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract","get_agency","get_bill","get_clauses","get_vehicle"})
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract","get_agency","get_bill","get_vehicle"})
     */
    private $endDate;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $annualKM;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $monthlyKM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="decimal",precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $exitKm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $devolutionAddress;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $paymentPeriod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $paymentMethod;

    /**
     * @ORM\Column(type="decimal",precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $initialDeposit;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $totalKm;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $deliveryKm;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clauses", mappedBy="contract")
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $clauses;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InstapackGroup", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"instapackGroup.name":"partial" })
     */
    private $instapackGroup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"rentalAgency.name":"partial" })
     */
    private $rentalAgency;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bill", mappedBy="contractNumber")
     * @Groups({"get_agency","get_bill","get_vehicle"})
     */
    private $bills;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Vehicle")
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\JoinColumn(name="vehiclecontracts", referencedColumnName="id",nullable=false)
     * @Groups({"get_agency","get_bill","get_vehicle"})
     * @ApiFilter(SearchFilter::class, properties={"vehicle.number":"partial" })
     */
    private $vehicle;

    /**
     * @ORM\Column(type="integer")
     */
    private $entryKm;






    public function __construct()
    {
        $this->clauses = new ArrayCollection();
        $this->bills = new ArrayCollection();
        $this->type = new ArrayCollection();

    }


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number): void
    {
        $this->number = $number;
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

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getAnnualKM(): ?int
    {
        return $this->annualKM;
    }

    public function setAnnualKM(?float $annualKM): self
    {
        $this->annualKM = $annualKM;

        return $this;
    }

    public function getMonthlyKM(): ?int
    {
        return $this->monthlyKM;
    }

    public function setMonthlyKM(?float $monthlyKM): self
    {
        $this->monthlyKM = $monthlyKM;

        return $this;
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?string $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getExitKm(): ?int
    {
        return $this->exitKm;
    }

    public function setExitKm(?float $exitKm): self
    {
        $this->exitKm = $exitKm;

        return $this;
    }

    public function getDevolutionAddress(): ?string
    {
        return $this->devolutionAddress;
    }

    public function setDevolutionAddress(?string $devolutionAddress): self
    {
        $this->devolutionAddress = $devolutionAddress;

        return $this;
    }

    public function getPaymentPeriod(): ?int
    {
        return $this->paymentPeriod;
    }

    public function setPaymentPeriod(int $paymentPeriod): self
    {
        $this->paymentPeriod = $paymentPeriod;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param mixed $paymentMethod
     */
    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }


    public function getInitialDeposit(): ?int
    {
        return $this->initialDeposit;
    }

    public function setInitialDeposit(?float $initialDeposit): self
    {
        $this->initialDeposit = $initialDeposit;

        return $this;
    }

    /**
     * @return Collection|Clauses[]
     */
    public function getClauses(): Collection
    {
        return $this->clauses;
    }

    public function addClause(Clauses $clause): self
    {
        if (!$this->clauses->contains($clause)) {
            $this->clauses[] = $clause;
            $clause->setContract($this);
        }

        return $this;
    }

    public function removeClause(Clauses $clause): self
    {
        if ($this->clauses->contains($clause)) {
            $this->clauses->removeElement($clause);
            // set the owning side to null (unless already changed)
            if ($clause->getContract() === $this) {
                $clause->setContract(null);
            }
        }

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

    public function getInstapackGroup(): ?InstapackGroup
    {
        return $this->instapackGroup;
    }

    public function setInstapackGroup(?InstapackGroup $instapackGroup): self
    {
        $this->instapackGroup = $instapackGroup;

        return $this;
    }

    /**
     * @return Collection|Bill[]
     */
    public function getBills(): Collection
    {
        return $this->bills;
    }

    public function addBill(Bill $bill): self
    {
        if (!$this->bills->contains($bill)) {
            $this->bills[] = $bill;
            $bill->setContractNumber($this);
        }

        return $this;
    }

    public function removeBill(Bill $bill): self
    {
        if ($this->bills->contains($bill)) {
            $this->bills->removeElement($bill);
            // set the owning side to null (unless already changed)
            if ($bill->getContractNumber() === $this) {
                $bill->setContractNumber(null);
            }
        }

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

    /**
     * @return mixed
     */
    public function getTotalKm()
    {
        return $this->totalKm;
    }

    /**
     * @param mixed $totalKm
     */
    public function setTotalKm(float $totalKm): void
    {
        $this->totalKm = $totalKm;
    }

    /**
     * @return mixed
     */
    public function getDeliveryKm()
    {
        return $this->deliveryKm;
    }

    /**
     * @param mixed $deliveryKm
     */
    public function setDeliveryKm(float $deliveryKm): void
    {
        $this->deliveryKm = $deliveryKm;
    }

    /**
     * @return Collection|ContractType[]
     */
    public function getType(): Collection
    {
        return $this->type;
    }

    public function addType(ContractType $type): self
    {
        if (!$this->type->contains($type)) {
            $this->type[] = $type;
            $type->setContract($this);
        }

        return $this;
    }

    public function removeType(ContractType $type): self
    {
        if ($this->type->contains($type)) {
            $this->type->removeElement($type);
            // set the owning side to null (unless already changed)
            if ($type->getContract() === $this) {
                $type->setContract(null);
            }
        }

        return $this;
    }

    public function getEntryKm(): ?int
    {
        return $this->entryKm;
    }

    public function setEntryKm(int $entryKm): self
    {
        $this->entryKm = $entryKm;

        return $this;
    }


}
