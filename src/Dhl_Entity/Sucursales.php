<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursales
 *
 * @ORM\Table(name="sucursales")
 * @ORM\Entity
 */
class Sucursales
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_suc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codSuc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Suc", type="string", length=35, nullable=true)
     */
    private $nomSuc;

    public function getCodSuc(): ?int
    {
        return $this->codSuc;
    }

    public function getNomSuc(): ?string
    {
        return $this->nomSuc;
    }

    public function setNomSuc(?string $nomSuc): self
    {
        $this->nomSuc = $nomSuc;

        return $this;
    }


}
