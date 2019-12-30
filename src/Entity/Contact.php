<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 * @ApiFilter(SearchFilter::class, properties={"email": "exact", "name": "exact", "mobile": "exact"})
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $mobile;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Regex(
     *               pattern="/^((\+34)|(34))?[6|7][0-9]{8}$/",
     *               match=false,
     *               message="Your phone is invalid"
     * )
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\Email(
     *     message = "The email is not a valid.",
     *     checkMX = true
     * )
     *
     */

    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $charge;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\InstapackGroup", inversedBy="contacts")
     */
    private $instapackGroup;


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

    public function getMobile(): ?int
    {
        return $this->mobile;
    }

    public function setMobile(int $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCharge(): ?string
    {
        return $this->charge;
    }

    public function setCharge(string $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getInstapackGroup(): ?InstapackGroup
    {
        return $this->instapackGroup;
    }

    public function setInstapackGroup(?InstapackGroup $instapackGroup): self
    {
        $this->instapackGroup = $instapackGroup;

        return $this;
    }
}
