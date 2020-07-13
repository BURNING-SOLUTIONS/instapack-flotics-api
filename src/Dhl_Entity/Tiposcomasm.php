<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposcomasm
 *
 * @ORM\Table(name="TiposComASM")
 * @ORM\Entity
 */
class Tiposcomasm
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Eas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalEas;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Eas", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empEas;

    /**
     * @var string
     *
     * @ORM\Column(name="Ser_Eas", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $serEas;

    /**
     * @var string
     *
     * @ORM\Column(name="Hor_Eas", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horEas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipNac_Eas", type="string", length=5, nullable=true)
     */
    private $tipnacEas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TipRep_Eas", type="string", length=5, nullable=true)
     */
    private $tiprepEas;

    public function getSucursalEas(): ?int
    {
        return $this->sucursalEas;
    }

    public function getEmpEas(): ?int
    {
        return $this->empEas;
    }

    public function getSerEas(): ?string
    {
        return $this->serEas;
    }

    public function getHorEas(): ?string
    {
        return $this->horEas;
    }

    public function getTipnacEas(): ?string
    {
        return $this->tipnacEas;
    }

    public function setTipnacEas(?string $tipnacEas): self
    {
        $this->tipnacEas = $tipnacEas;

        return $this;
    }

    public function getTiprepEas(): ?string
    {
        return $this->tiprepEas;
    }

    public function setTiprepEas(?string $tiprepEas): self
    {
        $this->tiprepEas = $tiprepEas;

        return $this;
    }


}
