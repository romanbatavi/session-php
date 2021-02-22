<?php
    
    session_start();
    include('connection.php');
    
    $user_id  = isset($_SESSION['user_id']) ? ($_SESSION['user_id']) : false ;

    $pdo = $db->prepare('SELECT * FROM user WHERE id=:user_id');
    $data['user_id'] = $user_id;
    $pdo->execute($data);
    $user = $pdo->fetch(PDO::FETCH_ASSOC);
?>

<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <nav class="main-menu">
                <a href="list.php"><b><u>List</u></></a>
                <a href="konten.php"><u><b>Konten</b></u></a>
                <a href="#" class="active"><b><u>Profil</u></b></a>
                <a href="logout.php"><u><b>Logout</b></u></a>
            </nav>
            
            <div class="content">
            <?php if($user_id): ?>
            <p>User ID : <?=$user['id'] ?></p>
            <p>Name : <?=$user['name'] ?></p>
            <?php else: ?>
                <p class="danger">Anda Tidak Dapat Mengakses Halaman Ini</p>
                <a href="login.php" class="btn-login">Login</a>
            <?php endif; ?>
            </div>

        </div>
    </body>
</html>