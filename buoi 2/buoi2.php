<?php 
    session_start();
    $produces = [
        [
            'id' => '1',
            'name' => 'iphone 6',
            'price' => '10000000',
        ],
        [
            'id' => '2',
            'name' => 'iphone 7',
            'price' => '10000000',
        ],
        [
            'id' => '3',
            'name' => 'iphone 8',
            'price' => '10000000',
        ],
        [
            'id' => '4',
            'name' => 'iphone 9',
            'price' => '15000000',
        ]
        ];

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        // Tìm sản phẩm trong $prosuces --> Tìm trong DB
        for($i = 0; $i<count($produces); $i++){
            if($produces[$i]['id'] == $id){
                $cartItems = [];                //Chưa có giỏ hàng

                //Đã có giỏ hàng
                if(isset($_SESSION['cart'])){
                    $cartItems = $_SESSION['cart'];
                }

                $foundProduct = false;
                for($j = 0; $j<count($cartItems); $j++){
                    if($id == $cartItems[$j]['item']['id']){
                        // tăng số lượng lên
                        $cartItems[$j]['quantity'] += 1;
                        $foundProduct = true;
                        break;
                    }
                }

                if(!$foundProduct){
                    $produce = $produces[$i];
                    $cartItems[] = 
                    [
                        'item' => $produce,
                        'quantity' => '1'
                    ];
                }
                $_SESSION['cart'] = $cartItems;
                break;
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="mx-auto container">
        <div class="grid grid-cols-4">
            <?php 
                foreach($produces as $produce){
            ?>
               <div>
                    <h4><?php echo $produce['name'] ?></h4>
                    <p>Price: <?php echo $produce['price'] ?></p>
                    <a href="?id=<?php echo $produce['id'] ?>" class="bg-green-500 text-white inline-block"> Add To Cart</a>
               </div>
            <?php 
                }
            ?>
            </div>
    </div>
</body>
</html>