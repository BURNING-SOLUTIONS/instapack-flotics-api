<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vdirecciones
 *
 * @ORM\Table(name="vdirecciones", indexes={@ORM\Index(name="clv2-dir", columns={"Sucursal_Vdir", "Emp_Vdir", "Cli_Vdir", "Dep_Vdir"}), @ORM\Index(name="clv3-dir", columns={"Sucursal_Vdir", "Emp_Vdir", "Men_Vdir"}), @ORM\Index(name="clv4-dir", columns={"Sucursal_Vdir", "Emp_Vdir", "Tip_Vdir"})})
 * @ORM\Entity
 */
class Vdirecciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Vdir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalVdir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Vdir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empVdir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Vdir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numVdir = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Vdir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tip_Vdir", type="string", length=5, nullable=true)
     */
    private $tipVdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir1_Vdir", type="string", length=50, nullable=true)
     */
    private $dir1Vdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir2_Vdir", type="string", length=50, nullable=true)
     */
    private $dir2Vdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir3_Vdir", type="string", length=50, nullable=true)
     */
    private $dir3Vdir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Vdir", type="integer", nullable=true)
     */
    private $cliVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Vdir", type="string", length=12, nullable=true)
     */
    private $depVdir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Vdir", type="integer", nullable=true)
     */
    private $menVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prior_Vdir", type="string", length=2, nullable=true)
     */
    private $priorVdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zon_Vdir", type="string", length=5, nullable=true)
     */
    private $zonVdir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fel_Vdir", type="datetime", nullable=true)
     */
    private $felVdir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hol_Vdir", type="datetime", nullable=true)
     */
    private $holVdir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hoa_Vdir", type="datetime", nullable=true)
     */
    private $hoaVdir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hof_Vdir", type="datetime", nullable=true)
     */
    private $hofVdir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TotUni_Vdir", type="smallint", nullable=true)
     */
    private $totuniVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ttip_Vdir", type="string", length=1, nullable=true)
     */
    private $ttipVdir;

    /**
     * @var bool
     *
     * @ORM\Column(name="Bloqueo_Vdir", type="boolean", nullable=false)
     */
    private $bloqueoVdir = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cal_Vdir", type="smallint", nullable=true)
     */
    private $calVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color_Vdir", type="string", length=50, nullable=true)
     */
    private $colorVdir;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorMax_Vdir", type="datetime", nullable=true)
     */
    private $hormaxVdir;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Anti_Vdir", type="float", precision=53, scale=0, nullable=true)
     */
    private $antiVdir = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp_Vdir", type="float", precision=53, scale=0, nullable=true)
     */
    private $impVdir = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Conf_Vdir", type="boolean", nullable=true)
     */
    private $confVdir = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ColorTip_Vdir", type="string", length=50, nullable=true)
     */
    private $colortipVdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="especial_vdir", type="string", length=1, nullable=true)
     */
    private $especialVdir;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Vdir", type="smallint", nullable=true)
     */
    private $usuVdir;

    public function getSucursalVdir(): ?int
    {
        return $this->sucursalVdir;
    }

    public function getEmpVdir(): ?int
    {
        return $this->empVdir;
    }

    public function getNumVdir(): ?int
    {
        return $this->numVdir;
    }

    public function getLinVdir(): ?int
    {
        return $this->linVdir;
    }

    public function getTipVdir(): ?string
    {
        return $this->tipVdir;
    }

    public function setTipVdir(?string $tipVdir): self
    {
        $this->tipVdir = $tipVdir;

        return $this;
    }

    public function getDir1Vdir(): ?string
    {
        return $this->dir1Vdir;
    }

    public function setDir1Vdir(?string $dir1Vdir): self
    {
        $this->dir1Vdir = $dir1Vdir;

        return $this;
    }

    public function getDir2Vdir(): ?string
    {
        return $this->dir2Vdir;
    }

    public function setDir2Vdir(?string $dir2Vdir): self
    {
        $this->dir2Vdir = $dir2Vdir;

        return $this;
    }

    public function getDir3Vdir(): ?string
    {
        return $this->dir3Vdir;
    }

    public function setDir3Vdir(?string $dir3Vdir): self
    {
        $this->dir3Vdir = $dir3Vdir;

        return $this;
    }

    public function getCliVdir(): ?int
    {
        return $this->cliVdir;
    }

    public function setCliVdir(?int $cliVdir): self
    {
        $this->cliVdir = $cliVdir;

        return $this;
    }

    public function getDepVdir(): ?string
    {
        return $this->depVdir;
    }

    public function setDepVdir(?string $depVdir): self
    {
        $this->depVdir = $depVdir;

        return $this;
    }

    public function getMenVdir(): ?int
    {
        return $this->menVdir;
    }

    public function setMenVdir(?int $menVdir): self
    {
        $this->menVdir = $menVdir;

        return $this;
    }

    public function getPriorVdir(): ?string
    {
        return $this->priorVdir;
    }

    public function setPriorVdir(?string $priorVdir): self
    {
        $this->priorVdir = $priorVdir;

        return $this;
    }

    public function getZonVdir(): ?string
    {
        return $this->zonVdir;
    }

    public function setZonVdir(?string $zonVdir): self
    {
        $this->zonVdir = $zonVdir;

        return $this;
    }

    public function getFelVdir(): ?\DateTimeInterface
    {
        return $this->felVdir;
    }

    public function setFelVdir(?\DateTimeInterface $felVdir): self
    {
        $this->felVdir = $felVdir;

        return $this;
    }

    public function getHolVdir(): ?\DateTimeInterface
    {
        return $this->holVdir;
    }

    public function setHolVdir(?\DateTimeInterface $holVdir): self
    {
        $this->holVdir = $holVdir;

        return $this;
    }

    public function getHoaVdir(): ?\DateTimeInterface
    {
        return $this->hoaVdir;
    }

    public function setHoaVdir(?\DateTimeInterface $hoaVdir): self
    {
        $this->hoaVdir = $hoaVdir;

        return $this;
    }

    public function getHofVdir(): ?\DateTimeInterface
    {
        return $this->hofVdir;
    }

    public function setHofVdir(?\DateTimeInterface $hofVdir): self
    {
        $this->hofVdir = $hofVdir;

        return $this;
    }

    public function getTotuniVdir(): ?int
    {
        return $this->totuniVdir;
    }

    public function setTotuniVdir(?int $totuniVdir): self
    {
        $this->totuniVdir = $totuniVdir;

        return $this;
    }

    public function getTtipVdir(): ?string
    {
        return $this->ttipVdir;
    }

    public function setTtipVdir(?string $ttipVdir): self
    {
        $this->ttipVdir = $ttipVdir;

        return $this;
    }

    public function getBloqueoVdir(): ?bool
    {
        return $this->bloqueoVdir;
    }

    public function setBloqueoVdir(bool $bloqueoVdir): self
    {
        $this->bloqueoVdir = $bloqueoVdir;

        return $this;
    }

    public function getCalVdir(): ?int
    {
        return $this->calVdir;
    }

    public function setCalVdir(?int $calVdir): self
    {
        $this->calVdir = $calVdir;

        return $this;
    }

    public function getColorVdir(): ?string
    {
        return $this->colorVdir;
    }

    public function setColorVdir(?string $colorVdir): self
    {
        $this->colorVdir = $colorVdir;

        return $this;
    }

    public function getHormaxVdir(): ?\DateTimeInterface
    {
        return $this->hormaxVdir;
    }

    public function setHormaxVdir(?\DateTimeInterface $hormaxVdir): self
    {
        $this->hormaxVdir = $hormaxVdir;

        return $this;
    }

    public function getAntiVdir(): ?float
    {
        return $this->antiVdir;
    }

    public function setAntiVdir(?float $antiVdir): self
    {
        $this->antiVdir = $antiVdir;

        return $this;
    }

    public function getImpVdir(): ?float
    {
        return $this->impVdir;
    }

    public function setImpVdir(?float $impVdir): self
    {
        $this->impVdir = $impVdir;

        return $this;
    }

    public function getConfVdir(): ?bool
    {
        return $this->confVdir;
    }

    public function setConfVdir(?bool $confVdir): self
    {
        $this->confVdir = $confVdir;

        return $this;
    }

    public function getColortipVdir(): ?string
    {
        return $this->colortipVdir;
    }

    public function setColortipVdir(?string $colortipVdir): self
    {
        $this->colortipVdir = $colortipVdir;

        return $this;
    }

    public function getEspecialVdir(): ?string
    {
        return $this->especialVdir;
    }

    public function setEspecialVdir(?string $especialVdir): self
    {
        $this->especialVdir = $especialVdir;

        return $this;
    }

    public function getUsuVdir(): ?int
    {
        return $this->usuVdir;
    }

    public function setUsuVdir(?int $usuVdir): self
    {
        $this->usuVdir = $usuVdir;

        return $this;
    }


}
