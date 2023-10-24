<?php
    if (isset($_GET['ct'])){
        $ct = $_GET['ct'];
        $ct = explode('/', $ct);
        $controller = $ct[0]; //home
        $action = $ct[1];   //about

        $controller = ucfirst($ct[0]).'Controller';
        require_once './controllers/'.$controller.'.php';
        $obj = new $controller(); //meta programing //reflect API in Java
        $obj->$action();
    }
?>