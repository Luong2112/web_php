<?php
    try{
        $pdo = new PDO('mysql:host=localhost; dbname=php47', 'root', '');
    }catch(PDOException $e){
        die('Could not connect'.$e->getMessage());
    }

    //print_r(PDO::getAvailableDrivers()); // list driver you have

    $name = 'Xuan';
    $password = '111959';
    $address = 'Ninh Binh';
    $age = '64';

    $prp = $pdo->prepare("insert into user(ten, password, address, age) values (:ten, :password, :address, :age) ");
    //$prp->execute([$name, $password, $address, $age]); // chèn và thực thi câu lệnh  -> Cách 1
    $prp->bindParam(":ten", $name);
    $prp->bindParam(":password", $password);
    $prp->bindParam(":address", $address);
    $prp->bindParam(":age", $age);
    $prp->execute();

    $name = 'Van';
    $password = '100979';
    $address = 'Nghe An';
    $age = '44';
    $prp->execute();
?>