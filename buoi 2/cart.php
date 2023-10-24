<?php 
    session_start();
    if(isset($_SESSION['cart']) && isset($_GET['id'])){
        $id = $_GET['id'];
        $cartItems = $_SESSION['cart'];

        if($_GET['action'] === 'delete'){
            $tmp = [];
            foreach($cartItems as $cartItem){
                if($id != $cartItem['item']['id']){
                    $tmp[] = $cartItem;
                } 
            }    
            $_SESSION['cart'] = $tmp;
        }
            
        if($_GET['action'] === 'update'){
            $quantity = $_GET['quantity'];
            for($i=0; $i<count($cartItems); $i++){
                if($id == $cartItems[$i]['item']['id']){
                    $cartItems[$i]['quantity'] += $quantity;
                    if($cartItems[$i]['quantity'] <= 0){
                        header('location:?id='.$id.'&action=delete');
                    }
                }
            }
            $_SESSION['cart'] = $cartItems;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <?php
        if(isset($_SESSION['cart'])){
            $cartItems = $_SESSION['cart'];
        ?>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($cartItems as $cartItem) {?>
                <tr style="text-align: center;">
                    <td> <?php echo $cartItem['item']['name']; ?> </td>
                    <td> <?php echo $cartItem['item']['price']; ?> </td>
                    <td> 
                        <a href="?id=<?php echo $cartItem['item']['id'] ?>&action=update&quantity=-1" style="text-decoration: none;">-</a>
                        <?php echo $cartItem['quantity']; ?> 
                        <a href="?id=<?php echo $cartItem['item']['id'] ?>&action=update&quantity=+1" style="text-decoration: none;">+</a>
                    </td>
                    <td> <?php echo $cartItem['quantity'] * $cartItem['item']['price']; ?> </td>
                    <td>
                        <a href="?id=<?php echo $cartItem['item']['id'] ?>&action=delete"
                            onclick="return confirm('Are you sure want to delete?')" style="text-decoration: none;">Delete</a>
                    </td>
                </tr>                
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</body>
</html>