<?php

namespace App;

abstract class Vehicle
{
    protected string $name;
    protected int $passengerCapacity;
    protected int $maxCargoWeight;
    protected int $fuelConsumptionPer100km;
    protected int $maxTripDistance;
    protected int $depreciationRate;
    protected int $driverRate;

    /**
     * @param string $name
     * @param int $passengerCapacity
     * @param int $maxCargoWeight
     * @param int $fuelConsumptionPer100km
     * @param int $maxTripDistance
     * @param int $depreciationRate
     * @param int $driverRate
     */
    public function __construct(string $name, int $passengerCapacity, int $maxCargoWeight, int $fuelConsumptionPer100km, int $maxTripDistance, int $depreciationRate, int $driverRate)
    {
        $this->name = $name;
        $this->passengerCapacity = $passengerCapacity;
        $this->maxCargoWeight = $maxCargoWeight;
        $this->fuelConsumptionPer100km = $fuelConsumptionPer100km;
        $this->maxTripDistance = $maxTripDistance;
        $this->depreciationRate = $depreciationRate;
        $this->driverRate = $driverRate;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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

        $fuelCost = ($distance / 100) * $this->fuelConsumptionPer100km * $fuelPrice;
        $driverCost = $distance * $this->driverRate;

        return $driverCost + ($fuelCost * $this->depreciationRate);
    }
}

