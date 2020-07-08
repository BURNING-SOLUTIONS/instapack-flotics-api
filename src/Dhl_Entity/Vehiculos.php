<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos")
 * @ORM\Entity
 */
class Vehiculos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_veh", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codVeh;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom_Veh", type="string", length=20, nullable=true)
     */
    private $nomVeh;

    public function getCodVeh(): ?string
    {
        return $this->codVeh;
    }

    public function getNomVeh(): ?string
    {
        return $this->nomVeh;
    }

    public function setNomVeh(?string $nomVeh): self
    {
        $this->nomVeh = $nomVeh;

        return $this;
    }


}
