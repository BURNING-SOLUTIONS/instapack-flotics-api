<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Falsob
 *
 * @ORM\Table(name="falsob", indexes={@ORM\Index(name="clv1_Fso", columns={"Sucursal_Fso", "Emp_Fso", "Ofiori_Fso", "Tip_Fso", "Ref_Fso"}), @ORM\Index(name="clv2_Fso", columns={"Sucursal_Fso", "Emp_Fso", "Enviado_Fso", "Ofiori_Fso", "Tip_Fso"})})
 * @ORM\Entity
 */
class Falsob
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fso", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Ofiori_Fso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ofioriFso;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Fso", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipFso;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fso", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFso = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Fso", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linFso = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Fso", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refFso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Enviado_Fso", type="datetime", nullable=true)
     */
    private $enviadoFso;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fso", type="datetime", nullable=true)
     */
    private $fecFso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Proceso_Fso", type="string", length=1, nullable=true)
     */
    private $procesoFso;

    public function getSucursalFso(): ?int
    {
        return $this->sucursalFso;
    }

    public function getEmpFso(): ?int
    {
        return $this->empFso;
    }

    public function getOfioriFso(): ?int
    {
        return $this->ofioriFso;
    }

    public function getTipFso(): ?string
    {
        return $this->tipFso;
    }

    public function getNumFso(): ?int
    {
        return $this->numFso;
    }

    public function getLinFso(): ?int
    {
        return $this->linFso;
    }

    public function getRefFso(): ?string
    {
        return $this->refFso;
    }

    public function getEnviadoFso(): ?\DateTimeInterface
    {
        return $this->enviadoFso;
    }

    public function setEnviadoFso(?\DateTimeInterface $enviadoFso): self
    {
        $this->enviadoFso = $enviadoFso;

        return $this;
    }

    public function getFecFso(): ?\DateTimeInterface
    {
        return $this->fecFso;
    }

    public function setFecFso(?\DateTimeInterface $fecFso): self
    {
        $this->fecFso = $fecFso;

        return $this;
    }

    public function getProcesoFso(): ?string
    {
        return $this->procesoFso;
    }

    public function setProcesoFso(?string $procesoFso): self
    {
        $this->procesoFso = $procesoFso;

        return $this;
    }


}
