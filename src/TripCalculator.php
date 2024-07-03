<?php

namespace App;

class TripCalculator
{
    /**
     * @var Fleet
     */
    protected Fleet $fleet;

    /**
     * @param Fleet $fleet
     */
    public function __construct(Fleet $fleet)
    {
        $this->fleet = $fleet;
    }

    /**
     * @param int $passengers
     * @param int $cargoWeight
     * @param int $distance
     * @param int $fuelPrice
     * @return array
     */
    public function calculate(int $passengers, int $cargoWeight, int $distance, int $fuelPrice): array
    {
        $results = [];
        foreach ($this->fleet->getVehicles() as $vehicle) {
            $cost = $vehicle->calculateTripCost($passengers, $cargoWeight, $distance, $fuelPrice);
            if ($cost !== null) {
                $results[] = [
                    'vehicle' => $vehicle->getName(),
                    'cost' => $cost
                ];
            }
        }
        return $results;
    }
}
