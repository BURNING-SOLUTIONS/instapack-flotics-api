<?php


namespace App\Messages\Handlers;

use App\Entity\VehicleHistory;
use App\Messages\VehicleWorkshopHistoryMessage;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\VehicleHistoryService;

class VehicleWorkshopHistoryHandler
{
    private $_em;
    private $vehicleHistoryService;

    public function __construct(EntityManagerInterface $em, VehicleHistoryService $vehicleHistoryService)
    {
        $this->_em = $em;
        $this->vehicleHistoryService = $vehicleHistoryService;
    }

    public function __invoke(VehicleWorkshopHistoryMessage $message)
    {
        $method = $message->getMethod();
        $function = "handle" . $method . "VehicleWorkshop";
        $this->{$function}($message); #handlePATCHVehicleWorkshop, handlePOSTVehicleWorkshop, etc..
    }

    public function handlePOSTVehicleWorkshop(VehicleWorkshopHistoryMessage $message)
    {
        $history = new VehicleHistory();
        $now = new \DateTime();
        $history
            ->setCreatedAt($now)
            ->setVehicle($message->getVehicleWorkshop()->getVehicle())
            ->setWorkshop($message->getVehicleWorkshop());

        $this->vehicleHistoryService->saveVehicleWorkshopHistory($history);
    }

    public function handlePATCHVehicleWorkshop(VehicleWorkshopHistoryMessage $message)
    {
        $history = new VehicleHistory();
        $now = new \DateTime();
        $changes = $message->getChangeset();
        $vehicleWorkshop = $message->getVehicleWorkshop();
        $vehicle = $vehicleWorkshop->getVehicle();

        $history
            ->setCreatedAt($now)
            ->setVehicle($message->getVehicleWorkshop()->getVehicle())
            ->setWorkshop($message->getVehicleWorkshop());

        foreach ($changes as $change) {
            switch ($change) {
                case 'finalized':
                    $workshopHistory = new VehicleHistory();
                    $workshopHistory
                        ->setCreatedAt($now)
                        ->setVehicle($vehicle)
                        ->setWorkshop($vehicleWorkshop);
                    #proceed to save new vehicle client history asigned
                    $this->vehicleHistoryService->closeVehicleWorkshopHistory($workshopHistory);
                    break;
            }
        }
    }

}