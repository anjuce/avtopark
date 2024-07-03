<?php

namespace App;

class Bus extends Vehicle
{
    public function __construct()
    {
        parent::__construct('Bus', 32, 300, 20, 200, 2, 5);
    }
}
