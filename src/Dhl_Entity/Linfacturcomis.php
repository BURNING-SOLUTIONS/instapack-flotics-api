<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linfacturcomis
 *
 * @ORM\Table(name="LinFacturComis")
 * @ORM\Entity
 */
class Linfacturcomis
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Flm", type="boolean", nullable=false)
     */
    private $bajaFlm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Flm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalFlm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Flm", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empFlm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Fab_Flm", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fabFlm;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Flm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numFlm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="OfiOri_Flm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ofioriFlm;

    /**
     * @var int
     *
     * @ORM\Column(name="NumDir_Flm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numdirFlm;

    /**
     * @var int
     *
     * @ORM\Column(name="LinDir_Flm", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $lindirFlm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofi1_Flm", type="integer", nullable=true)
     */
    private $ofi1Flm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp1_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $imp1Flm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofi2_Flm", type="integer", nullable=true)
     */
    private $ofi2Flm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp2_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $imp2Flm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofi3_Flm", type="integer", nullable=true)
     */
    private $ofi3Flm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp3_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $imp3Flm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Ofi4_Flm", type="integer", nullable=true)
     */
    private $ofi4Flm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Imp4_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $imp4Flm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecLis1_Flm", type="datetime", nullable=true)
     */
    private $feclis1Flm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecLis2_Flm", type="datetime", nullable=true)
     */
    private $feclis2Flm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecLis3_Flm", type="datetime", nullable=true)
     */
    private $feclis3Flm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecLis4_Flm", type="datetime", nullable=true)
     */
    private $feclis4Flm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Ree_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $reeFlm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Adelanto_Flm", type="float", precision=53, scale=0, nullable=true)
     */
    private $adelantoFlm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiLiq_Flm", type="integer", nullable=true)
     */
    private $ofiliqFlm;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliLiq_Flm", type="integer", nullable=true)
     */
    private $cliliqFlm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecFacCli_Flm", type="datetime", nullable=true)
     */
    private $fecfaccliFlm;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fel_Flm", type="datetime", nullable=true)
     */
    private $felFlm;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ODC_Flm", type="string", length=1, nullable=true)
     */
    private $odcFlm;

    public function getBajaFlm(): ?bool
    {
        return $this->bajaFlm;
    }

    public function setBajaFlm(bool $bajaFlm): self
    {
        $this->bajaFlm = $bajaFlm;

        return $this;
    }

    public function getSucursalFlm(): ?int
    {
        return $this->sucursalFlm;
    }

    public function getEmpFlm(): ?int
    {
        return $this->empFlm;
    }

    public function getFabFlm(): ?string
    {
        return $this->fabFlm;
    }

    public function getNumFlm(): ?int
    {
        return $this->numFlm;
    }

    public function getOfioriFlm(): ?int
    {
        return $this->ofioriFlm;
    }

    public function getNumdirFlm(): ?int
    {
        return $this->numdirFlm;
    }

    public function getLindirFlm(): ?int
    {
        return $this->lindirFlm;
    }

    public function getOfi1Flm(): ?int
    {
        return $this->ofi1Flm;
    }

    public function setOfi1Flm(?int $ofi1Flm): self
    {
        $this->ofi1Flm = $ofi1Flm;

        return $this;
    }

    public function getImp1Flm(): ?float
    {
        return $this->imp1Flm;
    }

    public function setImp1Flm(?float $imp1Flm): self
    {
        $this->imp1Flm = $imp1Flm;

        return $this;
    }

    public function getOfi2Flm(): ?int
    {
        return $this->ofi2Flm;
    }

    public function setOfi2Flm(?int $ofi2Flm): self
    {
        $this->ofi2Flm = $ofi2Flm;

        return $this;
    }

    public function getImp2Flm(): ?float
    {
        return $this->imp2Flm;
    }

    public function setImp2Flm(?float $imp2Flm): self
    {
        $this->imp2Flm = $imp2Flm;

        return $this;
    }

    public function getOfi3Flm(): ?int
    {
        return $this->ofi3Flm;
    }

    public function setOfi3Flm(?int $ofi3Flm): self
    {
        $this->ofi3Flm = $ofi3Flm;

        return $this;
    }

    public function getImp3Flm(): ?float
    {
        return $this->imp3Flm;
    }

    public function setImp3Flm(?float $imp3Flm): self
    {
        $this->imp3Flm = $imp3Flm;

        return $this;
    }

    public function getOfi4Flm(): ?int
    {
        return $this->ofi4Flm;
    }

    public function setOfi4Flm(?int $ofi4Flm): self
    {
        $this->ofi4Flm = $ofi4Flm;

        return $this;
    }

    public function getImp4Flm(): ?float
    {
        return $this->imp4Flm;
    }

    public function setImp4Flm(?float $imp4Flm): self
    {
        $this->imp4Flm = $imp4Flm;

        return $this;
    }

    public function getFeclis1Flm(): ?\DateTimeInterface
    {
        return $this->feclis1Flm;
    }

    public function setFeclis1Flm(?\DateTimeInterface $feclis1Flm): self
    {
        $this->feclis1Flm = $feclis1Flm;

        return $this;
    }

    public function getFeclis2Flm(): ?\DateTimeInterface
    {
        return $this->feclis2Flm;
    }

    public function setFeclis2Flm(?\DateTimeInterface $feclis2Flm): self
    {
        $this->feclis2Flm = $feclis2Flm;

        return $this;
    }

    public function getFeclis3Flm(): ?\DateTimeInterface
    {
        return $this->feclis3Flm;
    }

    public function setFeclis3Flm(?\DateTimeInterface $feclis3Flm): self
    {
        $this->feclis3Flm = $feclis3Flm;

        return $this;
    }

    public function getFeclis4Flm(): ?\DateTimeInterface
    {
        return $this->feclis4Flm;
    }

    public function setFeclis4Flm(?\DateTimeInterface $feclis4Flm): self
    {
        $this->feclis4Flm = $feclis4Flm;

        return $this;
    }

    public function getReeFlm(): ?float
    {
        return $this->reeFlm;
    }

    public function setReeFlm(?float $reeFlm): self
    {
        $this->reeFlm = $reeFlm;

        return $this;
    }

    public function getAdelantoFlm(): ?float
    {
        return $this->adelantoFlm;
    }

    public function setAdelantoFlm(?float $adelantoFlm): self
    {
        $this->adelantoFlm = $adelantoFlm;

        return $this;
    }

    public function getOfiliqFlm(): ?int
    {
        return $this->ofiliqFlm;
    }

    public function setOfiliqFlm(?int $ofiliqFlm): self
    {
        $this->ofiliqFlm = $ofiliqFlm;

        return $this;
    }

    public function getCliliqFlm(): ?int
    {
        return $this->cliliqFlm;
    }

    public function setCliliqFlm(?int $cliliqFlm): self
    {
        $this->cliliqFlm = $cliliqFlm;

        return $this;
    }

    public function getFecfaccliFlm(): ?\DateTimeInterface
    {
        return $this->fecfaccliFlm;
    }

    public function setFecfaccliFlm(?\DateTimeInterface $fecfaccliFlm): self
    {
        $this->fecfaccliFlm = $fecfaccliFlm;

        return $this;
    }

    public function getFelFlm(): ?\DateTimeInterface
    {
        return $this->felFlm;
    }

    public function setFelFlm(?\DateTimeInterface $felFlm): self
    {
        $this->felFlm = $felFlm;

        return $this;
    }

    public function getOdcFlm(): ?string
    {
        return $this->odcFlm;
    }

    public function setOdcFlm(?string $odcFlm): self
    {
        $this->odcFlm = $odcFlm;

        return $this;
    }


}
