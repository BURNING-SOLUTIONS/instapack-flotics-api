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
 * @ORM\Entity(repositoryClass="App\Repository\RentalAgencyRepository")
 * @UniqueEntity("code")
 * @UniqueEntity("cif")
 * @ApiFilter(SearchFilter::class, properties={"code": "partial", "cif": "partial", "name": "partial", "province":"partial","population":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"code", "cif","name","province","population","contracts","vehicles"})
 *
 */
class RentalAgency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Regex(pattern="/^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/", message="Your Cif is invalid")
     */
    private $cif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bussinesAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fiscalAddress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $population;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $observations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contract", mappedBy="rentalAgency")
     */
    private $contracts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicle", mappedBy="rentalAgency")
     */
    private $vehicles;

    public function __construct()
    {
        $this->contracts = new ArrayCollection();
        $this->vehicles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }



    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(string $cif): self
    {
        $this->cif = $cif;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBussinesAddress(): ?string
    {
        return $this->bussinesAddress;
    }

    public function setBussinesAddress(string $bussinesAddress): self
    {
        $this->bussinesAddress = $bussinesAddress;

        return $this;
    }

    public function getFiscalAddress(): ?string
    {
        return $this->fiscalAddress;
    }

    public function setFiscalAddress(string $fiscalAddress): self
    {
        $this->fiscalAddress = $fiscalAddress;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(string $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getPopulation(): ?string
    {
        return $this->population;
    }

    public function setPopulation(string $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * @return Collection|Contract[]
     */
    public function getContracts(): Collection
    {
        return $this->contracts;
    }

    public function addContract(Contract $contract): self
    {
        if (!$this->contracts->contains($contract)) {
            $this->contracts[] = $contract;
            $contract->setRentalAgency($this);
        }

        return $this;
    }

    public function removeContract(Contract $contract): self
    {
        if ($this->contracts->contains($contract)) {
            $this->contracts->removeElement($contract);
            // set the owning side to null (unless already changed)
            if ($contract->getRentalAgency() === $this) {
                $contract->setRentalAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Vehicle[]
     */
    public function getVehicles(): Collection
    {
        return $this->vehicles;
    }

    public function addVehicle(Vehicle $vehicle): self
    {
        if (!$this->vehicles->contains($vehicle)) {
            $this->vehicles[] = $vehicle;
            $vehicle->setRentalAgency($this);
        }

        return $this;
    }

    public function removeVehicle(Vehicle $vehicle): self
    {
        if ($this->vehicles->contains($vehicle)) {
            $this->vehicles->removeElement($vehicle);
            // set the owning side to null (unless already changed)
            if ($vehicle->getRentalAgency() === $this) {
                $vehicle->setRentalAgency(null);
            }
        }

        return $this;
    }
}
