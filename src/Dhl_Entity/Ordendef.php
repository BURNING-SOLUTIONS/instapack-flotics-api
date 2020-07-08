<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ordendef
 *
 * @ORM\Table(name="OrdenDef")
 * @ORM\Entity
 */
class Ordendef
{
    /**
     * @var string
     *
     * @ORM\Column(name="Form_Ord", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $formOrd;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campo1_Ord", type="string", length=20, nullable=true)
     */
    private $campo1Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campo2_Ord", type="string", length=20, nullable=true)
     */
    private $campo2Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campo3_Ord", type="string", length=20, nullable=true)
     */
    private $campo3Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campo4_Ord", type="string", length=20, nullable=true)
     */
    private $campo4Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Campo5_Ord", type="string", length=20, nullable=true)
     */
    private $campo5Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Orden1_Ord", type="string", length=1, nullable=true)
     */
    private $orden1Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Orden2_Ord", type="string", length=1, nullable=true)
     */
    private $orden2Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Orden3_Ord", type="string", length=1, nullable=true)
     */
    private $orden3Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Orden4_Ord", type="string", length=1, nullable=true)
     */
    private $orden4Ord;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Orden5_Ord", type="string", length=1, nullable=true)
     */
    private $orden5Ord;

    public function getFormOrd(): ?string
    {
        return $this->formOrd;
    }

    public function getCampo1Ord(): ?string
    {
        return $this->campo1Ord;
    }

    public function setCampo1Ord(?string $campo1Ord): self
    {
        $this->campo1Ord = $campo1Ord;

        return $this;
    }

    public function getCampo2Ord(): ?string
    {
        return $this->campo2Ord;
    }

    public function setCampo2Ord(?string $campo2Ord): self
    {
        $this->campo2Ord = $campo2Ord;

        return $this;
    }

    public function getCampo3Ord(): ?string
    {
        return $this->campo3Ord;
    }

    public function setCampo3Ord(?string $campo3Ord): self
    {
        $this->campo3Ord = $campo3Ord;

        return $this;
    }

    public function getCampo4Ord(): ?string
    {
        return $this->campo4Ord;
    }

    public function setCampo4Ord(?string $campo4Ord): self
    {
        $this->campo4Ord = $campo4Ord;

        return $this;
    }

    public function getCampo5Ord(): ?string
    {
        return $this->campo5Ord;
    }

    public function setCampo5Ord(?string $campo5Ord): self
    {
        $this->campo5Ord = $campo5Ord;

        return $this;
    }

    public function getOrden1Ord(): ?string
    {
        return $this->orden1Ord;
    }

    public function setOrden1Ord(?string $orden1Ord): self
    {
        $this->orden1Ord = $orden1Ord;

        return $this;
    }

    public function getOrden2Ord(): ?string
    {
        return $this->orden2Ord;
    }

    public function setOrden2Ord(?string $orden2Ord): self
    {
        $this->orden2Ord = $orden2Ord;

        return $this;
    }

    public function getOrden3Ord(): ?string
    {
        return $this->orden3Ord;
    }

    public function setOrden3Ord(?string $orden3Ord): self
    {
        $this->orden3Ord = $orden3Ord;

        return $this;
    }

    public function getOrden4Ord(): ?string
    {
        return $this->orden4Ord;
    }

    public function setOrden4Ord(?string $orden4Ord): self
    {
        $this->orden4Ord = $orden4Ord;

        return $this;
    }

    public function getOrden5Ord(): ?string
    {
        return $this->orden5Ord;
    }

    public function setOrden5Ord(?string $orden5Ord): self
    {
        $this->orden5Ord = $orden5Ord;

        return $this;
    }


}
