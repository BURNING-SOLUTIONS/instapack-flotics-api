<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hojatip
 *
 * @ORM\Table(name="hojatip")
 * @ORM\Entity
 */
class Hojatip
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Hct", type="boolean", nullable=false)
     */
    private $bajaHct = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Hct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalHct = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Hct", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empHct;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Hct", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoHct;

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Hct", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codHct;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Hct", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depHct;

    /**
     * @var int
     *
     * @ORM\Column(name="Orden_Hct", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ordenHct = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TServ_Hct", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tservHct;

    public function getBajaHct(): ?bool
    {
        return $this->bajaHct;
    }

    public function setBajaHct(bool $bajaHct): self
    {
        $this->bajaHct = $bajaHct;

        return $this;
    }

    public function getSucursalHct(): ?int
    {
        return $this->sucursalHct;
    }

    public function getEmpHct(): ?int
    {
        return $this->empHct;
    }

    public function getTipoHct(): ?string
    {
        return $this->tipoHct;
    }

    public function getCodHct(): ?int
    {
        return $this->codHct;
    }

    public function getDepHct(): ?string
    {
        return $this->depHct;
    }

    public function getOrdenHct(): ?int
    {
        return $this->ordenHct;
    }

    public function getTservHct(): ?string
    {
        return $this->tservHct;
    }


}
