<?php

namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\Authorizations;
use App\Entity\Equipment;
use App\Entity\EquipmentVehicle;
use App\Entity\Vehicle;
use App\Entity\VehicleAuthorization;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Service\VehicleAuthorizationService;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Traits\Base64Manager;

class VehicleService
{
    use Base64Manager;

    private $dbManager;
    private $validator;
    private $vehicleRepository;
    private $filesManager;
    private $equipmentVehicleService;
    private $vehicleAuthorizationService;
    private $iriConverterInterface;

    /**
     * @var StorageFileManager
     */


    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param StorageFileManager $filesManager
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, StorageFileManager $filesManager, EquipmentVehicleService $equipmentVehicleService, VehicleAuthorizationService $vehicleAuthorizationService, IriConverterInterface $iriConverterInterface)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->filesManager = $filesManager;

        $this->vehicleRepository = $this->dbManager->getRepository(Vehicle::class);
        $this->equipmentVehicleService = $equipmentVehicleService;
        $this->vehicleAuthorizationService = $vehicleAuthorizationService;
        $this->iriConverterInterface = $iriConverterInterface;
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getVehicleByParams(array $params, string $strategy = 'findBy'): Vehicle
    {
        $application = $this->vehicleRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    /**
     * @param array $params
     */
    public function getVehicleByOrParams(array $params, array $pagination = array('first' => 0, 'results' => 40))
    {
        $retrieveFields = array('id', 'registration', 'frame');
        return $this->vehicleRepository->findVehicleByOrParams($params, $retrieveFields, $pagination);
    }

    public function updateVehicle(Vehicle $vehicle, Array $equipments = array(), $authorizations = array()): void
    {
        $file_manager = $this->filesManager->getCurrentFileManager();
        $compulsaCirculacion_base64 = $vehicle->getDrivingLicense();
        $enviromental_base64 = $vehicle->getEnvironmental();
        $sheet_base64 = $vehicle->getDataSheet();

        $VEHICLES_AZURE_COMPULSE_PATH = $_ENV['VEHICLES_AZURE_COMPULSE_PATH'];
        $VEHICLES_AZURE_DINSTINTIVE_PATH = $_ENV['VEHICLES_AZURE_DINSTINTIVE_PATH'];
        $AZURE_READ_FILES_PATH = $_ENV['AZURE_READ_FILES_PATH'];
        $VEHICLES_AZURE_SHEET_PATH = $_ENV['VEHICLES_AZURE_SHEET_PATH'];

        $errors = $this->validator->validate($vehicle);

        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {

                if ($compulsaCirculacion_base64 && $this->isBase64($compulsaCirculacion_base64)) {
                    $compulseFinalRoute = $file_manager->uploadBase64File($compulsaCirculacion_base64, $VEHICLES_AZURE_COMPULSE_PATH, "compulsa_circulacion_", $vehicle->getRegistration());
                    $vehicle->setDrivingLicense($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_COMPULSE_PATH . '/' . $compulseFinalRoute);
                }

                if ($enviromental_base64 && $this->isBase64($enviromental_base64)) {
                    $enviromentalFinalRoute = $file_manager->uploadBase64File($enviromental_base64, $VEHICLES_AZURE_DINSTINTIVE_PATH, "distintivo_ambiental_", $vehicle->getRegistration());
                    $vehicle->setEnvironmental($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_DINSTINTIVE_PATH . '/' . $enviromentalFinalRoute);
                }

                if ($sheet_base64 && $this->isBase64($sheet_base64)) {
                    $sheetFinalRoute = $file_manager->uploadBase64File($sheet_base64, $VEHICLES_AZURE_SHEET_PATH, "ficha_tecnica_", $vehicle->getRegistration());
                    $vehicle->setDataSheet($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_SHEET_PATH . '/' . $sheetFinalRoute);
                }

                $this->vehicleRepository->persistVehicle($vehicle);
                $this->updateEquipments($vehicle, $equipments);
                $this->updateAuthorizations($vehicle, $authorizations);
                $this->dbManager->commit();

            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }

        }

    }

    public function saveVehicle(Vehicle $vehicle, Array $equipments = array(), $authorizations = array()): void
    {
        $file_manager = $this->filesManager->getCurrentFileManager();
        $compulsaCirculacion_base64 = $vehicle->getDrivingLicense();
        $enviromental_base64 = $vehicle->getEnvironmental();
        $sheet_base64 = $vehicle->getDataSheet();

        $VEHICLES_AZURE_COMPULSE_PATH = $_ENV['VEHICLES_AZURE_COMPULSE_PATH'];
        $VEHICLES_AZURE_DINSTINTIVE_PATH = $_ENV['VEHICLES_AZURE_DINSTINTIVE_PATH'];
        $AZURE_READ_FILES_PATH = $_ENV['AZURE_READ_FILES_PATH'];
        $VEHICLES_AZURE_SHEET_PATH = $_ENV['VEHICLES_AZURE_SHEET_PATH'];

        $errors = $this->validator->validate($vehicle);

        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                // do stuff
                if ($compulsaCirculacion_base64) {
                    $compulseFinalRoute = $file_manager->uploadBase64File($compulsaCirculacion_base64, $VEHICLES_AZURE_COMPULSE_PATH, "compulsa_circulacion_", $vehicle->getRegistration());
                    $vehicle->setDrivingLicense($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_COMPULSE_PATH . '/' . $compulseFinalRoute);
                }
                if ($enviromental_base64) {
                    $enviromentalFinalRoute = $file_manager->uploadBase64File($enviromental_base64, $VEHICLES_AZURE_DINSTINTIVE_PATH, "distintivo_ambiental_", $vehicle->getRegistration());
                    $vehicle->setEnvironmental($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_DINSTINTIVE_PATH . '/' . $enviromentalFinalRoute);
                }

                if ($sheet_base64) {
                    $sheetFinalRoute = $file_manager->uploadBase64File($sheet_base64, $VEHICLES_AZURE_SHEET_PATH, "ficha_tecnica_", $vehicle->getRegistration());
                    $vehicle->setDataSheet($AZURE_READ_FILES_PATH . $VEHICLES_AZURE_SHEET_PATH . '/' . $sheetFinalRoute);
                }
                $this->vehicleRepository->persistVehicle($vehicle);
                $this->saveEquipments($vehicle, $equipments);
                $this->saveAuthorizations($vehicle, $authorizations);

                $this->dbManager->commit();
            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }

        }

    }

    public function saveEquipments(Vehicle $vehicle, Array $equipments = array()): void
    {
        if ($equipments) {
            foreach ($equipments as $equipment) {
                $newEquipmentVehicle = new EquipmentVehicle();
                $existedEquipment = $this->iriConverterInterface->getItemFromIri($equipment['equipment']);

                if ($existedEquipment instanceof Equipment) {
                    $newEquipmentVehicle
                        ->setValue($equipment['value'])
                        ->setEquipment($existedEquipment)
                        ->setVehicle($vehicle);
                }
                $equipmentCreated = $this->equipmentVehicleService->saveEquipmentVehicle($newEquipmentVehicle);
                $vehicle->addEquipmentVehicle($equipmentCreated);
            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }
    }

    public function saveAuthorizations(Vehicle $vehicle, array $authorizations = array()): void
    {
        if ($authorizations) {
            foreach ($authorizations as $authorization) {
                $newVehicleAuthorization = new VehicleAuthorization();
                $existedAuthorization = $this->iriConverterInterface->getItemFromIri($authorization['authorization']);

                if ($existedAuthorization instanceof Authorizations) {
                    $newVehicleAuthorization
                        ->setAuthorization($existedAuthorization)
                        ->setStart(new \DateTime($authorization['startDate']))
                        ->setEnd(new \DateTime($authorization['endDate']))
                        ->setVehicle($vehicle)
                        ->setActive($authorization['active'] ?: true)
                        ->setRenewNotifications($authorization['notifications'] ?: true);
                }
                $authorizationCreated = $this->vehicleAuthorizationService->saveVehicleAuthorization($newVehicleAuthorization);
                $vehicle->addVehicleAuthorization($authorizationCreated);
            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }

    }

    public function updateEquipments(Vehicle $vehicle, array $equipments = array())
    {
        if ($equipments) {
            foreach ($equipments as $equipment) {
                $totalEquipments = (int)$equipment['value'];
                $haveEquipments = $totalEquipments > 0;

                if (array_key_exists('id', $equipment)) {
                    $findEquipmentVehicle = $this->equipmentVehicleService->getEquipmentVehicleParams(array('id' => $equipment['id']));

                    if ($haveEquipments) {
                        $findEquipmentVehicle->setValue($totalEquipments);
                        $this->equipmentVehicleService->saveEquipmentVehicle($findEquipmentVehicle);
                        continue;
                    }
                    #im sure that equipment vehicle exist but value is lower or equal to 0 and its neccesary remove..
                    $this->equipmentVehicleService->removeEquipmentVehicle($findEquipmentVehicle);
                    continue;
                }
                if ($haveEquipments) {
                    $newEquipmentVehicle = new EquipmentVehicle();
                    $newEquipmentVehicle
                        ->setValue($totalEquipments)
                        ->setEquipment($this->iriConverterInterface->getItemFromIri($equipment['equipment']))
                        ->setVehicle($vehicle);

                    $vehicle->addEquipmentVehicle($this->equipmentVehicleService->saveEquipmentVehicle($newEquipmentVehicle));
                }
            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }
    }

    public function updateAuthorizations(Vehicle $vehicle, array $vehicleAuthorizations = array())
    {
        if ($vehicleAuthorizations) {

            foreach ($vehicleAuthorizations as $vehicleAuthorization) {
                [
                    'authorization' => $authorization,
                    'removed' => $removed,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'active' => $active,
                    'notifications' => $notifications,
                ] = $vehicleAuthorization;
                $existedAuthorization = $this->iriConverterInterface->getItemFromIri($authorization);
                $vehicleAuthorizationId = $vehicleAuthorization['@id'] ?? null;

                #If is received @id is edited or removed ('if have in true removed key') vehicleAuthorization
                if ($vehicleAuthorizationId) {
                    $vehicleAuthorizationId = $vehicleAuthorization['@id'];
                    $existedVehicleAuthorization = $this->iriConverterInterface->getItemFromIri($vehicleAuthorizationId);

                    if ($existedVehicleAuthorization instanceof VehicleAuthorization) {
                        if ($removed) {
                            $this->vehicleAuthorizationService->removeVehicleAuthorization($existedVehicleAuthorization);
                            continue;
                        }
                        $existedVehicleAuthorization
                            ->setAuthorization($existedAuthorization)
                            ->setStart(new \DateTime($startDate))
                            ->setEnd(new \DateTime($endDate))
                            ->setVehicle($vehicle)
                            ->setActive($active ?: true)
                            ->setRenewNotifications($notifications ?: true);

                        $this->vehicleAuthorizationService->saveVehicleAuthorization($existedVehicleAuthorization);
                        continue;
                    }
                }

                #If not received @id persist new vehicleAuthorization
                $newVehicleAuthorization = new VehicleAuthorization();

                if ($existedAuthorization instanceof Authorizations) {
                    $newVehicleAuthorization
                        ->setAuthorization($existedAuthorization)
                        ->setStart(new \DateTime($vehicleAuthorization['startDate']))
                        ->setEnd(new \DateTime($vehicleAuthorization['endDate']))
                        ->setVehicle($vehicle)
                        ->setActive($vehicleAuthorization['active'] ?: true)
                        ->setRenewNotifications($vehicleAuthorization['notifications'] ?: true);
                }
                $authorizationCreated = $this->vehicleAuthorizationService->saveVehicleAuthorization($newVehicleAuthorization);
                $vehicle->addVehicleAuthorization($authorizationCreated);

            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }
    }

}