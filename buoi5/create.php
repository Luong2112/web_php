<?php
    $conn = mysqli_connect('localhost', 'root', '', 'php47');
    if(!$conn){
        die('Không thể kết nối'.mysqli_connect_error());
    }

    $rsCategory = mysqli_query($conn, "select * from categories");
    $categories = [];
    while($category = mysqli_fetch_assoc($rsCategory)){
        $categories[] = $category;
    }

    if(isset($_POST['name'])){
        $name = $_POST['name'];
        $categoryID = $_POST['category_id'];
        $sql = "insert into products (name, category_id) value('$name', $categoryID)";

    mysqli_query($conn, $sql);
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
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name"> <br>
        <select name="category_id">
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['id'] ?>"> <?php echo $category['name'];?> </option>
            <?php endforeach; ?>
        </select> <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>