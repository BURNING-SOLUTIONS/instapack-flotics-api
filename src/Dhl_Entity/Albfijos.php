<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albfijos
 *
 * @ORM\Table(name="albfijos")
 * @ORM\Entity
 */
class Albfijos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Afi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalAfi;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Afi", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empAfi;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Afi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numAfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Afi", type="integer", nullable=true)
     */
    private $cliAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Afi", type="string", length=12, nullable=true)
     */
    private $depAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Afi", type="string", length=5, nullable=true)
     */
    private $tipAfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Afi", type="integer", nullable=true)
     */
    private $menAfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Distrib_Afi", type="integer", nullable=true)
     */
    private $distribAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Afi", type="string", length=100, nullable=true)
     */
    private $refAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tex_Afi", type="string", length=50, nullable=true)
     */
    private $texAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Marca_Afi", type="string", length=1, nullable=true)
     */
    private $marcaAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Afi", type="string", length=100, nullable=true)
     */
    private $descAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni1_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni1Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp1_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp1Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco1_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco1Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi1_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi1Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par1_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par1Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni2_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni2Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp2_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp2Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco2_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco2Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi2_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi2Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par2_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par2Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni3_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni3Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp3_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp3Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco3_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco3Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi3_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi3Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par3_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par3Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni4_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni4Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp4_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp4Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco4_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco4Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi4_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi4Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par4_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par4Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni5_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni5Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp5_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp5Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco5_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco5Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi5_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi5Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par5_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par5Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni6_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni6Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp6_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp6Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco6_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco6Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi6_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi6Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par6_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par6Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni7_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni7Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp7_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp7Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco7_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco7Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi7_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi7Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par7_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par7Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni8_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni8Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp8_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp8Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco8_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco8Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi8_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi8Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par8_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par8Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni9_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni9Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp9_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp9Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco9_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco9Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi9_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi9Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par9_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par9Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni10_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni10Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp10_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp10Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco10_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco10Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi10_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi10Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par10_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par10Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iac_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $iacAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iam_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $iamAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idi_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $idiAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iar_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $iarAfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Afi", type="smallint", nullable=true)
     */
    private $viaAfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele1_Afi", type="string", length=5, nullable=true)
     */
    private $ele1Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele2_Afi", type="string", length=5, nullable=true)
     */
    private $ele2Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele3_Afi", type="string", length=5, nullable=true)
     */
    private $ele3Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele4_Afi", type="string", length=5, nullable=true)
     */
    private $ele4Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele5_Afi", type="string", length=5, nullable=true)
     */
    private $ele5Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele6_Afi", type="string", length=5, nullable=true)
     */
    private $ele6Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele7_Afi", type="string", length=5, nullable=true)
     */
    private $ele7Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele8_Afi", type="string", length=5, nullable=true)
     */
    private $ele8Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele9_Afi", type="string", length=5, nullable=true)
     */
    private $ele9Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele10_Afi", type="string", length=5, nullable=true)
     */
    private $ele10Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref2_Afi", type="string", length=100, nullable=true)
     */
    private $ref2Afi;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Iva_Afi", type="boolean", nullable=true)
     */
    private $ivaAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Seguro_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $seguroAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ICarbuCli_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $icarbucliAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="ICarbuMen_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $icarbumenAfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni11_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni11Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp11_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp11Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco11_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco11Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi11_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi11Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par11_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par11Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni12_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni12Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp12_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp12Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco12_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco12Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi12_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi12Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par12_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par12Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni13_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni13Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp13_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp13Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco13_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco13Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi13_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi13Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par13_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par13Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni14_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni14Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp14_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp14Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco14_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco14Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi14_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi14Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par14_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par14Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Uni15_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $uni15Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pvp15_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvp15Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pco15_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pco15Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdi15_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pdi15Afi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Par15_Afi", type="float", precision=53, scale=0, nullable=true)
     */
    private $par15Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele11_Afi", type="string", length=5, nullable=true)
     */
    private $ele11Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele12_Afi", type="string", length=5, nullable=true)
     */
    private $ele12Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele13_Afi", type="string", length=5, nullable=true)
     */
    private $ele13Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele14_Afi", type="string", length=5, nullable=true)
     */
    private $ele14Afi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele15_Afi", type="string", length=5, nullable=true)
     */
    private $ele15Afi;

    public function getSucursalAfi(): ?int
    {
        return $this->sucursalAfi;
    }

    public function getEmpAfi(): ?int
    {
        return $this->empAfi;
    }

    public function getNumAfi(): ?int
    {
        return $this->numAfi;
    }

    public function getCliAfi(): ?int
    {
        return $this->cliAfi;
    }

    public function setCliAfi(?int $cliAfi): self
    {
        $this->cliAfi = $cliAfi;

        return $this;
    }

    public function getDepAfi(): ?string
    {
        return $this->depAfi;
    }

    public function setDepAfi(?string $depAfi): self
    {
        $this->depAfi = $depAfi;

        return $this;
    }

    public function getTipAfi(): ?string
    {
        return $this->tipAfi;
    }

    public function setTipAfi(?string $tipAfi): self
    {
        $this->tipAfi = $tipAfi;

        return $this;
    }

    public function getMenAfi(): ?int
    {
        return $this->menAfi;
    }

    public function setMenAfi(?int $menAfi): self
    {
        $this->menAfi = $menAfi;

        return $this;
    }

    public function getDistribAfi(): ?int
    {
        return $this->distribAfi;
    }

    public function setDistribAfi(?int $distribAfi): self
    {
        $this->distribAfi = $distribAfi;

        return $this;
    }

    public function getRefAfi(): ?string
    {
        return $this->refAfi;
    }

    public function setRefAfi(?string $refAfi): self
    {
        $this->refAfi = $refAfi;

        return $this;
    }

    public function getTexAfi(): ?string
    {
        return $this->texAfi;
    }

    public function setTexAfi(?string $texAfi): self
    {
        $this->texAfi = $texAfi;

        return $this;
    }

    public function getMarcaAfi(): ?string
    {
        return $this->marcaAfi;
    }

    public function setMarcaAfi(?string $marcaAfi): self
    {
        $this->marcaAfi = $marcaAfi;

        return $this;
    }

    public function getDescAfi(): ?string
    {
        return $this->descAfi;
    }

    public function setDescAfi(?string $descAfi): self
    {
        $this->descAfi = $descAfi;

        return $this;
    }

    public function getUni1Afi(): ?float
    {
        return $this->uni1Afi;
    }

    public function setUni1Afi(?float $uni1Afi): self
    {
        $this->uni1Afi = $uni1Afi;

        return $this;
    }

    public function getPvp1Afi(): ?float
    {
        return $this->pvp1Afi;
    }

    public function setPvp1Afi(?float $pvp1Afi): self
    {
        $this->pvp1Afi = $pvp1Afi;

        return $this;
    }

    public function getPco1Afi(): ?float
    {
        return $this->pco1Afi;
    }

    public function setPco1Afi(?float $pco1Afi): self
    {
        $this->pco1Afi = $pco1Afi;

        return $this;
    }

    public function getPdi1Afi(): ?float
    {
        return $this->pdi1Afi;
    }

    public function setPdi1Afi(?float $pdi1Afi): self
    {
        $this->pdi1Afi = $pdi1Afi;

        return $this;
    }

    public function getPar1Afi(): ?float
    {
        return $this->par1Afi;
    }

    public function setPar1Afi(?float $par1Afi): self
    {
        $this->par1Afi = $par1Afi;

        return $this;
    }

    public function getUni2Afi(): ?float
    {
        return $this->uni2Afi;
    }

    public function setUni2Afi(?float $uni2Afi): self
    {
        $this->uni2Afi = $uni2Afi;

        return $this;
    }

    public function getPvp2Afi(): ?float
    {
        return $this->pvp2Afi;
    }

    public function setPvp2Afi(?float $pvp2Afi): self
    {
        $this->pvp2Afi = $pvp2Afi;

        return $this;
    }

    public function getPco2Afi(): ?float
    {
        return $this->pco2Afi;
    }

    public function setPco2Afi(?float $pco2Afi): self
    {
        $this->pco2Afi = $pco2Afi;

        return $this;
    }

    public function getPdi2Afi(): ?float
    {
        return $this->pdi2Afi;
    }

    public function setPdi2Afi(?float $pdi2Afi): self
    {
        $this->pdi2Afi = $pdi2Afi;

        return $this;
    }

    public function getPar2Afi(): ?float
    {
        return $this->par2Afi;
    }

    public function setPar2Afi(?float $par2Afi): self
    {
        $this->par2Afi = $par2Afi;

        return $this;
    }

    public function getUni3Afi(): ?float
    {
        return $this->uni3Afi;
    }

    public function setUni3Afi(?float $uni3Afi): self
    {
        $this->uni3Afi = $uni3Afi;

        return $this;
    }

    public function getPvp3Afi(): ?float
    {
        return $this->pvp3Afi;
    }

    public function setPvp3Afi(?float $pvp3Afi): self
    {
        $this->pvp3Afi = $pvp3Afi;

        return $this;
    }

    public function getPco3Afi(): ?float
    {
        return $this->pco3Afi;
    }

    public function setPco3Afi(?float $pco3Afi): self
    {
        $this->pco3Afi = $pco3Afi;

        return $this;
    }

    public function getPdi3Afi(): ?float
    {
        return $this->pdi3Afi;
    }

    public function setPdi3Afi(?float $pdi3Afi): self
    {
        $this->pdi3Afi = $pdi3Afi;

        return $this;
    }

    public function getPar3Afi(): ?float
    {
        return $this->par3Afi;
    }

    public function setPar3Afi(?float $par3Afi): self
    {
        $this->par3Afi = $par3Afi;

        return $this;
    }

    public function getUni4Afi(): ?float
    {
        return $this->uni4Afi;
    }

    public function setUni4Afi(?float $uni4Afi): self
    {
        $this->uni4Afi = $uni4Afi;

        return $this;
    }

    public function getPvp4Afi(): ?float
    {
        return $this->pvp4Afi;
    }

    public function setPvp4Afi(?float $pvp4Afi): self
    {
        $this->pvp4Afi = $pvp4Afi;

        return $this;
    }

    public function getPco4Afi(): ?float
    {
        return $this->pco4Afi;
    }

    public function setPco4Afi(?float $pco4Afi): self
    {
        $this->pco4Afi = $pco4Afi;

        return $this;
    }

    public function getPdi4Afi(): ?float
    {
        return $this->pdi4Afi;
    }

    public function setPdi4Afi(?float $pdi4Afi): self
    {
        $this->pdi4Afi = $pdi4Afi;

        return $this;
    }

    public function getPar4Afi(): ?float
    {
        return $this->par4Afi;
    }

    public function setPar4Afi(?float $par4Afi): self
    {
        $this->par4Afi = $par4Afi;

        return $this;
    }

    public function getUni5Afi(): ?float
    {
        return $this->uni5Afi;
    }

    public function setUni5Afi(?float $uni5Afi): self
    {
        $this->uni5Afi = $uni5Afi;

        return $this;
    }

    public function getPvp5Afi(): ?float
    {
        return $this->pvp5Afi;
    }

    public function setPvp5Afi(?float $pvp5Afi): self
    {
        $this->pvp5Afi = $pvp5Afi;

        return $this;
    }

    public function getPco5Afi(): ?float
    {
        return $this->pco5Afi;
    }

    public function setPco5Afi(?float $pco5Afi): self
    {
        $this->pco5Afi = $pco5Afi;

        return $this;
    }

    public function getPdi5Afi(): ?float
    {
        return $this->pdi5Afi;
    }

    public function setPdi5Afi(?float $pdi5Afi): self
    {
        $this->pdi5Afi = $pdi5Afi;

        return $this;
    }

    public function getPar5Afi(): ?float
    {
        return $this->par5Afi;
    }

    public function setPar5Afi(?float $par5Afi): self
    {
        $this->par5Afi = $par5Afi;

        return $this;
    }

    public function getUni6Afi(): ?float
    {
        return $this->uni6Afi;
    }

    public function setUni6Afi(?float $uni6Afi): self
    {
        $this->uni6Afi = $uni6Afi;

        return $this;
    }

    public function getPvp6Afi(): ?float
    {
        return $this->pvp6Afi;
    }

    public function setPvp6Afi(?float $pvp6Afi): self
    {
        $this->pvp6Afi = $pvp6Afi;

        return $this;
    }

    public function getPco6Afi(): ?float
    {
        return $this->pco6Afi;
    }

    public function setPco6Afi(?float $pco6Afi): self
    {
        $this->pco6Afi = $pco6Afi;

        return $this;
    }

    public function getPdi6Afi(): ?float
    {
        return $this->pdi6Afi;
    }

    public function setPdi6Afi(?float $pdi6Afi): self
    {
        $this->pdi6Afi = $pdi6Afi;

        return $this;
    }

    public function getPar6Afi(): ?float
    {
        return $this->par6Afi;
    }

    public function setPar6Afi(?float $par6Afi): self
    {
        $this->par6Afi = $par6Afi;

        return $this;
    }

    public function getUni7Afi(): ?float
    {
        return $this->uni7Afi;
    }

    public function setUni7Afi(?float $uni7Afi): self
    {
        $this->uni7Afi = $uni7Afi;

        return $this;
    }

    public function getPvp7Afi(): ?float
    {
        return $this->pvp7Afi;
    }

    public function setPvp7Afi(?float $pvp7Afi): self
    {
        $this->pvp7Afi = $pvp7Afi;

        return $this;
    }

    public function getPco7Afi(): ?float
    {
        return $this->pco7Afi;
    }

    public function setPco7Afi(?float $pco7Afi): self
    {
        $this->pco7Afi = $pco7Afi;

        return $this;
    }

    public function getPdi7Afi(): ?float
    {
        return $this->pdi7Afi;
    }

    public function setPdi7Afi(?float $pdi7Afi): self
    {
        $this->pdi7Afi = $pdi7Afi;

        return $this;
    }

    public function getPar7Afi(): ?float
    {
        return $this->par7Afi;
    }

    public function setPar7Afi(?float $par7Afi): self
    {
        $this->par7Afi = $par7Afi;

        return $this;
    }

    public function getUni8Afi(): ?float
    {
        return $this->uni8Afi;
    }

    public function setUni8Afi(?float $uni8Afi): self
    {
        $this->uni8Afi = $uni8Afi;

        return $this;
    }

    public function getPvp8Afi(): ?float
    {
        return $this->pvp8Afi;
    }

    public function setPvp8Afi(?float $pvp8Afi): self
    {
        $this->pvp8Afi = $pvp8Afi;

        return $this;
    }

    public function getPco8Afi(): ?float
    {
        return $this->pco8Afi;
    }

    public function setPco8Afi(?float $pco8Afi): self
    {
        $this->pco8Afi = $pco8Afi;

        return $this;
    }

    public function getPdi8Afi(): ?float
    {
        return $this->pdi8Afi;
    }

    public function setPdi8Afi(?float $pdi8Afi): self
    {
        $this->pdi8Afi = $pdi8Afi;

        return $this;
    }

    public function getPar8Afi(): ?float
    {
        return $this->par8Afi;
    }

    public function setPar8Afi(?float $par8Afi): self
    {
        $this->par8Afi = $par8Afi;

        return $this;
    }

    public function getUni9Afi(): ?float
    {
        return $this->uni9Afi;
    }

    public function setUni9Afi(?float $uni9Afi): self
    {
        $this->uni9Afi = $uni9Afi;

        return $this;
    }

    public function getPvp9Afi(): ?float
    {
        return $this->pvp9Afi;
    }

    public function setPvp9Afi(?float $pvp9Afi): self
    {
        $this->pvp9Afi = $pvp9Afi;

        return $this;
    }

    public function getPco9Afi(): ?float
    {
        return $this->pco9Afi;
    }

    public function setPco9Afi(?float $pco9Afi): self
    {
        $this->pco9Afi = $pco9Afi;

        return $this;
    }

    public function getPdi9Afi(): ?float
    {
        return $this->pdi9Afi;
    }

    public function setPdi9Afi(?float $pdi9Afi): self
    {
        $this->pdi9Afi = $pdi9Afi;

        return $this;
    }

    public function getPar9Afi(): ?float
    {
        return $this->par9Afi;
    }

    public function setPar9Afi(?float $par9Afi): self
    {
        $this->par9Afi = $par9Afi;

        return $this;
    }

    public function getUni10Afi(): ?float
    {
        return $this->uni10Afi;
    }

    public function setUni10Afi(?float $uni10Afi): self
    {
        $this->uni10Afi = $uni10Afi;

        return $this;
    }

    public function getPvp10Afi(): ?float
    {
        return $this->pvp10Afi;
    }

    public function setPvp10Afi(?float $pvp10Afi): self
    {
        $this->pvp10Afi = $pvp10Afi;

        return $this;
    }

    public function getPco10Afi(): ?float
    {
        return $this->pco10Afi;
    }

    public function setPco10Afi(?float $pco10Afi): self
    {
        $this->pco10Afi = $pco10Afi;

        return $this;
    }

    public function getPdi10Afi(): ?float
    {
        return $this->pdi10Afi;
    }

    public function setPdi10Afi(?float $pdi10Afi): self
    {
        $this->pdi10Afi = $pdi10Afi;

        return $this;
    }

    public function getPar10Afi(): ?float
    {
        return $this->par10Afi;
    }

    public function setPar10Afi(?float $par10Afi): self
    {
        $this->par10Afi = $par10Afi;

        return $this;
    }

    public function getIacAfi(): ?float
    {
        return $this->iacAfi;
    }

    public function setIacAfi(?float $iacAfi): self
    {
        $this->iacAfi = $iacAfi;

        return $this;
    }

    public function getIamAfi(): ?float
    {
        return $this->iamAfi;
    }

    public function setIamAfi(?float $iamAfi): self
    {
        $this->iamAfi = $iamAfi;

        return $this;
    }

    public function getIdiAfi(): ?float
    {
        return $this->idiAfi;
    }

    public function setIdiAfi(?float $idiAfi): self
    {
        $this->idiAfi = $idiAfi;

        return $this;
    }

    public function getIarAfi(): ?float
    {
        return $this->iarAfi;
    }

    public function setIarAfi(?float $iarAfi): self
    {
        $this->iarAfi = $iarAfi;

        return $this;
    }

    public function getViaAfi(): ?int
    {
        return $this->viaAfi;
    }

    public function setViaAfi(?int $viaAfi): self
    {
        $this->viaAfi = $viaAfi;

        return $this;
    }

    public function getEle1Afi(): ?string
    {
        return $this->ele1Afi;
    }

    public function setEle1Afi(?string $ele1Afi): self
    {
        $this->ele1Afi = $ele1Afi;

        return $this;
    }

    public function getEle2Afi(): ?string
    {
        return $this->ele2Afi;
    }

    public function setEle2Afi(?string $ele2Afi): self
    {
        $this->ele2Afi = $ele2Afi;

        return $this;
    }

    public function getEle3Afi(): ?string
    {
        return $this->ele3Afi;
    }

    public function setEle3Afi(?string $ele3Afi): self
    {
        $this->ele3Afi = $ele3Afi;

        return $this;
    }

    public function getEle4Afi(): ?string
    {
        return $this->ele4Afi;
    }

    public function setEle4Afi(?string $ele4Afi): self
    {
        $this->ele4Afi = $ele4Afi;

        return $this;
    }

    public function getEle5Afi(): ?string
    {
        return $this->ele5Afi;
    }

    public function setEle5Afi(?string $ele5Afi): self
    {
        $this->ele5Afi = $ele5Afi;

        return $this;
    }

    public function getEle6Afi(): ?string
    {
        return $this->ele6Afi;
    }

    public function setEle6Afi(?string $ele6Afi): self
    {
        $this->ele6Afi = $ele6Afi;

        return $this;
    }

    public function getEle7Afi(): ?string
    {
        return $this->ele7Afi;
    }

    public function setEle7Afi(?string $ele7Afi): self
    {
        $this->ele7Afi = $ele7Afi;

        return $this;
    }

    public function getEle8Afi(): ?string
    {
        return $this->ele8Afi;
    }

    public function setEle8Afi(?string $ele8Afi): self
    {
        $this->ele8Afi = $ele8Afi;

        return $this;
    }

    public function getEle9Afi(): ?string
    {
        return $this->ele9Afi;
    }

    public function setEle9Afi(?string $ele9Afi): self
    {
        $this->ele9Afi = $ele9Afi;

        return $this;
    }

    public function getEle10Afi(): ?string
    {
        return $this->ele10Afi;
    }

    public function setEle10Afi(?string $ele10Afi): self
    {
        $this->ele10Afi = $ele10Afi;

        return $this;
    }

    public function getRef2Afi(): ?string
    {
        return $this->ref2Afi;
    }

    public function setRef2Afi(?string $ref2Afi): self
    {
        $this->ref2Afi = $ref2Afi;

        return $this;
    }

    public function getIvaAfi(): ?bool
    {
        return $this->ivaAfi;
    }

    public function setIvaAfi(?bool $ivaAfi): self
    {
        $this->ivaAfi = $ivaAfi;

        return $this;
    }

    public function getSeguroAfi(): ?float
    {
        return $this->seguroAfi;
    }

    public function setSeguroAfi(?float $seguroAfi): self
    {
        $this->seguroAfi = $seguroAfi;

        return $this;
    }

    public function getIcarbucliAfi(): ?float
    {
        return $this->icarbucliAfi;
    }

    public function setIcarbucliAfi(?float $icarbucliAfi): self
    {
        $this->icarbucliAfi = $icarbucliAfi;

        return $this;
    }

    public function getIcarbumenAfi(): ?float
    {
        return $this->icarbumenAfi;
    }

    public function setIcarbumenAfi(?float $icarbumenAfi): self
    {
        $this->icarbumenAfi = $icarbumenAfi;

        return $this;
    }

    public function getUni11Afi(): ?float
    {
        return $this->uni11Afi;
    }

    public function setUni11Afi(?float $uni11Afi): self
    {
        $this->uni11Afi = $uni11Afi;

        return $this;
    }

    public function getPvp11Afi(): ?float
    {
        return $this->pvp11Afi;
    }

    public function setPvp11Afi(?float $pvp11Afi): self
    {
        $this->pvp11Afi = $pvp11Afi;

        return $this;
    }

    public function getPco11Afi(): ?float
    {
        return $this->pco11Afi;
    }

    public function setPco11Afi(?float $pco11Afi): self
    {
        $this->pco11Afi = $pco11Afi;

        return $this;
    }

    public function getPdi11Afi(): ?float
    {
        return $this->pdi11Afi;
    }

    public function setPdi11Afi(?float $pdi11Afi): self
    {
        $this->pdi11Afi = $pdi11Afi;

        return $this;
    }

    public function getPar11Afi(): ?float
    {
        return $this->par11Afi;
    }

    public function setPar11Afi(?float $par11Afi): self
    {
        $this->par11Afi = $par11Afi;

        return $this;
    }

    public function getUni12Afi(): ?float
    {
        return $this->uni12Afi;
    }

    public function setUni12Afi(?float $uni12Afi): self
    {
        $this->uni12Afi = $uni12Afi;

        return $this;
    }

    public function getPvp12Afi(): ?float
    {
        return $this->pvp12Afi;
    }

    public function setPvp12Afi(?float $pvp12Afi): self
    {
        $this->pvp12Afi = $pvp12Afi;

        return $this;
    }

    public function getPco12Afi(): ?float
    {
        return $this->pco12Afi;
    }

    public function setPco12Afi(?float $pco12Afi): self
    {
        $this->pco12Afi = $pco12Afi;

        return $this;
    }

    public function getPdi12Afi(): ?float
    {
        return $this->pdi12Afi;
    }

    public function setPdi12Afi(?float $pdi12Afi): self
    {
        $this->pdi12Afi = $pdi12Afi;

        return $this;
    }

    public function getPar12Afi(): ?float
    {
        return $this->par12Afi;
    }

    public function setPar12Afi(?float $par12Afi): self
    {
        $this->par12Afi = $par12Afi;

        return $this;
    }

    public function getUni13Afi(): ?float
    {
        return $this->uni13Afi;
    }

    public function setUni13Afi(?float $uni13Afi): self
    {
        $this->uni13Afi = $uni13Afi;

        return $this;
    }

    public function getPvp13Afi(): ?float
    {
        return $this->pvp13Afi;
    }

    public function setPvp13Afi(?float $pvp13Afi): self
    {
        $this->pvp13Afi = $pvp13Afi;

        return $this;
    }

    public function getPco13Afi(): ?float
    {
        return $this->pco13Afi;
    }

    public function setPco13Afi(?float $pco13Afi): self
    {
        $this->pco13Afi = $pco13Afi;

        return $this;
    }

    public function getPdi13Afi(): ?float
    {
        return $this->pdi13Afi;
    }

    public function setPdi13Afi(?float $pdi13Afi): self
    {
        $this->pdi13Afi = $pdi13Afi;

        return $this;
    }

    public function getPar13Afi(): ?float
    {
        return $this->par13Afi;
    }

    public function setPar13Afi(?float $par13Afi): self
    {
        $this->par13Afi = $par13Afi;

        return $this;
    }

    public function getUni14Afi(): ?float
    {
        return $this->uni14Afi;
    }

    public function setUni14Afi(?float $uni14Afi): self
    {
        $this->uni14Afi = $uni14Afi;

        return $this;
    }

    public function getPvp14Afi(): ?float
    {
        return $this->pvp14Afi;
    }

    public function setPvp14Afi(?float $pvp14Afi): self
    {
        $this->pvp14Afi = $pvp14Afi;

        return $this;
    }

    public function getPco14Afi(): ?float
    {
        return $this->pco14Afi;
    }

    public function setPco14Afi(?float $pco14Afi): self
    {
        $this->pco14Afi = $pco14Afi;

        return $this;
    }

    public function getPdi14Afi(): ?float
    {
        return $this->pdi14Afi;
    }

    public function setPdi14Afi(?float $pdi14Afi): self
    {
        $this->pdi14Afi = $pdi14Afi;

        return $this;
    }

    public function getPar14Afi(): ?float
    {
        return $this->par14Afi;
    }

    public function setPar14Afi(?float $par14Afi): self
    {
        $this->par14Afi = $par14Afi;

        return $this;
    }

    public function getUni15Afi(): ?float
    {
        return $this->uni15Afi;
    }

    public function setUni15Afi(?float $uni15Afi): self
    {
        $this->uni15Afi = $uni15Afi;

        return $this;
    }

    public function getPvp15Afi(): ?float
    {
        return $this->pvp15Afi;
    }

    public function setPvp15Afi(?float $pvp15Afi): self
    {
        $this->pvp15Afi = $pvp15Afi;

        return $this;
    }

    public function getPco15Afi(): ?float
    {
        return $this->pco15Afi;
    }

    public function setPco15Afi(?float $pco15Afi): self
    {
        $this->pco15Afi = $pco15Afi;

        return $this;
    }

    public function getPdi15Afi(): ?float
    {
        return $this->pdi15Afi;
    }

    public function setPdi15Afi(?float $pdi15Afi): self
    {
        $this->pdi15Afi = $pdi15Afi;

        return $this;
    }

    public function getPar15Afi(): ?float
    {
        return $this->par15Afi;
    }

    public function setPar15Afi(?float $par15Afi): self
    {
        $this->par15Afi = $par15Afi;

        return $this;
    }

    public function getEle11Afi(): ?string
    {
        return $this->ele11Afi;
    }

    public function setEle11Afi(?string $ele11Afi): self
    {
        $this->ele11Afi = $ele11Afi;

        return $this;
    }

    public function getEle12Afi(): ?string
    {
        return $this->ele12Afi;
    }

    public function setEle12Afi(?string $ele12Afi): self
    {
        $this->ele12Afi = $ele12Afi;

        return $this;
    }

    public function getEle13Afi(): ?string
    {
        return $this->ele13Afi;
    }

    public function setEle13Afi(?string $ele13Afi): self
    {
        $this->ele13Afi = $ele13Afi;

        return $this;
    }

    public function getEle14Afi(): ?string
    {
        return $this->ele14Afi;
    }

    public function setEle14Afi(?string $ele14Afi): self
    {
        $this->ele14Afi = $ele14Afi;

        return $this;
    }

    public function getEle15Afi(): ?string
    {
        return $this->ele15Afi;
    }

    public function setEle15Afi(?string $ele15Afi): self
    {
        $this->ele15Afi = $ele15Afi;

        return $this;
    }


}
