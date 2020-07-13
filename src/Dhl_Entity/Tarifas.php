<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarifas
 *
 * @ORM\Table(name="tarifas")
 * @ORM\Entity
 */
class Tarifas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tar", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTar = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tar", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Tar", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoTar;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tar", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codTar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Ele_Tar", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $eleTar;

    /**
     * @var string
     *
     * @ORM\Column(name="Zondes_Tar", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zondesTar;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Tar", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $desdeTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $hastaTar = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Pvpkg_Tar", type="boolean", nullable=false)
     */
    private $pvpkgTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Precli_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $precliTar = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipcosmen_Tar", type="string", length=1, nullable=true)
     */
    private $tipcosmenTar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosmen_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosmenTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosdis_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosdisTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cosarr_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $cosarrTar = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Eledes_Tar", type="string", length=5, nullable=true)
     */
    private $eledesTar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Minimo_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $minimoTar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Maximo_Tar", type="float", precision=53, scale=0, nullable=true)
     */
    private $maximoTar = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Nabo_Tar", type="boolean", nullable=true)
     */
    private $naboTar;

    public function getSucursalTar(): ?int
    {
        return $this->sucursalTar;
    }

    public function getEmpTar(): ?int
    {
        return $this->empTar;
    }

    public function getTipoTar(): ?string
    {
        return $this->tipoTar;
    }

    public function getCodTar(): ?string
    {
        return $this->codTar;
    }

    public function getEleTar(): ?string
    {
        return $this->eleTar;
    }

    public function getZondesTar(): ?string
    {
        return $this->zondesTar;
    }

    public function getNumTar(): ?int
    {
        return $this->numTar;
    }

    public function getDesdeTar(): ?float
    {
        return $this->desdeTar;
    }

    public function setDesdeTar(?float $desdeTar): self
    {
        $this->desdeTar = $desdeTar;

        return $this;
    }

    public function getHastaTar(): ?float
    {
        return $this->hastaTar;
    }

    public function setHastaTar(?float $hastaTar): self
    {
        $this->hastaTar = $hastaTar;

        return $this;
    }

    public function getPvpkgTar(): ?bool
    {
        return $this->pvpkgTar;
    }

    public function setPvpkgTar(bool $pvpkgTar): self
    {
        $this->pvpkgTar = $pvpkgTar;

        return $this;
    }

    public function getPrecliTar(): ?float
    {
        return $this->precliTar;
    }

    public function setPrecliTar(?float $precliTar): self
    {
        $this->precliTar = $precliTar;

        return $this;
    }

    public function getTipcosmenTar(): ?string
    {
        return $this->tipcosmenTar;
    }

    public function setTipcosmenTar(?string $tipcosmenTar): self
    {
        $this->tipcosmenTar = $tipcosmenTar;

        return $this;
    }

    public function getCosmenTar(): ?float
    {
        return $this->cosmenTar;
    }

    public function setCosmenTar(?float $cosmenTar): self
    {
        $this->cosmenTar = $cosmenTar;

        return $this;
    }

    public function getCosdisTar(): ?float
    {
        return $this->cosdisTar;
    }

    public function setCosdisTar(?float $cosdisTar): self
    {
        $this->cosdisTar = $cosdisTar;

        return $this;
    }

    public function getCosarrTar(): ?float
    {
        return $this->cosarrTar;
    }

    public function setCosarrTar(?float $cosarrTar): self
    {
        $this->cosarrTar = $cosarrTar;

        return $this;
    }

    public function getEledesTar(): ?string
    {
        return $this->eledesTar;
    }

    public function setEledesTar(?string $eledesTar): self
    {
        $this->eledesTar = $eledesTar;

        return $this;
    }

    public function getMinimoTar(): ?float
    {
        return $this->minimoTar;
    }

    public function setMinimoTar(?float $minimoTar): self
    {
        $this->minimoTar = $minimoTar;

        return $this;
    }

    public function getMaximoTar(): ?float
    {
        return $this->maximoTar;
    }

    public function setMaximoTar(?float $maximoTar): self
    {
        $this->maximoTar = $maximoTar;

        return $this;
    }

    public function getNaboTar(): ?bool
    {
        return $this->naboTar;
    }

    public function setNaboTar(?bool $naboTar): self
    {
        $this->naboTar = $naboTar;

        return $this;
    }


}
