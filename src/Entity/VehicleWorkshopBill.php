<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VehicleWorkshopBillRepository")
 */
class VehicleWorkshopBill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalPrice;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cranePrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $voucherFile;

    /**
     * @ORM\Column(type="boolean")
     */
    private $approved;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VehicleWorkshop", inversedBy="vehicleWorkshopBills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicleWorkshop;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getTotalPrice(): ?string
    {
        return $this->totalPrice;
    }

    public function setTotalPrice(?string $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }

    public function getCranePrice(): ?string
    {
        return $this->cranePrice;
    }

    public function setCranePrice(?string $cranePrice): self
    {
        $this->cranePrice = $cranePrice;

        return $this;
    }

    public function getVoucherFile(): ?string
    {
        return $this->voucherFile;
    }

    public function setVoucherFile(?string $voucherFile): self
    {
        $this->voucherFile = $voucherFile;

        return $this;
    }

    public function getApproved(): ?bool
    {
        return $this->approved;
    }

    public function setApproved(bool $approved): self
    {
        $this->approved = $approved;

        return $this;
    }

    public function getVehicleWorkshop(): ?VehicleWorkshop
    {
        return $this->vehicleWorkshop;
    }

    public function setVehicleWorkshop(?VehicleWorkshop $vehicleWorkshop): self
    {
        $this->vehicleWorkshop = $vehicleWorkshop;

        return $this;
    }

}
