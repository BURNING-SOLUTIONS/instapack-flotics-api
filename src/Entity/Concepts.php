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
 * @ApiResource(normalizationContext={"groups"={"get_concepts","get_rates"}})
 * @ORM\Entity(repositoryClass="App\Repository\ConceptsRepository")
 * @UniqueEntity("concept")
 * @UniqueEntity("code")
 * @ApiFilter(SearchFilter::class, properties={"concept": "partial"})
 * @ApiFilter(OrderFilter::class, properties={"id", "concept"})
 */
class Concepts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_concepts","get_rates"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_concepts","get_rates"})
     */
    private $concept;

    /**
     * @ORM\Column(type="string", length=10)
     * @Groups({"get_concepts","get_rates"})
     */
    private $code;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"get_concepts","get_rates"})
     */
    private $allowRangeDays;

    public function __construct()
    {
        $this->allowRangeDays = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param mixed $concept
     */
    public function setConcept($concept): void
    {
        $this->concept = $concept;
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

    public function getAllowRangeDays(): ?bool
    {
        return $this->allowRangeDays;
    }

    public function setAllowRangeDays(bool $allowRangeDays): self
    {
        $this->allowRangeDays = $allowRangeDays;

        return $this;
    }


}
