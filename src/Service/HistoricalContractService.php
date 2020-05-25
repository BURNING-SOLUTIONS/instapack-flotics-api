<?php


namespace App\Service;


use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\HistoricalContract;
use App\Repository\HistoricalContractRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class HistoricalContractService
{
    private $dbManager;
    private $validator;
    private $historicalContractRepository;
    private $iriConverterInterface;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param IriConverterInterface $IriConverterInterface
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, IriConverterInterface $iriConverterInterface)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->iriConverterInterface = $iriConverterInterface;
        $this->historicalContractRepository = $this->dbManager->getRepository(HistoricalContract::class);
    }

    public function saveHistoricalContract(HistoricalContract $historicalContract)
    {
        $this->historicalContractRepository->persistHistoricalContract($historicalContract);
    }

}