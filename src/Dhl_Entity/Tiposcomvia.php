<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposcomvia
 *
 * @ORM\Table(name="TiposComVia")
 * @ORM\Entity
 */
class Tiposcomvia
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tcv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTcv;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tcv", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTcv;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Tcv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaTcv;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Tcv", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipTcv;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TraNac_Tcv", type="string", length=5, nullable=true)
     */
    private $tranacTcv = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TraRep_Tcv", type="string", length=5, nullable=true)
     */
    private $trarepTcv = '';

    public function getSucursalTcv(): ?int
    {
        return $this->sucursalTcv;
    }

    public function getEmpTcv(): ?int
    {
        return $this->empTcv;
    }

    public function getViaTcv(): ?int
    {
        return $this->viaTcv;
    }

    public function getTipTcv(): ?string
    {
        return $this->tipTcv;
    }

    public function getTranacTcv(): ?string
    {
        return $this->tranacTcv;
    }

    public function setTranacTcv(?string $tranacTcv): self
    {
        $this->tranacTcv = $tranacTcv;

        return $this;
    }

    public function getTrarepTcv(): ?string
    {
        return $this->trarepTcv;
    }

    public function setTrarepTcv(?string $trarepTcv): self
    {
        $this->trarepTcv = $trarepTcv;

        return $this;
    }


}
