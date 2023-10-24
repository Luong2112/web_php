<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once './../buoi7/dals/DB.php';
        $db = new DB();
        $pdo = $db->getPdo();
        // $pdo->beginTransaction(); // turn off auto-commit
        // try{
        //     $pdo->query("insert into categories (name) value ('Phần mềm')");
        //     $pdo->query("insert into products (name, category_id) value ('Phần mềm diệt virus', '6')");
        //     $pdo->commit(); // đẩy dữ liệu vào bảng
        // }catch(PDOException $e){
        //     echo $e->getMessage();
        //     $pdo->rollBack(); // reset (hủy bỏ dữ liệu)
        // }
       
        $data = $pdo->query("call getCategory()");
        $categories = $data->fetchAll(PDO::FETCH_OBJ);
        foreach($categories as $category){
            echo $category->name.'<br>';
        }
    ?>
</body>
</html>