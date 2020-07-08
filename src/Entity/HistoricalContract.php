<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Repository\HistoricalContractRepository;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\HistoricalContractRepository")
 * @UniqueEntity("number")
 * @ApiFilter(SearchFilter::class, properties={"number": "partial", "type": "partial","entryKM":"partial","deliveryAddress":"partial","exitKM":"partial","maximumKM":"partial","devolutionAddress":"partial","initialDeposit":"partial","vehicle":"partial","instapackGroup":"partial","rentalAgency":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"startDate","endDate","id","number", "type","entryKM","exitKM","initialDeposit","instapackGroup","rentalAgency","maximumKM","devolutionAddress","vehicle"})
 * @ApiFilter(DateFilter::class, properties={"startDate": DateFilter::EXCLUDE_NULL, "endDate": DateFilter::EXCLUDE_NULL})
 *
 */
class HistoricalContract
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="integer", length=255, unique=true)
     *
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255, length=255)
     *
     */
    private $type;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     *
     */
    private $endDate;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $entryKM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $exitKM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $devolutionAddress;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $initialDeposit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $instapackGroup;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     *
     */
    private $rentalAgency;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vehicle;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $maximumKM;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInstapackGroup()
    {
        return $this->instapackGroup;
    }

    /**
     * @param mixed $instapackGroup
     */
    public function setInstapackGroup($instapackGroup): self
    {
        $this->instapackGroup = $instapackGroup;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRentalAgency()
    {
        return $this->rentalAgency;
    }

    /**
     * @param mixed $rentalAgency
     */
    public function setRentalAgency($rentalAgency): self
    {
        $this->rentalAgency = $rentalAgency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     */
    public function setVehicle($vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
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
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getEntryKM()
    {
        return $this->entryKM;
    }

    /**
     * @param mixed $entryKM
     */
    public function setEntryKM(float $entryKM): self
    {
        $this->entryKM = $entryKM;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDeliveryAddress()
    {
        return $this->deliveryAddress;
    }

    /**
     * @param mixed $deliveryAddress
     */
    public function setDeliveryAddress($deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExitKm()
    {
        return $this->exitKM;
    }

    /**
     * @param mixed $exitKM
     */
    public function setExitKm(?float $exitKM): self
    {
        $this->exitKM = $exitKM;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDevolutionAddress()
    {
        return $this->devolutionAddress;
    }

    /**
     * @param mixed $devolutionAddress
     */
    public function setDevolutionAddress($devolutionAddress): self
    {
        $this->devolutionAddress = $devolutionAddress;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getInitialDeposit()
    {
        return $this->initialDeposit;
    }

    /**
     * @param mixed $initialDeposit
     */
    public function setInitialDeposit(?float $initialDeposit): self
    {
        $this->initialDeposit = $initialDeposit;

        return $this;
    }

    public function getMaximumKM(): ?string
    {
        return $this->maximumKM;
    }

    public function setMaximumKM(?string $maximumKM): self
    {
        $this->maximumKM = $maximumKM;

        return $this;
    }

}
