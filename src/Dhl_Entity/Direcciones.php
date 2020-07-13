<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direcciones
 *
 * @ORM\Table(name="direcciones", indexes={@ORM\Index(name="clv2-dir", columns={"Cli_Dir", "Dep_Dir", "Sucursal_Dir", "Emp_Dir"}), @ORM\Index(name="clv3-dir", columns={"Men_Dir", "Sucursal_Dir", "Emp_Dir"}), @ORM\Index(name="clv4-dir", columns={"Tip_Dir", "Sucursal_Dir", "Emp_Dir"}), @ORM\Index(name="clv5-dir", columns={"Fel_Dir", "Sucursal_Dir", "Emp_Dir"})})
 * @ORM\Entity
 */
class Direcciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Dir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalDir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Dir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empDir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Dir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numDir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Dir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Dir", type="integer", nullable=true)
     */
    private $cliDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Dir", type="string", length=12, nullable=true)
     */
    private $depDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Dir", type="integer", nullable=true)
     */
    private $menDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oficar_Dir", type="integer", nullable=true)
     */
    private $oficarDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofiori_Dir", type="integer", nullable=true)
     */
    private $ofioriDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofidis_Dir", type="integer", nullable=true)
     */
    private $ofidisDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Dir", type="string", length=5, nullable=true)
     */
    private $tipDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Dir", type="string", length=100, nullable=true)
     */
    private $refDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref2_Dir", type="string", length=100, nullable=true)
     */
    private $ref2Dir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Porte_Dir", type="string", length=1, nullable=true)
     */
    private $porteDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Diaent_Dir", type="string", length=1, nullable=true)
     */
    private $diaentDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Dir", type="smallint", nullable=true)
     */
    private $viaDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tentrega_Dir", type="string", length=1, nullable=true)
     */
    private $tentregaDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conte_Dir", type="string", length=1, nullable=true)
     */
    private $conteDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Retorno_Dir", type="boolean", nullable=true)
     */
    private $retornoDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Dir", type="string", length=40, nullable=true)
     */
    private $desDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Dir", type="string", length=50, nullable=true)
     */
    private $dirDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdir_Dir", type="string", length=3, nullable=true)
     */
    private $tdirDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndir_Dir", type="smallint", nullable=true)
     */
    private $ndirDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdir_Dir", type="string", length=10, nullable=true)
     */
    private $pdirDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pla_Dir", type="string", length=4, nullable=true)
     */
    private $plaDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Dir", type="string", length=5, nullable=true)
     */
    private $zonDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Dir", type="string", length=35, nullable=true)
     */
    private $pobDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Dir", type="integer", nullable=true)
     */
    private $cdpDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Dir", type="string", length=25, nullable=true)
     */
    private $paisDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CdpInt_Dir", type="string", length=15, nullable=true)
     */
    private $cdpintDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Dir", type="string", length=180, nullable=true)
     */
    private $obsDir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Dir", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Dir", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesvolDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Dir", type="smallint", nullable=true)
     */
    private $dim1Dir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Dir", type="smallint", nullable=true)
     */
    private $dim2Dir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Dir", type="smallint", nullable=true)
     */
    private $dim3Dir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bul_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $bulDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Kms_Dir", type="smallint", nullable=true)
     */
    private $kmsDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ideb_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $idebDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iree_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $ireeDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Val_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $valDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odree_Dir", type="string", length=1, nullable=true)
     */
    private $odreeDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odseg_Dir", type="string", length=1, nullable=true)
     */
    private $odsegDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zonpre_Dir", type="string", length=5, nullable=true)
     */
    private $zonpreDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Dir", type="string", length=2, nullable=true)
     */
    private $priorDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Re_Dir", type="string", length=1, nullable=true)
     */
    private $reDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Dir", type="smallint", nullable=true)
     */
    private $usuDir = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fea_Dir", type="datetime", nullable=true)
     */
    private $feaDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hoa_Dir", type="datetime", nullable=true)
     */
    private $hoaDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fel_Dir", type="datetime", nullable=true)
     */
    private $felDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hol_Dir", type="datetime", nullable=true)
     */
    private $holDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fent_Dir", type="datetime", nullable=true)
     */
    private $fentDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Bloqueo_Dir", type="boolean", nullable=true)
     */
    private $bloqueoDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ttip_Dir", type="string", length=1, nullable=true)
     */
    private $ttipDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Dir", type="integer", nullable=true)
     */
    private $telDir = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorMax_Dir", type="datetime", nullable=true)
     */
    private $hormaxDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZonInt_Dir", type="string", length=3, nullable=true)
     */
    private $zonintDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Manifestar_Dir", type="boolean", nullable=true)
     */
    private $manifestarDir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nacional_Dir", type="string", length=1, nullable=true)
     */
    private $nacionalDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecRet_Dir", type="datetime", nullable=true)
     */
    private $fecretDir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iva_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $ivaDir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Falta_Dir", type="boolean", nullable=true)
     */
    private $faltaDir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Sobra_Dir", type="boolean", nullable=true)
     */
    private $sobraDir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MarcaRep_Dir", type="boolean", nullable=true)
     */
    private $marcarepDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IPuente_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $ipuenteDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComRee_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomreeDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComSeg_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomsegDir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="obligavia_dir", type="boolean", nullable=true)
     */
    private $obligaviaDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Gestion_Dir", type="boolean", nullable=true)
     */
    private $gestionDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ConfEnt_Dir", type="boolean", nullable=true)
     */
    private $confentDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AcuRec_Dir", type="boolean", nullable=true)
     */
    private $acurecDir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Adelanto_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $adelantoDir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComAde_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomadeDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ODAde_Dir", type="string", length=1, nullable=true)
     */
    private $odadeDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefRet_Dir", type="string", length=12, nullable=true)
     */
    private $refretDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipRet_Dir", type="string", length=5, nullable=true)
     */
    private $tipretDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiLiq_Dir", type="integer", nullable=true)
     */
    private $ofiliqDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliLiq_Dir", type="integer", nullable=true)
     */
    private $cliliqDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Oficial_dir", type="boolean", nullable=true)
     */
    private $oficialDir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpPan_Dir", type="integer", nullable=true)
     */
    private $cdppanDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipSeg_Dir", type="string", length=1, nullable=true)
     */
    private $tipsegDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipDua_Dir", type="string", length=1, nullable=true)
     */
    private $tipduaDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecInt_Dir", type="datetime", nullable=true)
     */
    private $fecintDir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecAcu_Dir", type="datetime", nullable=true)
     */
    private $fecacuDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AtEsp_Dir", type="boolean", nullable=true)
     */
    private $atespDir;

    /**
     * @var float
     *
     * @ORM\Column(name="Longitud_Dir", type="float", precision=53, scale=0, nullable=false)
     */
    private $longitudDir = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Latitud_Dir", type="float", precision=53, scale=0, nullable=false)
     */
    private $latitudDir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="CobroACta_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $cobroactaDir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComCAC_Dir", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomcacDir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Odcc_dir", type="string", length=1, nullable=true)
     */
    private $odccDir;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Transmitido_Dir", type="boolean", nullable=true)
     */
    private $transmitidoDir;

    /**
     * @var bool
     *
     * @ORM\Column(name="AutKm_Dir", type="boolean", nullable=false)
     */
    private $autkmDir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="UsuAsig_Dir", type="smallint", nullable=true)
     */
    private $usuasigDir;

    public function getSucursalDir(): ?int
    {
        return $this->sucursalDir;
    }

    public function getEmpDir(): ?int
    {
        return $this->empDir;
    }

    public function getNumDir(): ?int
    {
        return $this->numDir;
    }

    public function getLinDir(): ?int
    {
        return $this->linDir;
    }

    public function getCliDir(): ?int
    {
        return $this->cliDir;
    }

    public function setCliDir(?int $cliDir): self
    {
        $this->cliDir = $cliDir;

        return $this;
    }

    public function getDepDir(): ?string
    {
        return $this->depDir;
    }

    public function setDepDir(?string $depDir): self
    {
        $this->depDir = $depDir;

        return $this;
    }

    public function getMenDir(): ?int
    {
        return $this->menDir;
    }

    public function setMenDir(?int $menDir): self
    {
        $this->menDir = $menDir;

        return $this;
    }

    public function getOficarDir(): ?int
    {
        return $this->oficarDir;
    }

    public function setOficarDir(?int $oficarDir): self
    {
        $this->oficarDir = $oficarDir;

        return $this;
    }

    public function getOfioriDir(): ?int
    {
        return $this->ofioriDir;
    }

    public function setOfioriDir(?int $ofioriDir): self
    {
        $this->ofioriDir = $ofioriDir;

        return $this;
    }

    public function getOfidisDir(): ?int
    {
        return $this->ofidisDir;
    }

    public function setOfidisDir(?int $ofidisDir): self
    {
        $this->ofidisDir = $ofidisDir;

        return $this;
    }

    public function getTipDir(): ?string
    {
        return $this->tipDir;
    }

    public function setTipDir(?string $tipDir): self
    {
        $this->tipDir = $tipDir;

        return $this;
    }

    public function getRefDir(): ?string
    {
        return $this->refDir;
    }

    public function setRefDir(?string $refDir): self
    {
        $this->refDir = $refDir;

        return $this;
    }

    public function getRef2Dir(): ?string
    {
        return $this->ref2Dir;
    }

    public function setRef2Dir(?string $ref2Dir): self
    {
        $this->ref2Dir = $ref2Dir;

        return $this;
    }

    public function getPorteDir(): ?string
    {
        return $this->porteDir;
    }

    public function setPorteDir(?string $porteDir): self
    {
        $this->porteDir = $porteDir;

        return $this;
    }

    public function getDiaentDir(): ?string
    {
        return $this->diaentDir;
    }

    public function setDiaentDir(?string $diaentDir): self
    {
        $this->diaentDir = $diaentDir;

        return $this;
    }

    public function getViaDir(): ?int
    {
        return $this->viaDir;
    }

    public function setViaDir(?int $viaDir): self
    {
        $this->viaDir = $viaDir;

        return $this;
    }

    public function getTentregaDir(): ?string
    {
        return $this->tentregaDir;
    }

    public function setTentregaDir(?string $tentregaDir): self
    {
        $this->tentregaDir = $tentregaDir;

        return $this;
    }

    public function getConteDir(): ?string
    {
        return $this->conteDir;
    }

    public function setConteDir(?string $conteDir): self
    {
        $this->conteDir = $conteDir;

        return $this;
    }

    public function getRetornoDir(): ?bool
    {
        return $this->retornoDir;
    }

    public function setRetornoDir(?bool $retornoDir): self
    {
        $this->retornoDir = $retornoDir;

        return $this;
    }

    public function getDesDir(): ?string
    {
        return $this->desDir;
    }

    public function setDesDir(?string $desDir): self
    {
        $this->desDir = $desDir;

        return $this;
    }

    public function getDirDir(): ?string
    {
        return $this->dirDir;
    }

    public function setDirDir(?string $dirDir): self
    {
        $this->dirDir = $dirDir;

        return $this;
    }

    public function getTdirDir(): ?string
    {
        return $this->tdirDir;
    }

    public function setTdirDir(?string $tdirDir): self
    {
        $this->tdirDir = $tdirDir;

        return $this;
    }

    public function getNdirDir(): ?int
    {
        return $this->ndirDir;
    }

    public function setNdirDir(?int $ndirDir): self
    {
        $this->ndirDir = $ndirDir;

        return $this;
    }

    public function getPdirDir(): ?string
    {
        return $this->pdirDir;
    }

    public function setPdirDir(?string $pdirDir): self
    {
        $this->pdirDir = $pdirDir;

        return $this;
    }

    public function getPlaDir(): ?string
    {
        return $this->plaDir;
    }

    public function setPlaDir(?string $plaDir): self
    {
        $this->plaDir = $plaDir;

        return $this;
    }

    public function getZonDir(): ?string
    {
        return $this->zonDir;
    }

    public function setZonDir(?string $zonDir): self
    {
        $this->zonDir = $zonDir;

        return $this;
    }

    public function getPobDir(): ?string
    {
        return $this->pobDir;
    }

    public function setPobDir(?string $pobDir): self
    {
        $this->pobDir = $pobDir;

        return $this;
    }

    public function getCdpDir(): ?int
    {
        return $this->cdpDir;
    }

    public function setCdpDir(?int $cdpDir): self
    {
        $this->cdpDir = $cdpDir;

        return $this;
    }

    public function getPaisDir(): ?string
    {
        return $this->paisDir;
    }

    public function setPaisDir(?string $paisDir): self
    {
        $this->paisDir = $paisDir;

        return $this;
    }

    public function getCdpintDir(): ?string
    {
        return $this->cdpintDir;
    }

    public function setCdpintDir(?string $cdpintDir): self
    {
        $this->cdpintDir = $cdpintDir;

        return $this;
    }

    public function getObsDir(): ?string
    {
        return $this->obsDir;
    }

    public function setObsDir(?string $obsDir): self
    {
        $this->obsDir = $obsDir;

        return $this;
    }

    public function getPesDir(): ?float
    {
        return $this->pesDir;
    }

    public function setPesDir(?float $pesDir): self
    {
        $this->pesDir = $pesDir;

        return $this;
    }

    public function getPesvolDir(): ?float
    {
        return $this->pesvolDir;
    }

    public function setPesvolDir(?float $pesvolDir): self
    {
        $this->pesvolDir = $pesvolDir;

        return $this;
    }

    public function getDim1Dir(): ?int
    {
        return $this->dim1Dir;
    }

    public function setDim1Dir(?int $dim1Dir): self
    {
        $this->dim1Dir = $dim1Dir;

        return $this;
    }

    public function getDim2Dir(): ?int
    {
        return $this->dim2Dir;
    }

    public function setDim2Dir(?int $dim2Dir): self
    {
        $this->dim2Dir = $dim2Dir;

        return $this;
    }

    public function getDim3Dir(): ?int
    {
        return $this->dim3Dir;
    }

    public function setDim3Dir(?int $dim3Dir): self
    {
        $this->dim3Dir = $dim3Dir;

        return $this;
    }

    public function getBulDir(): ?float
    {
        return $this->bulDir;
    }

    public function setBulDir(?float $bulDir): self
    {
        $this->bulDir = $bulDir;

        return $this;
    }

    public function getKmsDir(): ?int
    {
        return $this->kmsDir;
    }

    public function setKmsDir(?int $kmsDir): self
    {
        $this->kmsDir = $kmsDir;

        return $this;
    }

    public function getIdebDir(): ?float
    {
        return $this->idebDir;
    }

    public function setIdebDir(?float $idebDir): self
    {
        $this->idebDir = $idebDir;

        return $this;
    }

    public function getIreeDir(): ?float
    {
        return $this->ireeDir;
    }

    public function setIreeDir(?float $ireeDir): self
    {
        $this->ireeDir = $ireeDir;

        return $this;
    }

    public function getValDir(): ?float
    {
        return $this->valDir;
    }

    public function setValDir(?float $valDir): self
    {
        $this->valDir = $valDir;

        return $this;
    }

    public function getOdreeDir(): ?string
    {
        return $this->odreeDir;
    }

    public function setOdreeDir(?string $odreeDir): self
    {
        $this->odreeDir = $odreeDir;

        return $this;
    }

    public function getOdsegDir(): ?string
    {
        return $this->odsegDir;
    }

    public function setOdsegDir(?string $odsegDir): self
    {
        $this->odsegDir = $odsegDir;

        return $this;
    }

    public function getZonpreDir(): ?string
    {
        return $this->zonpreDir;
    }

    public function setZonpreDir(?string $zonpreDir): self
    {
        $this->zonpreDir = $zonpreDir;

        return $this;
    }

    public function getPriorDir(): ?string
    {
        return $this->priorDir;
    }

    public function setPriorDir(?string $priorDir): self
    {
        $this->priorDir = $priorDir;

        return $this;
    }

    public function getReDir(): ?string
    {
        return $this->reDir;
    }

    public function setReDir(?string $reDir): self
    {
        $this->reDir = $reDir;

        return $this;
    }

    public function getUsuDir(): ?int
    {
        return $this->usuDir;
    }

    public function setUsuDir(?int $usuDir): self
    {
        $this->usuDir = $usuDir;

        return $this;
    }

    public function getFeaDir(): ?\DateTimeInterface
    {
        return $this->feaDir;
    }

    public function setFeaDir(?\DateTimeInterface $feaDir): self
    {
        $this->feaDir = $feaDir;

        return $this;
    }

    public function getHoaDir(): ?\DateTimeInterface
    {
        return $this->hoaDir;
    }

    public function setHoaDir(?\DateTimeInterface $hoaDir): self
    {
        $this->hoaDir = $hoaDir;

        return $this;
    }

    public function getFelDir(): ?\DateTimeInterface
    {
        return $this->felDir;
    }

    public function setFelDir(?\DateTimeInterface $felDir): self
    {
        $this->felDir = $felDir;

        return $this;
    }

    public function getHolDir(): ?\DateTimeInterface
    {
        return $this->holDir;
    }

    public function setHolDir(?\DateTimeInterface $holDir): self
    {
        $this->holDir = $holDir;

        return $this;
    }

    public function getFentDir(): ?\DateTimeInterface
    {
        return $this->fentDir;
    }

    public function setFentDir(?\DateTimeInterface $fentDir): self
    {
        $this->fentDir = $fentDir;

        return $this;
    }

    public function getBloqueoDir(): ?bool
    {
        return $this->bloqueoDir;
    }

    public function setBloqueoDir(?bool $bloqueoDir): self
    {
        $this->bloqueoDir = $bloqueoDir;

        return $this;
    }

    public function getTtipDir(): ?string
    {
        return $this->ttipDir;
    }

    public function setTtipDir(?string $ttipDir): self
    {
        $this->ttipDir = $ttipDir;

        return $this;
    }

    public function getTelDir(): ?int
    {
        return $this->telDir;
    }

    public function setTelDir(?int $telDir): self
    {
        $this->telDir = $telDir;

        return $this;
    }

    public function getHormaxDir(): ?\DateTimeInterface
    {
        return $this->hormaxDir;
    }

    public function setHormaxDir(?\DateTimeInterface $hormaxDir): self
    {
        $this->hormaxDir = $hormaxDir;

        return $this;
    }

    public function getZonintDir(): ?string
    {
        return $this->zonintDir;
    }

    public function setZonintDir(?string $zonintDir): self
    {
        $this->zonintDir = $zonintDir;

        return $this;
    }

    public function getManifestarDir(): ?bool
    {
        return $this->manifestarDir;
    }

    public function setManifestarDir(?bool $manifestarDir): self
    {
        $this->manifestarDir = $manifestarDir;

        return $this;
    }

    public function getNacionalDir(): ?string
    {
        return $this->nacionalDir;
    }

    public function setNacionalDir(?string $nacionalDir): self
    {
        $this->nacionalDir = $nacionalDir;

        return $this;
    }

    public function getFecretDir(): ?\DateTimeInterface
    {
        return $this->fecretDir;
    }

    public function setFecretDir(?\DateTimeInterface $fecretDir): self
    {
        $this->fecretDir = $fecretDir;

        return $this;
    }

    public function getIvaDir(): ?float
    {
        return $this->ivaDir;
    }

    public function setIvaDir(?float $ivaDir): self
    {
        $this->ivaDir = $ivaDir;

        return $this;
    }

    public function getFaltaDir(): ?bool
    {
        return $this->faltaDir;
    }

    public function setFaltaDir(?bool $faltaDir): self
    {
        $this->faltaDir = $faltaDir;

        return $this;
    }

    public function getSobraDir(): ?bool
    {
        return $this->sobraDir;
    }

    public function setSobraDir(?bool $sobraDir): self
    {
        $this->sobraDir = $sobraDir;

        return $this;
    }

    public function getMarcarepDir(): ?bool
    {
        return $this->marcarepDir;
    }

    public function setMarcarepDir(?bool $marcarepDir): self
    {
        $this->marcarepDir = $marcarepDir;

        return $this;
    }

    public function getIpuenteDir(): ?float
    {
        return $this->ipuenteDir;
    }

    public function setIpuenteDir(?float $ipuenteDir): self
    {
        $this->ipuenteDir = $ipuenteDir;

        return $this;
    }

    public function getIcomreeDir(): ?float
    {
        return $this->icomreeDir;
    }

    public function setIcomreeDir(?float $icomreeDir): self
    {
        $this->icomreeDir = $icomreeDir;

        return $this;
    }

    public function getIcomsegDir(): ?float
    {
        return $this->icomsegDir;
    }

    public function setIcomsegDir(?float $icomsegDir): self
    {
        $this->icomsegDir = $icomsegDir;

        return $this;
    }

    public function getObligaviaDir(): ?bool
    {
        return $this->obligaviaDir;
    }

    public function setObligaviaDir(?bool $obligaviaDir): self
    {
        $this->obligaviaDir = $obligaviaDir;

        return $this;
    }

    public function getGestionDir(): ?bool
    {
        return $this->gestionDir;
    }

    public function setGestionDir(?bool $gestionDir): self
    {
        $this->gestionDir = $gestionDir;

        return $this;
    }

    public function getConfentDir(): ?bool
    {
        return $this->confentDir;
    }

    public function setConfentDir(?bool $confentDir): self
    {
        $this->confentDir = $confentDir;

        return $this;
    }

    public function getAcurecDir(): ?bool
    {
        return $this->acurecDir;
    }

    public function setAcurecDir(?bool $acurecDir): self
    {
        $this->acurecDir = $acurecDir;

        return $this;
    }

    public function getAdelantoDir(): ?float
    {
        return $this->adelantoDir;
    }

    public function setAdelantoDir(?float $adelantoDir): self
    {
        $this->adelantoDir = $adelantoDir;

        return $this;
    }

    public function getIcomadeDir(): ?float
    {
        return $this->icomadeDir;
    }

    public function setIcomadeDir(?float $icomadeDir): self
    {
        $this->icomadeDir = $icomadeDir;

        return $this;
    }

    public function getOdadeDir(): ?string
    {
        return $this->odadeDir;
    }

    public function setOdadeDir(?string $odadeDir): self
    {
        $this->odadeDir = $odadeDir;

        return $this;
    }

    public function getRefretDir(): ?string
    {
        return $this->refretDir;
    }

    public function setRefretDir(?string $refretDir): self
    {
        $this->refretDir = $refretDir;

        return $this;
    }

    public function getTipretDir(): ?string
    {
        return $this->tipretDir;
    }

    public function setTipretDir(?string $tipretDir): self
    {
        $this->tipretDir = $tipretDir;

        return $this;
    }

    public function getOfiliqDir(): ?int
    {
        return $this->ofiliqDir;
    }

    public function setOfiliqDir(?int $ofiliqDir): self
    {
        $this->ofiliqDir = $ofiliqDir;

        return $this;
    }

    public function getCliliqDir(): ?int
    {
        return $this->cliliqDir;
    }

    public function setCliliqDir(?int $cliliqDir): self
    {
        $this->cliliqDir = $cliliqDir;

        return $this;
    }

    public function getOficialDir(): ?bool
    {
        return $this->oficialDir;
    }

    public function setOficialDir(?bool $oficialDir): self
    {
        $this->oficialDir = $oficialDir;

        return $this;
    }

    public function getCdppanDir(): ?int
    {
        return $this->cdppanDir;
    }

    public function setCdppanDir(?int $cdppanDir): self
    {
        $this->cdppanDir = $cdppanDir;

        return $this;
    }

    public function getTipsegDir(): ?string
    {
        return $this->tipsegDir;
    }

    public function setTipsegDir(?string $tipsegDir): self
    {
        $this->tipsegDir = $tipsegDir;

        return $this;
    }

    public function getTipduaDir(): ?string
    {
        return $this->tipduaDir;
    }

    public function setTipduaDir(?string $tipduaDir): self
    {
        $this->tipduaDir = $tipduaDir;

        return $this;
    }

    public function getFecintDir(): ?\DateTimeInterface
    {
        return $this->fecintDir;
    }

    public function setFecintDir(?\DateTimeInterface $fecintDir): self
    {
        $this->fecintDir = $fecintDir;

        return $this;
    }

    public function getFecacuDir(): ?\DateTimeInterface
    {
        return $this->fecacuDir;
    }

    public function setFecacuDir(?\DateTimeInterface $fecacuDir): self
    {
        $this->fecacuDir = $fecacuDir;

        return $this;
    }

    public function getAtespDir(): ?bool
    {
        return $this->atespDir;
    }

    public function setAtespDir(?bool $atespDir): self
    {
        $this->atespDir = $atespDir;

        return $this;
    }

    public function getLongitudDir(): ?float
    {
        return $this->longitudDir;
    }

    public function setLongitudDir(float $longitudDir): self
    {
        $this->longitudDir = $longitudDir;

        return $this;
    }

    public function getLatitudDir(): ?float
    {
        return $this->latitudDir;
    }

    public function setLatitudDir(float $latitudDir): self
    {
        $this->latitudDir = $latitudDir;

        return $this;
    }

    public function getCobroactaDir(): ?float
    {
        return $this->cobroactaDir;
    }

    public function setCobroactaDir(?float $cobroactaDir): self
    {
        $this->cobroactaDir = $cobroactaDir;

        return $this;
    }

    public function getIcomcacDir(): ?float
    {
        return $this->icomcacDir;
    }

    public function setIcomcacDir(?float $icomcacDir): self
    {
        $this->icomcacDir = $icomcacDir;

        return $this;
    }

    public function getOdccDir(): ?string
    {
        return $this->odccDir;
    }

    public function setOdccDir(?string $odccDir): self
    {
        $this->odccDir = $odccDir;

        return $this;
    }

    public function getTransmitidoDir(): ?bool
    {
        return $this->transmitidoDir;
    }

    public function setTransmitidoDir(?bool $transmitidoDir): self
    {
        $this->transmitidoDir = $transmitidoDir;

        return $this;
    }

    public function getAutkmDir(): ?bool
    {
        return $this->autkmDir;
    }

    public function setAutkmDir(bool $autkmDir): self
    {
        $this->autkmDir = $autkmDir;

        return $this;
    }

    public function getUsuasigDir(): ?int
    {
        return $this->usuasigDir;
    }

    public function setUsuasigDir(?int $usuasigDir): self
    {
        $this->usuasigDir = $usuasigDir;

        return $this;
    }


}
