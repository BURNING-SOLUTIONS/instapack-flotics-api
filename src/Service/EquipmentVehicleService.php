<?php

namespace App\Service;

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


class EquipmentVehicleService
{
    use Base64Manager;

    private $dbManager;
    private $validator;
    private $EquipmentVehicleRepository;

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

        $this->EquipmentVehicleRepository = $this->dbManager->getRepository(EquipmentVehicle::class);
    }


    public function getEquipmentVehicleParams(array $params, string $strategy = 'findOneBy'): EquipmentVehicle
    {
        $equipmentVehicle = $this->EquipmentVehicleRepository->{$strategy}($params);
        if (!$equipmentVehicle) {
            throw new NotFoundHttpException("The equipment vehicle with provide data does not exist");
        }
        return $equipmentVehicle;
    }

    public function saveEquipmentVehicle(EquipmentVehicle $equipmentVehicle): EquipmentVehicle
    {
        $this->EquipmentVehicleRepository->persistEquipmentVehicle($equipmentVehicle);

        return $equipmentVehicle;

    }

    public function removeEquipmentVehicle(EquipmentVehicle $equipmentVehicle): void
    {
        $this->EquipmentVehicleRepository->removeEquipmentVehicle($equipmentVehicle);
    }


}