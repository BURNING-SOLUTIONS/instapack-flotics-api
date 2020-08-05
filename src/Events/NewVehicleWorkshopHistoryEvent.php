<?php


namespace App\Events;

use Symfony\Component\Messenger\MessageBusInterface;
use App\Messages\VehicleWorkshopHistoryMessage;
use App\Entity\VehicleWorkshop;

class NewVehicleWorkshopHistoryEvent
{
    const NAME = 'new.vehicle.workshop';

    private $message;
    private $vehicleWorkshop;
    private $bus;

    public function __construct(string $message, VehicleWorkshop $vehicleWorkshop, MessageBusInterface $bus)
    {
        $this->message = $message;
        $this->vehicleWorkshop = $vehicleWorkshop;
        $this->bus = $bus;
    }

    public function registerHistory()
    {
        $this->bus->dispatch(new VehicleWorkshopHistoryMessage(self::NAME, $this->vehicleWorkshop, "POST"));
    }

}