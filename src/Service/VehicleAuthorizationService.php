<?php

namespace App\Service;

use App\Entity\Authorizations;
use App\Entity\VehicleAuthorization;
use App\Entity\Vehicle;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Traits\Base64Manager;


class VehicleAuthorizationService
{
    use Base64Manager;

    private $dbManager;
    private $validator;
    private $VehicleAuthorizationRepository;

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
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;

        $this->VehicleAuthorizationRepository = $this->dbManager->getRepository(VehicleAuthorization::class);
    }


    public function getVehicleAuthorizationParams(array $params, string $strategy = 'findOneBy'): VehicleAuthorization
    {
        $vehicleAuthorization = $this->VehicleAuthorizationRepository->{$strategy}($params);
        if (!$vehicleAuthorization) {
            throw new NotFoundHttpException("The vehicle authorization with provide data does not exist");
        }
        return $vehicleAuthorization;
    }

    public function saveVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): VehicleAuthorization
    {
        $this->VehicleAuthorizationRepository->persistVehicleAuthorization($vehicleAuthorization);

        return $vehicleAuthorization;

    }

    public function removeVehicleAuthorization(VehicleAuthorization $vehicleAuthorization): void
    {
        $this->VehicleAuthorizationRepository->removeVehicleAuthorization($vehicleAuthorization);
    }


}