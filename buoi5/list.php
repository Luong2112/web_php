<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect('localhost', 'root','', 'php47'); //or die('Không thể kết nối cơ sở dữ liệu');
        if(!$conn){
            die('Không thể kết nối'.mysqli_connect_error());
        }

        $sql = 'select products.id as products_id , products.name as products_name , categories.name as categories_name 
                from products 
                inner join categories on products.category_id = categories.id';
        $rs = mysqli_query($conn, $sql);
    ?>

    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Catergories</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($rs)){ ?>
                <tr>
                    <td><?php echo $row['products_id'] ?></td>
                    <td><?php echo $row['products_name'] ?></td>
                    <td><?php echo$row['categories_name'] ?></td>
                    <td>
                        <a href="update.php?id=<?php echo $row['products_id']?>">update</a>
                        <a onclick="return confirm('are you sure?')" href="delete.php?id=<?php echo $row['products_id']?>">delete</a>
                    </td>
                </tr>            
            <?php } ?>
        </tbody>
    </table>
</body>
</html>