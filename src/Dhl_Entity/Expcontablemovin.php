<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expcontablemovin
 *
 * @ORM\Table(name="ExpContableMovin")
 * @ORM\Entity
 */
class Expcontablemovin
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Emr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Emr", type="datetime", nullable=true)
     */
    private $fechaEmr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumFac_Emr", type="integer", nullable=true)
     */
    private $numfacEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SerieFac_Emr", type="string", length=8, nullable=true)
     */
    private $seriefacEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Operacion_Emr", type="string", length=8, nullable=true)
     */
    private $operacionEmr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Emr", type="datetime", nullable=true)
     */
    private $fvtoEmr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpVto_Emr", type="float", precision=53, scale=0, nullable=true)
     */
    private $impvtoEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FPago_Emr", type="string", length=8, nullable=true)
     */
    private $fpagoEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DocPago_Emr", type="string", length=8, nullable=true)
     */
    private $docpagoEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion_Emr", type="string", length=100, nullable=true)
     */
    private $descripcionEmr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpNeto_Emr", type="float", precision=53, scale=0, nullable=true)
     */
    private $impnetoEmr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Emr", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseEmr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorIva_Emr", type="float", precision=24, scale=0, nullable=true)
     */
    private $porivaEmr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="BaseExenta_Emr", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseexentaEmr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cta_Emr", type="string", length=12, nullable=true)
     */
    private $ctaEmr;

    public function getIdEmr(): ?int
    {
        return $this->idEmr;
    }

    public function getFechaEmr(): ?\DateTimeInterface
    {
        return $this->fechaEmr;
    }

    public function setFechaEmr(?\DateTimeInterface $fechaEmr): self
    {
        $this->fechaEmr = $fechaEmr;

        return $this;
    }

    public function getNumfacEmr(): ?int
    {
        return $this->numfacEmr;
    }

    public function setNumfacEmr(?int $numfacEmr): self
    {
        $this->numfacEmr = $numfacEmr;

        return $this;
    }

    public function getSeriefacEmr(): ?string
    {
        return $this->seriefacEmr;
    }

    public function setSeriefacEmr(?string $seriefacEmr): self
    {
        $this->seriefacEmr = $seriefacEmr;

        return $this;
    }

    public function getOperacionEmr(): ?string
    {
        return $this->operacionEmr;
    }

    public function setOperacionEmr(?string $operacionEmr): self
    {
        $this->operacionEmr = $operacionEmr;

        return $this;
    }

    public function getFvtoEmr(): ?\DateTimeInterface
    {
        return $this->fvtoEmr;
    }

    public function setFvtoEmr(?\DateTimeInterface $fvtoEmr): self
    {
        $this->fvtoEmr = $fvtoEmr;

        return $this;
    }

    public function getImpvtoEmr(): ?float
    {
        return $this->impvtoEmr;
    }

    public function setImpvtoEmr(?float $impvtoEmr): self
    {
        $this->impvtoEmr = $impvtoEmr;

        return $this;
    }

    public function getFpagoEmr(): ?string
    {
        return $this->fpagoEmr;
    }

    public function setFpagoEmr(?string $fpagoEmr): self
    {
        $this->fpagoEmr = $fpagoEmr;

        return $this;
    }

    public function getDocpagoEmr(): ?string
    {
        return $this->docpagoEmr;
    }

    public function setDocpagoEmr(?string $docpagoEmr): self
    {
        $this->docpagoEmr = $docpagoEmr;

        return $this;
    }

    public function getDescripcionEmr(): ?string
    {
        return $this->descripcionEmr;
    }

    public function setDescripcionEmr(?string $descripcionEmr): self
    {
        $this->descripcionEmr = $descripcionEmr;

        return $this;
    }

    public function getImpnetoEmr(): ?float
    {
        return $this->impnetoEmr;
    }

    public function setImpnetoEmr(?float $impnetoEmr): self
    {
        $this->impnetoEmr = $impnetoEmr;

        return $this;
    }

    public function getBaseEmr(): ?float
    {
        return $this->baseEmr;
    }

    public function setBaseEmr(?float $baseEmr): self
    {
        $this->baseEmr = $baseEmr;

        return $this;
    }

    public function getPorivaEmr(): ?float
    {
        return $this->porivaEmr;
    }

    public function setPorivaEmr(?float $porivaEmr): self
    {
        $this->porivaEmr = $porivaEmr;

        return $this;
    }

    public function getBaseexentaEmr(): ?float
    {
        return $this->baseexentaEmr;
    }

    public function setBaseexentaEmr(?float $baseexentaEmr): self
    {
        $this->baseexentaEmr = $baseexentaEmr;

        return $this;
    }

    public function getCtaEmr(): ?string
    {
        return $this->ctaEmr;
    }

    public function setCtaEmr(?string $ctaEmr): self
    {
        $this->ctaEmr = $ctaEmr;

        return $this;
    }


}
