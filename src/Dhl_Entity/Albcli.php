<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albcli
 *
 * @ORM\Table(name="albcli")
 * @ORM\Entity
 */
class Albcli
{
    /**
     * @var int
     *
     * @ORM\Column(name="Num_Acl", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numAcl = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliRee_Acl", type="integer", nullable=true)
     */
    private $clireeAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DepRee_Acl", type="string", length=12, nullable=true)
     */
    private $depreeAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomRee_Acl", type="string", length=40, nullable=true)
     */
    private $nomreeAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TDirRee_Acl", type="string", length=3, nullable=true)
     */
    private $tdirreeAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirRee_Acl", type="string", length=50, nullable=true)
     */
    private $dirreeAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NDirRee_Acl", type="smallint", nullable=true)
     */
    private $ndirreeAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PDirRee_Acl", type="string", length=10, nullable=true)
     */
    private $pdirreeAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobRee_Acl", type="string", length=35, nullable=true)
     */
    private $pobreeAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpRee_Acl", type="integer", nullable=true)
     */
    private $cdpreeAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NifRee_Acl", type="string", length=14, nullable=true)
     */
    private $nifreeAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TelRee_Acl", type="integer", nullable=true)
     */
    private $telreeAcl = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="CliDes_Acl", type="integer", nullable=true)
     */
    private $clidesAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="DepDes_Acl", type="string", length=12, nullable=true)
     */
    private $depdesAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomDes_Acl", type="string", length=40, nullable=true)
     */
    private $nomdesAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TDirDes_Acl", type="string", length=3, nullable=true)
     */
    private $tdirdesAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirDes_Acl", type="string", length=50, nullable=true)
     */
    private $dirdesAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NDirDes_Acl", type="smallint", nullable=true)
     */
    private $ndirdesAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="PDirDes_Acl", type="string", length=10, nullable=true)
     */
    private $pdirdesAcl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobDes_Acl", type="string", length=35, nullable=true)
     */
    private $pobdesAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CdpDes_Acl", type="integer", nullable=true)
     */
    private $cdpdesAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="NifDes_Acl", type="string", length=14, nullable=true)
     */
    private $nifdesAcl;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TelDes_Acl", type="integer", nullable=true)
     */
    private $teldesAcl = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs1_Acl", type="string", length=60, nullable=true)
     */
    private $obs1Acl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs2_Acl", type="string", length=60, nullable=true)
     */
    private $obs2Acl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Obs3_Acl", type="string", length=60, nullable=true)
     */
    private $obs3Acl;

    public function getNumAcl(): ?int
    {
        return $this->numAcl;
    }

    public function getClireeAcl(): ?int
    {
        return $this->clireeAcl;
    }

    public function setClireeAcl(?int $clireeAcl): self
    {
        $this->clireeAcl = $clireeAcl;

        return $this;
    }

    public function getDepreeAcl(): ?string
    {
        return $this->depreeAcl;
    }

    public function setDepreeAcl(?string $depreeAcl): self
    {
        $this->depreeAcl = $depreeAcl;

        return $this;
    }

    public function getNomreeAcl(): ?string
    {
        return $this->nomreeAcl;
    }

    public function setNomreeAcl(?string $nomreeAcl): self
    {
        $this->nomreeAcl = $nomreeAcl;

        return $this;
    }

    public function getTdirreeAcl(): ?string
    {
        return $this->tdirreeAcl;
    }

    public function setTdirreeAcl(?string $tdirreeAcl): self
    {
        $this->tdirreeAcl = $tdirreeAcl;

        return $this;
    }

    public function getDirreeAcl(): ?string
    {
        return $this->dirreeAcl;
    }

    public function setDirreeAcl(?string $dirreeAcl): self
    {
        $this->dirreeAcl = $dirreeAcl;

        return $this;
    }

    public function getNdirreeAcl(): ?int
    {
        return $this->ndirreeAcl;
    }

    public function setNdirreeAcl(?int $ndirreeAcl): self
    {
        $this->ndirreeAcl = $ndirreeAcl;

        return $this;
    }

    public function getPdirreeAcl(): ?string
    {
        return $this->pdirreeAcl;
    }

    public function setPdirreeAcl(?string $pdirreeAcl): self
    {
        $this->pdirreeAcl = $pdirreeAcl;

        return $this;
    }

    public function getPobreeAcl(): ?string
    {
        return $this->pobreeAcl;
    }

    public function setPobreeAcl(?string $pobreeAcl): self
    {
        $this->pobreeAcl = $pobreeAcl;

        return $this;
    }

    public function getCdpreeAcl(): ?int
    {
        return $this->cdpreeAcl;
    }

    public function setCdpreeAcl(?int $cdpreeAcl): self
    {
        $this->cdpreeAcl = $cdpreeAcl;

        return $this;
    }

    public function getNifreeAcl(): ?string
    {
        return $this->nifreeAcl;
    }

    public function setNifreeAcl(?string $nifreeAcl): self
    {
        $this->nifreeAcl = $nifreeAcl;

        return $this;
    }

    public function getTelreeAcl(): ?int
    {
        return $this->telreeAcl;
    }

    public function setTelreeAcl(?int $telreeAcl): self
    {
        $this->telreeAcl = $telreeAcl;

        return $this;
    }

    public function getClidesAcl(): ?int
    {
        return $this->clidesAcl;
    }

    public function setClidesAcl(?int $clidesAcl): self
    {
        $this->clidesAcl = $clidesAcl;

        return $this;
    }

    public function getDepdesAcl(): ?string
    {
        return $this->depdesAcl;
    }

    public function setDepdesAcl(?string $depdesAcl): self
    {
        $this->depdesAcl = $depdesAcl;

        return $this;
    }

    public function getNomdesAcl(): ?string
    {
        return $this->nomdesAcl;
    }

    public function setNomdesAcl(?string $nomdesAcl): self
    {
        $this->nomdesAcl = $nomdesAcl;

        return $this;
    }

    public function getTdirdesAcl(): ?string
    {
        return $this->tdirdesAcl;
    }

    public function setTdirdesAcl(?string $tdirdesAcl): self
    {
        $this->tdirdesAcl = $tdirdesAcl;

        return $this;
    }

    public function getDirdesAcl(): ?string
    {
        return $this->dirdesAcl;
    }

    public function setDirdesAcl(?string $dirdesAcl): self
    {
        $this->dirdesAcl = $dirdesAcl;

        return $this;
    }

    public function getNdirdesAcl(): ?int
    {
        return $this->ndirdesAcl;
    }

    public function setNdirdesAcl(?int $ndirdesAcl): self
    {
        $this->ndirdesAcl = $ndirdesAcl;

        return $this;
    }

    public function getPdirdesAcl(): ?string
    {
        return $this->pdirdesAcl;
    }

    public function setPdirdesAcl(?string $pdirdesAcl): self
    {
        $this->pdirdesAcl = $pdirdesAcl;

        return $this;
    }

    public function getPobdesAcl(): ?string
    {
        return $this->pobdesAcl;
    }

    public function setPobdesAcl(?string $pobdesAcl): self
    {
        $this->pobdesAcl = $pobdesAcl;

        return $this;
    }

    public function getCdpdesAcl(): ?int
    {
        return $this->cdpdesAcl;
    }

    public function setCdpdesAcl(?int $cdpdesAcl): self
    {
        $this->cdpdesAcl = $cdpdesAcl;

        return $this;
    }

    public function getNifdesAcl(): ?string
    {
        return $this->nifdesAcl;
    }

    public function setNifdesAcl(?string $nifdesAcl): self
    {
        $this->nifdesAcl = $nifdesAcl;

        return $this;
    }

    public function getTeldesAcl(): ?int
    {
        return $this->teldesAcl;
    }

    public function setTeldesAcl(?int $teldesAcl): self
    {
        $this->teldesAcl = $teldesAcl;

        return $this;
    }

    public function getObs1Acl(): ?string
    {
        return $this->obs1Acl;
    }

    public function setObs1Acl(?string $obs1Acl): self
    {
        $this->obs1Acl = $obs1Acl;

        return $this;
    }

    public function getObs2Acl(): ?string
    {
        return $this->obs2Acl;
    }

    public function setObs2Acl(?string $obs2Acl): self
    {
        $this->obs2Acl = $obs2Acl;

        return $this;
    }

    public function getObs3Acl(): ?string
    {
        return $this->obs3Acl;
    }

    public function setObs3Acl(?string $obs3Acl): self
    {
        $this->obs3Acl = $obs3Acl;

        return $this;
    }


}
