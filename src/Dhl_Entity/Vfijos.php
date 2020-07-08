<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vfijos
 *
 * @ORM\Table(name="vfijos")
 * @ORM\Entity
 */
class Vfijos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_VFij", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalVfij = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_VFij", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empVfij = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_VFij", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoVfij;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_VFij", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numVfij = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_VFij", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linVfij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_VFij", type="string", length=5, nullable=true)
     */
    private $tipVfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir1_VFij", type="string", length=50, nullable=true)
     */
    private $dir1Vfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir2_VFij", type="string", length=50, nullable=true)
     */
    private $dir2Vfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir3_VFij", type="string", length=50, nullable=true)
     */
    private $dir3Vfij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_VFij", type="integer", nullable=true)
     */
    private $cliVfij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_VFij", type="string", length=12, nullable=true)
     */
    private $depVfij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_VFij", type="integer", nullable=true)
     */
    private $menVfij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_VFij", type="string", length=2, nullable=true)
     */
    private $priorVfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_VFij", type="string", length=5, nullable=true)
     */
    private $zonVfij;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hol_VFij", type="datetime", nullable=true)
     */
    private $holVfij;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TotUni_VFij", type="smallint", nullable=true)
     */
    private $totuniVfij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ttip_VFij", type="string", length=1, nullable=true)
     */
    private $ttipVfij;

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_VFij", type="boolean", nullable=false)
     */
    private $bloqueoVfij = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cal_VFij", type="smallint", nullable=true)
     */
    private $calVfij = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color_VFij", type="string", length=50, nullable=true)
     */
    private $colorVfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dias_VFij", type="string", length=7, nullable=true)
     */
    private $diasVfij;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColorTip_VFij", type="string", length=50, nullable=true)
     */
    private $colortipVfij;

    public function getSucursalVfij(): ?int
    {
        return $this->sucursalVfij;
    }

    public function getEmpVfij(): ?int
    {
        return $this->empVfij;
    }

    public function getTipoVfij(): ?string
    {
        return $this->tipoVfij;
    }

    public function getNumVfij(): ?int
    {
        return $this->numVfij;
    }

    public function getLinVfij(): ?int
    {
        return $this->linVfij;
    }

    public function getTipVfij(): ?string
    {
        return $this->tipVfij;
    }

    public function setTipVfij(?string $tipVfij): self
    {
        $this->tipVfij = $tipVfij;

        return $this;
    }

    public function getDir1Vfij(): ?string
    {
        return $this->dir1Vfij;
    }

    public function setDir1Vfij(?string $dir1Vfij): self
    {
        $this->dir1Vfij = $dir1Vfij;

        return $this;
    }

    public function getDir2Vfij(): ?string
    {
        return $this->dir2Vfij;
    }

    public function setDir2Vfij(?string $dir2Vfij): self
    {
        $this->dir2Vfij = $dir2Vfij;

        return $this;
    }

    public function getDir3Vfij(): ?string
    {
        return $this->dir3Vfij;
    }

    public function setDir3Vfij(?string $dir3Vfij): self
    {
        $this->dir3Vfij = $dir3Vfij;

        return $this;
    }

    public function getCliVfij(): ?int
    {
        return $this->cliVfij;
    }

    public function setCliVfij(?int $cliVfij): self
    {
        $this->cliVfij = $cliVfij;

        return $this;
    }

    public function getDepVfij(): ?string
    {
        return $this->depVfij;
    }

    public function setDepVfij(?string $depVfij): self
    {
        $this->depVfij = $depVfij;

        return $this;
    }

    public function getMenVfij(): ?int
    {
        return $this->menVfij;
    }

    public function setMenVfij(?int $menVfij): self
    {
        $this->menVfij = $menVfij;

        return $this;
    }

    public function getPriorVfij(): ?string
    {
        return $this->priorVfij;
    }

    public function setPriorVfij(?string $priorVfij): self
    {
        $this->priorVfij = $priorVfij;

        return $this;
    }

    public function getZonVfij(): ?string
    {
        return $this->zonVfij;
    }

    public function setZonVfij(?string $zonVfij): self
    {
        $this->zonVfij = $zonVfij;

        return $this;
    }

    public function getHolVfij(): ?\DateTimeInterface
    {
        return $this->holVfij;
    }

    public function setHolVfij(?\DateTimeInterface $holVfij): self
    {
        $this->holVfij = $holVfij;

        return $this;
    }

    public function getTotuniVfij(): ?int
    {
        return $this->totuniVfij;
    }

    public function setTotuniVfij(?int $totuniVfij): self
    {
        $this->totuniVfij = $totuniVfij;

        return $this;
    }

    public function getTtipVfij(): ?string
    {
        return $this->ttipVfij;
    }

    public function setTtipVfij(?string $ttipVfij): self
    {
        $this->ttipVfij = $ttipVfij;

        return $this;
    }

    public function getBloqueoVfij(): ?bool
    {
        return $this->bloqueoVfij;
    }

    public function setBloqueoVfij(bool $bloqueoVfij): self
    {
        $this->bloqueoVfij = $bloqueoVfij;

        return $this;
    }

    public function getCalVfij(): ?int
    {
        return $this->calVfij;
    }

    public function setCalVfij(?int $calVfij): self
    {
        $this->calVfij = $calVfij;

        return $this;
    }

    public function getColorVfij(): ?string
    {
        return $this->colorVfij;
    }

    public function setColorVfij(?string $colorVfij): self
    {
        $this->colorVfij = $colorVfij;

        return $this;
    }

    public function getDiasVfij(): ?string
    {
        return $this->diasVfij;
    }

    public function setDiasVfij(?string $diasVfij): self
    {
        $this->diasVfij = $diasVfij;

        return $this;
    }

    public function getColortipVfij(): ?string
    {
        return $this->colortipVfij;
    }

    public function setColortipVfij(?string $colortipVfij): self
    {
        $this->colortipVfij = $colortipVfij;

        return $this;
    }


}
