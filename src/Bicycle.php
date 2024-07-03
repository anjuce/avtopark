<?php

namespace App;

class Bicycle extends Vehicle
{
    public function __construct()
    {
        parent::__construct('Bicycle', 1, 20, 0, 50, 1, 0);
    }

    /**
     * @param int $passengers
     * @param int $cargoWeight
     * @param int $distance
     * @param int $fuelPrice
     * @return float|int|null
     */
    public function calculateTripCost(int $passengers, int $cargoWeight, int $distance, int $fuelPrice): float|int|null
    {
        if ($passengers > $this->passengerCapacity || $cargoWeight > $this->maxCargoWeight || $distance > $this->maxTripDistance) {
            return null;
        }

        return $distance * $this->driverRate;
    }
}
