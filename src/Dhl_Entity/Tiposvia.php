<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tiposvia
 *
 * @ORM\Table(name="TiposVia")
 * @ORM\Entity
 */
class Tiposvia
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Tiv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalTiv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Tiv", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empTiv = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Via_Tiv", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $viaTiv;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Tiv", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoTiv;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Autoriza_Tiv", type="boolean", nullable=true)
     */
    private $autorizaTiv;

    public function getSucursalTiv(): ?int
    {
        return $this->sucursalTiv;
    }

    public function getEmpTiv(): ?int
    {
        return $this->empTiv;
    }

    public function getViaTiv(): ?int
    {
        return $this->viaTiv;
    }

    public function getTipoTiv(): ?string
    {
        return $this->tipoTiv;
    }

    public function getAutorizaTiv(): ?bool
    {
        return $this->autorizaTiv;
    }

    public function setAutorizaTiv(?bool $autorizaTiv): self
    {
        $this->autorizaTiv = $autorizaTiv;

        return $this;
    }


}
