<?php

    session_start();
    // session_destroy();
    include('connection.php');

    $pdo = $db->prepare("SELECT * FROM product");
    $pdo->execute();
    $products = $pdo->fetchALL(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
?>

<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="#" class="active">List</a>
                <a href="cart.php">Cart</a>
            </nav>
            
            <div class="content">
                <?php foreach($products AS $product): ?>
                <div class="product">
                    <p><?=$product['title'] ?></p>
                    <label>Rp.<?=number_format($product['price'])?></label>
                    <a href="add-to-cart.php?id=<?=$product['id']?>">Add To Cart</a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>    