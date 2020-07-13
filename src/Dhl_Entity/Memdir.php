<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memdir
 *
 * @ORM\Table(name="memdir")
 * @ORM\Entity
 */
class Memdir
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Mem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Mem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Mem", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipMem;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Mem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliMem = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Mem", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depMem;

    /**
     * @var string
     *
     * @ORM\Column(name="Des_Mem", type="string", length=40, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $desMem;

    /**
     * @var string
     *
     * @ORM\Column(name="Dir_Mem", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $dirMem;

    /**
     * @var string
     *
     * @ORM\Column(name="Tid_Mem", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tidMem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Mem", type="string", length=25, nullable=true)
     */
    private $paisMem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Mem", type="string", length=35, nullable=true)
     */
    private $pobMem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Mem", type="integer", nullable=true)
     */
    private $cdpMem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Nud_Mem", type="smallint", nullable=true)
     */
    private $nudMem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pis_Mem", type="string", length=10, nullable=true)
     */
    private $pisMem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pla_Mem", type="string", length=4, nullable=true)
     */
    private $plaMem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Kms_Mem", type="smallint", nullable=true)
     */
    private $kmsMem = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Mem", type="string", length=180, nullable=true)
     */
    private $obsMem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Mem", type="string", length=5, nullable=true)
     */
    private $zonMem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CdpInt_Mem", type="string", length=15, nullable=true)
     */
    private $cdpintMem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Mem", type="integer", nullable=true)
     */
    private $telMem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpPan_Mem", type="integer", nullable=true)
     */
    private $cdppanMem;

    /**
     * @var float
     *
     * @ORM\Column(name="Longitud_Mem", type="float", precision=53, scale=0, nullable=false)
     */
    private $longitudMem = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="Latitud_Mem", type="float", precision=53, scale=0, nullable=false)
     */
    private $latitudMem = '0';

    public function getSucursalMem(): ?int
    {
        return $this->sucursalMem;
    }

    public function getEmpMem(): ?int
    {
        return $this->empMem;
    }

    public function getTipMem(): ?string
    {
        return $this->tipMem;
    }

    public function getCliMem(): ?int
    {
        return $this->cliMem;
    }

    public function getDepMem(): ?string
    {
        return $this->depMem;
    }

    public function getDesMem(): ?string
    {
        return $this->desMem;
    }

    public function getDirMem(): ?string
    {
        return $this->dirMem;
    }

    public function getTidMem(): ?string
    {
        return $this->tidMem;
    }

    public function getPaisMem(): ?string
    {
        return $this->paisMem;
    }

    public function setPaisMem(?string $paisMem): self
    {
        $this->paisMem = $paisMem;

        return $this;
    }

    public function getPobMem(): ?string
    {
        return $this->pobMem;
    }

    public function setPobMem(?string $pobMem): self
    {
        $this->pobMem = $pobMem;

        return $this;
    }

    public function getCdpMem(): ?int
    {
        return $this->cdpMem;
    }

    public function setCdpMem(?int $cdpMem): self
    {
        $this->cdpMem = $cdpMem;

        return $this;
    }

    public function getNudMem(): ?int
    {
        return $this->nudMem;
    }

    public function setNudMem(?int $nudMem): self
    {
        $this->nudMem = $nudMem;

        return $this;
    }

    public function getPisMem(): ?string
    {
        return $this->pisMem;
    }

    public function setPisMem(?string $pisMem): self
    {
        $this->pisMem = $pisMem;

        return $this;
    }

    public function getPlaMem(): ?string
    {
        return $this->plaMem;
    }

    public function setPlaMem(?string $plaMem): self
    {
        $this->plaMem = $plaMem;

        return $this;
    }

    public function getKmsMem(): ?int
    {
        return $this->kmsMem;
    }

    public function setKmsMem(?int $kmsMem): self
    {
        $this->kmsMem = $kmsMem;

        return $this;
    }

    public function getObsMem(): ?string
    {
        return $this->obsMem;
    }

    public function setObsMem(?string $obsMem): self
    {
        $this->obsMem = $obsMem;

        return $this;
    }

    public function getZonMem(): ?string
    {
        return $this->zonMem;
    }

    public function setZonMem(?string $zonMem): self
    {
        $this->zonMem = $zonMem;

        return $this;
    }

    public function getCdpintMem(): ?string
    {
        return $this->cdpintMem;
    }

    public function setCdpintMem(?string $cdpintMem): self
    {
        $this->cdpintMem = $cdpintMem;

        return $this;
    }

    public function getTelMem(): ?int
    {
        return $this->telMem;
    }

    public function setTelMem(?int $telMem): self
    {
        $this->telMem = $telMem;

        return $this;
    }

    public function getCdppanMem(): ?int
    {
        return $this->cdppanMem;
    }

    public function setCdppanMem(?int $cdppanMem): self
    {
        $this->cdppanMem = $cdppanMem;

        return $this;
    }

    public function getLongitudMem(): ?float
    {
        return $this->longitudMem;
    }

    public function setLongitudMem(float $longitudMem): self
    {
        $this->longitudMem = $longitudMem;

        return $this;
    }

    public function getLatitudMem(): ?float
    {
        return $this->latitudMem;
    }

    public function setLatitudMem(float $latitudMem): self
    {
        $this->latitudMem = $latitudMem;

        return $this;
    }


}
