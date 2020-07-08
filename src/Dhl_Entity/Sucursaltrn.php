<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursaltrn
 *
 * @ORM\Table(name="SucursalTrn")
 * @ORM\Entity
 */
class Sucursaltrn
{
    /**
     * @var string
     *
     * @ORM\Column(name="Fichero_Str", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ficheroStr;

    /**
     * @var int
     *
     * @ORM\Column(name="Cont_Str", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $contStr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Opera_Str", type="string", length=1, nullable=true)
     */
    private $operaStr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Datos_Str", type="string", length=1500, nullable=true)
     */
    private $datosStr;

    public function getFicheroStr(): ?string
    {
        return $this->ficheroStr;
    }

    public function getContStr(): ?int
    {
        return $this->contStr;
    }

    public function getOperaStr(): ?string
    {
        return $this->operaStr;
    }

    public function setOperaStr(?string $operaStr): self
    {
        $this->operaStr = $operaStr;

        return $this;
    }

    public function getDatosStr(): ?string
    {
        return $this->datosStr;
    }

    public function setDatosStr(?string $datosStr): self
    {
        $this->datosStr = $datosStr;

        return $this;
    }


}
