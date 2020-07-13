<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonpreorides
 *
 * @ORM\Table(name="ZonpreOriDes")
 * @ORM\Entity
 */
class Zonpreorides
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Zod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalZod;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Zod", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empZod;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Zod", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codZod;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Zod", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaZod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DCdpOri_Zod", type="integer", nullable=true)
     */
    private $dcdporiZod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HCdpOri_Zod", type="integer", nullable=true)
     */
    private $hcdporiZod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DCdpDes_Zod", type="integer", nullable=true)
     */
    private $dcdpdesZod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="HCdpDes_Zod", type="integer", nullable=true)
     */
    private $hcdpdesZod;

    public function getSucursalZod(): ?int
    {
        return $this->sucursalZod;
    }

    public function getEmpZod(): ?int
    {
        return $this->empZod;
    }

    public function getCodZod(): ?string
    {
        return $this->codZod;
    }

    public function getViaZod(): ?int
    {
        return $this->viaZod;
    }

    public function getDcdporiZod(): ?int
    {
        return $this->dcdporiZod;
    }

    public function setDcdporiZod(?int $dcdporiZod): self
    {
        $this->dcdporiZod = $dcdporiZod;

        return $this;
    }

    public function getHcdporiZod(): ?int
    {
        return $this->hcdporiZod;
    }

    public function setHcdporiZod(?int $hcdporiZod): self
    {
        $this->hcdporiZod = $hcdporiZod;

        return $this;
    }

    public function getDcdpdesZod(): ?int
    {
        return $this->dcdpdesZod;
    }

    public function setDcdpdesZod(?int $dcdpdesZod): self
    {
        $this->dcdpdesZod = $dcdpdesZod;

        return $this;
    }

    public function getHcdpdesZod(): ?int
    {
        return $this->hcdpdesZod;
    }

    public function setHcdpdesZod(?int $hcdpdesZod): self
    {
        $this->hcdpdesZod = $hcdpdesZod;

        return $this;
    }


}
