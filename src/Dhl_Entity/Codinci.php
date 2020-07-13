<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Codinci
 *
 * @ORM\Table(name="codinci")
 * @ORM\Entity
 */
class Codinci
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Coi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCoi = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Coi", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCoi = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Coi", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codCoi;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc_Coi", type="string", length=20, nullable=true)
     */
    private $descCoi;

    public function getSucursalCoi(): ?int
    {
        return $this->sucursalCoi;
    }

    public function getEmpCoi(): ?int
    {
        return $this->empCoi;
    }

    public function getCodCoi(): ?string
    {
        return $this->codCoi;
    }

    public function getDescCoi(): ?string
    {
        return $this->descCoi;
    }

    public function setDescCoi(?string $descCoi): self
    {
        $this->descCoi = $descCoi;

        return $this;
    }


}
