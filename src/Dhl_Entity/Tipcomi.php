<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipcomi
 *
 * @ORM\Table(name="tipcomi")
 * @ORM\Entity
 */
class Tipcomi
{
    /**
     * @var string
     *
     * @ORM\Column(name="Cod_Tcm", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codTcm = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tex_Tcm", type="string", length=40, nullable=true)
     */
    private $texTcm;

    public function getCodTcm(): ?string
    {
        return $this->codTcm;
    }

    public function getTexTcm(): ?string
    {
        return $this->texTcm;
    }

    public function setTexTcm(?string $texTcm): self
    {
        $this->texTcm = $texTcm;

        return $this;
    }


}
