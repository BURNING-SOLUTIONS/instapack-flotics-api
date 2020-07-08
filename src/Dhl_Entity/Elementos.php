<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Elementos
 *
 * @ORM\Table(name="elementos")
 * @ORM\Entity
 */
class Elementos
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Ele", type="boolean", nullable=false)
     */
    private $bajaEle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ele", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalEle = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ele", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empEle = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Ele", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codEle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Ele", type="string", length=20, nullable=true)
     */
    private $nomEle;

    /**
     * @var bool
     *
     * @ORM\Column(name="Tex_Ele", type="boolean", nullable=false)
     */
    private $texEle = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="LLuvia_Ele", type="boolean", nullable=false)
     */
    private $lluviaEle = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Seguro_Ele", type="boolean", nullable=false)
     */
    private $seguroEle = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Carburante_Ele", type="boolean", nullable=false)
     */
    private $carburanteEle = '0';

    public function getBajaEle(): ?bool
    {
        return $this->bajaEle;
    }

    public function setBajaEle(bool $bajaEle): self
    {
        $this->bajaEle = $bajaEle;

        return $this;
    }

    public function getSucursalEle(): ?int
    {
        return $this->sucursalEle;
    }

    public function getEmpEle(): ?int
    {
        return $this->empEle;
    }

    public function getCodEle(): ?string
    {
        return $this->codEle;
    }

    public function getNomEle(): ?string
    {
        return $this->nomEle;
    }

    public function setNomEle(?string $nomEle): self
    {
        $this->nomEle = $nomEle;

        return $this;
    }

    public function getTexEle(): ?bool
    {
        return $this->texEle;
    }

    public function setTexEle(bool $texEle): self
    {
        $this->texEle = $texEle;

        return $this;
    }

    public function getLluviaEle(): ?bool
    {
        return $this->lluviaEle;
    }

    public function setLluviaEle(bool $lluviaEle): self
    {
        $this->lluviaEle = $lluviaEle;

        return $this;
    }

    public function getSeguroEle(): ?bool
    {
        return $this->seguroEle;
    }

    public function setSeguroEle(bool $seguroEle): self
    {
        $this->seguroEle = $seguroEle;

        return $this;
    }

    public function getCarburanteEle(): ?bool
    {
        return $this->carburanteEle;
    }

    public function setCarburanteEle(bool $carburanteEle): self
    {
        $this->carburanteEle = $carburanteEle;

        return $this;
    }


}
