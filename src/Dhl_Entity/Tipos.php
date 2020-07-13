<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipos
 *
 * @ORM\Table(name="tipos", indexes={@ORM\Index(name="_dta_index_tipos_77_805577908__K16_K2_K3_K4_9_9987", columns={"Reparto_Tip", "Sucursal_Tip", "Emp_Tip", "Cod_Tip"}), @ORM\Index(name="_dta_index_tipos_77_805577908__K4_K2_K3_K12_9987", columns={"Cod_Tip", "Sucursal_Tip", "Emp_Tip", "Exc_Tip"})})
 * @ORM\Entity
 */
class Tipos
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Tip", type="boolean", nullable=false)
     */
    private $bajaTip = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTip;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tip", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTip;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tip", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Tip", type="string", length=1, nullable=true)
     */
    private $tipTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Tip", type="string", length=15, nullable=true)
     */
    private $nomTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Tip", type="string", length=2, nullable=true)
     */
    private $priorTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Veh_Tip", type="string", length=10, nullable=true)
     */
    private $vehTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tra_Tip", type="string", length=5, nullable=true)
     */
    private $traTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Tip", type="string", length=10, nullable=true)
     */
    private $ctcTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele_Tip", type="string", length=75, nullable=true)
     */
    private $eleTip;

    /**
     * @var bool
     *
     * @ORM\Column(name="Exc_Tip", type="boolean", nullable=false)
     */
    private $excTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cabecera_Tip", type="string", length=20, nullable=true)
     */
    private $cabeceraTip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Volvta_Tip", type="smallint", nullable=true)
     */
    private $volvtaTip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Volcos_Tip", type="smallint", nullable=true)
     */
    private $volcosTip;

    /**
     * @var bool
     *
     * @ORM\Column(name="Reparto_Tip", type="boolean", nullable=false)
     */
    private $repartoTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtcExe_Tip", type="string", length=10, nullable=true)
     */
    private $ctcexeTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color_Tip", type="string", length=50, nullable=true)
     */
    private $colorTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TraRep_Tip", type="string", length=5, nullable=true)
     */
    private $trarepTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TraNac_Tip", type="string", length=5, nullable=true)
     */
    private $tranacTip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MiraZona_Tip", type="boolean", nullable=true)
     */
    private $mirazonaTip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MultiBulto_Tip", type="boolean", nullable=true)
     */
    private $multibultoTip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ValBul_Tip", type="boolean", nullable=true)
     */
    private $valbulTip;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiasEnt_Tip", type="smallint", nullable=true)
     */
    private $diasentTip;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorEnt_Tip", type="datetime", nullable=true)
     */
    private $horentTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IcoVisual_tip", type="string", length=2, nullable=true)
     */
    private $icovisualTip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Tip", type="string", length=180, nullable=true)
     */
    private $obsTip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PcoNacLin1_Tip", type="boolean", nullable=true)
     */
    private $pconaclin1Tip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ExcPvpNacLin1_Tip", type="boolean", nullable=true)
     */
    private $excpvpnaclin1Tip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PcoRecLin2_Tip", type="boolean", nullable=true)
     */
    private $pcoreclin2Tip;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ExcPvpRecLin2_Tip", type="boolean", nullable=true)
     */
    private $excpvpreclin2Tip;

    public function getBajaTip(): ?bool
    {
        return $this->bajaTip;
    }

    public function setBajaTip(bool $bajaTip): self
    {
        $this->bajaTip = $bajaTip;

        return $this;
    }

    public function getSucursalTip(): ?int
    {
        return $this->sucursalTip;
    }

    public function getEmpTip(): ?int
    {
        return $this->empTip;
    }

    public function getCodTip(): ?string
    {
        return $this->codTip;
    }

    public function getTipTip(): ?string
    {
        return $this->tipTip;
    }

    public function setTipTip(?string $tipTip): self
    {
        $this->tipTip = $tipTip;

        return $this;
    }

    public function getNomTip(): ?string
    {
        return $this->nomTip;
    }

    public function setNomTip(?string $nomTip): self
    {
        $this->nomTip = $nomTip;

        return $this;
    }

    public function getPriorTip(): ?string
    {
        return $this->priorTip;
    }

    public function setPriorTip(?string $priorTip): self
    {
        $this->priorTip = $priorTip;

        return $this;
    }

    public function getVehTip(): ?string
    {
        return $this->vehTip;
    }

    public function setVehTip(?string $vehTip): self
    {
        $this->vehTip = $vehTip;

        return $this;
    }

    public function getTraTip(): ?string
    {
        return $this->traTip;
    }

    public function setTraTip(?string $traTip): self
    {
        $this->traTip = $traTip;

        return $this;
    }

    public function getCtcTip(): ?string
    {
        return $this->ctcTip;
    }

    public function setCtcTip(?string $ctcTip): self
    {
        $this->ctcTip = $ctcTip;

        return $this;
    }

    public function getEleTip(): ?string
    {
        return $this->eleTip;
    }

    public function setEleTip(?string $eleTip): self
    {
        $this->eleTip = $eleTip;

        return $this;
    }

    public function getExcTip(): ?bool
    {
        return $this->excTip;
    }

    public function setExcTip(bool $excTip): self
    {
        $this->excTip = $excTip;

        return $this;
    }

    public function getCabeceraTip(): ?string
    {
        return $this->cabeceraTip;
    }

    public function setCabeceraTip(?string $cabeceraTip): self
    {
        $this->cabeceraTip = $cabeceraTip;

        return $this;
    }

    public function getVolvtaTip(): ?int
    {
        return $this->volvtaTip;
    }

    public function setVolvtaTip(?int $volvtaTip): self
    {
        $this->volvtaTip = $volvtaTip;

        return $this;
    }

    public function getVolcosTip(): ?int
    {
        return $this->volcosTip;
    }

    public function setVolcosTip(?int $volcosTip): self
    {
        $this->volcosTip = $volcosTip;

        return $this;
    }

    public function getRepartoTip(): ?bool
    {
        return $this->repartoTip;
    }

    public function setRepartoTip(bool $repartoTip): self
    {
        $this->repartoTip = $repartoTip;

        return $this;
    }

    public function getCtcexeTip(): ?string
    {
        return $this->ctcexeTip;
    }

    public function setCtcexeTip(?string $ctcexeTip): self
    {
        $this->ctcexeTip = $ctcexeTip;

        return $this;
    }

    public function getColorTip(): ?string
    {
        return $this->colorTip;
    }

    public function setColorTip(?string $colorTip): self
    {
        $this->colorTip = $colorTip;

        return $this;
    }

    public function getTrarepTip(): ?string
    {
        return $this->trarepTip;
    }

    public function setTrarepTip(?string $trarepTip): self
    {
        $this->trarepTip = $trarepTip;

        return $this;
    }

    public function getTranacTip(): ?string
    {
        return $this->tranacTip;
    }

    public function setTranacTip(?string $tranacTip): self
    {
        $this->tranacTip = $tranacTip;

        return $this;
    }

    public function getMirazonaTip(): ?bool
    {
        return $this->mirazonaTip;
    }

    public function setMirazonaTip(?bool $mirazonaTip): self
    {
        $this->mirazonaTip = $mirazonaTip;

        return $this;
    }

    public function getMultibultoTip(): ?bool
    {
        return $this->multibultoTip;
    }

    public function setMultibultoTip(?bool $multibultoTip): self
    {
        $this->multibultoTip = $multibultoTip;

        return $this;
    }

    public function getValbulTip(): ?bool
    {
        return $this->valbulTip;
    }

    public function setValbulTip(?bool $valbulTip): self
    {
        $this->valbulTip = $valbulTip;

        return $this;
    }

    public function getDiasentTip(): ?int
    {
        return $this->diasentTip;
    }

    public function setDiasentTip(?int $diasentTip): self
    {
        $this->diasentTip = $diasentTip;

        return $this;
    }

    public function getHorentTip(): ?\DateTimeInterface
    {
        return $this->horentTip;
    }

    public function setHorentTip(?\DateTimeInterface $horentTip): self
    {
        $this->horentTip = $horentTip;

        return $this;
    }

    public function getIcovisualTip(): ?string
    {
        return $this->icovisualTip;
    }

    public function setIcovisualTip(?string $icovisualTip): self
    {
        $this->icovisualTip = $icovisualTip;

        return $this;
    }

    public function getObsTip(): ?string
    {
        return $this->obsTip;
    }

    public function setObsTip(?string $obsTip): self
    {
        $this->obsTip = $obsTip;

        return $this;
    }

    public function getPconaclin1Tip(): ?bool
    {
        return $this->pconaclin1Tip;
    }

    public function setPconaclin1Tip(?bool $pconaclin1Tip): self
    {
        $this->pconaclin1Tip = $pconaclin1Tip;

        return $this;
    }

    public function getExcpvpnaclin1Tip(): ?bool
    {
        return $this->excpvpnaclin1Tip;
    }

    public function setExcpvpnaclin1Tip(?bool $excpvpnaclin1Tip): self
    {
        $this->excpvpnaclin1Tip = $excpvpnaclin1Tip;

        return $this;
    }

    public function getPcoreclin2Tip(): ?bool
    {
        return $this->pcoreclin2Tip;
    }

    public function setPcoreclin2Tip(?bool $pcoreclin2Tip): self
    {
        $this->pcoreclin2Tip = $pcoreclin2Tip;

        return $this;
    }

    public function getExcpvpreclin2Tip(): ?bool
    {
        return $this->excpvpreclin2Tip;
    }

    public function setExcpvpreclin2Tip(?bool $excpvpreclin2Tip): self
    {
        $this->excpvpreclin2Tip = $excpvpreclin2Tip;

        return $this;
    }


}
