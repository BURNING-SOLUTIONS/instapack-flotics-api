<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 *   normalizationContext={"groups"={"history_workshop"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRepository")
 * @UniqueEntity("code")
 * @UniqueEntity("name")
 */
class Workshop
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"history_workshop"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"history_workshop"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mainPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mainEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mainContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mainDirection;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secondDirection;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=1, nullable=true)
     */
    private $avgRate;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     */
    private $totalBilled;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\WorkshopServices", inversedBy="workshops")
     */
    private $services;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleWorkshop", mappedBy="workshop")
     */
    private $vehicleWorkshops;

    public function __construct()
    {
        $this->services = new ArrayCollection();
        $this->vehicleWorkshops = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

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

    public function getMainPhone(): ?string
    {
        return $this->mainPhone;
    }

    public function setMainPhone(?string $mainPhone): self
    {
        $this->mainPhone = $mainPhone;

        return $this;
    }

    public function getMainEmail(): ?string
    {
        return $this->mainEmail;
    }

    public function setMainEmail(?string $mainEmail): self
    {
        $this->mainEmail = $mainEmail;

        return $this;
    }

    public function getSecondPhone(): ?string
    {
        return $this->secondPhone;
    }

    public function setSecondPhone(?string $secondPhone): self
    {
        $this->secondPhone = $secondPhone;

        return $this;
    }

    public function getSecondEmail(): ?string
    {
        return $this->secondEmail;
    }

    public function setSecondEmail(?string $secondEmail): self
    {
        $this->secondEmail = $secondEmail;

        return $this;
    }

    public function getMainContact(): ?string
    {
        return $this->mainContact;
    }

    public function setMainContact(?string $mainContact): self
    {
        $this->mainContact = $mainContact;

        return $this;
    }

    public function getSecondContact(): ?string
    {
        return $this->secondContact;
    }

    public function setSecondContact(?string $secondContact): self
    {
        $this->secondContact = $secondContact;

        return $this;
    }

    public function getMainDirection(): ?string
    {
        return $this->mainDirection;
    }

    public function setMainDirection(string $mainDirection): self
    {
        $this->mainDirection = $mainDirection;

        return $this;
    }

    public function getSecondDirection(): ?string
    {
        return $this->secondDirection;
    }

    public function setSecondDirection(?string $secondDirection): self
    {
        $this->secondDirection = $secondDirection;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getAvgRate(): ?string
    {
        return $this->avgRate;
    }

    public function setAvgRate(?string $avgRate): self
    {
        $this->avgRate = $avgRate;

        return $this;
    }

    public function getTotalBilled(): ?string
    {
        return $this->totalBilled;
    }

    public function setTotalBilled(?string $totalBilled): self
    {
        $this->totalBilled = $totalBilled;

        return $this;
    }

    /**
     * @return Collection|WorkshopServices[]
     */
    public function getServices(): Collection
    {
        return $this->services;
    }

    public function addService(WorkshopServices $service): self
    {
        if (!$this->services->contains($service)) {
            $this->services[] = $service;
        }

        return $this;
    }

    public function removeService(WorkshopServices $service): self
    {
        if ($this->services->contains($service)) {
            $this->services->removeElement($service);
        }

        return $this;
    }

    /**
     * @return Collection|VehicleWorkshop[]
     */
    public function getVehicleWorkshops(): Collection
    {
        return $this->vehicleWorkshops;
    }

    public function addVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if (!$this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops[] = $vehicleWorkshop;
            $vehicleWorkshop->setWorkshop($this);
        }

        return $this;
    }

    public function removeVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if ($this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops->removeElement($vehicleWorkshop);
            // set the owning side to null (unless already changed)
            if ($vehicleWorkshop->getWorkshop() === $this) {
                $vehicleWorkshop->setWorkshop(null);
            }
        }

        return $this;
    }
}