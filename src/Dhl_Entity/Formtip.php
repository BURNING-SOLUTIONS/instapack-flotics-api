<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formtip
 *
 * @ORM\Table(name="formtip")
 * @ORM\Entity
 */
class Formtip
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ftip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFtip = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ftip", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFtip = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Ftip", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codFtip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Ftip", type="string", length=20, nullable=true)
     */
    private $descFtip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit1_Ftip", type="string", length=9, nullable=true)
     */
    private $tit1Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit2_Ftip", type="string", length=9, nullable=true)
     */
    private $tit2Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit3_Ftip", type="string", length=9, nullable=true)
     */
    private $tit3Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit4_Ftip", type="string", length=9, nullable=true)
     */
    private $tit4Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit5_Ftip", type="string", length=9, nullable=true)
     */
    private $tit5Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit6_Ftip", type="string", length=9, nullable=true)
     */
    private $tit6Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit7_Ftip", type="string", length=9, nullable=true)
     */
    private $tit7Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit8_Ftip", type="string", length=9, nullable=true)
     */
    private $tit8Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit9_Ftip", type="string", length=9, nullable=true)
     */
    private $tit9Ftip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tit10_Ftip", type="string", length=9, nullable=true)
     */
    private $tit10Ftip;

    public function getSucursalFtip(): ?int
    {
        return $this->sucursalFtip;
    }

    public function getEmpFtip(): ?int
    {
        return $this->empFtip;
    }

    public function getCodFtip(): ?string
    {
        return $this->codFtip;
    }

    public function getDescFtip(): ?string
    {
        return $this->descFtip;
    }

    public function setDescFtip(?string $descFtip): self
    {
        $this->descFtip = $descFtip;

        return $this;
    }

    public function getTit1Ftip(): ?string
    {
        return $this->tit1Ftip;
    }

    public function setTit1Ftip(?string $tit1Ftip): self
    {
        $this->tit1Ftip = $tit1Ftip;

        return $this;
    }

    public function getTit2Ftip(): ?string
    {
        return $this->tit2Ftip;
    }

    public function setTit2Ftip(?string $tit2Ftip): self
    {
        $this->tit2Ftip = $tit2Ftip;

        return $this;
    }

    public function getTit3Ftip(): ?string
    {
        return $this->tit3Ftip;
    }

    public function setTit3Ftip(?string $tit3Ftip): self
    {
        $this->tit3Ftip = $tit3Ftip;

        return $this;
    }

    public function getTit4Ftip(): ?string
    {
        return $this->tit4Ftip;
    }

    public function setTit4Ftip(?string $tit4Ftip): self
    {
        $this->tit4Ftip = $tit4Ftip;

        return $this;
    }

    public function getTit5Ftip(): ?string
    {
        return $this->tit5Ftip;
    }

    public function setTit5Ftip(?string $tit5Ftip): self
    {
        $this->tit5Ftip = $tit5Ftip;

        return $this;
    }

    public function getTit6Ftip(): ?string
    {
        return $this->tit6Ftip;
    }

    public function setTit6Ftip(?string $tit6Ftip): self
    {
        $this->tit6Ftip = $tit6Ftip;

        return $this;
    }

    public function getTit7Ftip(): ?string
    {
        return $this->tit7Ftip;
    }

    public function setTit7Ftip(?string $tit7Ftip): self
    {
        $this->tit7Ftip = $tit7Ftip;

        return $this;
    }

    public function getTit8Ftip(): ?string
    {
        return $this->tit8Ftip;
    }

    public function setTit8Ftip(?string $tit8Ftip): self
    {
        $this->tit8Ftip = $tit8Ftip;

        return $this;
    }

    public function getTit9Ftip(): ?string
    {
        return $this->tit9Ftip;
    }

    public function setTit9Ftip(?string $tit9Ftip): self
    {
        $this->tit9Ftip = $tit9Ftip;

        return $this;
    }

    public function getTit10Ftip(): ?string
    {
        return $this->tit10Ftip;
    }

    public function setTit10Ftip(?string $tit10Ftip): self
    {
        $this->tit10Ftip = $tit10Ftip;

        return $this;
    }


}
