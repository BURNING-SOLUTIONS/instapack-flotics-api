<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonprecli
 *
 * @ORM\Table(name="ZonpreCli")
 * @ORM\Entity
 */
class Zonprecli
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Zpc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalZpc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Zpc", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empZpc = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Zpc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliZpc;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Zpc", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depZpc;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Zpc", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaZpc;

    /**
     * @var int
     *
     * @ORM\Column(name="DesdeCdp_Zpc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $desdecdpZpc;

    /**
     * @var int
     *
     * @ORM\Column(name="HastaCdp_Zpc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hastacdpZpc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Zona_Zpc", type="string", length=5, nullable=true)
     */
    private $zonaZpc;

    public function getSucursalZpc(): ?int
    {
        return $this->sucursalZpc;
    }

    public function getEmpZpc(): ?int
    {
        return $this->empZpc;
    }

    public function getCliZpc(): ?int
    {
        return $this->cliZpc;
    }

    public function getDepZpc(): ?string
    {
        return $this->depZpc;
    }

    public function getViaZpc(): ?int
    {
        return $this->viaZpc;
    }

    public function getDesdecdpZpc(): ?int
    {
        return $this->desdecdpZpc;
    }

    public function getHastacdpZpc(): ?int
    {
        return $this->hastacdpZpc;
    }

    public function getZonaZpc(): ?string
    {
        return $this->zonaZpc;
    }

    public function setZonaZpc(?string $zonaZpc): self
    {
        $this->zonaZpc = $zonaZpc;

        return $this;
    }


}
