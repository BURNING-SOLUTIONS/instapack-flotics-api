<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturcli
 *
 * @ORM\Table(name="facturcli")
 * @ORM\Entity
 */
class Facturcli
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fac", type="boolean", nullable=false)
     */
    private $bajaFac = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fac", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFac = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fac", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFac = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fac", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFac;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fac", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Fac", type="integer", nullable=true)
     */
    private $cliFac = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Fac", type="string", length=12, nullable=true)
     */
    private $depFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fac", type="datetime", nullable=true)
     */
    private $fecFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Fac", type="datetime", nullable=true)
     */
    private $fvtoFac;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="BrutoExe_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoexeFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdto_Fac", type="float", precision=24, scale=0, nullable=true)
     */
    private $pdtoFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idto_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $idtoFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Edto_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $edtoFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Fac", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exento_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $exentoFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nabo_Fac", type="integer", nullable=true)
     */
    private $naboFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Loc_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $locFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prv_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $prvFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Nac_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $nacFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Int_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $intFac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Fac", type="smallint", nullable=true)
     */
    private $fpaFac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial1_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial1Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial2_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial2Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial3_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial3Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial4_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial4Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial5_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial5Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial6_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial6Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial7_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial7Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial8_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial8Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial9_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial9Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial10_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial10Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul1_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul1Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul2_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul2Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul3_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul3Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul4_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul4Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul5_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul5Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul6_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul6Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul7_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul7Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul8_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul8Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul9_Fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul9Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Resul10_Fac", type="smallint", nullable=true)
     */
    private $resul10Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap1_Fac", type="smallint", nullable=true)
     */
    private $indrap1Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap2_Fac", type="smallint", nullable=true)
     */
    private $indrap2Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap3_Fac", type="smallint", nullable=true)
     */
    private $indrap3Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap4_Fac", type="smallint", nullable=true)
     */
    private $indrap4Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap5_Fac", type="smallint", nullable=true)
     */
    private $indrap5Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap6_Fac", type="smallint", nullable=true)
     */
    private $indrap6Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap7_Fac", type="smallint", nullable=true)
     */
    private $indrap7Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap8_Fac", type="smallint", nullable=true)
     */
    private $indrap8Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap9_Fac", type="smallint", nullable=true)
     */
    private $indrap9Fac = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap10_Fac", type="smallint", nullable=true)
     */
    private $indrap10Fac = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PRet_Fac", type="float", precision=24, scale=0, nullable=true)
     */
    private $pretFac;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IRet_fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $iretFac;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ERet_fac", type="float", precision=53, scale=0, nullable=true)
     */
    private $eretFac;

    /**
     * @var int
     *
     * @ORM\Column(name="AnyNabo_Fac", type="smallint", nullable=false)
     */
    private $anynaboFac = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodRect_Fac", type="string", length=6, nullable=true)
     */
    private $codrectFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecEmail_Fac", type="datetime", nullable=true)
     */
    private $fecemailFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecFtp_Fac", type="datetime", nullable=true)
     */
    private $fecftpFac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EnviadaSii_Fac", type="datetime", nullable=true)
     */
    private $enviadasiiFac;

    public function getBajaFac(): ?bool
    {
        return $this->bajaFac;
    }

    public function setBajaFac(bool $bajaFac): self
    {
        $this->bajaFac = $bajaFac;

        return $this;
    }

    public function getSucursalFac(): ?int
    {
        return $this->sucursalFac;
    }

    public function getEmpFac(): ?int
    {
        return $this->empFac;
    }

    public function getFabFac(): ?string
    {
        return $this->fabFac;
    }

    public function getNumFac(): ?int
    {
        return $this->numFac;
    }

    public function getCliFac(): ?int
    {
        return $this->cliFac;
    }

    public function setCliFac(?int $cliFac): self
    {
        $this->cliFac = $cliFac;

        return $this;
    }

    public function getDepFac(): ?string
    {
        return $this->depFac;
    }

    public function setDepFac(?string $depFac): self
    {
        $this->depFac = $depFac;

        return $this;
    }

    public function getFecFac(): ?\DateTimeInterface
    {
        return $this->fecFac;
    }

    public function setFecFac(?\DateTimeInterface $fecFac): self
    {
        $this->fecFac = $fecFac;

        return $this;
    }

    public function getFvtoFac(): ?\DateTimeInterface
    {
        return $this->fvtoFac;
    }

    public function setFvtoFac(?\DateTimeInterface $fvtoFac): self
    {
        $this->fvtoFac = $fvtoFac;

        return $this;
    }

    public function getBrutoFac(): ?float
    {
        return $this->brutoFac;
    }

    public function setBrutoFac(?float $brutoFac): self
    {
        $this->brutoFac = $brutoFac;

        return $this;
    }

    public function getBrutoexeFac(): ?float
    {
        return $this->brutoexeFac;
    }

    public function setBrutoexeFac(?float $brutoexeFac): self
    {
        $this->brutoexeFac = $brutoexeFac;

        return $this;
    }

    public function getPdtoFac(): ?float
    {
        return $this->pdtoFac;
    }

    public function setPdtoFac(?float $pdtoFac): self
    {
        $this->pdtoFac = $pdtoFac;

        return $this;
    }

    public function getIdtoFac(): ?float
    {
        return $this->idtoFac;
    }

    public function setIdtoFac(?float $idtoFac): self
    {
        $this->idtoFac = $idtoFac;

        return $this;
    }

    public function getEdtoFac(): ?float
    {
        return $this->edtoFac;
    }

    public function setEdtoFac(?float $edtoFac): self
    {
        $this->edtoFac = $edtoFac;

        return $this;
    }

    public function getBaseFac(): ?float
    {
        return $this->baseFac;
    }

    public function setBaseFac(?float $baseFac): self
    {
        $this->baseFac = $baseFac;

        return $this;
    }

    public function getPivaFac(): ?float
    {
        return $this->pivaFac;
    }

    public function setPivaFac(?float $pivaFac): self
    {
        $this->pivaFac = $pivaFac;

        return $this;
    }

    public function getIivaFac(): ?float
    {
        return $this->iivaFac;
    }

    public function setIivaFac(?float $iivaFac): self
    {
        $this->iivaFac = $iivaFac;

        return $this;
    }

    public function getExentoFac(): ?float
    {
        return $this->exentoFac;
    }

    public function setExentoFac(?float $exentoFac): self
    {
        $this->exentoFac = $exentoFac;

        return $this;
    }

    public function getTotalFac(): ?float
    {
        return $this->totalFac;
    }

    public function setTotalFac(?float $totalFac): self
    {
        $this->totalFac = $totalFac;

        return $this;
    }

    public function getNaboFac(): ?int
    {
        return $this->naboFac;
    }

    public function setNaboFac(?int $naboFac): self
    {
        $this->naboFac = $naboFac;

        return $this;
    }

    public function getLocFac(): ?float
    {
        return $this->locFac;
    }

    public function setLocFac(?float $locFac): self
    {
        $this->locFac = $locFac;

        return $this;
    }

    public function getPrvFac(): ?float
    {
        return $this->prvFac;
    }

    public function setPrvFac(?float $prvFac): self
    {
        $this->prvFac = $prvFac;

        return $this;
    }

    public function getNacFac(): ?float
    {
        return $this->nacFac;
    }

    public function setNacFac(?float $nacFac): self
    {
        $this->nacFac = $nacFac;

        return $this;
    }

    public function getIntFac(): ?float
    {
        return $this->intFac;
    }

    public function setIntFac(?float $intFac): self
    {
        $this->intFac = $intFac;

        return $this;
    }

    public function getFpaFac(): ?int
    {
        return $this->fpaFac;
    }

    public function setFpaFac(?int $fpaFac): self
    {
        $this->fpaFac = $fpaFac;

        return $this;
    }

    public function getParcial1Fac(): ?float
    {
        return $this->parcial1Fac;
    }

    public function setParcial1Fac(?float $parcial1Fac): self
    {
        $this->parcial1Fac = $parcial1Fac;

        return $this;
    }

    public function getParcial2Fac(): ?float
    {
        return $this->parcial2Fac;
    }

    public function setParcial2Fac(?float $parcial2Fac): self
    {
        $this->parcial2Fac = $parcial2Fac;

        return $this;
    }

    public function getParcial3Fac(): ?float
    {
        return $this->parcial3Fac;
    }

    public function setParcial3Fac(?float $parcial3Fac): self
    {
        $this->parcial3Fac = $parcial3Fac;

        return $this;
    }

    public function getParcial4Fac(): ?float
    {
        return $this->parcial4Fac;
    }

    public function setParcial4Fac(?float $parcial4Fac): self
    {
        $this->parcial4Fac = $parcial4Fac;

        return $this;
    }

    public function getParcial5Fac(): ?float
    {
        return $this->parcial5Fac;
    }

    public function setParcial5Fac(?float $parcial5Fac): self
    {
        $this->parcial5Fac = $parcial5Fac;

        return $this;
    }

    public function getParcial6Fac(): ?float
    {
        return $this->parcial6Fac;
    }

    public function setParcial6Fac(?float $parcial6Fac): self
    {
        $this->parcial6Fac = $parcial6Fac;

        return $this;
    }

    public function getParcial7Fac(): ?float
    {
        return $this->parcial7Fac;
    }

    public function setParcial7Fac(?float $parcial7Fac): self
    {
        $this->parcial7Fac = $parcial7Fac;

        return $this;
    }

    public function getParcial8Fac(): ?float
    {
        return $this->parcial8Fac;
    }

    public function setParcial8Fac(?float $parcial8Fac): self
    {
        $this->parcial8Fac = $parcial8Fac;

        return $this;
    }

    public function getParcial9Fac(): ?float
    {
        return $this->parcial9Fac;
    }

    public function setParcial9Fac(?float $parcial9Fac): self
    {
        $this->parcial9Fac = $parcial9Fac;

        return $this;
    }

    public function getParcial10Fac(): ?float
    {
        return $this->parcial10Fac;
    }

    public function setParcial10Fac(?float $parcial10Fac): self
    {
        $this->parcial10Fac = $parcial10Fac;

        return $this;
    }

    public function getResul1Fac(): ?float
    {
        return $this->resul1Fac;
    }

    public function setResul1Fac(?float $resul1Fac): self
    {
        $this->resul1Fac = $resul1Fac;

        return $this;
    }

    public function getResul2Fac(): ?float
    {
        return $this->resul2Fac;
    }

    public function setResul2Fac(?float $resul2Fac): self
    {
        $this->resul2Fac = $resul2Fac;

        return $this;
    }

    public function getResul3Fac(): ?float
    {
        return $this->resul3Fac;
    }

    public function setResul3Fac(?float $resul3Fac): self
    {
        $this->resul3Fac = $resul3Fac;

        return $this;
    }

    public function getResul4Fac(): ?float
    {
        return $this->resul4Fac;
    }

    public function setResul4Fac(?float $resul4Fac): self
    {
        $this->resul4Fac = $resul4Fac;

        return $this;
    }

    public function getResul5Fac(): ?float
    {
        return $this->resul5Fac;
    }

    public function setResul5Fac(?float $resul5Fac): self
    {
        $this->resul5Fac = $resul5Fac;

        return $this;
    }

    public function getResul6Fac(): ?float
    {
        return $this->resul6Fac;
    }

    public function setResul6Fac(?float $resul6Fac): self
    {
        $this->resul6Fac = $resul6Fac;

        return $this;
    }

    public function getResul7Fac(): ?float
    {
        return $this->resul7Fac;
    }

    public function setResul7Fac(?float $resul7Fac): self
    {
        $this->resul7Fac = $resul7Fac;

        return $this;
    }

    public function getResul8Fac(): ?float
    {
        return $this->resul8Fac;
    }

    public function setResul8Fac(?float $resul8Fac): self
    {
        $this->resul8Fac = $resul8Fac;

        return $this;
    }

    public function getResul9Fac(): ?float
    {
        return $this->resul9Fac;
    }

    public function setResul9Fac(?float $resul9Fac): self
    {
        $this->resul9Fac = $resul9Fac;

        return $this;
    }

    public function getResul10Fac(): ?int
    {
        return $this->resul10Fac;
    }

    public function setResul10Fac(?int $resul10Fac): self
    {
        $this->resul10Fac = $resul10Fac;

        return $this;
    }

    public function getIndrap1Fac(): ?int
    {
        return $this->indrap1Fac;
    }

    public function setIndrap1Fac(?int $indrap1Fac): self
    {
        $this->indrap1Fac = $indrap1Fac;

        return $this;
    }

    public function getIndrap2Fac(): ?int
    {
        return $this->indrap2Fac;
    }

    public function setIndrap2Fac(?int $indrap2Fac): self
    {
        $this->indrap2Fac = $indrap2Fac;

        return $this;
    }

    public function getIndrap3Fac(): ?int
    {
        return $this->indrap3Fac;
    }

    public function setIndrap3Fac(?int $indrap3Fac): self
    {
        $this->indrap3Fac = $indrap3Fac;

        return $this;
    }

    public function getIndrap4Fac(): ?int
    {
        return $this->indrap4Fac;
    }

    public function setIndrap4Fac(?int $indrap4Fac): self
    {
        $this->indrap4Fac = $indrap4Fac;

        return $this;
    }

    public function getIndrap5Fac(): ?int
    {
        return $this->indrap5Fac;
    }

    public function setIndrap5Fac(?int $indrap5Fac): self
    {
        $this->indrap5Fac = $indrap5Fac;

        return $this;
    }

    public function getIndrap6Fac(): ?int
    {
        return $this->indrap6Fac;
    }

    public function setIndrap6Fac(?int $indrap6Fac): self
    {
        $this->indrap6Fac = $indrap6Fac;

        return $this;
    }

    public function getIndrap7Fac(): ?int
    {
        return $this->indrap7Fac;
    }

    public function setIndrap7Fac(?int $indrap7Fac): self
    {
        $this->indrap7Fac = $indrap7Fac;

        return $this;
    }

    public function getIndrap8Fac(): ?int
    {
        return $this->indrap8Fac;
    }

    public function setIndrap8Fac(?int $indrap8Fac): self
    {
        $this->indrap8Fac = $indrap8Fac;

        return $this;
    }

    public function getIndrap9Fac(): ?int
    {
        return $this->indrap9Fac;
    }

    public function setIndrap9Fac(?int $indrap9Fac): self
    {
        $this->indrap9Fac = $indrap9Fac;

        return $this;
    }

    public function getIndrap10Fac(): ?int
    {
        return $this->indrap10Fac;
    }

    public function setIndrap10Fac(?int $indrap10Fac): self
    {
        $this->indrap10Fac = $indrap10Fac;

        return $this;
    }

    public function getPretFac(): ?float
    {
        return $this->pretFac;
    }

    public function setPretFac(?float $pretFac): self
    {
        $this->pretFac = $pretFac;

        return $this;
    }

    public function getIretFac(): ?float
    {
        return $this->iretFac;
    }

    public function setIretFac(?float $iretFac): self
    {
        $this->iretFac = $iretFac;

        return $this;
    }

    public function getEretFac(): ?float
    {
        return $this->eretFac;
    }

    public function setEretFac(?float $eretFac): self
    {
        $this->eretFac = $eretFac;

        return $this;
    }

    public function getAnynaboFac(): ?int
    {
        return $this->anynaboFac;
    }

    public function setAnynaboFac(int $anynaboFac): self
    {
        $this->anynaboFac = $anynaboFac;

        return $this;
    }

    public function getCodrectFac(): ?string
    {
        return $this->codrectFac;
    }

    public function setCodrectFac(?string $codrectFac): self
    {
        $this->codrectFac = $codrectFac;

        return $this;
    }

    public function getFecemailFac(): ?\DateTimeInterface
    {
        return $this->fecemailFac;
    }

    public function setFecemailFac(?\DateTimeInterface $fecemailFac): self
    {
        $this->fecemailFac = $fecemailFac;

        return $this;
    }

    public function getFecftpFac(): ?\DateTimeInterface
    {
        return $this->fecftpFac;
    }

    public function setFecftpFac(?\DateTimeInterface $fecftpFac): self
    {
        $this->fecftpFac = $fecftpFac;

        return $this;
    }

    public function getEnviadasiiFac(): ?\DateTimeInterface
    {
        return $this->enviadasiiFac;
    }

    public function setEnviadasiiFac(?\DateTimeInterface $enviadasiiFac): self
    {
        $this->enviadasiiFac = $enviadasiiFac;

        return $this;
    }


}
