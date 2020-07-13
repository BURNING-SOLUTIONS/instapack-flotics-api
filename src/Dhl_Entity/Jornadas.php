<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornadas
 *
 * @ORM\Table(name="jornadas")
 * @ORM\Entity
 */
class Jornadas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Jor", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codJor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Jor", type="string", length=15, nullable=true)
     */
    private $nomJor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Desde1_Jor", type="datetime", nullable=true)
     */
    private $desde1Jor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hasta1_Jor", type="datetime", nullable=true)
     */
    private $hasta1Jor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Desde2_Jor", type="datetime", nullable=true)
     */
    private $desde2Jor;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hasta2_Jor", type="datetime", nullable=true)
     */
    private $hasta2Jor;

    public function getCodJor(): ?string
    {
        return $this->codJor;
    }

    public function getNomJor(): ?string
    {
        return $this->nomJor;
    }

    public function setNomJor(?string $nomJor): self
    {
        $this->nomJor = $nomJor;

        return $this;
    }

    public function getDesde1Jor(): ?\DateTimeInterface
    {
        return $this->desde1Jor;
    }

    public function setDesde1Jor(?\DateTimeInterface $desde1Jor): self
    {
        $this->desde1Jor = $desde1Jor;

        return $this;
    }

    public function getHasta1Jor(): ?\DateTimeInterface
    {
        return $this->hasta1Jor;
    }

    public function setHasta1Jor(?\DateTimeInterface $hasta1Jor): self
    {
        $this->hasta1Jor = $hasta1Jor;

        return $this;
    }

    public function getDesde2Jor(): ?\DateTimeInterface
    {
        return $this->desde2Jor;
    }

    public function setDesde2Jor(?\DateTimeInterface $desde2Jor): self
    {
        $this->desde2Jor = $desde2Jor;

        return $this;
    }

    public function getHasta2Jor(): ?\DateTimeInterface
    {
        return $this->hasta2Jor;
    }

    public function setHasta2Jor(?\DateTimeInterface $hasta2Jor): self
    {
        $this->hasta2Jor = $hasta2Jor;

        return $this;
    }


}
