<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configmail
 *
 * @ORM\Table(name="configmail")
 * @ORM\Entity
 */
class Configmail
{
    /**
     * @var int
     *
     * @ORM\Column(name="Clave_Cfm", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $claveCfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MTrans_Cfm", type="smallint", nullable=true)
     */
    private $mtransCfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRep1_Cfm", type="integer", nullable=true)
     */
    private $clirep1Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRep2_Cfm", type="integer", nullable=true)
     */
    private $clirep2Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRep3_Cfm", type="integer", nullable=true)
     */
    private $clirep3Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRep4_Cfm", type="integer", nullable=true)
     */
    private $clirep4Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRep5_Cfm", type="integer", nullable=true)
     */
    private $clirep5Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraOfi1_Cfm", type="integer", nullable=true)
     */
    private $miraofi1Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraOfi2_Cfm", type="integer", nullable=true)
     */
    private $miraofi2Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraOfi3_Cfm", type="integer", nullable=true)
     */
    private $miraofi3Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraOfi4_Cfm", type="integer", nullable=true)
     */
    private $miraofi4Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraOfi5_Cfm", type="integer", nullable=true)
     */
    private $miraofi5Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraVia1_Cfm", type="smallint", nullable=true)
     */
    private $miravia1Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraVia2_Cfm", type="smallint", nullable=true)
     */
    private $miravia2Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraVia3_Cfm", type="smallint", nullable=true)
     */
    private $miravia3Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraVia4_Cfm", type="smallint", nullable=true)
     */
    private $miravia4Cfm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MiraVia5_Cfm", type="smallint", nullable=true)
     */
    private $miravia5Cfm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Impre_Cfm", type="string", length=50, nullable=true)
     */
    private $impreCfm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ip1_Cmf", type="string", length=12, nullable=true)
     */
    private $ip1Cmf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ip2_Cmf", type="string", length=12, nullable=true)
     */
    private $ip2Cmf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ip3_Cmf", type="string", length=12, nullable=true)
     */
    private $ip3Cmf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ip4_Cmf", type="string", length=12, nullable=true)
     */
    private $ip4Cmf;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ip5_Cmf", type="string", length=12, nullable=true)
     */
    private $ip5Cmf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp1_Cmf", type="smallint", nullable=true)
     */
    private $emp1Cmf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp2_Cmf", type="smallint", nullable=true)
     */
    private $emp2Cmf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp3_Cmf", type="smallint", nullable=true)
     */
    private $emp3Cmf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp4_Cmf", type="smallint", nullable=true)
     */
    private $emp4Cmf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Emp5_Cmf", type="smallint", nullable=true)
     */
    private $emp5Cmf;

    public function getClaveCfm(): ?int
    {
        return $this->claveCfm;
    }

    public function getMtransCfm(): ?int
    {
        return $this->mtransCfm;
    }

    public function setMtransCfm(?int $mtransCfm): self
    {
        $this->mtransCfm = $mtransCfm;

        return $this;
    }

    public function getClirep1Cfm(): ?int
    {
        return $this->clirep1Cfm;
    }

    public function setClirep1Cfm(?int $clirep1Cfm): self
    {
        $this->clirep1Cfm = $clirep1Cfm;

        return $this;
    }

    public function getClirep2Cfm(): ?int
    {
        return $this->clirep2Cfm;
    }

    public function setClirep2Cfm(?int $clirep2Cfm): self
    {
        $this->clirep2Cfm = $clirep2Cfm;

        return $this;
    }

    public function getClirep3Cfm(): ?int
    {
        return $this->clirep3Cfm;
    }

    public function setClirep3Cfm(?int $clirep3Cfm): self
    {
        $this->clirep3Cfm = $clirep3Cfm;

        return $this;
    }

    public function getClirep4Cfm(): ?int
    {
        return $this->clirep4Cfm;
    }

    public function setClirep4Cfm(?int $clirep4Cfm): self
    {
        $this->clirep4Cfm = $clirep4Cfm;

        return $this;
    }

    public function getClirep5Cfm(): ?int
    {
        return $this->clirep5Cfm;
    }

    public function setClirep5Cfm(?int $clirep5Cfm): self
    {
        $this->clirep5Cfm = $clirep5Cfm;

        return $this;
    }

    public function getMiraofi1Cfm(): ?int
    {
        return $this->miraofi1Cfm;
    }

    public function setMiraofi1Cfm(?int $miraofi1Cfm): self
    {
        $this->miraofi1Cfm = $miraofi1Cfm;

        return $this;
    }

    public function getMiraofi2Cfm(): ?int
    {
        return $this->miraofi2Cfm;
    }

    public function setMiraofi2Cfm(?int $miraofi2Cfm): self
    {
        $this->miraofi2Cfm = $miraofi2Cfm;

        return $this;
    }

