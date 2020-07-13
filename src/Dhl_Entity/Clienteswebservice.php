<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clienteswebservice
 *
 * @ORM\Table(name="ClientesWebService")
 * @ORM\Entity
 */
class Clienteswebservice
{
    /**
     * @var string
     *
     * @ORM\Column(name="Usu_Wse", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usuWse;

    /**
     * @var string
     *
     * @ORM\Column(name="Password_Wse", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $passwordWse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Sucursal_Wse", type="integer", nullable=true)
     */
    private $sucursalWse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp_Wse", type="smallint", nullable=true)
     */
    private $empWse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Wse", type="integer", nullable=true)
     */
    private $cliWse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Wse", type="string", length=12, nullable=true)
     */
    private $depWse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Wse", type="smallint", nullable=true)
     */
    private $viaWse;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baja_Wse", type="boolean", nullable=true)
     */
    private $bajaWse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="IdPerfil_Wse", type="smallint", nullable=true)
     */
    private $idperfilWse;

    public function getUsuWse(): ?string
    {
        return $this->usuWse;
    }

    public function getPasswordWse(): ?string
    {
        return $this->passwordWse;
    }

    public function getSucursalWse(): ?int
    {
        return $this->sucursalWse;
    }

    public function setSucursalWse(?int $sucursalWse): self
    {
        $this->sucursalWse = $sucursalWse;

        return $this;
    }

    public function getEmpWse(): ?int
    {
        return $this->empWse;
    }

    public function setEmpWse(?int $empWse): self
    {
        $this->empWse = $empWse;

        return $this;
    }

    public function getCliWse(): ?int
    {
        return $this->cliWse;
    }

    public function setCliWse(?int $cliWse): self
    {
        $this->cliWse = $cliWse;

        return $this;
    }

    public function getDepWse(): ?string
    {
        return $this->depWse;
    }

    public function setDepWse(?string $depWse): self
    {
        $this->depWse = $depWse;

        return $this;
    }

    public function getViaWse(): ?int
    {
        return $this->viaWse;
    }

    public function setViaWse(?int $viaWse): self
    {
        $this->viaWse = $viaWse;

        return $this;
    }

    public function getBajaWse(): ?bool
    {
        return $this->bajaWse;
    }

    public function setBajaWse(?bool $bajaWse): self
    {
        $this->bajaWse = $bajaWse;

        return $this;
    }

    public function getIdperfilWse(): ?int
    {
        return $this->idperfilWse;
    }

    public function setIdperfilWse(?int $idperfilWse): self
    {
        $this->idperfilWse = $idperfilWse;

        return $this;
    }


}
