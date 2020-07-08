<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mensajes
 *
 * @ORM\Table(name="mensajes")
 * @ORM\Entity
 */
class Mensajes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Equipo_Mai", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $equipoMai;

    /**
     * @var int
     *
     * @ORM\Column(name="Orden_Mai", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ordenMai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto1_Mai", type="string", length=255, nullable=true)
     */
    private $texto1Mai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto2_Mai", type="string", length=250, nullable=true)
     */
    private $texto2Mai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto3_Mai", type="string", length=50, nullable=true)
     */
    private $texto3Mai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto4_Mai", type="string", length=50, nullable=true)
     */
    private $texto4Mai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Origen_Mai", type="string", length=50, nullable=true)
     */
    private $origenMai;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Mai", type="datetime", nullable=true)
     */
    private $fechaMai;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hora_Mai", type="datetime", nullable=true)
     */
    private $horaMai;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Leido_Mai", type="boolean", nullable=true)
     */
    private $leidoMai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Mai", type="string", length=50, nullable=true)
     */
    private $desMai;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DesOri_Mai", type="string", length=50, nullable=true)
     */
    private $desoriMai;

    /**
     * @var int
     *
     * @ORM\Column(name="CodMsg_Mai", type="smallint", nullable=false)
     */
    private $codmsgMai = '0';

    public function getEquipoMai(): ?string
    {
        return $this->equipoMai;
    }

    public function getOrdenMai(): ?int
    {
        return $this->ordenMai;
    }

    public function getTexto1Mai(): ?string
    {
        return $this->texto1Mai;
    }

    public function setTexto1Mai(?string $texto1Mai): self
    {
        $this->texto1Mai = $texto1Mai;

        return $this;
    }

    public function getTexto2Mai(): ?string
    {
        return $this->texto2Mai;
    }

    public function setTexto2Mai(?string $texto2Mai): self
    {
        $this->texto2Mai = $texto2Mai;

        return $this;
    }

    public function getTexto3Mai(): ?string
    {
        return $this->texto3Mai;
    }

    public function setTexto3Mai(?string $texto3Mai): self
    {
        $this->texto3Mai = $texto3Mai;

        return $this;
    }

    public function getTexto4Mai(): ?string
    {
        return $this->texto4Mai;
    }

    public function setTexto4Mai(?string $texto4Mai): self
    {
        $this->texto4Mai = $texto4Mai;

        return $this;
    }

    public function getOrigenMai(): ?string
    {
        return $this->origenMai;
    }

    public function setOrigenMai(?string $origenMai): self
    {
        $this->origenMai = $origenMai;

        return $this;
    }

    public function getFechaMai(): ?\DateTimeInterface
    {
        return $this->fechaMai;
    }

    public function setFechaMai(?\DateTimeInterface $fechaMai): self
    {
        $this->fechaMai = $fechaMai;

        return $this;
    }

    public function getHoraMai(): ?\DateTimeInterface
    {
        return $this->horaMai;
    }

    public function setHoraMai(?\DateTimeInterface $horaMai): self
    {
        $this->horaMai = $horaMai;

        return $this;
    }

    public function getLeidoMai(): ?bool
    {
        return $this->leidoMai;
    }

    public function setLeidoMai(?bool $leidoMai): self
    {
        $this->leidoMai = $leidoMai;

        return $this;
    }

    public function getDesMai(): ?string
    {
        return $this->desMai;
    }

    public function setDesMai(?string $desMai): self
    {
        $this->desMai = $desMai;

        return $this;
    }

    public function getDesoriMai(): ?string
    {
        return $this->desoriMai;
    }

    public function setDesoriMai(?string $desoriMai): self
    {
        $this->desoriMai = $desoriMai;

        return $this;
    }

    public function getCodmsgMai(): ?int
    {
        return $this->codmsgMai;
    }

    public function setCodmsgMai(int $codmsgMai): self
    {
        $this->codmsgMai = $codmsgMai;

        return $this;
    }


}
