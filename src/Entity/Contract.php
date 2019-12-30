<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ContractRepository")
 */
class Contract
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
    private $contractNumber;

    /**
     * @ORM\Column(type="integer")
     */
    private $typeContract;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annualKM;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $monthlyKM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exitKm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $devolutionAddress;

    /**
     * @ORM\Column(type="integer")
     */
    private $paymentPeriod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $paymentMethod;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $initialDeposit;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clauses", mappedBy="contract")
     */
    private $clauses;

   

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InstapackGroup", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $instapackGroup;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="contracts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rentalAgency;


    public function __construct()
    {
        $this->clauses = new ArrayCollection();

    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContractNumber(): ?int
    {
        return $this->contractNumber;
    }

    public function setContractNumber(int $contractNumber): self
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    public function getTypeContract(): ?int
    {
        return $this->typeContract;
    }

    public function setTypeContract(int $typeContract): self
    {
        $this->typeContract = $typeContract;

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

    public function setAnnualKM(?int $annualKM): self
    {
        $this->annualKM = $annualKM;

        return $this;
    }

    public function getMonthlyKM(): ?int
    {
        return $this->monthlyKM;
    }

    public function setMonthlyKM(?int $monthlyKM): self
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

    public function setExitKm(?int $exitKm): self
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

    public function setInitialDeposit(?int $initialDeposit): self
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





}
