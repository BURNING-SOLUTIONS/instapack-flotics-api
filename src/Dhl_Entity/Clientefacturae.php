<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clientefacturae
 *
 * @ORM\Table(name="ClienteFacturaE")
 * @ORM\Entity
 */
class Clientefacturae
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_CFe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCfe;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Cfe", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCfe;

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Cfe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCfe;

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Cfe", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depCfe;

    /**
     * @var string
     *
     * @ORM\Column(name="CodFE_Cfe", type="string", length=35, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codfeCfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre_Cfe", type="string", length=35, nullable=true)
     */
    private $nombreCfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Dom_Cfe", type="string", length=50, nullable=true)
     */
    private $domCfe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Cdp_Cfe", type="integer", nullable=true)
     */
    private $cdpCfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Pob_Cfe", type="string", length=35, nullable=true)
     */
    private $pobCfe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Prv_Cfe", type="string", length=35, nullable=true)
     */
    private $prvCfe;

    public function getSucursalCfe(): ?int
    {
        return $this->sucursalCfe;
    }

    public function getEmpCfe(): ?int
    {
        return $this->empCfe;
    }

    public function getCodCfe(): ?int
    {
        return $this->codCfe;
    }

    public function getDepCfe(): ?string
    {
        return $this->depCfe;
    }

    public function getCodfeCfe(): ?string
    {
        return $this->codfeCfe;
    }

    public function getNombreCfe(): ?string
    {
        return $this->nombreCfe;
    }

    public function setNombreCfe(?string $nombreCfe): self
    {
        $this->nombreCfe = $nombreCfe;

        return $this;
    }

    public function getDomCfe(): ?string
    {
        return $this->domCfe;
    }

    public function setDomCfe(?string $domCfe): self
    {
        $this->domCfe = $domCfe;

        return $this;
    }

    public function getCdpCfe(): ?int
    {
        return $this->cdpCfe;
    }

    public function setCdpCfe(?int $cdpCfe): self
    {
        $this->cdpCfe = $cdpCfe;

        return $this;
    }

    public function getPobCfe(): ?string
    {
        return $this->pobCfe;
    }

    public function setPobCfe(?string $pobCfe): self
    {
        $this->pobCfe = $pobCfe;

        return $this;
    }

    public function getPrvCfe(): ?string
    {
        return $this->prvCfe;
    }

    public function setPrvCfe(?string $prvCfe): self
    {
        $this->prvCfe = $prvCfe;

        return $this;
    }


}
