<?php
require_once "Vehicle.php";
class Truck extends Vehicle
{
    private $capacity;
    private $content = 0;
    private $energy;
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity=$capacity;
        $this->setEnergy($energy);
    }

    public function changeWheel() {
        return "change Wheels";
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ] ;
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getCapacity(): int
    {
        return $this->capacity;
    }
    public function setCapacity(int $capacity): void
    {
        $this->capacity=$capacity;
    }
    public function getContent() : string
    {
        if ($this->content >= $this->capacity){
            return  'full | ';
        }
        else {
            return 'in filling | ';
        }
    }
    public function setContent(int $content)
    {
        $this->content=$content;
    }
}