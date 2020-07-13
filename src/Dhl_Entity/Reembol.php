<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reembol
 *
 * @ORM\Table(name="reembol", indexes={@ORM\Index(name="clv2-Ree", columns={"Sucursal_Ree", "Emp_Ree", "Cli_Ree", "Dep_Ree", "Num_Ree", "Lin_Ree"}), @ORM\Index(name="clv3-Ree", columns={"Sucursal_Ree", "Emp_Ree", "Ofidis_Ree", "Num_Ree", "Lin_Ree"})})
 * @ORM\Entity
 */
class Reembol
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Ree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalRee = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Ree", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empRee = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Ree", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numRee = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Ree", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linRee = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Ree", type="integer", nullable=true)
     */
    private $cliRee = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Ree", type="string", length=12, nullable=true)
     */
    private $depRee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofidis_Ree", type="integer", nullable=true)
     */
    private $ofidisRee = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ideb_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $idebRee = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iree_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $ireeRee = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCanDeb_Ree", type="datetime", nullable=true)
     */
    private $feccandebRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecPagRee_Ree", type="datetime", nullable=true)
     */
    private $fecpagreeRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCobRee_Ree", type="datetime", nullable=true)
     */
    private $feccobreeRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Ree", type="datetime", nullable=true)
     */
    private $fecRee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Ree", type="string", length=100, nullable=true)
     */
    private $refRee;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iva_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $ivaRee = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComRee_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomreeRee = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComSeg_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomsegRee = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Via_Ree", type="integer", nullable=true)
     */
    private $viaRee = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NacRep_Ree", type="boolean", nullable=true)
     */
    private $nacrepRee = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCanDeb2_Ree", type="datetime", nullable=true)
     */
    private $feccandeb2Ree;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iade_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $iadeRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecPagAde_Ree", type="datetime", nullable=true)
     */
    private $fecpagadeRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecCobAde_Ree", type="datetime", nullable=true)
     */
    private $feccobadeRee;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IComAde_Ree", type="float", precision=53, scale=0, nullable=true)
     */
    private $icomadeRee;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumPago_Ree", type="integer", nullable=true)
     */
    private $numpagoRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecAnuRee_Ree", type="datetime", nullable=true)
     */
    private $fecanureeRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecAnuDeb_Ree", type="datetime", nullable=true)
     */
    private $fecanudebRee;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecAnuAde_Ree", type="datetime", nullable=true)
     */
    private $fecanuadeRee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsAnuRee_Ree", type="string", length=180, nullable=true)
     */
    private $obsanureeRee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsAnuDeb_Ree", type="string", length=180, nullable=true)
     */
    private $obsanudebRee;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ObsAnuAde_Ree", type="string", length=180, nullable=true)
     */
    private $obsanuadeRee;

    public function getSucursalRee(): ?int
    {
        return $this->sucursalRee;
    }

    public function getEmpRee(): ?int
    {
        return $this->empRee;
    }

    public function getNumRee(): ?int
    {
        return $this->numRee;
    }

    public function getLinRee(): ?int
    {
        return $this->linRee;
    }

    public function getCliRee(): ?int
    {
        return $this->cliRee;
    }

    public function setCliRee(?int $cliRee): self
    {
        $this->cliRee = $cliRee;

        return $this;
    }

    public function getDepRee(): ?string
    {
        return $this->depRee;
    }

    public function setDepRee(?string $depRee): self
    {
        $this->depRee = $depRee;

        return $this;
    }

    public function getOfidisRee(): ?int
    {
        return $this->ofidisRee;
    }

    public function setOfidisRee(?int $ofidisRee): self
    {
        $this->ofidisRee = $ofidisRee;

        return $this;
    }

    public function getIdebRee(): ?float
    {
        return $this->idebRee;
    }

    public function setIdebRee(?float $idebRee): self
    {
        $this->idebRee = $idebRee;

        return $this;
    }

    public function getIreeRee(): ?float
    {
        return $this->ireeRee;
    }

    public function setIreeRee(?float $ireeRee): self
    {
        $this->ireeRee = $ireeRee;

        return $this;
    }

    public function getFeccandebRee(): ?\DateTimeInterface
    {
        return $this->feccandebRee;
    }

    public function setFeccandebRee(?\DateTimeInterface $feccandebRee): self
    {
        $this->feccandebRee = $feccandebRee;

        return $this;
    }

    public function getFecpagreeRee(): ?\DateTimeInterface
    {
        return $this->fecpagreeRee;
    }

    public function setFecpagreeRee(?\DateTimeInterface $fecpagreeRee): self
    {
        $this->fecpagreeRee = $fecpagreeRee;

        return $this;
    }

    public function getFeccobreeRee(): ?\DateTimeInterface
    {
        return $this->feccobreeRee;
    }

    public function setFeccobreeRee(?\DateTimeInterface $feccobreeRee): self
    {
        $this->feccobreeRee = $feccobreeRee;

        return $this;
    }

    public function getFecRee(): ?\DateTimeInterface
    {
        return $this->fecRee;
    }

    public function setFecRee(?\DateTimeInterface $fecRee): self
    {
        $this->fecRee = $fecRee;

        return $this;
    }

    public function getRefRee(): ?string
    {
        return $this->refRee;
    }

    public function setRefRee(?string $refRee): self
    {
        $this->refRee = $refRee;

        return $this;
    }

    public function getIvaRee(): ?float
    {
        return $this->ivaRee;
    }

    public function setIvaRee(?float $ivaRee): self
    {
        $this->ivaRee = $ivaRee;

        return $this;
    }

    public function getIcomreeRee(): ?float
    {
        return $this->icomreeRee;
    }

    public function setIcomreeRee(?float $icomreeRee): self
    {
        $this->icomreeRee = $icomreeRee;

        return $this;
    }

    public function getIcomsegRee(): ?float
    {
        return $this->icomsegRee;
    }

    public function setIcomsegRee(?float $icomsegRee): self
    {
        $this->icomsegRee = $icomsegRee;

        return $this;
    }

    public function getViaRee(): ?int
    {
        return $this->viaRee;
    }

    public function setViaRee(?int $viaRee): self
    {
        $this->viaRee = $viaRee;

        return $this;
    }

    public function getNacrepRee(): ?bool
    {
        return $this->nacrepRee;
    }

    public function setNacrepRee(?bool $nacrepRee): self
    {
        $this->nacrepRee = $nacrepRee;

        return $this;
    }

    public function getFeccandeb2Ree(): ?\DateTimeInterface
    {
        return $this->feccandeb2Ree;
    }

    public function setFeccandeb2Ree(?\DateTimeInterface $feccandeb2Ree): self
    {
        $this->feccandeb2Ree = $feccandeb2Ree;

        return $this;
    }

    public function getIadeRee(): ?float
    {
        return $this->iadeRee;
    }

    public function setIadeRee(?float $iadeRee): self
    {
        $this->iadeRee = $iadeRee;

        return $this;
    }

    public function getFecpagadeRee(): ?\DateTimeInterface
    {
        return $this->fecpagadeRee;
    }

    public function setFecpagadeRee(?\DateTimeInterface $fecpagadeRee): self
    {
        $this->fecpagadeRee = $fecpagadeRee;

        return $this;
    }

    public function getFeccobadeRee(): ?\DateTimeInterface
    {
        return $this->feccobadeRee;
    }

    public function setFeccobadeRee(?\DateTimeInterface $feccobadeRee): self
    {
        $this->feccobadeRee = $feccobadeRee;

        return $this;
    }

    public function getIcomadeRee(): ?float
    {
        return $this->icomadeRee;
    }

    public function setIcomadeRee(?float $icomadeRee): self
    {
        $this->icomadeRee = $icomadeRee;

        return $this;
    }

    public function getNumpagoRee(): ?int
    {
        return $this->numpagoRee;
    }

    public function setNumpagoRee(?int $numpagoRee): self
    {
        $this->numpagoRee = $numpagoRee;

        return $this;
    }

    public function getFecanureeRee(): ?\DateTimeInterface
    {
        return $this->fecanureeRee;
    }

    public function setFecanureeRee(?\DateTimeInterface $fecanureeRee): self
    {
        $this->fecanureeRee = $fecanureeRee;

        return $this;
    }

    public function getFecanudebRee(): ?\DateTimeInterface
    {
        return $this->fecanudebRee;
    }

    public function setFecanudebRee(?\DateTimeInterface $fecanudebRee): self
    {
        $this->fecanudebRee = $fecanudebRee;

        return $this;
    }

    public function getFecanuadeRee(): ?\DateTimeInterface
    {
        return $this->fecanuadeRee;
    }

    public function setFecanuadeRee(?\DateTimeInterface $fecanuadeRee): self
    {
        $this->fecanuadeRee = $fecanuadeRee;

        return $this;
    }

    public function getObsanureeRee(): ?string
    {
        return $this->obsanureeRee;
    }

    public function setObsanureeRee(?string $obsanureeRee): self
    {
        $this->obsanureeRee = $obsanureeRee;

        return $this;
    }

    public function getObsanudebRee(): ?string
    {
        return $this->obsanudebRee;
    }

    public function setObsanudebRee(?string $obsanudebRee): self
    {
        $this->obsanudebRee = $obsanudebRee;

        return $this;
    }

    public function getObsanuadeRee(): ?string
    {
        return $this->obsanuadeRee;
    }

    public function setObsanuadeRee(?string $obsanuadeRee): self
    {
        $this->obsanuadeRee = $obsanuadeRee;

        return $this;
    }


}
