<?php

namespace App\Service;

use App\Entity\Vehicle;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class VehicleService
{
    private $dbManager;
    private $validator;
    private $vehicleRepository;
    private $filesManager;

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
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator,StorageFileManager $filesManager)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->filesManager = $filesManager;

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

    /**
     * @param Vehicle $app
     * @param Request $request
     */
    public function saveVehicle(Vehicle $app): void
    {
        $compulsaCirculacion_file = $app->getDrivingLicense();
        $file_manager = $this->filesManager->getCurrentFileManager();
        $request=new Request();
        $errors = $this->validator->validate($app);
        if (!count($errors) > 0) {
            if ($compulsaCirculacion_file) {
                # Obtain current file uploaded manager
                $compulsaCirculation_extension = $request->files->get('distributor_image');
               // $compulsaCirculation_extension = $compulsaCirculation_extension->getClientOriginalExtension();
                $vehicle_cloud_circulation_route = '%env(AZURE_CLOUD_FILES)%';
                $circulation_uploaded_name = $app->getRegistration() /*. '.' . $compulsaCirculacion_extension*/;
                $circulation_avatar_complete_route = $vehicle_cloud_circulation_route . '/' . $circulation_uploaded_name;

                $file_manager->uploadFile($compulsaCirculation_extension, $vehicle_cloud_circulation_route, $circulation_uploaded_name);

                $app->setDrivingLicense($circulation_avatar_complete_route);
            }
            $this->vehicleRepository->persistVehicle($app);
        }


    }
}