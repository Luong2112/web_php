<?php
    abstract class ABCarEngine{

        //non-abstract method
        public function startEngine(){
            echo 'Engine Started';
        }

        //abstract method
        public abstract function stopEngine();
    }
?>