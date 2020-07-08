<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturmen
 *
 * @ORM\Table(name="facturmen")
 * @ORM\Entity
 */
class Facturmen
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fam", type="boolean", nullable=false)
     */
    private $bajaFam = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fam", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFam = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fam", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFam = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Men_Fam", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menFam = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fam", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFam;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fam", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFam = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fam", type="datetime", nullable=true)
     */
    private $fecFam;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Fam", type="datetime", nullable=true)
     */
    private $fvtoFam;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prec_Fam", type="float", precision=24, scale=0, nullable=true)
     */
    private $precFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Irec_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $irecFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Fam", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Anticipo_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $anticipoFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nabo_Fam", type="integer", nullable=true)
     */
    private $naboFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Loc_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $locFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prv_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $prvFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Nac_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $nacFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Int_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $intFam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Fam", type="smallint", nullable=true)
     */
    private $bcoFam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Fam", type="smallint", nullable=true)
     */
    private $ageFam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Fam", type="smallint", nullable=true)
     */
    private $dcFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaFam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Fam", type="smallint", nullable=true)
     */
    private $fpaFam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial1_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial1Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial2_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial2Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial3_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial3Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial4_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial4Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial5_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial5Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial6_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial6Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial7_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial7Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial8_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial8Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial9_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial9Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial10_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial10Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul1_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul1Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul2_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul2Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul3_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul3Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul4_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul4Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul5_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul5Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul6_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul6Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul7_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul7Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul8_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul8Fam = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul9_Fam", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul9Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Resul10_Fam", type="smallint", nullable=true)
     */
    private $resul10Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap1_Fam", type="smallint", nullable=true)
     */
    private $indrap1Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap2_Fam", type="smallint", nullable=true)
     */
    private $indrap2Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap3_Fam", type="smallint", nullable=true)
     */
    private $indrap3Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap4_Fam", type="smallint", nullable=true)
     */
    private $indrap4Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap5_Fam", type="smallint", nullable=true)
     */
    private $indrap5Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap6_Fam", type="smallint", nullable=true)
     */
    private $indrap6Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap7_Fam", type="smallint", nullable=true)
     */
    private $indrap7Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap8_Fam", type="smallint", nullable=true)
     */
    private $indrap8Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap9_Fam", type="smallint", nullable=true)
     */
    private $indrap9Fam = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap10_Fam", type="smallint", nullable=true)
     */
    private $indrap10Fam = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NumRef_Fam", type="string", length=15, nullable=true)
     */
    private $numrefFam;

    public function getBajaFam(): ?bool
    {
        return $this->bajaFam;
    }

    public function setBajaFam(bool $bajaFam): self
    {
        $this->bajaFam = $bajaFam;

        return $this;
    }

    public function getSucursalFam(): ?int
    {
        return $this->sucursalFam;
    }

    public function getEmpFam(): ?int
    {
        return $this->empFam;
    }

    public function getMenFam(): ?int
    {
        return $this->menFam;
    }

    public function getFabFam(): ?string
    {
        return $this->fabFam;
    }

    public function getNumFam(): ?int
    {
        return $this->numFam;
    }

    public function getFecFam(): ?\DateTimeInterface
    {
        return $this->fecFam;
    }

    public function setFecFam(?\DateTimeInterface $fecFam): self
    {
        $this->fecFam = $fecFam;

        return $this;
    }

    public function getFvtoFam(): ?\DateTimeInterface
    {
        return $this->fvtoFam;
    }

    public function setFvtoFam(?\DateTimeInterface $fvtoFam): self
    {
        $this->fvtoFam = $fvtoFam;

        return $this;
    }

    public function getBrutoFam(): ?float
    {
        return $this->brutoFam;
    }

    public function setBrutoFam(?float $brutoFam): self
    {
        $this->brutoFam = $brutoFam;

        return $this;
    }

    public function getPrecFam(): ?float
    {
        return $this->precFam;
    }

    public function setPrecFam(?float $precFam): self
    {
        $this->precFam = $precFam;

        return $this;
    }

    public function getIrecFam(): ?float
    {
        return $this->irecFam;
    }

    public function setIrecFam(?float $irecFam): self
    {
        $this->irecFam = $irecFam;

        return $this;
    }

    public function getBaseFam(): ?float
    {
        return $this->baseFam;
    }

    public function setBaseFam(?float $baseFam): self
    {
        $this->baseFam = $baseFam;

        return $this;
    }

    public function getPivaFam(): ?float
    {
        return $this->pivaFam;
    }

    public function setPivaFam(?float $pivaFam): self
    {
        $this->pivaFam = $pivaFam;

        return $this;
    }

    public function getIivaFam(): ?float
    {
        return $this->iivaFam;
    }

    public function setIivaFam(?float $iivaFam): self
    {
        $this->iivaFam = $iivaFam;

        return $this;
    }

    public function getAnticipoFam(): ?float
    {
        return $this->anticipoFam;
    }

    public function setAnticipoFam(?float $anticipoFam): self
    {
        $this->anticipoFam = $anticipoFam;

        return $this;
    }

    public function getTotalFam(): ?float
    {
        return $this->totalFam;
    }

    public function setTotalFam(?float $totalFam): self
    {
        $this->totalFam = $totalFam;

        return $this;
    }

    public function getNaboFam(): ?int
    {
        return $this->naboFam;
    }

    public function setNaboFam(?int $naboFam): self
    {
        $this->naboFam = $naboFam;

        return $this;
    }

    public function getLocFam(): ?float
    {
        return $this->locFam;
    }

    public function setLocFam(?float $locFam): self
    {
        $this->locFam = $locFam;

        return $this;
    }

    public function getPrvFam(): ?float
    {
        return $this->prvFam;
    }

    public function setPrvFam(?float $prvFam): self
    {
        $this->prvFam = $prvFam;

        return $this;
    }

    public function getNacFam(): ?float
    {
        return $this->nacFam;
    }

    public function setNacFam(?float $nacFam): self
    {
        $this->nacFam = $nacFam;

        return $this;
    }

    public function getIntFam(): ?float
    {
        return $this->intFam;
    }

    public function setIntFam(?float $intFam): self
    {
        $this->intFam = $intFam;

        return $this;
    }

    public function getBcoFam(): ?int
    {
        return $this->bcoFam;
    }

    public function setBcoFam(?int $bcoFam): self
    {
        $this->bcoFam = $bcoFam;

        return $this;
    }

    public function getAgeFam(): ?int
    {
        return $this->ageFam;
    }

    public function setAgeFam(?int $ageFam): self
    {
        $this->ageFam = $ageFam;

        return $this;
    }

    public function getDcFam(): ?int
    {
        return $this->dcFam;
    }

    public function setDcFam(?int $dcFam): self
    {
        $this->dcFam = $dcFam;

        return $this;
    }

    public function getCtaFam(): ?float
    {
        return $this->ctaFam;
    }

    public function setCtaFam(?float $ctaFam): self
    {
        $this->ctaFam = $ctaFam;

        return $this;
    }

    public function getFpaFam(): ?int
    {
        return $this->fpaFam;
    }

    public function setFpaFam(?int $fpaFam): self
    {
        $this->fpaFam = $fpaFam;

        return $this;
    }

    public function getParcial1Fam(): ?float
    {
        return $this->parcial1Fam;
    }

    public function setParcial1Fam(?float $parcial1Fam): self
    {
        $this->parcial1Fam = $parcial1Fam;

        return $this;
    }

    public function getParcial2Fam(): ?float
    {
        return $this->parcial2Fam;
    }

    public function setParcial2Fam(?float $parcial2Fam): self
    {
        $this->parcial2Fam = $parcial2Fam;

        return $this;
    }

    public function getParcial3Fam(): ?float
    {
        return $this->parcial3Fam;
    }

    public function setParcial3Fam(?float $parcial3Fam): self
    {
        $this->parcial3Fam = $parcial3Fam;

        return $this;
    }

    public function getParcial4Fam(): ?float
    {
        return $this->parcial4Fam;
    }

    public function setParcial4Fam(?float $parcial4Fam): self
    {
        $this->parcial4Fam = $parcial4Fam;

        return $this;
    }

    public function getParcial5Fam(): ?float
    {
        return $this->parcial5Fam;
    }

    public function setParcial5Fam(?float $parcial5Fam): self
    {
        $this->parcial5Fam = $parcial5Fam;

        return $this;
    }

    public function getParcial6Fam(): ?float
    {
        return $this->parcial6Fam;
    }

    public function setParcial6Fam(?float $parcial6Fam): self
    {
        $this->parcial6Fam = $parcial6Fam;

        return $this;
    }

    public function getParcial7Fam(): ?float
    {
        return $this->parcial7Fam;
    }

    public function setParcial7Fam(?float $parcial7Fam): self
    {
        $this->parcial7Fam = $parcial7Fam;

        return $this;
    }

    public function getParcial8Fam(): ?float
    {
        return $this->parcial8Fam;
    }

    public function setParcial8Fam(?float $parcial8Fam): self
    {
        $this->parcial8Fam = $parcial8Fam;

        return $this;
    }

    public function getParcial9Fam(): ?float
    {
        return $this->parcial9Fam;
    }

    public function setParcial9Fam(?float $parcial9Fam): self
    {
        $this->parcial9Fam = $parcial9Fam;

        return $this;
    }

    public function getParcial10Fam(): ?float
    {
        return $this->parcial10Fam;
    }

    public function setParcial10Fam(?float $parcial10Fam): self
    {
        $this->parcial10Fam = $parcial10Fam;

        return $this;
    }

    public function getResul1Fam(): ?float
    {
        return $this->resul1Fam;
    }

    public function setResul1Fam(?float $resul1Fam): self
    {
        $this->resul1Fam = $resul1Fam;

        return $this;
    }

    public function getResul2Fam(): ?float
    {
        return $this->resul2Fam;
    }

    public function setResul2Fam(?float $resul2Fam): self
    {
        $this->resul2Fam = $resul2Fam;

        return $this;
    }

    public function getResul3Fam(): ?float
    {
        return $this->resul3Fam;
    }

    public function setResul3Fam(?float $resul3Fam): self
    {
        $this->resul3Fam = $resul3Fam;

        return $this;
    }

    public function getResul4Fam(): ?float
    {
        return $this->resul4Fam;
    }

    public function setResul4Fam(?float $resul4Fam): self
    {
        $this->resul4Fam = $resul4Fam;

        return $this;
    }

    public function getResul5Fam(): ?float
    {
        return $this->resul5Fam;
    }

    public function setResul5Fam(?float $resul5Fam): self
    {
        $this->resul5Fam = $resul5Fam;

        return $this;
    }

    public function getResul6Fam(): ?float
    {
        return $this->resul6Fam;
    }

    public function setResul6Fam(?float $resul6Fam): self
    {
        $this->resul6Fam = $resul6Fam;

        return $this;
    }

    public function getResul7Fam(): ?float
    {
        return $this->resul7Fam;
    }

    public function setResul7Fam(?float $resul7Fam): self
    {
        $this->resul7Fam = $resul7Fam;

        return $this;
    }

    public function getResul8Fam(): ?float
    {
        return $this->resul8Fam;
    }

    public function setResul8Fam(?float $resul8Fam): self
    {
        $this->resul8Fam = $resul8Fam;

        return $this;
    }

    public function getResul9Fam(): ?float
    {
        return $this->resul9Fam;
    }

    public function setResul9Fam(?float $resul9Fam): self
    {
        $this->resul9Fam = $resul9Fam;

        return $this;
    }

    public function getResul10Fam(): ?int
    {
        return $this->resul10Fam;
    }

    public function setResul10Fam(?int $resul10Fam): self
    {
        $this->resul10Fam = $resul10Fam;

        return $this;
    }

    public function getIndrap1Fam(): ?int
    {
        return $this->indrap1Fam;
    }

    public function setIndrap1Fam(?int $indrap1Fam): self
    {
        $this->indrap1Fam = $indrap1Fam;

        return $this;
    }

    public function getIndrap2Fam(): ?int
    {
        return $this->indrap2Fam;
    }

    public function setIndrap2Fam(?int $indrap2Fam): self
    {
        $this->indrap2Fam = $indrap2Fam;

        return $this;
    }

    public function getIndrap3Fam(): ?int
    {
        return $this->indrap3Fam;
    }

    public function setIndrap3Fam(?int $indrap3Fam): self
    {
        $this->indrap3Fam = $indrap3Fam;

        return $this;
    }

    public function getIndrap4Fam(): ?int
    {
        return $this->indrap4Fam;
    }

    public function setIndrap4Fam(?int $indrap4Fam): self
    {
        $this->indrap4Fam = $indrap4Fam;

        return $this;
    }

    public function getIndrap5Fam(): ?int
    {
        return $this->indrap5Fam;
    }

    public function setIndrap5Fam(?int $indrap5Fam): self
    {
        $this->indrap5Fam = $indrap5Fam;

        return $this;
    }

    public function getIndrap6Fam(): ?int
    {
        return $this->indrap6Fam;
    }

    public function setIndrap6Fam(?int $indrap6Fam): self
    {
        $this->indrap6Fam = $indrap6Fam;

        return $this;
    }

    public function getIndrap7Fam(): ?int
    {
        return $this->indrap7Fam;
    }

    public function setIndrap7Fam(?int $indrap7Fam): self
    {
        $this->indrap7Fam = $indrap7Fam;

        return $this;
    }

    public function getIndrap8Fam(): ?int
    {
        return $this->indrap8Fam;
    }

    public function setIndrap8Fam(?int $indrap8Fam): self
    {
        $this->indrap8Fam = $indrap8Fam;

        return $this;
    }

    public function getIndrap9Fam(): ?int
    {
        return $this->indrap9Fam;
    }

    public function setIndrap9Fam(?int $indrap9Fam): self
    {
        $this->indrap9Fam = $indrap9Fam;

        return $this;
    }

    public function getIndrap10Fam(): ?int
    {
        return $this->indrap10Fam;
    }

    public function setIndrap10Fam(?int $indrap10Fam): self
    {
        $this->indrap10Fam = $indrap10Fam;

        return $this;
    }

    public function getNumrefFam(): ?string
    {
        return $this->numrefFam;
    }

    public function setNumrefFam(?string $numrefFam): self
    {
        $this->numrefFam = $numrefFam;

        return $this;
    }


}
