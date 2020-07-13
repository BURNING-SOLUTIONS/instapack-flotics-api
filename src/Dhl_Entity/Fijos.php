<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fijos
 *
 * @ORM\Table(name="fijos")
 * @ORM\Entity
 */
class Fijos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fij", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFij = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fij", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFij = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Fij", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoFij;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fij", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFij = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Fij", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oficar_Fij", type="integer", nullable=true)
     */
    private $oficarFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofiori_Fij", type="integer", nullable=true)
     */
    private $ofioriFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofidis_Fij", type="integer", nullable=true)
     */
    private $ofidisFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Fij", type="string", length=5, nullable=true)
     */
    private $tipFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Porte_Fij", type="string", length=1, nullable=true)
     */
    private $porteFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Diaent_Fij", type="string", length=1, nullable=true)
     */
    private $diaentFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Fij", type="smallint", nullable=true)
     */
    private $viaFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tentrega_Fij", type="string", length=1, nullable=true)
     */
    private $tentregaFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conte_Fij", type="string", length=1, nullable=true)
     */
    private $conteFij;

    /**
     * @var bool
     *
     * @ORM\Column(name="Retorno_Fij", type="boolean", nullable=false)
     */
    private $retornoFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Fij", type="string", length=40, nullable=true)
     */
    private $desFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Fij", type="string", length=50, nullable=true)
     */
    private $dirFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdir_Fij", type="string", length=3, nullable=true)
     */
    private $tdirFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndir_Fij", type="smallint", nullable=true)
     */
    private $ndirFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdir_Fij", type="string", length=10, nullable=true)
     */
    private $pdirFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pla_Fij", type="string", length=4, nullable=true)
     */
    private $plaFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Fij", type="string", length=5, nullable=true)
     */
    private $zonFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Fij", type="string", length=35, nullable=true)
     */
    private $pobFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Fij", type="integer", nullable=true)
     */
    private $cdpFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Fij", type="string", length=25, nullable=true)
     */
    private $paisFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CdpInt_Fij", type="string", length=15, nullable=true)
     */
    private $cdpintFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Fij", type="string", length=180, nullable=true)
     */
    private $obsFij;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Fij", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesFij = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Fij", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesvolFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Fij", type="smallint", nullable=true)
     */
    private $dim1Fij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Fij", type="smallint", nullable=true)
     */
    private $dim2Fij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Fij", type="smallint", nullable=true)
     */
    private $dim3Fij = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bul_Fij", type="float", precision=53, scale=0, nullable=true)
     */
    private $bulFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Kms_Fij", type="smallint", nullable=true)
     */
    private $kmsFij = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ideb_Fij", type="float", precision=53, scale=0, nullable=true)
     */
    private $idebFij = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iree_Fij", type="float", precision=53, scale=0, nullable=true)
     */
    private $ireeFij = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Val_Fij", type="float", precision=53, scale=0, nullable=true)
     */
    private $valFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odree_Fij", type="string", length=1, nullable=true)
     */
    private $odreeFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odseg_Fij", type="string", length=1, nullable=true)
     */
    private $odsegFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zonpre_Fij", type="string", length=5, nullable=true)
     */
    private $zonpreFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Hora_Fij", type="smallint", nullable=true)
     */
    private $horaFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Fij", type="string", length=2, nullable=true)
     */
    private $priorFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Re_Fij", type="string", length=1, nullable=true)
     */
    private $reFij;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fel_Fij", type="datetime", nullable=true)
     */
    private $felFij;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hol_Fij", type="datetime", nullable=true)
     */
    private $holFij;

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_Fij", type="boolean", nullable=false)
     */
    private $bloqueoFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ttip_Fij", type="string", length=1, nullable=true)
     */
    private $ttipFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Fij", type="integer", nullable=true)
     */
    private $telFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZonInt_Fij", type="string", length=3, nullable=true)
     */
    private $zonintFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Fij", type="integer", nullable=true)
     */
    private $menFij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Fij", type="integer", nullable=true)
     */
    private $cliFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Fij", type="string", length=12, nullable=true)
     */
    private $depFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dias_Fij", type="string", length=7, nullable=true)
     */
    private $diasFij;

    /**
     * @var bool
     *
     * @ORM\Column(name="Genera_Fij", type="boolean", nullable=false)
     */
    private $generaFij = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Gestion_Fij", type="boolean", nullable=true)
     */
    private $gestionFij;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ConfEnt_Fij", type="boolean", nullable=true)
     */
    private $confentFij;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AcuRec_Fij", type="boolean", nullable=true)
     */
    private $acurecFij;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Adelanto_Fij", type="float", precision=53, scale=0, nullable=true)
     */
    private $adelantoFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ODAde_Fij", type="string", length=1, nullable=true)
     */
    private $odadeFij;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Oficial_fij", type="boolean", nullable=true)
     */
    private $oficialFij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpPan_fij", type="integer", nullable=true)
     */
    private $cdppanFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipSeg_Fij", type="string", length=1, nullable=true)
     */
    private $tipsegFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipDua_Fij", type="string", length=1, nullable=true)
     */
    private $tipduaFij;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AtEsp_Fij", type="boolean", nullable=true)
     */
    private $atespFij;

    /**
     * @var float
     *
     * @ORM\Column(name="Longitud_Fij", type="float", precision=53, scale=0, nullable=false)
     */
    private $longitudFij = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Latitud_Fij", type="float", precision=53, scale=0, nullable=false)
     */
    private $latitudFij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Fij", type="string", length=100, nullable=true)
     */
    private $refFij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref2_Fij", type="string", length=100, nullable=true)
     */
    private $ref2Fij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ruta_Fij", type="string", length=5, nullable=true)
     */
    private $rutaFij;

    public function getSucursalFij(): ?int
    {
        return $this->sucursalFij;
    }

    public function getEmpFij(): ?int
    {
        return $this->empFij;
    }

    public function getTipoFij(): ?string
    {
        return $this->tipoFij;
    }

    public function getNumFij(): ?int
    {
        return $this->numFij;
    }

    public function getLinFij(): ?int
    {
        return $this->linFij;
    }

    public function getOficarFij(): ?int
    {
        return $this->oficarFij;
    }

    public function setOficarFij(?int $oficarFij): self
    {
        $this->oficarFij = $oficarFij;

        return $this;
    }

    public function getOfioriFij(): ?int
    {
        return $this->ofioriFij;
    }

    public function setOfioriFij(?int $ofioriFij): self
    {
        $this->ofioriFij = $ofioriFij;

        return $this;
    }

    public function getOfidisFij(): ?int
    {
        return $this->ofidisFij;
    }

    public function setOfidisFij(?int $ofidisFij): self
    {
        $this->ofidisFij = $ofidisFij;

        return $this;
    }

    public function getTipFij(): ?string
    {
        return $this->tipFij;
    }

    public function setTipFij(?string $tipFij): self
    {
        $this->tipFij = $tipFij;

        return $this;
    }

    public function getPorteFij(): ?string
    {
        return $this->porteFij;
    }

    public function setPorteFij(?string $porteFij): self
    {
        $this->porteFij = $porteFij;

        return $this;
    }

    public function getDiaentFij(): ?string
    {
        return $this->diaentFij;
    }

    public function setDiaentFij(?string $diaentFij): self
    {
        $this->diaentFij = $diaentFij;

        return $this;
    }

    public function getViaFij(): ?int
    {
        return $this->viaFij;
    }

    public function setViaFij(?int $viaFij): self
    {
        $this->viaFij = $viaFij;

        return $this;
    }

    public function getTentregaFij(): ?string
    {
        return $this->tentregaFij;
    }

    public function setTentregaFij(?string $tentregaFij): self
    {
        $this->tentregaFij = $tentregaFij;

        return $this;
    }

    public function getConteFij(): ?string
    {
        return $this->conteFij;
    }

    public function setConteFij(?string $conteFij): self
    {
        $this->conteFij = $conteFij;

        return $this;
    }

    public function getRetornoFij(): ?bool
    {
        return $this->retornoFij;
    }

    public function setRetornoFij(bool $retornoFij): self
    {
        $this->retornoFij = $retornoFij;

        return $this;
    }

    public function getDesFij(): ?string
    {
        return $this->desFij;
    }

    public function setDesFij(?string $desFij): self
    {
        $this->desFij = $desFij;

        return $this;
    }

    public function getDirFij(): ?string
    {
        return $this->dirFij;
    }

    public function setDirFij(?string $dirFij): self
    {
        $this->dirFij = $dirFij;

        return $this;
    }

    public function getTdirFij(): ?string
    {
        return $this->tdirFij;
    }

    public function setTdirFij(?string $tdirFij): self
    {
        $this->tdirFij = $tdirFij;

        return $this;
    }

    public function getNdirFij(): ?int
    {
        return $this->ndirFij;
    }

    public function setNdirFij(?int $ndirFij): self
    {
        $this->ndirFij = $ndirFij;

        return $this;
    }

    public function getPdirFij(): ?string
    {
        return $this->pdirFij;
    }

    public function setPdirFij(?string $pdirFij): self
    {
        $this->pdirFij = $pdirFij;

        return $this;
    }

    public function getPlaFij(): ?string
    {
        return $this->plaFij;
    }

    public function setPlaFij(?string $plaFij): self
    {
        $this->plaFij = $plaFij;

        return $this;
    }

    public function getZonFij(): ?string
    {
        return $this->zonFij;
    }

    public function setZonFij(?string $zonFij): self
    {
        $this->zonFij = $zonFij;

        return $this;
    }

    public function getPobFij(): ?string
    {
        return $this->pobFij;
    }

    public function setPobFij(?string $pobFij): self
    {
        $this->pobFij = $pobFij;

        return $this;
    }

    public function getCdpFij(): ?int
    {
        return $this->cdpFij;
    }

    public function setCdpFij(?int $cdpFij): self
    {
        $this->cdpFij = $cdpFij;

        return $this;
    }

    public function getPaisFij(): ?string
    {
        return $this->paisFij;
    }

    public function setPaisFij(?string $paisFij): self
    {
        $this->paisFij = $paisFij;

        return $this;
    }

    public function getCdpintFij(): ?string
    {
        return $this->cdpintFij;
    }

    public function setCdpintFij(?string $cdpintFij): self
    {
        $this->cdpintFij = $cdpintFij;

        return $this;
    }

    public function getObsFij(): ?string
    {
        return $this->obsFij;
    }

    public function setObsFij(?string $obsFij): self
    {
        $this->obsFij = $obsFij;

        return $this;
    }

    public function getPesFij(): ?float
    {
        return $this->pesFij;
    }

    public function setPesFij(?float $pesFij): self
    {
        $this->pesFij = $pesFij;

        return $this;
    }

    public function getPesvolFij(): ?float
    {
        return $this->pesvolFij;
    }

    public function setPesvolFij(?float $pesvolFij): self
    {
        $this->pesvolFij = $pesvolFij;

        return $this;
    }

    public function getDim1Fij(): ?int
    {
        return $this->dim1Fij;
    }

    public function setDim1Fij(?int $dim1Fij): self
    {
        $this->dim1Fij = $dim1Fij;

        return $this;
    }

    public function getDim2Fij(): ?int
    {
        return $this->dim2Fij;
    }

    public function setDim2Fij(?int $dim2Fij): self
    {
        $this->dim2Fij = $dim2Fij;

        return $this;
    }

    public function getDim3Fij(): ?int
    {
        return $this->dim3Fij;
    }

    public function setDim3Fij(?int $dim3Fij): self
    {
        $this->dim3Fij = $dim3Fij;

        return $this;
    }

    public function getBulFij(): ?float
    {
        return $this->bulFij;
    }

    public function setBulFij(?float $bulFij): self
    {
        $this->bulFij = $bulFij;

        return $this;
    }

    public function getKmsFij(): ?int
    {
        return $this->kmsFij;
    }

    public function setKmsFij(?int $kmsFij): self
    {
        $this->kmsFij = $kmsFij;

        return $this;
    }

    public function getIdebFij(): ?float
    {
        return $this->idebFij;
    }

    public function setIdebFij(?float $idebFij): self
    {
        $this->idebFij = $idebFij;

        return $this;
    }

    public function getIreeFij(): ?float
    {
        return $this->ireeFij;
    }

    public function setIreeFij(?float $ireeFij): self
    {
        $this->ireeFij = $ireeFij;

        return $this;
    }

    public function getValFij(): ?float
    {
        return $this->valFij;
    }

    public function setValFij(?float $valFij): self
    {
        $this->valFij = $valFij;

        return $this;
    }

    public function getOdreeFij(): ?string
    {
        return $this->odreeFij;
    }

    public function setOdreeFij(?string $odreeFij): self
    {
        $this->odreeFij = $odreeFij;

        return $this;
    }

    public function getOdsegFij(): ?string
    {
        return $this->odsegFij;
    }

    public function setOdsegFij(?string $odsegFij): self
    {
        $this->odsegFij = $odsegFij;

        return $this;
    }

    public function getZonpreFij(): ?string
    {
        return $this->zonpreFij;
    }

    public function setZonpreFij(?string $zonpreFij): self
    {
        $this->zonpreFij = $zonpreFij;

        return $this;
    }

    public function getHoraFij(): ?int
    {
        return $this->horaFij;
    }

    public function setHoraFij(?int $horaFij): self
    {
        $this->horaFij = $horaFij;

        return $this;
    }

    public function getPriorFij(): ?string
    {
        return $this->priorFij;
    }

    public function setPriorFij(?string $priorFij): self
    {
        $this->priorFij = $priorFij;

        return $this;
    }

    public function getReFij(): ?string
    {
        return $this->reFij;
    }

    public function setReFij(?string $reFij): self
    {
        $this->reFij = $reFij;

        return $this;
    }

    public function getFelFij(): ?\DateTimeInterface
    {
        return $this->felFij;
    }

    public function setFelFij(?\DateTimeInterface $felFij): self
    {
        $this->felFij = $felFij;

        return $this;
    }

    public function getHolFij(): ?\DateTimeInterface
    {
        return $this->holFij;
    }

    public function setHolFij(?\DateTimeInterface $holFij): self
    {
        $this->holFij = $holFij;

        return $this;
    }

    public function getBloqueoFij(): ?bool
    {
        return $this->bloqueoFij;
    }

    public function setBloqueoFij(bool $bloqueoFij): self
    {
        $this->bloqueoFij = $bloqueoFij;

        return $this;
    }

    public function getTtipFij(): ?string
    {
        return $this->ttipFij;
    }

    public function setTtipFij(?string $ttipFij): self
    {
        $this->ttipFij = $ttipFij;

        return $this;
    }

    public function getTelFij(): ?int
    {
        return $this->telFij;
    }

    public function setTelFij(?int $telFij): self
    {
        $this->telFij = $telFij;

        return $this;
    }

    public function getZonintFij(): ?string
    {
        return $this->zonintFij;
    }

    public function setZonintFij(?string $zonintFij): self
    {
        $this->zonintFij = $zonintFij;

        return $this;
    }

    public function getMenFij(): ?int
    {
        return $this->menFij;
    }

    public function setMenFij(?int $menFij): self
    {
        $this->menFij = $menFij;

        return $this;
    }

    public function getCliFij(): ?int
    {
        return $this->cliFij;
    }

    public function setCliFij(?int $cliFij): self
    {
        $this->cliFij = $cliFij;

        return $this;
    }

    public function getDepFij(): ?string
    {
        return $this->depFij;
    }

    public function setDepFij(?string $depFij): self
    {
        $this->depFij = $depFij;

        return $this;
    }

    public function getDiasFij(): ?string
    {
        return $this->diasFij;
    }

    public function setDiasFij(?string $diasFij): self
    {
        $this->diasFij = $diasFij;

        return $this;
    }

    public function getGeneraFij(): ?bool
    {
        return $this->generaFij;
    }

    public function setGeneraFij(bool $generaFij): self
    {
        $this->generaFij = $generaFij;

        return $this;
    }

    public function getGestionFij(): ?bool
    {
        return $this->gestionFij;
    }

    public function setGestionFij(?bool $gestionFij): self
    {
        $this->gestionFij = $gestionFij;

        return $this;
    }

    public function getConfentFij(): ?bool
    {
        return $this->confentFij;
    }

    public function setConfentFij(?bool $confentFij): self
    {
        $this->confentFij = $confentFij;

        return $this;
    }

    public function getAcurecFij(): ?bool
    {
        return $this->acurecFij;
    }

    public function setAcurecFij(?bool $acurecFij): self
    {
        $this->acurecFij = $acurecFij;

        return $this;
    }

    public function getAdelantoFij(): ?float
    {
        return $this->adelantoFij;
    }

    public function setAdelantoFij(?float $adelantoFij): self
    {
        $this->adelantoFij = $adelantoFij;

        return $this;
    }

    public function getOdadeFij(): ?string
    {
        return $this->odadeFij;
    }

    public function setOdadeFij(?string $odadeFij): self
    {
        $this->odadeFij = $odadeFij;

        return $this;
    }

    public function getOficialFij(): ?bool
    {
        return $this->oficialFij;
    }

    public function setOficialFij(?bool $oficialFij): self
    {
        $this->oficialFij = $oficialFij;

        return $this;
    }

    public function getCdppanFij(): ?int
    {
        return $this->cdppanFij;
    }

    public function setCdppanFij(?int $cdppanFij): self
    {
        $this->cdppanFij = $cdppanFij;

        return $this;
    }

    public function getTipsegFij(): ?string
    {
        return $this->tipsegFij;
    }

    public function setTipsegFij(?string $tipsegFij): self
    {
        $this->tipsegFij = $tipsegFij;

        return $this;
    }

    public function getTipduaFij(): ?string
    {
        return $this->tipduaFij;
    }

    public function setTipduaFij(?string $tipduaFij): self
    {
        $this->tipduaFij = $tipduaFij;

        return $this;
    }

    public function getAtespFij(): ?bool
    {
        return $this->atespFij;
    }

    public function setAtespFij(?bool $atespFij): self
    {
        $this->atespFij = $atespFij;

        return $this;
    }

    public function getLongitudFij(): ?float
    {
        return $this->longitudFij;
    }

    public function setLongitudFij(float $longitudFij): self
    {
        $this->longitudFij = $longitudFij;

        return $this;
    }

    public function getLatitudFij(): ?float
    {
        return $this->latitudFij;
    }

    public function setLatitudFij(float $latitudFij): self
    {
        $this->latitudFij = $latitudFij;

        return $this;
    }

    public function getRefFij(): ?string
    {
        return $this->refFij;
    }

    public function setRefFij(?string $refFij): self
    {
        $this->refFij = $refFij;

        return $this;
    }

    public function getRef2Fij(): ?string
    {
        return $this->ref2Fij;
    }

    public function setRef2Fij(?string $ref2Fij): self
    {
        $this->ref2Fij = $ref2Fij;

        return $this;
    }

    public function getRutaFij(): ?string
    {
        return $this->rutaFij;
    }

    public function setRutaFij(?string $rutaFij): self
    {
        $this->rutaFij = $rutaFij;

        return $this;
    }


}
