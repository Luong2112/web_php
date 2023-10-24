<?php
    require_once 'Human.php';
    require_once 'Student.php';

    $luong = new Human('Lương', '21', '1m58', '40', 'black', 'brown'); // tạo ra 1 đối tượng người

    $binh = new Student('Bình', '20', '1m70', '60', 'red', 'black');

    $binh->goToSchool();
?>