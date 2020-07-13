<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personal
 *
 * @ORM\Table(name="personal")
 * @ORM\Entity
 */
class Personal
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Per", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPer = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Per", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPer = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Men_Per", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menPer = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Per", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecPer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Him_Per", type="datetime", nullable=true)
     */
    private $himPer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hfm_Per", type="datetime", nullable=true)
     */
    private $hfmPer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hit_Per", type="datetime", nullable=true)
     */
    private $hitPer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hft_Per", type="datetime", nullable=true)
     */
    private $hftPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodInc_Per", type="string", length=5, nullable=true)
     */
    private $codincPer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs_Per", type="string", length=50, nullable=true)
     */
    private $obsPer;

    public function getSucursalPer(): ?int
    {
        return $this->sucursalPer;
    }

    public function getEmpPer(): ?int
    {
        return $this->empPer;
    }

    public function getMenPer(): ?int
    {
        return $this->menPer;
    }

    public function getFecPer(): ?\DateTimeInterface
    {
        return $this->fecPer;
    }

    public function getHimPer(): ?\DateTimeInterface
    {
        return $this->himPer;
    }

    public function setHimPer(?\DateTimeInterface $himPer): self
    {
        $this->himPer = $himPer;

        return $this;
    }

    public function getHfmPer(): ?\DateTimeInterface
    {
        return $this->hfmPer;
    }

    public function setHfmPer(?\DateTimeInterface $hfmPer): self
    {
        $this->hfmPer = $hfmPer;

        return $this;
    }

    public function getHitPer(): ?\DateTimeInterface
    {
        return $this->hitPer;
    }

    public function setHitPer(?\DateTimeInterface $hitPer): self
    {
        $this->hitPer = $hitPer;

        return $this;
    }

    public function getHftPer(): ?\DateTimeInterface
    {
        return $this->hftPer;
    }

    public function setHftPer(?\DateTimeInterface $hftPer): self
    {
        $this->hftPer = $hftPer;

        return $this;
    }

    public function getCodincPer(): ?string
    {
        return $this->codincPer;
    }

    public function setCodincPer(?string $codincPer): self
    {
        $this->codincPer = $codincPer;

        return $this;
    }

    public function getObsPer(): ?string
    {
        return $this->obsPer;
    }

    public function setObsPer(?string $obsPer): self
    {
        $this->obsPer = $obsPer;

        return $this;
    }


}
