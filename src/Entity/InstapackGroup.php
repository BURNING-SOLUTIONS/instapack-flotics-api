<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(normalizationContext={"groups"={"get_instagroup","get_contract"}}))
 * @ORM\Entity(repositoryClass="App\Repository\InstapackGroupRepository")
 * @UniqueEntity("code")
 * @UniqueEntity("cif")
 * @ApiFilter(SearchFilter::class, properties={"code": "partial", "cif": "partial", "name": "partial","name":"partial","province":"partial","fiscalAddress":"partial","businessAddress":"partial","population":"partial","observations":"partial","contracts":"partial","mainEmail":"partial","mainPhone":"partial","mainContact":"partial","secondEmail":"partial","secondPhone":"partial","secondContact":"partial"})
 * @ApiFilter(OrderFilter::class, properties={"code", "cif","fiscalAddress","businessAddress","name","province","population","contracts","mainEmail","mainPhone","mainContact","secondEmail","secondPhone","secondContact"})
 */
class InstapackGroup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_instagroup","get_contract"})
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Groups({"get_instagroup","get_contract"})
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\Regex(pattern="/^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/", message="Your Cif is invalid")
     * @Groups({"get_instagroup","get_contract"})
     */
    private $cif;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_instagroup"})
     */
    private $fiscalAddress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_instagroup"})
     */
    private $businessAddress;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_instagroup"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_instagroup"})
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"get_instagroup"})
     */
    private $population;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $observations;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $mainContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $mainPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $mainEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $secondContact;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $secondPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_instagroup"})
     */
    private $secondEmail;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contract", mappedBy="instapackGroup")
     * @Groups({"get_instagroup"})
     */
    private $contracts;


    public function __construct()
    {
        $this->contacts = new ArrayCollection();
        $this->contracts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
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

    public function getFiscalAddress(): ?string
    {
        return $this->fiscalAddress;
    }

    public function setFiscalAddress(string $fiscalAddress): self
    {
        $this->fiscalAddress = $fiscalAddress;

        return $this;
    }

    public function getBusinessAddress(): ?string
    {
        return $this->businessAddress;
    }

    public function setBusinessAddress(string $businessAddress): self
    {
        $this->businessAddress = $businessAddress;

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
     * @return mixed
     */
    public function getMainContact()
    {
        return $this->mainContact;
    }

    /**
     * @param mixed $mainContact
     */
    public function setMainContact($mainContact): void
    {
        $this->mainContact = $mainContact;
    }

    /**
     * @return mixed
     */
    public function getMainPhone()
    {
        return $this->mainPhone;
    }

    /**
     * @param mixed $mainPhone
     */
    public function setMainPhone($mainPhone): void
    {
        $this->mainPhone = $mainPhone;
    }

    /**
     * @return mixed
     */
    public function getMainEmail()
    {
        return $this->mainEmail;
    }

    /**
     * @param mixed $mainEmail
     */
    public function setMainEmail($mainEmail): void
    {
        $this->mainEmail = $mainEmail;
    }

    /**
     * @return mixed
     */
    public function getSecondContact()
    {
        return $this->secondContact;
    }

    /**
     * @param mixed $secondContact
     */
    public function setSecondContact($secondContact): void
    {
        $this->secondContact = $secondContact;
    }

    /**
     * @return mixed
     */
    public function getSecondPhone()
    {
        return $this->secondPhone;
    }

    /**
     * @param mixed $secondPhone
     */
    public function setSecondPhone($secondPhone): void
    {
        $this->secondPhone = $secondPhone;
    }

    /**
     * @return mixed
     */
    public function getSecondEmail()
    {
        return $this->secondEmail;
    }

    /**
     * @param mixed $secondEmail
     */
    public function setSecondEmail($secondEmail): void
    {
        $this->secondEmail = $secondEmail;
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
            $contract->setInstapackGroup($this);
        }

        return $this;
    }

    public function removeContract(Contract $contract): self
    {
        if ($this->contracts->contains($contract)) {
            $this->contracts->removeElement($contract);
            // set the owning side to null (unless already changed)
            if ($contract->getInstapackGroup() === $this) {
                $contract->setInstapackGroup(null);
            }
        }

        return $this;
    }
}
