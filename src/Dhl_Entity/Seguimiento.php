<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguimiento
 *
 * @ORM\Table(name="Seguimiento")
 * @ORM\Entity
 */
class Seguimiento
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Seg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalSeg;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Seg", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empSeg;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Seg", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numSeg;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Seg", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linSeg;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Seg", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoSeg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Seg", type="datetime", nullable=true)
     */
    private $fecSeg;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hor_Seg", type="datetime", nullable=true)
     */
    private $horSeg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Seg", type="integer", nullable=true)
     */
    private $menSeg;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Seg", type="smallint", nullable=true)
     */
    private $usuSeg;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecSys_Seg", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecsysSeg;

    public function getSucursalSeg(): ?int
    {
        return $this->sucursalSeg;
    }

    public function getEmpSeg(): ?int
    {
        return $this->empSeg;
    }

    public function getNumSeg(): ?int
    {
        return $this->numSeg;
    }

    public function getLinSeg(): ?int
    {
        return $this->linSeg;
    }

    public function getTipoSeg(): ?string
    {
        return $this->tipoSeg;
    }

    public function getFecSeg(): ?\DateTimeInterface
    {
        return $this->fecSeg;
    }

    public function setFecSeg(?\DateTimeInterface $fecSeg): self
    {
        $this->fecSeg = $fecSeg;

        return $this;
    }

    public function getHorSeg(): ?\DateTimeInterface
    {
        return $this->horSeg;
    }

    public function setHorSeg(?\DateTimeInterface $horSeg): self
    {
        $this->horSeg = $horSeg;

        return $this;
    }

    public function getMenSeg(): ?int
    {
        return $this->menSeg;
    }

    public function setMenSeg(?int $menSeg): self
    {
        $this->menSeg = $menSeg;

        return $this;
    }

    public function getUsuSeg(): ?int
    {
        return $this->usuSeg;
    }

    public function setUsuSeg(?int $usuSeg): self
    {
        $this->usuSeg = $usuSeg;

        return $this;
    }

    public function getFecsysSeg(): ?\DateTimeInterface
    {
        return $this->fecsysSeg;
    }


}
