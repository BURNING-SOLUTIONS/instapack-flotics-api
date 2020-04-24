<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ContractAccessoryRepository")
 * @ApiFilter(OrderFilter::class, properties={"id","contract", "accessory"})
 * @ApiFilter(SearchFilter::class, properties={"contract": "partial","accessory":"partial"})
 *
 */
class ContractAccessory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract")
     * @ORM\JoinColumn(nullable=false)
     */
    private $contract;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Accessories")
     * @ORM\JoinColumn(nullable=false)
     * @ApiFilter(SearchFilter::class, properties={"accessory.accessory":"partial" })
     */
    private $accessory;

    /**
     * @ORM\Column(type="integer")
     * @ApiFilter(SearchFilter::class, properties={"value":"partial" })
     *
     */
    private $value;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContract(): ?Contract
    {
        return $this->contract;
    }

    public function setContract(?Contract $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getAccessory(): ?Accessories
    {
        return $this->accessory;
    }

    public function setAccessory(?Accessories $accessory): self
    {
        $this->accessory = $accessory;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

}
