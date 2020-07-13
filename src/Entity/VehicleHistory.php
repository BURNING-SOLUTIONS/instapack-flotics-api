<?php

 namespace App\Entity;

 use ApiPlatform\Core\Annotation\ApiResource;
 use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\DateFilter;
 use ApiPlatform\Core\Annotation\ApiFilter;
 use Symfony\Component\Serializer\Annotation\Groups;
 use Doctrine\ORM\Mapping as ORM;

#Queda pendiente crear la entidad revision local e incluirla aqui para ver en el historico del vehiculo si paso por esa
#Revision local, com mismo se tiene ya el cliente y el el taller..

 /**
  * @ApiResource(
  *  normalizationContext={"groups"={"get_vehicleHistory","history_workshop"}}
  * )
  * @ORM\Entity(repositoryClass="App\Repository\VehicleHistoryRepository")
  * @ApiFilter(DateFilter::class, properties={"createdAt": DateFilter::EXCLUDE_NULL})
  */
 class VehicleHistory
 {
  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   * @Groups({"get_vehicleHistory"})
   */
  private $id;

  /**
   * @ORM\Column(type="datetime")
   * @Groups({"get_vehicleHistory"})
   */
  private $createdAt;

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\VehicleWorkshop", inversedBy="vehicleHistories")
   * @Groups({"history_workshop"})
   */
  private $workshop;

  /**
   * @ORM\Column(type="string", length=255, nullable=true)
   * @Groups({"get_vehicleHistory"})
   */
  private $client;

  /**
   * @ORM\Column(type="string", length=255)
   * @Groups({"get_vehicleHistory"})
   */
  private $location;

  /**
   * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="vehicleHistories")
   * @Groups({"get_vehicleHistory"})
   * @ORM\JoinColumn(nullable=false)
   */
  private $vehicle;

  /**
   * @ORM\Column(type="integer", length=1)
   * @Groups({"get_vehicleHistory"})
   */
  private $type;

  public function getId(): ?int
  {
   return $this->id;
  }

  public function getCreatedAt(): ?\DateTimeInterface
  {
   return $this->createdAt;
  }

  public function setCreatedAt(\DateTimeInterface $createdAt): self
  {
   $this->createdAt = $createdAt;

   return $this;
  }

  public function getWorkshop(): ?VehicleWorkshop
  {
   return $this->workshop;
  }

  public function setWorkshop(?VehicleWorkshop $workshop): self
  {
   $this->workshop = $workshop;

   return $this;
  }

  public function getClient(): ?string
  {
   return $this->client;
  }

  public function setClient(?string $client): self
  {
   $this->client = $client;

   return $this;
  }

  public function getLocation(): ?string
  {
   return $this->location;
  }

  public function setLocation(?string $location): self
  {
   $this->location = $location;

   return $this;
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

  public function getType(): ?int
  {
   return $this->type;
  }

  public function setType(int $type): self
  {
   $this->type = $type;

   return $this;
  }
 }
