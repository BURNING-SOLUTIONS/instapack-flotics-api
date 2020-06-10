<?php

namespace App\Service;

use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\Equipment;
use App\Entity\EquipmentVehicle;
use App\Entity\Vehicle;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Expr\Array_;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
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
    private $iriConverterInterface;

    /**
     * @var StorageFileManager
     */


    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param StorageFileManager $filesManager
     * @param Request $request
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, StorageFileManager $filesManager, EquipmentVehicleService $equipmentVehicleService, IriConverterInterface $iriConverterInterface)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->filesManager = $filesManager;

        $this->vehicleRepository = $this->dbManager->getRepository(Vehicle::class);
        $this->equipmentVehicleService = $equipmentVehicleService;
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

    public function updateVehicle(Vehicle $vehicle, Array $equipments = array()): void
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
                $this->dbManager->commit();

            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }

        }

    }

    public function saveVehicle(Vehicle $vehicle, Array $equipments = array()): void
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
                $newEquipmentVehicle
                    ->setValue($equipment['value'])
                    ->setEquipment($this->iriConverterInterface->getItemFromIri($equipment['equipment']))
                    ->setVehicle($vehicle);

                $vehicle->addEquipmentVehicle($this->equipmentVehicleService->saveEquipmentVehicle($newEquipmentVehicle));
            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }
    }

    public function updateEquipments(Vehicle $vehicle, Array $equipments = array())
    {
        if ($equipments) {
            foreach ($equipments as $equipment) {
                $cantItems = (int)$equipment['value'];

                if (array_key_exists('id', $equipment)) {
                    $findEquipmentVehicle = $this->equipmentVehicleService->getEquipmentVehicleParams(array('id' => $equipment['id']));

                    if ($cantItems > 0) {
                        $findEquipmentVehicle->setValue($cantItems);
                        $this->equipmentVehicleService->saveEquipmentVehicle($findEquipmentVehicle);
                    } else {
                        #im sure that equipment vehicle exist but value is lower or equal to 0 and its neccesary remove..
                        $this->equipmentVehicleService->removeEquipmentVehicle($findEquipmentVehicle);
                    }
                } else {
                    if ($cantItems > 0) {
                        $newEquipmentVehicle = new EquipmentVehicle();
                        $newEquipmentVehicle
                            ->setValue($cantItems)
                            ->setEquipment($this->iriConverterInterface->getItemFromIri($equipment['equipment']))
                            ->setVehicle($vehicle);

                        $vehicle->addEquipmentVehicle($this->equipmentVehicleService->saveEquipmentVehicle($newEquipmentVehicle));
                    }
                }

            }
            $this->vehicleRepository->persistVehicle($vehicle);
        }
    }

}