<?php
    $id = $_GET['id'];
    if(!$id || !is_numeric($id)){
        header('location: list.php');
    }

    require_once 'connectDB.php';

    $rsCategories = mysqli_query($conn, "select * from categories");
    $categories = [];
    while($category = mysqli_fetch_assoc($rsCategories)){
        $categories[] = $category;
    }

    $rsRow = mysqli_query($conn, "select * from products where $id = id");
    $row = mysqli_fetch_assoc($rsRow);

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $categoryId = $_POST['category_id'];
        $sql = "update products set name = '$name', category_id = $categoryId where id = $id ";

        mysqli_query($conn, $sql);
        header('location: list.php');
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
        <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
        <select name="category_id">
            <?php foreach($categories as $category):?>
            <option <?php if($category['id'] == $row['category_id']) {echo 'selected = "selected"';} ?> 
                    value="<?php echo $category['id']; ?>"><?php echo $category['name'] ?> </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="submit">
    </form>
</body>
</html>