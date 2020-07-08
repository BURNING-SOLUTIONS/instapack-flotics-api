<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seguisinenvio
 *
 * @ORM\Table(name="SeguiSinEnvio")
 * @ORM\Entity
 */
class Seguisinenvio
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Sse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalSse;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Sse", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empSse;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Sse", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refSse;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Sse", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoSse;

    /**
     * @var int
     *
     * @ORM\Column(name="NBul_Sse", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $nbulSse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cli_Sse", type="integer", nullable=true)
     */
    private $cliSse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Sse", type="datetime", nullable=true)
     */
    private $fecSse;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Hor_Sse", type="datetime", nullable=true)
     */
    private $horSse;

    public function getSucursalSse(): ?int
    {
        return $this->sucursalSse;
    }

    public function getEmpSse(): ?int
    {
        return $this->empSse;
    }

    public function getRefSse(): ?string
    {
        return $this->refSse;
    }

    public function getTipoSse(): ?string
    {
        return $this->tipoSse;
    }

    public function getNbulSse(): ?int
    {
        return $this->nbulSse;
    }

    public function getCliSse(): ?int
    {
        return $this->cliSse;
    }

    public function setCliSse(?int $cliSse): self
    {
        $this->cliSse = $cliSse;

        return $this;
    }

    public function getFecSse(): ?\DateTimeInterface
    {
        return $this->fecSse;
    }

    public function setFecSse(?\DateTimeInterface $fecSse): self
    {
        $this->fecSse = $fecSse;

        return $this;
    }

    public function getHorSse(): ?\DateTimeInterface
    {
        return $this->horSse;
    }

    public function setHorSse(?\DateTimeInterface $horSse): self
    {
        $this->horSse = $horSse;

        return $this;
    }


}
