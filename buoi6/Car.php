<?php
    require_once 'ABCarEngine.php';
    require_once 'ICarInterior.php';

    class Car extends ABCarEngine implements ICarInterior{
        public function stopEngine()
        {
            echo 'Engine Stopped<br>';
        }

        public function startAirCondition(){
            echo 'Start Air-Condition<br>';
        }

        public function stopAirCondition(){
            echo 'Stop Air-Condition';
        }
    }

    $vehicle = new Car();
    $vehicle->stopEngine();
    $vehicle->startAirCondition();
    $vehicle->stopAirCondition();
    ?>