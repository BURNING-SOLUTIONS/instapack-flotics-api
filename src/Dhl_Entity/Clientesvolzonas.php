<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientesvolzonas
 *
 * @ORM\Table(name="ClientesVolZonas")
 * @ORM\Entity
 */
class Clientesvolzonas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_CvZ", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCvz;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_CvZ", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCvz;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Cvz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliCvz;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Cvz", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depCvz;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Cvz", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipCvz;

    /**
     * @var string
     *
     * @ORM\Column(name="Zon_Cvz", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zonCvz;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VolVta_Cvz", type="smallint", nullable=true)
     */
    private $volvtaCvz;

    /**
     * @var int|null
     *
     * @ORM\Column(name="VolCos_Cvz", type="smallint", nullable=true)
     */
    private $volcosCvz;

    public function getSucursalCvz(): ?int
    {
        return $this->sucursalCvz;
    }

    public function getEmpCvz(): ?int
    {
        return $this->empCvz;
    }

    public function getCliCvz(): ?int
    {
        return $this->cliCvz;
    }

    public function getDepCvz(): ?string
    {
        return $this->depCvz;
    }

    public function getTipCvz(): ?string
    {
        return $this->tipCvz;
    }

    public function getZonCvz(): ?string
    {
        return $this->zonCvz;
    }

    public function getVolvtaCvz(): ?int
    {
        return $this->volvtaCvz;
    }

    public function setVolvtaCvz(?int $volvtaCvz): self
    {
        $this->volvtaCvz = $volvtaCvz;

        return $this;
    }

    public function getVolcosCvz(): ?int
    {
        return $this->volcosCvz;
    }

    public function setVolcosCvz(?int $volcosCvz): self
    {
        $this->volcosCvz = $volcosCvz;

        return $this;
    }


}
