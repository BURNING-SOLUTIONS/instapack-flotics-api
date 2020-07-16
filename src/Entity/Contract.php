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
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\ContractController;
use App\Controller\DeleteContractController;
use App\Controller\ExportContractsController;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"get_contract","get_bill","get_clauses","vehicle_contract","get_vehicle","get_rates"},"enable_max_depth"=true},
 *     collectionOperations={
 *         "get",
 *         "post"={
 *             "method"="POST",
 *             "controller"=ContractController::class
 *         },
 *         "export_contracts"={
 *              "method"="GET",
 *              "path"="/contracts/export/{format}",
 *              "requirements"={"format"="excel|pdf"},
 *              "controller"=ExportContractsController::class,
 *              "pagination_enabled"=false,
 *              "pagination_items_per_page"=5000,
 *         }
 *      },
 *     itemOperations={
 *          "get",
 *          "put",
 *          "patch",
 *          "delete"={
 *             "method"="DELETE",
 *             "controller"=DeleteContractController::class
 *         }
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\ContractRepository")
 * @UniqueEntity("number")
 * @ApiFilter(SearchFilter::class, properties={"number": "partial","deliveryAddress":"partial","devolutionAddress":"partial","maximumKm":"partial","entryKm":"partial","initialDeposit":"partial","paymentMethod":"partial","bills":"partial"})
 * @ApiFilter(DateFilter::class, properties={"startDate": DateFilter::EXCLUDE_NULL, "endDate": DateFilter::EXCLUDE_NULL})
 * @ApiFilter(OrderFilter::class, properties={"id","number","startDate","endDate","maximumKm","entryKm","exitKm","paymentMethod","initialDeposit"})
 *
 */
class Contract
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_bill","get_clauses","vehicle_contract","get_contract","get_vehicle","get_rates"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=255, unique=true)
     * @Groups({"get_bill","get_clauses","vehicle_contract","get_contract","get_vehicle","get_rates"})
     */
    private $number;


    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_bill","get_clauses","vehicle_contract","get_contract","get_vehicle","get_rates"})
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_bill","vehicle_contract","get_contract","get_vehicle","get_rates"})
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_bill"})
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_bill"})
     */
    private $devolutionAddress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_bill"})
     */
    private $paymentMethod;

    /**
     * @ORM\Column(type="decimal",precision=10, scale=2, nullable=true)
     * @Groups({"get_bill"})
     */
    private $initialDeposit;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_bill"})
     */
    private $maximumKm;

    /**
     * @Groups({"get_bill"})
     * @ORM\Column(type="decimal",precision=10, scale=2)
     */
    private $entryKm;

    /**
     * @ORM\Column(type="decimal",precision=10, scale=2, nullable=true)
     * @Groups({"get_bill"})
     */
    private $exitKm;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clauses", mappedBy="contract", cascade={"remove"})
     * @Groups({"get_bill"})
     */
    private $clauses;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InstapackGroup", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_bill"})
     * @ApiFilter(SearchFilter::class, properties={"instapackGroup.name":"partial" })
     */
    private $instapackGroup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_bill","get_contract"})
     * @ApiFilter(SearchFilter::class, properties={"rentalAgency.name":"partial" })
     */
    private $rentalAgency;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bill", mappedBy="contractNumber")
     * @Groups({"get_bill"})
     */
    private $bills;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Vehicle",inversedBy="contract", cascade={"persist"})
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\JoinColumn(name="vehicle_id", referencedColumnName="id",nullable=false)
     * @Groups({"get_bill","get_contract"})
     * @ApiFilter(SearchFilter::class, properties={"vehicle.registration":"partial" })
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ContractType")
     * @ApiFilter(SearchFilter::class, properties={"type.name":"partial" })
     * @Groups({"get_bill","vehicle_contract","get_contract"})
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ContractAccessory", mappedBy="contract", cascade={"remove"})
     * @ApiSubresource
     */
    private $contractAccessories;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_contract"})
     */
    private $contractFile;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Rates")
     *  @ApiFilter(SearchFilter::class, properties={"rates.vehicle_model":"partial" })
     * @Groups({"get_contract","get_rates"})
     */
    private $rates;


    public function __construct()
    {
        $this->clauses = new ArrayCollection();
        $this->bills = new ArrayCollection();
        $this->contractAccessories = new ArrayCollection();
        $this->rates = new ArrayCollection();

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

    /**
     * @return Collection|Bill[]
     */
    public function getContractAccessories(): Collection
    {
        return $this->contractAccessories;
    }


    public function addContractAccessory(ContractAccessory $contract): self
    {
        if (!$this->contractAccessories->contains($contract)) {
            $this->contractAccessories[] = $contract;
            $contract->setContract($this);
        }

        return $this;
    }

    public function removeContractAccessory(ContractAccessory $contract): self
    {
        if ($this->contractAccessories->contains($contract)) {
            $this->contractAccessories->removeElement($contract);
            // set the owning side to null (unless already changed)
            if ($contract->getContract() === $this) {
                $contract->setContract(null);
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
    public function getMaximumKm()
    {
        return $this->maximumKm;
    }

    /**
     * @param mixed $maximumKm
     */
    public function setMaximumKm(float $maximumKm): void
    {
        $this->maximumKm = $maximumKm;
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

    public function getType(): ?ContractType
    {
        return $this->type;
    }

    public function setType(?ContractType $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getContractFile(): ?string
    {
        return $this->contractFile;
    }

    public function setContractFile(?string $contractFile): self
    {
        $this->contractFile = $contractFile;

        return $this;
    }

    /**
     * @return Collection|Rates[]
     */
    public function getRates(): Collection
    {
        return $this->rates;
    }

    public function addRate(Rates $rate): self
    {
        if (!$this->rates->contains($rate)) {
            $this->rates[] = $rate;
        }

        return $this;
    }

    public function removeRate(Rates $rate): self
    {
        if ($this->rates->contains($rate)) {
            $this->rates->removeElement($rate);
        }

        return $this;
    }


}
