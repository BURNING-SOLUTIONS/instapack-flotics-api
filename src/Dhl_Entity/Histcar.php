<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Histcar
 *
 * @ORM\Table(name="histcar")
 * @ORM\Entity
 */
class Histcar
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Hcr", type="boolean", nullable=false)
     */
    private $bajaHcr = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Hcr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalHcr = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Hcr", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empHcr = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecCont_Hcr", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $feccontHcr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HorCont_Hcr", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horcontHcr;

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Hcr", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabHcr;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Hcr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numHcr = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Hcr", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linHcr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Hcr", type="integer", nullable=true)
     */
    private $cliHcr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Hcr", type="string", length=12, nullable=true)
     */
    private $depHcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Situ_Hcr", type="string", length=2, nullable=true)
     */
    private $situHcr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Hcr", type="datetime", nullable=true)
     */
    private $fecHcr;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Hcr", type="datetime", nullable=true)
     */
    private $fvtoHcr;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp_Hcr", type="float", precision=53, scale=0, nullable=true)
     */
    private $impHcr = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecRem_Hcr", type="datetime", nullable=true)
     */
    private $fecremHcr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BcoRem_Hcr", type="smallint", nullable=true)
     */
    private $bcoremHcr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NRem_Hcr", type="integer", nullable=true)
     */
    private $nremHcr = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpIpg_Hcr", type="float", precision=53, scale=0, nullable=true)
     */
    private $impipgHcr = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Gastos_Hcr", type="float", precision=53, scale=0, nullable=true)
     */
    private $gastosHcr = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpCob_Hcr", type="float", precision=53, scale=0, nullable=true)
     */
    private $impcobHcr = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCob_Hcr", type="datetime", nullable=true)
     */
    private $feccobHcr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Hcr", type="smallint", nullable=true)
     */
    private $bcoHcr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Hcr", type="smallint", nullable=true)
     */
    private $ageHcr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Hcr", type="smallint", nullable=true)
     */
    private $dcHcr = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Hcr", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaHcr = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Hcr", type="smallint", nullable=true)
     */
    private $fpaHcr = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_Hcr", type="boolean", nullable=false)
     */
    private $bloqueoHcr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa_Hcr", type="string", length=1, nullable=true)
     */
    private $impalfaHcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa1_Hcr", type="string", length=1, nullable=true)
     */
    private $impalfa1Hcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Hcr", type="string", length=4, nullable=true)
     */
    private $ibanHcr;

    public function getBajaHcr(): ?bool
    {
        return $this->bajaHcr;
    }

    public function setBajaHcr(bool $bajaHcr): self
    {
        $this->bajaHcr = $bajaHcr;

        return $this;
    }

    public function getSucursalHcr(): ?int
    {
        return $this->sucursalHcr;
    }

    public function getEmpHcr(): ?int
    {
        return $this->empHcr;
    }

    public function getFeccontHcr(): ?\DateTimeInterface
    {
        return $this->feccontHcr;
    }

    public function getHorcontHcr(): ?\DateTimeInterface
    {
        return $this->horcontHcr;
    }

    public function getFabHcr(): ?string
    {
        return $this->fabHcr;
    }

    public function getNumHcr(): ?int
    {
        return $this->numHcr;
    }

    public function getLinHcr(): ?int
    {
        return $this->linHcr;
    }

    public function getCliHcr(): ?int
    {
        return $this->cliHcr;
    }

    public function setCliHcr(?int $cliHcr): self
    {
        $this->cliHcr = $cliHcr;

        return $this;
    }

    public function getDepHcr(): ?string
    {
        return $this->depHcr;
    }

    public function setDepHcr(?string $depHcr): self
    {
        $this->depHcr = $depHcr;

        return $this;
    }

    public function getSituHcr(): ?string
    {
        return $this->situHcr;
    }

    public function setSituHcr(?string $situHcr): self
    {
        $this->situHcr = $situHcr;

        return $this;
    }

    public function getFecHcr(): ?\DateTimeInterface
    {
        return $this->fecHcr;
    }

    public function setFecHcr(?\DateTimeInterface $fecHcr): self
    {
        $this->fecHcr = $fecHcr;

        return $this;
    }

    public function getFvtoHcr(): ?\DateTimeInterface
    {
        return $this->fvtoHcr;
    }

    public function setFvtoHcr(?\DateTimeInterface $fvtoHcr): self
    {
        $this->fvtoHcr = $fvtoHcr;

        return $this;
    }

    public function getImpHcr(): ?float
    {
        return $this->impHcr;
    }

    public function setImpHcr(?float $impHcr): self
    {
        $this->impHcr = $impHcr;

        return $this;
    }

    public function getFecremHcr(): ?\DateTimeInterface
    {
        return $this->fecremHcr;
    }

    public function setFecremHcr(?\DateTimeInterface $fecremHcr): self
    {
        $this->fecremHcr = $fecremHcr;

        return $this;
    }

    public function getBcoremHcr(): ?int
    {
        return $this->bcoremHcr;
    }

    public function setBcoremHcr(?int $bcoremHcr): self
    {
        $this->bcoremHcr = $bcoremHcr;

        return $this;
    }

    public function getNremHcr(): ?int
    {
        return $this->nremHcr;
    }

    public function setNremHcr(?int $nremHcr): self
    {
        $this->nremHcr = $nremHcr;

        return $this;
    }

    public function getImpipgHcr(): ?float
    {
        return $this->impipgHcr;
    }

    public function setImpipgHcr(?float $impipgHcr): self
    {
        $this->impipgHcr = $impipgHcr;

        return $this;
    }

    public function getGastosHcr(): ?float
    {
        return $this->gastosHcr;
    }

    public function setGastosHcr(?float $gastosHcr): self
    {
        $this->gastosHcr = $gastosHcr;

        return $this;
    }

    public function getImpcobHcr(): ?float
    {
        return $this->impcobHcr;
    }

    public function setImpcobHcr(?float $impcobHcr): self
    {
        $this->impcobHcr = $impcobHcr;

        return $this;
    }

    public function getFeccobHcr(): ?\DateTimeInterface
    {
        return $this->feccobHcr;
    }

    public function setFeccobHcr(?\DateTimeInterface $feccobHcr): self
    {
        $this->feccobHcr = $feccobHcr;

        return $this;
    }

    public function getBcoHcr(): ?int
    {
        return $this->bcoHcr;
    }

    public function setBcoHcr(?int $bcoHcr): self
    {
        $this->bcoHcr = $bcoHcr;

        return $this;
    }

    public function getAgeHcr(): ?int
    {
        return $this->ageHcr;
    }

    public function setAgeHcr(?int $ageHcr): self
    {
        $this->ageHcr = $ageHcr;

        return $this;
    }

    public function getDcHcr(): ?int
    {
        return $this->dcHcr;
    }

    public function setDcHcr(?int $dcHcr): self
    {
        $this->dcHcr = $dcHcr;

        return $this;
    }

    public function getCtaHcr(): ?float
    {
        return $this->ctaHcr;
    }

    public function setCtaHcr(?float $ctaHcr): self
    {
        $this->ctaHcr = $ctaHcr;

        return $this;
    }

    public function getFpaHcr(): ?int
    {
        return $this->fpaHcr;
    }

    public function setFpaHcr(?int $fpaHcr): self
    {
        $this->fpaHcr = $fpaHcr;

        return $this;
    }

    public function getBloqueoHcr(): ?bool
    {
        return $this->bloqueoHcr;
    }

    public function setBloqueoHcr(bool $bloqueoHcr): self
    {
        $this->bloqueoHcr = $bloqueoHcr;

        return $this;
    }

    public function getImpalfaHcr(): ?string
    {
        return $this->impalfaHcr;
    }

    public function setImpalfaHcr(?string $impalfaHcr): self
    {
        $this->impalfaHcr = $impalfaHcr;

        return $this;
    }

    public function getImpalfa1Hcr(): ?string
    {
        return $this->impalfa1Hcr;
    }

    public function setImpalfa1Hcr(?string $impalfa1Hcr): self
    {
        $this->impalfa1Hcr = $impalfa1Hcr;

        return $this;
    }

    public function getIbanHcr(): ?string
    {
        return $this->ibanHcr;
    }

    public function setIbanHcr(?string $ibanHcr): self
    {
        $this->ibanHcr = $ibanHcr;

        return $this;
    }


}
