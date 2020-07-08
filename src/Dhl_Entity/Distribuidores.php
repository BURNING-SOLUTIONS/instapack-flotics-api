<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distribuidores
 *
 * @ORM\Table(name="distribuidores", indexes={@ORM\Index(name="clv2-Dis", columns={"Sucursal_Dis", "Emp_Dis", "Nom_Dis"})})
 * @ORM\Entity
 */
class Distribuidores
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Dis", type="boolean", nullable=false)
     */
    private $bajaDis = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Dis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalDis = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Dis", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empDis = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Dis", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaDis = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Dis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codDis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Dis", type="string", length=40, nullable=true)
     */
    private $nomDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Dis", type="string", length=50, nullable=true)
     */
    private $domDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pais_Dis", type="string", length=25, nullable=true)
     */
    private $paisDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Dis", type="string", length=35, nullable=true)
     */
    private $pobDis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Dis", type="integer", nullable=true)
     */
    private $cdpDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Dis", type="integer", nullable=true)
     */
    private $telDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fax_Dis", type="integer", nullable=true)
     */
    private $faxDis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nif_Dis", type="string", length=13, nullable=true)
     */
    private $nifDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Percon_Dis", type="string", length=50, nullable=true)
     */
    private $perconDis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Bco_Dis", type="smallint", nullable=true)
     */
    private $bcoDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Age_Dis", type="smallint", nullable=true)
     */
    private $ageDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Dc_Dis", type="smallint", nullable=true)
     */
    private $dcDis = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Cta_Dis", type="float", precision=53, scale=0, nullable=true)
     */
    private $ctaDis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Dis", type="string", length=10, nullable=true)
     */
    private $ctcDis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Iva_Dis", type="smallint", nullable=true)
     */
    private $ivaDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Recequi_Dis", type="smallint", nullable=true)
     */
    private $recequiDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Numfac_Dis", type="integer", nullable=true)
     */
    private $numfacDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Dis", type="integer", nullable=true)
     */
    private $cliDis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dep_Dis", type="string", length=12, nullable=true)
     */
    private $depDis;

    /**
     * @var bool
     *
     * @ORM\Column(name="Ficrep_Dis", type="boolean", nullable=false)
     */
    private $ficrepDis = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fpa_Dis", type="smallint", nullable=true)
     */
    private $fpaDis = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMail_Dis", type="string", length=40, nullable=true)
     */
    private $emailDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tar_Dis", type="string", length=5, nullable=true)
     */
    private $tarDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom2_Dis", type="string", length=50, nullable=true)
     */
    private $nom2Dis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="UsuEnv_Dis", type="string", length=50, nullable=true)
     */
    private $usuenvDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PassEnv_Dis", type="string", length=50, nullable=true)
     */
    private $passenvDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="IBan_Dis", type="string", length=4, nullable=true)
     */
    private $ibanDis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Identificador_Dis", type="string", length=50, nullable=true)
     */
    private $identificadorDis;

    public function getBajaDis(): ?bool
    {
        return $this->bajaDis;
    }

    public function setBajaDis(bool $bajaDis): self
    {
        $this->bajaDis = $bajaDis;

        return $this;
    }

    public function getSucursalDis(): ?int
    {
        return $this->sucursalDis;
    }

    public function getEmpDis(): ?int
    {
        return $this->empDis;
    }

    public function getViaDis(): ?int
    {
        return $this->viaDis;
    }

    public function getCodDis(): ?int
    {
        return $this->codDis;
    }

    public function getNomDis(): ?string
    {
        return $this->nomDis;
    }

    public function setNomDis(?string $nomDis): self
    {
        $this->nomDis = $nomDis;

        return $this;
    }

    public function getDomDis(): ?string
    {
        return $this->domDis;
    }

    public function setDomDis(?string $domDis): self
    {
        $this->domDis = $domDis;

        return $this;
    }

    public function getPaisDis(): ?string
    {
        return $this->paisDis;
    }

    public function setPaisDis(?string $paisDis): self
    {
        $this->paisDis = $paisDis;

        return $this;
    }

    public function getPobDis(): ?string
    {
        return $this->pobDis;
    }

    public function setPobDis(?string $pobDis): self
    {
        $this->pobDis = $pobDis;

        return $this;
    }

    public function getCdpDis(): ?int
    {
        return $this->cdpDis;
    }

    public function setCdpDis(?int $cdpDis): self
    {
        $this->cdpDis = $cdpDis;

        return $this;
    }

    public function getTelDis(): ?int
    {
        return $this->telDis;
    }

    public function setTelDis(?int $telDis): self
    {
        $this->telDis = $telDis;

        return $this;
    }

    public function getFaxDis(): ?int
    {
        return $this->faxDis;
    }

    public function setFaxDis(?int $faxDis): self
    {
        $this->faxDis = $faxDis;

        return $this;
    }

    public function getNifDis(): ?string
    {
        return $this->nifDis;
    }

    public function setNifDis(?string $nifDis): self
    {
        $this->nifDis = $nifDis;

        return $this;
    }

    public function getPerconDis(): ?string
    {
        return $this->perconDis;
    }

    public function setPerconDis(?string $perconDis): self
    {
        $this->perconDis = $perconDis;

        return $this;
    }

    public function getBcoDis(): ?int
    {
        return $this->bcoDis;
    }

    public function setBcoDis(?int $bcoDis): self
    {
        $this->bcoDis = $bcoDis;

        return $this;
    }

    public function getAgeDis(): ?int
    {
        return $this->ageDis;
    }

    public function setAgeDis(?int $ageDis): self
    {
        $this->ageDis = $ageDis;

        return $this;
    }

    public function getDcDis(): ?int
    {
        return $this->dcDis;
    }

    public function setDcDis(?int $dcDis): self
    {
        $this->dcDis = $dcDis;

        return $this;
    }

    public function getCtaDis(): ?float
    {
        return $this->ctaDis;
    }

    public function setCtaDis(?float $ctaDis): self
    {
        $this->ctaDis = $ctaDis;

        return $this;
    }

    public function getCtcDis(): ?string
    {
        return $this->ctcDis;
    }

    public function setCtcDis(?string $ctcDis): self
    {
        $this->ctcDis = $ctcDis;

        return $this;
    }

    public function getIvaDis(): ?int
    {
        return $this->ivaDis;
    }

    public function setIvaDis(?int $ivaDis): self
    {
        $this->ivaDis = $ivaDis;

        return $this;
    }

    public function getRecequiDis(): ?int
    {
        return $this->recequiDis;
    }

    public function setRecequiDis(?int $recequiDis): self
    {
        $this->recequiDis = $recequiDis;

        return $this;
    }

    public function getNumfacDis(): ?int
    {
        return $this->numfacDis;
    }

    public function setNumfacDis(?int $numfacDis): self
    {
        $this->numfacDis = $numfacDis;

        return $this;
    }

    public function getCliDis(): ?int
    {
        return $this->cliDis;
    }

    public function setCliDis(?int $cliDis): self
    {
        $this->cliDis = $cliDis;

        return $this;
    }

    public function getDepDis(): ?string
    {
        return $this->depDis;
    }

    public function setDepDis(?string $depDis): self
    {
        $this->depDis = $depDis;

        return $this;
    }

    public function getFicrepDis(): ?bool
    {
        return $this->ficrepDis;
    }

    public function setFicrepDis(bool $ficrepDis): self
    {
        $this->ficrepDis = $ficrepDis;

        return $this;
    }

    public function getFpaDis(): ?int
    {
        return $this->fpaDis;
    }

    public function setFpaDis(?int $fpaDis): self
    {
        $this->fpaDis = $fpaDis;

        return $this;
    }

    public function getEmailDis(): ?string
    {
        return $this->emailDis;
    }

    public function setEmailDis(?string $emailDis): self
    {
        $this->emailDis = $emailDis;

        return $this;
    }

    public function getTarDis(): ?string
    {
        return $this->tarDis;
    }

    public function setTarDis(?string $tarDis): self
    {
        $this->tarDis = $tarDis;

        return $this;
    }

    public function getNom2Dis(): ?string
    {
        return $this->nom2Dis;
    }

    public function setNom2Dis(?string $nom2Dis): self
    {
        $this->nom2Dis = $nom2Dis;

        return $this;
    }

    public function getUsuenvDis(): ?string
    {
        return $this->usuenvDis;
    }

    public function setUsuenvDis(?string $usuenvDis): self
    {
        $this->usuenvDis = $usuenvDis;

        return $this;
    }

    public function getPassenvDis(): ?string
    {
        return $this->passenvDis;
    }

    public function setPassenvDis(?string $passenvDis): self
    {
        $this->passenvDis = $passenvDis;

        return $this;
    }

    public function getIbanDis(): ?string
    {
        return $this->ibanDis;
    }

    public function setIbanDis(?string $ibanDis): self
    {
        $this->ibanDis = $ibanDis;

        return $this;
    }

    public function getIdentificadorDis(): ?string
    {
        return $this->identificadorDis;
    }

    public function setIdentificadorDis(?string $identificadorDis): self
    {
        $this->identificadorDis = $identificadorDis;

        return $this;
    }


}