    public function getMiraofi3Cfm(): ?int
    {
        return $this->miraofi3Cfm;
    }

    public function setMiraofi3Cfm(?int $miraofi3Cfm): self
    {
        $this->miraofi3Cfm = $miraofi3Cfm;

        return $this;
    }

    public function getMiraofi4Cfm(): ?int
    {
        return $this->miraofi4Cfm;
    }

    public function setMiraofi4Cfm(?int $miraofi4Cfm): self
    {
        $this->miraofi4Cfm = $miraofi4Cfm;

        return $this;
    }

    public function getMiraofi5Cfm(): ?int
    {
        return $this->miraofi5Cfm;
    }

    public function setMiraofi5Cfm(?int $miraofi5Cfm): self
    {
        $this->miraofi5Cfm = $miraofi5Cfm;

        return $this;
    }

    public function getMiravia1Cfm(): ?int
    {
        return $this->miravia1Cfm;
    }

    public function setMiravia1Cfm(?int $miravia1Cfm): self
    {
        $this->miravia1Cfm = $miravia1Cfm;

        return $this;
    }

    public function getMiravia2Cfm(): ?int
    {
        return $this->miravia2Cfm;
    }

    public function setMiravia2Cfm(?int $miravia2Cfm): self
    {
        $this->miravia2Cfm = $miravia2Cfm;

        return $this;
    }

    public function getMiravia3Cfm(): ?int
    {
        return $this->miravia3Cfm;
    }

    public function setMiravia3Cfm(?int $miravia3Cfm): self
    {
        $this->miravia3Cfm = $miravia3Cfm;

        return $this;
    }

    public function getMiravia4Cfm(): ?int
    {
        return $this->miravia4Cfm;
    }

    public function setMiravia4Cfm(?int $miravia4Cfm): self
    {
        $this->miravia4Cfm = $miravia4Cfm;

        return $this;
    }

    public function getMiravia5Cfm(): ?int
    {
        return $this->miravia5Cfm;
    }

    public function setMiravia5Cfm(?int $miravia5Cfm): self
    {
        $this->miravia5Cfm = $miravia5Cfm;

        return $this;
    }

    public function getImpreCfm(): ?string
    {
        return $this->impreCfm;
    }

    public function setImpreCfm(?string $impreCfm): self
    {
        $this->impreCfm = $impreCfm;

        return $this;
    }

    public function getIp1Cmf(): ?string
    {
        return $this->ip1Cmf;
    }

    public function setIp1Cmf(?string $ip1Cmf): self
    {
        $this->ip1Cmf = $ip1Cmf;

        return $this;
    }

    public function getIp2Cmf(): ?string
    {
        return $this->ip2Cmf;
    }

    public function setIp2Cmf(?string $ip2Cmf): self
    {
        $this->ip2Cmf = $ip2Cmf;

        return $this;
    }

    public function getIp3Cmf(): ?string
    {
        return $this->ip3Cmf;
    }

    public function setIp3Cmf(?string $ip3Cmf): self
    {
        $this->ip3Cmf = $ip3Cmf;

        return $this;
    }

    public function getIp4Cmf(): ?string
    {
        return $this->ip4Cmf;
    }

    public function setIp4Cmf(?string $ip4Cmf): self
    {
        $this->ip4Cmf = $ip4Cmf;

        return $this;
    }

    public function getIp5Cmf(): ?string
    {
        return $this->ip5Cmf;
    }

    public function setIp5Cmf(?string $ip5Cmf): self
    {
        $this->ip5Cmf = $ip5Cmf;

        return $this;
    }

    public function getEmp1Cmf(): ?int
    {
        return $this->emp1Cmf;
    }

    public function setEmp1Cmf(?int $emp1Cmf): self
    {
        $this->emp1Cmf = $emp1Cmf;

        return $this;
    }

    public function getEmp2Cmf(): ?int
    {
        return $this->emp2Cmf;
    }

    public function setEmp2Cmf(?int $emp2Cmf): self
    {
        $this->emp2Cmf = $emp2Cmf;

        return $this;
    }

    public function getEmp3Cmf(): ?int
    {
        return $this->emp3Cmf;
    }

    public function setEmp3Cmf(?int $emp3Cmf): self
    {
        $this->emp3Cmf = $emp3Cmf;

        return $this;
    }

    public function getEmp4Cmf(): ?int
    {
        return $this->emp4Cmf;
    }

    public function setEmp4Cmf(?int $emp4Cmf): self
    {
        $this->emp4Cmf = $emp4Cmf;

        return $this;
    }

    public function getEmp5Cmf(): ?int
    {
        return $this->emp5Cmf;
    }

    public function setEmp5Cmf(?int $emp5Cmf): self
    {
        $this->emp5Cmf = $emp5Cmf;

        return $this;
    }


}
