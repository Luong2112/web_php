<?php
    class Human{
        private $name;
        var $height;
        var $weight;
        var $gender;
        var $age;
        var $hairColor;
        var $eyeColor;

        function getName(){
            return $this->name;
        }

        function setName($name){
            $this->name = $name;
        }

        function __construct($name, $age, $height, $weight, $hairColor, $eyeColor)
        {
            $this->name = $name;
            $this->age = $age;
            $this->height = $height;
            $this->weight = $weight;
            $this->hairColor = $hairColor;
            $this->eyeColor = $eyeColor;
        }

        function __destruct()
        {
            //echo 'hủy object';
        }

        function study(){
            echo $this->name.'study';
        }
        function sleep(){
            echo $this->name.'sleep';
        }
        function eat(){
            echo $this->name.'eat';
        }
    }
?>