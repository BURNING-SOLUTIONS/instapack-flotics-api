<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajeros
 *
 * @ORM\Table(name="mensajeros", indexes={@ORM\Index(name="_dta_index_mensajeros_77_501576825__K4_K46_2_3_9987_4364", columns={"Cod_Men", "BajaTem_Men"})})
 * @ORM\Entity
 */
class Mensajeros
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Men", type="boolean", nullable=false)
     */
    private $bajaMen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Men", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Men", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMen = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Men", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Men", type="string", length=40, nullable=true)
     */
    private $nomMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Men", type="string", length=50, nullable=true)
     */
    private $domMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Men", type="string", length=25, nullable=true)
     */
    private $paisMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Men", type="string", length=35, nullable=true)
     */
    private $pobMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Men", type="integer", nullable=true)
     */
    private $cdpMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Men", type="integer", nullable=true)
     */
    private $telMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Men", type="string", length=13, nullable=true)
     */
    private $nifMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Men", type="smallint", nullable=true)
     */
    private $fpaMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dvto_Men", type="smallint", nullable=true)
     */
    private $dvtoMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dia_Men", type="smallint", nullable=true)
     */
    private $diaMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Men", type="smallint", nullable=true)
     */
    private $bcoMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Men", type="smallint", nullable=true)
     */
    private $ageMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Men", type="smallint", nullable=true)
     */
    private $dcMen = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Men", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Men", type="string", length=10, nullable=true)
     */
    private $ctcMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Afi_Men", type="string", length=12, nullable=true)
     */
    private $afiMen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecalta_Men", type="datetime", nullable=true)
     */
    private $fecaltaMen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecReno_Men", type="datetime", nullable=true)
     */
    private $fecrenoMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Jor_Men", type="string", length=2, nullable=true)
     */
    private $jorMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Veh_Men", type="string", length=2, nullable=true)
     */
    private $vehMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Iva_Men", type="smallint", nullable=true)
     */
    private $ivaMen = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Recequi_Men", type="smallint", nullable=true)
     */
    private $recequiMen = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Deposito_Men", type="float", precision=53, scale=0, nullable=true)
     */
    private $depositoMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Material_Men", type="string", length=120, nullable=true)
     */
    private $materialMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Numfac_Men", type="integer", nullable=true)
     */
    private $numfacMen = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Salario_Men", type="float", precision=53, scale=0, nullable=true)
     */
    private $salarioMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Matricula_Men", type="string", length=5, nullable=true)
     */
    private $matriculaMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LLuvia_Men", type="smallint", nullable=true)
     */
    private $lluviaMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Busca_Men", type="string", length=10, nullable=true)
     */
    private $buscaMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndom_Men", type="smallint", nullable=true)
     */
    private $ndomMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdom_Men", type="string", length=3, nullable=true)
     */
    private $tdomMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdom_Men", type="string", length=10, nullable=true)
     */
    private $pdomMen;

    /**
     * @var bool
     *
     * @ORM\Column(name="Libre_Men", type="boolean", nullable=false)
     */
    private $libreMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LibreZona_Men", type="string", length=5, nullable=true)
     */
    private $librezonaMen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LibreHora_Men", type="datetime", nullable=true)
     */
    private $librehoraMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tar_Men", type="string", length=5, nullable=true)
     */
    private $tarMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LibreRut_Men", type="string", length=5, nullable=true)
     */
    private $librerutMen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fuera_Men", type="smallint", nullable=true)
     */
    private $fueraMen = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_Men", type="string", length=40, nullable=true)
     */
    private $emailMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IcoVisual_Men", type="string", length=2, nullable=true)
     */
    private $icovisualMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Foto_Men", type="blob", nullable=true)
     */
    private $fotoMen;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="BajaTem_Men", type="boolean", nullable=true)
     */
    private $bajatemMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Agrup_Men", type="string", length=10, nullable=true)
     */
    private $agrupMen;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PorCarbu_Men", type="float", precision=53, scale=0, nullable=true)
     */
    private $porcarbuMen;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CarbuVta_Men", type="boolean", nullable=true)
     */
    private $carbuvtaMen;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Transmitido_Men", type="boolean", nullable=true)
     */
    private $transmitidoMen;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Men", type="string", length=4, nullable=true)
     */
    private $ibanMen;

    public function getBajaMen(): ?bool
    {
        return $this->bajaMen;
    }

    public function setBajaMen(bool $bajaMen): self
    {
        $this->bajaMen = $bajaMen;

        return $this;
    }

    public function getSucursalMen(): ?int
    {
        return $this->sucursalMen;
    }

    public function getEmpMen(): ?int
    {
        return $this->empMen;
    }

    public function getCodMen(): ?int
    {
        return $this->codMen;
    }

    public function getNomMen(): ?string
    {
        return $this->nomMen;
    }

    public function setNomMen(?string $nomMen): self
    {
        $this->nomMen = $nomMen;

        return $this;
    }

    public function getDomMen(): ?string
    {
        return $this->domMen;
    }

    public function setDomMen(?string $domMen): self
    {
        $this->domMen = $domMen;

        return $this;
    }

    public function getPaisMen(): ?string
    {
        return $this->paisMen;
    }

    public function setPaisMen(?string $paisMen): self
    {
        $this->paisMen = $paisMen;

        return $this;
    }

    public function getPobMen(): ?string
    {
        return $this->pobMen;
    }

    public function setPobMen(?string $pobMen): self
    {
        $this->pobMen = $pobMen;

        return $this;
    }

    public function getCdpMen(): ?int
    {
        return $this->cdpMen;
    }

    public function setCdpMen(?int $cdpMen): self
    {
        $this->cdpMen = $cdpMen;

        return $this;
    }

    public function getTelMen(): ?int
    {
        return $this->telMen;
    }

    public function setTelMen(?int $telMen): self
    {
        $this->telMen = $telMen;

        return $this;
    }

    public function getNifMen(): ?string
    {
        return $this->nifMen;
    }

    public function setNifMen(?string $nifMen): self
    {
        $this->nifMen = $nifMen;

        return $this;
    }

    public function getFpaMen(): ?int
    {
        return $this->fpaMen;
    }

    public function setFpaMen(?int $fpaMen): self
    {
        $this->fpaMen = $fpaMen;

        return $this;
    }

    public function getDvtoMen(): ?int
    {
        return $this->dvtoMen;
    }

    public function setDvtoMen(?int $dvtoMen): self
    {
        $this->dvtoMen = $dvtoMen;

        return $this;
    }

    public function getDiaMen(): ?int
    {
        return $this->diaMen;
    }

    public function setDiaMen(?int $diaMen): self
    {
        $this->diaMen = $diaMen;

        return $this;
    }

    public function getBcoMen(): ?int
    {
        return $this->bcoMen;
    }

    public function setBcoMen(?int $bcoMen): self
    {
        $this->bcoMen = $bcoMen;

        return $this;
    }

    public function getAgeMen(): ?int
    {
        return $this->ageMen;
    }

    public function setAgeMen(?int $ageMen): self
    {
        $this->ageMen = $ageMen;

        return $this;
    }

    public function getDcMen(): ?int
    {
        return $this->dcMen;
    }

    public function setDcMen(?int $dcMen): self
    {
        $this->dcMen = $dcMen;

        return $this;
    }

    public function getCtaMen(): ?float
    {
        return $this->ctaMen;
    }

    public function setCtaMen(?float $ctaMen): self
    {
        $this->ctaMen = $ctaMen;

        return $this;
    }

    public function getCtcMen(): ?string
    {
        return $this->ctcMen;
    }

    public function setCtcMen(?string $ctcMen): self
    {
        $this->ctcMen = $ctcMen;

        return $this;
    }

    public function getAfiMen(): ?string
    {
        return $this->afiMen;
    }

    public function setAfiMen(?string $afiMen): self
    {
        $this->afiMen = $afiMen;

        return $this;
    }

    public function getFecaltaMen(): ?\DateTimeInterface
    {
        return $this->fecaltaMen;
    }

    public function setFecaltaMen(?\DateTimeInterface $fecaltaMen): self
    {
        $this->fecaltaMen = $fecaltaMen;

        return $this;
    }

    public function getFecrenoMen(): ?\DateTimeInterface
    {
        return $this->fecrenoMen;
    }

    public function setFecrenoMen(?\DateTimeInterface $fecrenoMen): self
    {
        $this->fecrenoMen = $fecrenoMen;

        return $this;
    }

    public function getJorMen(): ?string
    {
        return $this->jorMen;
    }

    public function setJorMen(?string $jorMen): self
    {
        $this->jorMen = $jorMen;

        return $this;
    }

    public function getVehMen(): ?string
    {
        return $this->vehMen;
    }

    public function setVehMen(?string $vehMen): self
    {
        $this->vehMen = $vehMen;

        return $this;
    }

    public function getIvaMen(): ?int
    {
        return $this->ivaMen;
    }

    public function setIvaMen(?int $ivaMen): self
    {
        $this->ivaMen = $ivaMen;

        return $this;
    }

    public function getRecequiMen(): ?int
    {
        return $this->recequiMen;
    }

    public function setRecequiMen(?int $recequiMen): self
    {
        $this->recequiMen = $recequiMen;

        return $this;
    }

    public function getDepositoMen(): ?float
    {
        return $this->depositoMen;
    }

    public function setDepositoMen(?float $depositoMen): self
    {
        $this->depositoMen = $depositoMen;

        return $this;
    }

    public function getMaterialMen(): ?string
    {
        return $this->materialMen;
    }

    public function setMaterialMen(?string $materialMen): self
    {
        $this->materialMen = $materialMen;

        return $this;
    }

    public function getNumfacMen(): ?int
    {
        return $this->numfacMen;
    }

    public function setNumfacMen(?int $numfacMen): self
    {
        $this->numfacMen = $numfacMen;

        return $this;
    }

    public function getSalarioMen(): ?float
    {
        return $this->salarioMen;
    }

    public function setSalarioMen(?float $salarioMen): self
    {
        $this->salarioMen = $salarioMen;

        return $this;
    }

    public function getMatriculaMen(): ?string
    {
        return $this->matriculaMen;
    }

    public function setMatriculaMen(?string $matriculaMen): self
    {
        $this->matriculaMen = $matriculaMen;

        return $this;
    }

    public function getLluviaMen(): ?int
    {
        return $this->lluviaMen;
    }

    public function setLluviaMen(?int $lluviaMen): self
    {
        $this->lluviaMen = $lluviaMen;

        return $this;
    }

    public function getBuscaMen(): ?string
    {
        return $this->buscaMen;
    }

    public function setBuscaMen(?string $buscaMen): self
    {
        $this->buscaMen = $buscaMen;

        return $this;
    }

    public function getNdomMen(): ?int
    {
        return $this->ndomMen;
    }

    public function setNdomMen(?int $ndomMen): self
    {
        $this->ndomMen = $ndomMen;

        return $this;
    }

    public function getTdomMen(): ?string
    {
        return $this->tdomMen;
    }

    public function setTdomMen(?string $tdomMen): self
    {
        $this->tdomMen = $tdomMen;

        return $this;
    }

    public function getPdomMen(): ?string
    {
        return $this->pdomMen;
    }

    public function setPdomMen(?string $pdomMen): self
    {
        $this->pdomMen = $pdomMen;

        return $this;
    }

    public function getLibreMen(): ?bool
    {
        return $this->libreMen;
    }

    public function setLibreMen(bool $libreMen): self
    {
        $this->libreMen = $libreMen;

        return $this;
    }

    public function getLibrezonaMen(): ?string
    {
        return $this->librezonaMen;
    }

    public function setLibrezonaMen(?string $librezonaMen): self
    {
        $this->librezonaMen = $librezonaMen;

        return $this;
    }

    public function getLibrehoraMen(): ?\DateTimeInterface
    {
        return $this->librehoraMen;
    }

    public function setLibrehoraMen(?\DateTimeInterface $librehoraMen): self
    {
        $this->librehoraMen = $librehoraMen;

        return $this;
    }

    public function getTarMen(): ?string
    {
        return $this->tarMen;
    }

    public function setTarMen(?string $tarMen): self
    {
        $this->tarMen = $tarMen;

        return $this;
    }

    public function getLibrerutMen(): ?string
    {
        return $this->librerutMen;
    }

    public function setLibrerutMen(?string $librerutMen): self
    {
        $this->librerutMen = $librerutMen;

        return $this;
    }

    public function getFueraMen(): ?int
    {
        return $this->fueraMen;
    }

    public function setFueraMen(?int $fueraMen): self
    {
        $this->fueraMen = $fueraMen;

        return $this;
    }

    public function getEmailMen(): ?string
    {
        return $this->emailMen;
    }

    public function setEmailMen(?string $emailMen): self
    {
        $this->emailMen = $emailMen;

        return $this;
    }

    public function getIcovisualMen(): ?string
    {
        return $this->icovisualMen;
    }

    public function setIcovisualMen(?string $icovisualMen): self
    {
        $this->icovisualMen = $icovisualMen;

        return $this;
    }

    public function getFotoMen()
    {
        return $this->fotoMen;
    }

    public function setFotoMen($fotoMen): self
    {
        $this->fotoMen = $fotoMen;

        return $this;
    }

    public function getBajatemMen(): ?bool
    {
        return $this->bajatemMen;
    }

    public function setBajatemMen(?bool $bajatemMen): self
    {
        $this->bajatemMen = $bajatemMen;

        return $this;
    }

    public function getAgrupMen(): ?string
    {
        return $this->agrupMen;
    }

    public function setAgrupMen(?string $agrupMen): self
    {
        $this->agrupMen = $agrupMen;

        return $this;
    }

    public function getPorcarbuMen(): ?float
    {
        return $this->porcarbuMen;
    }

    public function setPorcarbuMen(?float $porcarbuMen): self
    {
        $this->porcarbuMen = $porcarbuMen;

        return $this;
    }

    public function getCarbuvtaMen(): ?bool
    {
        return $this->carbuvtaMen;
    }

    public function setCarbuvtaMen(?bool $carbuvtaMen): self
    {
        $this->carbuvtaMen = $carbuvtaMen;

        return $this;
    }

    public function getTransmitidoMen(): ?bool
    {
        return $this->transmitidoMen;
    }

    public function setTransmitidoMen(?bool $transmitidoMen): self
    {
        $this->transmitidoMen = $transmitidoMen;

        return $this;
    }

    public function getIbanMen(): ?string
    {
        return $this->ibanMen;
    }

    public function setIbanMen(?string $ibanMen): self
    {
        $this->ibanMen = $ibanMen;

        return $this;
    }


}
