<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Textos
 *
 * @ORM\Table(name="textos")
 * @ORM\Entity
 */
class Textos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tex", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codTex;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Tex", type="string", length=15, nullable=true)
     */
    private $nomTex;

    public function getCodTex(): ?string
    {
        return $this->codTex;
    }

    public function getNomTex(): ?string
    {
        return $this->nomTex;
    }

    public function setNomTex(?string $nomTex): self
    {
        $this->nomTex = $nomTex;

        return $this;
    }


}
