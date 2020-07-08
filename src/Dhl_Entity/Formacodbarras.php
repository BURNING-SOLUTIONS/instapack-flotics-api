<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formacodbarras
 *
 * @ORM\Table(name="FormaCodBarras")
 * @ORM\Entity
 */
class Formacodbarras
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fcb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFcb;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fcb", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFcb;

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Fcb", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosAlbAlb_Fcb", type="smallint", nullable=true)
     */
    private $posalbalbFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosAlbEti_Fcb", type="smallint", nullable=true)
     */
    private $posalbetiFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefAlb_Fcb", type="smallint", nullable=true)
     */
    private $posrefalbFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefEti_Fcb", type="smallint", nullable=true)
     */
    private $posrefetiFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosBulAlb_Fcb", type="smallint", nullable=true)
     */
    private $posbulalbFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosBulEti_Fcb", type="smallint", nullable=true)
     */
    private $posbuletiFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefBulAlb_Fcb", type="smallint", nullable=true)
     */
    private $posrefbulalbFcb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PosRefBulEti_Fcb", type="smallint", nullable=true)
     */
    private $posrefbuletiFcb;

    public function getSucursalFcb(): ?int
    {
        return $this->sucursalFcb;
    }

    public function getEmpFcb(): ?int
    {
        return $this->empFcb;
    }

    public function getCodFcb(): ?string
    {
        return $this->codFcb;
    }

    public function getPosalbalbFcb(): ?int
    {
        return $this->posalbalbFcb;
    }

    public function setPosalbalbFcb(?int $posalbalbFcb): self
    {
        $this->posalbalbFcb = $posalbalbFcb;

        return $this;
    }

    public function getPosalbetiFcb(): ?int
    {
        return $this->posalbetiFcb;
    }

    public function setPosalbetiFcb(?int $posalbetiFcb): self
    {
        $this->posalbetiFcb = $posalbetiFcb;

        return $this;
    }

    public function getPosrefalbFcb(): ?int
    {
        return $this->posrefalbFcb;
    }

    public function setPosrefalbFcb(?int $posrefalbFcb): self
    {
        $this->posrefalbFcb = $posrefalbFcb;

        return $this;
    }

    public function getPosrefetiFcb(): ?int
    {
        return $this->posrefetiFcb;
    }

    public function setPosrefetiFcb(?int $posrefetiFcb): self
    {
        $this->posrefetiFcb = $posrefetiFcb;

        return $this;
    }

    public function getPosbulalbFcb(): ?int
    {
        return $this->posbulalbFcb;
    }

    public function setPosbulalbFcb(?int $posbulalbFcb): self
    {
        $this->posbulalbFcb = $posbulalbFcb;

        return $this;
    }

    public function getPosbuletiFcb(): ?int
    {
        return $this->posbuletiFcb;
    }

    public function setPosbuletiFcb(?int $posbuletiFcb): self
    {
        $this->posbuletiFcb = $posbuletiFcb;

        return $this;
    }

    public function getPosrefbulalbFcb(): ?int
    {
        return $this->posrefbulalbFcb;
    }

    public function setPosrefbulalbFcb(?int $posrefbulalbFcb): self
    {
        $this->posrefbulalbFcb = $posrefbulalbFcb;

        return $this;
    }

    public function getPosrefbuletiFcb(): ?int
    {
        return $this->posrefbuletiFcb;
    }

    public function setPosrefbuletiFcb(?int $posrefbuletiFcb): self
    {
        $this->posrefbuletiFcb = $posrefbuletiFcb;

        return $this;
    }


}
