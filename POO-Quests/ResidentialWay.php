<?php
require_once 'Highway.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Car.php';

final class ResidentialWay extends Highway
{
    protected $nbLane = 2;
    protected $maxSpeed = 50;


    public function addVehicule(object $vehicle)
    {
        if ($vehicle) {
            $this->setCurrentVehicle($vehicle);
        }
        return $this;
    }
}