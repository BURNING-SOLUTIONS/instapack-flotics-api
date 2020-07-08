<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Password
 *
 * @ORM\Table(name="Password", indexes={@ORM\Index(name="clv2-pas", columns={"Programa_Pas"})})
 * @ORM\Entity
 */
class Password
{
    /**
     * @var int
     *
     * @ORM\Column(name="Usuario_Pas", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $usuarioPas;

    /**
     * @var string
     *
     * @ORM\Column(name="Programa_Pas", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $programaPas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Pass", type="string", length=40, nullable=true)
     */
    private $descPass;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Listado_Pas", type="boolean", nullable=true)
     */
    private $listadoPas;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Consulta_Pas", type="boolean", nullable=true)
     */
    private $consultaPas;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Modifica_Pas", type="boolean", nullable=true)
     */
    private $modificaPas;

    public function getUsuarioPas(): ?int
    {
        return $this->usuarioPas;
    }

    public function getProgramaPas(): ?string
    {
        return $this->programaPas;
    }

    public function getDescPass(): ?string
    {
        return $this->descPass;
    }

    public function setDescPass(?string $descPass): self
    {
        $this->descPass = $descPass;

        return $this;
    }

    public function getListadoPas(): ?bool
    {
        return $this->listadoPas;
    }

    public function setListadoPas(?bool $listadoPas): self
    {
        $this->listadoPas = $listadoPas;

        return $this;
    }

    public function getConsultaPas(): ?bool
    {
        return $this->consultaPas;
    }

    public function setConsultaPas(?bool $consultaPas): self
    {
        $this->consultaPas = $consultaPas;

        return $this;
    }

    public function getModificaPas(): ?bool
    {
        return $this->modificaPas;
    }

    public function setModificaPas(?bool $modificaPas): self
    {
        $this->modificaPas = $modificaPas;

        return $this;
    }


}
