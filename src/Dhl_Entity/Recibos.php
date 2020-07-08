<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recibos
 *
 * @ORM\Table(name="recibos")
 * @ORM\Entity
 */
class Recibos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalRec = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Rec", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empRec = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Rec", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabRec;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Rec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numRec = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Rec", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linRec = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Rec", type="integer", nullable=true)
     */
    private $cliRec = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Rec", type="string", length=12, nullable=true)
     */
    private $depRec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Rec", type="datetime", nullable=true)
     */
    private $fecRec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Rec", type="datetime", nullable=true)
     */
    private $fvtoRec;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Rec", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalRec = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Rec", type="smallint", nullable=true)
     */
    private $fpaRec = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Rec", type="smallint", nullable=true)
     */
    private $bcoRec = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Rec", type="smallint", nullable=true)
     */
    private $ageRec = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Rec", type="smallint", nullable=true)
     */
    private $dcRec = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Rec", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaRec = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Bloqueo_Rec", type="boolean", nullable=true)
     */
    private $bloqueoRec = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa_Rec", type="string", length=1, nullable=true)
     */
    private $impalfaRec;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa1_Rec", type="string", length=1, nullable=true)
     */
    private $impalfa1Rec;

    /**
     * @var int
     *
     * @ORM\Column(name="Any_Rec", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anyRec = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Rec", type="string", length=4, nullable=true)
     */
    private $ibanRec;

    public function getSucursalRec(): ?int
    {
        return $this->sucursalRec;
    }

    public function getEmpRec(): ?int
    {
        return $this->empRec;
    }

    public function getFabRec(): ?string
    {
        return $this->fabRec;
    }

    public function getNumRec(): ?int
    {
        return $this->numRec;
    }

    public function getLinRec(): ?int
    {
        return $this->linRec;
    }

    public function getCliRec(): ?int
    {
        return $this->cliRec;
    }

    public function setCliRec(?int $cliRec): self
    {
        $this->cliRec = $cliRec;

        return $this;
    }

    public function getDepRec(): ?string
    {
        return $this->depRec;
    }

    public function setDepRec(?string $depRec): self
    {
        $this->depRec = $depRec;

        return $this;
    }

    public function getFecRec(): ?\DateTimeInterface
    {
        return $this->fecRec;
    }

    public function setFecRec(?\DateTimeInterface $fecRec): self
    {
        $this->fecRec = $fecRec;

        return $this;
    }

    public function getFvtoRec(): ?\DateTimeInterface
    {
        return $this->fvtoRec;
    }

    public function setFvtoRec(?\DateTimeInterface $fvtoRec): self
    {
        $this->fvtoRec = $fvtoRec;

        return $this;
    }

    public function getTotalRec(): ?float
    {
        return $this->totalRec;
    }

    public function setTotalRec(?float $totalRec): self
    {
        $this->totalRec = $totalRec;

        return $this;
    }

    public function getFpaRec(): ?int
    {
        return $this->fpaRec;
    }

    public function setFpaRec(?int $fpaRec): self
    {
        $this->fpaRec = $fpaRec;

        return $this;
    }

    public function getBcoRec(): ?int
    {
        return $this->bcoRec;
    }

    public function setBcoRec(?int $bcoRec): self
    {
        $this->bcoRec = $bcoRec;

        return $this;
    }

    public function getAgeRec(): ?int
    {
        return $this->ageRec;
    }

    public function setAgeRec(?int $ageRec): self
    {
        $this->ageRec = $ageRec;

        return $this;
    }

    public function getDcRec(): ?int
    {
        return $this->dcRec;
    }

    public function setDcRec(?int $dcRec): self
    {
        $this->dcRec = $dcRec;

        return $this;
    }

    public function getCtaRec(): ?float
    {
        return $this->ctaRec;
    }

    public function setCtaRec(?float $ctaRec): self
    {
        $this->ctaRec = $ctaRec;

        return $this;
    }

    public function getBloqueoRec(): ?bool
    {
        return $this->bloqueoRec;
    }

    public function setBloqueoRec(?bool $bloqueoRec): self
    {
        $this->bloqueoRec = $bloqueoRec;

        return $this;
    }

    public function getImpalfaRec(): ?string
    {
        return $this->impalfaRec;
    }

    public function setImpalfaRec(?string $impalfaRec): self
    {
        $this->impalfaRec = $impalfaRec;

        return $this;
    }

    public function getImpalfa1Rec(): ?string
    {
        return $this->impalfa1Rec;
    }

    public function setImpalfa1Rec(?string $impalfa1Rec): self
    {
        $this->impalfa1Rec = $impalfa1Rec;

        return $this;
    }

    public function getAnyRec(): ?int
    {
        return $this->anyRec;
    }

    public function getIbanRec(): ?string
    {
        return $this->ibanRec;
    }

    public function setIbanRec(?string $ibanRec): self
    {
        $this->ibanRec = $ibanRec;

        return $this;
    }


}
