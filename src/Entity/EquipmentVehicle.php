<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;

/**
 * @ApiResource(normalizationContext={"groups"={"get_equipment" , "get_vehicle"}})
 * @ORM\Entity(repositoryClass="App\Repository\EquipmentVehicleRepository")
 * @ApiFilter(OrderFilter::class, properties={"id", "value","vehicle","equipment"})
 */
class EquipmentVehicle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Groups({"get_equipment"})
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="equipmentVehicles")
     * @Groups({"get_equipment"})
     * @ApiFilter(SearchFilter::class, properties={"vehicle.registration":"partial" })
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipment", inversedBy="equipmentVehicles")
     * @Groups({"get_equipment"})
     * @ApiFilter(SearchFilter::class, properties={"equipment.name":"partial" })
     */
    private $equipment;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_equipment"})
     * @ApiFilter(SearchFilter::class, properties={"value":"partial" })
     *
     */
    private $value;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function setVehicle($vehicle): EquipmentVehicle
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment): EquipmentVehicle
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): EquipmentVehicle
    {
        $this->value = $value;

        return $this;
    }

}
