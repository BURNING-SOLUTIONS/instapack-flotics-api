<?php

namespace App\Events;

use Symfony\Component\Messenger\MessageBusInterface;
use App\Messages\VehicleHistoryMessage;
use App\Entity\Vehicle;


class UpdateVehicleHistoryEvent
{
    const NAME = 'update.vehicle';

    private $changeset;
    private $vehicle;
    private $bus;

    public function __construct(?array $changeset, Vehicle $vehicle, MessageBusInterface $bus)
    {
        $this->changeset = $changeset;
        $this->vehicle = $vehicle;
        $this->bus = $bus;
    }

    public function registerHistory()
    {
        $this->bus->dispatch(new VehicleHistoryMessage(self::NAME, $this->vehicle, "PATCH", $this->changeset));
    }
}
