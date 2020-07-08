<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manipulaciones
 *
 * @ORM\Table(name="Manipulaciones")
 * @ORM\Entity
 */
class Manipulaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Man", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMan;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Man", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMan;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Man", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numMan;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Man", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linMan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Man", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecMan;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hor_Man", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horMan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Persona_Man", type="string", length=50, nullable=true)
     */
    private $personaMan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto_Man", type="string", length=500, nullable=true)
     */
    private $textoMan;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipManip_Man", type="string", length=5, nullable=true)
     */
    private $tipmanipMan;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Man", type="smallint", nullable=true)
     */
    private $usuMan;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecProxima_Man", type="datetime", nullable=true)
     */
    private $fecproximaMan;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorProxima_Man", type="datetime", nullable=true)
     */
    private $horproximaMan;

    public function getSucursalMan(): ?int
    {
        return $this->sucursalMan;
    }

    public function getEmpMan(): ?int
    {
        return $this->empMan;
    }

    public function getNumMan(): ?int
    {
        return $this->numMan;
    }

    public function getLinMan(): ?int
    {
        return $this->linMan;
    }

    public function getFecMan(): ?\DateTimeInterface
    {
        return $this->fecMan;
    }

    public function getHorMan(): ?\DateTimeInterface
    {
        return $this->horMan;
    }

    public function getPersonaMan(): ?string
    {
        return $this->personaMan;
    }

    public function setPersonaMan(?string $personaMan): self
    {
        $this->personaMan = $personaMan;

        return $this;
    }

    public function getTextoMan(): ?string
    {
        return $this->textoMan;
    }

    public function setTextoMan(?string $textoMan): self
    {
        $this->textoMan = $textoMan;

        return $this;
    }

    public function getTipmanipMan(): ?string
    {
        return $this->tipmanipMan;
    }

    public function setTipmanipMan(?string $tipmanipMan): self
    {
        $this->tipmanipMan = $tipmanipMan;

        return $this;
    }

    public function getUsuMan(): ?int
    {
        return $this->usuMan;
    }

    public function setUsuMan(?int $usuMan): self
    {
        $this->usuMan = $usuMan;

        return $this;
    }

    public function getFecproximaMan(): ?\DateTimeInterface
    {
        return $this->fecproximaMan;
    }

    public function setFecproximaMan(?\DateTimeInterface $fecproximaMan): self
    {
        $this->fecproximaMan = $fecproximaMan;

        return $this;
    }

    public function getHorproximaMan(): ?\DateTimeInterface
    {
        return $this->horproximaMan;
    }

    public function setHorproximaMan(?\DateTimeInterface $horproximaMan): self
    {
        $this->horproximaMan = $horproximaMan;

        return $this;
    }


}
