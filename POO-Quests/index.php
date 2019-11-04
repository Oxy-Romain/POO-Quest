<?php
require_once 'Truck.php';
require_once  'Bicycle.php';
require_once 'Car.php';
require_once 'Highway.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'MotorWay.php';
require_once 'Skateboard.php';


$tesla = new Car('black', 4,'fuel');;
$ferrari = new Car('red', 2,'fuel');
$schoolBus = new Truck('yellow', 40,'8','fuel');
$bike = new Bicycle('pink', 2);
$skate = new Skateboard('dark', 1);

$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentalWay = new ResidentialWay();

$motorWay->addVehicule($tesla);
$pedestrianWay->addVehicule($skate);
$pedestrianWay->addVehicule($bike);
$residentalWay->addVehicule($schoolBus);
$residentalWay->addVehicule($ferrari);

var_dump($motorWay);
var_dump($pedestrianWay);
var_dump($residentalWay);


