<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rutas
 *
 * @ORM\Table(name="rutas")
 * @ORM\Entity
 */
class Rutas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Rut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalRut = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Rut", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empRut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Rut", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipRut;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Rut", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codRut;

    /**
     * @var int
     *
     * @ORM\Column(name="Cdp_Rut", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpRut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CapPro_Rut", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $capproRut;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Rut", type="string", length=30, nullable=true)
     */
    private $nomRut;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Manual_Rut", type="boolean", nullable=true)
     */
    private $manualRut;

    public function getSucursalRut(): ?int
    {
        return $this->sucursalRut;
    }

    public function getEmpRut(): ?int
    {
        return $this->empRut;
    }

    public function getTipRut(): ?string
    {
        return $this->tipRut;
    }

    public function getCodRut(): ?string
    {
        return $this->codRut;
    }

    public function getCdpRut(): ?int
    {
        return $this->cdpRut;
    }

    public function getCapproRut(): ?string
    {
        return $this->capproRut;
    }

    public function getNomRut(): ?string
    {
        return $this->nomRut;
    }

    public function setNomRut(?string $nomRut): self
    {
        $this->nomRut = $nomRut;

        return $this;
    }

    public function getManualRut(): ?bool
    {
        return $this->manualRut;
    }

    public function setManualRut(?bool $manualRut): self
    {
        $this->manualRut = $manualRut;

        return $this;
    }


}
