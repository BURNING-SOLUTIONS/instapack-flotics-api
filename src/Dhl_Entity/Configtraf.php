<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configtraf
 *
 * @ORM\Table(name="configtraf")
 * @ORM\Entity
 */
class Configtraf
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cft", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCft;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cft", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Cft", type="smallint", nullable=true)
     */
    private $viaCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForAlb_Cft", type="string", length=20, nullable=true)
     */
    private $foralbCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bultos_Cft", type="smallint", nullable=true)
     */
    private $bultosCft;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Peso_Cft", type="float", precision=53, scale=0, nullable=true)
     */
    private $pesoCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Portes_Cft", type="string", length=1, nullable=true)
     */
    private $portesCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Cft", type="smallint", nullable=true)
     */
    private $dim1Cft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Cft", type="smallint", nullable=true)
     */
    private $dim2Cft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Cft", type="smallint", nullable=true)
     */
    private $dim3Cft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MotFur_Cft", type="string", length=1, nullable=true)
     */
    private $motfurCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Con_Cft", type="string", length=11, nullable=true)
     */
    private $conCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="Retorno_Cft", type="boolean", nullable=false)
     */
    private $retornoCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaveManif_Cft", type="string", length=10, nullable=true)
     */
    private $clavemanifCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Cft", type="string", length=2, nullable=true)
     */
    private $priorCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="AlbLocPre_Cft", type="boolean", nullable=false)
     */
    private $alblocpreCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="AlbNacPre_Cft", type="boolean", nullable=false)
     */
    private $albnacpreCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="EtiNacPre_Cft", type="boolean", nullable=false)
     */
    private $etinacpreCft;

    /**
     * @var string
     *
     * @ORM\Column(name="ForLLa_Cft", type="string", length=20, nullable=false)
     */
    private $forllaCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SerPant_Cft", type="string", length=1, nullable=true)
     */
    private $serpantCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Regenera_Cft", type="integer", nullable=true)
     */
    private $regeneraCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirHabit_Cft", type="string", length=1, nullable=true)
     */
    private $dirhabitCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PanDefec_Cft", type="smallint", nullable=true)
     */
    private $pandefecCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PaisDefec_Cft", type="string", length=25, nullable=true)
     */
    private $paisdefecCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobDefec_Cft", type="string", length=35, nullable=true)
     */
    private $pobdefecCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="GuiaDefec_Cft", type="string", length=5, nullable=true)
     */
    private $guiadefecCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="Referen_Cft", type="boolean", nullable=false)
     */
    private $referenCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="NumMulti_Cft", type="boolean", nullable=false)
     */
    private $nummultiCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumEmp_Cft", type="smallint", nullable=true)
     */
    private $numempCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Buscas_Cft", type="string", length=20, nullable=true)
     */
    private $buscasCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="ColorFondo_Cft", type="boolean", nullable=false)
     */
    private $colorfondoCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CFondo_Cft", type="integer", nullable=true)
     */
    private $cfondoCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Valora_Cft", type="string", length=1, nullable=true)
     */
    private $valoraCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirecLoc_Cft", type="string", length=15, nullable=true)
     */
    private $direclocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirecPrv_Cft", type="string", length=15, nullable=true)
     */
    private $direcprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirecNac_Cft", type="string", length=15, nullable=true)
     */
    private $direcnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirecInt_Cft", type="string", length=15, nullable=true)
     */
    private $direcintCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RecogPrv_Cft", type="string", length=15, nullable=true)
     */
    private $recogprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RecogNac_Cft", type="string", length=15, nullable=true)
     */
    private $recognacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RecogInt_Cft", type="string", length=15, nullable=true)
     */
    private $recogintCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmsLoc_Cft", type="string", length=15, nullable=true)
     */
    private $kmslocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmsPrv_Cft", type="string", length=15, nullable=true)
     */
    private $kmsprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmsNac_Cft", type="string", length=15, nullable=true)
     */
    private $kmsnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmsInt_Cft", type="string", length=15, nullable=true)
     */
    private $kmsintCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReexPrv_Cft", type="string", length=15, nullable=true)
     */
    private $reexprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ReexNac_Cft", type="string", length=15, nullable=true)
     */
    private $reexnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsPrv_Cft", type="string", length=15, nullable=true)
     */
    private $kgsprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsNac_Cft", type="string", length=15, nullable=true)
     */
    private $kgsnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsInt_Cft", type="string", length=15, nullable=true)
     */
    private $kgsintCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sabado_Cft", type="string", length=15, nullable=true)
     */
    private $sabadoCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BulPrv_Cft", type="string", length=15, nullable=true)
     */
    private $bulprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BulNac_Cft", type="string", length=15, nullable=true)
     */
    private $bulnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="BulInt_Cft", type="string", length=15, nullable=true)
     */
    private $bulintCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VolNac_Cft", type="string", length=15, nullable=true)
     */
    private $volnacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VolInt_Cft", type="string", length=15, nullable=true)
     */
    private $volintCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="DimPesoNac_Cft", type="boolean", nullable=false)
     */
    private $dimpesonacCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="DimPesoInt_Cft", type="boolean", nullable=false)
     */
    private $dimpesointCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="CalDeb_Cft", type="boolean", nullable=false)
     */
    private $caldebCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="Libremanual_Cft", type="boolean", nullable=false)
     */
    private $libremanualCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="ReexKg_Cft", type="boolean", nullable=false)
     */
    private $reexkgCft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HoraLlave_Cft", type="datetime", nullable=true)
     */
    private $horallaveCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="GrabaAnt_Cft", type="boolean", nullable=false)
     */
    private $grabaantCft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DemoFur_Cft", type="datetime", nullable=true)
     */
    private $demofurCft;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DemoMot_Cft", type="datetime", nullable=true)
     */
    private $demomotCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForLoc_Cft", type="string", length=20, nullable=true)
     */
    private $forlocCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefEti_Cft", type="smallint", nullable=true)
     */
    private $posrefetiCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefAlb_Cft", type="smallint", nullable=true)
     */
    private $posrefalbCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MaxLin_Cft", type="smallint", nullable=true)
     */
    private $maxlinCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ViaRep_Cft", type="integer", nullable=true)
     */
    private $viarepCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForNot_Cft", type="string", length=20, nullable=true)
     */
    private $fornotCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForCaj_Cft", type="string", length=20, nullable=true)
     */
    private $forcajCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForAnt_Cft", type="string", length=20, nullable=true)
     */
    private $forantCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForEtiNac_Cft", type="string", length=20, nullable=true)
     */
    private $foretinacCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="EtiTerPre_Cft", type="boolean", nullable=true)
     */
    private $etiterpreCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgRecoNac_Cft", type="string", length=15, nullable=true)
     */
    private $kgreconacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgRecoPrv_Cft", type="string", length=15, nullable=true)
     */
    private $kgrecoprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgRecoInt_Cft", type="string", length=15, nullable=true)
     */
    private $kgrecointCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmRecoNac_Cft", type="string", length=15, nullable=true)
     */
    private $kmreconacCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmRecoPrv_Cft", type="string", length=15, nullable=true)
     */
    private $kmrecoprvCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="kmRecoInt_Cft", type="string", length=15, nullable=true)
     */
    private $kmrecointCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosAlbEti_Cft", type="smallint", nullable=true)
     */
    private $posalbetiCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosAlbAlb_Cft", type="smallint", nullable=true)
     */
    private $posalbalbCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DemoCal_Cft", type="smallint", nullable=true)
     */
    private $democalCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RedondeoVol_Cft", type="string", length=1, nullable=true)
     */
    private $redondeovolCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RedondeoPes_Cft", type="string", length=1, nullable=true)
     */
    private $redondeopesCft;

    /**
     * @var bool
     *
     * @ORM\Column(name="BuscaRep_Cft", type="boolean", nullable=false)
     */
    private $buscarepCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Gestion_Cft", type="boolean", nullable=true)
     */
    private $gestionCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ConfEnt_Cft", type="boolean", nullable=true)
     */
    private $confentCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AcuRec_Cft", type="boolean", nullable=true)
     */
    private $acurecCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VConfEnt_Cft", type="string", length=15, nullable=true)
     */
    private $vconfentCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VGes_Cft", type="string", length=15, nullable=true)
     */
    private $vgesCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="VAcuRec_Cft", type="string", length=15, nullable=true)
     */
    private $vacurecCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsPrvDoc_Cft", type="string", length=15, nullable=true)
     */
    private $kgsprvdocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsNacDoc_Cft", type="string", length=15, nullable=true)
     */
    private $kgsnacdocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsIntDoc_Cft", type="string", length=15, nullable=true)
     */
    private $kgsintdocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmSab_Cft", type="string", length=15, nullable=true)
     */
    private $kmsabCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="VerTodoRep_Cft", type="boolean", nullable=true)
     */
    private $vertodorepCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Excesos_Cft", type="string", length=15, nullable=true)
     */
    private $excesosCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Oficial_Cft", type="string", length=15, nullable=true)
     */
    private $oficialCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RedondeoInt_Cft", type="string", length=1, nullable=true)
     */
    private $redondeointCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PideRef_Cft", type="smallint", nullable=true)
     */
    private $piderefCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AvisoOpen_Cft", type="boolean", nullable=true)
     */
    private $avisoopenCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Bascula_Cft", type="boolean", nullable=true)
     */
    private $basculaCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PuertoCom_Cft", type="smallint", nullable=true)
     */
    private $puertocomCft;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorSegOb_Cft", type="float", precision=53, scale=0, nullable=true)
     */
    private $porsegobCft;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MinSegOb_Cft", type="float", precision=53, scale=0, nullable=true)
     */
    private $minsegobCft;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MaxSegOb_Cft", type="float", precision=53, scale=0, nullable=true)
     */
    private $maxsegobCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Duas_Cft", type="string", length=15, nullable=true)
     */
    private $duasCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirMen_Cft", type="string", length=15, nullable=true)
     */
    private $dirmenCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsMen_Cft", type="string", length=15, nullable=true)
     */
    private $kgsmenCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KmMen_Cft", type="string", length=15, nullable=true)
     */
    private $kmmenCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsSab_Cft", type="string", length=15, nullable=true)
     */
    private $kgssabCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="KgsSabDoc_Cft", type="string", length=15, nullable=true)
     */
    private $kgssabdocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SupRec_Cft", type="string", length=15, nullable=true)
     */
    private $suprecCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="SupRecUniKg_Cft", type="boolean", nullable=true)
     */
    private $suprecunikgCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InterciudadUniKg_Cft", type="boolean", nullable=true)
     */
    private $interciudadunikgCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Interciudad_Cft", type="string", length=15, nullable=true)
     */
    private $interciudadCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Sms_Cft", type="string", length=15, nullable=true)
     */
    private $smsCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_Cft", type="string", length=15, nullable=true)
     */
    private $emailCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FranjaHor_Cft", type="string", length=15, nullable=true)
     */
    private $franjahorCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HorConcertado_Cft", type="string", length=15, nullable=true)
     */
    private $horconcertadoCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EntDni_Cft", type="string", length=15, nullable=true)
     */
    private $entdniCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DimPesoRep_Cft", type="boolean", nullable=true)
     */
    private $dimpesorepCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RetLoc_Cft", type="string", length=15, nullable=true)
     */
    private $retlocCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="SoloTipoAutNac_Cft", type="boolean", nullable=true)
     */
    private $solotipoautnacCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="SoloTipoAutLoc_Cft", type="boolean", nullable=true)
     */
    private $solotipoautlocCft;

    /**
     * @var string|null
     *
     * @ORM\Column(name="HorPresta_Cft", type="string", length=15, nullable=true)
     */
    private $horprestaCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosBulEti_Cft", type="smallint", nullable=true)
     */
    private $posbuletiCft;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosBulAlb_Cft", type="smallint", nullable=true)
     */
    private $posbulalbCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PedirFecAsi_Cft", type="boolean", nullable=true)
     */
    private $pedirfecasiCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PedirFecAsiRep_Cft", type="boolean", nullable=true)
     */
    private $pedirfecasirepCft;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="OmitirLinea1_Cft", type="boolean", nullable=true)
     */
    private $omitirlinea1Cft;

    public function getSucursalCft(): ?int
    {
        return $this->sucursalCft;
    }

    public function getEmpCft(): ?int
    {
        return $this->empCft;
    }

    public function getViaCft(): ?int
    {
        return $this->viaCft;
    }

    public function setViaCft(?int $viaCft): self
    {
        $this->viaCft = $viaCft;

        return $this;
    }

    public function getForalbCft(): ?string
    {
        return $this->foralbCft;
    }

    public function setForalbCft(?string $foralbCft): self
    {
        $this->foralbCft = $foralbCft;

        return $this;
    }

    public function getBultosCft(): ?int
    {
        return $this->bultosCft;
    }

    public function setBultosCft(?int $bultosCft): self
    {
        $this->bultosCft = $bultosCft;

        return $this;
    }

    public function getPesoCft(): ?float
    {
        return $this->pesoCft;
    }

    public function setPesoCft(?float $pesoCft): self
    {
        $this->pesoCft = $pesoCft;

        return $this;
    }

    public function getPortesCft(): ?string
    {
        return $this->portesCft;
    }

    public function setPortesCft(?string $portesCft): self
    {
        $this->portesCft = $portesCft;

        return $this;
    }

    public function getDim1Cft(): ?int
    {
        return $this->dim1Cft;
    }

    public function setDim1Cft(?int $dim1Cft): self
    {
        $this->dim1Cft = $dim1Cft;

        return $this;
    }

    public function getDim2Cft(): ?int
    {
        return $this->dim2Cft;
    }

    public function setDim2Cft(?int $dim2Cft): self
    {
        $this->dim2Cft = $dim2Cft;

        return $this;
    }

    public function getDim3Cft(): ?int
    {
        return $this->dim3Cft;
    }

    public function setDim3Cft(?int $dim3Cft): self
    {
        $this->dim3Cft = $dim3Cft;

        return $this;
    }

    public function getMotfurCft(): ?string
    {
        return $this->motfurCft;
    }

    public function setMotfurCft(?string $motfurCft): self
    {
        $this->motfurCft = $motfurCft;

        return $this;
    }

    public function getConCft(): ?string
    {
        return $this->conCft;
    }

    public function setConCft(?string $conCft): self
    {
        $this->conCft = $conCft;

        return $this;
    }

    public function getRetornoCft(): ?bool
    {
        return $this->retornoCft;
    }

    public function setRetornoCft(bool $retornoCft): self
    {
        $this->retornoCft = $retornoCft;

        return $this;
    }

    public function getClavemanifCft(): ?string
    {
        return $this->clavemanifCft;
    }

    public function setClavemanifCft(?string $clavemanifCft): self
    {
        $this->clavemanifCft = $clavemanifCft;

        return $this;
    }

    public function getPriorCft(): ?string
    {
        return $this->priorCft;
    }

    public function setPriorCft(?string $priorCft): self
    {
        $this->priorCft = $priorCft;

        return $this;
    }

    public function getAlblocpreCft(): ?bool
    {
        return $this->alblocpreCft;
    }

    public function setAlblocpreCft(bool $alblocpreCft): self
    {
        $this->alblocpreCft = $alblocpreCft;

        return $this;
    }

    public function getAlbnacpreCft(): ?bool
    {
        return $this->albnacpreCft;
    }

    public function setAlbnacpreCft(bool $albnacpreCft): self
    {
        $this->albnacpreCft = $albnacpreCft;

        return $this;
    }

    public function getEtinacpreCft(): ?bool
    {
        return $this->etinacpreCft;
    }

    public function setEtinacpreCft(bool $etinacpreCft): self
    {
        $this->etinacpreCft = $etinacpreCft;

        return $this;
    }

    public function getForllaCft(): ?string
    {
        return $this->forllaCft;
    }

    public function setForllaCft(string $forllaCft): self
    {
        $this->forllaCft = $forllaCft;

        return $this;
    }

    public function getSerpantCft(): ?string
    {
        return $this->serpantCft;
    }

    public function setSerpantCft(?string $serpantCft): self
    {
        $this->serpantCft = $serpantCft;

        return $this;
    }

    public function getRegeneraCft(): ?int
    {
        return $this->regeneraCft;
    }

    public function setRegeneraCft(?int $regeneraCft): self
    {
        $this->regeneraCft = $regeneraCft;

        return $this;
    }

    public function getDirhabitCft(): ?string
    {
        return $this->dirhabitCft;
    }

    public function setDirhabitCft(?string $dirhabitCft): self
    {
        $this->dirhabitCft = $dirhabitCft;

        return $this;
    }

    public function getPandefecCft(): ?int
    {
        return $this->pandefecCft;
    }

    public function setPandefecCft(?int $pandefecCft): self
    {
        $this->pandefecCft = $pandefecCft;

        return $this;
    }

    public function getPaisdefecCft(): ?string
    {
        return $this->paisdefecCft;
    }

    public function setPaisdefecCft(?string $paisdefecCft): self
    {
        $this->paisdefecCft = $paisdefecCft;

        return $this;
    }

    public function getPobdefecCft(): ?string
    {
        return $this->pobdefecCft;
    }

    public function setPobdefecCft(?string $pobdefecCft): self
    {
        $this->pobdefecCft = $pobdefecCft;

        return $this;
    }

    public function getGuiadefecCft(): ?string
    {
        return $this->guiadefecCft;
    }

    public function setGuiadefecCft(?string $guiadefecCft): self
    {
        $this->guiadefecCft = $guiadefecCft;

        return $this;
    }

    public function getReferenCft(): ?bool
    {
        return $this->referenCft;
    }

    public function setReferenCft(bool $referenCft): self
    {
        $this->referenCft = $referenCft;

        return $this;
    }

    public function getNummultiCft(): ?bool
    {
        return $this->nummultiCft;
    }

    public function setNummultiCft(bool $nummultiCft): self
    {
        $this->nummultiCft = $nummultiCft;

        return $this;
    }

    public function getNumempCft(): ?int
    {
        return $this->numempCft;
    }

    public function setNumempCft(?int $numempCft): self
    {
        $this->numempCft = $numempCft;

        return $this;
    }

    public function getBuscasCft(): ?string
    {
        return $this->buscasCft;
    }

    public function setBuscasCft(?string $buscasCft): self
    {
        $this->buscasCft = $buscasCft;

        return $this;
    }

    public function getColorfondoCft(): ?bool
    {
        return $this->colorfondoCft;
    }

    public function setColorfondoCft(bool $colorfondoCft): self
    {
        $this->colorfondoCft = $colorfondoCft;

        return $this;
    }

    public function getCfondoCft(): ?int
    {
        return $this->cfondoCft;
    }

    public function setCfondoCft(?int $cfondoCft): self
    {
        $this->cfondoCft = $cfondoCft;

        return $this;
    }

    public function getValoraCft(): ?string
    {
        return $this->valoraCft;
    }

    public function setValoraCft(?string $valoraCft): self
    {
        $this->valoraCft = $valoraCft;

        return $this;
    }

    public function getDireclocCft(): ?string
    {
        return $this->direclocCft;
    }

    public function setDireclocCft(?string $direclocCft): self
    {
        $this->direclocCft = $direclocCft;

        return $this;
    }

    public function getDirecprvCft(): ?string
    {
        return $this->direcprvCft;
    }

    public function setDirecprvCft(?string $direcprvCft): self
    {
        $this->direcprvCft = $direcprvCft;

        return $this;
    }

    public function getDirecnacCft(): ?string
    {
        return $this->direcnacCft;
    }

    public function setDirecnacCft(?string $direcnacCft): self
    {
        $this->direcnacCft = $direcnacCft;

        return $this;
    }

    public function getDirecintCft(): ?string
    {
        return $this->direcintCft;
    }

    public function setDirecintCft(?string $direcintCft): self
    {
        $this->direcintCft = $direcintCft;

        return $this;
    }

    public function getRecogprvCft(): ?string
    {
        return $this->recogprvCft;
    }

    public function setRecogprvCft(?string $recogprvCft): self
    {
        $this->recogprvCft = $recogprvCft;

        return $this;
    }

    public function getRecognacCft(): ?string
    {
        return $this->recognacCft;
    }

    public function setRecognacCft(?string $recognacCft): self
    {
        $this->recognacCft = $recognacCft;

        return $this;
    }

    public function getRecogintCft(): ?string
    {
        return $this->recogintCft;
    }

    public function setRecogintCft(?string $recogintCft): self
    {
        $this->recogintCft = $recogintCft;

        return $this;
    }

    public function getKmslocCft(): ?string
    {
        return $this->kmslocCft;
    }

    public function setKmslocCft(?string $kmslocCft): self
    {
        $this->kmslocCft = $kmslocCft;

        return $this;
    }

    public function getKmsprvCft(): ?string
    {
        return $this->kmsprvCft;
    }

    public function setKmsprvCft(?string $kmsprvCft): self
    {
        $this->kmsprvCft = $kmsprvCft;

        return $this;
    }

    public function getKmsnacCft(): ?string
    {
        return $this->kmsnacCft;
    }

    public function setKmsnacCft(?string $kmsnacCft): self
    {
        $this->kmsnacCft = $kmsnacCft;

        return $this;
    }

    public function getKmsintCft(): ?string
    {
        return $this->kmsintCft;
    }

    public function setKmsintCft(?string $kmsintCft): self
    {
        $this->kmsintCft = $kmsintCft;

        return $this;
    }

    public function getReexprvCft(): ?string
    {
        return $this->reexprvCft;
    }

    public function setReexprvCft(?string $reexprvCft): self
    {
        $this->reexprvCft = $reexprvCft;

        return $this;
    }

    public function getReexnacCft(): ?string
    {
        return $this->reexnacCft;
    }

    public function setReexnacCft(?string $reexnacCft): self
    {
        $this->reexnacCft = $reexnacCft;

        return $this;
    }

    public function getKgsprvCft(): ?string
    {
        return $this->kgsprvCft;
    }

    public function setKgsprvCft(?string $kgsprvCft): self
    {
        $this->kgsprvCft = $kgsprvCft;

        return $this;
    }

    public function getKgsnacCft(): ?string
    {
        return $this->kgsnacCft;
    }

    public function setKgsnacCft(?string $kgsnacCft): self
    {
        $this->kgsnacCft = $kgsnacCft;

        return $this;
    }

    public function getKgsintCft(): ?string
    {
        return $this->kgsintCft;
    }

    public function setKgsintCft(?string $kgsintCft): self
    {
        $this->kgsintCft = $kgsintCft;

        return $this;
    }

    public function getSabadoCft(): ?string
    {
        return $this->sabadoCft;
    }

    public function setSabadoCft(?string $sabadoCft): self
    {
        $this->sabadoCft = $sabadoCft;

        return $this;
    }

    public function getBulprvCft(): ?string
    {
        return $this->bulprvCft;
    }

    public function setBulprvCft(?string $bulprvCft): self
    {
        $this->bulprvCft = $bulprvCft;

        return $this;
    }

    public function getBulnacCft(): ?string
    {
        return $this->bulnacCft;
    }

    public function setBulnacCft(?string $bulnacCft): self
    {
        $this->bulnacCft = $bulnacCft;

        return $this;
    }

    public function getBulintCft(): ?string
    {
        return $this->bulintCft;
    }

    public function setBulintCft(?string $bulintCft): self
    {
        $this->bulintCft = $bulintCft;

        return $this;
    }

    public function getVolnacCft(): ?string
    {
        return $this->volnacCft;
    }

    public function setVolnacCft(?string $volnacCft): self
    {
        $this->volnacCft = $volnacCft;

        return $this;
    }

    public function getVolintCft(): ?string
    {
        return $this->volintCft;
    }

    public function setVolintCft(?string $volintCft): self
    {
        $this->volintCft = $volintCft;

        return $this;
    }

    public function getDimpesonacCft(): ?bool
    {
        return $this->dimpesonacCft;
    }

    public function setDimpesonacCft(bool $dimpesonacCft): self
    {
        $this->dimpesonacCft = $dimpesonacCft;

        return $this;
    }

    public function getDimpesointCft(): ?bool
    {
        return $this->dimpesointCft;
    }

    public function setDimpesointCft(bool $dimpesointCft): self
    {
        $this->dimpesointCft = $dimpesointCft;

        return $this;
    }

    public function getCaldebCft(): ?bool
    {
        return $this->caldebCft;
    }

    public function setCaldebCft(bool $caldebCft): self
    {
        $this->caldebCft = $caldebCft;

        return $this;
    }

    public function getLibremanualCft(): ?bool
    {
        return $this->libremanualCft;
    }

    public function setLibremanualCft(bool $libremanualCft): self
    {
        $this->libremanualCft = $libremanualCft;

        return $this;
    }

    public function getReexkgCft(): ?bool
    {
        return $this->reexkgCft;
    }

    public function setReexkgCft(bool $reexkgCft): self
    {
        $this->reexkgCft = $reexkgCft;

        return $this;
    }

    public function getHorallaveCft(): ?\DateTimeInterface
    {
        return $this->horallaveCft;
    }

    public function setHorallaveCft(?\DateTimeInterface $horallaveCft): self
    {
        $this->horallaveCft = $horallaveCft;

        return $this;
    }

    public function getGrabaantCft(): ?bool
    {
        return $this->grabaantCft;
    }

    public function setGrabaantCft(bool $grabaantCft): self
    {
        $this->grabaantCft = $grabaantCft;

        return $this;
    }

    public function getDemofurCft(): ?\DateTimeInterface
    {
        return $this->demofurCft;
    }

    public function setDemofurCft(?\DateTimeInterface $demofurCft): self
    {
        $this->demofurCft = $demofurCft;

        return $this;
    }

    public function getDemomotCft(): ?\DateTimeInterface
    {
        return $this->demomotCft;
    }

    public function setDemomotCft(?\DateTimeInterface $demomotCft): self
    {
        $this->demomotCft = $demomotCft;

        return $this;
    }

    public function getForlocCft(): ?string
    {
        return $this->forlocCft;
    }

    public function setForlocCft(?string $forlocCft): self
    {
        $this->forlocCft = $forlocCft;

        return $this;
    }

    public function getPosrefetiCft(): ?int
    {
        return $this->posrefetiCft;
    }

    public function setPosrefetiCft(?int $posrefetiCft): self
    {
        $this->posrefetiCft = $posrefetiCft;

        return $this;
    }

    public function getPosrefalbCft(): ?int
    {
        return $this->posrefalbCft;
    }

    public function setPosrefalbCft(?int $posrefalbCft): self
    {
        $this->posrefalbCft = $posrefalbCft;

        return $this;
    }

    public function getMaxlinCft(): ?int
    {
        return $this->maxlinCft;
    }

    public function setMaxlinCft(?int $maxlinCft): self
    {
        $this->maxlinCft = $maxlinCft;

        return $this;
    }

    public function getViarepCft(): ?int
    {
        return $this->viarepCft;
    }

    public function setViarepCft(?int $viarepCft): self
    {
        $this->viarepCft = $viarepCft;

        return $this;
    }

    public function getFornotCft(): ?string
    {
        return $this->fornotCft;
    }

    public function setFornotCft(?string $fornotCft): self
    {
        $this->fornotCft = $fornotCft;

        return $this;
    }

    public function getForcajCft(): ?string
    {
        return $this->forcajCft;
    }

    public function setForcajCft(?string $forcajCft): self
    {
        $this->forcajCft = $forcajCft;

        return $this;
    }

    public function getForantCft(): ?string
    {
        return $this->forantCft;
    }

    public function setForantCft(?string $forantCft): self
    {
        $this->forantCft = $forantCft;

        return $this;
    }

    public function getForetinacCft(): ?string
    {
        return $this->foretinacCft;
    }

    public function setForetinacCft(?string $foretinacCft): self
    {
        $this->foretinacCft = $foretinacCft;

        return $this;
    }

    public function getEtiterpreCft(): ?bool
    {
        return $this->etiterpreCft;
    }

    public function setEtiterpreCft(?bool $etiterpreCft): self
    {
        $this->etiterpreCft = $etiterpreCft;

        return $this;
    }

    public function getKgreconacCft(): ?string
    {
        return $this->kgreconacCft;
    }

    public function setKgreconacCft(?string $kgreconacCft): self
    {
        $this->kgreconacCft = $kgreconacCft;

        return $this;
    }

    public function getKgrecoprvCft(): ?string
    {
        return $this->kgrecoprvCft;
    }

    public function setKgrecoprvCft(?string $kgrecoprvCft): self
    {
        $this->kgrecoprvCft = $kgrecoprvCft;

        return $this;
    }

    public function getKgrecointCft(): ?string
    {
        return $this->kgrecointCft;
    }

    public function setKgrecointCft(?string $kgrecointCft): self
    {
        $this->kgrecointCft = $kgrecointCft;

        return $this;
    }

    public function getKmreconacCft(): ?string
    {
        return $this->kmreconacCft;
    }

    public function setKmreconacCft(?string $kmreconacCft): self
    {
        $this->kmreconacCft = $kmreconacCft;

        return $this;
    }

    public function getKmrecoprvCft(): ?string
    {
        return $this->kmrecoprvCft;
    }

    public function setKmrecoprvCft(?string $kmrecoprvCft): self
    {
        $this->kmrecoprvCft = $kmrecoprvCft;

        return $this;
    }

    public function getKmrecointCft(): ?string
    {
        return $this->kmrecointCft;
    }

    public function setKmrecointCft(?string $kmrecointCft): self
    {
        $this->kmrecointCft = $kmrecointCft;

        return $this;
    }

    public function getPosalbetiCft(): ?int
    {
        return $this->posalbetiCft;
    }

    public function setPosalbetiCft(?int $posalbetiCft): self
    {
        $this->posalbetiCft = $posalbetiCft;

        return $this;
    }

    public function getPosalbalbCft(): ?int
    {
        return $this->posalbalbCft;
    }

    public function setPosalbalbCft(?int $posalbalbCft): self
    {
        $this->posalbalbCft = $posalbalbCft;

        return $this;
    }

    public function getDemocalCft(): ?int
    {
        return $this->democalCft;
    }

    public function setDemocalCft(?int $democalCft): self
    {
        $this->democalCft = $democalCft;

        return $this;
    }

    public function getRedondeovolCft(): ?string
    {
        return $this->redondeovolCft;
    }

    public function setRedondeovolCft(?string $redondeovolCft): self
    {
        $this->redondeovolCft = $redondeovolCft;

        return $this;
    }

    public function getRedondeopesCft(): ?string
    {
        return $this->redondeopesCft;
    }

    public function setRedondeopesCft(?string $redondeopesCft): self
    {
        $this->redondeopesCft = $redondeopesCft;

        return $this;
    }

    public function getBuscarepCft(): ?bool
    {
        return $this->buscarepCft;
    }

    public function setBuscarepCft(bool $buscarepCft): self
    {
        $this->buscarepCft = $buscarepCft;

        return $this;
    }

    public function getGestionCft(): ?bool
    {
        return $this->gestionCft;
    }

    public function setGestionCft(?bool $gestionCft): self
    {
        $this->gestionCft = $gestionCft;

        return $this;
    }

    public function getConfentCft(): ?bool
    {
        return $this->confentCft;
    }

    public function setConfentCft(?bool $confentCft): self
    {
        $this->confentCft = $confentCft;

        return $this;
    }

    public function getAcurecCft(): ?bool
    {
        return $this->acurecCft;
    }

    public function setAcurecCft(?bool $acurecCft): self
    {
        $this->acurecCft = $acurecCft;

        return $this;
    }

    public function getVconfentCft(): ?string
    {
        return $this->vconfentCft;
    }

    public function setVconfentCft(?string $vconfentCft): self
    {
        $this->vconfentCft = $vconfentCft;

        return $this;
    }

    public function getVgesCft(): ?string
    {
        return $this->vgesCft;
    }

    public function setVgesCft(?string $vgesCft): self
    {
        $this->vgesCft = $vgesCft;

        return $this;
    }

    public function getVacurecCft(): ?string
    {
        return $this->vacurecCft;
    }

    public function setVacurecCft(?string $vacurecCft): self
    {
        $this->vacurecCft = $vacurecCft;

        return $this;
    }

    public function getKgsprvdocCft(): ?string
    {
        return $this->kgsprvdocCft;
    }

    public function setKgsprvdocCft(?string $kgsprvdocCft): self
    {
        $this->kgsprvdocCft = $kgsprvdocCft;

        return $this;
    }

    public function getKgsnacdocCft(): ?string
    {
        return $this->kgsnacdocCft;
    }

    public function setKgsnacdocCft(?string $kgsnacdocCft): self
    {
        $this->kgsnacdocCft = $kgsnacdocCft;

        return $this;
    }

    public function getKgsintdocCft(): ?string
    {
        return $this->kgsintdocCft;
    }

    public function setKgsintdocCft(?string $kgsintdocCft): self
    {
        $this->kgsintdocCft = $kgsintdocCft;

        return $this;
    }

    public function getKmsabCft(): ?string
    {
        return $this->kmsabCft;
    }

    public function setKmsabCft(?string $kmsabCft): self
    {
        $this->kmsabCft = $kmsabCft;

        return $this;
    }

    public function getVertodorepCft(): ?bool
    {
        return $this->vertodorepCft;
    }

    public function setVertodorepCft(?bool $vertodorepCft): self
    {
        $this->vertodorepCft = $vertodorepCft;

        return $this;
    }

    public function getExcesosCft(): ?string
    {
        return $this->excesosCft;
    }

    public function setExcesosCft(?string $excesosCft): self
    {
        $this->excesosCft = $excesosCft;

        return $this;
    }

    public function getOficialCft(): ?string
    {
        return $this->oficialCft;
    }

    public function setOficialCft(?string $oficialCft): self
    {
        $this->oficialCft = $oficialCft;

        return $this;
    }

    public function getRedondeointCft(): ?string
    {
        return $this->redondeointCft;
    }

    public function setRedondeointCft(?string $redondeointCft): self
    {
        $this->redondeointCft = $redondeointCft;

        return $this;
    }

    public function getPiderefCft(): ?int
    {
        return $this->piderefCft;
    }

    public function setPiderefCft(?int $piderefCft): self
    {
        $this->piderefCft = $piderefCft;

        return $this;
    }

    public function getAvisoopenCft(): ?bool
    {
        return $this->avisoopenCft;
    }

    public function setAvisoopenCft(?bool $avisoopenCft): self
    {
        $this->avisoopenCft = $avisoopenCft;

        return $this;
    }

    public function getBasculaCft(): ?bool
    {
        return $this->basculaCft;
    }

    public function setBasculaCft(?bool $basculaCft): self
    {
        $this->basculaCft = $basculaCft;

        return $this;
    }

    public function getPuertocomCft(): ?int
    {
        return $this->puertocomCft;
    }

    public function setPuertocomCft(?int $puertocomCft): self
    {
        $this->puertocomCft = $puertocomCft;

        return $this;
    }

    public function getPorsegobCft(): ?float
    {
        return $this->porsegobCft;
    }

    public function setPorsegobCft(?float $porsegobCft): self
    {
        $this->porsegobCft = $porsegobCft;

        return $this;
    }

    public function getMinsegobCft(): ?float
    {
        return $this->minsegobCft;
    }

    public function setMinsegobCft(?float $minsegobCft): self
    {
        $this->minsegobCft = $minsegobCft;

        return $this;
    }

    public function getMaxsegobCft(): ?float
    {
        return $this->maxsegobCft;
    }

    public function setMaxsegobCft(?float $maxsegobCft): self
    {
        $this->maxsegobCft = $maxsegobCft;

        return $this;
    }

    public function getDuasCft(): ?string
    {
        return $this->duasCft;
    }

    public function setDuasCft(?string $duasCft): self
    {
        $this->duasCft = $duasCft;

        return $this;
    }

    public function getDirmenCft(): ?string
    {
        return $this->dirmenCft;
    }

    public function setDirmenCft(?string $dirmenCft): self
    {
        $this->dirmenCft = $dirmenCft;

        return $this;
    }

    public function getKgsmenCft(): ?string
    {
        return $this->kgsmenCft;
    }

    public function setKgsmenCft(?string $kgsmenCft): self
    {
        $this->kgsmenCft = $kgsmenCft;

        return $this;
    }

    public function getKmmenCft(): ?string
    {
        return $this->kmmenCft;
    }

    public function setKmmenCft(?string $kmmenCft): self
    {
        $this->kmmenCft = $kmmenCft;

        return $this;
    }

    public function getKgssabCft(): ?string
    {
        return $this->kgssabCft;
    }

    public function setKgssabCft(?string $kgssabCft): self
    {
        $this->kgssabCft = $kgssabCft;

        return $this;
    }

    public function getKgssabdocCft(): ?string
    {
        return $this->kgssabdocCft;
    }

    public function setKgssabdocCft(?string $kgssabdocCft): self
    {
        $this->kgssabdocCft = $kgssabdocCft;

        return $this;
    }

    public function getSuprecCft(): ?string
    {
        return $this->suprecCft;
    }

    public function setSuprecCft(?string $suprecCft): self
    {
        $this->suprecCft = $suprecCft;

        return $this;
    }

    public function getSuprecunikgCft(): ?bool
    {
        return $this->suprecunikgCft;
    }

    public function setSuprecunikgCft(?bool $suprecunikgCft): self
    {
        $this->suprecunikgCft = $suprecunikgCft;

        return $this;
    }

    public function getInterciudadunikgCft(): ?bool
    {
        return $this->interciudadunikgCft;
    }

    public function setInterciudadunikgCft(?bool $interciudadunikgCft): self
    {
        $this->interciudadunikgCft = $interciudadunikgCft;

        return $this;
    }

    public function getInterciudadCft(): ?string
    {
        return $this->interciudadCft;
    }

    public function setInterciudadCft(?string $interciudadCft): self
    {
        $this->interciudadCft = $interciudadCft;

        return $this;
    }

    public function getSmsCft(): ?string
    {
        return $this->smsCft;
    }

    public function setSmsCft(?string $smsCft): self
    {
        $this->smsCft = $smsCft;

        return $this;
    }

    public function getEmailCft(): ?string
    {
        return $this->emailCft;
    }

    public function setEmailCft(?string $emailCft): self
    {
        $this->emailCft = $emailCft;

        return $this;
    }

    public function getFranjahorCft(): ?string
    {
        return $this->franjahorCft;
    }

    public function setFranjahorCft(?string $franjahorCft): self
    {
        $this->franjahorCft = $franjahorCft;

        return $this;
    }

    public function getHorconcertadoCft(): ?string
    {
        return $this->horconcertadoCft;
    }

    public function setHorconcertadoCft(?string $horconcertadoCft): self
    {
        $this->horconcertadoCft = $horconcertadoCft;

        return $this;
    }

    public function getEntdniCft(): ?string
    {
        return $this->entdniCft;
    }

    public function setEntdniCft(?string $entdniCft): self
    {
        $this->entdniCft = $entdniCft;

        return $this;
    }

    public function getDimpesorepCft(): ?bool
    {
        return $this->dimpesorepCft;
    }

    public function setDimpesorepCft(?bool $dimpesorepCft): self
    {
        $this->dimpesorepCft = $dimpesorepCft;

        return $this;
    }

    public function getRetlocCft(): ?string
    {
        return $this->retlocCft;
    }

    public function setRetlocCft(?string $retlocCft): self
    {
        $this->retlocCft = $retlocCft;

        return $this;
    }

    public function getSolotipoautnacCft(): ?bool
    {
        return $this->solotipoautnacCft;
    }

    public function setSolotipoautnacCft(?bool $solotipoautnacCft): self
    {
        $this->solotipoautnacCft = $solotipoautnacCft;

        return $this;
    }

    public function getSolotipoautlocCft(): ?bool
    {
        return $this->solotipoautlocCft;
    }

    public function setSolotipoautlocCft(?bool $solotipoautlocCft): self
    {
        $this->solotipoautlocCft = $solotipoautlocCft;

        return $this;
    }

    public function getHorprestaCft(): ?string
    {
        return $this->horprestaCft;
    }

    public function setHorprestaCft(?string $horprestaCft): self
    {
        $this->horprestaCft = $horprestaCft;

        return $this;
    }

    public function getPosbuletiCft(): ?int
    {
        return $this->posbuletiCft;
    }

    public function setPosbuletiCft(?int $posbuletiCft): self
    {
        $this->posbuletiCft = $posbuletiCft;

        return $this;
    }

    public function getPosbulalbCft(): ?int
    {
        return $this->posbulalbCft;
    }

    public function setPosbulalbCft(?int $posbulalbCft): self
    {
        $this->posbulalbCft = $posbulalbCft;

        return $this;
    }

    public function getPedirfecasiCft(): ?bool
    {
        return $this->pedirfecasiCft;
    }

    public function setPedirfecasiCft(?bool $pedirfecasiCft): self
    {
        $this->pedirfecasiCft = $pedirfecasiCft;

        return $this;
    }

    public function getPedirfecasirepCft(): ?bool
    {
        return $this->pedirfecasirepCft;
    }

    public function setPedirfecasirepCft(?bool $pedirfecasirepCft): self
    {
        $this->pedirfecasirepCft = $pedirfecasirepCft;

        return $this;
    }

    public function getOmitirlinea1Cft(): ?bool
    {
        return $this->omitirlinea1Cft;
    }

    public function setOmitirlinea1Cft(?bool $omitirlinea1Cft): self
    {
        $this->omitirlinea1Cft = $omitirlinea1Cft;

        return $this;
    }


}
