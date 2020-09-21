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
 * @ApiResource(normalizationContext={"groups"={"get_rates"}})
 * @ORM\Entity(repositoryClass="App\Repository\RatesRepository")
 * @ApiFilter(SearchFilter::class, properties={"value":"partial","startDay":"partial","endDay":"partial","after_km":"partial","vehicleModel":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"id","startDay", "endDay","after_km","value","agency","concept","vehicle","$vehicleModel"})
 * @ApiFilter(DateFilter::class, properties={"startDate": DateFilter::EXCLUDE_NULL, "endDate": DateFilter::EXCLUDE_NULL})
 *
 */
class Rates
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_rates"})
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_rates"})
     */
    private $startDay;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_rates"})
     */
    private $endDay;
    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"get_rates"})
     *
     */
    private $after_km;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Groups({"get_rates"})
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="rates")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_rates"})
     * @ApiFilter(SearchFilter::class, properties={"agency.name":"partial" })
     */
    private $agency;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Concepts", inversedBy="rates")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_rates"})
     * @ApiFilter(SearchFilter::class, properties={"concept.concept":"partial" })
     */
    private $concept;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VehicleType")
     * @ORM\JoinColumn(nullable=true)
     * @Groups({"get_rates"})
     * @ApiFilter(SearchFilter::class, properties={"vehicleType.type":"partial" })
     */
    private $vehicleType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_rates"})
     */
    private $vehicleModel;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_rates"})
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="rates")
     */
    private $vehicle;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAfterKm(): ?int
    {
        return $this->after_km;
    }

    public function setAfterKm(?int $after_km): self
    {
        $this->after_km = $after_km;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getAgency(): ?RentalAgency
    {
        return $this->agency;
    }

    public function setAgency(?RentalAgency $agency): self
    {
        $this->agency = $agency;

        return $this;
    }

    public function getConcept(): ?Concepts
    {
        return $this->concept;
    }

    public function setConcept(?Concepts $concept): self
    {
        $this->concept = $concept;

        return $this;
    }

    public function getVehicleType(): ?VehicleType
    {
        return $this->vehicleType;
    }

    public function setVehicleType(?VehicleType $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    public function getVehicleModel(): ?string
    {
        return $this->vehicleModel;
    }

    public function setVehicleModel(string $vehicleModel): self
    {
        $this->vehicleModel = $vehicleModel;

        return $this;
    }

    public function getStartDay(): ?int
    {
        return $this->startDay;
    }

    public function setStartDay(?int $startDay): self
    {
        $this->startDay = $startDay;

        return $this;
    }

    public function getEndDay(): ?int
    {
        return $this->endDay;
    }

    public function setEndDay(?int $endDay): self
    {
        $this->endDay = $endDay;

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

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}
