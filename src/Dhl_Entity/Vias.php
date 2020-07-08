<?php

namespace Dhl\Dhl_Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vias
 *
 * @ORM\Table(name="vias")
 * @ORM\Entity
 */
class Vias
{
    /**
     * @var int
     *
     * @ORM\Column(name="Cod_Via", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="For_Via", type="string", length=20, nullable=true)
     */
    private $forVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ascii_Via", type="string", length=20, nullable=true)
     */
    private $asciiVia;

    /**
     * @var bool
     *
     * @ORM\Column(name="Iva_Via", type="boolean", nullable=false)
     */
    private $ivaVia = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email_Via", type="string", length=40, nullable=true)
     */
    private $emailVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Fax_Via", type="integer", nullable=true)
     */
    private $faxVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Tel_Via", type="integer", nullable=true)
     */
    private $telVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Oficina_Via", type="integer", nullable=true)
     */
    private $oficinaVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Tar_Via", type="string", length=5, nullable=true)
     */
    private $tarVia;

    /**
     * @var int
     *
     * @ORM\Column(name="NumFac_Via", type="integer", nullable=false)
     */
    private $numfacVia = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Etiqueta_Via", type="string", length=15, nullable=true)
     */
    private $etiquetaVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Impre_Via", type="string", length=50, nullable=true)
     */
    private $impreVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="Sustituir_Via", type="boolean", nullable=true)
     */
    private $sustituirVia = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForNac_Via", type="string", length=20, nullable=true)
     */
    private $fornacVia;

    /**
     * @var float|null
     *
     * @ORM\Column(name="MaxKg_Via", type="float", precision=53, scale=0, nullable=true)
     */
    private $maxkgVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MaxDim1_Via", type="smallint", nullable=true)
     */
    private $maxdim1Via;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MaxDim2_Via", type="smallint", nullable=true)
     */
    private $maxdim2Via;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MaxDim3_Via", type="smallint", nullable=true)
     */
    private $maxdim3Via;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ForEti_Via", type="string", length=20, nullable=true)
     */
    private $foretiVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ManifPropio_Via", type="boolean", nullable=true)
     */
    private $manifpropioVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RutaFichReco_Via", type="string", length=200, nullable=true)
     */
    private $rutafichrecoVia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="FecUltCan_Via", type="datetime", nullable=true)
     */
    private $fecultcanVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ProcesaCan_Via", type="boolean", nullable=true)
     */
    private $procesacanVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ManifConjunto_Via", type="boolean", nullable=true)
     */
    private $manifconjuntoVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MenInterno_Via", type="integer", nullable=true)
     */
    private $meninternoVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CodIncFallida_Via", type="string", length=5, nullable=true)
     */
    private $codincfallidaVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="SusRefAlb_Via", type="boolean", nullable=true)
     */
    private $susrefalbVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="PasarAlbaRef2_Via", type="boolean", nullable=true)
     */
    private $pasaralbaref2Via;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ImpPesDocSor_Via", type="smallint", nullable=true)
     */
    private $imppesdocsorVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ModPesMay_Via", type="boolean", nullable=true)
     */
    private $modpesmayVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DiasSincro_Via", type="smallint", nullable=true)
     */
    private $diassincroVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PrvAnd_Via", type="smallint", nullable=true)
     */
    private $prvandVia;

    /**
     * @var int|null
     *
     * @ORM\Column(name="PrvGib_Via", type="smallint", nullable=true)
     */
    private $prvgibVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InacNacLin1_Via", type="boolean", nullable=true)
     */
    private $inacnaclin1Via;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="InacRecLin2_Via", type="boolean", nullable=true)
     */
    private $inacreclin2Via;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="MenReco_Via", type="boolean", nullable=true)
     */
    private $menrecoVia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="RedondeoDim_Via", type="string", length=1, nullable=true)
     */
    private $redondeodimVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="NoTransmitirPeso_Via", type="boolean", nullable=true)
     */
    private $notransmitirpesoVia;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="CrearPobInt_Via", type="boolean", nullable=true)
     */
    private $crearpobintVia;

    public function getCodVia(): ?int
    {
        return $this->codVia;
    }

    public function getForVia(): ?string
    {
        return $this->forVia;
    }

    public function setForVia(?string $forVia): self
    {
        $this->forVia = $forVia;

        return $this;
    }

    public function getAsciiVia(): ?string
    {
        return $this->asciiVia;
    }

    public function setAsciiVia(?string $asciiVia): self
    {
        $this->asciiVia = $asciiVia;

        return $this;
    }

    public function getIvaVia(): ?bool
    {
        return $this->ivaVia;
    }

    public function setIvaVia(bool $ivaVia): self
    {
        $this->ivaVia = $ivaVia;

        return $this;
    }

    public function getEmailVia(): ?string
    {
        return $this->emailVia;
    }

    public function setEmailVia(?string $emailVia): self
    {
        $this->emailVia = $emailVia;

        return $this;
    }

    public function getFaxVia(): ?int
    {
        return $this->faxVia;
    }

    public function setFaxVia(?int $faxVia): self
    {
        $this->faxVia = $faxVia;

        return $this;
    }

    public function getTelVia(): ?int
    {
        return $this->telVia;
    }

    public function setTelVia(?int $telVia): self
    {
        $this->telVia = $telVia;

        return $this;
    }

    public function getOficinaVia(): ?int
    {
        return $this->oficinaVia;
    }

    public function setOficinaVia(?int $oficinaVia): self
    {
        $this->oficinaVia = $oficinaVia;

        return $this;
    }

    public function getTarVia(): ?string
    {
        return $this->tarVia;
    }

    public function setTarVia(?string $tarVia): self
    {
        $this->tarVia = $tarVia;

        return $this;
    }

    public function getNumfacVia(): ?int
    {
        return $this->numfacVia;
    }

    public function setNumfacVia(int $numfacVia): self
    {
        $this->numfacVia = $numfacVia;

        return $this;
    }

    public function getEtiquetaVia(): ?string
    {
        return $this->etiquetaVia;
    }

    public function setEtiquetaVia(?string $etiquetaVia): self
    {
        $this->etiquetaVia = $etiquetaVia;

        return $this;
    }

    public function getImpreVia(): ?string
    {
        return $this->impreVia;
    }

    public function setImpreVia(?string $impreVia): self
    {
        $this->impreVia = $impreVia;

        return $this;
    }

    public function getSustituirVia(): ?bool
    {
        return $this->sustituirVia;
    }

    public function setSustituirVia(?bool $sustituirVia): self
    {
        $this->sustituirVia = $sustituirVia;

        return $this;
    }

    public function getFornacVia(): ?string
    {
        return $this->fornacVia;
    }

    public function setFornacVia(?string $fornacVia): self
    {
        $this->fornacVia = $fornacVia;

        return $this;
    }

    public function getMaxkgVia(): ?float
    {
        return $this->maxkgVia;
    }

    public function setMaxkgVia(?float $maxkgVia): self
    {
        $this->maxkgVia = $maxkgVia;

        return $this;
    }

    public function getMaxdim1Via(): ?int
    {
        return $this->maxdim1Via;
    }

    public function setMaxdim1Via(?int $maxdim1Via): self
    {
        $this->maxdim1Via = $maxdim1Via;

        return $this;
    }

    public function getMaxdim2Via(): ?int
    {
        return $this->maxdim2Via;
    }

    public function setMaxdim2Via(?int $maxdim2Via): self
    {
        $this->maxdim2Via = $maxdim2Via;

        return $this;
    }

    public function getMaxdim3Via(): ?int
    {
        return $this->maxdim3Via;
    }

    public function setMaxdim3Via(?int $maxdim3Via): self
    {
        $this->maxdim3Via = $maxdim3Via;

        return $this;
    }

    public function getForetiVia(): ?string
    {
        return $this->foretiVia;
    }

    public function setForetiVia(?string $foretiVia): self
    {
        $this->foretiVia = $foretiVia;

        return $this;
    }

    public function getManifpropioVia(): ?bool
    {
        return $this->manifpropioVia;
    }

    public function setManifpropioVia(?bool $manifpropioVia): self
    {
        $this->manifpropioVia = $manifpropioVia;

        return $this;
    }

    public function getRutafichrecoVia(): ?string
    {
        return $this->rutafichrecoVia;
    }

    public function setRutafichrecoVia(?string $rutafichrecoVia): self
    {
        $this->rutafichrecoVia = $rutafichrecoVia;

        return $this;
    }

    public function getFecultcanVia(): ?\DateTimeInterface
    {
        return $this->fecultcanVia;
    }

    public function setFecultcanVia(?\DateTimeInterface $fecultcanVia): self
    {
        $this->fecultcanVia = $fecultcanVia;

        return $this;
    }

    public function getProcesacanVia(): ?bool
    {
        return $this->procesacanVia;
    }

    public function setProcesacanVia(?bool $procesacanVia): self
    {
        $this->procesacanVia = $procesacanVia;

        return $this;
    }

    public function getManifconjuntoVia(): ?bool
    {
        return $this->manifconjuntoVia;
    }

    public function setManifconjuntoVia(?bool $manifconjuntoVia): self
    {
        $this->manifconjuntoVia = $manifconjuntoVia;

        return $this;
    }

    public function getMeninternoVia(): ?int
    {
        return $this->meninternoVia;
    }

    public function setMeninternoVia(?int $meninternoVia): self
    {
        $this->meninternoVia = $meninternoVia;

        return $this;
    }

    public function getCodincfallidaVia(): ?string
    {
        return $this->codincfallidaVia;
    }

    public function setCodincfallidaVia(?string $codincfallidaVia): self
    {
        $this->codincfallidaVia = $codincfallidaVia;

        return $this;
    }

    public function getSusrefalbVia(): ?bool
    {
        return $this->susrefalbVia;
    }

    public function setSusrefalbVia(?bool $susrefalbVia): self
    {
        $this->susrefalbVia = $susrefalbVia;

        return $this;
    }

    public function getPasaralbaref2Via(): ?bool
    {
        return $this->pasaralbaref2Via;
    }

    public function setPasaralbaref2Via(?bool $pasaralbaref2Via): self
    {
        $this->pasaralbaref2Via = $pasaralbaref2Via;

        return $this;
    }

    public function getImppesdocsorVia(): ?int
    {
        return $this->imppesdocsorVia;
    }

    public function setImppesdocsorVia(?int $imppesdocsorVia): self
    {
        $this->imppesdocsorVia = $imppesdocsorVia;

        return $this;
    }

    public function getModpesmayVia(): ?bool
    {
        return $this->modpesmayVia;
    }

    public function setModpesmayVia(?bool $modpesmayVia): self
    {
        $this->modpesmayVia = $modpesmayVia;

        return $this;
    }

    public function getDiassincroVia(): ?int
    {
        return $this->diassincroVia;
    }

    public function setDiassincroVia(?int $diassincroVia): self
    {
        $this->diassincroVia = $diassincroVia;

        return $this;
    }

    public function getPrvandVia(): ?int
    {
        return $this->prvandVia;
    }

    public function setPrvandVia(?int $prvandVia): self
    {
        $this->prvandVia = $prvandVia;

        return $this;
    }

    public function getPrvgibVia(): ?int
    {
        return $this->prvgibVia;
    }

    public function setPrvgibVia(?int $prvgibVia): self
    {
        $this->prvgibVia = $prvgibVia;

        return $this;
    }

    public function getInacnaclin1Via(): ?bool
    {
        return $this->inacnaclin1Via;
    }

    public function setInacnaclin1Via(?bool $inacnaclin1Via): self
    {
        $this->inacnaclin1Via = $inacnaclin1Via;

        return $this;
    }

    public function getInacreclin2Via(): ?bool
    {
        return $this->inacreclin2Via;
    }

    public function setInacreclin2Via(?bool $inacreclin2Via): self
    {
        $this->inacreclin2Via = $inacreclin2Via;

        return $this;
    }

    public function getMenrecoVia(): ?bool
    {
        return $this->menrecoVia;
    }

    public function setMenrecoVia(?bool $menrecoVia): self
    {
        $this->menrecoVia = $menrecoVia;

        return $this;
    }

    public function getRedondeodimVia(): ?string
    {
        return $this->redondeodimVia;
    }

    public function setRedondeodimVia(?string $redondeodimVia): self
    {
        $this->redondeodimVia = $redondeodimVia;

        return $this;
    }

    public function getNotransmitirpesoVia(): ?bool
    {
        return $this->notransmitirpesoVia;
    }

    public function setNotransmitirpesoVia(?bool $notransmitirpesoVia): self
    {
        $this->notransmitirpesoVia = $notransmitirpesoVia;

        return $this;
    }

    public function getCrearpobintVia(): ?bool
    {
        return $this->crearpobintVia;
    }

    public function setCrearpobintVia(?bool $crearpobintVia): self
    {
        $this->crearpobintVia = $crearpobintVia;

        return $this;
    }


}
