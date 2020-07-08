<?php

namespace App\Events;

use Symfony\Component\Messenger\MessageBusInterface;
use App\Messages\VehicleHistoryMessage;
use App\Entity\Vehicle;


class NewVehicleHistoryEvent
{
    const NAME = 'new.vehicle';

    private $message;
    private $vehicle;
    private $bus;

    public function __construct(string $message, Vehicle $vehicle, MessageBusInterface $bus)
    {
        $this->message = $message;
        $this->vehicle = $vehicle;
        $this->bus = $bus;
    }

    public function registerHistory()
    {
        $this->bus->dispatch(new VehicleHistoryMessage(self::NAME, $this->vehicle, "POST"));
    }
}
