<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipos
 *
 * @ORM\Table(name="equipos")
 * @ORM\Entity
 */
class Equipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Equ", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $nombreEqu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pass_Equ", type="string", length=10, nullable=true)
     */
    private $passEqu;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Guarda_Equ", type="boolean", nullable=true)
     */
    private $guardaEqu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des_Equ", type="string", length=50, nullable=true)
     */
    private $desEqu;

    public function getNombreEqu(): ?string
    {
        return $this->nombreEqu;
    }

    public function getPassEqu(): ?string
    {
        return $this->passEqu;
    }

    public function setPassEqu(?string $passEqu): self
    {
        $this->passEqu = $passEqu;

        return $this;
    }

    public function getGuardaEqu(): ?bool
    {
        return $this->guardaEqu;
    }

    public function setGuardaEqu(?bool $guardaEqu): self
    {
        $this->guardaEqu = $guardaEqu;

        return $this;
    }

    public function getDesEqu(): ?string
    {
        return $this->desEqu;
    }

    public function setDesEqu(?string $desEqu): self
    {
        $this->desEqu = $desEqu;

        return $this;
    }


}
