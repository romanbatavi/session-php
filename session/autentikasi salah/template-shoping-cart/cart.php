<?php

    session_start();
    // session_destroy();
    include('connection.php');

    // $pdo = $db->prepare("SELECT * FROM product");
    // $pdo->execute();
    // $products = $pdo->fetchALL(PDO::FETCH_ASSOC);

    $cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

?>
<html>
    <head>
        <title>Shopping Cart - Cart</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="list.php">List</a>
                <a href="#" class="active">Cart(<?=count($cart)?>)</a>
            </nav>
            
            <div class="content">   
                <table>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="text-center">Qty</th>
                        <th class="text-right">Total</th>
                    </tr>
                    <?php 
                    $grandTotal = 0;
                    foreach($cart as $row):
                    $pdo                        = $db->prepare('SELECT * FROM product WHERE id=:product_id');
                    $data['product_id']         = $row['id'];
                                                $pdo->execute($data);
                    $product                    = $pdo->fetch(PDO::FETCH_ASSOC);

                    $total = $row['quantity'] * $product['price'];
                    $grandTotal+=$total;
                    ?>
                    <tr>
                        <td><?=$product['title']?></td>
                        <td>Rp.<?=number_format($product['price'])?></td>
                        <td class="text-center"><?=$row['quantity']?></td>
                        <td class="text-right">Rp.<?=number_format($row['quantity'] * $product['price'])?></td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                    <th colspan = "3">Grand Total</th>
                    <td class="text-right">Rp.<?=number_format($grandTotal)?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>    