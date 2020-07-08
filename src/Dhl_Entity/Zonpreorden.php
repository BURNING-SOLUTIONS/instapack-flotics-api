<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonpreorden
 *
 * @ORM\Table(name="ZonpreOrden")
 * @ORM\Entity
 */
class Zonpreorden
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Pzo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPzo;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Pzo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPzo;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Pzo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codPzo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Orden_Pzo", type="smallint", nullable=true)
     */
    private $ordenPzo;

    public function getSucursalPzo(): ?int
    {
        return $this->sucursalPzo;
    }

    public function getEmpPzo(): ?int
    {
        return $this->empPzo;
    }

    public function getCodPzo(): ?string
    {
        return $this->codPzo;
    }

    public function getOrdenPzo(): ?int
    {
        return $this->ordenPzo;
    }

    public function setOrdenPzo(?int $ordenPzo): self
    {
        $this->ordenPzo = $ordenPzo;

        return $this;
    }


}
