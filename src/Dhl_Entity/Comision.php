<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comision
 *
 * @ORM\Table(name="comision")
 * @ORM\Entity
 */
class Comision
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Cmi", type="boolean", nullable=false)
     */
    private $bajaCmi = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cmi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCmi = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cmi", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCmi = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Cmi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCmi = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="LocPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $locporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LocMes_Cmi", type="smallint", nullable=true)
     */
    private $locmesCmi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PrvPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $prvporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PrvMes_Cmi", type="smallint", nullable=true)
     */
    private $prvmesCmi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="NacPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $nacporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NacMes_Cmi", type="smallint", nullable=true)
     */
    private $nacmesCmi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IntPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $intporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IntMes_Cmi", type="smallint", nullable=true)
     */
    private $intmesCmi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MtoPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $mtoporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MtoMes_Cmi", type="smallint", nullable=true)
     */
    private $mtomesCmi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CtaPor_Cmi", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaporCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CtaMes_Cmi", type="smallint", nullable=true)
     */
    private $ctamesCmi;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Cmi", type="string", length=5, nullable=false)
     */
    private $tipCmi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Calcul_Cmi", type="smallint", nullable=true)
     */
    private $calculCmi;

    public function getBajaCmi(): ?bool
    {
        return $this->bajaCmi;
    }

    public function setBajaCmi(bool $bajaCmi): self
    {
        $this->bajaCmi = $bajaCmi;

        return $this;
    }

    public function getSucursalCmi(): ?int
    {
        return $this->sucursalCmi;
    }

    public function getEmpCmi(): ?int
    {
        return $this->empCmi;
    }

    public function getCodCmi(): ?int
    {
        return $this->codCmi;
    }

    public function getLocporCmi(): ?float
    {
        return $this->locporCmi;
    }

    public function setLocporCmi(?float $locporCmi): self
    {
        $this->locporCmi = $locporCmi;

        return $this;
    }

    public function getLocmesCmi(): ?int
    {
        return $this->locmesCmi;
    }

    public function setLocmesCmi(?int $locmesCmi): self
    {
        $this->locmesCmi = $locmesCmi;

        return $this;
    }

    public function getPrvporCmi(): ?float
    {
        return $this->prvporCmi;
    }

    public function setPrvporCmi(?float $prvporCmi): self
    {
        $this->prvporCmi = $prvporCmi;

        return $this;
    }

    public function getPrvmesCmi(): ?int
    {
        return $this->prvmesCmi;
    }

    public function setPrvmesCmi(?int $prvmesCmi): self
    {
        $this->prvmesCmi = $prvmesCmi;

        return $this;
    }

    public function getNacporCmi(): ?float
    {
        return $this->nacporCmi;
    }

    public function setNacporCmi(?float $nacporCmi): self
    {
        $this->nacporCmi = $nacporCmi;

        return $this;
    }

    public function getNacmesCmi(): ?int
    {
        return $this->nacmesCmi;
    }

    public function setNacmesCmi(?int $nacmesCmi): self
    {
        $this->nacmesCmi = $nacmesCmi;

        return $this;
    }

    public function getIntporCmi(): ?float
    {
        return $this->intporCmi;
    }

    public function setIntporCmi(?float $intporCmi): self
    {
        $this->intporCmi = $intporCmi;

        return $this;
    }

    public function getIntmesCmi(): ?int
    {
        return $this->intmesCmi;
    }

    public function setIntmesCmi(?int $intmesCmi): self
    {
        $this->intmesCmi = $intmesCmi;

        return $this;
    }

    public function getMtoporCmi(): ?float
    {
        return $this->mtoporCmi;
    }

    public function setMtoporCmi(?float $mtoporCmi): self
    {
        $this->mtoporCmi = $mtoporCmi;

        return $this;
    }

    public function getMtomesCmi(): ?int
    {
        return $this->mtomesCmi;
    }

    public function setMtomesCmi(?int $mtomesCmi): self
    {
        $this->mtomesCmi = $mtomesCmi;

        return $this;
    }

    public function getCtaporCmi(): ?float
    {
        return $this->ctaporCmi;
    }

    public function setCtaporCmi(?float $ctaporCmi): self
    {
        $this->ctaporCmi = $ctaporCmi;

        return $this;
    }

    public function getCtamesCmi(): ?int
    {
        return $this->ctamesCmi;
    }

    public function setCtamesCmi(?int $ctamesCmi): self
    {
        $this->ctamesCmi = $ctamesCmi;

        return $this;
    }

    public function getTipCmi(): ?string
    {
        return $this->tipCmi;
    }

    public function setTipCmi(string $tipCmi): self
    {
        $this->tipCmi = $tipCmi;

        return $this;
    }

    public function getCalculCmi(): ?int
    {
        return $this->calculCmi;
    }

    public function setCalculCmi(?int $calculCmi): self
    {
        $this->calculCmi = $calculCmi;

        return $this;
    }


}
