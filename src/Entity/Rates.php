<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\RatesRepository")
 * @ApiFilter(SearchFilter::class, properties={"start_day": "partial","end_day": "partial","after_km": "partial","value":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"id","start_day", "end_day","after_km","value","agency","concept","vehicle"})
 */
class Rates
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $start_day;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $end_day;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $after_km;

    /**
     * @ORM\Column(type="integer")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="rates")
     * @ORM\JoinColumn(nullable=false)
     * @ApiFilter(SearchFilter::class, properties={"vehicle.registration":"partial" })
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RentalAgency", inversedBy="rates")
     * @ORM\JoinColumn(nullable=false)
     * @ApiFilter(SearchFilter::class, properties={"agency.name":"partial" })
     */
    private $agency;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Concepts", inversedBy="rates")
     * @ORM\JoinColumn(nullable=false)
     * @ApiFilter(SearchFilter::class, properties={"concept.concept":"partial" })
     */
    private $concept;





    public function __construct()
    {
        $this->vehicle = new ArrayCollection();
        $this->agency = new ArrayCollection();
        $this->concept = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDay(): ?int
    {
        return $this->start_day;
    }

    public function setStartDay(?int $start_day): self
    {
        $this->start_day = $start_day;

        return $this;
    }

    public function getEndDay(): ?int
    {
        return $this->end_day;
    }

    public function setEndDay(?int $end_day): self
    {
        $this->end_day = $end_day;

        return $this;
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

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

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





}
