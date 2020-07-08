<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiporectifica
 *
 * @ORM\Table(name="TipoRectifica")
 * @ORM\Entity
 */
class Tiporectifica
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTre;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tre", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTre;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tre", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codTre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Tre", type="string", length=100, nullable=true)
     */
    private $descTre;

    public function getSucursalTre(): ?int
    {
        return $this->sucursalTre;
    }

    public function getEmpTre(): ?int
    {
        return $this->empTre;
    }

    public function getCodTre(): ?string
    {
        return $this->codTre;
    }

    public function getDescTre(): ?string
    {
        return $this->descTre;
    }

    public function setDescTre(?string $descTre): self
    {
        $this->descTre = $descTre;

        return $this;
    }


}
