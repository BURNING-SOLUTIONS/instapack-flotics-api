<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\ExportAgenciesController;
use App\Controller\RentalAgencyController;
use App\Entity\Rates;

/**
 * @ORM\Table(indexes={
@ORM\Index(name="global_search_agency", columns={"name","code","cif"})
})
 * @ApiResource(
 *     normalizationContext={"groups"={"get_contract","get_agency","vehicle_agency", "get_VehicleWorkshop"}},
 *     collectionOperations={
 *          "get",
 *          "post"={
 *             "method"="POST",
 *             "controller"=RentalAgencyController::class
 *         },
 *          "export_agencies"={
 *              "method"="GET",
 *              "path"="/rental_agencies/export/{format}",
 *              "requirements"={"format"="excel|pdf"},
 *              "controller"=ExportAgenciesController::class,
 *              "pagination_enabled"=false,
 *              "pagination_items_per_page"=5000,
 *         }
 *     },
 *     itemOperations={
 *         "patch"={
 *             "method"="PATCH",
 *             "controller"=RentalAgencyController::class
 *          },
 *         "put",
 *         "delete",
 *         "get"={
 *             "normalization_context"={"groups"={"get_only_item"}}
 *         }
 *     }
 * )
 * @ORM\Entity(repositoryClass="App\Repository\RentalAgencyRepository")
 * @UniqueEntity("code")
 * @UniqueEntity("cif")
 * @ApiFilter(SearchFilter::class, properties={"code": "partial", "cif": "partial", "name": "partial", "province":"partial","population":"partial","bussinesAddress":"partial","fiscalAddress":"partial","observations":"partial","contracts":"partial","vehicles":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"code", "cif","name","province","population","contracts","vehicles"})
 *
 */
class RentalAgency
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_contract","get_agency","vehicle_agency","get_only_item","get_VehicleWorkshop"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255,unique=true)
     * @Groups({"get_contract","get_agency","vehicle_agency","get_only_item","get_VehicleWorkshop"})
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Regex(pattern="/^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/", message="Your Cif is invalid")
     * @Groups({"get_contract","get_agency","vehicle_agency","get_only_item"})
     */
    private $cif;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_contract","get_agency","vehicle_agency","get_only_item","get_VehicleWorkshop"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_only_item","get_agency"})
     */
    private $bussinesAddress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_only_item","get_agency"})
     */
    private $fiscalAddress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_only_item","get_agency"})
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_only_item","get_agency"})
     */
    private $population;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $observations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contract", mappedBy="rentalAgency")
     */
    private $contracts;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Vehicle", mappedBy="rentalAgency")
     */
    private $vehicles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $mainContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $mainPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $mainEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $secondContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $secondPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_only_item","get_agency"})
     */
    private $secondEmail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleWorkshop", mappedBy="rentalAgency")
     */
    private $vehicleWorkshops;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rates", mappedBy="agency", cascade={"remove"})
     * @ApiSubresource
     */
    private $rates;

    public function __construct()
    {
        $this->contracts = new ArrayCollection();
        $this->vehicles = new ArrayCollection();
        $this->vehicleWorkshops = new ArrayCollection();
        $this->rates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }


    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(string $cif): self
    {
        $this->cif = $cif;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBussinesAddress(): ?string
    {
        return $this->bussinesAddress;
    }

    public function setBussinesAddress(string $bussinesAddress): self
    {
        $this->bussinesAddress = $bussinesAddress;

        return $this;
    }

    public function getFiscalAddress(): ?string
    {
        return $this->fiscalAddress;
    }

    public function setFiscalAddress(string $fiscalAddress): self
    {
        $this->fiscalAddress = $fiscalAddress;

        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(string $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getPopulation(): ?string
    {
        return $this->population;
    }

    public function setPopulation(string $population): self
    {
        $this->population = $population;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    /**
     * @return Collection|Contract[]
     */
    public function getContracts(): Collection
    {
        return $this->contracts;
    }

    public function addContract(Contract $contract): self
    {
        if (!$this->contracts->contains($contract)) {
            $this->contracts[] = $contract;
            $contract->setRentalAgency($this);
        }

        return $this;
    }

    public function removeContract(Contract $contract): self
    {
        if ($this->contracts->contains($contract)) {
            $this->contracts->removeElement($contract);
            // set the owning side to null (unless already changed)
            if ($contract->getRentalAgency() === $this) {
                $contract->setRentalAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Vehicle[]
     */
    public function getVehicles(): Collection
    {
        return $this->vehicles;
    }

    public function addVehicle(Vehicle $vehicle): self
    {
        if (!$this->vehicles->contains($vehicle)) {
            $this->vehicles[] = $vehicle;
            $vehicle->setRentalAgency($this);
        }

        return $this;
    }

    public function removeVehicle(Vehicle $vehicle): self
    {
        if ($this->vehicles->contains($vehicle)) {
            $this->vehicles->removeElement($vehicle);
            // set the owning side to null (unless already changed)
            if ($vehicle->getRentalAgency() === $this) {
                $vehicle->setRentalAgency(null);
            }
        }

        return $this;
    }

    public function getMainContact(): ?string
    {
        return $this->mainContact;
    }

    public function setMainContact(?string $mainContact): self
    {
        $this->mainContact = $mainContact;

        return $this;
    }

    public function getMainPhone(): ?string
    {
        return $this->mainPhone;
    }

    public function setMainPhone(?string $mainPhone): self
    {
        $this->mainPhone = $mainPhone;

        return $this;
    }

    public function getMainEmail(): ?string
    {
        return $this->mainEmail;
    }

    public function setMainEmail(?string $mainEmail): self
    {
        $this->mainEmail = $mainEmail;

        return $this;
    }

    public function getSecondContact(): ?string
    {
        return $this->secondContact;
    }

    public function setSecondContact(?string $secondContact): self
    {
        $this->secondContact = $secondContact;

        return $this;
    }

    public function getSecondPhone(): ?string
    {
        return $this->secondPhone;
    }

    public function setSecondPhone(?string $secondPhone): self
    {
        $this->secondPhone = $secondPhone;

        return $this;
    }

    public function getSecondEmail(): ?string
    {
        return $this->secondEmail;
    }

    public function setSecondEmail(?string $secondEmail): self
    {
        $this->secondEmail = $secondEmail;

        return $this;
    }

    /**
     * @return Collection|VehicleWorkshop[]
     */
    public function getVehicleWorkshops(): Collection
    {
        return $this->vehicleWorkshops;
    }

    public function addVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if (!$this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops[] = $vehicleWorkshop;
            $vehicleWorkshop->setRentalAgency($this);
        }

        return $this;
    }

    public function removeVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): self
    {
        if ($this->vehicleWorkshops->contains($vehicleWorkshop)) {
            $this->vehicleWorkshops->removeElement($vehicleWorkshop);
            // set the owning side to null (unless already changed)
            if ($vehicleWorkshop->getRentalAgency() === $this) {
                $vehicleWorkshop->setRentalAgency(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|VehicleWorkshop[]
     */
    public function getRates(): Collection
    {
        return $this->rates;
    }

    public function addRate(Rates $rate): self
    {
        if (!$this->rates->contains($rate)) {
            $this->rates[] = $rate;
            $rate->setAgency($this);
        }

        return $this;
    }

    public function removeRate(Rates $rate): self
    {
        if ($this->rates->contains($rate)) {
            $this->rates->removeElement($rate);
            // set the owning side to null (unless already changed)
            if ($rate->getAgency() === $this) {
                $rate->setAgency(null);
            }
        }

        return $this;
    }
}
