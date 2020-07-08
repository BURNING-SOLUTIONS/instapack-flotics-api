<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeftraf
 *
 * @ORM\Table(name="JefTraf")
 * @ORM\Entity
 */
class Jeftraf
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Usu", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codUsu;

    /**
     * @var int
     *
     * @ORM\Column(name="Men_Usu", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $menUsu;

    public function getCodUsu(): ?int
    {
        return $this->codUsu;
    }

    public function getMenUsu(): ?int
    {
        return $this->menUsu;
    }


}
