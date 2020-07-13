<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notas
 *
 * @ORM\Table(name="notas", indexes={@ORM\Index(name="clv1_not", columns={"Sucursal_Not", "Emp_Not", "Tip_Not", "Enviado_Not"})})
 * @ORM\Entity
 */
class Notas
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Not", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalNot = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Not", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empNot = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tip_Not", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipNot;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Not", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numNot = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Not", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linNot = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Not", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecNot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hor_Not", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horNot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Usu_Not", type="smallint", nullable=true)
     */
    private $usuNot = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="UsuSol_Not", type="smallint", nullable=true)
     */
    private $ususolNot = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecSol_Not", type="datetime", nullable=true)
     */
    private $fecsolNot;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HorSol_Not", type="datetime", nullable=true)
     */
    private $horsolNot;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des1_Not", type="string", length=50, nullable=true)
     */
    private $des1Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des2_Not", type="string", length=50, nullable=true)
     */
    private $des2Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des3_Not", type="string", length=50, nullable=true)
     */
    private $des3Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des4_Not", type="string", length=50, nullable=true)
     */
    private $des4Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des5_Not", type="string", length=50, nullable=true)
     */
    private $des5Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des6_Not", type="string", length=50, nullable=true)
     */
    private $des6Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des7_Not", type="string", length=50, nullable=true)
     */
    private $des7Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des8_Not", type="string", length=50, nullable=true)
     */
    private $des8Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des9_Not", type="string", length=50, nullable=true)
     */
    private $des9Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Des10_Not", type="string", length=50, nullable=true)
     */
    private $des10Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu1_Not", type="string", length=50, nullable=true)
     */
    private $solu1Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu2_Not", type="string", length=50, nullable=true)
     */
    private $solu2Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu3_Not", type="string", length=50, nullable=true)
     */
    private $solu3Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu4_Not", type="string", length=50, nullable=true)
     */
    private $solu4Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu5_Not", type="string", length=50, nullable=true)
     */
    private $solu5Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu6_Not", type="string", length=50, nullable=true)
     */
    private $solu6Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu7_Not", type="string", length=50, nullable=true)
     */
    private $solu7Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu8_Not", type="string", length=50, nullable=true)
     */
    private $solu8Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu9_Not", type="string", length=50, nullable=true)
     */
    private $solu9Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Solu10_Not", type="string", length=50, nullable=true)
     */
    private $solu10Not;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodInc_Not", type="string", length=5, nullable=true)
     */
    private $codincNot;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Enviado_Not", type="datetime", nullable=true)
     */
    private $enviadoNot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Not", type="integer", nullable=true)
     */
    private $cliNot = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Not", type="string", length=12, nullable=true)
     */
    private $depNot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofidis_Not", type="integer", nullable=true)
     */
    private $ofidisNot = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Not", type="integer", nullable=true)
     */
    private $menNot = '0';

    public function getSucursalNot(): ?int
    {
        return $this->sucursalNot;
    }

    public function getEmpNot(): ?int
    {
        return $this->empNot;
    }

    public function getTipNot(): ?string
    {
        return $this->tipNot;
    }

    public function getNumNot(): ?int
    {
        return $this->numNot;
    }

    public function getLinNot(): ?int
    {
        return $this->linNot;
    }

    public function getFecNot(): ?\DateTimeInterface
    {
        return $this->fecNot;
    }

    public function getHorNot(): ?\DateTimeInterface
    {
        return $this->horNot;
    }

    public function getUsuNot(): ?int
    {
        return $this->usuNot;
    }

    public function setUsuNot(?int $usuNot): self
    {
        $this->usuNot = $usuNot;

        return $this;
    }

    public function getUsusolNot(): ?int
    {
        return $this->ususolNot;
    }

    public function setUsusolNot(?int $ususolNot): self
    {
        $this->ususolNot = $ususolNot;

        return $this;
    }

    public function getFecsolNot(): ?\DateTimeInterface
    {
        return $this->fecsolNot;
    }

    public function setFecsolNot(?\DateTimeInterface $fecsolNot): self
    {
        $this->fecsolNot = $fecsolNot;

        return $this;
    }

    public function getHorsolNot(): ?\DateTimeInterface
    {
        return $this->horsolNot;
    }

    public function setHorsolNot(?\DateTimeInterface $horsolNot): self
    {
        $this->horsolNot = $horsolNot;

        return $this;
    }

    public function getDes1Not(): ?string
    {
        return $this->des1Not;
    }

    public function setDes1Not(?string $des1Not): self
    {
        $this->des1Not = $des1Not;

        return $this;
    }

    public function getDes2Not(): ?string
    {
        return $this->des2Not;
    }

    public function setDes2Not(?string $des2Not): self
    {
        $this->des2Not = $des2Not;

        return $this;
    }

    public function getDes3Not(): ?string
    {
        return $this->des3Not;
    }

    public function setDes3Not(?string $des3Not): self
    {
        $this->des3Not = $des3Not;

        return $this;
    }

    public function getDes4Not(): ?string
    {
        return $this->des4Not;
    }

    public function setDes4Not(?string $des4Not): self
    {
        $this->des4Not = $des4Not;

        return $this;
    }

    public function getDes5Not(): ?string
    {
        return $this->des5Not;
    }

    public function setDes5Not(?string $des5Not): self
    {
        $this->des5Not = $des5Not;

        return $this;
    }

    public function getDes6Not(): ?string
    {
        return $this->des6Not;
    }

    public function setDes6Not(?string $des6Not): self
    {
        $this->des6Not = $des6Not;

        return $this;
    }

    public function getDes7Not(): ?string
    {
        return $this->des7Not;
    }

    public function setDes7Not(?string $des7Not): self
    {
        $this->des7Not = $des7Not;

        return $this;
    }

    public function getDes8Not(): ?string
    {
        return $this->des8Not;
    }

    public function setDes8Not(?string $des8Not): self
    {
        $this->des8Not = $des8Not;

        return $this;
    }

    public function getDes9Not(): ?string
    {
        return $this->des9Not;
    }

    public function setDes9Not(?string $des9Not): self
    {
        $this->des9Not = $des9Not;

        return $this;
    }

    public function getDes10Not(): ?string
    {
        return $this->des10Not;
    }

    public function setDes10Not(?string $des10Not): self
    {
        $this->des10Not = $des10Not;

        return $this;
    }

    public function getSolu1Not(): ?string
    {
        return $this->solu1Not;
    }

    public function setSolu1Not(?string $solu1Not): self
    {
        $this->solu1Not = $solu1Not;

        return $this;
    }

    public function getSolu2Not(): ?string
    {
        return $this->solu2Not;
    }

    public function setSolu2Not(?string $solu2Not): self
    {
        $this->solu2Not = $solu2Not;

        return $this;
    }

    public function getSolu3Not(): ?string
    {
        return $this->solu3Not;
    }

    public function setSolu3Not(?string $solu3Not): self
    {
        $this->solu3Not = $solu3Not;

        return $this;
    }

    public function getSolu4Not(): ?string
    {
        return $this->solu4Not;
    }

    public function setSolu4Not(?string $solu4Not): self
    {
        $this->solu4Not = $solu4Not;

        return $this;
    }

    public function getSolu5Not(): ?string
    {
        return $this->solu5Not;
    }

    public function setSolu5Not(?string $solu5Not): self
    {
        $this->solu5Not = $solu5Not;

        return $this;
    }

    public function getSolu6Not(): ?string
    {
        return $this->solu6Not;
    }

    public function setSolu6Not(?string $solu6Not): self
    {
        $this->solu6Not = $solu6Not;

        return $this;
    }

    public function getSolu7Not(): ?string
    {
        return $this->solu7Not;
    }

    public function setSolu7Not(?string $solu7Not): self
    {
        $this->solu7Not = $solu7Not;

        return $this;
    }

    public function getSolu8Not(): ?string
    {
        return $this->solu8Not;
    }

    public function setSolu8Not(?string $solu8Not): self
    {
        $this->solu8Not = $solu8Not;

        return $this;
    }

    public function getSolu9Not(): ?string
    {
        return $this->solu9Not;
    }

    public function setSolu9Not(?string $solu9Not): self
    {
        $this->solu9Not = $solu9Not;

        return $this;
    }

    public function getSolu10Not(): ?string
    {
        return $this->solu10Not;
    }

    public function setSolu10Not(?string $solu10Not): self
    {
        $this->solu10Not = $solu10Not;

        return $this;
    }

    public function getCodincNot(): ?string
    {
        return $this->codincNot;
    }

    public function setCodincNot(?string $codincNot): self
    {
        $this->codincNot = $codincNot;

        return $this;
    }

    public function getEnviadoNot(): ?\DateTimeInterface
    {
        return $this->enviadoNot;
    }

    public function setEnviadoNot(?\DateTimeInterface $enviadoNot): self
    {
        $this->enviadoNot = $enviadoNot;

        return $this;
    }

    public function getCliNot(): ?int
    {
        return $this->cliNot;
    }

    public function setCliNot(?int $cliNot): self
    {
        $this->cliNot = $cliNot;

        return $this;
    }

    public function getDepNot(): ?string
    {
        return $this->depNot;
    }

    public function setDepNot(?string $depNot): self
    {
        $this->depNot = $depNot;

        return $this;
    }

    public function getOfidisNot(): ?int
    {
        return $this->ofidisNot;
    }

    public function setOfidisNot(?int $ofidisNot): self
    {
        $this->ofidisNot = $ofidisNot;

        return $this;
    }

    public function getMenNot(): ?int
    {
        return $this->menNot;
    }

    public function setMenNot(?int $menNot): self
    {
        $this->menNot = $menNot;

        return $this;
    }


}
