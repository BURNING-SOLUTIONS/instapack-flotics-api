<?php

namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\Accessories;
use App\Entity\Contract;
use App\Entity\ContractAccessory;
use App\Entity\HistoricalContract;
use App\Traits\Base64Manager;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Service\HistoricalContractService;
use App\Service\ContractAccessoryService;


class ContractService
{

    use Base64Manager;

    private $dbManager;
    private $validator;
    private $contractRepository;
    private $iriConverterInterface;
    private $contractAccessoryService;
    private $filesManager;
    private $historicalContractService;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, IriConverterInterface $iriConverterInterface, ContractAccessoryService $contractAccessoryService, StorageFileManager $filesManager, HistoricalContractService $historicalContractService)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->contractRepository = $this->dbManager->getRepository(Contract::class);
        $this->iriConverterInterface = $iriConverterInterface;
        $this->contractAccessoryService = $contractAccessoryService;
        $this->filesManager = $filesManager;
        $this->historicalContractService = $historicalContractService;
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getContractByParams(array $params, string $strategy = 'findBy'): Contract
    {
        $application = $this->contractRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    /**
     * @param array $params
     */
    public function getContractByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 40))
    {
        return $this->contractRepository->findContractByOrParams($params, array('id', 'number'), $pagination);
    }

    public function uploadAzureFile(string $base64, string $azureRoute, string $prefix, string $identificator)
    {

        $file_manager = $this->filesManager->getCurrentFileManager();

        $extension = $this->getBase64Extension($base64);
        $fileData = $this->getBase64FileData($base64);
        $tmpBasePath = $prefix . $identificator . '.' . $extension;
        $upload = $this->base64ToFile($fileData, $tmpBasePath);
        $file = new UploadedFile($tmpBasePath, $tmpBasePath, $extension);
        $file_manager->uploadFile($file, $azureRoute, $tmpBasePath);

        return $tmpBasePath;
    }

    public function saveContract(Contract $contract, Array $accessories = array()): void
    {
        $contractFile_base64 = $contract->getContractFile();
        $CONTRACTS_AZURE_FILE_PATH = $_ENV['CONTRACTS_AZURE_FILE_PATH'];
        $AZURE_READ_FILES_PATH = $_ENV['AZURE_READ_FILES_PATH'];

        $errors = $this->validator->validate($contract);

        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                // do stuff
                if ($contractFile_base64) {
                    $contractFinalRoute = $this->uploadAzureFile($contractFile_base64, $CONTRACTS_AZURE_FILE_PATH, "ficha_tecnica_", $contract->getNumber());
                    $contract->setContractFile($AZURE_READ_FILES_PATH . $CONTRACTS_AZURE_FILE_PATH . '/' . $contractFinalRoute);
                }

                $this->contractRepository->persistContract($contract);
                $this->saveAccessories($contract, $accessories);
                $this->dbManager->commit();

            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function deleteContract(Contract $contract)
    {
        $this->dbManager->beginTransaction();
        $historicalContract = new HistoricalContract();
        try {
            $historicalContract
                ->setVehicle($contract->getVehicle()->getRegistration())
                ->setDeliveryAddress($contract->getDeliveryAddress())
                ->setDevolutionAddress($contract->getDevolutionAddress())
                ->setNumber($contract->getNumber())
                ->setEntryKM($contract->getEntryKm())
                ->setMaximumKM($contract->getMaximumKm())
                ->setStartDate($contract->getStartDate())
                ->setEndDate($contract->getEndDate())
                ->setExitKm($contract->getExitKm())
                ->setInitialDeposit($contract->getInitialDeposit())
                ->setRentalAgency($contract->getRentalAgency()->getName())
                ->setInstapackGroup($contract->getInstapackGroup()->getName())
                ->setType($contract->getType()->getName());

            $this->historicalContractService->saveHistoricalContract($historicalContract);
            $this->contractRepository->deleteContract($contract);
            $this->dbManager->commit();

        } catch (\Exception $e) {
            $this->dbManager->rollback();
            throw new \Exception($e->getMessage());
        }
    }

    public function saveAccessories(Contract $contract, Array $accessories = array()): void
    {
        if ($accessories) {
            foreach ($accessories as $accessory) {
                $newContractAccessory = new ContractAccessory();
                $dbAccessory = $this->iriConverterInterface->getItemFromIri($accessory['accessory']);
                if ($dbAccessory instanceof Accessories) {
                    $newContractAccessory
                        ->setAmmount($accessory['value'])
                        ->setAccessory($dbAccessory)
                        ->setContract($contract);
                }
                $contract->addContractAccessory($this->contractAccessoryService->saveContractAccessory($newContractAccessory));
            }
            $this->contractRepository->persistContract($contract);
        }
    }
}