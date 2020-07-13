<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observa
 *
 * @ORM\Table(name="observa")
 * @ORM\Entity
 */
class Observa
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Obs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalObs = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Obs", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empObs = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TipCod_Obs", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipcodObs;

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Obs", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codObs = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Obs", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depObs;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Obs", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoObs;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Obs", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linObs = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Texto_Obs", type="string", length=60, nullable=true)
     */
    private $textoObs;

    /**
     * @var bool
     *
     * @ORM\Column(name="Mostrar_Obs", type="boolean", nullable=false)
     */
    private $mostrarObs = '0';

    public function getSucursalObs(): ?int
    {
        return $this->sucursalObs;
    }

    public function getEmpObs(): ?int
    {
        return $this->empObs;
    }

    public function getTipcodObs(): ?string
    {
        return $this->tipcodObs;
    }

    public function getCodObs(): ?int
    {
        return $this->codObs;
    }

    public function getDepObs(): ?string
    {
        return $this->depObs;
    }

    public function getTipoObs(): ?string
    {
        return $this->tipoObs;
    }

    public function getLinObs(): ?int
    {
        return $this->linObs;
    }

    public function getTextoObs(): ?string
    {
        return $this->textoObs;
    }

    public function setTextoObs(?string $textoObs): self
    {
        $this->textoObs = $textoObs;

        return $this;
    }

    public function getMostrarObs(): ?bool
    {
        return $this->mostrarObs;
    }

    public function setMostrarObs(bool $mostrarObs): self
    {
        $this->mostrarObs = $mostrarObs;

        return $this;
    }


}
