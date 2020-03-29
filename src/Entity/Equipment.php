<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EquipmentRepository")
 * @ApiFilter(SearchFilter::class, properties={"name": "partial", "type":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"name","type"})
 */
class Equipment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_equipment"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_equipment"})
     */
    private $name;
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_equipment"})
     *
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EquipmentVehicle", mappedBy="equipment")
     */
    private $equipmentVehicles;

    public function __construct()
    {
        $this->equipmentVehicles = new ArrayCollection();
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
     * @return Collection|EquipmentVehicle[]
     */
    public function getEquipmentVehicles(): Collection
    {
        return $this->equipmentVehicles;
    }

    public function addEquipmentVehicle(EquipmentVehicle $equipmentVehicle): self
    {
        if (!$this->equipmentVehicles->contains($equipmentVehicle)) {
            $this->equipmentVehicles[] = $equipmentVehicle;
            $equipmentVehicle->addequipment($this);
        }

        return $this;
    }

    public function removeEquipmentVehicle(EquipmentVehicle $equipmentVehicle): self
    {
        if ($this->equipmentVehicles->contains($equipmentVehicle)) {
            $this->equipmentVehicles->removeElement($equipmentVehicle);
            $equipmentVehicle->removeequipment($this);
        }

        return $this;
    }


}
