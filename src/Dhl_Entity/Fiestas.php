<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiestas
 *
 * @ORM\Table(name="Fiestas")
 * @ORM\Entity
 */
class Fiestas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Fie", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoFie;

    /**
     * @var string
     *
     * @ORM\Column(name="NomDonde_Fie", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nomdondeFie;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDonde_Fie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpdondeFie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fie", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechaFie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="X_Fie", type="integer", nullable=true)
     */
    private $xFie;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Y_Fie", type="integer", nullable=true)
     */
    private $yFie;

    public function getTipoFie(): ?string
    {
        return $this->tipoFie;
    }

    public function getNomdondeFie(): ?string
    {
        return $this->nomdondeFie;
    }

    public function getCdpdondeFie(): ?int
    {
        return $this->cdpdondeFie;
    }

    public function getFechaFie(): ?\DateTimeInterface
    {
        return $this->fechaFie;
    }

    public function getXFie(): ?int
    {
        return $this->xFie;
    }

    public function setXFie(?int $xFie): self
    {
        $this->xFie = $xFie;

        return $this;
    }

    public function getYFie(): ?int
    {
        return $this->yFie;
    }

    public function setYFie(?int $yFie): self
    {
        $this->yFie = $yFie;

        return $this;
    }


}
