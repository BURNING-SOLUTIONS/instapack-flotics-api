<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hojacal
 *
 * @ORM\Table(name="hojacal")
 * @ORM\Entity
 */
class Hojacal
{
    /**
     * @var bool
     *
     * @ORM\Column(name="Baja_Hca", type="boolean", nullable=false)
     */
    private $bajaHca = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Hca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalHca = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Hca", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empHca = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Hca", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoHca;

    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Hca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codHca = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Hca", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depHca;

    /**
     * @var int
     *
     * @ORM\Column(name="Orden_Hca", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ordenHca = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Titulo_Hca", type="string", length=20, nullable=true)
     */
    private $tituloHca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ctc_Hca", type="string", length=10, nullable=true)
     */
    private $ctcHca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DH_Hca", type="string", length=1, nullable=true)
     */
    private $dhHca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Accion_Hca", type="string", length=1, nullable=true)
     */
    private $accionHca;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Imputar_Hca", type="string", length=2, nullable=true)
     */
    private $imputarHca;

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde1_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde1Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta1_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta1Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid1_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid1Hca = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="Importe1_Hca", type="boolean", nullable=false)
     */
    private $importe1Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde2_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde2Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta2_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta2Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid2_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid2Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe2_Hca", type="boolean", nullable=true)
     */
    private $importe2Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde3_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde3Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta3_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta3Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid3_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid3Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe3_Hca", type="boolean", nullable=true)
     */
    private $importe3Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde4_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde4Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta4_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta4Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid4_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid4Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe4_Hca", type="boolean", nullable=true)
     */
    private $importe4Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde5_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde5Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta5_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta5Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid5_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid5Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe5_Hca", type="boolean", nullable=true)
     */
    private $importe5Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde6_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde6Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta6_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta6Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid6_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid6Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe6_Hca", type="boolean", nullable=true)
     */
    private $importe6Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde7_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde7Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta7_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta7Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid7_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid7Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe7_Hca", type="boolean", nullable=true)
     */
    private $importe7Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde8_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde8Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta8_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta8Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid8_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid8Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe8_Hca", type="boolean", nullable=true)
     */
    private $importe8Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde9_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde9Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta9_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta9Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid9_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid9Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe9_Hca", type="boolean", nullable=true)
     */
    private $importe9Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Desde10_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $desde10Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Hasta10_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $hasta10Hca = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="Unid10_Hca", type="float", precision=53, scale=0, nullable=true)
     */
    private $unid10Hca = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Importe10_Hca", type="boolean", nullable=true)
     */
    private $importe10Hca = '0';

    public function getBajaHca(): ?bool
    {
        return $this->bajaHca;
    }

    public function setBajaHca(bool $bajaHca): self
    {
        $this->bajaHca = $bajaHca;

        return $this;
    }

    public function getSucursalHca(): ?int
    {
        return $this->sucursalHca;
    }

    public function getEmpHca(): ?int
    {
        return $this->empHca;
    }

    public function getTipoHca(): ?string
    {
        return $this->tipoHca;
    }

    public function getCodHca(): ?int
    {
        return $this->codHca;
    }

    public function getDepHca(): ?string
    {
        return $this->depHca;
    }

    public function getOrdenHca(): ?int
    {
        return $this->ordenHca;
    }

    public function getTituloHca(): ?string
    {
        return $this->tituloHca;
    }

    public function setTituloHca(?string $tituloHca): self
    {
        $this->tituloHca = $tituloHca;

        return $this;
    }

    public function getCtcHca(): ?string
    {
        return $this->ctcHca;
    }

    public function setCtcHca(?string $ctcHca): self
    {
        $this->ctcHca = $ctcHca;

        return $this;
    }

    public function getDhHca(): ?string
    {
        return $this->dhHca;
    }

    public function setDhHca(?string $dhHca): self
    {
        $this->dhHca = $dhHca;

        return $this;
    }

    public function getAccionHca(): ?string
    {
        return $this->accionHca;
    }

    public function setAccionHca(?string $accionHca): self
    {
        $this->accionHca = $accionHca;

        return $this;
    }

    public function getImputarHca(): ?string
    {
        return $this->imputarHca;
    }

    public function setImputarHca(?string $imputarHca): self
    {
        $this->imputarHca = $imputarHca;

        return $this;
    }

    public function getDesde1Hca(): ?float
    {
        return $this->desde1Hca;
    }

    public function setDesde1Hca(?float $desde1Hca): self
    {
        $this->desde1Hca = $desde1Hca;

        return $this;
    }

    public function getHasta1Hca(): ?float
    {
        return $this->hasta1Hca;
    }

    public function setHasta1Hca(?float $hasta1Hca): self
    {
        $this->hasta1Hca = $hasta1Hca;

        return $this;
    }

    public function getUnid1Hca(): ?float
    {
        return $this->unid1Hca;
    }

    public function setUnid1Hca(?float $unid1Hca): self
    {
        $this->unid1Hca = $unid1Hca;

        return $this;
    }

    public function getImporte1Hca(): ?bool
    {
        return $this->importe1Hca;
    }

    public function setImporte1Hca(bool $importe1Hca): self
    {
        $this->importe1Hca = $importe1Hca;

        return $this;
    }

    public function getDesde2Hca(): ?float
    {
        return $this->desde2Hca;
    }

    public function setDesde2Hca(?float $desde2Hca): self
    {
        $this->desde2Hca = $desde2Hca;

        return $this;
    }

    public function getHasta2Hca(): ?float
    {
        return $this->hasta2Hca;
    }

    public function setHasta2Hca(?float $hasta2Hca): self
    {
        $this->hasta2Hca = $hasta2Hca;

        return $this;
    }

    public function getUnid2Hca(): ?float
    {
        return $this->unid2Hca;
    }

    public function setUnid2Hca(?float $unid2Hca): self
    {
        $this->unid2Hca = $unid2Hca;

        return $this;
    }

    public function getImporte2Hca(): ?bool
    {
        return $this->importe2Hca;
    }

    public function setImporte2Hca(?bool $importe2Hca): self
    {
        $this->importe2Hca = $importe2Hca;

        return $this;
    }

    public function getDesde3Hca(): ?float
    {
        return $this->desde3Hca;
    }

    public function setDesde3Hca(?float $desde3Hca): self
    {
        $this->desde3Hca = $desde3Hca;

        return $this;
    }

    public function getHasta3Hca(): ?float
    {
        return $this->hasta3Hca;
    }

    public function setHasta3Hca(?float $hasta3Hca): self
    {
        $this->hasta3Hca = $hasta3Hca;

        return $this;
    }

    public function getUnid3Hca(): ?float
    {
        return $this->unid3Hca;
    }

    public function setUnid3Hca(?float $unid3Hca): self
    {
        $this->unid3Hca = $unid3Hca;

        return $this;
    }

    public function getImporte3Hca(): ?bool
    {
        return $this->importe3Hca;
    }

    public function setImporte3Hca(?bool $importe3Hca): self
    {
        $this->importe3Hca = $importe3Hca;

        return $this;
    }

    public function getDesde4Hca(): ?float
    {
        return $this->desde4Hca;
    }

    public function setDesde4Hca(?float $desde4Hca): self
    {
        $this->desde4Hca = $desde4Hca;

        return $this;
    }

    public function getHasta4Hca(): ?float
    {
        return $this->hasta4Hca;
    }

    public function setHasta4Hca(?float $hasta4Hca): self
    {
        $this->hasta4Hca = $hasta4Hca;

        return $this;
    }

    public function getUnid4Hca(): ?float
    {
        return $this->unid4Hca;
    }

    public function setUnid4Hca(?float $unid4Hca): self
    {
        $this->unid4Hca = $unid4Hca;

        return $this;
    }

    public function getImporte4Hca(): ?bool
    {
        return $this->importe4Hca;
    }

    public function setImporte4Hca(?bool $importe4Hca): self
    {
        $this->importe4Hca = $importe4Hca;

        return $this;
    }

    public function getDesde5Hca(): ?float
    {
        return $this->desde5Hca;
    }

    public function setDesde5Hca(?float $desde5Hca): self
    {
        $this->desde5Hca = $desde5Hca;

        return $this;
    }

    public function getHasta5Hca(): ?float
    {
        return $this->hasta5Hca;
    }

    public function setHasta5Hca(?float $hasta5Hca): self
    {
        $this->hasta5Hca = $hasta5Hca;

        return $this;
    }

    public function getUnid5Hca(): ?float
    {
        return $this->unid5Hca;
    }

    public function setUnid5Hca(?float $unid5Hca): self
    {
        $this->unid5Hca = $unid5Hca;

        return $this;
    }

    public function getImporte5Hca(): ?bool
    {
        return $this->importe5Hca;
    }

    public function setImporte5Hca(?bool $importe5Hca): self
    {
        $this->importe5Hca = $importe5Hca;

        return $this;
    }

    public function getDesde6Hca(): ?float
    {
        return $this->desde6Hca;
    }

    public function setDesde6Hca(?float $desde6Hca): self
    {
        $this->desde6Hca = $desde6Hca;

        return $this;
    }

    public function getHasta6Hca(): ?float
    {
        return $this->hasta6Hca;
    }

    public function setHasta6Hca(?float $hasta6Hca): self
    {
        $this->hasta6Hca = $hasta6Hca;

        return $this;
    }

    public function getUnid6Hca(): ?float
    {
        return $this->unid6Hca;
    }

    public function setUnid6Hca(?float $unid6Hca): self
    {
        $this->unid6Hca = $unid6Hca;

        return $this;
    }

    public function getImporte6Hca(): ?bool
    {
        return $this->importe6Hca;
    }

    public function setImporte6Hca(?bool $importe6Hca): self
    {
        $this->importe6Hca = $importe6Hca;

        return $this;
    }

    public function getDesde7Hca(): ?float
    {
        return $this->desde7Hca;
    }

    public function setDesde7Hca(?float $desde7Hca): self
    {
        $this->desde7Hca = $desde7Hca;

        return $this;
    }

    public function getHasta7Hca(): ?float
    {
        return $this->hasta7Hca;
    }

    public function setHasta7Hca(?float $hasta7Hca): self
    {
        $this->hasta7Hca = $hasta7Hca;

        return $this;
    }

    public function getUnid7Hca(): ?float
    {
        return $this->unid7Hca;
    }

    public function setUnid7Hca(?float $unid7Hca): self
    {
        $this->unid7Hca = $unid7Hca;

        return $this;
    }

    public function getImporte7Hca(): ?bool
    {
        return $this->importe7Hca;
    }

    public function setImporte7Hca(?bool $importe7Hca): self
    {
        $this->importe7Hca = $importe7Hca;

        return $this;
    }

    public function getDesde8Hca(): ?float
    {
        return $this->desde8Hca;
    }

    public function setDesde8Hca(?float $desde8Hca): self
    {
        $this->desde8Hca = $desde8Hca;

        return $this;
    }

    public function getHasta8Hca(): ?float
    {
        return $this->hasta8Hca;
    }

    public function setHasta8Hca(?float $hasta8Hca): self
    {
        $this->hasta8Hca = $hasta8Hca;

        return $this;
    }

    public function getUnid8Hca(): ?float
    {
        return $this->unid8Hca;
    }

    public function setUnid8Hca(?float $unid8Hca): self
    {
        $this->unid8Hca = $unid8Hca;

        return $this;
    }

    public function getImporte8Hca(): ?bool
    {
        return $this->importe8Hca;
    }

    public function setImporte8Hca(?bool $importe8Hca): self
    {
        $this->importe8Hca = $importe8Hca;

        return $this;
    }

    public function getDesde9Hca(): ?float
    {
        return $this->desde9Hca;
    }

    public function setDesde9Hca(?float $desde9Hca): self
    {
        $this->desde9Hca = $desde9Hca;

        return $this;
    }

    public function getHasta9Hca(): ?float
    {
        return $this->hasta9Hca;
    }

    public function setHasta9Hca(?float $hasta9Hca): self
    {
        $this->hasta9Hca = $hasta9Hca;

        return $this;
    }

    public function getUnid9Hca(): ?float
    {
        return $this->unid9Hca;
    }

    public function setUnid9Hca(?float $unid9Hca): self
    {
        $this->unid9Hca = $unid9Hca;

        return $this;
    }

    public function getImporte9Hca(): ?bool
    {
        return $this->importe9Hca;
    }

    public function setImporte9Hca(?bool $importe9Hca): self
    {
        $this->importe9Hca = $importe9Hca;

        return $this;
    }

    public function getDesde10Hca(): ?float
    {
        return $this->desde10Hca;
    }

    public function setDesde10Hca(?float $desde10Hca): self
    {
        $this->desde10Hca = $desde10Hca;

        return $this;
    }

    public function getHasta10Hca(): ?float
    {
        return $this->hasta10Hca;
    }

    public function setHasta10Hca(?float $hasta10Hca): self
    {
        $this->hasta10Hca = $hasta10Hca;

        return $this;
    }

    public function getUnid10Hca(): ?float
    {
        return $this->unid10Hca;
    }

    public function setUnid10Hca(?float $unid10Hca): self
    {
        $this->unid10Hca = $unid10Hca;

        return $this;
    }

    public function getImporte10Hca(): ?bool
    {
        return $this->importe10Hca;
    }

    public function setImporte10Hca(?bool $importe10Hca): self
    {
        $this->importe10Hca = $importe10Hca;

        return $this;
    }


}
