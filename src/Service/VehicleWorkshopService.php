<?php


namespace App\Service;


use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\VehicleWorkshop;
use App\Traits\Base64Manager;
use App\Utils\StorageFileManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class VehicleWorkshopService
{
    use Base64Manager;

    private $dbManager;
    private $validator;
    private $filesManager;
    private $iriConverterInterface;
    private $vehicleWorkshopRepository;

    /**
     * @var StorageFileManager
     */


    /**
     * UserService constructor.
     * @param EntityManagerInterface $manager
     * @param ValidatorInterface $validator
     * @param StorageFileManager $filesManager
     */
    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, StorageFileManager $filesManager, IriConverterInterface $iriConverterInterface)
    {
        $this->dbManager = $manager;
        $this->validator = $validator;
        $this->filesManager = $filesManager;
        $this->iriConverterInterface = $iriConverterInterface;
        $this->vehicleWorkshopRepository = $this->dbManager->getRepository(VehicleWorkshop::class);
    }

    /**
     * @param array $params
     * @param string $strategy
     * @return array
     */
    public function getVehicleWorkshopByParams(array $params, string $strategy = 'findBy'): VehicleWorkshop
    {
        $vehicleWorkshop = $this->vehicleWorkshopRepository->{$strategy}($params);
        if (!$vehicleWorkshop) {
            throw new NotFoundHttpException();
        }
        return $vehicleWorkshop;
    }

    public function updateVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): void
    {
        $file_manager = $this->filesManager->getCurrentFileManager();
        $invoiceCopy_base64 = $vehicleWorkshop->getInvoiceCopy();
        $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH = $_ENV['VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH'];
        $AZURE_READ_FILES_PATH = $_ENV['AZURE_READ_FILES_PATH'];
        $errors = $this->validator->validate($vehicleWorkshop);

        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                // do stuff
                if ($invoiceCopy_base64) {
                    $invoiceFinalRoute = $file_manager->uploadBase64File($invoiceCopy_base64, $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH, "workshop_invoice_", $vehicleWorkshop->getId());
                    $vehicleWorkshop->setInvoiceCopy($AZURE_READ_FILES_PATH . $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH . '/' . $invoiceFinalRoute);
                }

                $this->vehicleWorkshopRepository->persistVehicleWorkshop($vehicleWorkshop);
                $this->dbManager->commit();
            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }

        }
    }

    public function saveVehicleWorkshop(VehicleWorkshop $vehicleWorkshop): void
    {
        $file_manager = $this->filesManager->getCurrentFileManager();
        $invoiceCopy_base64 = $vehicleWorkshop->getInvoiceCopy();
        $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH = $_ENV['VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH'];
        $AZURE_READ_FILES_PATH = $_ENV['AZURE_READ_FILES_PATH'];
        $errors = $this->validator->validate($vehicleWorkshop);

        if (!count($errors) > 0) {
            $this->dbManager->beginTransaction();
            try {
                // do stuff
                $this->vehicleWorkshopRepository->persistVehicleWorkshop($vehicleWorkshop);
                if ($invoiceCopy_base64) {
                    $invoiceFinalRoute = $file_manager->uploadBase64File($invoiceCopy_base64, $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH, "workshop_invoice_", $vehicleWorkshop->getId());
                    $vehicleWorkshop->setInvoiceCopy($AZURE_READ_FILES_PATH . $VEHICLE_WORKSHOP_INVOICE_AZURE_FILE_PATH . '/' . $invoiceFinalRoute);
                }

                $this->dbManager->commit();
            } catch (\Exception $e) {
                $this->dbManager->rollback();
                throw new \Exception($e->getMessage());
            }

        }

    }

}