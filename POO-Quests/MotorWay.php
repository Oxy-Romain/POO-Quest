<?php
require_once 'Highway.php';
require_once 'Car.php';

final class MotorWay extends Highway
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;


    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicle($vehicle);
        }
        return $this;
    }
}