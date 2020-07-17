<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\VehicleAuthorizationRepository")
 */
class VehicleAuthorization
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="vehicleAuthorizations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicle;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Authorizations", inversedBy="vehicleAuthorizations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $authorization;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end;

    /**
     * @ORM\Column(type="boolean", options={"default"=true})
     */
    private $active;

    /**
     * @ORM\Column(type="boolean",options={"default"=true})
     */
    private $renewNotifications;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getAuthorization(): ?Authorizations
    {
        return $this->authorization;
    }

    public function setAuthorization(?Authorizations $authorization): self
    {
        $this->authorization = $authorization;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getRenewNotifications(): ?bool
    {
        return $this->renewNotifications;
    }

    public function setRenewNotifications(bool $renewNotifications): self
    {
        $this->renewNotifications = $renewNotifications;

        return $this;
    }
}
