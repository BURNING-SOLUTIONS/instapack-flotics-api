<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturcom
 *
 * @ORM\Table(name="facturcom")
 * @ORM\Entity
 */
class Facturcom
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fao", type="boolean", nullable=false)
     */
    private $bajaFao = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFao = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fao", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFao = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fao", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFao;

    /**
     * @var int
     *
     * @ORM\Column(name="Com_Fao", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $comFao = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFao = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Fao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliFao = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Fao", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depFao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fao", type="datetime", nullable=true)
     */
    private $fecFao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Fao", type="datetime", nullable=true)
     */
    private $fvtoFao;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio1_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio1Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por1_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por1Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio2_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio2Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por2_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por2Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio3_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio3Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por3_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por3Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio4_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio4Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por4_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por4Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio5_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio5Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por5_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por5Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precio6_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $precio6Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Por6_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $por6Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Fao", type="smallint", nullable=true)
     */
    private $bcoFao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Fao", type="smallint", nullable=true)
     */
    private $ageFao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Fao", type="smallint", nullable=true)
     */
    private $dcFao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaFao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Fao", type="smallint", nullable=true)
     */
    private $fpaFao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial1_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial1Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial2_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial2Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial3_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial3Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial4_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial4Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial5_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial5Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial6_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial6Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial7_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial7Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial8_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial8Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial9_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial9Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Parcial10_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $parcial10Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul1_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul1Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul2_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul2Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul3_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul3Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul4_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul4Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul5_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul5Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul6_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul6Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul7_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul7Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul8_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul8Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Resul9_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $resul9Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Resul10_Fao", type="smallint", nullable=true)
     */
    private $resul10Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap1_Fao", type="smallint", nullable=true)
     */
    private $indrap1Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap2_Fao", type="smallint", nullable=true)
     */
    private $indrap2Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap3_Fao", type="smallint", nullable=true)
     */
    private $indrap3Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap4_Fao", type="smallint", nullable=true)
     */
    private $indrap4Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap5_Fao", type="smallint", nullable=true)
     */
    private $indrap5Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap6_Fao", type="smallint", nullable=true)
     */
    private $indrap6Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap7_Fao", type="smallint", nullable=true)
     */
    private $indrap7Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap8_Fao", type="smallint", nullable=true)
     */
    private $indrap8Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap9_Fao", type="smallint", nullable=true)
     */
    private $indrap9Fao = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Indrap10_Fao", type="smallint", nullable=true)
     */
    private $indrap10Fao = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Importe_Fao", type="float", precision=53, scale=0, nullable=true)
     */
    private $importeFao = '0';

    public function getBajaFao(): ?bool
    {
        return $this->bajaFao;
    }

    public function setBajaFao(bool $bajaFao): self
    {
        $this->bajaFao = $bajaFao;

        return $this;
    }

    public function getSucursalFao(): ?int
    {
        return $this->sucursalFao;
    }

    public function getEmpFao(): ?int
    {
        return $this->empFao;
    }

    public function getFabFao(): ?string
    {
        return $this->fabFao;
    }

    public function getComFao(): ?int
    {
        return $this->comFao;
    }

    public function getNumFao(): ?int
    {
        return $this->numFao;
    }

    public function getCliFao(): ?int
    {
        return $this->cliFao;
    }

    public function getDepFao(): ?string
    {
        return $this->depFao;
    }

    public function getFecFao(): ?\DateTimeInterface
    {
        return $this->fecFao;
    }

    public function setFecFao(?\DateTimeInterface $fecFao): self
    {
        $this->fecFao = $fecFao;

        return $this;
    }

    public function getFvtoFao(): ?\DateTimeInterface
    {
        return $this->fvtoFao;
    }

    public function setFvtoFao(?\DateTimeInterface $fvtoFao): self
    {
        $this->fvtoFao = $fvtoFao;

        return $this;
    }

    public function getPrecio1Fao(): ?float
    {
        return $this->precio1Fao;
    }

    public function setPrecio1Fao(?float $precio1Fao): self
    {
        $this->precio1Fao = $precio1Fao;

        return $this;
    }

    public function getPor1Fao(): ?float
    {
        return $this->por1Fao;
    }

    public function setPor1Fao(?float $por1Fao): self
    {
        $this->por1Fao = $por1Fao;

        return $this;
    }

    public function getPrecio2Fao(): ?float
    {
        return $this->precio2Fao;
    }

    public function setPrecio2Fao(?float $precio2Fao): self
    {
        $this->precio2Fao = $precio2Fao;

        return $this;
    }

    public function getPor2Fao(): ?float
    {
        return $this->por2Fao;
    }

    public function setPor2Fao(?float $por2Fao): self
    {
        $this->por2Fao = $por2Fao;

        return $this;
    }

    public function getPrecio3Fao(): ?float
    {
        return $this->precio3Fao;
    }

    public function setPrecio3Fao(?float $precio3Fao): self
    {
        $this->precio3Fao = $precio3Fao;

        return $this;
    }

    public function getPor3Fao(): ?float
    {
        return $this->por3Fao;
    }

    public function setPor3Fao(?float $por3Fao): self
    {
        $this->por3Fao = $por3Fao;

        return $this;
    }

    public function getPrecio4Fao(): ?float
    {
        return $this->precio4Fao;
    }

    public function setPrecio4Fao(?float $precio4Fao): self
    {
        $this->precio4Fao = $precio4Fao;

        return $this;
    }

    public function getPor4Fao(): ?float
    {
        return $this->por4Fao;
    }

    public function setPor4Fao(?float $por4Fao): self
    {
        $this->por4Fao = $por4Fao;

        return $this;
    }

    public function getPrecio5Fao(): ?float
    {
        return $this->precio5Fao;
    }

    public function setPrecio5Fao(?float $precio5Fao): self
    {
        $this->precio5Fao = $precio5Fao;

        return $this;
    }

    public function getPor5Fao(): ?float
    {
        return $this->por5Fao;
    }

    public function setPor5Fao(?float $por5Fao): self
    {
        $this->por5Fao = $por5Fao;

        return $this;
    }

    public function getPrecio6Fao(): ?float
    {
        return $this->precio6Fao;
    }

    public function setPrecio6Fao(?float $precio6Fao): self
    {
        $this->precio6Fao = $precio6Fao;

        return $this;
    }

    public function getPor6Fao(): ?float
    {
        return $this->por6Fao;
    }

    public function setPor6Fao(?float $por6Fao): self
    {
        $this->por6Fao = $por6Fao;

        return $this;
    }

    public function getTotalFao(): ?float
    {
        return $this->totalFao;
    }

    public function setTotalFao(?float $totalFao): self
    {
        $this->totalFao = $totalFao;

        return $this;
    }

    public function getBrutoFao(): ?float
    {
        return $this->brutoFao;
    }

    public function setBrutoFao(?float $brutoFao): self
    {
        $this->brutoFao = $brutoFao;

        return $this;
    }

    public function getBcoFao(): ?int
    {
        return $this->bcoFao;
    }

    public function setBcoFao(?int $bcoFao): self
    {
        $this->bcoFao = $bcoFao;

        return $this;
    }

    public function getAgeFao(): ?int
    {
        return $this->ageFao;
    }

    public function setAgeFao(?int $ageFao): self
    {
        $this->ageFao = $ageFao;

        return $this;
    }

    public function getDcFao(): ?int
    {
        return $this->dcFao;
    }

    public function setDcFao(?int $dcFao): self
    {
        $this->dcFao = $dcFao;

        return $this;
    }

    public function getCtaFao(): ?float
    {
        return $this->ctaFao;
    }

    public function setCtaFao(?float $ctaFao): self
    {
        $this->ctaFao = $ctaFao;

        return $this;
    }

    public function getFpaFao(): ?int
    {
        return $this->fpaFao;
    }

    public function setFpaFao(?int $fpaFao): self
    {
        $this->fpaFao = $fpaFao;

        return $this;
    }

    public function getParcial1Fao(): ?float
    {
        return $this->parcial1Fao;
    }

    public function setParcial1Fao(?float $parcial1Fao): self
    {
        $this->parcial1Fao = $parcial1Fao;

        return $this;
    }

    public function getParcial2Fao(): ?float
    {
        return $this->parcial2Fao;
    }

    public function setParcial2Fao(?float $parcial2Fao): self
    {
        $this->parcial2Fao = $parcial2Fao;

        return $this;
    }

    public function getParcial3Fao(): ?float
    {
        return $this->parcial3Fao;
    }

    public function setParcial3Fao(?float $parcial3Fao): self
    {
        $this->parcial3Fao = $parcial3Fao;

        return $this;
    }

    public function getParcial4Fao(): ?float
    {
        return $this->parcial4Fao;
    }

    public function setParcial4Fao(?float $parcial4Fao): self
    {
        $this->parcial4Fao = $parcial4Fao;

        return $this;
    }

    public function getParcial5Fao(): ?float
    {
        return $this->parcial5Fao;
    }

    public function setParcial5Fao(?float $parcial5Fao): self
    {
        $this->parcial5Fao = $parcial5Fao;

        return $this;
    }

    public function getParcial6Fao(): ?float
    {
        return $this->parcial6Fao;
    }

    public function setParcial6Fao(?float $parcial6Fao): self
    {
        $this->parcial6Fao = $parcial6Fao;

        return $this;
    }

    public function getParcial7Fao(): ?float
    {
        return $this->parcial7Fao;
    }

    public function setParcial7Fao(?float $parcial7Fao): self
    {
        $this->parcial7Fao = $parcial7Fao;

        return $this;
    }

    public function getParcial8Fao(): ?float
    {
        return $this->parcial8Fao;
    }

    public function setParcial8Fao(?float $parcial8Fao): self
    {
        $this->parcial8Fao = $parcial8Fao;

        return $this;
    }

    public function getParcial9Fao(): ?float
    {
        return $this->parcial9Fao;
    }

    public function setParcial9Fao(?float $parcial9Fao): self
    {
        $this->parcial9Fao = $parcial9Fao;

        return $this;
    }

    public function getParcial10Fao(): ?float
    {
        return $this->parcial10Fao;
    }

    public function setParcial10Fao(?float $parcial10Fao): self
    {
        $this->parcial10Fao = $parcial10Fao;

        return $this;
    }

    public function getResul1Fao(): ?float
    {
        return $this->resul1Fao;
    }

    public function setResul1Fao(?float $resul1Fao): self
    {
        $this->resul1Fao = $resul1Fao;

        return $this;
    }

    public function getResul2Fao(): ?float
    {
        return $this->resul2Fao;
    }

    public function setResul2Fao(?float $resul2Fao): self
    {
        $this->resul2Fao = $resul2Fao;

        return $this;
    }

    public function getResul3Fao(): ?float
    {
        return $this->resul3Fao;
    }

    public function setResul3Fao(?float $resul3Fao): self
    {
        $this->resul3Fao = $resul3Fao;

        return $this;
    }

    public function getResul4Fao(): ?float
    {
        return $this->resul4Fao;
    }

    public function setResul4Fao(?float $resul4Fao): self
    {
        $this->resul4Fao = $resul4Fao;

        return $this;
    }

    public function getResul5Fao(): ?float
    {
        return $this->resul5Fao;
    }

    public function setResul5Fao(?float $resul5Fao): self
    {
        $this->resul5Fao = $resul5Fao;

        return $this;
    }

    public function getResul6Fao(): ?float
    {
        return $this->resul6Fao;
    }

    public function setResul6Fao(?float $resul6Fao): self
    {
        $this->resul6Fao = $resul6Fao;

        return $this;
    }

    public function getResul7Fao(): ?float
    {
        return $this->resul7Fao;
    }

    public function setResul7Fao(?float $resul7Fao): self
    {
        $this->resul7Fao = $resul7Fao;

        return $this;
    }

    public function getResul8Fao(): ?float
    {
        return $this->resul8Fao;
    }

    public function setResul8Fao(?float $resul8Fao): self
    {
        $this->resul8Fao = $resul8Fao;

        return $this;
    }

    public function getResul9Fao(): ?float
    {
        return $this->resul9Fao;
    }

    public function setResul9Fao(?float $resul9Fao): self
    {
        $this->resul9Fao = $resul9Fao;

        return $this;
    }

    public function getResul10Fao(): ?int
    {
        return $this->resul10Fao;
    }

    public function setResul10Fao(?int $resul10Fao): self
    {
        $this->resul10Fao = $resul10Fao;

        return $this;
    }

    public function getIndrap1Fao(): ?int
    {
        return $this->indrap1Fao;
    }

    public function setIndrap1Fao(?int $indrap1Fao): self
    {
        $this->indrap1Fao = $indrap1Fao;

        return $this;
    }

    public function getIndrap2Fao(): ?int
    {
        return $this->indrap2Fao;
    }

    public function setIndrap2Fao(?int $indrap2Fao): self
    {
        $this->indrap2Fao = $indrap2Fao;

        return $this;
    }

    public function getIndrap3Fao(): ?int
    {
        return $this->indrap3Fao;
    }

    public function setIndrap3Fao(?int $indrap3Fao): self
    {
        $this->indrap3Fao = $indrap3Fao;

        return $this;
    }

    public function getIndrap4Fao(): ?int
    {
        return $this->indrap4Fao;
    }

    public function setIndrap4Fao(?int $indrap4Fao): self
    {
        $this->indrap4Fao = $indrap4Fao;

        return $this;
    }

    public function getIndrap5Fao(): ?int
    {
        return $this->indrap5Fao;
    }

    public function setIndrap5Fao(?int $indrap5Fao): self
    {
        $this->indrap5Fao = $indrap5Fao;

        return $this;
    }

    public function getIndrap6Fao(): ?int
    {
        return $this->indrap6Fao;
    }

    public function setIndrap6Fao(?int $indrap6Fao): self
    {
        $this->indrap6Fao = $indrap6Fao;

        return $this;
    }

    public function getIndrap7Fao(): ?int
    {
        return $this->indrap7Fao;
    }

    public function setIndrap7Fao(?int $indrap7Fao): self
    {
        $this->indrap7Fao = $indrap7Fao;

        return $this;
    }

    public function getIndrap8Fao(): ?int
    {
        return $this->indrap8Fao;
    }

    public function setIndrap8Fao(?int $indrap8Fao): self
    {
        $this->indrap8Fao = $indrap8Fao;

        return $this;
    }

    public function getIndrap9Fao(): ?int
    {
        return $this->indrap9Fao;
    }

    public function setIndrap9Fao(?int $indrap9Fao): self
    {
        $this->indrap9Fao = $indrap9Fao;

        return $this;
    }

    public function getIndrap10Fao(): ?int
    {
        return $this->indrap10Fao;
    }

    public function setIndrap10Fao(?int $indrap10Fao): self
    {
        $this->indrap10Fao = $indrap10Fao;

        return $this;
    }

    public function getImporteFao(): ?float
    {
        return $this->importeFao;
    }

    public function setImporteFao(?float $importeFao): self
    {
        $this->importeFao = $importeFao;

        return $this;
    }


}
