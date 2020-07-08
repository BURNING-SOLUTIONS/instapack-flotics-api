<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturcomis
 *
 * @ORM\Table(name="FacturComis")
 * @ORM\Entity
 */
class Facturcomis
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Fcm", type="boolean", nullable=false)
     */
    private $bajaFcm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Fcm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFcm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Fcm", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFcm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Fcm", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFcm;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Fcm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFcm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OfiOri_Fcm", type="integer", nullable=false)
     */
    private $ofioriFcm;

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Fcm", type="integer", nullable=false)
     */
    private $cliFcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Fcm", type="string", length=40, nullable=true)
     */
    private $nomFcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Fcm", type="string", length=50, nullable=true)
     */
    private $domFcm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ndom_Fcm", type="smallint", nullable=true)
     */
    private $ndomFcm = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tdom_Fcm", type="string", length=3, nullable=true)
     */
    private $tdomFcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pdom_Fcm", type="string", length=10, nullable=true)
     */
    private $pdomFcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Fcm", type="string", length=25, nullable=true)
     */
    private $paisFcm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Fcm", type="string", length=35, nullable=true)
     */
    private $pobFcm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Fcm", type="integer", nullable=true)
     */
    private $cdpFcm = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Fcm", type="string", length=13, nullable=true)
     */
    private $nifFcm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Bruto_Fcm", type="float", precision=53, scale=0, nullable=true)
     */
    private $brutoFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Pdto_Fcm", type="float", precision=24, scale=0, nullable=true)
     */
    private $pdtoFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Idto_Fcm", type="float", precision=53, scale=0, nullable=true)
     */
    private $idtoFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Base_Fcm", type="float", precision=53, scale=0, nullable=true)
     */
    private $baseFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Piva_Fcm", type="float", precision=24, scale=0, nullable=true)
     */
    private $pivaFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Iiva_Fcm", type="float", precision=53, scale=0, nullable=true)
     */
    private $iivaFcm = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Total_Fcm", type="float", precision=53, scale=0, nullable=true)
     */
    private $totalFcm = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NumAlb_Fcm", type="integer", nullable=true)
     */
    private $numalbFcm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="LinAlb_Fcm", type="smallint", nullable=true)
     */
    private $linalbFcm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Fcm", type="datetime", nullable=true)
     */
    private $fecFcm;

    public function getBajaFcm(): ?bool
    {
        return $this->bajaFcm;
    }

    public function setBajaFcm(bool $bajaFcm): self
    {
        $this->bajaFcm = $bajaFcm;

        return $this;
    }

    public function getSucursalFcm(): ?int
    {
        return $this->sucursalFcm;
    }

    public function getEmpFcm(): ?int
    {
        return $this->empFcm;
    }

    public function getFabFcm(): ?string
    {
        return $this->fabFcm;
    }

    public function getNumFcm(): ?int
    {
        return $this->numFcm;
    }

    public function getOfioriFcm(): ?int
    {
        return $this->ofioriFcm;
    }

    public function setOfioriFcm(int $ofioriFcm): self
    {
        $this->ofioriFcm = $ofioriFcm;

        return $this;
    }

    public function getCliFcm(): ?int
    {
        return $this->cliFcm;
    }

    public function setCliFcm(int $cliFcm): self
    {
        $this->cliFcm = $cliFcm;

        return $this;
    }

    public function getNomFcm(): ?string
    {
        return $this->nomFcm;
    }

    public function setNomFcm(?string $nomFcm): self
    {
        $this->nomFcm = $nomFcm;

        return $this;
    }

    public function getDomFcm(): ?string
    {
        return $this->domFcm;
    }

    public function setDomFcm(?string $domFcm): self
    {
        $this->domFcm = $domFcm;

        return $this;
    }

    public function getNdomFcm(): ?int
    {
        return $this->ndomFcm;
    }

    public function setNdomFcm(?int $ndomFcm): self
    {
        $this->ndomFcm = $ndomFcm;

        return $this;
    }

    public function getTdomFcm(): ?string
    {
        return $this->tdomFcm;
    }

    public function setTdomFcm(?string $tdomFcm): self
    {
        $this->tdomFcm = $tdomFcm;

        return $this;
    }

    public function getPdomFcm(): ?string
    {
        return $this->pdomFcm;
    }

    public function setPdomFcm(?string $pdomFcm): self
    {
        $this->pdomFcm = $pdomFcm;

        return $this;
    }

    public function getPaisFcm(): ?string
    {
        return $this->paisFcm;
    }

    public function setPaisFcm(?string $paisFcm): self
    {
        $this->paisFcm = $paisFcm;

        return $this;
    }

    public function getPobFcm(): ?string
    {
        return $this->pobFcm;
    }

    public function setPobFcm(?string $pobFcm): self
    {
        $this->pobFcm = $pobFcm;

        return $this;
    }

    public function getCdpFcm(): ?int
    {
        return $this->cdpFcm;
    }

    public function setCdpFcm(?int $cdpFcm): self
    {
        $this->cdpFcm = $cdpFcm;

        return $this;
    }

    public function getNifFcm(): ?string
    {
        return $this->nifFcm;
    }

    public function setNifFcm(?string $nifFcm): self
    {
        $this->nifFcm = $nifFcm;

        return $this;
    }

    public function getBrutoFcm(): ?float
    {
        return $this->brutoFcm;
    }

    public function setBrutoFcm(?float $brutoFcm): self
    {
        $this->brutoFcm = $brutoFcm;

        return $this;
    }

    public function getPdtoFcm(): ?float
    {
        return $this->pdtoFcm;
    }

    public function setPdtoFcm(?float $pdtoFcm): self
    {
        $this->pdtoFcm = $pdtoFcm;

        return $this;
    }

    public function getIdtoFcm(): ?float
    {
        return $this->idtoFcm;
    }

    public function setIdtoFcm(?float $idtoFcm): self
    {
        $this->idtoFcm = $idtoFcm;

        return $this;
    }

    public function getBaseFcm(): ?float
    {
        return $this->baseFcm;
    }

    public function setBaseFcm(?float $baseFcm): self
    {
        $this->baseFcm = $baseFcm;

        return $this;
    }

    public function getPivaFcm(): ?float
    {
        return $this->pivaFcm;
    }

    public function setPivaFcm(?float $pivaFcm): self
    {
        $this->pivaFcm = $pivaFcm;

        return $this;
    }

    public function getIivaFcm(): ?float
    {
        return $this->iivaFcm;
    }

    public function setIivaFcm(?float $iivaFcm): self
    {
        $this->iivaFcm = $iivaFcm;

        return $this;
    }

    public function getTotalFcm(): ?float
    {
        return $this->totalFcm;
    }

    public function setTotalFcm(?float $totalFcm): self
    {
        $this->totalFcm = $totalFcm;

        return $this;
    }

    public function getNumalbFcm(): ?int
    {
        return $this->numalbFcm;
    }

    public function setNumalbFcm(?int $numalbFcm): self
    {
        $this->numalbFcm = $numalbFcm;

        return $this;
    }

    public function getLinalbFcm(): ?int
    {
        return $this->linalbFcm;
    }

    public function setLinalbFcm(?int $linalbFcm): self
    {
        $this->linalbFcm = $linalbFcm;

        return $this;
    }

    public function getFecFcm(): ?\DateTimeInterface
    {
        return $this->fecFcm;
    }

    public function setFecFcm(?\DateTimeInterface $fecFcm): self
    {
        $this->fecFcm = $fecFcm;

        return $this;
    }


}
