<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formpag
 *
 * @ORM\Table(name="formpag")
 * @ORM\Entity
 */
class Formpag
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Fpag", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codFpag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conc_Fpag", type="string", length=25, nullable=true)
     */
    private $concFpag;

    /**
     * @var bool
     *
     * @ORM\Column(name="Nego_Fpag", type="boolean", nullable=false)
     */
    private $negoFpag = '0';

    public function getCodFpag(): ?int
    {
        return $this->codFpag;
    }

    public function getConcFpag(): ?string
    {
        return $this->concFpag;
    }

    public function setConcFpag(?string $concFpag): self
    {
        $this->concFpag = $concFpag;

        return $this;
    }

    public function getNegoFpag(): ?bool
    {
        return $this->negoFpag;
    }

    public function setNegoFpag(bool $negoFpag): self
    {
        $this->negoFpag = $negoFpag;

        return $this;
    }


}
