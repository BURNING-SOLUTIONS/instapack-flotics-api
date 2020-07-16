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
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *   normalizationContext={"groups"={"history_workshop","get_workshop"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRepository")
 * @UniqueEntity("code")
 * @UniqueEntity("name")
 * @ApiFilter(SearchFilter::class, properties={"id":"partial","code":"partial","name":"partial","mainPhone":"partial","mainEmail":"partial","secondPhone":"partial","secondEmail":"partial","mainContact":"partial","services":"partial","totalBilled":"partial","avgRate":"partial","active":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"id","code","name","mainPhone","mainEmail","secondPhone","secondEmail","mainContact","services","totalBilled","avgRate","active","createdAt"})
 */
class Workshop
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"history_workshop","get_workshop"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     *@Groups({"get_workshop"})
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"history_workshop","get_workshop"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     * @Assert\Regex(
     *               pattern="/^((\+34)|(34))?[6|7|8|9][0-9]{8}$/", message="Your phone is invalid")
     */
    private $mainPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     * @Assert\Email(
     *     message = "The email is not a valid.",
     *     checkMX = true
     * )
     */
    private $mainEmail;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     */
    private $mainContact;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_workshop"})
     */
    private $mainDirection;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     * @Assert\Regex(
     *               pattern="/^((\+34)|(34))?[6|7|8|9][0-9]{8}$/", message="Your phone is invalid")
     */

    private $secondPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     * @Assert\Email(
     *     message = "The email is not a valid.",
     *     checkMX = true
     * )
     */
    private $secondEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     */
    private $secondContact;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_workshop"})
     */
    private $secondDirection;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"get_workshop"})
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_workshop"})
     */
    private $active;

    /**
     * @ORM\Column(type="decimal", precision=2, scale=1, nullable=true)
     * @Groups({"get_workshop"})
     */
    private $avgRate;

    /**
     * @ORM\Column(type="decimal", precision=12, scale=2, nullable=true)
     * @Groups({"get_workshop"})
     */
    private $totalBilled;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\WorkshopServices", inversedBy="workshops")
     * @ApiFilter(SearchFilter::class, properties={"services.name":"partial" })
     * @Groups({"get_workshop"})
     */
    private $services;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleWorkshop", mappedBy="workshop")
     * @ApiFilter(SearchFilter::class, properties={"vehicleWorkshops.vehicle":"partial" })
     * @Groups({"get_workshop"})
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
