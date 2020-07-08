<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conpdtewebservice
 *
 * @ORM\Table(name="ConPdteWebService")
 * @ORM\Entity
 */
class Conpdtewebservice
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Cpw", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cpw", type="integer", nullable=false)
     */
    private $sucursalCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cpw", type="smallint", nullable=false)
     */
    private $empCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Cpw", type="integer", nullable=false)
     */
    private $cliCpw;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Cpw", type="string", length=12, nullable=false)
     */
    private $depCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Cpw", type="smallint", nullable=false)
     */
    private $viaCpw;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Cpw", type="string", length=5, nullable=false)
     */
    private $tipCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpOrigen_Cpw", type="integer", nullable=false)
     */
    private $cdporigenCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDestino_Cpw", type="integer", nullable=false)
     */
    private $cdpdestinoCpw;

    /**
     * @var float
     *
     * @ORM\Column(name="Pes_Cpw", type="float", precision=24, scale=0, nullable=false)
     */
    private $pesCpw;

    /**
     * @var float
     *
     * @ORM\Column(name="Imp_Cpw", type="float", precision=53, scale=0, nullable=false)
     */
    private $impCpw;

    /**
     * @var int
     *
     * @ORM\Column(name="Estado_Cpw", type="smallint", nullable=false)
     */
    private $estadoCpw;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Cpw", type="datetime", nullable=true)
     */
    private $fechaCpw;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Referencia_Cpw", type="string", length=100, nullable=true)
     */
    private $referenciaCpw;

    public function getIdCpw(): ?int
    {
        return $this->idCpw;
    }

    public function getSucursalCpw(): ?int
    {
        return $this->sucursalCpw;
    }

    public function setSucursalCpw(int $sucursalCpw): self
    {
        $this->sucursalCpw = $sucursalCpw;

        return $this;
    }

    public function getEmpCpw(): ?int
    {
        return $this->empCpw;
    }

    public function setEmpCpw(int $empCpw): self
    {
        $this->empCpw = $empCpw;

        return $this;
    }

    public function getCliCpw(): ?int
    {
        return $this->cliCpw;
    }

    public function setCliCpw(int $cliCpw): self
    {
        $this->cliCpw = $cliCpw;

        return $this;
    }

    public function getDepCpw(): ?string
    {
        return $this->depCpw;
    }

    public function setDepCpw(string $depCpw): self
    {
        $this->depCpw = $depCpw;

        return $this;
    }

    public function getViaCpw(): ?int
    {
        return $this->viaCpw;
    }

    public function setViaCpw(int $viaCpw): self
    {
        $this->viaCpw = $viaCpw;

        return $this;
    }

    public function getTipCpw(): ?string
    {
        return $this->tipCpw;
    }

    public function setTipCpw(string $tipCpw): self
    {
        $this->tipCpw = $tipCpw;

        return $this;
    }

    public function getCdporigenCpw(): ?int
    {
        return $this->cdporigenCpw;
    }

    public function setCdporigenCpw(int $cdporigenCpw): self
    {
        $this->cdporigenCpw = $cdporigenCpw;

        return $this;
    }

    public function getCdpdestinoCpw(): ?int
    {
        return $this->cdpdestinoCpw;
    }

    public function setCdpdestinoCpw(int $cdpdestinoCpw): self
    {
        $this->cdpdestinoCpw = $cdpdestinoCpw;

        return $this;
    }

    public function getPesCpw(): ?float
    {
        return $this->pesCpw;
    }

    public function setPesCpw(float $pesCpw): self
    {
        $this->pesCpw = $pesCpw;

        return $this;
    }

    public function getImpCpw(): ?float
    {
        return $this->impCpw;
    }

    public function setImpCpw(float $impCpw): self
    {
        $this->impCpw = $impCpw;

        return $this;
    }

    public function getEstadoCpw(): ?int
    {
        return $this->estadoCpw;
    }

    public function setEstadoCpw(int $estadoCpw): self
    {
        $this->estadoCpw = $estadoCpw;

        return $this;
    }

    public function getFechaCpw(): ?\DateTimeInterface
    {
        return $this->fechaCpw;
    }

    public function setFechaCpw(?\DateTimeInterface $fechaCpw): self
    {
        $this->fechaCpw = $fechaCpw;

        return $this;
    }

    public function getReferenciaCpw(): ?string
    {
        return $this->referenciaCpw;
    }

    public function setReferenciaCpw(?string $referenciaCpw): self
    {
        $this->referenciaCpw = $referenciaCpw;

        return $this;
    }


}
