<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturvia
 *
 * @ORM\Table(name="facturvia")
 * @ORM\Entity
 */
class Facturvia
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fav", type="boolean", nullable=false)
     */
    private $bajaFav = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFav = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fav", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFav = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Fav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaFav = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fav", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFav;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFav = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fav", type="datetime", nullable=true)
     */
    private $fecFav;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Fav", type="datetime", nullable=true)
     */
    private $fvtoFav;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="BrutoExe_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoexeFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prec_Fav", type="float", precision=24, scale=0, nullable=true)
     */
    private $precFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Irec_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $irecFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idto_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $idtoFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Edto_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $edtoFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Fav", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exento_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $exentoFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nabo_Fav", type="integer", nullable=true)
     */
    private $naboFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Loc_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $locFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Prv_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $prvFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Nac_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $nacFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Int_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $intFav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial1_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial1Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial2_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial2Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial3_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial3Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial4_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial4Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial5_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial5Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial6_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial6Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial7_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial7Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial8_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial8Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial9_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial9Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial10_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial10Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul1_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul1Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul2_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul2Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul3_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul3Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul4_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul4Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul5_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul5Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul6_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul6Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul7_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul7Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul8_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul8Fav = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul9_Fav", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul9Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Resul10_Fav", type="smallint", nullable=true)
     */
    private $resul10Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap1_Fav", type="smallint", nullable=true)
     */
    private $indrap1Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap2_Fav", type="smallint", nullable=true)
     */
    private $indrap2Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap3_Fav", type="smallint", nullable=true)
     */
    private $indrap3Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap4_Fav", type="smallint", nullable=true)
     */
    private $indrap4Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap5_Fav", type="smallint", nullable=true)
     */
    private $indrap5Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap6_Fav", type="smallint", nullable=true)
     */
    private $indrap6Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap7_Fav", type="smallint", nullable=true)
     */
    private $indrap7Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap8_Fav", type="smallint", nullable=true)
     */
    private $indrap8Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap9_Fav", type="smallint", nullable=true)
     */
    private $indrap9Fav = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap10_Fav", type="smallint", nullable=true)
     */
    private $indrap10Fav = '0';

    public function getBajaFav(): ?bool
    {
        return $this->bajaFav;
    }

    public function setBajaFav(bool $bajaFav): self
    {
        $this->bajaFav = $bajaFav;

        return $this;
    }

    public function getSucursalFav(): ?int
    {
        return $this->sucursalFav;
    }

    public function getEmpFav(): ?int
    {
        return $this->empFav;
    }

    public function getViaFav(): ?int
    {
        return $this->viaFav;
    }

    public function getFabFav(): ?string
    {
        return $this->fabFav;
    }

    public function getNumFav(): ?int
    {
        return $this->numFav;
    }

    public function getFecFav(): ?\DateTimeInterface
    {
        return $this->fecFav;
    }

    public function setFecFav(?\DateTimeInterface $fecFav): self
    {
        $this->fecFav = $fecFav;

        return $this;
    }

    public function getFvtoFav(): ?\DateTimeInterface
    {
        return $this->fvtoFav;
    }

    public function setFvtoFav(?\DateTimeInterface $fvtoFav): self
    {
        $this->fvtoFav = $fvtoFav;

        return $this;
    }

    public function getBrutoFav(): ?float
    {
        return $this->brutoFav;
    }

    public function setBrutoFav(?float $brutoFav): self
    {
        $this->brutoFav = $brutoFav;

        return $this;
    }

    public function getBrutoexeFav(): ?float
    {
        return $this->brutoexeFav;
    }

    public function setBrutoexeFav(?float $brutoexeFav): self
    {
        $this->brutoexeFav = $brutoexeFav;

        return $this;
    }

    public function getPrecFav(): ?float
    {
        return $this->precFav;
    }

    public function setPrecFav(?float $precFav): self
    {
        $this->precFav = $precFav;

        return $this;
    }

    public function getIrecFav(): ?float
    {
        return $this->irecFav;
    }

    public function setIrecFav(?float $irecFav): self
    {
        $this->irecFav = $irecFav;

        return $this;
    }

    public function getIdtoFav(): ?float
    {
        return $this->idtoFav;
    }

    public function setIdtoFav(?float $idtoFav): self
    {
        $this->idtoFav = $idtoFav;

        return $this;
    }

    public function getEdtoFav(): ?float
    {
        return $this->edtoFav;
    }

    public function setEdtoFav(?float $edtoFav): self
    {
        $this->edtoFav = $edtoFav;

        return $this;
    }

    public function getBaseFav(): ?float
    {
        return $this->baseFav;
    }

    public function setBaseFav(?float $baseFav): self
    {
        $this->baseFav = $baseFav;

        return $this;
    }

    public function getPivaFav(): ?float
    {
        return $this->pivaFav;
    }

    public function setPivaFav(?float $pivaFav): self
    {
        $this->pivaFav = $pivaFav;

        return $this;
    }

    public function getIivaFav(): ?float
    {
        return $this->iivaFav;
    }

    public function setIivaFav(?float $iivaFav): self
    {
        $this->iivaFav = $iivaFav;

        return $this;
    }

    public function getExentoFav(): ?float
    {
        return $this->exentoFav;
    }

    public function setExentoFav(?float $exentoFav): self
    {
        $this->exentoFav = $exentoFav;

        return $this;
    }

    public function getTotalFav(): ?float
    {
        return $this->totalFav;
    }

    public function setTotalFav(?float $totalFav): self
    {
        $this->totalFav = $totalFav;

        return $this;
    }

    public function getNaboFav(): ?int
    {
        return $this->naboFav;
    }

    public function setNaboFav(?int $naboFav): self
    {
        $this->naboFav = $naboFav;

        return $this;
    }

    public function getLocFav(): ?float
    {
        return $this->locFav;
    }

    public function setLocFav(?float $locFav): self
    {
        $this->locFav = $locFav;

        return $this;
    }

    public function getPrvFav(): ?float
    {
        return $this->prvFav;
    }

    public function setPrvFav(?float $prvFav): self
    {
        $this->prvFav = $prvFav;

        return $this;
    }

    public function getNacFav(): ?float
    {
        return $this->nacFav;
    }

    public function setNacFav(?float $nacFav): self
    {
        $this->nacFav = $nacFav;

        return $this;
    }

    public function getIntFav(): ?float
    {
        return $this->intFav;
    }

    public function setIntFav(?float $intFav): self
    {
        $this->intFav = $intFav;

        return $this;
    }

    public function getParcial1Fav(): ?float
    {
        return $this->parcial1Fav;
    }

    public function setParcial1Fav(?float $parcial1Fav): self
    {
        $this->parcial1Fav = $parcial1Fav;

        return $this;
    }

    public function getParcial2Fav(): ?float
    {
        return $this->parcial2Fav;
    }

    public function setParcial2Fav(?float $parcial2Fav): self
    {
        $this->parcial2Fav = $parcial2Fav;

        return $this;
    }

    public function getParcial3Fav(): ?float
    {
        return $this->parcial3Fav;
    }

    public function setParcial3Fav(?float $parcial3Fav): self
    {
        $this->parcial3Fav = $parcial3Fav;

        return $this;
    }

    public function getParcial4Fav(): ?float
    {
        return $this->parcial4Fav;
    }

    public function setParcial4Fav(?float $parcial4Fav): self
    {
        $this->parcial4Fav = $parcial4Fav;

        return $this;
    }

    public function getParcial5Fav(): ?float
    {
        return $this->parcial5Fav;
    }

    public function setParcial5Fav(?float $parcial5Fav): self
    {
        $this->parcial5Fav = $parcial5Fav;

        return $this;
    }

    public function getParcial6Fav(): ?float
    {
        return $this->parcial6Fav;
    }

    public function setParcial6Fav(?float $parcial6Fav): self
    {
        $this->parcial6Fav = $parcial6Fav;

        return $this;
    }

    public function getParcial7Fav(): ?float
    {
        return $this->parcial7Fav;
    }

    public function setParcial7Fav(?float $parcial7Fav): self
    {
        $this->parcial7Fav = $parcial7Fav;

        return $this;
    }

    public function getParcial8Fav(): ?float
    {
        return $this->parcial8Fav;
    }

    public function setParcial8Fav(?float $parcial8Fav): self
    {
        $this->parcial8Fav = $parcial8Fav;

        return $this;
    }

    public function getParcial9Fav(): ?float
    {
        return $this->parcial9Fav;
    }

    public function setParcial9Fav(?float $parcial9Fav): self
    {
        $this->parcial9Fav = $parcial9Fav;

        return $this;
    }

    public function getParcial10Fav(): ?float
    {
        return $this->parcial10Fav;
    }

    public function setParcial10Fav(?float $parcial10Fav): self
    {
        $this->parcial10Fav = $parcial10Fav;

        return $this;
    }

    public function getResul1Fav(): ?float
    {
        return $this->resul1Fav;
    }

    public function setResul1Fav(?float $resul1Fav): self
    {
        $this->resul1Fav = $resul1Fav;

        return $this;
    }

    public function getResul2Fav(): ?float
    {
        return $this->resul2Fav;
    }

    public function setResul2Fav(?float $resul2Fav): self
    {
        $this->resul2Fav = $resul2Fav;

        return $this;
    }

    public function getResul3Fav(): ?float
    {
        return $this->resul3Fav;
    }

    public function setResul3Fav(?float $resul3Fav): self
    {
        $this->resul3Fav = $resul3Fav;

        return $this;
    }

    public function getResul4Fav(): ?float
    {
        return $this->resul4Fav;
    }

    public function setResul4Fav(?float $resul4Fav): self
    {
        $this->resul4Fav = $resul4Fav;

        return $this;
    }

    public function getResul5Fav(): ?float
    {
        return $this->resul5Fav;
    }

    public function setResul5Fav(?float $resul5Fav): self
    {
        $this->resul5Fav = $resul5Fav;

        return $this;
    }

    public function getResul6Fav(): ?float
    {
        return $this->resul6Fav;
    }

    public function setResul6Fav(?float $resul6Fav): self
    {
        $this->resul6Fav = $resul6Fav;

        return $this;
    }

    public function getResul7Fav(): ?float
    {
        return $this->resul7Fav;
    }

    public function setResul7Fav(?float $resul7Fav): self
    {
        $this->resul7Fav = $resul7Fav;

        return $this;
    }

    public function getResul8Fav(): ?float
    {
        return $this->resul8Fav;
    }

    public function setResul8Fav(?float $resul8Fav): self
    {
        $this->resul8Fav = $resul8Fav;

        return $this;
    }

    public function getResul9Fav(): ?float
    {
        return $this->resul9Fav;
    }

    public function setResul9Fav(?float $resul9Fav): self
    {
        $this->resul9Fav = $resul9Fav;

        return $this;
    }

    public function getResul10Fav(): ?int
    {
        return $this->resul10Fav;
    }

    public function setResul10Fav(?int $resul10Fav): self
    {
        $this->resul10Fav = $resul10Fav;

        return $this;
    }

    public function getIndrap1Fav(): ?int
    {
        return $this->indrap1Fav;
    }

    public function setIndrap1Fav(?int $indrap1Fav): self
    {
        $this->indrap1Fav = $indrap1Fav;

        return $this;
    }

    public function getIndrap2Fav(): ?int
    {
        return $this->indrap2Fav;
    }

    public function setIndrap2Fav(?int $indrap2Fav): self
    {
        $this->indrap2Fav = $indrap2Fav;

        return $this;
    }

    public function getIndrap3Fav(): ?int
    {
        return $this->indrap3Fav;
    }

    public function setIndrap3Fav(?int $indrap3Fav): self
    {
        $this->indrap3Fav = $indrap3Fav;

        return $this;
    }

    public function getIndrap4Fav(): ?int
    {
        return $this->indrap4Fav;
    }

    public function setIndrap4Fav(?int $indrap4Fav): self
    {
        $this->indrap4Fav = $indrap4Fav;

        return $this;
    }

    public function getIndrap5Fav(): ?int
    {
        return $this->indrap5Fav;
    }

    public function setIndrap5Fav(?int $indrap5Fav): self
    {
        $this->indrap5Fav = $indrap5Fav;

        return $this;
    }

    public function getIndrap6Fav(): ?int
    {
        return $this->indrap6Fav;
    }

    public function setIndrap6Fav(?int $indrap6Fav): self
    {
        $this->indrap6Fav = $indrap6Fav;

        return $this;
    }

    public function getIndrap7Fav(): ?int
    {
        return $this->indrap7Fav;
    }

    public function setIndrap7Fav(?int $indrap7Fav): self
    {
        $this->indrap7Fav = $indrap7Fav;

        return $this;
    }

    public function getIndrap8Fav(): ?int
    {
        return $this->indrap8Fav;
    }

    public function setIndrap8Fav(?int $indrap8Fav): self
    {
        $this->indrap8Fav = $indrap8Fav;

        return $this;
    }

    public function getIndrap9Fav(): ?int
    {
        return $this->indrap9Fav;
    }

    public function setIndrap9Fav(?int $indrap9Fav): self
    {
        $this->indrap9Fav = $indrap9Fav;

        return $this;
    }

    public function getIndrap10Fav(): ?int
    {
        return $this->indrap10Fav;
    }

    public function setIndrap10Fav(?int $indrap10Fav): self
    {
        $this->indrap10Fav = $indrap10Fav;

        return $this;
    }


}
