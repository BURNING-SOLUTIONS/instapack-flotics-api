<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguibul
 *
 * @ORM\Table(name="SeguiBul")
 * @ORM\Entity
 */
class Seguibul
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Sgb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalSgb;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Sgb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empSgb;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Sgb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numSgb;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Sgb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linSgb;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Sgb", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoSgb;

    /**
     * @var int
     *
     * @ORM\Column(name="NBul_Sgb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nbulSgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofiori_Sgb", type="integer", nullable=true)
     */
    private $ofioriSgb;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Sgb", type="string", length=100, nullable=true)
     */
    private $refSgb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Sgb", type="datetime", nullable=true)
     */
    private $fecSgb;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hor_Sgb", type="datetime", nullable=true)
     */
    private $horSgb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Sgb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pesSgb;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Sgb", type="float", precision=53, scale=0, nullable=true)
     */
    private $pesvolSgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Sgb", type="smallint", nullable=true)
     */
    private $dim1Sgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Sgb", type="smallint", nullable=true)
     */
    private $dim2Sgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Sgb", type="smallint", nullable=true)
     */
    private $dim3Sgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiLee_Sgb", type="integer", nullable=true)
     */
    private $ofileeSgb;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Enviado_Sgb", type="boolean", nullable=true)
     */
    private $enviadoSgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Sgb", type="integer", nullable=true)
     */
    private $menSgb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Sgb", type="smallint", nullable=true)
     */
    private $usuSgb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecSys_Sgb", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecsysSgb;

    public function getSucursalSgb(): ?int
    {
        return $this->sucursalSgb;
    }

    public function getEmpSgb(): ?int
    {
        return $this->empSgb;
    }

    public function getNumSgb(): ?int
    {
        return $this->numSgb;
    }

    public function getLinSgb(): ?int
    {
        return $this->linSgb;
    }

    public function getTipoSgb(): ?string
    {
        return $this->tipoSgb;
    }

    public function getNbulSgb(): ?int
    {
        return $this->nbulSgb;
    }

    public function getOfioriSgb(): ?int
    {
        return $this->ofioriSgb;
    }

    public function setOfioriSgb(?int $ofioriSgb): self
    {
        $this->ofioriSgb = $ofioriSgb;

        return $this;
    }

    public function getRefSgb(): ?string
    {
        return $this->refSgb;
    }

    public function setRefSgb(?string $refSgb): self
    {
        $this->refSgb = $refSgb;

        return $this;
    }

    public function getFecSgb(): ?\DateTimeInterface
    {
        return $this->fecSgb;
    }

    public function setFecSgb(?\DateTimeInterface $fecSgb): self
    {
        $this->fecSgb = $fecSgb;

        return $this;
    }

    public function getHorSgb(): ?\DateTimeInterface
    {
        return $this->horSgb;
    }

    public function setHorSgb(?\DateTimeInterface $horSgb): self
    {
        $this->horSgb = $horSgb;

        return $this;
    }

    public function getPesSgb(): ?float
    {
        return $this->pesSgb;
    }

    public function setPesSgb(?float $pesSgb): self
    {
        $this->pesSgb = $pesSgb;

        return $this;
    }

    public function getPesvolSgb(): ?float
    {
        return $this->pesvolSgb;
    }

    public function setPesvolSgb(?float $pesvolSgb): self
    {
        $this->pesvolSgb = $pesvolSgb;

        return $this;
    }

    public function getDim1Sgb(): ?int
    {
        return $this->dim1Sgb;
    }

    public function setDim1Sgb(?int $dim1Sgb): self
    {
        $this->dim1Sgb = $dim1Sgb;

        return $this;
    }

    public function getDim2Sgb(): ?int
    {
        return $this->dim2Sgb;
    }

    public function setDim2Sgb(?int $dim2Sgb): self
    {
        $this->dim2Sgb = $dim2Sgb;

        return $this;
    }

    public function getDim3Sgb(): ?int
    {
        return $this->dim3Sgb;
    }

    public function setDim3Sgb(?int $dim3Sgb): self
    {
        $this->dim3Sgb = $dim3Sgb;

        return $this;
    }

    public function getOfileeSgb(): ?int
    {
        return $this->ofileeSgb;
    }

    public function setOfileeSgb(?int $ofileeSgb): self
    {
        $this->ofileeSgb = $ofileeSgb;

        return $this;
    }

    public function getEnviadoSgb(): ?bool
    {
        return $this->enviadoSgb;
    }

    public function setEnviadoSgb(?bool $enviadoSgb): self
    {
        $this->enviadoSgb = $enviadoSgb;

        return $this;
    }

    public function getMenSgb(): ?int
    {
        return $this->menSgb;
    }

    public function setMenSgb(?int $menSgb): self
    {
        $this->menSgb = $menSgb;

        return $this;
    }

    public function getUsuSgb(): ?int
    {
        return $this->usuSgb;
    }

    public function setUsuSgb(?int $usuSgb): self
    {
        $this->usuSgb = $usuSgb;

        return $this;
    }

    public function getFecsysSgb(): ?\DateTimeInterface
    {
        return $this->fecsysSgb;
    }


}
