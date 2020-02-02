<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 *  @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ConceptsRepository")
 * @ApiFilter(SearchFilter::class, properties={"concepts": "exact"})
 */
class Concepts
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $concepts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Clauses", mappedBy="concept")
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

    public function getConcepts(): ?string
    {
        return $this->concepts;
    }

    public function setConcepts(string $concepts): self
    {
        $this->concepts = $concepts;

        return $this;
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
