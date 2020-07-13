<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use App\Controller\clientController;
use ApiPlatform\Core\Annotation\ApiFilter;
use App\Repository\ClientsRepository;
use App\Entity\Vehicle;

/**
 * Clientes
 * @ApiResource(
 *     collectionOperations={
 *         "get"={
 *             "method"="GET",
 *             "controller"=clientController::class
 *         }
 *     },
 *     itemOperations={"get"})
 * @ApiFilter(SearchFilter::class, properties={"codCli": "partial", "nomCli": "partial"})
 * @ORM\Table(name="clientes", indexes={@ORM\Index(name="clv2-Cli", columns={"Nom_Cli"}), @ORM\Index(name="clv3_cli", columns={"Cod_Cli", "Dep_Cli"})})
 * @ORM\Entity(repositoryClass="App\Repository\ClientsRepository")
 */
class Clientes
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Cli", type="boolean", nullable=false)
     */
    private $bajaCli = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCli = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cli", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCli = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Cli", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCli = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Cli", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Cli", type="string", length=40, nullable=true)
     */
    private $nomCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom2_Cli", type="string", length=40, nullable=true)
     */
    private $nom2Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Cli", type="string", length=50, nullable=true)
     */
    private $domCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndom_Cli", type="smallint", nullable=true)
     */
    private $ndomCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdom_Cli", type="string", length=3, nullable=true)
     */
    private $tdomCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdom_Cli", type="string", length=10, nullable=true)
     */
    private $pdomCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Cli", type="string", length=25, nullable=true)
     */
    private $paisCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Cli", type="string", length=35, nullable=true)
     */
    private $pobCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Cli", type="integer", nullable=true)
     */
    private $cdpCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Cli", type="integer", nullable=true)
     */
    private $telCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Te2_Cli", type="integer", nullable=true)
     */
    private $te2Cli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Te3_Cli", type="integer", nullable=true)
     */
    private $te3Cli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fax_Cli", type="integer", nullable=true)
     */
    private $faxCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Cli", type="string", length=14, nullable=true)
     */
    private $nifCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Cli", type="smallint", nullable=true)
     */
    private $fpaCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Vto_Cli", type="smallint", nullable=true)
     */
    private $vtoCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dia_Cli", type="smallint", nullable=true)
     */
    private $diaCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Di2_Cli", type="smallint", nullable=true)
     */
    private $di2Cli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Cli", type="smallint", nullable=true)
     */
    private $bcoCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Cli", type="smallint", nullable=true)
     */
    private $ageCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Cli", type="smallint", nullable=true)
     */
    private $dcCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Cli", type="string", length=10, nullable=true)
     */
    private $ctcCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Com_Cli", type="smallint", nullable=true)
     */
    private $comCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Des_Cli", type="smallint", nullable=true)
     */
    private $desCli = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Con_Cli", type="datetime", nullable=true)
     */
    private $conCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AñoRen_Cli", type="smallint", nullable=true)
     */
    private $a�orenCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MesRen_Cli", type="smallint", nullable=true)
     */
    private $mesrenCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="MesesRen_Cli", type="smallint", nullable=true)
     */
    private $mesesrenCli = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Tiva_Cli", type="boolean", nullable=true)
     */
    private $tivaCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Forfac_Cli", type="string", length=20, nullable=true)
     */
    private $forfacCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usuario_Cli", type="smallint", nullable=true)
     */
    private $usuarioCli = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cal_Cli", type="smallint", nullable=false)
     */
    private $calCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Gui_Cli", type="string", length=4, nullable=true)
     */
    private $guiCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zona_Cli", type="string", length=5, nullable=true)
     */
    private $zonaCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cop_Cli", type="smallint", nullable=true)
     */
    private $copCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Percon1_Cli", type="string", length=40, nullable=true)
     */
    private $percon1Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Percon2_Cli", type="string", length=40, nullable=true)
     */
    private $percon2Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Percon3_Cli", type="string", length=40, nullable=true)
     */
    private $percon3Cli;

    /**
     * @var bool
     *
     * @ORM\Column(name="Modem_Cli", type="boolean", nullable=false)
     */
    private $modemCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ab_Cli", type="string", length=1, nullable=true)
     */
    private $abCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Agrup_Cli", type="string", length=10, nullable=true)
     */
    private $agrupCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Lluvia_Cli", type="smallint", nullable=true)
     */
    private $lluviaCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Mesno_Cli", type="smallint", nullable=true)
     */
    private $mesnoCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tipcom_Cli", type="integer", nullable=true)
     */
    private $tipcomCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Porree_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porreeCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipree_Cli", type="string", length=1, nullable=true)
     */
    private $tipreeCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Reemin_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $reeminCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Reemax_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $reemaxCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Porseg_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porsegCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipseg_Cli", type="string", length=1, nullable=true)
     */
    private $tipsegCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Segmin_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $segminCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Segmax_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $segmaxCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorsegV_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porsegvCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipsegV_Cli", type="string", length=1, nullable=true)
     */
    private $tipsegvCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="SegminV_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $segminvCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="SegmaxV_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $segmaxvCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomFac_Cli", type="string", length=40, nullable=true)
     */
    private $nomfacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DomFac_Cli", type="string", length=50, nullable=true)
     */
    private $domfacCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NdomFac_Cli", type="smallint", nullable=true)
     */
    private $ndomfacCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TdomFac_Cli", type="string", length=3, nullable=true)
     */
    private $tdomfacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PdomFac_Cli", type="string", length=10, nullable=true)
     */
    private $pdomfacCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpFac_Cli", type="integer", nullable=true)
     */
    private $cdpfacCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PaisFac_Cli", type="string", length=25, nullable=true)
     */
    private $paisfacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobFac_Cli", type="string", length=35, nullable=true)
     */
    private $pobfacCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Rconc_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $rconcCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_Cli", type="string", length=60, nullable=true)
     */
    private $emailCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TelPer1_Cli", type="integer", nullable=true)
     */
    private $telper1Cli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="TelPer2_Cli", type="integer", nullable=true)
     */
    private $telper2Cli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="TelPer3_Cli", type="integer", nullable=true)
     */
    private $telper3Cli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cargo1_Cli", type="string", length=20, nullable=true)
     */
    private $cargo1Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cargo2_Cli", type="string", length=20, nullable=true)
     */
    private $cargo2Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cargo3_Cli", type="string", length=20, nullable=true)
     */
    private $cargo3Cli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AlbaFac_Cli", type="smallint", nullable=true)
     */
    private $albafacCli = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fuera_Cli", type="smallint", nullable=true)
     */
    private $fueraCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TarLoc_Cli", type="string", length=5, nullable=true)
     */
    private $tarlocCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TarPrv_Cli", type="string", length=5, nullable=true)
     */
    private $tarprvCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TarNac_Cli", type="string", length=5, nullable=true)
     */
    private $tarnacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TarInt_Cli", type="string", length=5, nullable=true)
     */
    private $tarintCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Bloqueo_Cli", type="boolean", nullable=true)
     */
    private $bloqueoCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="canal_cli", type="string", length=2, nullable=true)
     */
    private $canalCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="BloqueoNac_Cli", type="boolean", nullable=true)
     */
    private $bloqueonacCli = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Horario_Cli", type="string", length=50, nullable=true)
     */
    private $horarioCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorAde_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $poradeCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AdeMax_cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $ademaxCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AdeMin_cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $ademinCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="AdeExt_cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $adeextCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipAde_Cli", type="string", length=1, nullable=true)
     */
    private $tipadeCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NPoiDes_Cli", type="integer", nullable=true)
     */
    private $npoidesCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NPoiHas_Cli", type="integer", nullable=true)
     */
    private $npoihasCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="AutPoin_Cli", type="boolean", nullable=true)
     */
    private $autpoinCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMailPod_Cli", type="string", length=60, nullable=true)
     */
    private $emailpodCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMailFac_Cli", type="string", length=60, nullable=true)
     */
    private $emailfacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DomInter_Cli", type="string", length=50, nullable=true)
     */
    private $dominterCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PorRet_Cli", type="smallint", nullable=true)
     */
    private $porretCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VolVta_Cli", type="smallint", nullable=true)
     */
    private $volvtaCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Facturable_Cli", type="boolean", nullable=true)
     */
    private $facturableCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForNac_Cli", type="string", length=20, nullable=true)
     */
    private $fornacCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsFac1_Cli", type="string", length=60, nullable=true)
     */
    private $obsfac1Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsFac2_Cli", type="string", length=60, nullable=true)
     */
    private $obsfac2Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsFac3_Cli", type="string", length=60, nullable=true)
     */
    private $obsfac3Cli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsFac4_Cli", type="string", length=60, nullable=true)
     */
    private $obsfac4Cli;

    /**
     * @var float
     *
     * @ORM\Column(name="Longitud_Cli", type="float", precision=53, scale=0, nullable=false)
     */
    private $longitudCli = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Latitud_Cli", type="float", precision=53, scale=0, nullable=false)
     */
    private $latitudCli = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorCarbu_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porcarbuCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorCC_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porccCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipCC_Cli", type="string", length=1, nullable=true)
     */
    private $tipccCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CCmin_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $ccminCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="CCmax_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $ccmaxCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Transmitido_Cli", type="boolean", nullable=true)
     */
    private $transmitidoCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AvisoSms_Cli", type="integer", nullable=true)
     */
    private $avisosmsCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AvisoEMail_Cli", type="integer", nullable=true)
     */
    private $avisoemailCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MovilAviso_Cli", type="string", length=50, nullable=true)
     */
    private $movilavisoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMailAviso_Cli", type="string", length=150, nullable=true)
     */
    private $emailavisoCli;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorCarbuInt_Cli", type="float", precision=53, scale=0, nullable=true)
     */
    private $porcarbuintCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Cli", type="string", length=4, nullable=true)
     */
    private $ibanCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefManSepa_Cli", type="string", length=35, nullable=true)
     */
    private $refmansepaCli;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecManSepa_Cli", type="datetime", nullable=true)
     */
    private $fecmansepaCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipoAdeudo_Cli", type="string", length=5, nullable=true)
     */
    private $tipoadeudoCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OrGestFE_Cli", type="string", length=35, nullable=true)
     */
    private $orgestfeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UTramitFE_Cli", type="string", length=35, nullable=true)
     */
    private $utramitfeCli;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="EmisionFE_Cli", type="boolean", nullable=true)
     */
    private $emisionfeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OfContFE_Cli", type="string", length=35, nullable=true)
     */
    private $ofcontfeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EmailEfa_Cli", type="string", length=60, nullable=true)
     */
    private $emailefaCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EmailRee_Cli", type="string", length=60, nullable=true)
     */
    private $emailreeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EmailFae_Cli", type="string", length=60, nullable=true)
     */
    private $emailfaeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ExpedienteFE_Cli", type="string", length=20, nullable=true)
     */
    private $expedientefeCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RefEmiFE_Cli", type="string", length=20, nullable=true)
     */
    private $refemifeCli;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ExenVol_Cli", type="integer", nullable=true)
     */
    private $exenvolCli;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PedidoFE_Cli", type="string", length=20, nullable=true)
     */
    private $pedidofeCli;

    public function getBajaCli(): ?bool
    {
        return $this->bajaCli;
    }

    public function setBajaCli(bool $bajaCli): self
    {
        $this->bajaCli = $bajaCli;

        return $this;
    }

    public function getSucursalCli(): ?int
    {
        return $this->sucursalCli;
    }

    public function getEmpCli(): ?int
    {
        return $this->empCli;
    }

    public function getCodCli(): ?int
    {
        return $this->codCli;
    }

    public function getDepCli(): ?string
    {
        return $this->depCli;
    }

    public function getNomCli(): ?string
    {
        return $this->nomCli;
    }

    public function setNomCli(?string $nomCli): self
    {
        $this->nomCli = $nomCli;

        return $this;
    }

    public function getNom2Cli(): ?string
    {
        return $this->nom2Cli;
    }

    public function setNom2Cli(?string $nom2Cli): self
    {
        $this->nom2Cli = $nom2Cli;

        return $this;
    }

    public function getDomCli(): ?string
    {
        return $this->domCli;
    }

    public function setDomCli(?string $domCli): self
    {
        $this->domCli = $domCli;

        return $this;
    }

    public function getNdomCli(): ?int
    {
        return $this->ndomCli;
    }

    public function setNdomCli(?int $ndomCli): self
    {
        $this->ndomCli = $ndomCli;

        return $this;
    }

    public function getTdomCli(): ?string
    {
        return $this->tdomCli;
    }

    public function setTdomCli(?string $tdomCli): self
    {
        $this->tdomCli = $tdomCli;

        return $this;
    }

    public function getPdomCli(): ?string
    {
        return $this->pdomCli;
    }

    public function setPdomCli(?string $pdomCli): self
    {
        $this->pdomCli = $pdomCli;

        return $this;
    }

    public function getPaisCli(): ?string
    {
        return $this->paisCli;
    }

    public function setPaisCli(?string $paisCli): self
    {
        $this->paisCli = $paisCli;

        return $this;
    }

    public function getPobCli(): ?string
    {
        return $this->pobCli;
    }

    public function setPobCli(?string $pobCli): self
    {
        $this->pobCli = $pobCli;

        return $this;
    }

    public function getCdpCli(): ?int
    {
        return $this->cdpCli;
    }

    public function setCdpCli(?int $cdpCli): self
    {
        $this->cdpCli = $cdpCli;

        return $this;
    }

    public function getTelCli(): ?int
    {
        return $this->telCli;
    }

    public function setTelCli(?int $telCli): self
    {
        $this->telCli = $telCli;

        return $this;
    }

    public function getTe2Cli(): ?int
    {
        return $this->te2Cli;
    }

    public function setTe2Cli(?int $te2Cli): self
    {
        $this->te2Cli = $te2Cli;

        return $this;
    }

    public function getTe3Cli(): ?int
    {
        return $this->te3Cli;
    }

    public function setTe3Cli(?int $te3Cli): self
    {
        $this->te3Cli = $te3Cli;

        return $this;
    }

    public function getFaxCli(): ?int
    {
        return $this->faxCli;
    }

    public function setFaxCli(?int $faxCli): self
    {
        $this->faxCli = $faxCli;

        return $this;
    }

    public function getNifCli(): ?string
    {
        return $this->nifCli;
    }

    public function setNifCli(?string $nifCli): self
    {
        $this->nifCli = $nifCli;

        return $this;
    }

    public function getFpaCli(): ?int
    {
        return $this->fpaCli;
    }

    public function setFpaCli(?int $fpaCli): self
    {
        $this->fpaCli = $fpaCli;

        return $this;
    }

    public function getVtoCli(): ?int
    {
        return $this->vtoCli;
    }

    public function setVtoCli(?int $vtoCli): self
    {
        $this->vtoCli = $vtoCli;

        return $this;
    }

    public function getDiaCli(): ?int
    {
        return $this->diaCli;
    }

    public function setDiaCli(?int $diaCli): self
    {
        $this->diaCli = $diaCli;

        return $this;
    }

    public function getDi2Cli(): ?int
    {
        return $this->di2Cli;
    }

    public function setDi2Cli(?int $di2Cli): self
    {
        $this->di2Cli = $di2Cli;

        return $this;
    }

    public function getBcoCli(): ?int
    {
        return $this->bcoCli;
    }

    public function setBcoCli(?int $bcoCli): self
    {
        $this->bcoCli = $bcoCli;

        return $this;
    }

    public function getAgeCli(): ?int
    {
        return $this->ageCli;
    }

    public function setAgeCli(?int $ageCli): self
    {
        $this->ageCli = $ageCli;

        return $this;
    }

    public function getDcCli(): ?int
    {
        return $this->dcCli;
    }

    public function setDcCli(?int $dcCli): self
    {
        $this->dcCli = $dcCli;

        return $this;
    }

    public function getCtaCli(): ?float
    {
        return $this->ctaCli;
    }

    public function setCtaCli(?float $ctaCli): self
    {
        $this->ctaCli = $ctaCli;

        return $this;
    }

    public function getCtcCli(): ?string
    {
        return $this->ctcCli;
    }

    public function setCtcCli(?string $ctcCli): self
    {
        $this->ctcCli = $ctcCli;

        return $this;
    }

    public function getComCli(): ?int
    {
        return $this->comCli;
    }

    public function setComCli(?int $comCli): self
    {
        $this->comCli = $comCli;

        return $this;
    }

    public function getDesCli(): ?int
    {
        return $this->desCli;
    }

    public function setDesCli(?int $desCli): self
    {
        $this->desCli = $desCli;

        return $this;
    }

    public function getConCli(): ?\DateTimeInterface
    {
        return $this->conCli;
    }

    public function setConCli(?\DateTimeInterface $conCli): self
    {
        $this->conCli = $conCli;

        return $this;
    }

    public function getA�orenCli(): ?int
    {
        return $this->a�orenCli;
    }

    public function setA�orenCli(?int $a�orenCli): self
    {
        $this->a�orenCli = $a�orenCli;

        return $this;
    }

    public function getMesrenCli(): ?int
    {
        return $this->mesrenCli;
    }

    public function setMesrenCli(?int $mesrenCli): self
    {
        $this->mesrenCli = $mesrenCli;

        return $this;
    }

    public function getMesesrenCli(): ?int
    {
        return $this->mesesrenCli;
    }

    public function setMesesrenCli(?int $mesesrenCli): self
    {
        $this->mesesrenCli = $mesesrenCli;

        return $this;
    }

    public function getTivaCli(): ?bool
    {
        return $this->tivaCli;
    }

    public function setTivaCli(?bool $tivaCli): self
    {
        $this->tivaCli = $tivaCli;

        return $this;
    }

    public function getForfacCli(): ?string
    {
        return $this->forfacCli;
    }

    public function setForfacCli(?string $forfacCli): self
    {
        $this->forfacCli = $forfacCli;

        return $this;
    }

    public function getUsuarioCli(): ?int
    {
        return $this->usuarioCli;
    }

    public function setUsuarioCli(?int $usuarioCli): self
    {
        $this->usuarioCli = $usuarioCli;

        return $this;
    }

    public function getCalCli(): ?int
    {
        return $this->calCli;
    }

    public function setCalCli(int $calCli): self
    {
        $this->calCli = $calCli;

        return $this;
    }

    public function getGuiCli(): ?string
    {
        return $this->guiCli;
    }

    public function setGuiCli(?string $guiCli): self
    {
        $this->guiCli = $guiCli;

        return $this;
    }

    public function getZonaCli(): ?string
    {
        return $this->zonaCli;
    }

    public function setZonaCli(?string $zonaCli): self
    {
        $this->zonaCli = $zonaCli;

        return $this;
    }

    public function getCopCli(): ?int
    {
        return $this->copCli;
    }

    public function setCopCli(?int $copCli): self
    {
        $this->copCli = $copCli;

        return $this;
    }

    public function getPercon1Cli(): ?string
    {
        return $this->percon1Cli;
    }

    public function setPercon1Cli(?string $percon1Cli): self
    {
        $this->percon1Cli = $percon1Cli;

        return $this;
    }

    public function getPercon2Cli(): ?string
    {
        return $this->percon2Cli;
    }

    public function setPercon2Cli(?string $percon2Cli): self
    {
        $this->percon2Cli = $percon2Cli;

        return $this;
    }

    public function getPercon3Cli(): ?string
    {
        return $this->percon3Cli;
    }

    public function setPercon3Cli(?string $percon3Cli): self
    {
        $this->percon3Cli = $percon3Cli;

        return $this;
    }

    public function getModemCli(): ?bool
    {
        return $this->modemCli;
    }

    public function setModemCli(bool $modemCli): self
    {
        $this->modemCli = $modemCli;

        return $this;
    }

    public function getAbCli(): ?string
    {
        return $this->abCli;
    }

    public function setAbCli(?string $abCli): self
    {
        $this->abCli = $abCli;

        return $this;
    }

    public function getAgrupCli(): ?string
    {
        return $this->agrupCli;
    }

    public function setAgrupCli(?string $agrupCli): self
    {
        $this->agrupCli = $agrupCli;

        return $this;
    }

    public function getLluviaCli(): ?int
    {
        return $this->lluviaCli;
    }

    public function setLluviaCli(?int $lluviaCli): self
    {
        $this->lluviaCli = $lluviaCli;

        return $this;
    }

    public function getMesnoCli(): ?int
    {
        return $this->mesnoCli;
    }

    public function setMesnoCli(?int $mesnoCli): self
    {
        $this->mesnoCli = $mesnoCli;

        return $this;
    }

    public function getTipcomCli(): ?int
    {
        return $this->tipcomCli;
    }

    public function setTipcomCli(?int $tipcomCli): self
    {
        $this->tipcomCli = $tipcomCli;

        return $this;
    }

    public function getPorreeCli(): ?float
    {
        return $this->porreeCli;
    }

    public function setPorreeCli(?float $porreeCli): self
    {
        $this->porreeCli = $porreeCli;

        return $this;
    }

    public function getTipreeCli(): ?string
    {
        return $this->tipreeCli;
    }

    public function setTipreeCli(?string $tipreeCli): self
    {
        $this->tipreeCli = $tipreeCli;

        return $this;
    }

    public function getReeminCli(): ?float
    {
        return $this->reeminCli;
    }

    public function setReeminCli(?float $reeminCli): self
    {
        $this->reeminCli = $reeminCli;

        return $this;
    }

    public function getReemaxCli(): ?float
    {
        return $this->reemaxCli;
    }

    public function setReemaxCli(?float $reemaxCli): self
    {
        $this->reemaxCli = $reemaxCli;

        return $this;
    }

    public function getPorsegCli(): ?float
    {
        return $this->porsegCli;
    }

    public function setPorsegCli(?float $porsegCli): self
    {
        $this->porsegCli = $porsegCli;

        return $this;
    }

    public function getTipsegCli(): ?string
    {
        return $this->tipsegCli;
    }

    public function setTipsegCli(?string $tipsegCli): self
    {
        $this->tipsegCli = $tipsegCli;

        return $this;
    }

    public function getSegminCli(): ?float
    {
        return $this->segminCli;
    }

    public function setSegminCli(?float $segminCli): self
    {
        $this->segminCli = $segminCli;

        return $this;
    }

    public function getSegmaxCli(): ?float
    {
        return $this->segmaxCli;
    }

    public function setSegmaxCli(?float $segmaxCli): self
    {
        $this->segmaxCli = $segmaxCli;

        return $this;
    }

    public function getPorsegvCli(): ?float
    {
        return $this->porsegvCli;
    }

    public function setPorsegvCli(?float $porsegvCli): self
    {
        $this->porsegvCli = $porsegvCli;

        return $this;
    }

    public function getTipsegvCli(): ?string
    {
        return $this->tipsegvCli;
    }

    public function setTipsegvCli(?string $tipsegvCli): self
    {
        $this->tipsegvCli = $tipsegvCli;

        return $this;
    }

    public function getSegminvCli(): ?float
    {
        return $this->segminvCli;
    }

    public function setSegminvCli(?float $segminvCli): self
    {
        $this->segminvCli = $segminvCli;

        return $this;
    }

    public function getSegmaxvCli(): ?float
    {
        return $this->segmaxvCli;
    }

    public function setSegmaxvCli(?float $segmaxvCli): self
    {
        $this->segmaxvCli = $segmaxvCli;

        return $this;
    }

    public function getNomfacCli(): ?string
    {
        return $this->nomfacCli;
    }

    public function setNomfacCli(?string $nomfacCli): self
    {
        $this->nomfacCli = $nomfacCli;

        return $this;
    }

    public function getDomfacCli(): ?string
    {
        return $this->domfacCli;
    }

    public function setDomfacCli(?string $domfacCli): self
    {
        $this->domfacCli = $domfacCli;

        return $this;
    }

    public function getNdomfacCli(): ?int
    {
        return $this->ndomfacCli;
    }

    public function setNdomfacCli(?int $ndomfacCli): self
    {
        $this->ndomfacCli = $ndomfacCli;

        return $this;
    }

    public function getTdomfacCli(): ?string
    {
        return $this->tdomfacCli;
    }

    public function setTdomfacCli(?string $tdomfacCli): self
    {
        $this->tdomfacCli = $tdomfacCli;

        return $this;
    }

    public function getPdomfacCli(): ?string
    {
        return $this->pdomfacCli;
    }

    public function setPdomfacCli(?string $pdomfacCli): self
    {
        $this->pdomfacCli = $pdomfacCli;

        return $this;
    }

    public function getCdpfacCli(): ?int
    {
        return $this->cdpfacCli;
    }

    public function setCdpfacCli(?int $cdpfacCli): self
    {
        $this->cdpfacCli = $cdpfacCli;

        return $this;
    }

    public function getPaisfacCli(): ?string
    {
        return $this->paisfacCli;
    }

    public function setPaisfacCli(?string $paisfacCli): self
    {
        $this->paisfacCli = $paisfacCli;

        return $this;
    }

    public function getPobfacCli(): ?string
    {
        return $this->pobfacCli;
    }

    public function setPobfacCli(?string $pobfacCli): self
    {
        $this->pobfacCli = $pobfacCli;

        return $this;
    }

    public function getRconcCli(): ?float
    {
        return $this->rconcCli;
    }

    public function setRconcCli(?float $rconcCli): self
    {
        $this->rconcCli = $rconcCli;

        return $this;
    }

    public function getEmailCli(): ?string
    {
        return $this->emailCli;
    }

    public function setEmailCli(?string $emailCli): self
    {
        $this->emailCli = $emailCli;

        return $this;
    }

    public function getTelper1Cli(): ?int
    {
        return $this->telper1Cli;
    }

    public function setTelper1Cli(?int $telper1Cli): self
    {
        $this->telper1Cli = $telper1Cli;

        return $this;
    }

    public function getTelper2Cli(): ?int
    {
        return $this->telper2Cli;
    }

    public function setTelper2Cli(?int $telper2Cli): self
    {
        $this->telper2Cli = $telper2Cli;

        return $this;
    }

    public function getTelper3Cli(): ?int
    {
        return $this->telper3Cli;
    }

    public function setTelper3Cli(?int $telper3Cli): self
    {
        $this->telper3Cli = $telper3Cli;

        return $this;
    }

    public function getCargo1Cli(): ?string
    {
        return $this->cargo1Cli;
    }

    public function setCargo1Cli(?string $cargo1Cli): self
    {
        $this->cargo1Cli = $cargo1Cli;

        return $this;
    }

    public function getCargo2Cli(): ?string
    {
        return $this->cargo2Cli;
    }

    public function setCargo2Cli(?string $cargo2Cli): self
    {
        $this->cargo2Cli = $cargo2Cli;

        return $this;
    }

    public function getCargo3Cli(): ?string
    {
        return $this->cargo3Cli;
    }

    public function setCargo3Cli(?string $cargo3Cli): self
    {
        $this->cargo3Cli = $cargo3Cli;

        return $this;
    }

    public function getAlbafacCli(): ?int
    {
        return $this->albafacCli;
    }

    public function setAlbafacCli(?int $albafacCli): self
    {
        $this->albafacCli = $albafacCli;

        return $this;
    }

    public function getFueraCli(): ?int
    {
        return $this->fueraCli;
    }

    public function setFueraCli(?int $fueraCli): self
    {
        $this->fueraCli = $fueraCli;

        return $this;
    }

    public function getTarlocCli(): ?string
    {
        return $this->tarlocCli;
    }

    public function setTarlocCli(?string $tarlocCli): self
    {
        $this->tarlocCli = $tarlocCli;

        return $this;
    }

    public function getTarprvCli(): ?string
    {
        return $this->tarprvCli;
    }

    public function setTarprvCli(?string $tarprvCli): self
    {
        $this->tarprvCli = $tarprvCli;

        return $this;
    }

    public function getTarnacCli(): ?string
    {
        return $this->tarnacCli;
    }

    public function setTarnacCli(?string $tarnacCli): self
    {
        $this->tarnacCli = $tarnacCli;

        return $this;
    }

    public function getTarintCli(): ?string
    {
        return $this->tarintCli;
    }

    public function setTarintCli(?string $tarintCli): self
    {
        $this->tarintCli = $tarintCli;

        return $this;
    }

    public function getBloqueoCli(): ?bool
    {
        return $this->bloqueoCli;
    }

    public function setBloqueoCli(?bool $bloqueoCli): self
    {
        $this->bloqueoCli = $bloqueoCli;

        return $this;
    }

    public function getCanalCli(): ?string
    {
        return $this->canalCli;
    }

    public function setCanalCli(?string $canalCli): self
    {
        $this->canalCli = $canalCli;

        return $this;
    }

    public function getBloqueonacCli(): ?bool
    {
        return $this->bloqueonacCli;
    }

    public function setBloqueonacCli(?bool $bloqueonacCli): self
    {
        $this->bloqueonacCli = $bloqueonacCli;

        return $this;
    }

    public function getHorarioCli(): ?string
    {
        return $this->horarioCli;
    }

    public function setHorarioCli(?string $horarioCli): self
    {
        $this->horarioCli = $horarioCli;

        return $this;
    }

    public function getPoradeCli(): ?float
    {
        return $this->poradeCli;
    }

    public function setPoradeCli(?float $poradeCli): self
    {
        $this->poradeCli = $poradeCli;

        return $this;
    }

    public function getAdemaxCli(): ?float
    {
        return $this->ademaxCli;
    }

    public function setAdemaxCli(?float $ademaxCli): self
    {
        $this->ademaxCli = $ademaxCli;

        return $this;
    }

    public function getAdeminCli(): ?float
    {
        return $this->ademinCli;
    }

    public function setAdeminCli(?float $ademinCli): self
    {
        $this->ademinCli = $ademinCli;

        return $this;
    }

    public function getAdeextCli(): ?float
    {
        return $this->adeextCli;
    }

    public function setAdeextCli(?float $adeextCli): self
    {
        $this->adeextCli = $adeextCli;

        return $this;
    }

    public function getTipadeCli(): ?string
    {
        return $this->tipadeCli;
    }

    public function setTipadeCli(?string $tipadeCli): self
    {
        $this->tipadeCli = $tipadeCli;

        return $this;
    }

    public function getNpoidesCli(): ?int
    {
        return $this->npoidesCli;
    }

    public function setNpoidesCli(?int $npoidesCli): self
    {
        $this->npoidesCli = $npoidesCli;

        return $this;
    }

    public function getNpoihasCli(): ?int
    {
        return $this->npoihasCli;
    }

    public function setNpoihasCli(?int $npoihasCli): self
    {
        $this->npoihasCli = $npoihasCli;

        return $this;
    }

    public function getAutpoinCli(): ?bool
    {
        return $this->autpoinCli;
    }

    public function setAutpoinCli(?bool $autpoinCli): self
    {
        $this->autpoinCli = $autpoinCli;

        return $this;
    }

    public function getEmailpodCli(): ?string
    {
        return $this->emailpodCli;
    }

    public function setEmailpodCli(?string $emailpodCli): self
    {
        $this->emailpodCli = $emailpodCli;

        return $this;
    }

    public function getEmailfacCli(): ?string
    {
        return $this->emailfacCli;
    }

    public function setEmailfacCli(?string $emailfacCli): self
    {
        $this->emailfacCli = $emailfacCli;

        return $this;
    }

    public function getDominterCli(): ?string
    {
        return $this->dominterCli;
    }

    public function setDominterCli(?string $dominterCli): self
    {
        $this->dominterCli = $dominterCli;

        return $this;
    }

    public function getPorretCli(): ?int
    {
        return $this->porretCli;
    }

    public function setPorretCli(?int $porretCli): self
    {
        $this->porretCli = $porretCli;

        return $this;
    }

    public function getVolvtaCli(): ?int
    {
        return $this->volvtaCli;
    }

    public function setVolvtaCli(?int $volvtaCli): self
    {
        $this->volvtaCli = $volvtaCli;

        return $this;
    }

    public function getFacturableCli(): ?bool
    {
        return $this->facturableCli;
    }

    public function setFacturableCli(?bool $facturableCli): self
    {
        $this->facturableCli = $facturableCli;

        return $this;
    }

    public function getFornacCli(): ?string
    {
        return $this->fornacCli;
    }

    public function setFornacCli(?string $fornacCli): self
    {
        $this->fornacCli = $fornacCli;

        return $this;
    }

    public function getObsfac1Cli(): ?string
    {
        return $this->obsfac1Cli;
    }

    public function setObsfac1Cli(?string $obsfac1Cli): self
    {
        $this->obsfac1Cli = $obsfac1Cli;

        return $this;
    }

    public function getObsfac2Cli(): ?string
    {
        return $this->obsfac2Cli;
    }

    public function setObsfac2Cli(?string $obsfac2Cli): self
    {
        $this->obsfac2Cli = $obsfac2Cli;

        return $this;
    }

    public function getObsfac3Cli(): ?string
    {
        return $this->obsfac3Cli;
    }

    public function setObsfac3Cli(?string $obsfac3Cli): self
    {
        $this->obsfac3Cli = $obsfac3Cli;

        return $this;
    }

    public function getObsfac4Cli(): ?string
    {
        return $this->obsfac4Cli;
    }

    public function setObsfac4Cli(?string $obsfac4Cli): self
    {
        $this->obsfac4Cli = $obsfac4Cli;

        return $this;
    }

    public function getLongitudCli(): ?float
    {
        return $this->longitudCli;
    }

    public function setLongitudCli(float $longitudCli): self
    {
        $this->longitudCli = $longitudCli;

        return $this;
    }

    public function getLatitudCli(): ?float
    {
        return $this->latitudCli;
    }

    public function setLatitudCli(float $latitudCli): self
    {
        $this->latitudCli = $latitudCli;

        return $this;
    }

    public function getPorcarbuCli(): ?float
    {
        return $this->porcarbuCli;
    }

    public function setPorcarbuCli(?float $porcarbuCli): self
    {
        $this->porcarbuCli = $porcarbuCli;

        return $this;
    }

    public function getPorccCli(): ?float
    {
        return $this->porccCli;
    }

    public function setPorccCli(?float $porccCli): self
    {
        $this->porccCli = $porccCli;

        return $this;
    }

    public function getTipccCli(): ?string
    {
        return $this->tipccCli;
    }

    public function setTipccCli(?string $tipccCli): self
    {
        $this->tipccCli = $tipccCli;

        return $this;
    }

    public function getCcminCli(): ?float
    {
        return $this->ccminCli;
    }

    public function setCcminCli(?float $ccminCli): self
    {
        $this->ccminCli = $ccminCli;

        return $this;
    }

    public function getCcmaxCli(): ?float
    {
        return $this->ccmaxCli;
    }

    public function setCcmaxCli(?float $ccmaxCli): self
    {
        $this->ccmaxCli = $ccmaxCli;

        return $this;
    }

    public function getTransmitidoCli(): ?bool
    {
        return $this->transmitidoCli;
    }

    public function setTransmitidoCli(?bool $transmitidoCli): self
    {
        $this->transmitidoCli = $transmitidoCli;

        return $this;
    }

    public function getAvisosmsCli(): ?int
    {
        return $this->avisosmsCli;
    }

    public function setAvisosmsCli(?int $avisosmsCli): self
    {
        $this->avisosmsCli = $avisosmsCli;

        return $this;
    }

    public function getAvisoemailCli(): ?int
    {
        return $this->avisoemailCli;
    }

    public function setAvisoemailCli(?int $avisoemailCli): self
    {
        $this->avisoemailCli = $avisoemailCli;

        return $this;
    }

    public function getMovilavisoCli(): ?string
    {
        return $this->movilavisoCli;
    }

    public function setMovilavisoCli(?string $movilavisoCli): self
    {
        $this->movilavisoCli = $movilavisoCli;

        return $this;
    }

    public function getEmailavisoCli(): ?string
    {
        return $this->emailavisoCli;
    }

    public function setEmailavisoCli(?string $emailavisoCli): self
    {
        $this->emailavisoCli = $emailavisoCli;

        return $this;
    }

    public function getPorcarbuintCli(): ?float
    {
        return $this->porcarbuintCli;
    }

    public function setPorcarbuintCli(?float $porcarbuintCli): self
    {
        $this->porcarbuintCli = $porcarbuintCli;

        return $this;
    }

    public function getIbanCli(): ?string
    {
        return $this->ibanCli;
    }

    public function setIbanCli(?string $ibanCli): self
    {
        $this->ibanCli = $ibanCli;

        return $this;
    }

    public function getRefmansepaCli(): ?string
    {
        return $this->refmansepaCli;
    }

    public function setRefmansepaCli(?string $refmansepaCli): self
    {
        $this->refmansepaCli = $refmansepaCli;

        return $this;
    }

    public function getFecmansepaCli(): ?\DateTimeInterface
    {
        return $this->fecmansepaCli;
    }

    public function setFecmansepaCli(?\DateTimeInterface $fecmansepaCli): self
    {
        $this->fecmansepaCli = $fecmansepaCli;

        return $this;
    }

    public function getTipoadeudoCli(): ?string
    {
        return $this->tipoadeudoCli;
    }

    public function setTipoadeudoCli(?string $tipoadeudoCli): self
    {
        $this->tipoadeudoCli = $tipoadeudoCli;

        return $this;
    }

    public function getOrgestfeCli(): ?string
    {
        return $this->orgestfeCli;
    }

    public function setOrgestfeCli(?string $orgestfeCli): self
    {
        $this->orgestfeCli = $orgestfeCli;

        return $this;
    }

    public function getUtramitfeCli(): ?string
    {
        return $this->utramitfeCli;
    }

    public function setUtramitfeCli(?string $utramitfeCli): self
    {
        $this->utramitfeCli = $utramitfeCli;

        return $this;
    }

    public function getEmisionfeCli(): ?bool
    {
        return $this->emisionfeCli;
    }

    public function setEmisionfeCli(?bool $emisionfeCli): self
    {
        $this->emisionfeCli = $emisionfeCli;

        return $this;
    }

    public function getOfcontfeCli(): ?string
    {
        return $this->ofcontfeCli;
    }

    public function setOfcontfeCli(?string $ofcontfeCli): self
    {
        $this->ofcontfeCli = $ofcontfeCli;

        return $this;
    }

    public function getEmailefaCli(): ?string
    {
        return $this->emailefaCli;
    }

    public function setEmailefaCli(?string $emailefaCli): self
    {
        $this->emailefaCli = $emailefaCli;

        return $this;
    }

    public function getEmailreeCli(): ?string
    {
        return $this->emailreeCli;
    }

    public function setEmailreeCli(?string $emailreeCli): self
    {
        $this->emailreeCli = $emailreeCli;

        return $this;
    }

    public function getEmailfaeCli(): ?string
    {
        return $this->emailfaeCli;
    }

    public function setEmailfaeCli(?string $emailfaeCli): self
    {
        $this->emailfaeCli = $emailfaeCli;

        return $this;
    }

    public function getExpedientefeCli(): ?string
    {
        return $this->expedientefeCli;
    }

    public function setExpedientefeCli(?string $expedientefeCli): self
    {
        $this->expedientefeCli = $expedientefeCli;

        return $this;
    }

    public function getRefemifeCli(): ?string
    {
        return $this->refemifeCli;
    }

    public function setRefemifeCli(?string $refemifeCli): self
    {
        $this->refemifeCli = $refemifeCli;

        return $this;
    }

    public function getExenvolCli(): ?int
    {
        return $this->exenvolCli;
    }

    public function setExenvolCli(?int $exenvolCli): self
    {
        $this->exenvolCli = $exenvolCli;

        return $this;
    }

    public function getPedidofeCli(): ?string
    {
        return $this->pedidofeCli;
    }

    public function setPedidofeCli(?string $pedidofeCli): self
    {
        $this->pedidofeCli = $pedidofeCli;

        return $this;
    }


}
