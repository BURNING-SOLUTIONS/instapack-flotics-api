<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fijbultos
 *
 * @ORM\Table(name="Fijbultos")
 * @ORM\Entity
 */
class Fijbultos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fbu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFbu;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fbu", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFbu;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fbu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFbu;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Fbu", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linFbu;

    /**
     * @var int
     *
     * @ORM\Column(name="Bul_Fbu", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bulFbu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conte_Fbu", type="string", length=1, nullable=true)
     */
    private $conteFbu;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pes_Fbu", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesFbu;

    /**
     * @var float|null
     *
     * @ORM\Column(name="PesVol_Fbu", type="float", precision=24, scale=0, nullable=true)
     */
    private $pesvolFbu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim1_Fbu", type="smallint", nullable=true)
     */
    private $dim1Fbu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim2_Fbu", type="smallint", nullable=true)
     */
    private $dim2Fbu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dim3_Fbu", type="smallint", nullable=true)
     */
    private $dim3Fbu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Fbu", type="string", length=100, nullable=true)
     */
    private $refFbu;

    public function getSucursalFbu(): ?int
    {
        return $this->sucursalFbu;
    }

    public function getEmpFbu(): ?int
    {
        return $this->empFbu;
    }

    public function getNumFbu(): ?int
    {
        return $this->numFbu;
    }

    public function getLinFbu(): ?int
    {
        return $this->linFbu;
    }

    public function getBulFbu(): ?int
    {
        return $this->bulFbu;
    }

    public function getConteFbu(): ?string
    {
        return $this->conteFbu;
    }

    public function setConteFbu(?string $conteFbu): self
    {
        $this->conteFbu = $conteFbu;

        return $this;
    }

    public function getPesFbu(): ?float
    {
        return $this->pesFbu;
    }

    public function setPesFbu(?float $pesFbu): self
    {
        $this->pesFbu = $pesFbu;

        return $this;
    }

    public function getPesvolFbu(): ?float
    {
        return $this->pesvolFbu;
    }

    public function setPesvolFbu(?float $pesvolFbu): self
    {
        $this->pesvolFbu = $pesvolFbu;

        return $this;
    }

    public function getDim1Fbu(): ?int
    {
        return $this->dim1Fbu;
    }

    public function setDim1Fbu(?int $dim1Fbu): self
    {
        $this->dim1Fbu = $dim1Fbu;

        return $this;
    }

    public function getDim2Fbu(): ?int
    {
        return $this->dim2Fbu;
    }

    public function setDim2Fbu(?int $dim2Fbu): self
    {
        $this->dim2Fbu = $dim2Fbu;

        return $this;
    }

    public function getDim3Fbu(): ?int
    {
        return $this->dim3Fbu;
    }

    public function setDim3Fbu(?int $dim3Fbu): self
    {
        $this->dim3Fbu = $dim3Fbu;

        return $this;
    }

    public function getRefFbu(): ?string
    {
        return $this->refFbu;
    }

    public function setRefFbu(?string $refFbu): self
    {
        $this->refFbu = $refFbu;

        return $this;
    }


}
