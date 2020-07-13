<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maxminvia
 *
 * @ORM\Table(name="MaxMinVia")
 * @ORM\Entity
 */
class Maxminvia
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Miv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMiv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Miv", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMiv = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Miv", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoMiv;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Miv", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numMiv = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde_Miv", type="float", precision=53, scale=0, nullable=true)
     */
    private $desdeMiv = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta_Miv", type="float", precision=53, scale=0, nullable=true)
     */
    private $hastaMiv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Miv", type="smallint", nullable=false)
     */
    private $viaMiv = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Preferen_Miv", type="boolean", nullable=true)
     */
    private $preferenMiv;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Distrib_Miv", type="integer", nullable=true)
     */
    private $distribMiv;

    public function getSucursalMiv(): ?int
    {
        return $this->sucursalMiv;
    }

    public function getEmpMiv(): ?int
    {
        return $this->empMiv;
    }

    public function getTipoMiv(): ?string
    {
        return $this->tipoMiv;
    }

    public function getNumMiv(): ?int
    {
        return $this->numMiv;
    }

    public function getDesdeMiv(): ?float
    {
        return $this->desdeMiv;
    }

    public function setDesdeMiv(?float $desdeMiv): self
    {
        $this->desdeMiv = $desdeMiv;

        return $this;
    }

    public function getHastaMiv(): ?float
    {
        return $this->hastaMiv;
    }

    public function setHastaMiv(?float $hastaMiv): self
    {
        $this->hastaMiv = $hastaMiv;

        return $this;
    }

    public function getViaMiv(): ?int
    {
        return $this->viaMiv;
    }

    public function setViaMiv(int $viaMiv): self
    {
        $this->viaMiv = $viaMiv;

        return $this;
    }

    public function getPreferenMiv(): ?bool
    {
        return $this->preferenMiv;
    }

    public function setPreferenMiv(?bool $preferenMiv): self
    {
        $this->preferenMiv = $preferenMiv;

        return $this;
    }

    public function getDistribMiv(): ?int
    {
        return $this->distribMiv;
    }

    public function setDistribMiv(?int $distribMiv): self
    {
        $this->distribMiv = $distribMiv;

        return $this;
    }


}
