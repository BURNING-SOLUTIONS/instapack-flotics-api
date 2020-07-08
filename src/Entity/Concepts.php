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
 *  @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ConceptsRepository")
 * @UniqueEntity("concept")
 * @ApiFilter(SearchFilter::class, properties={"concept": "partial"})
 * @ApiFilter(OrderFilter::class, properties={"id", "concept"})
 */
class Concepts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_concepts"})
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_concepts"})
     */
    private $concept;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clauses", mappedBy="concept")
     *
     */
    private $clauses;



    public function __construct()
    {
        $this->clauses = new ArrayCollection();
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



    /**
     * @return Collection|Clauses[]
     */
    public function getClauses(): Collection
    {
        return $this->clauses;
    }

    public function addClause(Clauses $clause): self
    {
        if (!$this->clauses->contains($clause)) {
            $this->clauses[] = $clause;
            $clause->setConcept($this);
        }

        return $this;
    }

    public function removeClause(Clauses $clause): self
    {
        if ($this->clauses->contains($clause)) {
            $this->clauses->removeElement($clause);
            // set the owning side to null (unless already changed)
            if ($clause->getConcept() === $this) {
                $clause->setConcept(null);
            }
        }

        return $this;
    }



}
