<?php
    $conn = mysqli_connect('localhost', 'root', '', 'php47');
    if(!$conn){
        die("Không thể kết nối". mysqli_connect_error());
    }
?>