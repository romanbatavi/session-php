<?php

    session_start();

    $id = $_GET['id'];
    $quantity = 1;

    if($_SESSION['cart'][$id]){
        $quantity = $_SESSION['cart'][$id]['quantity'] + 1;
    }

    $item = [
        'id' => $id,
        'quantity' => $quantity,
    ];

    $_SESSION['cart'][$id] = $item;

    header('location: list.php');