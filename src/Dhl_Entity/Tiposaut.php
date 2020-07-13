<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposaut
 *
 * @ORM\Table(name="TiposAut")
 * @ORM\Entity
 */
class Tiposaut
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTau;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tau", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTau;

    /**
     * @var string
     *
     * @ORM\Column(name="Modo_Tau", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $modoTau;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Tau", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaTau;

    /**
     * @var string
     *
     * @ORM\Column(name="Pob_Tau", type="string", length=35, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $pobTau;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliTau;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Tau", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depTau;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpOriIni_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdporiiniTau;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpOriFin_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdporifinTau;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDesIni_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpdesiniTau;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDesFin_Tau", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpdesfinTau;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Tau", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipTau;

    /**
     * @var string
     *
     * @ORM\Column(name="ZonOri_Tau", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zonoriTau;

    /**
     * @var string
     *
     * @ORM\Column(name="ZonDes_Tau", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zondesTau;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Tra_Tau", type="boolean", nullable=true)
     */
    private $traTau;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Nac_Tau", type="boolean", nullable=true)
     */
    private $nacTau;

    public function getSucursalTau(): ?int
    {
        return $this->sucursalTau;
    }

    public function getEmpTau(): ?int
    {
        return $this->empTau;
    }

    public function getModoTau(): ?string
    {
        return $this->modoTau;
    }

    public function getViaTau(): ?int
    {
        return $this->viaTau;
    }

    public function getPobTau(): ?string
    {
        return $this->pobTau;
    }

    public function getCliTau(): ?int
    {
        return $this->cliTau;
    }

    public function getDepTau(): ?string
    {
        return $this->depTau;
    }

    public function getCdporiiniTau(): ?int
    {
        return $this->cdporiiniTau;
    }

    public function getCdporifinTau(): ?int
    {
        return $this->cdporifinTau;
    }

    public function getCdpdesiniTau(): ?int
    {
        return $this->cdpdesiniTau;
    }

    public function getCdpdesfinTau(): ?int
    {
        return $this->cdpdesfinTau;
    }

    public function getTipTau(): ?string
    {
        return $this->tipTau;
    }

    public function getZonoriTau(): ?string
    {
        return $this->zonoriTau;
    }

    public function getZondesTau(): ?string
    {
        return $this->zondesTau;
    }

    public function getTraTau(): ?bool
    {
        return $this->traTau;
    }

    public function setTraTau(?bool $traTau): self
    {
        $this->traTau = $traTau;

        return $this;
    }

    public function getNacTau(): ?bool
    {
        return $this->nacTau;
    }

    public function setNacTau(?bool $nacTau): self
    {
        $this->nacTau = $nacTau;

        return $this;
    }


}
