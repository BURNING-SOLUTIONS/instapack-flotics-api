<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movcont
 *
 * @ORM\Table(name="movcont")
 * @ORM\Entity
 */
class Movcont
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMov = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Mov", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMov = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Menu_Mov", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menuMov;

    /**
     * @var int
     *
     * @ORM\Column(name="Asiento_Mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $asientoMov = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Mov", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linMov = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Mov", type="datetime", nullable=true)
     */
    private $fecMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cuenta_Mov", type="string", length=10, nullable=true)
     */
    private $cuentaMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Contra_Mov", type="string", length=10, nullable=true)
     */
    private $contraMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Mov", type="string", length=40, nullable=true)
     */
    private $descMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DH_Mov", type="string", length=1, nullable=true)
     */
    private $dhMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Doc_Mov", type="string", length=10, nullable=true)
     */
    private $docMov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp_Mov", type="float", precision=53, scale=0, nullable=true)
     */
    private $impMov = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Mov", type="datetime", nullable=true)
     */
    private $fvtoMov;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Codigo_Mov", type="integer", nullable=true)
     */
    private $codigoMov;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Codigo2_Mov", type="integer", nullable=true)
     */
    private $codigo2Mov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fab_Mov", type="string", length=1, nullable=true)
     */
    private $fabMov;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Numfac_Mov", type="integer", nullable=true)
     */
    private $numfacMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CMODV_Mov", type="string", length=1, nullable=true)
     */
    private $cmodvMov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Mov", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseMov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Mov", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaMov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Mov", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaMov;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Exento_Mov", type="float", precision=53, scale=0, nullable=true)
     */
    private $exentoMov;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Mov", type="string", length=12, nullable=true)
     */
    private $depMov;

    public function getSucursalMov(): ?int
    {
        return $this->sucursalMov;
    }

    public function getEmpMov(): ?int
    {
        return $this->empMov;
    }

    public function getMenuMov(): ?string
    {
        return $this->menuMov;
    }

    public function getAsientoMov(): ?int
    {
        return $this->asientoMov;
    }

    public function getLinMov(): ?int
    {
        return $this->linMov;
    }

    public function getFecMov(): ?\DateTimeInterface
    {
        return $this->fecMov;
    }

    public function setFecMov(?\DateTimeInterface $fecMov): self
    {
        $this->fecMov = $fecMov;

        return $this;
    }

    public function getCuentaMov(): ?string
    {
        return $this->cuentaMov;
    }

    public function setCuentaMov(?string $cuentaMov): self
    {
        $this->cuentaMov = $cuentaMov;

        return $this;
    }

    public function getContraMov(): ?string
    {
        return $this->contraMov;
    }

    public function setContraMov(?string $contraMov): self
    {
        $this->contraMov = $contraMov;

        return $this;
    }

    public function getDescMov(): ?string
    {
        return $this->descMov;
    }

    public function setDescMov(?string $descMov): self
    {
        $this->descMov = $descMov;

        return $this;
    }

    public function getDhMov(): ?string
    {
        return $this->dhMov;
    }

    public function setDhMov(?string $dhMov): self
    {
        $this->dhMov = $dhMov;

        return $this;
    }

    public function getDocMov(): ?string
    {
        return $this->docMov;
    }

    public function setDocMov(?string $docMov): self
    {
        $this->docMov = $docMov;

        return $this;
    }

    public function getImpMov(): ?float
    {
        return $this->impMov;
    }

    public function setImpMov(?float $impMov): self
    {
        $this->impMov = $impMov;

        return $this;
    }

    public function getFvtoMov(): ?\DateTimeInterface
    {
        return $this->fvtoMov;
    }

    public function setFvtoMov(?\DateTimeInterface $fvtoMov): self
    {
        $this->fvtoMov = $fvtoMov;

        return $this;
    }

    public function getCodigoMov(): ?int
    {
        return $this->codigoMov;
    }

    public function setCodigoMov(?int $codigoMov): self
    {
        $this->codigoMov = $codigoMov;

        return $this;
    }

    public function getCodigo2Mov(): ?int
    {
        return $this->codigo2Mov;
    }

    public function setCodigo2Mov(?int $codigo2Mov): self
    {
        $this->codigo2Mov = $codigo2Mov;

        return $this;
    }

    public function getFabMov(): ?string
    {
        return $this->fabMov;
    }

    public function setFabMov(?string $fabMov): self
    {
        $this->fabMov = $fabMov;

        return $this;
    }

    public function getNumfacMov(): ?int
    {
        return $this->numfacMov;
    }

    public function setNumfacMov(?int $numfacMov): self
    {
        $this->numfacMov = $numfacMov;

        return $this;
    }

    public function getCmodvMov(): ?string
    {
        return $this->cmodvMov;
    }

    public function setCmodvMov(?string $cmodvMov): self
    {
        $this->cmodvMov = $cmodvMov;

        return $this;
    }

    public function getBaseMov(): ?float
    {
        return $this->baseMov;
    }

    public function setBaseMov(?float $baseMov): self
    {
        $this->baseMov = $baseMov;

        return $this;
    }

    public function getIivaMov(): ?float
    {
        return $this->iivaMov;
    }

    public function setIivaMov(?float $iivaMov): self
    {
        $this->iivaMov = $iivaMov;

        return $this;
    }

    public function getPivaMov(): ?float
    {
        return $this->pivaMov;
    }

    public function setPivaMov(?float $pivaMov): self
    {
        $this->pivaMov = $pivaMov;

        return $this;
    }

    public function getExentoMov(): ?float
    {
        return $this->exentoMov;
    }

    public function setExentoMov(?float $exentoMov): self
    {
        $this->exentoMov = $exentoMov;

        return $this;
    }

    public function getDepMov(): ?string
    {
        return $this->depMov;
    }

    public function setDepMov(?string $depMov): self
    {
        $this->depMov = $depMov;

        return $this;
    }


}
