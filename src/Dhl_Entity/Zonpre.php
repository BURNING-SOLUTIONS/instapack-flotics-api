<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zonpre
 *
 * @ORM\Table(name="zonpre")
 * @ORM\Entity
 */
class Zonpre
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Zpo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalZpo = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Zpo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empZpo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Zpo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codZpo;

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Zpo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaZpo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cdp_Zpo", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cdpZpo;

    /**
     * @var string
     *
     * @ORM\Column(name="CapPro_Zpo", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $capproZpo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Zpo", type="string", length=30, nullable=true)
     */
    private $nomZpo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Zpo", type="string", length=10, nullable=true)
     */
    private $ctcZpo;

    public function getSucursalZpo(): ?int
    {
        return $this->sucursalZpo;
    }

    public function getEmpZpo(): ?int
    {
        return $this->empZpo;
    }

    public function getCodZpo(): ?string
    {
        return $this->codZpo;
    }

    public function getViaZpo(): ?int
    {
        return $this->viaZpo;
    }

    public function getCdpZpo(): ?string
    {
        return $this->cdpZpo;
    }

    public function getCapproZpo(): ?string
    {
        return $this->capproZpo;
    }

    public function getNomZpo(): ?string
    {
        return $this->nomZpo;
    }

    public function setNomZpo(?string $nomZpo): self
    {
        $this->nomZpo = $nomZpo;

        return $this;
    }

    public function getCtcZpo(): ?string
    {
        return $this->ctcZpo;
    }

    public function setCtcZpo(?string $ctcZpo): self
    {
        $this->ctcZpo = $ctcZpo;

        return $this;
    }


}
