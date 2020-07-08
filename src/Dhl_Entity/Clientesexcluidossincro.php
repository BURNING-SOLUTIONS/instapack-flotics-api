<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientesexcluidossincro
 *
 * @ORM\Table(name="ClientesExcluidosSincro")
 * @ORM\Entity
 */
class Clientesexcluidossincro
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Csr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCsr;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Csr", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCsr;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Csr", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipCsr;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Csr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliCsr;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Csr", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depCsr;

    public function getSucursalCsr(): ?int
    {
        return $this->sucursalCsr;
    }

    public function getEmpCsr(): ?int
    {
        return $this->empCsr;
    }

    public function getTipCsr(): ?string
    {
        return $this->tipCsr;
    }

    public function getCliCsr(): ?int
    {
        return $this->cliCsr;
    }

    public function getDepCsr(): ?string
    {
        return $this->depCsr;
    }


}
