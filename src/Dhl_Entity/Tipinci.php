<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipinci
 *
 * @ORM\Table(name="tipinci")
 * @ORM\Entity
 */
class Tipinci
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Itip", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalItip = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Itip", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empItip = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Itip", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codItip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Itip", type="string", length=30, nullable=true)
     */
    private $descItip;

    public function getSucursalItip(): ?int
    {
        return $this->sucursalItip;
    }

    public function getEmpItip(): ?int
    {
        return $this->empItip;
    }

    public function getCodItip(): ?string
    {
        return $this->codItip;
    }

    public function getDescItip(): ?string
    {
        return $this->descItip;
    }

    public function setDescItip(?string $descItip): self
    {
        $this->descItip = $descItip;

        return $this;
    }


}
