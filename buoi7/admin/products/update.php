<?php
    if(isset($_GET['id'])){
        require_once './../../dals/DB.php';
        require_once './../../dals/ProductDal.php';
        
        $productDal = new ProductDal();
        $rs = $productDal->getAll();
        $id = $_GET['id']; 

        if(isset($_POST['name'])){
            $name = $_POST['name'];
            $productDal->update($id, $name);
            header('Location: index.php');
        }      
    }
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" value="<?php foreach($rs as $rs){if($rs->id == $id) {echo $rs->name;}} ?>"> <br>
        <input type="Submit" value="Submit">
    </form>
</body>
</html>