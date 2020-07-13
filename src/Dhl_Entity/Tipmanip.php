<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipmanip
 *
 * @ORM\Table(name="TipManip")
 * @ORM\Entity
 */
class Tipmanip
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tmn", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTmn;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tmn", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTmn;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tmn", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codTmn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Tmn", type="string", length=50, nullable=true)
     */
    private $descTmn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ele_Tmn", type="string", length=5, nullable=true)
     */
    private $eleTmn;

    public function getSucursalTmn(): ?int
    {
        return $this->sucursalTmn;
    }

    public function getEmpTmn(): ?int
    {
        return $this->empTmn;
    }

    public function getCodTmn(): ?string
    {
        return $this->codTmn;
    }

    public function getDescTmn(): ?string
    {
        return $this->descTmn;
    }

    public function setDescTmn(?string $descTmn): self
    {
        $this->descTmn = $descTmn;

        return $this;
    }

    public function getEleTmn(): ?string
    {
        return $this->eleTmn;
    }

    public function setEleTmn(?string $eleTmn): self
    {
        $this->eleTmn = $eleTmn;

        return $this;
    }


}
