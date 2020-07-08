<?php


namespace App\Messages;

use App\Entity\Vehicle;


class VehicleHistoryMessage
{
    private $message;
    private $vehicle;
    private $method;
    private $changeset;

    public function __construct(string $message, ?Vehicle $vehicle, string $method, ?array $changeset = null)
    {
        $this->message = $message;
        $this->vehicle = $vehicle;
        $this->method = $method;
        $this->changeset = $changeset;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
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