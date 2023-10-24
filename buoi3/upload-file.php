<?php
    if(isset($_FILES['img']) && $_FILES['img']['name']!=null){
        //upload file
        $file = $_FILES['img'];
        $updatePath = 'uploads/'.date('d-m-Y').'/';
        if(!is_dir($updatePath) || !file_exists($updatePath)){
            mkdir($updatePath);
        }
        move_uploaded_file($file['tmp_name'], $updatePath.time().$file['name']);
    }
?>