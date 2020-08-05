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
 *  normalizationContext={
 *      "groups"={"get_workshop"}
 *  }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopServicesRepository")
 * @UniqueEntity("name")
 * @ApiFilter(SearchFilter::class, properties={"name": "partial", "workshops": "partial"})
 * @ApiFilter(OrderFilter::class, properties={"id","name","workshops"})
 */
class WorkshopServices
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_workshop"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_workshop"})
     * @Groups({"get_workshop"})
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Workshop", mappedBy="services")
     *
     */
    private $workshops;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\VehicleWorkshop", mappedBy="services")
     */
    private $vehicleWorkshops;

    public function __construct()
    {
        $this->workshops = new ArrayCollection();
        $this->vehicleWorkshops = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection|Workshop[]
     */
    public function getWorkshops(): Collection
    {
        return $this->workshops;
    }

    public function addWorkshop(Workshop $workshop): self
    {
        if (!$this->workshops->contains($workshop)) {
            $this->workshops[] = $workshop;
            $workshop->addService($this);
        }

        return $this;
    }

    public function removeWorkshop(Workshop $workshop): self
    {
        if ($this->workshops->contains($workshop)) {
            $this->workshops->removeElement($workshop);
            $workshop->removeService($this);
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
            $vehicleWorkshop->addService($this);
        }

        return $this;
    }

    public function removeVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if ($this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops->removeElement($vehicleWorkshop);
            $vehicleWorkshop->removeService($this);
        }

        return $this;
    }
}
