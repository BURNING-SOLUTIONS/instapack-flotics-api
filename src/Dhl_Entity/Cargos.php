<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cargos
 *
 * @ORM\Table(name="cargos", indexes={@ORM\Index(name="clv2-car", columns={"Sucursal_Car", "Emp_Car", "Enviado_Car"})})
 * @ORM\Entity
 */
class Cargos
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalCar = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Car", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empCar;

    /**
     * @var int
     *
     * @ORM\Column(name="OfiOri_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ofioriCar;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Car", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoCar;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Car", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numCar;

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Car", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linCar;

    /**
     * @var string
     *
     * @ORM\Column(name="Ref_Car", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $refCar;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OfiCar_Car", type="integer", nullable=true)
     */
    private $oficarCar;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fec_Car", type="datetime", nullable=true)
     */
    private $fecCar;

    /**
     * @var float|null
     *
     * @ORM\Column(name="KgOri_Car", type="float", precision=53, scale=0, nullable=true)
     */
    private $kgoriCar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="KgReal_Car", type="float", precision=53, scale=0, nullable=true)
     */
    private $kgrealCar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="KmsOri_Car", type="smallint", nullable=true)
     */
    private $kmsoriCar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="KmsReal_Car", type="smallint", nullable=true)
     */
    private $kmsrealCar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="TEspera_Car", type="smallint", nullable=true)
     */
    private $tesperaCar = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="Entrega2_Car", type="smallint", nullable=true)
     */
    private $entrega2Car = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpSuplido_Car", type="float", precision=53, scale=0, nullable=true)
     */
    private $impsuplidoCar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpGastos_Car", type="float", precision=53, scale=0, nullable=true)
     */
    private $impgastosCar = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="ImpTEspera_Car", type="float", precision=53, scale=0, nullable=true)
     */
    private $imptesperaCar = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc1_Car", type="string", length=50, nullable=true)
     */
    private $desc1Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc2_Car", type="string", length=50, nullable=true)
     */
    private $desc2Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc3_Car", type="string", length=50, nullable=true)
     */
    private $desc3Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc4_Car", type="string", length=50, nullable=true)
     */
    private $desc4Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc5_Car", type="string", length=50, nullable=true)
     */
    private $desc5Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc6_Car", type="string", length=50, nullable=true)
     */
    private $desc6Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc7_Car", type="string", length=50, nullable=true)
     */
    private $desc7Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc8_Car", type="string", length=50, nullable=true)
     */
    private $desc8Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc9_Car", type="string", length=50, nullable=true)
     */
    private $desc9Car;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc10_Car", type="string", length=50, nullable=true)
     */
    private $desc10Car;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Enviado_Car", type="datetime", nullable=true)
     */
    private $enviadoCar;

    public function getSucursalCar(): ?int
    {
        return $this->sucursalCar;
    }

    public function getEmpCar(): ?int
    {
        return $this->empCar;
    }

    public function getOfioriCar(): ?int
    {
        return $this->ofioriCar;
    }

    public function getTipoCar(): ?string
    {
        return $this->tipoCar;
    }

    public function getNumCar(): ?int
    {
        return $this->numCar;
    }

    public function getLinCar(): ?int
    {
        return $this->linCar;
    }

    public function getRefCar(): ?string
    {
        return $this->refCar;
    }

    public function getOficarCar(): ?int
    {
        return $this->oficarCar;
    }

    public function setOficarCar(?int $oficarCar): self
    {
        $this->oficarCar = $oficarCar;

        return $this;
    }

    public function getFecCar(): ?\DateTimeInterface
    {
        return $this->fecCar;
    }

    public function setFecCar(?\DateTimeInterface $fecCar): self
    {
        $this->fecCar = $fecCar;

        return $this;
    }

    public function getKgoriCar(): ?float
    {
        return $this->kgoriCar;
    }

    public function setKgoriCar(?float $kgoriCar): self
    {
        $this->kgoriCar = $kgoriCar;

        return $this;
    }

    public function getKgrealCar(): ?float
    {
        return $this->kgrealCar;
    }

    public function setKgrealCar(?float $kgrealCar): self
    {
        $this->kgrealCar = $kgrealCar;

        return $this;
    }

    public function getKmsoriCar(): ?int
    {
        return $this->kmsoriCar;
    }

    public function setKmsoriCar(?int $kmsoriCar): self
    {
        $this->kmsoriCar = $kmsoriCar;

        return $this;
    }

    public function getKmsrealCar(): ?int
    {
        return $this->kmsrealCar;
    }

    public function setKmsrealCar(?int $kmsrealCar): self
    {
        $this->kmsrealCar = $kmsrealCar;

        return $this;
    }

    public function getTesperaCar(): ?int
    {
        return $this->tesperaCar;
    }

    public function setTesperaCar(?int $tesperaCar): self
    {
        $this->tesperaCar = $tesperaCar;

        return $this;
    }

    public function getEntrega2Car(): ?int
    {
        return $this->entrega2Car;
    }

    public function setEntrega2Car(?int $entrega2Car): self
    {
        $this->entrega2Car = $entrega2Car;

        return $this;
    }

    public function getImpsuplidoCar(): ?float
    {
        return $this->impsuplidoCar;
    }

    public function setImpsuplidoCar(?float $impsuplidoCar): self
    {
        $this->impsuplidoCar = $impsuplidoCar;

        return $this;
    }

    public function getImpgastosCar(): ?float
    {
        return $this->impgastosCar;
    }

    public function setImpgastosCar(?float $impgastosCar): self
    {
        $this->impgastosCar = $impgastosCar;

        return $this;
    }

    public function getImptesperaCar(): ?float
    {
        return $this->imptesperaCar;
    }

    public function setImptesperaCar(?float $imptesperaCar): self
    {
        $this->imptesperaCar = $imptesperaCar;

        return $this;
    }

    public function getDesc1Car(): ?string
    {
        return $this->desc1Car;
    }

    public function setDesc1Car(?string $desc1Car): self
    {
        $this->desc1Car = $desc1Car;

        return $this;
    }

    public function getDesc2Car(): ?string
    {
        return $this->desc2Car;
    }

    public function setDesc2Car(?string $desc2Car): self
    {
        $this->desc2Car = $desc2Car;

        return $this;
    }

    public function getDesc3Car(): ?string
    {
        return $this->desc3Car;
    }

    public function setDesc3Car(?string $desc3Car): self
    {
        $this->desc3Car = $desc3Car;

        return $this;
    }

    public function getDesc4Car(): ?string
    {
        return $this->desc4Car;
    }

    public function setDesc4Car(?string $desc4Car): self
    {
        $this->desc4Car = $desc4Car;

        return $this;
    }

    public function getDesc5Car(): ?string
    {
        return $this->desc5Car;
    }

    public function setDesc5Car(?string $desc5Car): self
    {
        $this->desc5Car = $desc5Car;

        return $this;
    }

    public function getDesc6Car(): ?string
    {
        return $this->desc6Car;
    }

    public function setDesc6Car(?string $desc6Car): self
    {
        $this->desc6Car = $desc6Car;

        return $this;
    }

    public function getDesc7Car(): ?string
    {
        return $this->desc7Car;
    }

    public function setDesc7Car(?string $desc7Car): self
    {
        $this->desc7Car = $desc7Car;

        return $this;
    }

    public function getDesc8Car(): ?string
    {
        return $this->desc8Car;
    }

    public function setDesc8Car(?string $desc8Car): self
    {
        $this->desc8Car = $desc8Car;

        return $this;
    }

    public function getDesc9Car(): ?string
    {
        return $this->desc9Car;
    }

    public function setDesc9Car(?string $desc9Car): self
    {
        $this->desc9Car = $desc9Car;

        return $this;
    }

    public function getDesc10Car(): ?string
    {
        return $this->desc10Car;
    }

    public function setDesc10Car(?string $desc10Car): self
    {
        $this->desc10Car = $desc10Car;

        return $this;
    }

    public function getEnviadoCar(): ?\DateTimeInterface
    {
        return $this->enviadoCar;
    }

    public function setEnviadoCar(?\DateTimeInterface $enviadoCar): self
    {
        $this->enviadoCar = $enviadoCar;

        return $this;
    }


}
