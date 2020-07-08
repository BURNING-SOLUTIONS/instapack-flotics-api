<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expcontablecliente
 *
 * @ORM\Table(name="ExpContableCliente")
 * @ORM\Entity
 */
class Expcontablecliente
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ecr", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NifCli_Ecr", type="string", length=20, nullable=true)
     */
    private $nifcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NomCli_Ecr", type="string", length=100, nullable=true)
     */
    private $nomcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DirCli_Ecr", type="string", length=60, nullable=true)
     */
    private $dircliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CdpCli_Ecr", type="string", length=10, nullable=true)
     */
    private $cdpcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PobCli_Ecr", type="string", length=50, nullable=true)
     */
    private $pobcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PrvCli_Ecr", type="string", length=50, nullable=true)
     */
    private $prvcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodCli_Ecr", type="string", length=8, nullable=true)
     */
    private $codcliEcr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DomBancaria_Ecr", type="string", length=24, nullable=true)
     */
    private $dombancariaEcr;

    public function getIdEcr(): ?int
    {
        return $this->idEcr;
    }

    public function getNifcliEcr(): ?string
    {
        return $this->nifcliEcr;
    }

    public function setNifcliEcr(?string $nifcliEcr): self
    {
        $this->nifcliEcr = $nifcliEcr;

        return $this;
    }

    public function getNomcliEcr(): ?string
    {
        return $this->nomcliEcr;
    }

    public function setNomcliEcr(?string $nomcliEcr): self
    {
        $this->nomcliEcr = $nomcliEcr;

        return $this;
    }

    public function getDircliEcr(): ?string
    {
        return $this->dircliEcr;
    }

    public function setDircliEcr(?string $dircliEcr): self
    {
        $this->dircliEcr = $dircliEcr;

        return $this;
    }

    public function getCdpcliEcr(): ?string
    {
        return $this->cdpcliEcr;
    }

    public function setCdpcliEcr(?string $cdpcliEcr): self
    {
        $this->cdpcliEcr = $cdpcliEcr;

        return $this;
    }

    public function getPobcliEcr(): ?string
    {
        return $this->pobcliEcr;
    }

    public function setPobcliEcr(?string $pobcliEcr): self
    {
        $this->pobcliEcr = $pobcliEcr;

        return $this;
    }

    public function getPrvcliEcr(): ?string
    {
        return $this->prvcliEcr;
    }

    public function setPrvcliEcr(?string $prvcliEcr): self
    {
        $this->prvcliEcr = $prvcliEcr;

        return $this;
    }

    public function getCodcliEcr(): ?string
    {
        return $this->codcliEcr;
    }

    public function setCodcliEcr(?string $codcliEcr): self
    {
        $this->codcliEcr = $codcliEcr;

        return $this;
    }

    public function getDombancariaEcr(): ?string
    {
        return $this->dombancariaEcr;
    }

    public function setDombancariaEcr(?string $dombancariaEcr): self
    {
        $this->dombancariaEcr = $dombancariaEcr;

        return $this;
    }


}
