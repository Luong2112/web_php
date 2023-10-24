<?php
    require_once './../../dals/ProductDal.php';
    $productDal = new ProductDal();
    $products = $productDal->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="create.php">Add</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product->id ?></td>
                    <td><?php echo $product->name ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $product->id ?>">Update</a>
                        <a href="delete.php?id=<?php echo $product->id ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>