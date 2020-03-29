<?php

namespace App\Service;

use App\Entity\Vehicle;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class VehicleService
{
    private $dbManager;
    private $validator;
    private $vehicleRepository;

    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->vehicleRepository = $this->dbManager->getRepository(Vehicle::class);
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
        return $this->vehicleRepository->findVehicleByOrParams($params, array('id', 'registration', 'frame'), $pagination);
    }
}