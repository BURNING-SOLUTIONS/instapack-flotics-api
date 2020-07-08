<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menzona
 *
 * @ORM\Table(name="menzona")
 * @ORM\Entity
 */
class Menzona
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_mzo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalMzo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_mzo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empMzo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_mzo", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipMzo;

    /**
     * @var int
     *
     * @ORM\Column(name="Cdp_mzo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpMzo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Zona_mzo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $zonaMzo;

    /**
     * @var int
     *
     * @ORM\Column(name="Men_mzo", type="integer", nullable=false)
     */
    private $menMzo = '0';

    public function getSucursalMzo(): ?int
    {
        return $this->sucursalMzo;
    }

    public function getEmpMzo(): ?int
    {
        return $this->empMzo;
    }

    public function getTipMzo(): ?string
    {
        return $this->tipMzo;
    }

    public function getCdpMzo(): ?int
    {
        return $this->cdpMzo;
    }

    public function getZonaMzo(): ?string
    {
        return $this->zonaMzo;
    }

    public function getMenMzo(): ?int
    {
        return $this->menMzo;
    }

    public function setMenMzo(int $menMzo): self
    {
        $this->menMzo = $menMzo;

        return $this;
    }


}
