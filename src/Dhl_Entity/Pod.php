<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pod
 *
 * @ORM\Table(name="pod", indexes={@ORM\Index(name="clv1_pod", columns={"Sucursal_Pod", "Emp_Pod", "Tip_Pod", "Enviado_Pod"}), @ORM\Index(name="_dta_index_pod_77_1995154153__K2_K4_K5_1_3_7_6553", columns={"Emp_Pod", "Num_Pod", "Lin_Pod"})})
 * @ORM\Entity
 */
class Pod
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Pod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Pod", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPod;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Pod", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipPod;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Pod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Pod", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linPod = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecEnt_Pod", type="datetime", nullable=true)
     */
    private $fecentPod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorEnt_Pod", type="datetime", nullable=true)
     */
    private $horentPod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Firma_Pod", type="string", length=40, nullable=true)
     */
    private $firmaPod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dni_Pod", type="string", length=13, nullable=true)
     */
    private $dniPod;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Enviado_Pod", type="datetime", nullable=true)
     */
    private $enviadoPod;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Imagen_Pod", type="blob", nullable=true)
     */
    private $imagenPod;

    public function getSucursalPod(): ?int
    {
        return $this->sucursalPod;
    }

    public function getEmpPod(): ?int
    {
        return $this->empPod;
    }

    public function getTipPod(): ?string
    {
        return $this->tipPod;
    }

    public function getNumPod(): ?int
    {
        return $this->numPod;
    }

    public function getLinPod(): ?int
    {
        return $this->linPod;
    }

    public function getFecentPod(): ?\DateTimeInterface
    {
        return $this->fecentPod;
    }

    public function setFecentPod(?\DateTimeInterface $fecentPod): self
    {
        $this->fecentPod = $fecentPod;

        return $this;
    }

    public function getHorentPod(): ?\DateTimeInterface
    {
        return $this->horentPod;
    }

    public function setHorentPod(?\DateTimeInterface $horentPod): self
    {
        $this->horentPod = $horentPod;

        return $this;
    }

    public function getFirmaPod(): ?string
    {
        return $this->firmaPod;
    }

    public function setFirmaPod(?string $firmaPod): self
    {
        $this->firmaPod = $firmaPod;

        return $this;
    }

    public function getDniPod(): ?string
    {
        return $this->dniPod;
    }

    public function setDniPod(?string $dniPod): self
    {
        $this->dniPod = $dniPod;

        return $this;
    }

    public function getEnviadoPod(): ?\DateTimeInterface
    {
        return $this->enviadoPod;
    }

    public function setEnviadoPod(?\DateTimeInterface $enviadoPod): self
    {
        $this->enviadoPod = $enviadoPod;

        return $this;
    }

    public function getImagenPod()
    {
        return $this->imagenPod;
    }

    public function setImagenPod($imagenPod): self
    {
        $this->imagenPod = $imagenPod;

        return $this;
    }


}
