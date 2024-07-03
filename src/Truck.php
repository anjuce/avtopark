<?php

namespace App;

class Truck extends Vehicle
{
    public function __construct()
    {
        parent::__construct('Truck', 2, 1000, 30, 500, 3, 8);
    }
}
