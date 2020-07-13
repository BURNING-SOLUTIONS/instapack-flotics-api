<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liquidaree
 *
 * @ORM\Table(name="LiquidaRee")
 * @ORM\Entity
 */
class Liquidaree
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Lre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalLre;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Lre", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empLre;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Lre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numLre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Lre", type="datetime", nullable=true)
     */
    private $fecLre;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Lre", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalLre;

    /**
     * @var float|null
     *
     * @ORM\Column(name="TotAnu_Lre", type="float", precision=53, scale=0, nullable=true)
     */
    private $totanuLre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Lre", type="integer", nullable=true)
     */
    private $cliLre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Lre", type="string", length=12, nullable=true)
     */
    private $depLre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumPago_Lre", type="integer", nullable=true)
     */
    private $numpagoLre;

    public function getSucursalLre(): ?int
    {
        return $this->sucursalLre;
    }

    public function getEmpLre(): ?int
    {
        return $this->empLre;
    }

    public function getNumLre(): ?int
    {
        return $this->numLre;
    }

    public function getFecLre(): ?\DateTimeInterface
    {
        return $this->fecLre;
    }

    public function setFecLre(?\DateTimeInterface $fecLre): self
    {
        $this->fecLre = $fecLre;

        return $this;
    }

    public function getTotalLre(): ?float
    {
        return $this->totalLre;
    }

    public function setTotalLre(?float $totalLre): self
    {
        $this->totalLre = $totalLre;

        return $this;
    }

    public function getTotanuLre(): ?float
    {
        return $this->totanuLre;
    }

    public function setTotanuLre(?float $totanuLre): self
    {
        $this->totanuLre = $totanuLre;

        return $this;
    }

    public function getCliLre(): ?int
    {
        return $this->cliLre;
    }

    public function setCliLre(?int $cliLre): self
    {
        $this->cliLre = $cliLre;

        return $this;
    }

    public function getDepLre(): ?string
    {
        return $this->depLre;
    }

    public function setDepLre(?string $depLre): self
    {
        $this->depLre = $depLre;

        return $this;
    }

    public function getNumpagoLre(): ?int
    {
        return $this->numpagoLre;
    }

    public function setNumpagoLre(?int $numpagoLre): self
    {
        $this->numpagoLre = $numpagoLre;

        return $this;
    }


}
