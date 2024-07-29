<?php
// class Car {
//     private $make, $model, $vin;

//     public function __construct($make, $model, $vin) {
//         $this->make = $make;
//         $this->model = $model;
//         $this->vin = $vin;
//     }

//     public function __destruct() {
//         echo "{$this->vin} destroyed.<br>";
//     }

//     public function getDetails() {
//         return "Make: {$this->make}, Model: {$this->model}, VIN: {$this->vin}";
//     }

//     public function getVin() {
//         return $this->vin;
//     }
// }

// class Inventory {
//     private $cars = [];

//     public function addCar($car) {
//         $this->cars[] = $car;
//     }

//     public function removeCarByVin($vin) {
//         foreach ($this->cars as $index => $car) {
//             if ($car->getVin() === $vin) {
//                 unset($this->cars[$index]);
//                 echo "VIN {$vin} removed.<br>";
//                 break;
//             }
//         }
//     }

//     public function listCars() {
//         foreach ($this->cars as $car) {
//             echo $car->getDetails() . "<br>";
//         }
//     }
// }

// $car1 = new Car("Hyundai", "Avante", "c123");
// $car2 = new Car("BMW", "E46", "a123");

// $inventory = new Inventory();
// $inventory->addCar($car1);
// $inventory->addCar($car2);

// $inventory->listCars();
// $inventory->removeCarByVin("c123");
// $inventory->listCars();

?>