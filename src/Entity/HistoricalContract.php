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
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\HistoricalContractRepository")
 * @UniqueEntity("number")
 * @ApiFilter(SearchFilter::class, properties={"number": "partial", "type": "partial", "startDate": "partial","endDate": "partial","annualKM":"partial","monthlyKM":"partial","deliveryAddress":"partial","exitKm":"partial","devolutionAddress":"partial","paymentPeriod":"partial","initialDeposit":"partial","bills":"partial","vehicle":"partial","instapackGroup":"partial","rentalAgency":""})
 * @ApiFilter(OrderFilter::class, properties={"id","number", "type","startDate","endDate","annualKM","monthlyKM","exitKm","paymentPeriod","paymentMethod","initialDeposit"})
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
     * @ORM\Column(type="integer")
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
    private $annualKM;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * )
     */
    private $monthlyKM;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $exitKm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $devolutionAddress;

    /**
     * @ORM\Column(type="integer")
     *
     */
    private $paymentPeriod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     *
     */
    private $paymentMethod;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $initialDeposit;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $totalKm;
    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     *
     */
    private $deliveryKm;

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
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $bills;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     *
     */
    private $vehicle;

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
    public function setInstapackGroup($instapackGroup): void
    {
        $this->instapackGroup = $instapackGroup;
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
    public function setRentalAgency($rentalAgency): void
    {
        $this->rentalAgency = $rentalAgency;
    }

    /**
     * @return mixed
     */
    public function getBills()
    {
        return $this->bills;
    }

    /**
     * @param mixed $bills
     */
    public function setBills($bills): void
    {
        $this->bills = $bills;
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
    public function setVehicle($vehicle): void
    {
        $this->vehicle = $vehicle;
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
    public function setType($type): void
    {
        $this->type = $type;
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
    public function setStartDate($startDate): void
    {
        $this->startDate = $startDate;
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
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return mixed
     */
    public function getAnnualKM()
    {
        return $this->annualKM;
    }

    /**
     * @param mixed $annualKM
     */
    public function setAnnualKM(float $annualKM): void
    {
        $this->annualKM = $annualKM;
    }

    /**
     * @return mixed
     */
    public function getMonthlyKM()
    {
        return $this->monthlyKM;
    }

    /**
     * @param mixed $monthlyKM
     */
    public function setMonthlyKM(float $monthlyKM): void
    {
        $this->monthlyKM = $monthlyKM;
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
    public function setDeliveryAddress($deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return mixed
     */
    public function getExitKm()
    {
        return $this->exitKm;
    }

    /**
     * @param mixed $exitKm
     */
    public function setExitKm(float $exitKm): void
    {
        $this->exitKm = $exitKm;
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
    public function setDevolutionAddress($devolutionAddress): void
    {
        $this->devolutionAddress = $devolutionAddress;
    }

    /**
     * @return mixed
     */
    public function getPaymentPeriod()
    {
        return $this->paymentPeriod;
    }

    /**
     * @param mixed $paymentPeriod
     */
    public function setPaymentPeriod($paymentPeriod): void
    {
        $this->paymentPeriod = $paymentPeriod;
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
    public function setInitialDeposit(float $initialDeposit): void
    {
        $this->initialDeposit = $initialDeposit;
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

}
