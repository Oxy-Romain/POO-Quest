<?php

abstract class Highway{
    protected $currentVehicle = [];
    protected $nbLane;
    protected $maxSpeed;

    abstract public function addVehicule(object $vehicle);

    /**
     * @return mixed
     */
    public function getCurrentVehicle() : array
    {
        return $this->currentVehicle;
    }

    /**
     * @param mixed $currentVehicle
     */
    public function setCurrentVehicle($currentVehicle) : void
    {
        $this->currentVehicle[] = $currentVehicle;
    }

    /**
     * @return mixed
     */
    public function getNbLane() : int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane) : void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed() : int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed) : void
    {
        $this->maxSpeed = $maxSpeed;
    }
}