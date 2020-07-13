<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturdis
 *
 * @ORM\Table(name="facturdis")
 * @ORM\Entity
 */
class Facturdis
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fad", type="boolean", nullable=false)
     */
    private $bajaFad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fad", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Fad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaFad = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Dis_Fad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $disFad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fad", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFad;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFad = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fad", type="datetime", nullable=true)
     */
    private $fecFad;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Fad", type="datetime", nullable=true)
     */
    private $fvtoFad;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="BrutoExe_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoexeFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prec_Fad", type="float", precision=24, scale=0, nullable=true)
     */
    private $precFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Irec_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $irecFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idto_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $idtoFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Edto_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $edtoFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Fad", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exento_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $exentoFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nabo_Fad", type="integer", nullable=true)
     */
    private $naboFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Loc_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $locFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prv_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $prvFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Nac_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $nacFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Int_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $intFad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Fad", type="smallint", nullable=true)
     */
    private $bcoFad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Fad", type="smallint", nullable=true)
     */
    private $ageFad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Fad", type="smallint", nullable=true)
     */
    private $dcFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaFad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Fad", type="smallint", nullable=true)
     */
    private $fpaFad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial1_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial1Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial2_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial2Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial3_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial3Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial4_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial4Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial5_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial5Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial6_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial6Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial7_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial7Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial8_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial8Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial9_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial9Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial10_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial10Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul1_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul1Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul2_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul2Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul3_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul3Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul4_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul4Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul5_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul5Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul6_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul6Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul7_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul7Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul8_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul8Fad = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul9_Fad", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul9Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Resul10_Fad", type="smallint", nullable=true)
     */
    private $resul10Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap1_Fad", type="smallint", nullable=true)
     */
    private $indrap1Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap2_Fad", type="smallint", nullable=true)
     */
    private $indrap2Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap3_Fad", type="smallint", nullable=true)
     */
    private $indrap3Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap4_Fad", type="smallint", nullable=true)
     */
    private $indrap4Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap5_Fad", type="smallint", nullable=true)
     */
    private $indrap5Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap6_Fad", type="smallint", nullable=true)
     */
    private $indrap6Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap7_Fad", type="smallint", nullable=true)
     */
    private $indrap7Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap8_Fad", type="smallint", nullable=true)
     */
    private $indrap8Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap9_Fad", type="smallint", nullable=true)
     */
    private $indrap9Fad = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap10_Fad", type="smallint", nullable=true)
     */
    private $indrap10Fad = '0';

    public function getBajaFad(): ?bool
    {
        return $this->bajaFad;
    }

    public function setBajaFad(bool $bajaFad): self
    {
        $this->bajaFad = $bajaFad;

        return $this;
    }

    public function getSucursalFad(): ?int
    {
        return $this->sucursalFad;
    }

    public function getEmpFad(): ?int
    {
        return $this->empFad;
    }

    public function getViaFad(): ?int
    {
        return $this->viaFad;
    }

    public function getDisFad(): ?int
    {
        return $this->disFad;
    }

    public function getFabFad(): ?string
    {
        return $this->fabFad;
    }

    public function getNumFad(): ?int
    {
        return $this->numFad;
    }

    public function getFecFad(): ?\DateTimeInterface
    {
        return $this->fecFad;
    }

    public function setFecFad(?\DateTimeInterface $fecFad): self
    {
        $this->fecFad = $fecFad;

        return $this;
    }

    public function getFvtoFad(): ?\DateTimeInterface
    {
        return $this->fvtoFad;
    }

    public function setFvtoFad(?\DateTimeInterface $fvtoFad): self
    {
        $this->fvtoFad = $fvtoFad;

        return $this;
    }

    public function getBrutoFad(): ?float
    {
        return $this->brutoFad;
    }

    public function setBrutoFad(?float $brutoFad): self
    {
        $this->brutoFad = $brutoFad;

        return $this;
    }

    public function getBrutoexeFad(): ?float
    {
        return $this->brutoexeFad;
    }

    public function setBrutoexeFad(?float $brutoexeFad): self
    {
        $this->brutoexeFad = $brutoexeFad;

        return $this;
    }

    public function getPrecFad(): ?float
    {
        return $this->precFad;
    }

    public function setPrecFad(?float $precFad): self
    {
        $this->precFad = $precFad;

        return $this;
    }

    public function getIrecFad(): ?float
    {
        return $this->irecFad;
    }

    public function setIrecFad(?float $irecFad): self
    {
        $this->irecFad = $irecFad;

        return $this;
    }

    public function getIdtoFad(): ?float
    {
        return $this->idtoFad;
    }

    public function setIdtoFad(?float $idtoFad): self
    {
        $this->idtoFad = $idtoFad;

        return $this;
    }

    public function getEdtoFad(): ?float
    {
        return $this->edtoFad;
    }

    public function setEdtoFad(?float $edtoFad): self
    {
        $this->edtoFad = $edtoFad;

        return $this;
    }

    public function getBaseFad(): ?float
    {
        return $this->baseFad;
    }

    public function setBaseFad(?float $baseFad): self
    {
        $this->baseFad = $baseFad;

        return $this;
    }

    public function getPivaFad(): ?float
    {
        return $this->pivaFad;
    }

    public function setPivaFad(?float $pivaFad): self
    {
        $this->pivaFad = $pivaFad;

        return $this;
    }

    public function getIivaFad(): ?float
    {
        return $this->iivaFad;
    }

    public function setIivaFad(?float $iivaFad): self
    {
        $this->iivaFad = $iivaFad;

        return $this;
    }

    public function getExentoFad(): ?float
    {
        return $this->exentoFad;
    }

    public function setExentoFad(?float $exentoFad): self
    {
        $this->exentoFad = $exentoFad;

        return $this;
    }

    public function getTotalFad(): ?float
    {
        return $this->totalFad;
    }

    public function setTotalFad(?float $totalFad): self
    {
        $this->totalFad = $totalFad;

        return $this;
    }

    public function getNaboFad(): ?int
    {
        return $this->naboFad;
    }

    public function setNaboFad(?int $naboFad): self
    {
        $this->naboFad = $naboFad;

        return $this;
    }

    public function getLocFad(): ?float
    {
        return $this->locFad;
    }

    public function setLocFad(?float $locFad): self
    {
        $this->locFad = $locFad;

        return $this;
    }

    public function getPrvFad(): ?float
    {
        return $this->prvFad;
    }

    public function setPrvFad(?float $prvFad): self
    {
        $this->prvFad = $prvFad;

        return $this;
    }

    public function getNacFad(): ?float
    {
        return $this->nacFad;
    }

    public function setNacFad(?float $nacFad): self
    {
        $this->nacFad = $nacFad;

        return $this;
    }

    public function getIntFad(): ?float
    {
        return $this->intFad;
    }

    public function setIntFad(?float $intFad): self
    {
        $this->intFad = $intFad;

        return $this;
    }

    public function getBcoFad(): ?int
    {
        return $this->bcoFad;
    }

    public function setBcoFad(?int $bcoFad): self
    {
        $this->bcoFad = $bcoFad;

        return $this;
    }

    public function getAgeFad(): ?int
    {
        return $this->ageFad;
    }

    public function setAgeFad(?int $ageFad): self
    {
        $this->ageFad = $ageFad;

        return $this;
    }

    public function getDcFad(): ?int
    {
        return $this->dcFad;
    }

    public function setDcFad(?int $dcFad): self
    {
        $this->dcFad = $dcFad;

        return $this;
    }

    public function getCtaFad(): ?float
    {
        return $this->ctaFad;
    }

    public function setCtaFad(?float $ctaFad): self
    {
        $this->ctaFad = $ctaFad;

        return $this;
    }

    public function getFpaFad(): ?int
    {
        return $this->fpaFad;
    }

    public function setFpaFad(?int $fpaFad): self
    {
        $this->fpaFad = $fpaFad;

        return $this;
    }

    public function getParcial1Fad(): ?float
    {
        return $this->parcial1Fad;
    }

    public function setParcial1Fad(?float $parcial1Fad): self
    {
        $this->parcial1Fad = $parcial1Fad;

        return $this;
    }

    public function getParcial2Fad(): ?float
    {
        return $this->parcial2Fad;
    }

    public function setParcial2Fad(?float $parcial2Fad): self
    {
        $this->parcial2Fad = $parcial2Fad;

        return $this;
    }

    public function getParcial3Fad(): ?float
    {
        return $this->parcial3Fad;
    }

    public function setParcial3Fad(?float $parcial3Fad): self
    {
        $this->parcial3Fad = $parcial3Fad;

        return $this;
    }

    public function getParcial4Fad(): ?float
    {
        return $this->parcial4Fad;
    }

    public function setParcial4Fad(?float $parcial4Fad): self
    {
        $this->parcial4Fad = $parcial4Fad;

        return $this;
    }

    public function getParcial5Fad(): ?float
    {
        return $this->parcial5Fad;
    }

    public function setParcial5Fad(?float $parcial5Fad): self
    {
        $this->parcial5Fad = $parcial5Fad;

        return $this;
    }

    public function getParcial6Fad(): ?float
    {
        return $this->parcial6Fad;
    }

    public function setParcial6Fad(?float $parcial6Fad): self
    {
        $this->parcial6Fad = $parcial6Fad;

        return $this;
    }

    public function getParcial7Fad(): ?float
    {
        return $this->parcial7Fad;
    }

    public function setParcial7Fad(?float $parcial7Fad): self
    {
        $this->parcial7Fad = $parcial7Fad;

        return $this;
    }

    public function getParcial8Fad(): ?float
    {
        return $this->parcial8Fad;
    }

    public function setParcial8Fad(?float $parcial8Fad): self
    {
        $this->parcial8Fad = $parcial8Fad;

        return $this;
    }

    public function getParcial9Fad(): ?float
    {
        return $this->parcial9Fad;
    }

    public function setParcial9Fad(?float $parcial9Fad): self
    {
        $this->parcial9Fad = $parcial9Fad;

        return $this;
    }

    public function getParcial10Fad(): ?float
    {
        return $this->parcial10Fad;
    }

    public function setParcial10Fad(?float $parcial10Fad): self
    {
        $this->parcial10Fad = $parcial10Fad;

        return $this;
    }

    public function getResul1Fad(): ?float
    {
        return $this->resul1Fad;
    }

    public function setResul1Fad(?float $resul1Fad): self
    {
        $this->resul1Fad = $resul1Fad;

        return $this;
    }

    public function getResul2Fad(): ?float
    {
        return $this->resul2Fad;
    }

    public function setResul2Fad(?float $resul2Fad): self
    {
        $this->resul2Fad = $resul2Fad;

        return $this;
    }

    public function getResul3Fad(): ?float
    {
        return $this->resul3Fad;
    }

    public function setResul3Fad(?float $resul3Fad): self
    {
        $this->resul3Fad = $resul3Fad;

        return $this;
    }

    public function getResul4Fad(): ?float
    {
        return $this->resul4Fad;
    }

    public function setResul4Fad(?float $resul4Fad): self
    {
        $this->resul4Fad = $resul4Fad;

        return $this;
    }

    public function getResul5Fad(): ?float
    {
        return $this->resul5Fad;
    }

    public function setResul5Fad(?float $resul5Fad): self
    {
        $this->resul5Fad = $resul5Fad;

        return $this;
    }

    public function getResul6Fad(): ?float
    {
        return $this->resul6Fad;
    }

    public function setResul6Fad(?float $resul6Fad): self
    {
        $this->resul6Fad = $resul6Fad;

        return $this;
    }

    public function getResul7Fad(): ?float
    {
        return $this->resul7Fad;
    }

    public function setResul7Fad(?float $resul7Fad): self
    {
        $this->resul7Fad = $resul7Fad;

        return $this;
    }

    public function getResul8Fad(): ?float
    {
        return $this->resul8Fad;
    }

    public function setResul8Fad(?float $resul8Fad): self
    {
        $this->resul8Fad = $resul8Fad;

        return $this;
    }

    public function getResul9Fad(): ?float
    {
        return $this->resul9Fad;
    }

    public function setResul9Fad(?float $resul9Fad): self
    {
        $this->resul9Fad = $resul9Fad;

        return $this;
    }

    public function getResul10Fad(): ?int
    {
        return $this->resul10Fad;
    }

    public function setResul10Fad(?int $resul10Fad): self
    {
        $this->resul10Fad = $resul10Fad;

        return $this;
    }

    public function getIndrap1Fad(): ?int
    {
        return $this->indrap1Fad;
    }

    public function setIndrap1Fad(?int $indrap1Fad): self
    {
        $this->indrap1Fad = $indrap1Fad;

        return $this;
    }

    public function getIndrap2Fad(): ?int
    {
        return $this->indrap2Fad;
    }

    public function setIndrap2Fad(?int $indrap2Fad): self
    {
        $this->indrap2Fad = $indrap2Fad;

        return $this;
    }

    public function getIndrap3Fad(): ?int
    {
        return $this->indrap3Fad;
    }

    public function setIndrap3Fad(?int $indrap3Fad): self
    {
        $this->indrap3Fad = $indrap3Fad;

        return $this;
    }

    public function getIndrap4Fad(): ?int
    {
        return $this->indrap4Fad;
    }

    public function setIndrap4Fad(?int $indrap4Fad): self
    {
        $this->indrap4Fad = $indrap4Fad;

        return $this;
    }

    public function getIndrap5Fad(): ?int
    {
        return $this->indrap5Fad;
    }

    public function setIndrap5Fad(?int $indrap5Fad): self
    {
        $this->indrap5Fad = $indrap5Fad;

        return $this;
    }

    public function getIndrap6Fad(): ?int
    {
        return $this->indrap6Fad;
    }

    public function setIndrap6Fad(?int $indrap6Fad): self
    {
        $this->indrap6Fad = $indrap6Fad;

        return $this;
    }

    public function getIndrap7Fad(): ?int
    {
        return $this->indrap7Fad;
    }

    public function setIndrap7Fad(?int $indrap7Fad): self
    {
        $this->indrap7Fad = $indrap7Fad;

        return $this;
    }

    public function getIndrap8Fad(): ?int
    {
        return $this->indrap8Fad;
    }

    public function setIndrap8Fad(?int $indrap8Fad): self
    {
        $this->indrap8Fad = $indrap8Fad;

        return $this;
    }

    public function getIndrap9Fad(): ?int
    {
        return $this->indrap9Fad;
    }

    public function setIndrap9Fad(?int $indrap9Fad): self
    {
        $this->indrap9Fad = $indrap9Fad;

        return $this;
    }

    public function getIndrap10Fad(): ?int
    {
        return $this->indrap10Fad;
    }

    public function setIndrap10Fad(?int $indrap10Fad): self
    {
        $this->indrap10Fad = $indrap10Fad;

        return $this;
    }


}
