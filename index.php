<?php

require 'vendor/autoload.php';

use App\Bus;
use App\Truck;
use App\Bicycle;
use App\Fleet;
use App\TripCalculator;

function calculate($passengers, $cargoWeight, $distance, $fuelPrice)
{
    $fleet = new Fleet();
    $fleet->addVehicle(new Bus());
    $fleet->addVehicle(new Truck());
    $fleet->addVehicle(new Bicycle());

    $calculator = new TripCalculator($fleet);
    $results = $calculator->calculate($passengers, $cargoWeight, $distance, $fuelPrice);

    foreach ($results as $result) {
        echo "{$result['vehicle']} - {$result['cost']} грн\n";
    }
}

// Example
calculate(1, 19, 49, 30);
