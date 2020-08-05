<?php


namespace App\Messages\Handlers;

use App\Entity\VehicleHistory;
use App\Messages\VehicleHistoryMessage;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\VehicleHistoryService;

class VehicleHistoryHandler
{
    private $_em;
    private $vehicleHistoryService;

    public function __construct(EntityManagerInterface $em, VehicleHistoryService $vehicleHistoryService)
    {
        $this->_em = $em;
        $this->vehicleHistoryService = $vehicleHistoryService;
    }

    public function __invoke(VehicleHistoryMessage $message)
    {
        $method = $message->getMethod();
        $function = "handle" . $method . "Vehicle";
        $this->{$function}($message); #handlePATCHVehicle, handlePOSTVehicle, etc..
    }

    public function handlePOSTVehicle(VehicleHistoryMessage $message)
    {
        $now = new \DateTime();
        $history = new VehicleHistory();
        $vehicle = $message->getVehicle();
        $client = $vehicle->getClient();
        $deliveryMan = $vehicle->getDeliveryMan();
        $clientName = $client ? $client['nomCli'] : null;
        $deliveryManName = $deliveryMan ? $deliveryMan['nomMen'] : null;
        $history->setCreatedAt($now)->setVehicle($vehicle);
        $this->vehicleHistoryService->saveVehicleHistory($history);
        # When create new vehicle, if have client we register first assigned client history
        if ($client) {
            $historyClient = new VehicleHistory();
            $historyClient->setCreatedAt($now)->setClient($clientName)->setVehicle($vehicle);
            $this->vehicleHistoryService->saveVehicleHistoryClient($historyClient);
        }

        # When create new vehicle, if have deliveryMan we register first assigned client history
        if ($deliveryManName) {
            $historyDelivery = new VehicleHistory();
            $historyDelivery->setCreatedAt($now)->setDeliveryMan($deliveryManName)->setVehicle($vehicle);
            $this->vehicleHistoryService->saveVehicleHistoryDelivery($historyDelivery);
        }
    }

    public function handlePATCHVehicle(VehicleHistoryMessage $message)
    {
        $now = new \DateTime();
        $changes = $message->getChangeset();
        $vehicle = $message->getVehicle();
        $client = $vehicle->getClient();
        $deliveryMan = $vehicle->getDeliveryMan();
        $clientName = $client ? $client['nomCli'] : null;
        $deliveryManName = $deliveryMan ? $deliveryMan['nomMen'] : null;

        foreach ($changes as $change) {
            switch ($change) {
                case 'client':
                    $historyClient = new VehicleHistory();
                    $historyClient->setCreatedAt($now)->setVehicle($vehicle)->setClient($clientName);
                    #proceed to save new vehicle client history asigned
                    $this->vehicleHistoryService->saveVehicleHistoryClient($historyClient);
                    break;
                case 'deliveryMan':
                    $historydeliveryMan = new VehicleHistory();
                    $historydeliveryMan->setCreatedAt($now)->setVehicle($vehicle)->setDeliveryMan($deliveryManName);
                    #proceed to save new vehicle client history asigned
                    $this->vehicleHistoryService->saveVehicleHistoryDelivery($historydeliveryMan);
                    break;
            }
        }

    }

}