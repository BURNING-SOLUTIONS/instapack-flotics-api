<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comerciales
 *
 * @ORM\Table(name="comerciales")
 * @ORM\Entity
 */
class Comerciales
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Com", type="boolean", nullable=false)
     */
    private $bajaCom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Com", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Com", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCom = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Com", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCom = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Com", type="string", length=40, nullable=true)
     */
    private $nomCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dir_Com", type="string", length=50, nullable=true)
     */
    private $dirCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Com", type="string", length=25, nullable=true)
     */
    private $paisCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Com", type="string", length=35, nullable=true)
     */
    private $pobCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Com", type="integer", nullable=true)
     */
    private $cdpCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Com", type="integer", nullable=true)
     */
    private $telCom = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Com", type="string", length=13, nullable=true)
     */
    private $nifCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Com", type="smallint", nullable=true)
     */
    private $fpaCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dvto_Com", type="smallint", nullable=true)
     */
    private $dvtoCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dia_Com", type="smallint", nullable=true)
     */
    private $diaCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Com", type="smallint", nullable=true)
     */
    private $bcoCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Com", type="smallint", nullable=true)
     */
    private $ageCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Com", type="smallint", nullable=true)
     */
    private $dcCom = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Com", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaCom = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Com", type="string", length=10, nullable=true)
     */
    private $ctcCom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Afi_Com", type="string", length=12, nullable=true)
     */
    private $afiCom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecalta_Com", type="datetime", nullable=true)
     */
    private $fecaltaCom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecReno_Com", type="datetime", nullable=true)
     */
    private $fecrenoCom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Iva_Com", type="smallint", nullable=true)
     */
    private $ivaCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Recequi_Com", type="smallint", nullable=true)
     */
    private $recequiCom = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Numfac_Com", type="integer", nullable=true)
     */
    private $numfacCom = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Salario_Com", type="float", precision=53, scale=0, nullable=true)
     */
    private $salarioCom = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Com", type="string", length=4, nullable=true)
     */
    private $ibanCom;

    public function getBajaCom(): ?bool
    {
        return $this->bajaCom;
    }

    public function setBajaCom(bool $bajaCom): self
    {
        $this->bajaCom = $bajaCom;

        return $this;
    }

    public function getSucursalCom(): ?int
    {
        return $this->sucursalCom;
    }

    public function getEmpCom(): ?int
    {
        return $this->empCom;
    }

    public function getCodCom(): ?int
    {
        return $this->codCom;
    }

    public function getNomCom(): ?string
    {
        return $this->nomCom;
    }

    public function setNomCom(?string $nomCom): self
    {
        $this->nomCom = $nomCom;

        return $this;
    }

    public function getDirCom(): ?string
    {
        return $this->dirCom;
    }

    public function setDirCom(?string $dirCom): self
    {
        $this->dirCom = $dirCom;

        return $this;
    }

    public function getPaisCom(): ?string
    {
        return $this->paisCom;
    }

    public function setPaisCom(?string $paisCom): self
    {
        $this->paisCom = $paisCom;

        return $this;
    }

    public function getPobCom(): ?string
    {
        return $this->pobCom;
    }

    public function setPobCom(?string $pobCom): self
    {
        $this->pobCom = $pobCom;

        return $this;
    }

    public function getCdpCom(): ?int
    {
        return $this->cdpCom;
    }

    public function setCdpCom(?int $cdpCom): self
    {
        $this->cdpCom = $cdpCom;

        return $this;
    }

    public function getTelCom(): ?int
    {
        return $this->telCom;
    }

    public function setTelCom(?int $telCom): self
    {
        $this->telCom = $telCom;

        return $this;
    }

    public function getNifCom(): ?string
    {
        return $this->nifCom;
    }

    public function setNifCom(?string $nifCom): self
    {
        $this->nifCom = $nifCom;

        return $this;
    }

    public function getFpaCom(): ?int
    {
        return $this->fpaCom;
    }

    public function setFpaCom(?int $fpaCom): self
    {
        $this->fpaCom = $fpaCom;

        return $this;
    }

    public function getDvtoCom(): ?int
    {
        return $this->dvtoCom;
    }

    public function setDvtoCom(?int $dvtoCom): self
    {
        $this->dvtoCom = $dvtoCom;

        return $this;
    }

    public function getDiaCom(): ?int
    {
        return $this->diaCom;
    }

    public function setDiaCom(?int $diaCom): self
    {
        $this->diaCom = $diaCom;

        return $this;
    }

    public function getBcoCom(): ?int
    {
        return $this->bcoCom;
    }

    public function setBcoCom(?int $bcoCom): self
    {
        $this->bcoCom = $bcoCom;

        return $this;
    }

    public function getAgeCom(): ?int
    {
        return $this->ageCom;
    }

    public function setAgeCom(?int $ageCom): self
    {
        $this->ageCom = $ageCom;

        return $this;
    }

    public function getDcCom(): ?int
    {
        return $this->dcCom;
    }

    public function setDcCom(?int $dcCom): self
    {
        $this->dcCom = $dcCom;

        return $this;
    }

    public function getCtaCom(): ?float
    {
        return $this->ctaCom;
    }

    public function setCtaCom(?float $ctaCom): self
    {
        $this->ctaCom = $ctaCom;

        return $this;
    }

    public function getCtcCom(): ?string
    {
        return $this->ctcCom;
    }

    public function setCtcCom(?string $ctcCom): self
    {
        $this->ctcCom = $ctcCom;

        return $this;
    }

    public function getAfiCom(): ?string
    {
        return $this->afiCom;
    }

    public function setAfiCom(?string $afiCom): self
    {
        $this->afiCom = $afiCom;

        return $this;
    }

    public function getFecaltaCom(): ?\DateTimeInterface
    {
        return $this->fecaltaCom;
    }

    public function setFecaltaCom(?\DateTimeInterface $fecaltaCom): self
    {
        $this->fecaltaCom = $fecaltaCom;

        return $this;
    }

    public function getFecrenoCom(): ?\DateTimeInterface
    {
        return $this->fecrenoCom;
    }

    public function setFecrenoCom(?\DateTimeInterface $fecrenoCom): self
    {
        $this->fecrenoCom = $fecrenoCom;

        return $this;
    }

    public function getIvaCom(): ?int
    {
        return $this->ivaCom;
    }

    public function setIvaCom(?int $ivaCom): self
    {
        $this->ivaCom = $ivaCom;

        return $this;
    }

    public function getRecequiCom(): ?int
    {
        return $this->recequiCom;
    }

    public function setRecequiCom(?int $recequiCom): self
    {
        $this->recequiCom = $recequiCom;

        return $this;
    }

    public function getNumfacCom(): ?int
    {
        return $this->numfacCom;
    }

    public function setNumfacCom(?int $numfacCom): self
    {
        $this->numfacCom = $numfacCom;

        return $this;
    }

    public function getSalarioCom(): ?float
    {
        return $this->salarioCom;
    }

    public function setSalarioCom(?float $salarioCom): self
    {
        $this->salarioCom = $salarioCom;

        return $this;
    }

    public function getIbanCom(): ?string
    {
        return $this->ibanCom;
    }

    public function setIbanCom(?string $ibanCom): self
    {
        $this->ibanCom = $ibanCom;

        return $this;
    }


}
