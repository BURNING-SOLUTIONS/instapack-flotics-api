<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", uniqueConstraints={@ORM\UniqueConstraint(name="Clv2-Usu", columns={"Nom_Usu"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Usu", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Usu", type="string", length=30, nullable=true)
     */
    private $nomUsu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Com_Usu", type="smallint", nullable=true)
     */
    private $comUsu;

    /**
     * @var bool
     *
     * @ORM\Column(name="Estado_Usu", type="boolean", nullable=false)
     */
    private $estadoUsu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Caja_Usu", type="boolean", nullable=false)
     */
    private $cajaUsu = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaLoc_Usu", type="string", length=50, nullable=true)
     */
    private $llalocUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaPrv_Usu", type="string", length=50, nullable=true)
     */
    private $llaprvUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaNac_Usu", type="string", length=50, nullable=true)
     */
    private $llanacUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaInt_Usu", type="string", length=50, nullable=true)
     */
    private $llaintUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaAsig_Usu", type="string", length=50, nullable=true)
     */
    private $llaasigUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaRee_Usu", type="string", length=50, nullable=true)
     */
    private $llareeUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaInc_Usu", type="string", length=50, nullable=true)
     */
    private $llaincUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaCaj_Usu", type="string", length=50, nullable=true)
     */
    private $llacajUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LLaAnt_Usu", type="string", length=50, nullable=true)
     */
    private $llaantUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AlbLoc_Usu", type="string", length=50, nullable=true)
     */
    private $alblocUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="AlbNac_Usu", type="string", length=50, nullable=true)
     */
    private $albnacUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EtiNac_Usu", type="string", length=50, nullable=true)
     */
    private $etinacUsu;

    /**
     * @var bool
     *
     * @ORM\Column(name="PidePwd_Usu", type="boolean", nullable=false)
     */
    private $pidepwdUsu = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password_Usu", type="string", length=7, nullable=true)
     */
    private $passwordUsu;

    /**
     * @var bool
     *
     * @ORM\Column(name="VerVta_Usu", type="boolean", nullable=false)
     */
    private $vervtaUsu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="VerCos_Usu", type="boolean", nullable=false)
     */
    private $vercosUsu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="VerDis_Usu", type="boolean", nullable=false)
     */
    private $verdisUsu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="VerArr_Usu", type="boolean", nullable=false)
     */
    private $verarrUsu = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Llave_Usu", type="boolean", nullable=false)
     */
    private $llaveUsu = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Foto_usu", type="blob", nullable=true)
     */
    private $fotoUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Correo_Usu", type="string", length=1, nullable=true)
     */
    private $correoUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EtiTerm_Usu", type="string", length=50, nullable=true)
     */
    private $etitermUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ServidorSMTP_Usu", type="string", length=200, nullable=true)
     */
    private $servidorsmtpUsu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PuertoSMTP_Usu", type="smallint", nullable=true)
     */
    private $puertosmtpUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UsuarioSMTP_Usu", type="string", length=200, nullable=true)
     */
    private $usuariosmtpUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PasswordSMTP_Usu", type="string", length=200, nullable=true)
     */
    private $passwordsmtpUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CCRemitente_Usu", type="string", length=200, nullable=true)
     */
    private $ccremitenteUsu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RemitenteDesc_Usu", type="string", length=200, nullable=true)
     */
    private $remitentedescUsu;

    public function getCodUsu(): ?int
    {
        return $this->codUsu;
    }

    public function getNomUsu(): ?string
    {
        return $this->nomUsu;
    }

    public function setNomUsu(?string $nomUsu): self
    {
        $this->nomUsu = $nomUsu;

        return $this;
    }

    public function getComUsu(): ?int
    {
        return $this->comUsu;
    }

    public function setComUsu(?int $comUsu): self
    {
        $this->comUsu = $comUsu;

        return $this;
    }

    public function getEstadoUsu(): ?bool
    {
        return $this->estadoUsu;
    }

    public function setEstadoUsu(bool $estadoUsu): self
    {
        $this->estadoUsu = $estadoUsu;

        return $this;
    }

    public function getCajaUsu(): ?bool
    {
        return $this->cajaUsu;
    }

    public function setCajaUsu(bool $cajaUsu): self
    {
        $this->cajaUsu = $cajaUsu;

        return $this;
    }

    public function getLlalocUsu(): ?string
    {
        return $this->llalocUsu;
    }

    public function setLlalocUsu(?string $llalocUsu): self
    {
        $this->llalocUsu = $llalocUsu;

        return $this;
    }

    public function getLlaprvUsu(): ?string
    {
        return $this->llaprvUsu;
    }

    public function setLlaprvUsu(?string $llaprvUsu): self
    {
        $this->llaprvUsu = $llaprvUsu;

        return $this;
    }

    public function getLlanacUsu(): ?string
    {
        return $this->llanacUsu;
    }

    public function setLlanacUsu(?string $llanacUsu): self
    {
        $this->llanacUsu = $llanacUsu;

        return $this;
    }

    public function getLlaintUsu(): ?string
    {
        return $this->llaintUsu;
    }

    public function setLlaintUsu(?string $llaintUsu): self
    {
        $this->llaintUsu = $llaintUsu;

        return $this;
    }

    public function getLlaasigUsu(): ?string
    {
        return $this->llaasigUsu;
    }

    public function setLlaasigUsu(?string $llaasigUsu): self
    {
        $this->llaasigUsu = $llaasigUsu;

        return $this;
    }

    public function getLlareeUsu(): ?string
    {
        return $this->llareeUsu;
    }

    public function setLlareeUsu(?string $llareeUsu): self
    {
        $this->llareeUsu = $llareeUsu;

        return $this;
    }

    public function getLlaincUsu(): ?string
    {
        return $this->llaincUsu;
    }

    public function setLlaincUsu(?string $llaincUsu): self
    {
        $this->llaincUsu = $llaincUsu;

        return $this;
    }

    public function getLlacajUsu(): ?string
    {
        return $this->llacajUsu;
    }

    public function setLlacajUsu(?string $llacajUsu): self
    {
        $this->llacajUsu = $llacajUsu;

        return $this;
    }

    public function getLlaantUsu(): ?string
    {
        return $this->llaantUsu;
    }

    public function setLlaantUsu(?string $llaantUsu): self
    {
        $this->llaantUsu = $llaantUsu;

        return $this;
    }

    public function getAlblocUsu(): ?string
    {
        return $this->alblocUsu;
    }

    public function setAlblocUsu(?string $alblocUsu): self
    {
        $this->alblocUsu = $alblocUsu;

        return $this;
    }

    public function getAlbnacUsu(): ?string
    {
        return $this->albnacUsu;
    }

    public function setAlbnacUsu(?string $albnacUsu): self
    {
        $this->albnacUsu = $albnacUsu;

        return $this;
    }

    public function getEtinacUsu(): ?string
    {
        return $this->etinacUsu;
    }

    public function setEtinacUsu(?string $etinacUsu): self
    {
        $this->etinacUsu = $etinacUsu;

        return $this;
    }

    public function getPidepwdUsu(): ?bool
    {
        return $this->pidepwdUsu;
    }

    public function setPidepwdUsu(bool $pidepwdUsu): self
    {
        $this->pidepwdUsu = $pidepwdUsu;

        return $this;
    }

    public function getPasswordUsu(): ?string
    {
        return $this->passwordUsu;
    }

    public function setPasswordUsu(?string $passwordUsu): self
    {
        $this->passwordUsu = $passwordUsu;

        return $this;
    }

    public function getVervtaUsu(): ?bool
    {
        return $this->vervtaUsu;
    }

    public function setVervtaUsu(bool $vervtaUsu): self
    {
        $this->vervtaUsu = $vervtaUsu;

        return $this;
    }

    public function getVercosUsu(): ?bool
    {
        return $this->vercosUsu;
    }

    public function setVercosUsu(bool $vercosUsu): self
    {
        $this->vercosUsu = $vercosUsu;

        return $this;
    }

    public function getVerdisUsu(): ?bool
    {
        return $this->verdisUsu;
    }

    public function setVerdisUsu(bool $verdisUsu): self
    {
        $this->verdisUsu = $verdisUsu;

        return $this;
    }

    public function getVerarrUsu(): ?bool
    {
        return $this->verarrUsu;
    }

    public function setVerarrUsu(bool $verarrUsu): self
    {
        $this->verarrUsu = $verarrUsu;

        return $this;
    }

    public function getLlaveUsu(): ?bool
    {
        return $this->llaveUsu;
    }

    public function setLlaveUsu(bool $llaveUsu): self
    {
        $this->llaveUsu = $llaveUsu;

        return $this;
    }

    public function getFotoUsu()
    {
        return $this->fotoUsu;
    }

    public function setFotoUsu($fotoUsu): self
    {
        $this->fotoUsu = $fotoUsu;

        return $this;
    }

    public function getCorreoUsu(): ?string
    {
        return $this->correoUsu;
    }

    public function setCorreoUsu(?string $correoUsu): self
    {
        $this->correoUsu = $correoUsu;

        return $this;
    }

    public function getEtitermUsu(): ?string
    {
        return $this->etitermUsu;
    }

    public function setEtitermUsu(?string $etitermUsu): self
    {
        $this->etitermUsu = $etitermUsu;

        return $this;
    }

    public function getServidorsmtpUsu(): ?string
    {
        return $this->servidorsmtpUsu;
    }

    public function setServidorsmtpUsu(?string $servidorsmtpUsu): self
    {
        $this->servidorsmtpUsu = $servidorsmtpUsu;

        return $this;
    }

    public function getPuertosmtpUsu(): ?int
    {
        return $this->puertosmtpUsu;
    }

    public function setPuertosmtpUsu(?int $puertosmtpUsu): self
    {
        $this->puertosmtpUsu = $puertosmtpUsu;

        return $this;
    }

    public function getUsuariosmtpUsu(): ?string
    {
        return $this->usuariosmtpUsu;
    }

    public function setUsuariosmtpUsu(?string $usuariosmtpUsu): self
    {
        $this->usuariosmtpUsu = $usuariosmtpUsu;

        return $this;
    }

    public function getPasswordsmtpUsu(): ?string
    {
        return $this->passwordsmtpUsu;
    }

    public function setPasswordsmtpUsu(?string $passwordsmtpUsu): self
    {
        $this->passwordsmtpUsu = $passwordsmtpUsu;

        return $this;
    }

    public function getCcremitenteUsu(): ?string
    {
        return $this->ccremitenteUsu;
    }

    public function setCcremitenteUsu(?string $ccremitenteUsu): self
    {
        $this->ccremitenteUsu = $ccremitenteUsu;

        return $this;
    }

    public function getRemitentedescUsu(): ?string
    {
        return $this->remitentedescUsu;
    }

    public function setRemitentedescUsu(?string $remitentedescUsu): self
    {
        $this->remitentedescUsu = $remitentedescUsu;

        return $this;
    }


}
