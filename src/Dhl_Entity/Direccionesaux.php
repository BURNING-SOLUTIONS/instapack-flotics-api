<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Direccionesaux
 *
 * @ORM\Table(name="direccionesAux")
 * @ORM\Entity
 */
class Direccionesaux
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Dax", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalDax = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Dax", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empDax = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Dax", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numDax = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Dax", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linDax = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="UsuarioWeb_Dax", type="string", length=25, nullable=true)
     */
    private $usuariowebDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaveWeb_Dax", type="string", length=15, nullable=true)
     */
    private $clavewebDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Seguridad_Dax", type="string", length=150, nullable=true)
     */
    private $seguridadDax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AvisoSms_Dax", type="integer", nullable=true)
     */
    private $avisosmsDax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="AvisoEmail_Dax", type="integer", nullable=true)
     */
    private $avisoemailDax;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Transmitido_Dax", type="boolean", nullable=true)
     */
    private $transmitidoDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Movil_Dax", type="string", length=50, nullable=true)
     */
    private $movilDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mail_Dax", type="string", length=150, nullable=true)
     */
    private $mailDax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DesHor_Dax", type="datetime", nullable=true)
     */
    private $deshorDax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HasHor_Dax", type="datetime", nullable=true)
     */
    private $hashorDax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DesHor2_Dax", type="datetime", nullable=true)
     */
    private $deshor2Dax;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HasHor2_Dax", type="datetime", nullable=true)
     */
    private $hashor2Dax;

    /**
     * @var string
     *
     * @ORM\Column(name="RefVia_Dax", type="string", length=100, nullable=false)
     */
    private $refviaDax = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ruta_Dax", type="string", length=5, nullable=true)
     */
    private $rutaDax;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="EntDni_Dax", type="boolean", nullable=true)
     */
    private $entdniDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="FranjaHor_Dax", type="string", length=1, nullable=true)
     */
    private $franjahorDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre2_Dax", type="string", length=40, nullable=true)
     */
    private $nombre2Dax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsMen_Dax", type="string", length=120, nullable=true)
     */
    private $obsmenDax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EnviadoMail_Dax", type="smallint", nullable=true)
     */
    private $enviadomailDax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="EnviadoSMS_Dax", type="smallint", nullable=true)
     */
    private $enviadosmsDax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solicita_Dax", type="string", length=50, nullable=true)
     */
    private $solicitaDax;

    /**
     * @var bool
     *
     * @ORM\Column(name="ConcertadoRecogida_dax", type="boolean", nullable=false)
     */
    private $concertadorecogidaDax = '0';

    public function getSucursalDax(): ?int
    {
        return $this->sucursalDax;
    }

    public function getEmpDax(): ?int
    {
        return $this->empDax;
    }

    public function getNumDax(): ?int
    {
        return $this->numDax;
    }

    public function getLinDax(): ?int
    {
        return $this->linDax;
    }

    public function getUsuariowebDax(): ?string
    {
        return $this->usuariowebDax;
    }

    public function setUsuariowebDax(?string $usuariowebDax): self
    {
        $this->usuariowebDax = $usuariowebDax;

        return $this;
    }

    public function getClavewebDax(): ?string
    {
        return $this->clavewebDax;
    }

    public function setClavewebDax(?string $clavewebDax): self
    {
        $this->clavewebDax = $clavewebDax;

        return $this;
    }

    public function getSeguridadDax(): ?string
    {
        return $this->seguridadDax;
    }

    public function setSeguridadDax(?string $seguridadDax): self
    {
        $this->seguridadDax = $seguridadDax;

        return $this;
    }

    public function getAvisosmsDax(): ?int
    {
        return $this->avisosmsDax;
    }

    public function setAvisosmsDax(?int $avisosmsDax): self
    {
        $this->avisosmsDax = $avisosmsDax;

        return $this;
    }

    public function getAvisoemailDax(): ?int
    {
        return $this->avisoemailDax;
    }

    public function setAvisoemailDax(?int $avisoemailDax): self
    {
        $this->avisoemailDax = $avisoemailDax;

        return $this;
    }

    public function getTransmitidoDax(): ?bool
    {
        return $this->transmitidoDax;
    }

    public function setTransmitidoDax(?bool $transmitidoDax): self
    {
        $this->transmitidoDax = $transmitidoDax;

        return $this;
    }

    public function getMovilDax(): ?string
    {
        return $this->movilDax;
    }

    public function setMovilDax(?string $movilDax): self
    {
        $this->movilDax = $movilDax;

        return $this;
    }

    public function getMailDax(): ?string
    {
        return $this->mailDax;
    }

    public function setMailDax(?string $mailDax): self
    {
        $this->mailDax = $mailDax;

        return $this;
    }

    public function getDeshorDax(): ?\DateTimeInterface
    {
        return $this->deshorDax;
    }

    public function setDeshorDax(?\DateTimeInterface $deshorDax): self
    {
        $this->deshorDax = $deshorDax;

        return $this;
    }

    public function getHashorDax(): ?\DateTimeInterface
    {
        return $this->hashorDax;
    }

    public function setHashorDax(?\DateTimeInterface $hashorDax): self
    {
        $this->hashorDax = $hashorDax;

        return $this;
    }

    public function getDeshor2Dax(): ?\DateTimeInterface
    {
        return $this->deshor2Dax;
    }

    public function setDeshor2Dax(?\DateTimeInterface $deshor2Dax): self
    {
        $this->deshor2Dax = $deshor2Dax;

        return $this;
    }

    public function getHashor2Dax(): ?\DateTimeInterface
    {
        return $this->hashor2Dax;
    }

    public function setHashor2Dax(?\DateTimeInterface $hashor2Dax): self
    {
        $this->hashor2Dax = $hashor2Dax;

        return $this;
    }

    public function getRefviaDax(): ?string
    {
        return $this->refviaDax;
    }

    public function setRefviaDax(string $refviaDax): self
    {
        $this->refviaDax = $refviaDax;

        return $this;
    }

    public function getRutaDax(): ?string
    {
        return $this->rutaDax;
    }

    public function setRutaDax(?string $rutaDax): self
    {
        $this->rutaDax = $rutaDax;

        return $this;
    }

    public function getEntdniDax(): ?bool
    {
        return $this->entdniDax;
    }

    public function setEntdniDax(?bool $entdniDax): self
    {
        $this->entdniDax = $entdniDax;

        return $this;
    }

    public function getFranjahorDax(): ?string
    {
        return $this->franjahorDax;
    }

    public function setFranjahorDax(?string $franjahorDax): self
    {
        $this->franjahorDax = $franjahorDax;

        return $this;
    }

    public function getNombre2Dax(): ?string
    {
        return $this->nombre2Dax;
    }

    public function setNombre2Dax(?string $nombre2Dax): self
    {
        $this->nombre2Dax = $nombre2Dax;

        return $this;
    }

    public function getObsmenDax(): ?string
    {
        return $this->obsmenDax;
    }

    public function setObsmenDax(?string $obsmenDax): self
    {
        $this->obsmenDax = $obsmenDax;

        return $this;
    }

    public function getEnviadomailDax(): ?int
    {
        return $this->enviadomailDax;
    }

    public function setEnviadomailDax(?int $enviadomailDax): self
    {
        $this->enviadomailDax = $enviadomailDax;

        return $this;
    }

    public function getEnviadosmsDax(): ?int
    {
        return $this->enviadosmsDax;
    }

    public function setEnviadosmsDax(?int $enviadosmsDax): self
    {
        $this->enviadosmsDax = $enviadosmsDax;

        return $this;
    }

    public function getSolicitaDax(): ?string
    {
        return $this->solicitaDax;
    }

    public function setSolicitaDax(?string $solicitaDax): self
    {
        $this->solicitaDax = $solicitaDax;

        return $this;
    }

    public function getConcertadorecogidaDax(): ?bool
    {
        return $this->concertadorecogidaDax;
    }

    public function setConcertadorecogidaDax(bool $concertadorecogidaDax): self
    {
        $this->concertadorecogidaDax = $concertadorecogidaDax;

        return $this;
    }


}
