<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grupos
 *
 * @ORM\Table(name="grupos")
 * @ORM\Entity
 */
class Grupos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nom_Gru", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nomGru;

    /**
     * @var string
     *
     * @ORM\Column(name="Equipo_Gru", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $equipoGru;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Gru", type="string", length=50, nullable=true)
     */
    private $desGru;

    public function getNomGru(): ?string
    {
        return $this->nomGru;
    }

    public function getEquipoGru(): ?string
    {
        return $this->equipoGru;
    }

    public function getDesGru(): ?string
    {
        return $this->desGru;
    }

    public function setDesGru(?string $desGru): self
    {
        $this->desGru = $desGru;

        return $this;
    }


}
