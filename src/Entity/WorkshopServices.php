<?php

 namespace App\Entity;

 use ApiPlatform\Core\Annotation\ApiResource;
 use Doctrine\Common\Collections\ArrayCollection;
 use Doctrine\Common\Collections\Collection;
 use Doctrine\ORM\Mapping as ORM;
 use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

 /**
  * @ApiResource()
  * @ORM\Entity(repositoryClass="App\Repository\WorkshopServicesRepository")
  * @UniqueEntity("code")
  * @UniqueEntity("name")
  */
 class WorkshopServices
 {
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @ORM\Column(type="string", length=255, unique=true)
   */
  private $code;

  /**
   * @ORM\Column(type="string", length=255, unique=true)
   */
  private $name;

  /**
   * @ORM\ManyToMany(targetEntity="App\Entity\Workshop", mappedBy="services")
   */
  private $workshops;

  public function __construct()
  {
   $this->workshops = new ArrayCollection();
  }

  public function getId(): ?int
  {
   return $this->id;
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

  public function getName(): ?string
  {
   return $this->name;
  }

  public function setName(string $name): self
  {
   $this->name = $name;

   return $this;
  }

  /**
   * @return Collection|Workshop[]
   */
  public function getWorkshops(): Collection
  {
   return $this->workshops;
  }

  public function addWorkshop(Workshop $workshop): self
  {
   if (!$this->workshops->contains($workshop)) {
    $this->workshops[] = $workshop;
    $workshop->addService($this);
   }

   return $this;
  }

  public function removeWorkshop(Workshop $workshop): self
  {
   if ($this->workshops->contains($workshop)) {
    $this->workshops->removeElement($workshop);
    $workshop->removeService($this);
   }

   return $this;
  }
 }
