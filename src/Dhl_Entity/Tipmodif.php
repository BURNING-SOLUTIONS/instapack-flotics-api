<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipmodif
 *
 * @ORM\Table(name="TipModif")
 * @ORM\Entity
 */
class Tipmodif
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tim", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTim = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tim", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTim = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Apli_Tim", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $apliTim;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tim", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codTim;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Tim", type="string", length=30, nullable=true)
     */
    private $descTim;

    public function getSucursalTim(): ?int
    {
        return $this->sucursalTim;
    }

    public function getEmpTim(): ?int
    {
        return $this->empTim;
    }

    public function getApliTim(): ?string
    {
        return $this->apliTim;
    }

    public function getCodTim(): ?string
    {
        return $this->codTim;
    }

    public function getDescTim(): ?string
    {
        return $this->descTim;
    }

    public function setDescTim(?string $descTim): self
    {
        $this->descTim = $descTim;

        return $this;
    }


}
