<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresas
 *
 * @ORM\Table(name="empresas")
 * @ORM\Entity
 */
class Empresas
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Emp", type="boolean", nullable=false)
     */
    private $bajaEmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Emp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalEmp = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Emp", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codEmp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ana_Emp", type="string", length=10, nullable=true)
     */
    private $anaEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Emp", type="string", length=40, nullable=true)
     */
    private $nomEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Emp", type="string", length=50, nullable=true)
     */
    private $domEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndom_Emp", type="smallint", nullable=true)
     */
    private $ndomEmp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdom_Emp", type="string", length=3, nullable=true)
     */
    private $tdomEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdom_Emp", type="string", length=10, nullable=true)
     */
    private $pdomEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Emp", type="string", length=25, nullable=true)
     */
    private $paisEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Emp", type="string", length=35, nullable=true)
     */
    private $pobEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Emp", type="integer", nullable=true)
     */
    private $cdpEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Emp", type="integer", nullable=true)
     */
    private $telEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fax_Emp", type="integer", nullable=true)
     */
    private $faxEmp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Emp", type="string", length=13, nullable=true)
     */
    private $nifEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nal_Emp", type="integer", nullable=true)
     */
    private $nalEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfa_Emp", type="integer", nullable=true)
     */
    private $nfaEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nrm_Emp", type="integer", nullable=true)
     */
    private $nrmEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ncl_Emp", type="integer", nullable=true)
     */
    private $nclEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nemi_Emp", type="integer", nullable=true)
     */
    private $nemiEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nrec_Emp", type="integer", nullable=true)
     */
    private $nrecEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nint_Emp", type="integer", nullable=true)
     */
    private $nintEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfij_Emp", type="integer", nullable=true)
     */
    private $nfijEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nfijnac_Emp", type="integer", nullable=true)
     */
    private $nfijnacEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nabo_Emp", type="integer", nullable=true)
     */
    private $naboEmp = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iva_Emp", type="float", precision=53, scale=0, nullable=true)
     */
    private $ivaEmp;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ret_Emp", type="float", precision=53, scale=0, nullable=true)
     */
    private $retEmp;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Euro_Emp", type="float", precision=53, scale=0, nullable=true)
     */
    private $euroEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctaiva_Emp", type="string", length=10, nullable=true)
     */
    private $ctaivaEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctaivasop_Emp", type="string", length=10, nullable=true)
     */
    private $ctaivasopEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtaIvaExe_Emp", type="string", length=10, nullable=true)
     */
    private $ctaivaexeEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctaabono_Emp", type="string", length=10, nullable=true)
     */
    private $ctaabonoEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctadtovta_Emp", type="string", length=10, nullable=true)
     */
    private $ctadtovtaEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtadtoExe_Emp", type="string", length=10, nullable=true)
     */
    private $ctadtoexeEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctaanticip_Emp", type="string", length=10, nullable=true)
     */
    private $ctaanticipEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctaret_Emp", type="string", length=10, nullable=true)
     */
    private $ctaretEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctacobgto_Emp", type="string", length=10, nullable=true)
     */
    private $ctacobgtoEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctagtosdev_Emp", type="string", length=10, nullable=true)
     */
    private $ctagtosdevEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctarecequi_Emp", type="string", length=10, nullable=true)
     */
    private $ctarecequiEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DigCont_Emp", type="smallint", nullable=true)
     */
    private $digcontEmp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_Emp", type="string", length=40, nullable=true)
     */
    private $emailEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiaAdm_Emp", type="integer", nullable=true)
     */
    private $diaadmEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiaTraf_Emp", type="integer", nullable=true)
     */
    private $diatrafEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiaCart_Emp", type="integer", nullable=true)
     */
    private $diacartEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiaPer_Emp", type="integer", nullable=true)
     */
    private $diaperEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Observ_Emp", type="boolean", nullable=false)
     */
    private $observEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Comercial_Emp", type="boolean", nullable=false)
     */
    private $comercialEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="LLuvia_Emp", type="boolean", nullable=false)
     */
    private $lluviaEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="NRef_Emp", type="boolean", nullable=false)
     */
    private $nrefEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="DupliNRef_Emp", type="boolean", nullable=false)
     */
    private $duplinrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="AlbNRef_Emp", type="smallint", nullable=true)
     */
    private $albnrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="LLaNRef_Emp", type="smallint", nullable=true)
     */
    private $llanrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NacNRef_Emp", type="smallint", nullable=true)
     */
    private $nacnrefEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="SRef_Emp", type="boolean", nullable=false)
     */
    private $srefEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="DupliSRef_Emp", type="boolean", nullable=false)
     */
    private $duplisrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="AlbSRef_Emp", type="smallint", nullable=true)
     */
    private $albsrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="LLaSRef_Emp", type="smallint", nullable=true)
     */
    private $llasrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NacSRef_Emp", type="smallint", nullable=true)
     */
    private $nacsrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="EmpFactura_Emp", type="smallint", nullable=true)
     */
    private $empfacturaEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="AbonosNum_Emp", type="boolean", nullable=false)
     */
    private $abonosnumEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="EmpB_Emp", type="smallint", nullable=true)
     */
    private $empbEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ZonasCdp_Emp", type="boolean", nullable=false)
     */
    private $zonascdpEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="ContAboTip_Emp", type="boolean", nullable=false)
     */
    private $contabotipEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="PaseCont_Emp", type="boolean", nullable=false)
     */
    private $pasecontEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="BorDiario_Emp", type="boolean", nullable=false)
     */
    private $bordiarioEmp = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ApliDest_Emp", type="string", length=2, nullable=true)
     */
    private $aplidestEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Moneda_Emp", type="string", length=10, nullable=true)
     */
    private $monedaEmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CosVeh_Emp", type="boolean", nullable=true)
     */
    private $cosvehEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliDeb_Emp", type="integer", nullable=true)
     */
    private $clidebEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtaCompra_Emp", type="string", length=10, nullable=true)
     */
    private $ctacompraEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="RepNRef_Emp", type="smallint", nullable=true)
     */
    private $repnrefEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="RepSRef_Emp", type="smallint", nullable=true)
     */
    private $repsrefEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnCli_Emp", type="boolean", nullable=false)
     */
    private $strncliEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnMen_Emp", type="boolean", nullable=false)
     */
    private $strnmenEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnCom_Emp", type="boolean", nullable=false)
     */
    private $strncomEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnTip_Emp", type="boolean", nullable=false)
     */
    private $strntipEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnTar_Emp", type="boolean", nullable=false)
     */
    private $strntarEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnPre_Emp", type="boolean", nullable=false)
     */
    private $strnpreEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnPob_Emp", type="boolean", nullable=false)
     */
    private $strnpobEmp = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="STrnDis_Emp", type="boolean", nullable=false)
     */
    private $strndisEmp = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NFCom_Emp", type="integer", nullable=true)
     */
    private $nfcomEmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="STrnGuia_Emp", type="boolean", nullable=true)
     */
    private $strnguiaEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RegisMer_Emp", type="string", length=180, nullable=true)
     */
    private $regismerEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtaRetCli_Emp", type="string", length=10, nullable=true)
     */
    private $ctaretcliEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CtaRetCliExt_Emp", type="string", length=10, nullable=true)
     */
    private $ctaretcliextEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliInt_Emp", type="integer", nullable=true)
     */
    private $cliintEmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NumSerie_Emp", type="boolean", nullable=true)
     */
    private $numserieEmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DupliNRefInt_Emp", type="boolean", nullable=true)
     */
    private $duplinrefintEmp;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="DupliSRefInt_Emp", type="boolean", nullable=true)
     */
    private $duplisrefintEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodSepa_Emp", type="string", length=35, nullable=true)
     */
    private $codsepaEmp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NLiqRee_Emp", type="integer", nullable=true)
     */
    private $nliqreeEmp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AvisoFacMail_Emp", type="string", length=1000, nullable=true)
     */
    private $avisofacmailEmp;

    public function getBajaEmp(): ?bool
    {
        return $this->bajaEmp;
    }

    public function setBajaEmp(bool $bajaEmp): self
    {
        $this->bajaEmp = $bajaEmp;

        return $this;
    }

    public function getSucursalEmp(): ?int
    {
        return $this->sucursalEmp;
    }

    public function getCodEmp(): ?int
    {
        return $this->codEmp;
    }

    public function getAnaEmp(): ?string
    {
        return $this->anaEmp;
    }

    public function setAnaEmp(?string $anaEmp): self
    {
        $this->anaEmp = $anaEmp;

        return $this;
    }

    public function getNomEmp(): ?string
    {
        return $this->nomEmp;
    }

    public function setNomEmp(?string $nomEmp): self
    {
        $this->nomEmp = $nomEmp;

        return $this;
    }

    public function getDomEmp(): ?string
    {
        return $this->domEmp;
    }

    public function setDomEmp(?string $domEmp): self
    {
        $this->domEmp = $domEmp;

        return $this;
    }

    public function getNdomEmp(): ?int
    {
        return $this->ndomEmp;
    }

    public function setNdomEmp(?int $ndomEmp): self
    {
        $this->ndomEmp = $ndomEmp;

        return $this;
    }

    public function getTdomEmp(): ?string
    {
        return $this->tdomEmp;
    }

    public function setTdomEmp(?string $tdomEmp): self
    {
        $this->tdomEmp = $tdomEmp;

        return $this;
    }

    public function getPdomEmp(): ?string
    {
        return $this->pdomEmp;
    }

    public function setPdomEmp(?string $pdomEmp): self
    {
        $this->pdomEmp = $pdomEmp;

        return $this;
    }

    public function getPaisEmp(): ?string
    {
        return $this->paisEmp;
    }

    public function setPaisEmp(?string $paisEmp): self
    {
        $this->paisEmp = $paisEmp;

        return $this;
    }

    public function getPobEmp(): ?string
    {
        return $this->pobEmp;
    }

    public function setPobEmp(?string $pobEmp): self
    {
        $this->pobEmp = $pobEmp;

        return $this;
    }

    public function getCdpEmp(): ?int
    {
        return $this->cdpEmp;
    }

    public function setCdpEmp(?int $cdpEmp): self
    {
        $this->cdpEmp = $cdpEmp;

        return $this;
    }

    public function getTelEmp(): ?int
    {
        return $this->telEmp;
    }

    public function setTelEmp(?int $telEmp): self
    {
        $this->telEmp = $telEmp;

        return $this;
    }

    public function getFaxEmp(): ?int
    {
        return $this->faxEmp;
    }

    public function setFaxEmp(?int $faxEmp): self
    {
        $this->faxEmp = $faxEmp;

        return $this;
    }

    public function getNifEmp(): ?string
    {
        return $this->nifEmp;
    }

    public function setNifEmp(?string $nifEmp): self
    {
        $this->nifEmp = $nifEmp;

        return $this;
    }

    public function getNalEmp(): ?int
    {
        return $this->nalEmp;
    }

    public function setNalEmp(?int $nalEmp): self
    {
        $this->nalEmp = $nalEmp;

        return $this;
    }

    public function getNfaEmp(): ?int
    {
        return $this->nfaEmp;
    }

    public function setNfaEmp(?int $nfaEmp): self
    {
        $this->nfaEmp = $nfaEmp;

        return $this;
    }

    public function getNrmEmp(): ?int
    {
        return $this->nrmEmp;
    }

    public function setNrmEmp(?int $nrmEmp): self
    {
        $this->nrmEmp = $nrmEmp;

        return $this;
    }

    public function getNclEmp(): ?int
    {
        return $this->nclEmp;
    }

    public function setNclEmp(?int $nclEmp): self
    {
        $this->nclEmp = $nclEmp;

        return $this;
    }

    public function getNemiEmp(): ?int
    {
        return $this->nemiEmp;
    }

    public function setNemiEmp(?int $nemiEmp): self
    {
        $this->nemiEmp = $nemiEmp;

        return $this;
    }

    public function getNrecEmp(): ?int
    {
        return $this->nrecEmp;
    }

    public function setNrecEmp(?int $nrecEmp): self
    {
        $this->nrecEmp = $nrecEmp;

        return $this;
    }

    public function getNintEmp(): ?int
    {
        return $this->nintEmp;
    }

    public function setNintEmp(?int $nintEmp): self
    {
        $this->nintEmp = $nintEmp;

        return $this;
    }

    public function getNfijEmp(): ?int
    {
        return $this->nfijEmp;
    }

    public function setNfijEmp(?int $nfijEmp): self
    {
        $this->nfijEmp = $nfijEmp;

        return $this;
    }

    public function getNfijnacEmp(): ?int
    {
        return $this->nfijnacEmp;
    }

    public function setNfijnacEmp(?int $nfijnacEmp): self
    {
        $this->nfijnacEmp = $nfijnacEmp;

        return $this;
    }

    public function getNaboEmp(): ?int
    {
        return $this->naboEmp;
    }

    public function setNaboEmp(?int $naboEmp): self
    {
        $this->naboEmp = $naboEmp;

        return $this;
    }

    public function getIvaEmp(): ?float
    {
        return $this->ivaEmp;
    }

    public function setIvaEmp(?float $ivaEmp): self
    {
        $this->ivaEmp = $ivaEmp;

        return $this;
    }

    public function getRetEmp(): ?float
    {
        return $this->retEmp;
    }

    public function setRetEmp(?float $retEmp): self
    {
        $this->retEmp = $retEmp;

        return $this;
    }

    public function getEuroEmp(): ?float
    {
        return $this->euroEmp;
    }

    public function setEuroEmp(?float $euroEmp): self
    {
        $this->euroEmp = $euroEmp;

        return $this;
    }

    public function getCtaivaEmp(): ?string
    {
        return $this->ctaivaEmp;
    }

    public function setCtaivaEmp(?string $ctaivaEmp): self
    {
        $this->ctaivaEmp = $ctaivaEmp;

        return $this;
    }

    public function getCtaivasopEmp(): ?string
    {
        return $this->ctaivasopEmp;
    }

    public function setCtaivasopEmp(?string $ctaivasopEmp): self
    {
        $this->ctaivasopEmp = $ctaivasopEmp;

        return $this;
    }

    public function getCtaivaexeEmp(): ?string
    {
        return $this->ctaivaexeEmp;
    }

    public function setCtaivaexeEmp(?string $ctaivaexeEmp): self
    {
        $this->ctaivaexeEmp = $ctaivaexeEmp;

        return $this;
    }

    public function getCtaabonoEmp(): ?string
    {
        return $this->ctaabonoEmp;
    }

    public function setCtaabonoEmp(?string $ctaabonoEmp): self
    {
        $this->ctaabonoEmp = $ctaabonoEmp;

        return $this;
    }

    public function getCtadtovtaEmp(): ?string
    {
        return $this->ctadtovtaEmp;
    }

    public function setCtadtovtaEmp(?string $ctadtovtaEmp): self
    {
        $this->ctadtovtaEmp = $ctadtovtaEmp;

        return $this;
    }

    public function getCtadtoexeEmp(): ?string
    {
        return $this->ctadtoexeEmp;
    }

    public function setCtadtoexeEmp(?string $ctadtoexeEmp): self
    {
        $this->ctadtoexeEmp = $ctadtoexeEmp;

        return $this;
    }

    public function getCtaanticipEmp(): ?string
    {
        return $this->ctaanticipEmp;
    }

    public function setCtaanticipEmp(?string $ctaanticipEmp): self
    {
        $this->ctaanticipEmp = $ctaanticipEmp;

        return $this;
    }

    public function getCtaretEmp(): ?string
    {
        return $this->ctaretEmp;
    }

    public function setCtaretEmp(?string $ctaretEmp): self
    {
        $this->ctaretEmp = $ctaretEmp;

        return $this;
    }

    public function getCtacobgtoEmp(): ?string
    {
        return $this->ctacobgtoEmp;
    }

    public function setCtacobgtoEmp(?string $ctacobgtoEmp): self
    {
        $this->ctacobgtoEmp = $ctacobgtoEmp;

        return $this;
    }

    public function getCtagtosdevEmp(): ?string
    {
        return $this->ctagtosdevEmp;
    }

    public function setCtagtosdevEmp(?string $ctagtosdevEmp): self
    {
        $this->ctagtosdevEmp = $ctagtosdevEmp;

        return $this;
    }

    public function getCtarecequiEmp(): ?string
    {
        return $this->ctarecequiEmp;
    }

    public function setCtarecequiEmp(?string $ctarecequiEmp): self
    {
        $this->ctarecequiEmp = $ctarecequiEmp;

        return $this;
    }

    public function getDigcontEmp(): ?int
    {
        return $this->digcontEmp;
    }

    public function setDigcontEmp(?int $digcontEmp): self
    {
        $this->digcontEmp = $digcontEmp;

        return $this;
    }

    public function getEmailEmp(): ?string
    {
        return $this->emailEmp;
    }

    public function setEmailEmp(?string $emailEmp): self
    {
        $this->emailEmp = $emailEmp;

        return $this;
    }

    public function getDiaadmEmp(): ?int
    {
        return $this->diaadmEmp;
    }

    public function setDiaadmEmp(?int $diaadmEmp): self
    {
        $this->diaadmEmp = $diaadmEmp;

        return $this;
    }

    public function getDiatrafEmp(): ?int
    {
        return $this->diatrafEmp;
    }

    public function setDiatrafEmp(?int $diatrafEmp): self
    {
        $this->diatrafEmp = $diatrafEmp;

        return $this;
    }

    public function getDiacartEmp(): ?int
    {
        return $this->diacartEmp;
    }

    public function setDiacartEmp(?int $diacartEmp): self
    {
        $this->diacartEmp = $diacartEmp;

        return $this;
    }

    public function getDiaperEmp(): ?int
    {
        return $this->diaperEmp;
    }

    public function setDiaperEmp(?int $diaperEmp): self
    {
        $this->diaperEmp = $diaperEmp;

        return $this;
    }

    public function getObservEmp(): ?bool
    {
        return $this->observEmp;
    }

    public function setObservEmp(bool $observEmp): self
    {
        $this->observEmp = $observEmp;

        return $this;
    }

    public function getComercialEmp(): ?bool
    {
        return $this->comercialEmp;
    }

    public function setComercialEmp(bool $comercialEmp): self
    {
        $this->comercialEmp = $comercialEmp;

        return $this;
    }

    public function getLluviaEmp(): ?bool
    {
        return $this->lluviaEmp;
    }

    public function setLluviaEmp(bool $lluviaEmp): self
    {
        $this->lluviaEmp = $lluviaEmp;

        return $this;
    }

    public function getNrefEmp(): ?bool
    {
        return $this->nrefEmp;
    }

    public function setNrefEmp(bool $nrefEmp): self
    {
        $this->nrefEmp = $nrefEmp;

        return $this;
    }

    public function getDuplinrefEmp(): ?bool
    {
        return $this->duplinrefEmp;
    }

    public function setDuplinrefEmp(bool $duplinrefEmp): self
    {
        $this->duplinrefEmp = $duplinrefEmp;

        return $this;
    }

    public function getAlbnrefEmp(): ?int
    {
        return $this->albnrefEmp;
    }

    public function setAlbnrefEmp(?int $albnrefEmp): self
    {
        $this->albnrefEmp = $albnrefEmp;

        return $this;
    }

    public function getLlanrefEmp(): ?int
    {
        return $this->llanrefEmp;
    }

    public function setLlanrefEmp(?int $llanrefEmp): self
    {
        $this->llanrefEmp = $llanrefEmp;

        return $this;
    }

    public function getNacnrefEmp(): ?int
    {
        return $this->nacnrefEmp;
    }

    public function setNacnrefEmp(?int $nacnrefEmp): self
    {
        $this->nacnrefEmp = $nacnrefEmp;

        return $this;
    }

    public function getSrefEmp(): ?bool
    {
        return $this->srefEmp;
    }

    public function setSrefEmp(bool $srefEmp): self
    {
        $this->srefEmp = $srefEmp;

        return $this;
    }

    public function getDuplisrefEmp(): ?bool
    {
        return $this->duplisrefEmp;
    }

    public function setDuplisrefEmp(bool $duplisrefEmp): self
    {
        $this->duplisrefEmp = $duplisrefEmp;

        return $this;
    }

    public function getAlbsrefEmp(): ?int
    {
        return $this->albsrefEmp;
    }

    public function setAlbsrefEmp(?int $albsrefEmp): self
    {
        $this->albsrefEmp = $albsrefEmp;

        return $this;
    }

    public function getLlasrefEmp(): ?int
    {
        return $this->llasrefEmp;
    }

    public function setLlasrefEmp(?int $llasrefEmp): self
    {
        $this->llasrefEmp = $llasrefEmp;

        return $this;
    }

    public function getNacsrefEmp(): ?int
    {
        return $this->nacsrefEmp;
    }

    public function setNacsrefEmp(?int $nacsrefEmp): self
    {
        $this->nacsrefEmp = $nacsrefEmp;

        return $this;
    }

    public function getEmpfacturaEmp(): ?int
    {
        return $this->empfacturaEmp;
    }

    public function setEmpfacturaEmp(?int $empfacturaEmp): self
    {
        $this->empfacturaEmp = $empfacturaEmp;

        return $this;
    }

    public function getAbonosnumEmp(): ?bool
    {
        return $this->abonosnumEmp;
    }

    public function setAbonosnumEmp(bool $abonosnumEmp): self
    {
        $this->abonosnumEmp = $abonosnumEmp;

        return $this;
    }

    public function getEmpbEmp(): ?int
    {
        return $this->empbEmp;
    }

    public function setEmpbEmp(?int $empbEmp): self
    {
        $this->empbEmp = $empbEmp;

        return $this;
    }

    public function getZonascdpEmp(): ?bool
    {
        return $this->zonascdpEmp;
    }

    public function setZonascdpEmp(bool $zonascdpEmp): self
    {
        $this->zonascdpEmp = $zonascdpEmp;

        return $this;
    }

    public function getContabotipEmp(): ?bool
    {
        return $this->contabotipEmp;
    }

    public function setContabotipEmp(bool $contabotipEmp): self
    {
        $this->contabotipEmp = $contabotipEmp;

        return $this;
    }

    public function getPasecontEmp(): ?bool
    {
        return $this->pasecontEmp;
    }

    public function setPasecontEmp(bool $pasecontEmp): self
    {
        $this->pasecontEmp = $pasecontEmp;

        return $this;
    }

    public function getBordiarioEmp(): ?bool
    {
        return $this->bordiarioEmp;
    }

    public function setBordiarioEmp(bool $bordiarioEmp): self
    {
        $this->bordiarioEmp = $bordiarioEmp;

        return $this;
    }

    public function getAplidestEmp(): ?string
    {
        return $this->aplidestEmp;
    }

    public function setAplidestEmp(?string $aplidestEmp): self
    {
        $this->aplidestEmp = $aplidestEmp;

        return $this;
    }

    public function getMonedaEmp(): ?string
    {
        return $this->monedaEmp;
    }

    public function setMonedaEmp(?string $monedaEmp): self
    {
        $this->monedaEmp = $monedaEmp;

        return $this;
    }

    public function getCosvehEmp(): ?bool
    {
        return $this->cosvehEmp;
    }

    public function setCosvehEmp(?bool $cosvehEmp): self
    {
        $this->cosvehEmp = $cosvehEmp;

        return $this;
    }

    public function getClidebEmp(): ?int
    {
        return $this->clidebEmp;
    }

    public function setClidebEmp(?int $clidebEmp): self
    {
        $this->clidebEmp = $clidebEmp;

        return $this;
    }

    public function getCtacompraEmp(): ?string
    {
        return $this->ctacompraEmp;
    }

    public function setCtacompraEmp(?string $ctacompraEmp): self
    {
        $this->ctacompraEmp = $ctacompraEmp;

        return $this;
    }

    public function getRepnrefEmp(): ?int
    {
        return $this->repnrefEmp;
    }

    public function setRepnrefEmp(?int $repnrefEmp): self
    {
        $this->repnrefEmp = $repnrefEmp;

        return $this;
    }

    public function getRepsrefEmp(): ?int
    {
        return $this->repsrefEmp;
    }

    public function setRepsrefEmp(?int $repsrefEmp): self
    {
        $this->repsrefEmp = $repsrefEmp;

        return $this;
    }

    public function getStrncliEmp(): ?bool
    {
        return $this->strncliEmp;
    }

    public function setStrncliEmp(bool $strncliEmp): self
    {
        $this->strncliEmp = $strncliEmp;

        return $this;
    }

    public function getStrnmenEmp(): ?bool
    {
        return $this->strnmenEmp;
    }

    public function setStrnmenEmp(bool $strnmenEmp): self
    {
        $this->strnmenEmp = $strnmenEmp;

        return $this;
    }

    public function getStrncomEmp(): ?bool
    {
        return $this->strncomEmp;
    }

    public function setStrncomEmp(bool $strncomEmp): self
    {
        $this->strncomEmp = $strncomEmp;

        return $this;
    }

    public function getStrntipEmp(): ?bool
    {
        return $this->strntipEmp;
    }

    public function setStrntipEmp(bool $strntipEmp): self
    {
        $this->strntipEmp = $strntipEmp;

        return $this;
    }

    public function getStrntarEmp(): ?bool
    {
        return $this->strntarEmp;
    }

    public function setStrntarEmp(bool $strntarEmp): self
    {
        $this->strntarEmp = $strntarEmp;

        return $this;
    }

    public function getStrnpreEmp(): ?bool
    {
        return $this->strnpreEmp;
    }

    public function setStrnpreEmp(bool $strnpreEmp): self
    {
        $this->strnpreEmp = $strnpreEmp;

        return $this;
    }

    public function getStrnpobEmp(): ?bool
    {
        return $this->strnpobEmp;
    }

    public function setStrnpobEmp(bool $strnpobEmp): self
    {
        $this->strnpobEmp = $strnpobEmp;

        return $this;
    }

    public function getStrndisEmp(): ?bool
    {
        return $this->strndisEmp;
    }

    public function setStrndisEmp(bool $strndisEmp): self
    {
        $this->strndisEmp = $strndisEmp;

        return $this;
    }

    public function getNfcomEmp(): ?int
    {
        return $this->nfcomEmp;
    }

    public function setNfcomEmp(?int $nfcomEmp): self
    {
        $this->nfcomEmp = $nfcomEmp;

        return $this;
    }

    public function getStrnguiaEmp(): ?bool
    {
        return $this->strnguiaEmp;
    }

    public function setStrnguiaEmp(?bool $strnguiaEmp): self
    {
        $this->strnguiaEmp = $strnguiaEmp;

        return $this;
    }

    public function getRegismerEmp(): ?string
    {
        return $this->regismerEmp;
    }

    public function setRegismerEmp(?string $regismerEmp): self
    {
        $this->regismerEmp = $regismerEmp;

        return $this;
    }

    public function getCtaretcliEmp(): ?string
    {
        return $this->ctaretcliEmp;
    }

    public function setCtaretcliEmp(?string $ctaretcliEmp): self
    {
        $this->ctaretcliEmp = $ctaretcliEmp;

        return $this;
    }

    public function getCtaretcliextEmp(): ?string
    {
        return $this->ctaretcliextEmp;
    }

    public function setCtaretcliextEmp(?string $ctaretcliextEmp): self
    {
        $this->ctaretcliextEmp = $ctaretcliextEmp;

        return $this;
    }

    public function getCliintEmp(): ?int
    {
        return $this->cliintEmp;
    }

    public function setCliintEmp(?int $cliintEmp): self
    {
        $this->cliintEmp = $cliintEmp;

        return $this;
    }

    public function getNumserieEmp(): ?bool
    {
        return $this->numserieEmp;
    }

    public function setNumserieEmp(?bool $numserieEmp): self
    {
        $this->numserieEmp = $numserieEmp;

        return $this;
    }

    public function getDuplinrefintEmp(): ?bool
    {
        return $this->duplinrefintEmp;
    }

    public function setDuplinrefintEmp(?bool $duplinrefintEmp): self
    {
        $this->duplinrefintEmp = $duplinrefintEmp;

        return $this;
    }

    public function getDuplisrefintEmp(): ?bool
    {
        return $this->duplisrefintEmp;
    }

    public function setDuplisrefintEmp(?bool $duplisrefintEmp): self
    {
        $this->duplisrefintEmp = $duplisrefintEmp;

        return $this;
    }

    public function getCodsepaEmp(): ?string
    {
        return $this->codsepaEmp;
    }

    public function setCodsepaEmp(?string $codsepaEmp): self
    {
        $this->codsepaEmp = $codsepaEmp;

        return $this;
    }

    public function getNliqreeEmp(): ?int
    {
        return $this->nliqreeEmp;
    }

    public function setNliqreeEmp(?int $nliqreeEmp): self
    {
        $this->nliqreeEmp = $nliqreeEmp;

        return $this;
    }

    public function getAvisofacmailEmp(): ?string
    {
        return $this->avisofacmailEmp;
    }

    public function setAvisofacmailEmp(?string $avisofacmailEmp): self
    {
        $this->avisofacmailEmp = $avisofacmailEmp;

        return $this;
    }


}
