<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 *
 * @ORM\Table(name="agenda")
 * @ORM\Entity
 */
class Agenda
{
    /**
     * @var int
     *
     * @ORM\Column(name="Sucursal_Age", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sucursalAge = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Emp_Age", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $empAge = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Cli_Age", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cliAge = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Dep_Age", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $depAge;

    /**
     * @var string
     *
     * @ORM\Column(name="Situ_Age", type="string", length=2, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $situAge;

    /**
     * @var int
     *
     * @ORM\Column(name="Num_Age", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $numAge = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Lin_Age", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $linAge = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fec_Age", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecAge;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Hor_Age", type="datetime", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $horAge;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecges_Age", type="datetime", nullable=true)
     */
    private $fecgesAge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Con_Age", type="string", length=20, nullable=true)
     */
    private $conAge;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc1_Age", type="string", length=50, nullable=true)
     */
    private $desc1Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc2_Age", type="string", length=50, nullable=true)
     */
    private $desc2Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc3_Age", type="string", length=50, nullable=true)
     */
    private $desc3Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc4_Age", type="string", length=50, nullable=true)
     */
    private $desc4Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc5_Age", type="string", length=50, nullable=true)
     */
    private $desc5Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc6_Age", type="string", length=50, nullable=true)
     */
    private $desc6Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc7_Age", type="string", length=50, nullable=true)
     */
    private $desc7Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc8_Age", type="string", length=50, nullable=true)
     */
    private $desc8Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc9_Age", type="string", length=50, nullable=true)
     */
    private $desc9Age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Desc10_Age", type="string", length=50, nullable=true)
     */
    private $desc10Age;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Sol_Age", type="boolean", nullable=true)
     */
    private $solAge = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="Any_Age", type="smallint", nullable=false)
     */
    private $anyAge = '0';

    public function getSucursalAge(): ?int
    {
        return $this->sucursalAge;
    }

    public function getEmpAge(): ?int
    {
        return $this->empAge;
    }

    public function getCliAge(): ?int
    {
        return $this->cliAge;
    }

    public function getDepAge(): ?string
    {
        return $this->depAge;
    }

    public function getSituAge(): ?string
    {
        return $this->situAge;
    }

    public function getNumAge(): ?int
    {
        return $this->numAge;
    }

    public function getLinAge(): ?int
    {
        return $this->linAge;
    }

    public function getFecAge(): ?\DateTimeInterface
    {
        return $this->fecAge;
    }

    public function getHorAge(): ?\DateTimeInterface
    {
        return $this->horAge;
    }

    public function getFecgesAge(): ?\DateTimeInterface
    {
        return $this->fecgesAge;
    }

    public function setFecgesAge(?\DateTimeInterface $fecgesAge): self
    {
        $this->fecgesAge = $fecgesAge;

        return $this;
    }

    public function getConAge(): ?string
    {
        return $this->conAge;
    }

    public function setConAge(?string $conAge): self
    {
        $this->conAge = $conAge;

        return $this;
    }

    public function getDesc1Age(): ?string
    {
        return $this->desc1Age;
    }

    public function setDesc1Age(?string $desc1Age): self
    {
        $this->desc1Age = $desc1Age;

        return $this;
    }

    public function getDesc2Age(): ?string
    {
        return $this->desc2Age;
    }

    public function setDesc2Age(?string $desc2Age): self
    {
        $this->desc2Age = $desc2Age;

        return $this;
    }

    public function getDesc3Age(): ?string
    {
        return $this->desc3Age;
    }

    public function setDesc3Age(?string $desc3Age): self
    {
        $this->desc3Age = $desc3Age;

        return $this;
    }

    public function getDesc4Age(): ?string
    {
        return $this->desc4Age;
    }

    public function setDesc4Age(?string $desc4Age): self
    {
        $this->desc4Age = $desc4Age;

        return $this;
    }

    public function getDesc5Age(): ?string
    {
        return $this->desc5Age;
    }

    public function setDesc5Age(?string $desc5Age): self
    {
        $this->desc5Age = $desc5Age;

        return $this;
    }

    public function getDesc6Age(): ?string
    {
        return $this->desc6Age;
    }

    public function setDesc6Age(?string $desc6Age): self
    {
        $this->desc6Age = $desc6Age;

        return $this;
    }

    public function getDesc7Age(): ?string
    {
        return $this->desc7Age;
    }

    public function setDesc7Age(?string $desc7Age): self
    {
        $this->desc7Age = $desc7Age;

        return $this;
    }

    public function getDesc8Age(): ?string
    {
        return $this->desc8Age;
    }

    public function setDesc8Age(?string $desc8Age): self
    {
        $this->desc8Age = $desc8Age;

        return $this;
    }

    public function getDesc9Age(): ?string
    {
        return $this->desc9Age;
    }

    public function setDesc9Age(?string $desc9Age): self
    {
        $this->desc9Age = $desc9Age;

        return $this;
    }

    public function getDesc10Age(): ?string
    {
        return $this->desc10Age;
    }

    public function setDesc10Age(?string $desc10Age): self
    {
        $this->desc10Age = $desc10Age;

        return $this;
    }

    public function getSolAge(): ?bool
    {
        return $this->solAge;
    }

    public function setSolAge(?bool $solAge): self
    {
        $this->solAge = $solAge;

        return $this;
    }

    public function getAnyAge(): ?int
    {
        return $this->anyAge;
    }

    public function setAnyAge(int $anyAge): self
    {
        $this->anyAge = $anyAge;

        return $this;
    }


}
