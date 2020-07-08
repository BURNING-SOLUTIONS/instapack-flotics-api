<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anotaciones
 *
 * @ORM\Table(name="Anotaciones")
 * @ORM\Entity
 */
class Anotaciones
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalAno;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empAno;

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Ano", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipAno;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Ano", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numAno;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linAno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FecNot_Ano", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecnotAno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HorNot_Ano", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hornotAno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Ano", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecAno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hor_Ano", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horAno;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des1_Ano", type="string", length=50, nullable=true)
     */
    private $des1Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des2_Ano", type="string", length=50, nullable=true)
     */
    private $des2Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des3_Ano", type="string", length=50, nullable=true)
     */
    private $des3Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des4_Ano", type="string", length=50, nullable=true)
     */
    private $des4Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des5_Ano", type="string", length=50, nullable=true)
     */
    private $des5Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des6_Ano", type="string", length=50, nullable=true)
     */
    private $des6Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des7_Ano", type="string", length=50, nullable=true)
     */
    private $des7Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des8_Ano", type="string", length=50, nullable=true)
     */
    private $des8Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des9_Ano", type="string", length=50, nullable=true)
     */
    private $des9Ano;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des10_Ano", type="string", length=50, nullable=true)
     */
    private $des10Ano;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Enviado_Ano", type="datetime", nullable=true)
     */
    private $enviadoAno;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="EnviadoTrans_Ano", type="datetime", nullable=true)
     */
    private $enviadotransAno;

    public function getSucursalAno(): ?int
    {
        return $this->sucursalAno;
    }

    public function getEmpAno(): ?int
    {
        return $this->empAno;
    }

    public function getTipAno(): ?string
    {
        return $this->tipAno;
    }

    public function getNumAno(): ?int
    {
        return $this->numAno;
    }

    public function getLinAno(): ?int
    {
        return $this->linAno;
    }

    public function getFecnotAno(): ?\DateTimeInterface
    {
        return $this->fecnotAno;
    }

    public function getHornotAno(): ?\DateTimeInterface
    {
        return $this->hornotAno;
    }

    public function getFecAno(): ?\DateTimeInterface
    {
        return $this->fecAno;
    }

    public function getHorAno(): ?\DateTimeInterface
    {
        return $this->horAno;
    }

    public function getDes1Ano(): ?string
    {
        return $this->des1Ano;
    }

    public function setDes1Ano(?string $des1Ano): self
    {
        $this->des1Ano = $des1Ano;

        return $this;
    }

    public function getDes2Ano(): ?string
    {
        return $this->des2Ano;
    }

    public function setDes2Ano(?string $des2Ano): self
    {
        $this->des2Ano = $des2Ano;

        return $this;
    }

    public function getDes3Ano(): ?string
    {
        return $this->des3Ano;
    }

    public function setDes3Ano(?string $des3Ano): self
    {
        $this->des3Ano = $des3Ano;

        return $this;
    }

    public function getDes4Ano(): ?string
    {
        return $this->des4Ano;
    }

    public function setDes4Ano(?string $des4Ano): self
    {
        $this->des4Ano = $des4Ano;

        return $this;
    }

    public function getDes5Ano(): ?string
    {
        return $this->des5Ano;
    }

    public function setDes5Ano(?string $des5Ano): self
    {
        $this->des5Ano = $des5Ano;

        return $this;
    }

    public function getDes6Ano(): ?string
    {
        return $this->des6Ano;
    }

    public function setDes6Ano(?string $des6Ano): self
    {
        $this->des6Ano = $des6Ano;

        return $this;
    }

    public function getDes7Ano(): ?string
    {
        return $this->des7Ano;
    }

    public function setDes7Ano(?string $des7Ano): self
    {
        $this->des7Ano = $des7Ano;

        return $this;
    }

    public function getDes8Ano(): ?string
    {
        return $this->des8Ano;
    }

    public function setDes8Ano(?string $des8Ano): self
    {
        $this->des8Ano = $des8Ano;

        return $this;
    }

    public function getDes9Ano(): ?string
    {
        return $this->des9Ano;
    }

    public function setDes9Ano(?string $des9Ano): self
    {
        $this->des9Ano = $des9Ano;

        return $this;
    }

    public function getDes10Ano(): ?string
    {
        return $this->des10Ano;
    }

    public function setDes10Ano(?string $des10Ano): self
    {
        $this->des10Ano = $des10Ano;

        return $this;
    }

    public function getEnviadoAno(): ?\DateTimeInterface
    {
        return $this->enviadoAno;
    }

    public function setEnviadoAno(?\DateTimeInterface $enviadoAno): self
    {
        $this->enviadoAno = $enviadoAno;

        return $this;
    }

    public function getEnviadotransAno(): ?\DateTimeInterface
    {
        return $this->enviadotransAno;
    }

    public function setEnviadotransAno(?\DateTimeInterface $enviadotransAno): self
    {
        $this->enviadotransAno = $enviadotransAno;

        return $this;
    }


}
