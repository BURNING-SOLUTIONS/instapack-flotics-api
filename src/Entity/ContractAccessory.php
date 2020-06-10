<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Symfony\Component\Serializer\Annotation\Groups;
use phpDocumentor\Reflection\Types\Integer;

/**
 * @ApiResource(normalizationContext={"groups"={"get_contract_accessory"}}))
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
     * @Groups({"get_contract_accessory"})
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contract")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_contract_accessory"})
     */
    private $contract;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Accessories")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"get_contract_accessory"})
     * @ApiFilter(SearchFilter::class, properties={"accessory.accessory":"partial" })
     */
    private $accessory;

    /**
     * @ORM\Column(type="integer")
     * @ApiFilter(SearchFilter::class, properties={"ammount":"partial" })
     * @Groups({"get_contract_accessory"})
     *
     */
    private $ammount;


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
    public function getAmmount()
    {
        return $this->ammount;
    }

    /**
     * @param $ammount
     */
    public function setAmmount($ammount): self
    {
        $this->ammount = $ammount;

        return $this;
    }

}
