<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientesvolumetricos
 *
 * @ORM\Table(name="ClientesVolumetricos")
 * @ORM\Entity
 */
class Clientesvolumetricos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Cvt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCvt;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cvt", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCvt;

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Cvt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCvt;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Cvt", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depCvt;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Cvt", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipCvt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VolVta_Cvt", type="smallint", nullable=true)
     */
    private $volvtaCvt;

    public function getSucursalCvt(): ?int
    {
        return $this->sucursalCvt;
    }

    public function getEmpCvt(): ?int
    {
        return $this->empCvt;
    }

    public function getCodCvt(): ?int
    {
        return $this->codCvt;
    }

    public function getDepCvt(): ?string
    {
        return $this->depCvt;
    }

    public function getTipCvt(): ?string
    {
        return $this->tipCvt;
    }

    public function getVolvtaCvt(): ?int
    {
        return $this->volvtaCvt;
    }

    public function setVolvtaCvt(?int $volvtaCvt): self
    {
        $this->volvtaCvt = $volvtaCvt;

        return $this;
    }


}
