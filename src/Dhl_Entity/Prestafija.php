<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestafija
 *
 * @ORM\Table(name="PrestaFija")
 * @ORM\Entity
 */
class Prestafija
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Pfi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPfi;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Pfi", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPfi;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Pfi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Pfi", type="integer", nullable=true)
     */
    private $cliPfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Pfi", type="string", length=12, nullable=true)
     */
    private $depPfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PvpMes_Pfi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pvpmesPfi;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PcoMes_Pfi", type="float", precision=53, scale=0, nullable=true)
     */
    private $pcomesPfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Horas_Pfi", type="smallint", nullable=true)
     */
    private $horasPfi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecIni_Pfi", type="datetime", nullable=true)
     */
    private $feciniPfi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecFin_Pfi", type="datetime", nullable=true)
     */
    private $fecfinPfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dias_Pfi", type="string", length=7, nullable=true)
     */
    private $diasPfi;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Pfi", type="integer", nullable=true)
     */
    private $menPfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Pfi", type="string", length=5, nullable=true)
     */
    private $tipPfi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Pfi", type="string", length=180, nullable=true)
     */
    private $obsPfi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DesHor_Pfi", type="datetime", nullable=true)
     */
    private $deshorPfi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HasHor_Pfi", type="datetime", nullable=true)
     */
    private $hashorPfi;

    public function getSucursalPfi(): ?int
    {
        return $this->sucursalPfi;
    }

    public function getEmpPfi(): ?int
    {
        return $this->empPfi;
    }

    public function getNumPfi(): ?int
    {
        return $this->numPfi;
    }

    public function getCliPfi(): ?int
    {
        return $this->cliPfi;
    }

    public function setCliPfi(?int $cliPfi): self
    {
        $this->cliPfi = $cliPfi;

        return $this;
    }

    public function getDepPfi(): ?string
    {
        return $this->depPfi;
    }

    public function setDepPfi(?string $depPfi): self
    {
        $this->depPfi = $depPfi;

        return $this;
    }

    public function getPvpmesPfi(): ?float
    {
        return $this->pvpmesPfi;
    }

    public function setPvpmesPfi(?float $pvpmesPfi): self
    {
        $this->pvpmesPfi = $pvpmesPfi;

        return $this;
    }

    public function getPcomesPfi(): ?float
    {
        return $this->pcomesPfi;
    }

    public function setPcomesPfi(?float $pcomesPfi): self
    {
        $this->pcomesPfi = $pcomesPfi;

        return $this;
    }

    public function getHorasPfi(): ?int
    {
        return $this->horasPfi;
    }

    public function setHorasPfi(?int $horasPfi): self
    {
        $this->horasPfi = $horasPfi;

        return $this;
    }

    public function getFeciniPfi(): ?\DateTimeInterface
    {
        return $this->feciniPfi;
    }

    public function setFeciniPfi(?\DateTimeInterface $feciniPfi): self
    {
        $this->feciniPfi = $feciniPfi;

        return $this;
    }

    public function getFecfinPfi(): ?\DateTimeInterface
    {
        return $this->fecfinPfi;
    }

    public function setFecfinPfi(?\DateTimeInterface $fecfinPfi): self
    {
        $this->fecfinPfi = $fecfinPfi;

        return $this;
    }

    public function getDiasPfi(): ?string
    {
        return $this->diasPfi;
    }

    public function setDiasPfi(?string $diasPfi): self
    {
        $this->diasPfi = $diasPfi;

        return $this;
    }

    public function getMenPfi(): ?int
    {
        return $this->menPfi;
    }

    public function setMenPfi(?int $menPfi): self
    {
        $this->menPfi = $menPfi;

        return $this;
    }

    public function getTipPfi(): ?string
    {
        return $this->tipPfi;
    }

    public function setTipPfi(?string $tipPfi): self
    {
        $this->tipPfi = $tipPfi;

        return $this;
    }

    public function getObsPfi(): ?string
    {
        return $this->obsPfi;
    }

    public function setObsPfi(?string $obsPfi): self
    {
        $this->obsPfi = $obsPfi;

        return $this;
    }

    public function getDeshorPfi(): ?\DateTimeInterface
    {
        return $this->deshorPfi;
    }

    public function setDeshorPfi(?\DateTimeInterface $deshorPfi): self
    {
        $this->deshorPfi = $deshorPfi;

        return $this;
    }

    public function getHashorPfi(): ?\DateTimeInterface
    {
        return $this->hashorPfi;
    }

    public function setHashorPfi(?\DateTimeInterface $hashorPfi): self
    {
        $this->hashorPfi = $hashorPfi;

        return $this;
    }


}
