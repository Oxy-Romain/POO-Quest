<?php
require_once "Vehicle.php";

class Skateboard extends Vehicle
{
    public function changeWheel() {
        return "change Wheels";
    }
}