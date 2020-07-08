<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ftpfacturae
 *
 * @ORM\Table(name="FtpFacturaE")
 * @ORM\Entity
 */
class Ftpfacturae
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fxf", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFxf;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fxf", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFxf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ruta_Fxf", type="string", length=200, nullable=true)
     */
    private $rutaFxf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Usuario_Fxf", type="string", length=50, nullable=true)
     */
    private $usuarioFxf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Password_Fxf", type="string", length=50, nullable=true)
     */
    private $passwordFxf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Puerto_Fxf", type="string", length=4, nullable=true)
     */
    private $puertoFxf;

    public function getSucursalFxf(): ?int
    {
        return $this->sucursalFxf;
    }

    public function getEmpFxf(): ?int
    {
        return $this->empFxf;
    }

    public function getRutaFxf(): ?string
    {
        return $this->rutaFxf;
    }

    public function setRutaFxf(?string $rutaFxf): self
    {
        $this->rutaFxf = $rutaFxf;

        return $this;
    }

    public function getUsuarioFxf(): ?string
    {
        return $this->usuarioFxf;
    }

    public function setUsuarioFxf(?string $usuarioFxf): self
    {
        $this->usuarioFxf = $usuarioFxf;

        return $this;
    }

    public function getPasswordFxf(): ?string
    {
        return $this->passwordFxf;
    }

    public function setPasswordFxf(?string $passwordFxf): self
    {
        $this->passwordFxf = $passwordFxf;

        return $this;
    }

    public function getPuertoFxf(): ?string
    {
        return $this->puertoFxf;
    }

    public function setPuertoFxf(?string $puertoFxf): self
    {
        $this->puertoFxf = $puertoFxf;

        return $this;
    }


}
