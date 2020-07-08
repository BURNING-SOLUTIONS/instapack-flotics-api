<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menrutakm
 *
 * @ORM\Table(name="MenRutaKm")
 * @ORM\Entity
 */
class Menrutakm
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Mrk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMrk;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Mrk", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMrk;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Mrk", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecMrk;

    /**
     * @var int
     *
     * @ORM\Column(name="Men_Mrk", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menMrk;

    /**
     * @var string
     *
     * @ORM\Column(name="Rut_Mrk", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $rutMrk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KmIni_Mrk", type="integer", nullable=true)
     */
    private $kminiMrk;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KmFin_Mrk", type="integer", nullable=true)
     */
    private $kmfinMrk;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Veh_Mrk", type="string", length=2, nullable=true)
     */
    private $vehMrk;

    public function getSucursalMrk(): ?int
    {
        return $this->sucursalMrk;
    }

    public function getEmpMrk(): ?int
    {
        return $this->empMrk;
    }

    public function getFecMrk(): ?\DateTimeInterface
    {
        return $this->fecMrk;
    }

    public function getMenMrk(): ?int
    {
        return $this->menMrk;
    }

    public function getRutMrk(): ?string
    {
        return $this->rutMrk;
    }

    public function getKminiMrk(): ?int
    {
        return $this->kminiMrk;
    }

    public function setKminiMrk(?int $kminiMrk): self
    {
        $this->kminiMrk = $kminiMrk;

        return $this;
    }

    public function getKmfinMrk(): ?int
    {
        return $this->kmfinMrk;
    }

    public function setKmfinMrk(?int $kmfinMrk): self
    {
        $this->kmfinMrk = $kmfinMrk;

        return $this;
    }

    public function getVehMrk(): ?string
    {
        return $this->vehMrk;
    }

    public function setVehMrk(?string $vehMrk): self
    {
        $this->vehMrk = $vehMrk;

        return $this;
    }


}
