<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestafijalinea
 *
 * @ORM\Table(name="PrestaFijaLinea")
 * @ORM\Entity
 */
class Prestafijalinea
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Plf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPlf;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Plf", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPlf;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Plf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPlf;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Plf", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linPlf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Plf", type="datetime", nullable=true)
     */
    private $fecPlf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Horas_Plf", type="smallint", nullable=true)
     */
    private $horasPlf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Plf", type="integer", nullable=true)
     */
    private $menPlf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fea_Plf", type="datetime", nullable=true)
     */
    private $feaPlf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hoa_Plf", type="datetime", nullable=true)
     */
    private $hoaPlf;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Finalizada_Plf", type="boolean", nullable=true)
     */
    private $finalizadaPlf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Plf", type="string", length=180, nullable=true)
     */
    private $obsPlf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DesHor_Plf", type="datetime", nullable=true)
     */
    private $deshorPlf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HasHor_Plf", type="datetime", nullable=true)
     */
    private $hashorPlf;

    public function getSucursalPlf(): ?int
    {
        return $this->sucursalPlf;
    }

    public function getEmpPlf(): ?int
    {
        return $this->empPlf;
    }

    public function getNumPlf(): ?int
    {
        return $this->numPlf;
    }

    public function getLinPlf(): ?int
    {
        return $this->linPlf;
    }

    public function getFecPlf(): ?\DateTimeInterface
    {
        return $this->fecPlf;
    }

    public function setFecPlf(?\DateTimeInterface $fecPlf): self
    {
        $this->fecPlf = $fecPlf;

        return $this;
    }

    public function getHorasPlf(): ?int
    {
        return $this->horasPlf;
    }

    public function setHorasPlf(?int $horasPlf): self
    {
        $this->horasPlf = $horasPlf;

        return $this;
    }

    public function getMenPlf(): ?int
    {
        return $this->menPlf;
    }

    public function setMenPlf(?int $menPlf): self
    {
        $this->menPlf = $menPlf;

        return $this;
    }

    public function getFeaPlf(): ?\DateTimeInterface
    {
        return $this->feaPlf;
    }

    public function setFeaPlf(?\DateTimeInterface $feaPlf): self
    {
        $this->feaPlf = $feaPlf;

        return $this;
    }

    public function getHoaPlf(): ?\DateTimeInterface
    {
        return $this->hoaPlf;
    }

    public function setHoaPlf(?\DateTimeInterface $hoaPlf): self
    {
        $this->hoaPlf = $hoaPlf;

        return $this;
    }

    public function getFinalizadaPlf(): ?bool
    {
        return $this->finalizadaPlf;
    }

    public function setFinalizadaPlf(?bool $finalizadaPlf): self
    {
        $this->finalizadaPlf = $finalizadaPlf;

        return $this;
    }

    public function getObsPlf(): ?string
    {
        return $this->obsPlf;
    }

    public function setObsPlf(?string $obsPlf): self
    {
        $this->obsPlf = $obsPlf;

        return $this;
    }

    public function getDeshorPlf(): ?\DateTimeInterface
    {
        return $this->deshorPlf;
    }

    public function setDeshorPlf(?\DateTimeInterface $deshorPlf): self
    {
        $this->deshorPlf = $deshorPlf;

        return $this;
    }

    public function getHashorPlf(): ?\DateTimeInterface
    {
        return $this->hashorPlf;
    }

    public function setHashorPlf(?\DateTimeInterface $hashorPlf): self
    {
        $this->hashorPlf = $hashorPlf;

        return $this;
    }


}
