<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puntolecturaequi
 *
 * @ORM\Table(name="PuntoLecturaEqui")
 * @ORM\Entity
 */
class Puntolecturaequi
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Plq", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalPlq;

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Plq", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empPlq;

    /**
     * @var string
     *
     * @ORM\Column(name="CodEnv_Plq", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codenvPlq;

    /**
     * @var string
     *
     * @ORM\Column(name="CodPle_Plq", type="string", length=6, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codplePlq;

    public function getSucursalPlq(): ?int
    {
        return $this->sucursalPlq;
    }

    public function getEmpPlq(): ?int
    {
        return $this->empPlq;
    }

    public function getCodenvPlq(): ?string
    {
        return $this->codenvPlq;
    }

    public function getCodplePlq(): ?string
    {
        return $this->codplePlq;
    }


}
