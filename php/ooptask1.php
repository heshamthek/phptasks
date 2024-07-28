<?php
class Car {
    private $make;
    private $model;
    private $vin;

    public function __construct($make, $model, $vin) {
        $this->make = $make;
        $this->model = $model;
        $this->vin = $vin;
    }
    public function __destruct() {
        echo "{$this->vin} got destroyed.<br>";
    }
    // Get
    public function getMake() {
        return $this->make;
    }
    public function getModel() {
        return $this->model;
    }
    public function getVin() {
        return $this->vin;
    }
    // Set
    public function setMake($make) {
        $this->make = $make;
    }
    public function setModel($model) {
        $this->model = $model;
    }
    public function setVin($vin) {
        $this->vin = $vin;
    }
    public function getDetails() {
        return "make {$this->make}: model {$this->model}: vin {$this->vin}";
    }
}
class Inventory {
    private $cars = array();
    public function addCar($car) {
        $this->cars[] = $car;
    }
    public function removeCarByVin($vin) {
        foreach ($this->cars as $index => $car) {
            if ($car->getVin() === $vin) {
                unset($this->cars[$index]);
                echo "VIN {$vin} removed.<br>";
            }
        }
    }
    public function listCars() {
        foreach ($this->cars as $car) {
            echo $car->getDetails() . "<br>";
        }
    }
}
$car1 = new Car("hyndai", "avante", "c123");
$car2 = new Car("bmw", "e46", "a123");
$inventory = new Inventory();
$inventory->addCar($car1);
$inventory->addCar($car2);
$inventory->listCars();
$inventory->removeCarByVin("c123");
$inventory->listCars();
?>