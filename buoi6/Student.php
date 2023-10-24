<?php
    class Student extends Human{
        var $studentID;

        function goToSchool(){
            echo $this->getName(). ' go to school';
        }
    }
?>