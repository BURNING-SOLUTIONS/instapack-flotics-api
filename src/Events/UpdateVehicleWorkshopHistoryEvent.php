<?php


namespace App\Events;

use App\Entity\VehicleWorkshop;
use App\Messages\VehicleWorkshopHistoryMessage;
use Symfony\Component\Messenger\MessageBusInterface;

class UpdateVehicleWorkshopHistoryEvent
{
    const NAME = 'update.vehicle.workshop';

    private $changeset;
    private $vehicleWorkshop;
    private $bus;

    public function __construct(?array $changeset, VehicleWorkshop $vehicleWorkshop, MessageBusInterface $bus)
    {
        $this->changeset = $changeset;
        $this->vehicleWorkshop = $vehicleWorkshop;
        $this->bus = $bus;
    }

    public function registerHistory()
    {
        $this->bus->dispatch(new VehicleWorkshopHistoryMessage(self::NAME, $this->vehicleWorkshop, "PATCH", $this->changeset));
    }
}