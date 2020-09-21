<?php

namespace App\Service;

use App\Entity\Vehicle;
use App\Entity\VehicleHistory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Traits\Base64Manager;

const NEW_VEHICLE = 1;
const NEW_VEHICLE_WORKSHOP = 2;
const EXIT_VEHICLE_WORKSHOP = 3;
const NEW_VEHICLE_CLIENT = 4;
const DELETE_VEHICLE_CLIENT = 5;
const NEW_VEHICLE_DELIVERY = 6;
const DELETE_VEHICLE_DELIVERY = 7;

const NEW_VEHICLE_LOCATION = "Alta vehículo";
const NEW_VEHICLE_WORKSHOP_LOCATION = "Visita al taller";
const NEW_VEHICLE_DELIVERY_LOCATION = "Repartidor asignado";
const EXIT_VEHICLE_WORKSHOP_LOCATION = "Salida del taller";
const NEW_VEHICLE_CLIENT_LOCATION = "Asignado a cliente";
const DELETE_VEHICLE_CLIENT_LOCATION = "Cliente removido";
const DELETE_VEHICLE_DELIVERY_LOCATION = "Repartidor desasignado";

class VehicleHistoryService
{
    private $dbManager;
    private $validator;
    private $vehicleHistoryRepository;

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
        $this->vehicleHistoryRepository = $this->dbManager->getRepository(VehicleHistory::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */

    public function getVehicleHistoryByParams(array $params, string $strategy = 'findBy'): Vehicle
    {
        $application = $this->vehicleHistoryRepository->{$strategy}($params);
        if (!$application) {
            throw new NotFoundHttpException();
        }
        return $application;
    }

    public function saveVehicleHistory(VehicleHistory $vehicleHistory): void
    {
        $vehicleHistory
            ->setType(NEW_VEHICLE)
            ->setLocation(NEW_VEHICLE_LOCATION);

        $errors = $this->validator->validate($vehicleHistory);
        if (!count($errors) > 0) {
            try {
                $this->vehicleHistoryRepository->persistVehicleHistory($vehicleHistory);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function saveVehicleWorkshopHistory(VehicleHistory $vehicleWorkshopHistory)
    {
        $type = NEW_VEHICLE_WORKSHOP;
        $location = NEW_VEHICLE_WORKSHOP_LOCATION;
        $vehicleWorkshopHistory
            ->setType($type)
            ->setLocation($location);

        $errors = $this->validator->validate($vehicleWorkshopHistory);
        if (!count($errors) > 0) {
            try {
                $this->vehicleHistoryRepository->persistVehicleHistory($vehicleWorkshopHistory);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function closeVehicleWorkshopHistory(VehicleHistory $vehicleWorkshopHistory)
    {
        $type = EXIT_VEHICLE_WORKSHOP;
        $location = EXIT_VEHICLE_WORKSHOP_LOCATION;
        $vehicleWorkshopHistory
            ->setType($type)
            ->setLocation($location);

        $errors = $this->validator->validate($vehicleWorkshopHistory);
        if (!count($errors) > 0) {
            try {
                $this->vehicleHistoryRepository->persistVehicleHistory($vehicleWorkshopHistory);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function saveVehicleHistoryClient(VehicleHistory $vehicleHistoryClient): void
    {
        $type = $vehicleHistoryClient->getClient() ? NEW_VEHICLE_CLIENT : DELETE_VEHICLE_CLIENT;
        $location = $vehicleHistoryClient->getClient() ? NEW_VEHICLE_CLIENT_LOCATION : DELETE_VEHICLE_CLIENT_LOCATION;
        $vehicleHistoryClient
            ->setType($type)
            ->setLocation($location);

        $errors = $this->validator->validate($vehicleHistoryClient);
        if (!count($errors) > 0) {
            try {
                $this->vehicleHistoryRepository->persistVehicleHistory($vehicleHistoryClient);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

    public function saveVehicleHistoryDelivery(VehicleHistory $vehicleHistoryDelivery): void
    {
        $type = $vehicleHistoryDelivery->getDeliveryMan() ? NEW_VEHICLE_DELIVERY : DELETE_VEHICLE_DELIVERY;
        $location = $vehicleHistoryDelivery->getDeliveryMan() ? NEW_VEHICLE_DELIVERY_LOCATION : DELETE_VEHICLE_DELIVERY_LOCATION;
        $vehicleHistoryDelivery->setType($type)->setLocation($location);
        $errors = $this->validator->validate($vehicleHistoryDelivery);
        if (!count($errors) > 0) {
            try {
                $this->vehicleHistoryRepository->persistVehicleHistory($vehicleHistoryDelivery);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }
    }

}