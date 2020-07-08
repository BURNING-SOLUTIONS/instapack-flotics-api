<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"get_contract" , "get_concepts"}})
 * @ORM\Entity(repositoryClass="App\Repository\ClausesRepository")
 * @ApiFilter(SearchFilter::class, properties={"value": "partial", "contract": "partial", "concept": "partial"})
 * @ApiFilter(OrderFilter::class, properties={"id", "value"})
 */
class Clauses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_contract","get_concepts","get_clauses"})
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     * @Groups({"get_contract","get_concepts","get_clauses"})
     */
    private $value;
    /**
     * @ORM\Column(type="integer")
     * @Groups({"get_contract","get_concepts","get_clauses"})
     */
    private $billperiod;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract", inversedBy="clauses")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_contract"})
     * @ApiFilter(SearchFilter::class, properties={"contract.number":"partial" })
     */
    private $contract;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Concepts", inversedBy="clauses")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_contract","get_clauses"})
     * @ApiFilter(SearchFilter::class, properties={"concept.concept":"partial" })
     */
    private $concept;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }



    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    public function setContract(?Contract $contract): self
    {
        $this->contract = $contract;

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

    /**
     * @return mixed
     */
    public function getBillperiod()
    {
        return $this->billperiod;
    }

    /**
     * @param mixed $billperiod
     */
    public function setBillperiod($billperiod): void
    {
        $this->billperiod = $billperiod;
    }

}
