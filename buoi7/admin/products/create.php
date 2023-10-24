<?php
    if(isset($_POST['name'])){
        require_once './../../dals/ProductDal.php';
        require_once './../../models/Product.php';
        $productDal = new ProductDal();
        $product = new Products();
        $name = $_POST['name'];
        $product->setName($name);
        $productDal->create($product);
        header('Location: index.php');
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
    <form action="" method="post">
        <input type="text" name="name" placeholder="Name"> <br>
        <button>Submit</button>
    </form>
</body>
</html>