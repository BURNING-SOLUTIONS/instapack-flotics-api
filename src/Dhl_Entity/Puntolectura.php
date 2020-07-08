<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puntolectura
 *
 * @ORM\Table(name="PuntoLectura")
 * @ORM\Entity
 */
class Puntolectura
{
    /**
     * @var bool|null
     *
     * @ORM\Column(name="Baja_Ple", type="boolean", nullable=true)
     */
    private $bajaPle;

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ple", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPle;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ple", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPle;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Ple", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codPle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Ple", type="string", length=50, nullable=true)
     */
    private $nomPle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accion_Ple", type="string", length=1, nullable=true)
     */
    private $accionPle;

    public function getBajaPle(): ?bool
    {
        return $this->bajaPle;
    }

    public function setBajaPle(?bool $bajaPle): self
    {
        $this->bajaPle = $bajaPle;

        return $this;
    }

    public function getSucursalPle(): ?int
    {
        return $this->sucursalPle;
    }

    public function getEmpPle(): ?int
    {
        return $this->empPle;
    }

    public function getCodPle(): ?string
    {
        return $this->codPle;
    }

    public function getNomPle(): ?string
    {
        return $this->nomPle;
    }

    public function setNomPle(?string $nomPle): self
    {
        $this->nomPle = $nomPle;

        return $this;
    }

    public function getAccionPle(): ?string
    {
        return $this->accionPle;
    }

    public function setAccionPle(?string $accionPle): self
    {
        $this->accionPle = $accionPle;

        return $this;
    }


}
