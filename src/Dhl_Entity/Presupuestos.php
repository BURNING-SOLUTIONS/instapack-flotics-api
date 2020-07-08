<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presupuestos
 *
 * @ORM\Table(name="Presupuestos")
 * @ORM\Entity
 */
class Presupuestos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cfp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCfp;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cfp", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCfp;

    /**
     * @var string
     *
     * @ORM\Column(name="For_Cfp", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $forCfp;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Cfp", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Pag_Cfp", type="smallint", nullable=true)
     */
    private $pagCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Cfp", type="string", length=5, nullable=true)
     */
    private $tipoCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Cfp", type="string", length=1024, nullable=true)
     */
    private $nomCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ord_Cfp", type="smallint", nullable=true)
     */
    private $ordCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Cfp", type="string", length=5, nullable=true)
     */
    private $zonCfp;

    /**
     * @var bool
     *
     * @ORM\Column(name="Uni_Cfp", type="boolean", nullable=false)
     */
    private $uniCfp;

    /**
     * @var int
     *
     * @ORM\Column(name="Top_Cfp", type="integer", nullable=false)
     */
    private $topCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Left_Cfp", type="integer", nullable=true)
     */
    private $leftCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ancho_Cfp", type="integer", nullable=true)
     */
    private $anchoCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Alto_Cfp", type="integer", nullable=true)
     */
    private $altoCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Cfp", type="string", length=1, nullable=true)
     */
    private $tipCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TamaÃ±o_Cfp", type="string", length=2, nullable=true)
     */
    private $tamaã±oCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda_Cfp", type="string", length=10, nullable=true)
     */
    private $monedaCfp;

    /**
     * @var bool
     *
     * @ORM\Column(name="Mascara_Cfp", type="boolean", nullable=false)
     */
    private $mascaraCfp;

    /**
     * @var bool
     *
     * @ORM\Column(name="Negrita_Cfp", type="boolean", nullable=false)
     */
    private $negritaCfp;

    /**
     * @var bool
     *
     * @ORM\Column(name="Cursiva_Cfp", type="boolean", nullable=false)
     */
    private $cursivaCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Color_Cfp", type="integer", nullable=true)
     */
    private $colorCfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="X1_Cfp", type="integer", nullable=true)
     */
    private $x1Cfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="X2_Cfp", type="integer", nullable=true)
     */
    private $x2Cfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Y1_Cfp", type="integer", nullable=true)
     */
    private $y1Cfp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Y2_Cfp", type="integer", nullable=true)
     */
    private $y2Cfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fuente_Cfp", type="string", length=50, nullable=true)
     */
    private $fuenteCfp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Agrupado_Cfp", type="string", length=20, nullable=true)
     */
    private $agrupadoCfp;

    public function getSucursalCfp(): ?int
    {
        return $this->sucursalCfp;
    }

    public function getEmpCfp(): ?int
    {
        return $this->empCfp;
    }

    public function getForCfp(): ?string
    {
        return $this->forCfp;
    }

    public function getNumCfp(): ?int
    {
        return $this->numCfp;
    }

    public function getPagCfp(): ?int
    {
        return $this->pagCfp;
    }

    public function setPagCfp(?int $pagCfp): self
    {
        $this->pagCfp = $pagCfp;

        return $this;
    }

    public function getTipoCfp(): ?string
    {
        return $this->tipoCfp;
    }

    public function setTipoCfp(?string $tipoCfp): self
    {
        $this->tipoCfp = $tipoCfp;

        return $this;
    }

    public function getNomCfp(): ?string
    {
        return $this->nomCfp;
    }

    public function setNomCfp(?string $nomCfp): self
    {
        $this->nomCfp = $nomCfp;

        return $this;
    }

    public function getOrdCfp(): ?int
    {
        return $this->ordCfp;
    }

    public function setOrdCfp(?int $ordCfp): self
    {
        $this->ordCfp = $ordCfp;

        return $this;
    }

    public function getZonCfp(): ?string
    {
        return $this->zonCfp;
    }

    public function setZonCfp(?string $zonCfp): self
    {
        $this->zonCfp = $zonCfp;

        return $this;
    }

    public function getUniCfp(): ?bool
    {
        return $this->uniCfp;
    }

    public function setUniCfp(bool $uniCfp): self
    {
        $this->uniCfp = $uniCfp;

        return $this;
    }

    public function getTopCfp(): ?int
    {
        return $this->topCfp;
    }

    public function setTopCfp(int $topCfp): self
    {
        $this->topCfp = $topCfp;

        return $this;
    }

    public function getLeftCfp(): ?int
    {
        return $this->leftCfp;
    }

    public function setLeftCfp(?int $leftCfp): self
    {
        $this->leftCfp = $leftCfp;

        return $this;
    }

    public function getAnchoCfp(): ?int
    {
        return $this->anchoCfp;
    }

    public function setAnchoCfp(?int $anchoCfp): self
    {
        $this->anchoCfp = $anchoCfp;

        return $this;
    }

    public function getAltoCfp(): ?int
    {
        return $this->altoCfp;
    }

    public function setAltoCfp(?int $altoCfp): self
    {
        $this->altoCfp = $altoCfp;

        return $this;
    }

    public function getTipCfp(): ?string
    {
        return $this->tipCfp;
    }

    public function setTipCfp(?string $tipCfp): self
    {
        $this->tipCfp = $tipCfp;

        return $this;
    }

    public function getTamaã±oCfp(): ?string
    {
        return $this->tamaã±oCfp;
    }

    public function setTamaã±oCfp(?string $tamaã±oCfp): self
    {
        $this->tamaã±oCfp = $tamaã±oCfp;

        return $this;
    }

    public function getMonedaCfp(): ?string
    {
        return $this->monedaCfp;
    }

    public function setMonedaCfp(?string $monedaCfp): self
    {
        $this->monedaCfp = $monedaCfp;

        return $this;
    }

    public function getMascaraCfp(): ?bool
    {
        return $this->mascaraCfp;
    }

    public function setMascaraCfp(bool $mascaraCfp): self
    {
        $this->mascaraCfp = $mascaraCfp;

        return $this;
    }

    public function getNegritaCfp(): ?bool
    {
        return $this->negritaCfp;
    }

    public function setNegritaCfp(bool $negritaCfp): self
    {
        $this->negritaCfp = $negritaCfp;

        return $this;
    }

    public function getCursivaCfp(): ?bool
    {
        return $this->cursivaCfp;
    }

    public function setCursivaCfp(bool $cursivaCfp): self
    {
        $this->cursivaCfp = $cursivaCfp;

        return $this;
    }

    public function getColorCfp(): ?int
    {
        return $this->colorCfp;
    }

    public function setColorCfp(?int $colorCfp): self
    {
        $this->colorCfp = $colorCfp;

        return $this;
    }

    public function getX1Cfp(): ?int
    {
        return $this->x1Cfp;
    }

    public function setX1Cfp(?int $x1Cfp): self
    {
        $this->x1Cfp = $x1Cfp;

        return $this;
    }

    public function getX2Cfp(): ?int
    {
        return $this->x2Cfp;
    }

    public function setX2Cfp(?int $x2Cfp): self
    {
        $this->x2Cfp = $x2Cfp;

        return $this;
    }

    public function getY1Cfp(): ?int
    {
        return $this->y1Cfp;
    }

    public function setY1Cfp(?int $y1Cfp): self
    {
        $this->y1Cfp = $y1Cfp;

        return $this;
    }

    public function getY2Cfp(): ?int
    {
        return $this->y2Cfp;
    }

    public function setY2Cfp(?int $y2Cfp): self
    {
        $this->y2Cfp = $y2Cfp;

        return $this;
    }

    public function getFuenteCfp(): ?string
    {
        return $this->fuenteCfp;
    }

    public function setFuenteCfp(?string $fuenteCfp): self
    {
        $this->fuenteCfp = $fuenteCfp;

        return $this;
    }

    public function getAgrupadoCfp(): ?string
    {
        return $this->agrupadoCfp;
    }

    public function setAgrupadoCfp(?string $agrupadoCfp): self
    {
        $this->agrupadoCfp = $agrupadoCfp;

        return $this;
    }


}
