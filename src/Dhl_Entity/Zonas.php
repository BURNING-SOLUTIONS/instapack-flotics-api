<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonas
 *
 * @ORM\Table(name="zonas")
 * @ORM\Entity
 */
class Zonas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Zon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalZon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Zon", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empZon = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cdp_Zon", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpZon = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Zon", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codZon;

    /**
     * @var string
     *
     * @ORM\Column(name="Pla_Zon", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $plaZon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Zon", type="string", length=30, nullable=true)
     */
    private $nomZon;

    /**
     * @var bool
     *
     * @ORM\Column(name="PlaCdp_Zon", type="boolean", nullable=false)
     */
    private $placdpZon = '0';

    public function getSucursalZon(): ?int
    {
        return $this->sucursalZon;
    }

    public function getEmpZon(): ?int
    {
        return $this->empZon;
    }

    public function getCdpZon(): ?int
    {
        return $this->cdpZon;
    }

    public function getCodZon(): ?string
    {
        return $this->codZon;
    }

    public function getPlaZon(): ?string
    {
        return $this->plaZon;
    }

    public function getNomZon(): ?string
    {
        return $this->nomZon;
    }

    public function setNomZon(?string $nomZon): self
    {
        $this->nomZon = $nomZon;

        return $this;
    }

    public function getPlacdpZon(): ?bool
    {
        return $this->placdpZon;
    }

    public function setPlacdpZon(bool $placdpZon): self
    {
        $this->placdpZon = $placdpZon;

        return $this;
    }


}
