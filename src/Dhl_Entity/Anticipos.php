<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anticipos
 *
 * @ORM\Table(name="anticipos")
 * @ORM\Entity
 */
class Anticipos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalAnt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ant", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empAnt = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Men_Ant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menAnt = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Ant", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecAnt;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Ant", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refAnt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp_Ant", type="float", precision=53, scale=0, nullable=true)
     */
    private $impAnt = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepto_Ant", type="string", length=35, nullable=true)
     */
    private $conceptoAnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Autorizado_Ant", type="string", length=25, nullable=true)
     */
    private $autorizadoAnt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Deducible_Ant", type="string", length=1, nullable=true)
     */
    private $deducibleAnt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MesDev_Ant", type="smallint", nullable=true)
     */
    private $mesdevAnt = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="AnyDev_Ant", type="smallint", nullable=true)
     */
    private $anydevAnt = '0';

    public function getSucursalAnt(): ?int
    {
        return $this->sucursalAnt;
    }

    public function getEmpAnt(): ?int
    {
        return $this->empAnt;
    }

    public function getMenAnt(): ?int
    {
        return $this->menAnt;
    }

    public function getFecAnt(): ?\DateTimeInterface
    {
        return $this->fecAnt;
    }

    public function getRefAnt(): ?string
    {
        return $this->refAnt;
    }

    public function getImpAnt(): ?float
    {
        return $this->impAnt;
    }

    public function setImpAnt(?float $impAnt): self
    {
        $this->impAnt = $impAnt;

        return $this;
    }

    public function getConceptoAnt(): ?string
    {
        return $this->conceptoAnt;
    }

    public function setConceptoAnt(?string $conceptoAnt): self
    {
        $this->conceptoAnt = $conceptoAnt;

        return $this;
    }

    public function getAutorizadoAnt(): ?string
    {
        return $this->autorizadoAnt;
    }

    public function setAutorizadoAnt(?string $autorizadoAnt): self
    {
        $this->autorizadoAnt = $autorizadoAnt;

        return $this;
    }

    public function getDeducibleAnt(): ?string
    {
        return $this->deducibleAnt;
    }

    public function setDeducibleAnt(?string $deducibleAnt): self
    {
        $this->deducibleAnt = $deducibleAnt;

        return $this;
    }

    public function getMesdevAnt(): ?int
    {
        return $this->mesdevAnt;
    }

    public function setMesdevAnt(?int $mesdevAnt): self
    {
        $this->mesdevAnt = $mesdevAnt;

        return $this;
    }

    public function getAnydevAnt(): ?int
    {
        return $this->anydevAnt;
    }

    public function setAnydevAnt(?int $anydevAnt): self
    {
        $this->anydevAnt = $anydevAnt;

        return $this;
    }


}
