<?php
require_once 'Highway.php';
require_once 'Bicycle.php';

final class PedestrianWay extends Highway
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;


    public function addVehicule(object $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicle($vehicle);
        }
        elseif ($vehicle instanceof Skateboard) {
            $this->setCurrentVehicle($vehicle);
        }
        return $this;
    }
}