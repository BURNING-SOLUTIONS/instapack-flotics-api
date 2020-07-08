<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prior
 *
 * @ORM\Table(name="prior")
 * @ORM\Entity
 */
class Prior
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_pri", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codPri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tex_pri", type="string", length=50, nullable=true)
     */
    private $texPri;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Color_pri", type="string", length=9, nullable=true)
     */
    private $colorPri;

    public function getCodPri(): ?string
    {
        return $this->codPri;
    }

    public function getTexPri(): ?string
    {
        return $this->texPri;
    }

    public function setTexPri(?string $texPri): self
    {
        $this->texPri = $texPri;

        return $this;
    }

    public function getColorPri(): ?string
    {
        return $this->colorPri;
    }

    public function setColorPri(?string $colorPri): self
    {
        $this->colorPri = $colorPri;

        return $this;
    }


}
