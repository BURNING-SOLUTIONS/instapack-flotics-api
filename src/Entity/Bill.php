<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BillRepository")
 * @ApiFilter(SearchFilter::class, properties={"billNumber": "exact", "dateBill": "exact", "expirationDate": "exact"})
 */
class Bill
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
    private $billNumber;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateBill;

    /**
     * @ORM\Column(type="datetime")
     */
    private $expirationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $amounts;

    /**
     * @ORM\Column(type="integer")
     */
    private $iva;

    /**
     * @ORM\Column(type="integer")
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract", inversedBy="bills")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contractNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBillNumber(): ?int
    {
        return $this->billNumber;
    }

    public function setBillNumber(int $billNumber): self
    {
        $this->billNumber = $billNumber;

        return $this;
    }

    public function getDateBill(): ?\DateTimeInterface
    {
        return $this->dateBill;
    }

    public function setDateBill(\DateTimeInterface $dateBill): self
    {
        $this->dateBill = $dateBill;

        return $this;
    }

    public function getExpirationDate(): ?\DateTimeInterface
    {
        return $this->expirationDate;
    }

    public function setExpirationDate(\DateTimeInterface $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

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

    public function getAmounts(): ?int
    {
        return $this->amounts;
    }

    public function setAmounts(int $amounts): self
    {
        $this->amounts = $amounts;

        return $this;
    }

    public function getIva(): ?int
    {
        return $this->iva;
    }

    public function setIva(int $iva): self
    {
        $this->iva = $iva;

        return $this;
    }

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getContractNumber(): ?Contract
    {
        return $this->contractNumber;
    }

    public function setContractNumber(?Contract $contractNumber): self
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }
}
