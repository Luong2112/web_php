<?php
    $id = $_GET['id'];
    if(!$id || !is_numeric($id)){
        header('location : list.php');
    }

    $conn = mysqli_connect('localhost', 'root', '', 'php47');
    if(!$conn){
        die('Không thể kết nối'. mysqli_connect_error());
    }

    mysqli_query($conn, "delete from products where id = $id");
    header('location: list.php');
?>