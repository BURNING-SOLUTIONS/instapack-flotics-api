<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caja
 *
 * @ORM\Table(name="caja", indexes={@ORM\Index(name="Clv2-Caj", columns={"Sucursal_Caj", "Emp_Caj", "Fec_Caj", "Men_Caj"})})
 * @ORM\Entity
 */
class Caja
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Caj", type="boolean", nullable=false)
     */
    private $bajaCaj = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Caj", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCaj = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Caj", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCaj = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Caj", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecCaj;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hor_Caj", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horCaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Men_Caj", type="integer", nullable=true)
     */
    private $menCaj = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Doc_Caj", type="string", length=12, nullable=true)
     */
    private $docCaj;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ent_Caj", type="float", precision=53, scale=0, nullable=true)
     */
    private $entCaj = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Sal_Caj", type="float", precision=53, scale=0, nullable=true)
     */
    private $salCaj = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Saldo_Caj", type="float", precision=53, scale=0, nullable=true)
     */
    private $saldoCaj = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Anticipo_Caj", type="boolean", nullable=false)
     */
    private $anticipoCaj = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Concepto_Caj", type="string", length=25, nullable=true)
     */
    private $conceptoCaj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Cta_Caj", type="string", length=10, nullable=true)
     */
    private $ctaCaj;

    /**
     * @var bool
     *
     * @ORM\Column(name="Cierre_Caj", type="boolean", nullable=false)
     */
    private $cierreCaj = '0';

    public function getBajaCaj(): ?bool
    {
        return $this->bajaCaj;
    }

    public function setBajaCaj(bool $bajaCaj): self
    {
        $this->bajaCaj = $bajaCaj;

        return $this;
    }

    public function getSucursalCaj(): ?int
    {
        return $this->sucursalCaj;
    }

    public function getEmpCaj(): ?int
    {
        return $this->empCaj;
    }

    public function getFecCaj(): ?\DateTimeInterface
    {
        return $this->fecCaj;
    }

    public function getHorCaj(): ?\DateTimeInterface
    {
        return $this->horCaj;
    }

    public function getMenCaj(): ?int
    {
        return $this->menCaj;
    }

    public function setMenCaj(?int $menCaj): self
    {
        $this->menCaj = $menCaj;

        return $this;
    }

    public function getDocCaj(): ?string
    {
        return $this->docCaj;
    }

    public function setDocCaj(?string $docCaj): self
    {
        $this->docCaj = $docCaj;

        return $this;
    }

    public function getEntCaj(): ?float
    {
        return $this->entCaj;
    }

    public function setEntCaj(?float $entCaj): self
    {
        $this->entCaj = $entCaj;

        return $this;
    }

    public function getSalCaj(): ?float
    {
        return $this->salCaj;
    }

    public function setSalCaj(?float $salCaj): self
    {
        $this->salCaj = $salCaj;

        return $this;
    }

    public function getSaldoCaj(): ?float
    {
        return $this->saldoCaj;
    }

    public function setSaldoCaj(?float $saldoCaj): self
    {
        $this->saldoCaj = $saldoCaj;

        return $this;
    }

    public function getAnticipoCaj(): ?bool
    {
        return $this->anticipoCaj;
    }

    public function setAnticipoCaj(bool $anticipoCaj): self
    {
        $this->anticipoCaj = $anticipoCaj;

        return $this;
    }

    public function getConceptoCaj(): ?string
    {
        return $this->conceptoCaj;
    }

    public function setConceptoCaj(?string $conceptoCaj): self
    {
        $this->conceptoCaj = $conceptoCaj;

        return $this;
    }

    public function getCtaCaj(): ?string
    {
        return $this->ctaCaj;
    }

    public function setCtaCaj(?string $ctaCaj): self
    {
        $this->ctaCaj = $ctaCaj;

        return $this;
    }

    public function getCierreCaj(): ?bool
    {
        return $this->cierreCaj;
    }

    public function setCierreCaj(bool $cierreCaj): self
    {
        $this->cierreCaj = $cierreCaj;

        return $this;
    }


}
