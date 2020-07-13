<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Precios
 *
 * @ORM\Table(name="precios")
 * @ORM\Entity
 */
class Precios
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Pre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPre = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Pre", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Pre", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoPre;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Pre", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaPre = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Pre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codPre = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Pre", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depPre;

    /**
     * @var string
     *
     * @ORM\Column(name="Ele_Pre", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $elePre;

    /**
     * @var string
     *
     * @ORM\Column(name="Zondes_Pre", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zondesPre;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Pre", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $desdePre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $hastaPre = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Pvpkg_Pre", type="boolean", nullable=false)
     */
    private $pvpkgPre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precli_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $precliPre = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipcosmen_Pre", type="string", length=1, nullable=true)
     */
    private $tipcosmenPre;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosmen_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosmenPre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosdis_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosdisPre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosarr_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosarrPre = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Eledes_Pre", type="string", length=5, nullable=true)
     */
    private $eledesPre;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Minimo_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $minimoPre = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Maximo_Pre", type="float", precision=53, scale=0, nullable=true)
     */
    private $maximoPre = '0';

    public function getSucursalPre(): ?int
    {
        return $this->sucursalPre;
    }

    public function getEmpPre(): ?int
    {
        return $this->empPre;
    }

    public function getTipoPre(): ?string
    {
        return $this->tipoPre;
    }

    public function getViaPre(): ?int
    {
        return $this->viaPre;
    }

    public function getCodPre(): ?int
    {
        return $this->codPre;
    }

    public function getDepPre(): ?string
    {
        return $this->depPre;
    }

    public function getElePre(): ?string
    {
        return $this->elePre;
    }

    public function getZondesPre(): ?string
    {
        return $this->zondesPre;
    }

    public function getNumPre(): ?int
    {
        return $this->numPre;
    }

    public function getDesdePre(): ?float
    {
        return $this->desdePre;
    }

    public function setDesdePre(?float $desdePre): self
    {
        $this->desdePre = $desdePre;

        return $this;
    }

    public function getHastaPre(): ?float
    {
        return $this->hastaPre;
    }

    public function setHastaPre(?float $hastaPre): self
    {
        $this->hastaPre = $hastaPre;

        return $this;
    }

    public function getPvpkgPre(): ?bool
    {
        return $this->pvpkgPre;
    }

    public function setPvpkgPre(bool $pvpkgPre): self
    {
        $this->pvpkgPre = $pvpkgPre;

        return $this;
    }

    public function getPrecliPre(): ?float
    {
        return $this->precliPre;
    }

    public function setPrecliPre(?float $precliPre): self
    {
        $this->precliPre = $precliPre;

        return $this;
    }

    public function getTipcosmenPre(): ?string
    {
        return $this->tipcosmenPre;
    }

    public function setTipcosmenPre(?string $tipcosmenPre): self
    {
        $this->tipcosmenPre = $tipcosmenPre;

        return $this;
    }

    public function getCosmenPre(): ?float
    {
        return $this->cosmenPre;
    }

    public function setCosmenPre(?float $cosmenPre): self
    {
        $this->cosmenPre = $cosmenPre;

        return $this;
    }

    public function getCosdisPre(): ?float
    {
        return $this->cosdisPre;
    }

    public function setCosdisPre(?float $cosdisPre): self
    {
        $this->cosdisPre = $cosdisPre;

        return $this;
    }

    public function getCosarrPre(): ?float
    {
        return $this->cosarrPre;
    }

    public function setCosarrPre(?float $cosarrPre): self
    {
        $this->cosarrPre = $cosarrPre;

        return $this;
    }

    public function getEledesPre(): ?string
    {
        return $this->eledesPre;
    }

    public function setEledesPre(?string $eledesPre): self
    {
        $this->eledesPre = $eledesPre;

        return $this;
    }

    public function getMinimoPre(): ?float
    {
        return $this->minimoPre;
    }

    public function setMinimoPre(?float $minimoPre): self
    {
        $this->minimoPre = $minimoPre;

        return $this;
    }

    public function getMaximoPre(): ?float
    {
        return $this->maximoPre;
    }

    public function setMaximoPre(?float $maximoPre): self
    {
        $this->maximoPre = $maximoPre;

        return $this;
    }


}
