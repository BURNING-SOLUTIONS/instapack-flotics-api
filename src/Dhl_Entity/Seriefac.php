<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seriefac
 *
 * @ORM\Table(name="SerieFac")
 * @ORM\Entity
 */
class Seriefac
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Sem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalSem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Sem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empSem = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Serie_Sem", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $serieSem = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="NFa_Sem", type="integer", nullable=true)
     */
    private $nfaSem;

    public function getSucursalSem(): ?int
    {
        return $this->sucursalSem;
    }

    public function getEmpSem(): ?int
    {
        return $this->empSem;
    }

    public function getSerieSem(): ?int
    {
        return $this->serieSem;
    }

    public function getNfaSem(): ?int
    {
        return $this->nfaSem;
    }

    public function setNfaSem(?int $nfaSem): self
    {
        $this->nfaSem = $nfaSem;

        return $this;
    }


}
