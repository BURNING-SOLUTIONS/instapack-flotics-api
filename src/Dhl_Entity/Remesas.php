<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remesas
 *
 * @ORM\Table(name="remesas")
 * @ORM\Entity
 */
class Remesas
{
    /**
     * @var int
     *
     * @ORM\Column(name="sucursal_rem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalRem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="emp_rem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empRem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="fab_rem", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabRem;

    /**
     * @var int
     *
     * @ORM\Column(name="num_rem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numRem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="lin_rem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cli_rem", type="integer", nullable=true)
     */
    private $cliRem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="dep_rem", type="string", length=12, nullable=true)
     */
    private $depRem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fec_rem", type="datetime", nullable=true)
     */
    private $fecRem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fvto_rem", type="datetime", nullable=true)
     */
    private $fvtoRem;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_rem", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fpa_rem", type="smallint", nullable=true)
     */
    private $fpaRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_rem", type="smallint", nullable=true)
     */
    private $bcoRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_rem", type="smallint", nullable=true)
     */
    private $ageRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_rem", type="smallint", nullable=true)
     */
    private $dcRem = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_rem", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaRem = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCont_rem", type="datetime", nullable=true)
     */
    private $feccontRem;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorCont_rem", type="datetime", nullable=true)
     */
    private $horcontRem;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bloqueo_rem", type="boolean", nullable=true)
     */
    private $bloqueoRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="BcoRem_Rem", type="smallint", nullable=true)
     */
    private $bcoremRem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Any_Rem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anyRem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Rem", type="smallint", nullable=true)
     */
    private $usuRem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Rem", type="string", length=4, nullable=true)
     */
    private $ibanRem;

    public function getSucursalRem(): ?int
    {
        return $this->sucursalRem;
    }

    public function getEmpRem(): ?int
    {
        return $this->empRem;
    }

    public function getFabRem(): ?string
    {
        return $this->fabRem;
    }

    public function getNumRem(): ?int
    {
        return $this->numRem;
    }

    public function getLinRem(): ?int
    {
        return $this->linRem;
    }

    public function getCliRem(): ?int
    {
        return $this->cliRem;
    }

    public function setCliRem(?int $cliRem): self
    {
        $this->cliRem = $cliRem;

        return $this;
    }

    public function getDepRem(): ?string
    {
        return $this->depRem;
    }

    public function setDepRem(?string $depRem): self
    {
        $this->depRem = $depRem;

        return $this;
    }

    public function getFecRem(): ?\DateTimeInterface
    {
        return $this->fecRem;
    }

    public function setFecRem(?\DateTimeInterface $fecRem): self
    {
        $this->fecRem = $fecRem;

        return $this;
    }

    public function getFvtoRem(): ?\DateTimeInterface
    {
        return $this->fvtoRem;
    }

    public function setFvtoRem(?\DateTimeInterface $fvtoRem): self
    {
        $this->fvtoRem = $fvtoRem;

        return $this;
    }

    public function getTotalRem(): ?float
    {
        return $this->totalRem;
    }

    public function setTotalRem(?float $totalRem): self
    {
        $this->totalRem = $totalRem;

        return $this;
    }

    public function getFpaRem(): ?int
    {
        return $this->fpaRem;
    }

    public function setFpaRem(?int $fpaRem): self
    {
        $this->fpaRem = $fpaRem;

        return $this;
    }

    public function getBcoRem(): ?int
    {
        return $this->bcoRem;
    }

    public function setBcoRem(?int $bcoRem): self
    {
        $this->bcoRem = $bcoRem;

        return $this;
    }

    public function getAgeRem(): ?int
    {
        return $this->ageRem;
    }

    public function setAgeRem(?int $ageRem): self
    {
        $this->ageRem = $ageRem;

        return $this;
    }

    public function getDcRem(): ?int
    {
        return $this->dcRem;
    }

    public function setDcRem(?int $dcRem): self
    {
        $this->dcRem = $dcRem;

        return $this;
    }

    public function getCtaRem(): ?float
    {
        return $this->ctaRem;
    }

    public function setCtaRem(?float $ctaRem): self
    {
        $this->ctaRem = $ctaRem;

        return $this;
    }

    public function getFeccontRem(): ?\DateTimeInterface
    {
        return $this->feccontRem;
    }

    public function setFeccontRem(?\DateTimeInterface $feccontRem): self
    {
        $this->feccontRem = $feccontRem;

        return $this;
    }

    public function getHorcontRem(): ?\DateTimeInterface
    {
        return $this->horcontRem;
    }

    public function setHorcontRem(?\DateTimeInterface $horcontRem): self
    {
        $this->horcontRem = $horcontRem;

        return $this;
    }

    public function getBloqueoRem(): ?bool
    {
        return $this->bloqueoRem;
    }

    public function setBloqueoRem(?bool $bloqueoRem): self
    {
        $this->bloqueoRem = $bloqueoRem;

        return $this;
    }

    public function getBcoremRem(): ?int
    {
        return $this->bcoremRem;
    }

    public function setBcoremRem(?int $bcoremRem): self
    {
        $this->bcoremRem = $bcoremRem;

        return $this;
    }

    public function getAnyRem(): ?int
    {
        return $this->anyRem;
    }

    public function getUsuRem(): ?int
    {
        return $this->usuRem;
    }

    public function setUsuRem(?int $usuRem): self
    {
        $this->usuRem = $usuRem;

        return $this;
    }

    public function getIbanRem(): ?string
    {
        return $this->ibanRem;
    }

    public function setIbanRem(?string $ibanRem): self
    {
        $this->ibanRem = $ibanRem;

        return $this;
    }


}
