<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cambiosdir
 *
 * @ORM\Table(name="CambiosDir")
 * @ORM\Entity
 */
class Cambiosdir
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_CDir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCdir;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_CDir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCdir;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_CDir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numCdir;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_CDir", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linCdir;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Equipos_CDir", type="string", length=1500, nullable=true)
     */
    private $equiposCdir;

    public function getSucursalCdir(): ?int
    {
        return $this->sucursalCdir;
    }

    public function getEmpCdir(): ?int
    {
        return $this->empCdir;
    }

    public function getNumCdir(): ?int
    {
        return $this->numCdir;
    }

    public function getLinCdir(): ?int
    {
        return $this->linCdir;
    }

    public function getEquiposCdir(): ?string
    {
        return $this->equiposCdir;
    }

    public function setEquiposCdir(?string $equiposCdir): self
    {
        $this->equiposCdir = $equiposCdir;

        return $this;
    }


}
