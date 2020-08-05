<?php


namespace App\Messages;

use App\Entity\VehicleWorkshop;

class VehicleWorkshopHistoryMessage
{
    private $message;
    private $vehicleWorkshop;
    private $method;
    private $changeset;

    public function __construct(string $message, ?VehicleWorkshop $vehicleWorkshop, string $method, ?array $changeset = null)
    {
        $this->message = $message;
        $this->vehicleWorkshop = $vehicleWorkshop;
        $this->method = $method;
        $this->changeset = $changeset;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getVehicleWorkshop(): ?VehicleWorkshop
    {
        return $this->vehicleWorkshop;
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function getChangeset(): ?array
    {
        return $this->changeset;
    }

}