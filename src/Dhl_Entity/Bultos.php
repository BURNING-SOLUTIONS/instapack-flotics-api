<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bultos
 *
 * @ORM\Table(name="bultos")
 * @ORM\Entity
 */
class Bultos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Bul", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalBul = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Bul", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empBul = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Bul", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numBul = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Bul", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linBul = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Bul_Bul", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bulBul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conte_Bul", type="string", length=1, nullable=true)
     */
    private $conteBul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Bul", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesBul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Bul", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesvolBul = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Bul", type="smallint", nullable=true)
     */
    private $dim1Bul = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Bul", type="smallint", nullable=true)
     */
    private $dim2Bul = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Bul", type="smallint", nullable=true)
     */
    private $dim3Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp1_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp1Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco1_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco1Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi1_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi1Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar1_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar1Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp2_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp2Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco2_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco2Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi2_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi2Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar2_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar2Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp3_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp3Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco3_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco3Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi3_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi3Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar3_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar3Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp4_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp4Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco4_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco4Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi4_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi4Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar4_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar4Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp5_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp5Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco5_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco5Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi5_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi5Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar5_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar5Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp6_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp6Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco6_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco6Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi6_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi6Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar6_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar6Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp7_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp7Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco7_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco7Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi7_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi7Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar7_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar7Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp8_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp8Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco8_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco8Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi8_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi8Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar8_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar8Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp9_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp9Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco9_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco9Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi9_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi9Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar9_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar9Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp10_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp10Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco10_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco10Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi10_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi10Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar10_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar10Bul = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp11_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp11Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco11_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco11Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi11_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi11Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar11_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar11Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp12_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp12Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco12_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco12Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi12_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi12Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar12_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar12Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp13_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp13Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco13_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco13Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi13_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi13Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar13_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar13Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp14_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp14Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco14_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco14Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi14_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi14Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar14_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar14Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPvp15_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpvp15Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPco15_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpco15Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPdi15_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpdi15Bul;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TPar15_Bul", type="float", precision=53, scale=0, nullable=true)
     */
    private $tpar15Bul;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Bul", type="string", length=100, nullable=true)
     */
    private $refBul;

    public function getSucursalBul(): ?int
    {
        return $this->sucursalBul;
    }

    public function getEmpBul(): ?int
    {
        return $this->empBul;
    }

    public function getNumBul(): ?int
    {
        return $this->numBul;
    }

    public function getLinBul(): ?int
    {
        return $this->linBul;
    }

    public function getBulBul(): ?int
    {
        return $this->bulBul;
    }

    public function getConteBul(): ?string
    {
        return $this->conteBul;
    }

    public function setConteBul(?string $conteBul): self
    {
        $this->conteBul = $conteBul;

        return $this;
    }

    public function getPesBul(): ?float
    {
        return $this->pesBul;
    }

    public function setPesBul(?float $pesBul): self
    {
        $this->pesBul = $pesBul;

        return $this;
    }

    public function getPesvolBul(): ?float
    {
        return $this->pesvolBul;
    }

    public function setPesvolBul(?float $pesvolBul): self
    {
        $this->pesvolBul = $pesvolBul;

        return $this;
    }

    public function getDim1Bul(): ?int
    {
        return $this->dim1Bul;
    }

    public function setDim1Bul(?int $dim1Bul): self
    {
        $this->dim1Bul = $dim1Bul;

        return $this;
    }

    public function getDim2Bul(): ?int
    {
        return $this->dim2Bul;
    }

    public function setDim2Bul(?int $dim2Bul): self
    {
        $this->dim2Bul = $dim2Bul;

        return $this;
    }

    public function getDim3Bul(): ?int
    {
        return $this->dim3Bul;
    }

    public function setDim3Bul(?int $dim3Bul): self
    {
        $this->dim3Bul = $dim3Bul;

        return $this;
    }

    public function getTpvp1Bul(): ?float
    {
        return $this->tpvp1Bul;
    }

    public function setTpvp1Bul(?float $tpvp1Bul): self
    {
        $this->tpvp1Bul = $tpvp1Bul;

        return $this;
    }

    public function getTpco1Bul(): ?float
    {
        return $this->tpco1Bul;
    }

    public function setTpco1Bul(?float $tpco1Bul): self
    {
        $this->tpco1Bul = $tpco1Bul;

        return $this;
    }

    public function getTpdi1Bul(): ?float
    {
        return $this->tpdi1Bul;
    }

    public function setTpdi1Bul(?float $tpdi1Bul): self
    {
        $this->tpdi1Bul = $tpdi1Bul;

        return $this;
    }

    public function getTpar1Bul(): ?float
    {
        return $this->tpar1Bul;
    }

    public function setTpar1Bul(?float $tpar1Bul): self
    {
        $this->tpar1Bul = $tpar1Bul;

        return $this;
    }

    public function getTpvp2Bul(): ?float
    {
        return $this->tpvp2Bul;
    }

    public function setTpvp2Bul(?float $tpvp2Bul): self
    {
        $this->tpvp2Bul = $tpvp2Bul;

        return $this;
    }

    public function getTpco2Bul(): ?float
    {
        return $this->tpco2Bul;
    }

    public function setTpco2Bul(?float $tpco2Bul): self
    {
        $this->tpco2Bul = $tpco2Bul;

        return $this;
    }

    public function getTpdi2Bul(): ?float
    {
        return $this->tpdi2Bul;
    }

    public function setTpdi2Bul(?float $tpdi2Bul): self
    {
        $this->tpdi2Bul = $tpdi2Bul;

        return $this;
    }

    public function getTpar2Bul(): ?float
    {
        return $this->tpar2Bul;
    }

    public function setTpar2Bul(?float $tpar2Bul): self
    {
        $this->tpar2Bul = $tpar2Bul;

        return $this;
    }

    public function getTpvp3Bul(): ?float
    {
        return $this->tpvp3Bul;
    }

    public function setTpvp3Bul(?float $tpvp3Bul): self
    {
        $this->tpvp3Bul = $tpvp3Bul;

        return $this;
    }

    public function getTpco3Bul(): ?float
    {
        return $this->tpco3Bul;
    }

    public function setTpco3Bul(?float $tpco3Bul): self
    {
        $this->tpco3Bul = $tpco3Bul;

        return $this;
    }

    public function getTpdi3Bul(): ?float
    {
        return $this->tpdi3Bul;
    }

    public function setTpdi3Bul(?float $tpdi3Bul): self
    {
        $this->tpdi3Bul = $tpdi3Bul;

        return $this;
    }

    public function getTpar3Bul(): ?float
    {
        return $this->tpar3Bul;
    }

    public function setTpar3Bul(?float $tpar3Bul): self
    {
        $this->tpar3Bul = $tpar3Bul;

        return $this;
    }

    public function getTpvp4Bul(): ?float
    {
        return $this->tpvp4Bul;
    }

    public function setTpvp4Bul(?float $tpvp4Bul): self
    {
        $this->tpvp4Bul = $tpvp4Bul;

        return $this;
    }

    public function getTpco4Bul(): ?float
    {
        return $this->tpco4Bul;
    }

    public function setTpco4Bul(?float $tpco4Bul): self
    {
        $this->tpco4Bul = $tpco4Bul;

        return $this;
    }

    public function getTpdi4Bul(): ?float
    {
        return $this->tpdi4Bul;
    }

    public function setTpdi4Bul(?float $tpdi4Bul): self
    {
        $this->tpdi4Bul = $tpdi4Bul;

        return $this;
    }

    public function getTpar4Bul(): ?float
    {
        return $this->tpar4Bul;
    }

    public function setTpar4Bul(?float $tpar4Bul): self
    {
        $this->tpar4Bul = $tpar4Bul;

        return $this;
    }

    public function getTpvp5Bul(): ?float
    {
        return $this->tpvp5Bul;
    }

    public function setTpvp5Bul(?float $tpvp5Bul): self
    {
        $this->tpvp5Bul = $tpvp5Bul;

        return $this;
    }

    public function getTpco5Bul(): ?float
    {
        return $this->tpco5Bul;
    }

    public function setTpco5Bul(?float $tpco5Bul): self
    {
        $this->tpco5Bul = $tpco5Bul;

        return $this;
    }

    public function getTpdi5Bul(): ?float
    {
        return $this->tpdi5Bul;
    }

    public function setTpdi5Bul(?float $tpdi5Bul): self
    {
        $this->tpdi5Bul = $tpdi5Bul;

        return $this;
    }

    public function getTpar5Bul(): ?float
    {
        return $this->tpar5Bul;
    }

    public function setTpar5Bul(?float $tpar5Bul): self
    {
        $this->tpar5Bul = $tpar5Bul;

        return $this;
    }

    public function getTpvp6Bul(): ?float
    {
        return $this->tpvp6Bul;
    }

    public function setTpvp6Bul(?float $tpvp6Bul): self
    {
        $this->tpvp6Bul = $tpvp6Bul;

        return $this;
    }

    public function getTpco6Bul(): ?float
    {
        return $this->tpco6Bul;
    }

    public function setTpco6Bul(?float $tpco6Bul): self
    {
        $this->tpco6Bul = $tpco6Bul;

        return $this;
    }

    public function getTpdi6Bul(): ?float
    {
        return $this->tpdi6Bul;
    }

    public function setTpdi6Bul(?float $tpdi6Bul): self
    {
        $this->tpdi6Bul = $tpdi6Bul;

        return $this;
    }

    public function getTpar6Bul(): ?float
    {
        return $this->tpar6Bul;
    }

    public function setTpar6Bul(?float $tpar6Bul): self
    {
        $this->tpar6Bul = $tpar6Bul;

        return $this;
    }

    public function getTpvp7Bul(): ?float
    {
        return $this->tpvp7Bul;
    }

    public function setTpvp7Bul(?float $tpvp7Bul): self
    {
        $this->tpvp7Bul = $tpvp7Bul;

        return $this;
    }

    public function getTpco7Bul(): ?float
    {
        return $this->tpco7Bul;
    }

    public function setTpco7Bul(?float $tpco7Bul): self
    {
        $this->tpco7Bul = $tpco7Bul;

        return $this;
    }

    public function getTpdi7Bul(): ?float
    {
        return $this->tpdi7Bul;
    }

    public function setTpdi7Bul(?float $tpdi7Bul): self
    {
        $this->tpdi7Bul = $tpdi7Bul;

        return $this;
    }

    public function getTpar7Bul(): ?float
    {
        return $this->tpar7Bul;
    }

    public function setTpar7Bul(?float $tpar7Bul): self
    {
        $this->tpar7Bul = $tpar7Bul;

        return $this;
    }

    public function getTpvp8Bul(): ?float
    {
        return $this->tpvp8Bul;
    }

    public function setTpvp8Bul(?float $tpvp8Bul): self
    {
        $this->tpvp8Bul = $tpvp8Bul;

        return $this;
    }

    public function getTpco8Bul(): ?float
    {
        return $this->tpco8Bul;
    }

    public function setTpco8Bul(?float $tpco8Bul): self
    {
        $this->tpco8Bul = $tpco8Bul;

        return $this;
    }

    public function getTpdi8Bul(): ?float
    {
        return $this->tpdi8Bul;
    }

    public function setTpdi8Bul(?float $tpdi8Bul): self
    {
        $this->tpdi8Bul = $tpdi8Bul;

        return $this;
    }

    public function getTpar8Bul(): ?float
    {
        return $this->tpar8Bul;
    }

    public function setTpar8Bul(?float $tpar8Bul): self
    {
        $this->tpar8Bul = $tpar8Bul;

        return $this;
    }

    public function getTpvp9Bul(): ?float
    {
        return $this->tpvp9Bul;
    }

    public function setTpvp9Bul(?float $tpvp9Bul): self
    {
        $this->tpvp9Bul = $tpvp9Bul;

        return $this;
    }

    public function getTpco9Bul(): ?float
    {
        return $this->tpco9Bul;
    }

    public function setTpco9Bul(?float $tpco9Bul): self
    {
        $this->tpco9Bul = $tpco9Bul;

        return $this;
    }

    public function getTpdi9Bul(): ?float
    {
        return $this->tpdi9Bul;
    }

    public function setTpdi9Bul(?float $tpdi9Bul): self
    {
        $this->tpdi9Bul = $tpdi9Bul;

        return $this;
    }

    public function getTpar9Bul(): ?float
    {
        return $this->tpar9Bul;
    }

    public function setTpar9Bul(?float $tpar9Bul): self
    {
        $this->tpar9Bul = $tpar9Bul;

        return $this;
    }

    public function getTpvp10Bul(): ?float
    {
        return $this->tpvp10Bul;
    }

    public function setTpvp10Bul(?float $tpvp10Bul): self
    {
        $this->tpvp10Bul = $tpvp10Bul;

        return $this;
    }

    public function getTpco10Bul(): ?float
    {
        return $this->tpco10Bul;
    }

    public function setTpco10Bul(?float $tpco10Bul): self
    {
        $this->tpco10Bul = $tpco10Bul;

        return $this;
    }

    public function getTpdi10Bul(): ?float
    {
        return $this->tpdi10Bul;
    }

    public function setTpdi10Bul(?float $tpdi10Bul): self
    {
        $this->tpdi10Bul = $tpdi10Bul;

        return $this;
    }

    public function getTpar10Bul(): ?float
    {
        return $this->tpar10Bul;
    }

    public function setTpar10Bul(?float $tpar10Bul): self
    {
        $this->tpar10Bul = $tpar10Bul;

        return $this;
    }

    public function getTpvp11Bul(): ?float
    {
        return $this->tpvp11Bul;
    }

    public function setTpvp11Bul(?float $tpvp11Bul): self
    {
        $this->tpvp11Bul = $tpvp11Bul;

        return $this;
    }

    public function getTpco11Bul(): ?float
    {
        return $this->tpco11Bul;
    }

    public function setTpco11Bul(?float $tpco11Bul): self
    {
        $this->tpco11Bul = $tpco11Bul;

        return $this;
    }

    public function getTpdi11Bul(): ?float
    {
        return $this->tpdi11Bul;
    }

    public function setTpdi11Bul(?float $tpdi11Bul): self
    {
        $this->tpdi11Bul = $tpdi11Bul;

        return $this;
    }

    public function getTpar11Bul(): ?float
    {
        return $this->tpar11Bul;
    }

    public function setTpar11Bul(?float $tpar11Bul): self
    {
        $this->tpar11Bul = $tpar11Bul;

        return $this;
    }

    public function getTpvp12Bul(): ?float
    {
        return $this->tpvp12Bul;
    }

    public function setTpvp12Bul(?float $tpvp12Bul): self
    {
        $this->tpvp12Bul = $tpvp12Bul;

        return $this;
    }

    public function getTpco12Bul(): ?float
    {
        return $this->tpco12Bul;
    }

    public function setTpco12Bul(?float $tpco12Bul): self
    {
        $this->tpco12Bul = $tpco12Bul;

        return $this;
    }

    public function getTpdi12Bul(): ?float
    {
        return $this->tpdi12Bul;
    }

    public function setTpdi12Bul(?float $tpdi12Bul): self
    {
        $this->tpdi12Bul = $tpdi12Bul;

        return $this;
    }

    public function getTpar12Bul(): ?float
    {
        return $this->tpar12Bul;
    }

    public function setTpar12Bul(?float $tpar12Bul): self
    {
        $this->tpar12Bul = $tpar12Bul;

        return $this;
    }

    public function getTpvp13Bul(): ?float
    {
        return $this->tpvp13Bul;
    }

    public function setTpvp13Bul(?float $tpvp13Bul): self
    {
        $this->tpvp13Bul = $tpvp13Bul;

        return $this;
    }

    public function getTpco13Bul(): ?float
    {
        return $this->tpco13Bul;
    }

    public function setTpco13Bul(?float $tpco13Bul): self
    {
        $this->tpco13Bul = $tpco13Bul;

        return $this;
    }

    public function getTpdi13Bul(): ?float
    {
        return $this->tpdi13Bul;
    }

    public function setTpdi13Bul(?float $tpdi13Bul): self
    {
        $this->tpdi13Bul = $tpdi13Bul;

        return $this;
    }

    public function getTpar13Bul(): ?float
    {
        return $this->tpar13Bul;
    }

    public function setTpar13Bul(?float $tpar13Bul): self
    {
        $this->tpar13Bul = $tpar13Bul;

        return $this;
    }

    public function getTpvp14Bul(): ?float
    {
        return $this->tpvp14Bul;
    }

    public function setTpvp14Bul(?float $tpvp14Bul): self
    {
        $this->tpvp14Bul = $tpvp14Bul;

        return $this;
    }

    public function getTpco14Bul(): ?float
    {
        return $this->tpco14Bul;
    }

    public function setTpco14Bul(?float $tpco14Bul): self
    {
        $this->tpco14Bul = $tpco14Bul;

        return $this;
    }

    public function getTpdi14Bul(): ?float
    {
        return $this->tpdi14Bul;
    }

    public function setTpdi14Bul(?float $tpdi14Bul): self
    {
        $this->tpdi14Bul = $tpdi14Bul;

        return $this;
    }

    public function getTpar14Bul(): ?float
    {
        return $this->tpar14Bul;
    }

    public function setTpar14Bul(?float $tpar14Bul): self
    {
        $this->tpar14Bul = $tpar14Bul;

        return $this;
    }

    public function getTpvp15Bul(): ?float
    {
        return $this->tpvp15Bul;
    }

    public function setTpvp15Bul(?float $tpvp15Bul): self
    {
        $this->tpvp15Bul = $tpvp15Bul;

        return $this;
    }

    public function getTpco15Bul(): ?float
    {
        return $this->tpco15Bul;
    }

    public function setTpco15Bul(?float $tpco15Bul): self
    {
        $this->tpco15Bul = $tpco15Bul;

        return $this;
    }

    public function getTpdi15Bul(): ?float
    {
        return $this->tpdi15Bul;
    }

    public function setTpdi15Bul(?float $tpdi15Bul): self
    {
        $this->tpdi15Bul = $tpdi15Bul;

        return $this;
    }

    public function getTpar15Bul(): ?float
    {
        return $this->tpar15Bul;
    }

    public function setTpar15Bul(?float $tpar15Bul): self
    {
        $this->tpar15Bul = $tpar15Bul;

        return $this;
    }

    public function getRefBul(): ?string
    {
        return $this->refBul;
    }

    public function setRefBul(?string $refBul): self
    {
        $this->refBul = $refBul;

        return $this;
    }


}
