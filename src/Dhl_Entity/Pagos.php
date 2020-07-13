<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pagos
 *
 * @ORM\Table(name="pagos")
 * @ORM\Entity
 */
class Pagos
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Pag", type="boolean", nullable=false)
     */
    private $bajaPag = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Pag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPag = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Pag", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPag = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Pag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numPag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tipo_Pag", type="string", length=1, nullable=true)
     */
    private $tipoPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cod_Pag", type="integer", nullable=true)
     */
    private $codPag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Pag", type="string", length=40, nullable=true)
     */
    private $descPag;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Pag", type="datetime", nullable=true)
     */
    private $fecPag;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp_Pag", type="float", precision=53, scale=0, nullable=true)
     */
    private $impPag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Pag", type="string", length=10, nullable=true)
     */
    private $ctcPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa_Pag", type="string", length=1, nullable=true)
     */
    private $impalfaPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ImpAlfa1_Pag", type="string", length=1, nullable=true)
     */
    private $impalfa1Pag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="BcoTrans_Pag", type="smallint", nullable=true)
     */
    private $bcotransPag = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Pag", type="integer", nullable=true)
     */
    private $cliPag = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Pag", type="string", length=12, nullable=true)
     */
    private $depPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NCheque_Pag", type="string", length=20, nullable=true)
     */
    private $nchequePag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Pag", type="smallint", nullable=true)
     */
    private $viaPag = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dis_Pag", type="integer", nullable=true)
     */
    private $disPag = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fvto_Pag", type="datetime", nullable=true)
     */
    private $fvtoPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NOfiori_pag", type="integer", nullable=true)
     */
    private $nofioriPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NNum_Pag", type="integer", nullable=true)
     */
    private $nnumPag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NLin_Pag", type="smallint", nullable=true)
     */
    private $nlinPag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NProcede_Pag", type="string", length=1, nullable=true)
     */
    private $nprocedePag;

    public function getBajaPag(): ?bool
    {
        return $this->bajaPag;
    }

    public function setBajaPag(bool $bajaPag): self
    {
        $this->bajaPag = $bajaPag;

        return $this;
    }

    public function getSucursalPag(): ?int
    {
        return $this->sucursalPag;
    }

    public function getEmpPag(): ?int
    {
        return $this->empPag;
    }

    public function getNumPag(): ?int
    {
        return $this->numPag;
    }

    public function getTipoPag(): ?string
    {
        return $this->tipoPag;
    }

    public function setTipoPag(?string $tipoPag): self
    {
        $this->tipoPag = $tipoPag;

        return $this;
    }

    public function getCodPag(): ?int
    {
        return $this->codPag;
    }

    public function setCodPag(?int $codPag): self
    {
        $this->codPag = $codPag;

        return $this;
    }

    public function getDescPag(): ?string
    {
        return $this->descPag;
    }

    public function setDescPag(?string $descPag): self
    {
        $this->descPag = $descPag;

        return $this;
    }

    public function getFecPag(): ?\DateTimeInterface
    {
        return $this->fecPag;
    }

    public function setFecPag(?\DateTimeInterface $fecPag): self
    {
        $this->fecPag = $fecPag;

        return $this;
    }

    public function getImpPag(): ?float
    {
        return $this->impPag;
    }

    public function setImpPag(?float $impPag): self
    {
        $this->impPag = $impPag;

        return $this;
    }

    public function getCtcPag(): ?string
    {
        return $this->ctcPag;
    }

    public function setCtcPag(?string $ctcPag): self
    {
        $this->ctcPag = $ctcPag;

        return $this;
    }

    public function getImpalfaPag(): ?string
    {
        return $this->impalfaPag;
    }

    public function setImpalfaPag(?string $impalfaPag): self
    {
        $this->impalfaPag = $impalfaPag;

        return $this;
    }

    public function getImpalfa1Pag(): ?string
    {
        return $this->impalfa1Pag;
    }

    public function setImpalfa1Pag(?string $impalfa1Pag): self
    {
        $this->impalfa1Pag = $impalfa1Pag;

        return $this;
    }

    public function getBcotransPag(): ?int
    {
        return $this->bcotransPag;
    }

    public function setBcotransPag(?int $bcotransPag): self
    {
        $this->bcotransPag = $bcotransPag;

        return $this;
    }

    public function getCliPag(): ?int
    {
        return $this->cliPag;
    }

    public function setCliPag(?int $cliPag): self
    {
        $this->cliPag = $cliPag;

        return $this;
    }

    public function getDepPag(): ?string
    {
        return $this->depPag;
    }

    public function setDepPag(?string $depPag): self
    {
        $this->depPag = $depPag;

        return $this;
    }

    public function getNchequePag(): ?string
    {
        return $this->nchequePag;
    }

    public function setNchequePag(?string $nchequePag): self
    {
        $this->nchequePag = $nchequePag;

        return $this;
    }

    public function getViaPag(): ?int
    {
        return $this->viaPag;
    }

    public function setViaPag(?int $viaPag): self
    {
        $this->viaPag = $viaPag;

        return $this;
    }

    public function getDisPag(): ?int
    {
        return $this->disPag;
    }

    public function setDisPag(?int $disPag): self
    {
        $this->disPag = $disPag;

        return $this;
    }

    public function getFvtoPag(): ?\DateTimeInterface
    {
        return $this->fvtoPag;
    }

    public function setFvtoPag(?\DateTimeInterface $fvtoPag): self
    {
        $this->fvtoPag = $fvtoPag;

        return $this;
    }

    public function getNofioriPag(): ?int
    {
        return $this->nofioriPag;
    }

    public function setNofioriPag(?int $nofioriPag): self
    {
        $this->nofioriPag = $nofioriPag;

        return $this;
    }

    public function getNnumPag(): ?int
    {
        return $this->nnumPag;
    }

    public function setNnumPag(?int $nnumPag): self
    {
        $this->nnumPag = $nnumPag;

        return $this;
    }

    public function getNlinPag(): ?int
    {
        return $this->nlinPag;
    }

    public function setNlinPag(?int $nlinPag): self
    {
        $this->nlinPag = $nlinPag;

        return $this;
    }

    public function getNprocedePag(): ?string
    {
        return $this->nprocedePag;
    }

    public function setNprocedePag(?string $nprocedePag): self
    {
        $this->nprocedePag = $nprocedePag;

        return $this;
    }


}
