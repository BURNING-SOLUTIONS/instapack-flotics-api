<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Borrados
 *
 * @ORM\Table(name="Borrados")
 * @ORM\Entity
 */
class Borrados
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Bor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalBor;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Bor", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empBor;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Bor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numBor;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Bor", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Bor", type="integer", nullable=true)
     */
    private $cliBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Bor", type="string", length=12, nullable=true)
     */
    private $depBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Bor", type="integer", nullable=true)
     */
    private $menBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oficar_Bor", type="integer", nullable=true)
     */
    private $oficarBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofiori_Bor", type="integer", nullable=true)
     */
    private $ofioriBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofidis_Bor", type="integer", nullable=true)
     */
    private $ofidisBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Bor", type="string", length=5, nullable=true)
     */
    private $tipBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Bor", type="string", length=100, nullable=true)
     */
    private $refBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref2_Bor", type="string", length=100, nullable=true)
     */
    private $ref2Bor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Porte_Bor", type="string", length=1, nullable=true)
     */
    private $porteBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Diaent_Bor", type="string", length=1, nullable=true)
     */
    private $diaentBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Bor", type="smallint", nullable=true)
     */
    private $viaBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tentrega_Bor", type="string", length=1, nullable=true)
     */
    private $tentregaBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conte_Bor", type="string", length=1, nullable=true)
     */
    private $conteBor;

    /**
     * @var bool
     *
     * @ORM\Column(name="Retorno_Bor", type="boolean", nullable=false)
     */
    private $retornoBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Bor", type="string", length=40, nullable=true)
     */
    private $desBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Bor", type="string", length=50, nullable=true)
     */
    private $dirBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdir_Bor", type="string", length=3, nullable=true)
     */
    private $tdirBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndir_Bor", type="smallint", nullable=true)
     */
    private $ndirBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdir_Bor", type="string", length=10, nullable=true)
     */
    private $pdirBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pla_Bor", type="string", length=4, nullable=true)
     */
    private $plaBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Bor", type="string", length=5, nullable=true)
     */
    private $zonBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Bor", type="string", length=35, nullable=true)
     */
    private $pobBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Bor", type="integer", nullable=true)
     */
    private $cdpBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Bor", type="string", length=25, nullable=true)
     */
    private $paisBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CdpInt_Bor", type="string", length=15, nullable=true)
     */
    private $cdpintBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Bor", type="string", length=180, nullable=true)
     */
    private $obsBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Bor", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Bor", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesvolBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Bor", type="smallint", nullable=true)
     */
    private $dim1Bor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Bor", type="smallint", nullable=true)
     */
    private $dim2Bor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Bor", type="smallint", nullable=true)
     */
    private $dim3Bor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bul_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $bulBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Kms_Bor", type="smallint", nullable=true)
     */
    private $kmsBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ideb_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $idebBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iree_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $ireeBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Val_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $valBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odree_Bor", type="string", length=1, nullable=true)
     */
    private $odreeBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odseg_Bor", type="string", length=1, nullable=true)
     */
    private $odsegBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zonpre_Bor", type="string", length=5, nullable=true)
     */
    private $zonpreBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Bor", type="string", length=2, nullable=true)
     */
    private $priorBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Re_Bor", type="string", length=1, nullable=true)
     */
    private $reBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Bor", type="smallint", nullable=true)
     */
    private $usuBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fea_Bor", type="datetime", nullable=true)
     */
    private $feaBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hoa_Bor", type="datetime", nullable=true)
     */
    private $hoaBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fel_Bor", type="datetime", nullable=true)
     */
    private $felBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hol_Bor", type="datetime", nullable=true)
     */
    private $holBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fent_Bor", type="datetime", nullable=true)
     */
    private $fentBor;

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_Bor", type="boolean", nullable=false)
     */
    private $bloqueoBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ttip_Bor", type="string", length=1, nullable=true)
     */
    private $ttipBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Bor", type="integer", nullable=true)
     */
    private $telBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorMax_Bor", type="datetime", nullable=true)
     */
    private $hormaxBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZonInt_Bor", type="string", length=3, nullable=true)
     */
    private $zonintBor;

    /**
     * @var bool
     *
     * @ORM\Column(name="Manifestar_Bor", type="boolean", nullable=false)
     */
    private $manifestarBor;

    /**
     * @var string
     *
     * @ORM\Column(name="Nacional_Bor", type="string", length=1, nullable=false)
     */
    private $nacionalBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecRet_Bor", type="datetime", nullable=true)
     */
    private $fecretBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iva_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $ivaBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Falta_Bor", type="boolean", nullable=true)
     */
    private $faltaBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Sobra_Bor", type="boolean", nullable=true)
     */
    private $sobraBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MarcaRep_Bor", type="boolean", nullable=true)
     */
    private $marcarepBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IPuente_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $ipuenteBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComRee_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomreeBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComSeg_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomsegBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Obligavia_Bor", type="boolean", nullable=true)
     */
    private $obligaviaBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Gestion_Bor", type="boolean", nullable=true)
     */
    private $gestionBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ConfEnt_Bor", type="boolean", nullable=true)
     */
    private $confentBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AcuRec_Bor", type="boolean", nullable=true)
     */
    private $acurecBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Adelanto_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $adelantoBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComAde_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomadeBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ODAde_Bor", type="string", length=1, nullable=true)
     */
    private $odadeBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefRet_Bor", type="string", length=12, nullable=true)
     */
    private $refretBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipRet_Bor", type="string", length=5, nullable=true)
     */
    private $tipretBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiLiq_Bor", type="integer", nullable=true)
     */
    private $ofiliqBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliLiq_Bor", type="integer", nullable=true)
     */
    private $cliliqBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Oficial_Bor", type="boolean", nullable=true)
     */
    private $oficialBor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpPan_Bor", type="integer", nullable=true)
     */
    private $cdppanBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipSeg_Bor", type="string", length=1, nullable=true)
     */
    private $tipsegBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipDua_Bor", type="string", length=1, nullable=true)
     */
    private $tipduaBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecInt_Bor", type="datetime", nullable=true)
     */
    private $fecintBor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecAcu_Bor", type="datetime", nullable=true)
     */
    private $fecacuBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AtEsp_Bor", type="boolean", nullable=true)
     */
    private $atespBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Longitud_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $longitudBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Latitud_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $latitudBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CobroACta_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $cobroactaBor;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComCAC_Bor", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomcacBor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odcc_Bor", type="string", length=1, nullable=true)
     */
    private $odccBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Transmitido_Bor", type="boolean", nullable=true)
     */
    private $transmitidoBor;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AutKm_Bor", type="boolean", nullable=true)
     */
    private $autkmBor;

    public function getSucursalBor(): ?int
    {
        return $this->sucursalBor;
    }

    public function getEmpBor(): ?int
    {
        return $this->empBor;
    }

    public function getNumBor(): ?int
    {
        return $this->numBor;
    }

    public function getLinBor(): ?int
    {
        return $this->linBor;
    }

    public function getCliBor(): ?int
    {
        return $this->cliBor;
    }

    public function setCliBor(?int $cliBor): self
    {
        $this->cliBor = $cliBor;

        return $this;
    }

    public function getDepBor(): ?string
    {
        return $this->depBor;
    }

    public function setDepBor(?string $depBor): self
    {
        $this->depBor = $depBor;

        return $this;
    }

    public function getMenBor(): ?int
    {
        return $this->menBor;
    }

    public function setMenBor(?int $menBor): self
    {
        $this->menBor = $menBor;

        return $this;
    }

    public function getOficarBor(): ?int
    {
        return $this->oficarBor;
    }

    public function setOficarBor(?int $oficarBor): self
    {
        $this->oficarBor = $oficarBor;

        return $this;
    }

    public function getOfioriBor(): ?int
    {
        return $this->ofioriBor;
    }

    public function setOfioriBor(?int $ofioriBor): self
    {
        $this->ofioriBor = $ofioriBor;

        return $this;
    }

    public function getOfidisBor(): ?int
    {
        return $this->ofidisBor;
    }

    public function setOfidisBor(?int $ofidisBor): self
    {
        $this->ofidisBor = $ofidisBor;

        return $this;
    }

    public function getTipBor(): ?string
    {
        return $this->tipBor;
    }

    public function setTipBor(?string $tipBor): self
    {
        $this->tipBor = $tipBor;

        return $this;
    }

    public function getRefBor(): ?string
    {
        return $this->refBor;
    }

    public function setRefBor(?string $refBor): self
    {
        $this->refBor = $refBor;

        return $this;
    }

    public function getRef2Bor(): ?string
    {
        return $this->ref2Bor;
    }

    public function setRef2Bor(?string $ref2Bor): self
    {
        $this->ref2Bor = $ref2Bor;

        return $this;
    }

    public function getPorteBor(): ?string
    {
        return $this->porteBor;
    }

    public function setPorteBor(?string $porteBor): self
    {
        $this->porteBor = $porteBor;

        return $this;
    }

    public function getDiaentBor(): ?string
    {
        return $this->diaentBor;
    }

    public function setDiaentBor(?string $diaentBor): self
    {
        $this->diaentBor = $diaentBor;

        return $this;
    }

    public function getViaBor(): ?int
    {
        return $this->viaBor;
    }

    public function setViaBor(?int $viaBor): self
    {
        $this->viaBor = $viaBor;

        return $this;
    }

    public function getTentregaBor(): ?string
    {
        return $this->tentregaBor;
    }

    public function setTentregaBor(?string $tentregaBor): self
    {
        $this->tentregaBor = $tentregaBor;

        return $this;
    }

    public function getConteBor(): ?string
    {
        return $this->conteBor;
    }

    public function setConteBor(?string $conteBor): self
    {
        $this->conteBor = $conteBor;

        return $this;
    }

    public function getRetornoBor(): ?bool
    {
        return $this->retornoBor;
    }

    public function setRetornoBor(bool $retornoBor): self
    {
        $this->retornoBor = $retornoBor;

        return $this;
    }

    public function getDesBor(): ?string
    {
        return $this->desBor;
    }

    public function setDesBor(?string $desBor): self
    {
        $this->desBor = $desBor;

        return $this;
    }

    public function getDirBor(): ?string
    {
        return $this->dirBor;
    }

    public function setDirBor(?string $dirBor): self
    {
        $this->dirBor = $dirBor;

        return $this;
    }

    public function getTdirBor(): ?string
    {
        return $this->tdirBor;
    }

    public function setTdirBor(?string $tdirBor): self
    {
        $this->tdirBor = $tdirBor;

        return $this;
    }

    public function getNdirBor(): ?int
    {
        return $this->ndirBor;
    }

    public function setNdirBor(?int $ndirBor): self
    {
        $this->ndirBor = $ndirBor;

        return $this;
    }

    public function getPdirBor(): ?string
    {
        return $this->pdirBor;
    }

    public function setPdirBor(?string $pdirBor): self
    {
        $this->pdirBor = $pdirBor;

        return $this;
    }

    public function getPlaBor(): ?string
    {
        return $this->plaBor;
    }

    public function setPlaBor(?string $plaBor): self
    {
        $this->plaBor = $plaBor;

        return $this;
    }

    public function getZonBor(): ?string
    {
        return $this->zonBor;
    }

    public function setZonBor(?string $zonBor): self
    {
        $this->zonBor = $zonBor;

        return $this;
    }

    public function getPobBor(): ?string
    {
        return $this->pobBor;
    }

    public function setPobBor(?string $pobBor): self
    {
        $this->pobBor = $pobBor;

        return $this;
    }

    public function getCdpBor(): ?int
    {
        return $this->cdpBor;
    }

    public function setCdpBor(?int $cdpBor): self
    {
        $this->cdpBor = $cdpBor;

        return $this;
    }

    public function getPaisBor(): ?string
    {
        return $this->paisBor;
    }

    public function setPaisBor(?string $paisBor): self
    {
        $this->paisBor = $paisBor;

        return $this;
    }

    public function getCdpintBor(): ?string
    {
        return $this->cdpintBor;
    }

    public function setCdpintBor(?string $cdpintBor): self
    {
        $this->cdpintBor = $cdpintBor;

        return $this;
    }

    public function getObsBor(): ?string
    {
        return $this->obsBor;
    }

    public function setObsBor(?string $obsBor): self
    {
        $this->obsBor = $obsBor;

        return $this;
    }

    public function getPesBor(): ?float
    {
        return $this->pesBor;
    }

    public function setPesBor(?float $pesBor): self
    {
        $this->pesBor = $pesBor;

        return $this;
    }

    public function getPesvolBor(): ?float
    {
        return $this->pesvolBor;
    }

    public function setPesvolBor(?float $pesvolBor): self
    {
        $this->pesvolBor = $pesvolBor;

        return $this;
    }

    public function getDim1Bor(): ?int
    {
        return $this->dim1Bor;
    }

    public function setDim1Bor(?int $dim1Bor): self
    {
        $this->dim1Bor = $dim1Bor;

        return $this;
    }

    public function getDim2Bor(): ?int
    {
        return $this->dim2Bor;
    }

    public function setDim2Bor(?int $dim2Bor): self
    {
        $this->dim2Bor = $dim2Bor;

        return $this;
    }

    public function getDim3Bor(): ?int
    {
        return $this->dim3Bor;
    }

    public function setDim3Bor(?int $dim3Bor): self
    {
        $this->dim3Bor = $dim3Bor;

        return $this;
    }

    public function getBulBor(): ?float
    {
        return $this->bulBor;
    }

    public function setBulBor(?float $bulBor): self
    {
        $this->bulBor = $bulBor;

        return $this;
    }

    public function getKmsBor(): ?int
    {
        return $this->kmsBor;
    }

    public function setKmsBor(?int $kmsBor): self
    {
        $this->kmsBor = $kmsBor;

        return $this;
    }

    public function getIdebBor(): ?float
    {
        return $this->idebBor;
    }

    public function setIdebBor(?float $idebBor): self
    {
        $this->idebBor = $idebBor;

        return $this;
    }

    public function getIreeBor(): ?float
    {
        return $this->ireeBor;
    }

    public function setIreeBor(?float $ireeBor): self
    {
        $this->ireeBor = $ireeBor;

        return $this;
    }

    public function getValBor(): ?float
    {
        return $this->valBor;
    }

    public function setValBor(?float $valBor): self
    {
        $this->valBor = $valBor;

        return $this;
    }

    public function getOdreeBor(): ?string
    {
        return $this->odreeBor;
    }

    public function setOdreeBor(?string $odreeBor): self
    {
        $this->odreeBor = $odreeBor;

        return $this;
    }

    public function getOdsegBor(): ?string
    {
        return $this->odsegBor;
    }

    public function setOdsegBor(?string $odsegBor): self
    {
        $this->odsegBor = $odsegBor;

        return $this;
    }

    public function getZonpreBor(): ?string
    {
        return $this->zonpreBor;
    }

    public function setZonpreBor(?string $zonpreBor): self
    {
        $this->zonpreBor = $zonpreBor;

        return $this;
    }

    public function getPriorBor(): ?string
    {
        return $this->priorBor;
    }

    public function setPriorBor(?string $priorBor): self
    {
        $this->priorBor = $priorBor;

        return $this;
    }

    public function getReBor(): ?string
    {
        return $this->reBor;
    }

    public function setReBor(?string $reBor): self
    {
        $this->reBor = $reBor;

        return $this;
    }

    public function getUsuBor(): ?int
    {
        return $this->usuBor;
    }

    public function setUsuBor(?int $usuBor): self
    {
        $this->usuBor = $usuBor;

        return $this;
    }

    public function getFeaBor(): ?\DateTimeInterface
    {
        return $this->feaBor;
    }

    public function setFeaBor(?\DateTimeInterface $feaBor): self
    {
        $this->feaBor = $feaBor;

        return $this;
    }

    public function getHoaBor(): ?\DateTimeInterface
    {
        return $this->hoaBor;
    }

    public function setHoaBor(?\DateTimeInterface $hoaBor): self
    {
        $this->hoaBor = $hoaBor;

        return $this;
    }

    public function getFelBor(): ?\DateTimeInterface
    {
        return $this->felBor;
    }

    public function setFelBor(?\DateTimeInterface $felBor): self
    {
        $this->felBor = $felBor;

        return $this;
    }

    public function getHolBor(): ?\DateTimeInterface
    {
        return $this->holBor;
    }

    public function setHolBor(?\DateTimeInterface $holBor): self
    {
        $this->holBor = $holBor;

        return $this;
    }

    public function getFentBor(): ?\DateTimeInterface
    {
        return $this->fentBor;
    }

    public function setFentBor(?\DateTimeInterface $fentBor): self
    {
        $this->fentBor = $fentBor;

        return $this;
    }

    public function getBloqueoBor(): ?bool
    {
        return $this->bloqueoBor;
    }

    public function setBloqueoBor(bool $bloqueoBor): self
    {
        $this->bloqueoBor = $bloqueoBor;

        return $this;
    }

    public function getTtipBor(): ?string
    {
        return $this->ttipBor;
    }

    public function setTtipBor(?string $ttipBor): self
    {
        $this->ttipBor = $ttipBor;

        return $this;
    }

    public function getTelBor(): ?int
    {
        return $this->telBor;
    }

    public function setTelBor(?int $telBor): self
    {
        $this->telBor = $telBor;

        return $this;
    }

    public function getHormaxBor(): ?\DateTimeInterface
    {
        return $this->hormaxBor;
    }

    public function setHormaxBor(?\DateTimeInterface $hormaxBor): self
    {
        $this->hormaxBor = $hormaxBor;

        return $this;
    }

    public function getZonintBor(): ?string
    {
        return $this->zonintBor;
    }

    public function setZonintBor(?string $zonintBor): self
    {
        $this->zonintBor = $zonintBor;

        return $this;
    }

    public function getManifestarBor(): ?bool
    {
        return $this->manifestarBor;
    }

    public function setManifestarBor(bool $manifestarBor): self
    {
        $this->manifestarBor = $manifestarBor;

        return $this;
    }

    public function getNacionalBor(): ?string
    {
        return $this->nacionalBor;
    }

    public function setNacionalBor(string $nacionalBor): self
    {
        $this->nacionalBor = $nacionalBor;

        return $this;
    }

    public function getFecretBor(): ?\DateTimeInterface
    {
        return $this->fecretBor;
    }

    public function setFecretBor(?\DateTimeInterface $fecretBor): self
    {
        $this->fecretBor = $fecretBor;

        return $this;
    }

    public function getIvaBor(): ?float
    {
        return $this->ivaBor;
    }

    public function setIvaBor(?float $ivaBor): self
    {
        $this->ivaBor = $ivaBor;

        return $this;
    }

    public function getFaltaBor(): ?bool
    {
        return $this->faltaBor;
    }

    public function setFaltaBor(?bool $faltaBor): self
    {
        $this->faltaBor = $faltaBor;

        return $this;
    }

    public function getSobraBor(): ?bool
    {
        return $this->sobraBor;
    }

    public function setSobraBor(?bool $sobraBor): self
    {
        $this->sobraBor = $sobraBor;

        return $this;
    }

    public function getMarcarepBor(): ?bool
    {
        return $this->marcarepBor;
    }

    public function setMarcarepBor(?bool $marcarepBor): self
    {
        $this->marcarepBor = $marcarepBor;

        return $this;
    }

    public function getIpuenteBor(): ?float
    {
        return $this->ipuenteBor;
    }

    public function setIpuenteBor(?float $ipuenteBor): self
    {
        $this->ipuenteBor = $ipuenteBor;

        return $this;
    }

    public function getIcomreeBor(): ?float
    {
        return $this->icomreeBor;
    }

    public function setIcomreeBor(?float $icomreeBor): self
    {
        $this->icomreeBor = $icomreeBor;

        return $this;
    }

    public function getIcomsegBor(): ?float
    {
        return $this->icomsegBor;
    }

    public function setIcomsegBor(?float $icomsegBor): self
    {
        $this->icomsegBor = $icomsegBor;

        return $this;
    }

    public function getObligaviaBor(): ?bool
    {
        return $this->obligaviaBor;
    }

    public function setObligaviaBor(?bool $obligaviaBor): self
    {
        $this->obligaviaBor = $obligaviaBor;

        return $this;
    }

    public function getGestionBor(): ?bool
    {
        return $this->gestionBor;
    }

    public function setGestionBor(?bool $gestionBor): self
    {
        $this->gestionBor = $gestionBor;

        return $this;
    }

    public function getConfentBor(): ?bool
    {
        return $this->confentBor;
    }

    public function setConfentBor(?bool $confentBor): self
    {
        $this->confentBor = $confentBor;

        return $this;
    }

    public function getAcurecBor(): ?bool
    {
        return $this->acurecBor;
    }

    public function setAcurecBor(?bool $acurecBor): self
    {
        $this->acurecBor = $acurecBor;

        return $this;
    }

    public function getAdelantoBor(): ?float
    {
        return $this->adelantoBor;
    }

    public function setAdelantoBor(?float $adelantoBor): self
    {
        $this->adelantoBor = $adelantoBor;

        return $this;
    }

    public function getIcomadeBor(): ?float
    {
        return $this->icomadeBor;
    }

    public function setIcomadeBor(?float $icomadeBor): self
    {
        $this->icomadeBor = $icomadeBor;

        return $this;
    }

    public function getOdadeBor(): ?string
    {
        return $this->odadeBor;
    }

    public function setOdadeBor(?string $odadeBor): self
    {
        $this->odadeBor = $odadeBor;

        return $this;
    }

    public function getRefretBor(): ?string
    {
        return $this->refretBor;
    }

    public function setRefretBor(?string $refretBor): self
    {
        $this->refretBor = $refretBor;

        return $this;
    }

    public function getTipretBor(): ?string
    {
        return $this->tipretBor;
    }

    public function setTipretBor(?string $tipretBor): self
    {
        $this->tipretBor = $tipretBor;

        return $this;
    }

    public function getOfiliqBor(): ?int
    {
        return $this->ofiliqBor;
    }

    public function setOfiliqBor(?int $ofiliqBor): self
    {
        $this->ofiliqBor = $ofiliqBor;

        return $this;
    }

    public function getCliliqBor(): ?int
    {
        return $this->cliliqBor;
    }

    public function setCliliqBor(?int $cliliqBor): self
    {
        $this->cliliqBor = $cliliqBor;

        return $this;
    }

    public function getOficialBor(): ?bool
    {
        return $this->oficialBor;
    }

    public function setOficialBor(?bool $oficialBor): self
    {
        $this->oficialBor = $oficialBor;

        return $this;
    }

    public function getCdppanBor(): ?int
    {
        return $this->cdppanBor;
    }

    public function setCdppanBor(?int $cdppanBor): self
    {
        $this->cdppanBor = $cdppanBor;

        return $this;
    }

    public function getTipsegBor(): ?string
    {
        return $this->tipsegBor;
    }

    public function setTipsegBor(?string $tipsegBor): self
    {
        $this->tipsegBor = $tipsegBor;

        return $this;
    }

    public function getTipduaBor(): ?string
    {
        return $this->tipduaBor;
    }

    public function setTipduaBor(?string $tipduaBor): self
    {
        $this->tipduaBor = $tipduaBor;

        return $this;
    }

    public function getFecintBor(): ?\DateTimeInterface
    {
        return $this->fecintBor;
    }

    public function setFecintBor(?\DateTimeInterface $fecintBor): self
    {
        $this->fecintBor = $fecintBor;

        return $this;
    }

    public function getFecacuBor(): ?\DateTimeInterface
    {
        return $this->fecacuBor;
    }

    public function setFecacuBor(?\DateTimeInterface $fecacuBor): self
    {
        $this->fecacuBor = $fecacuBor;

        return $this;
    }

    public function getAtespBor(): ?bool
    {
        return $this->atespBor;
    }

    public function setAtespBor(?bool $atespBor): self
    {
        $this->atespBor = $atespBor;

        return $this;
    }

    public function getLongitudBor(): ?float
    {
        return $this->longitudBor;
    }

    public function setLongitudBor(?float $longitudBor): self
    {
        $this->longitudBor = $longitudBor;

        return $this;
    }

    public function getLatitudBor(): ?float
    {
        return $this->latitudBor;
    }

    public function setLatitudBor(?float $latitudBor): self
    {
        $this->latitudBor = $latitudBor;

        return $this;
    }

    public function getCobroactaBor(): ?float
    {
        return $this->cobroactaBor;
    }

    public function setCobroactaBor(?float $cobroactaBor): self
    {
        $this->cobroactaBor = $cobroactaBor;

        return $this;
    }

    public function getIcomcacBor(): ?float
    {
        return $this->icomcacBor;
    }

    public function setIcomcacBor(?float $icomcacBor): self
    {
        $this->icomcacBor = $icomcacBor;

        return $this;
    }

    public function getOdccBor(): ?string
    {
        return $this->odccBor;
    }

    public function setOdccBor(?string $odccBor): self
    {
        $this->odccBor = $odccBor;

        return $this;
    }

    public function getTransmitidoBor(): ?bool
    {
        return $this->transmitidoBor;
    }

    public function setTransmitidoBor(?bool $transmitidoBor): self
    {
        $this->transmitidoBor = $transmitidoBor;

        return $this;
    }

    public function getAutkmBor(): ?bool
    {
        return $this->autkmBor;
    }

    public function setAutkmBor(?bool $autkmBor): self
    {
        $this->autkmBor = $autkmBor;

        return $this;
    }


}
