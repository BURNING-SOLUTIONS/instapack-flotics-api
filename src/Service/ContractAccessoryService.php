<?php


namespace App\Service;


use App\Entity\ContractAccessory;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ContractAccessoryService
{

    private $dbManager;
    private $validator;
    private $ContractAccessoryRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param Request $request
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->ContractAccessoryRepository = $this->dbManager->getRepository(ContractAccessory::class);
    }

    public function saveContractAccessory(ContractAccessory $contractAccessory): ContractAccessory
    {
        $this->ContractAccessoryRepository->persistContractAccessory($contractAccessory);

        return $contractAccessory;

    }

}