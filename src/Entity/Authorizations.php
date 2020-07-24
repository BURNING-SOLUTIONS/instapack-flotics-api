<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"vehicle_authorizations", "get_authorization"}}
 * )
 * @UniqueEntity("name")
 * @UniqueEntity("code")
 * @ORM\Entity(repositoryClass="App\Repository\AuthorizationsRepository")
 * @ApiFilter(OrderFilter::class, properties={"name", "code","price"})
 * @ApiFilter(SearchFilter::class, properties={"name": "partial", "code": "partial", "price": "partial"})
 */
class Authorizations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"vehicle_authorizations", "get_authorization"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicle_authorizations", "get_authorization"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"vehicle_authorizations", "get_authorization"})
     */
    private $code;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"get_authorization"})
     */
    private $price;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\VehicleAuthorization", mappedBy="authorization")
     */
    private $vehicleAuthorizations;

    public function __construct()
    {
        $this->vehicleAuthorizations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return Collection|VehicleAuthorization[]
     */
    public function getVehicleAuthorizations(): Collection
    {
        return $this->vehicleAuthorizations;
    }

    public function addVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): self
    {
        if (!$this->vehicleAuthorizations->contains($vehicleAuthorization)) {
            $this->vehicleAuthorizations[] = $vehicleAuthorization;
            $vehicleAuthorization->setAuthorizations($this);
        }

        return $this;
    }

    public function removeVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): self
    {
        if ($this->vehicleAuthorizations->contains($vehicleAuthorization)) {
            $this->vehicleAuthorizations->removeElement($vehicleAuthorization);
            // set the owning side to null (unless already changed)
            if ($vehicleAuthorization->getAuthorizations() === $this) {
                $vehicleAuthorization->setAuthorizations(null);
            }
        }

        return $this;
    }
}
