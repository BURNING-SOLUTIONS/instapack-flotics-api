<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"get_contract"}})
 * )
 * @ORM\Entity(repositoryClass="App\Repository\BillRepository")
 * @UniqueEntity("number")
 * @ApiFilter(SearchFilter::class, properties={"number": "partial", "date": "partial", "expirationDate": "partial", "startDate":"partial","total":"partial","iva":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"number", "date","expirationDate","startDate","endDate","amounts","iva","total"})
 */
class Bill
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_contract"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @Groups({"get_contract"})
     */
    private $number;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract"})
     */
    private $date;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract"})
     */
    private $expirationDate;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract"})
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_contract"})
     */
    private $endDate;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_contract"})
     */
    private $amounts;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_contract"})
     */
    private $iva;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_contract"})
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract", inversedBy="bills")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_contract"})
     */
    private $contractNumber;

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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
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
