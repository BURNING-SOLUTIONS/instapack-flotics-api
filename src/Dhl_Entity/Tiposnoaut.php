<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposnoaut
 *
 * @ORM\Table(name="TiposNoAut")
 * @ORM\Entity
 */
class Tiposnoaut
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTna;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tna", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTna;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Tna", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaTna;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpOriIni_Tna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdporiiniTna;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpOriFin_Tna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdporifinTna;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDesIni_Tna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpdesiniTna;

    /**
     * @var int
     *
     * @ORM\Column(name="CdpDesFin_Tna", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpdesfinTna;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Tna", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipTna;

    public function getSucursalTna(): ?int
    {
        return $this->sucursalTna;
    }

    public function getEmpTna(): ?int
    {
        return $this->empTna;
    }

    public function getViaTna(): ?int
    {
        return $this->viaTna;
    }

    public function getCdporiiniTna(): ?int
    {
        return $this->cdporiiniTna;
    }

    public function getCdporifinTna(): ?int
    {
        return $this->cdporifinTna;
    }

    public function getCdpdesiniTna(): ?int
    {
        return $this->cdpdesiniTna;
    }

    public function getCdpdesfinTna(): ?int
    {
        return $this->cdpdesfinTna;
    }

    public function getTipTna(): ?string
    {
        return $this->tipTna;
    }


}
