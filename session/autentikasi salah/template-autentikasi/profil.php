<?php
    include('connection.php');
    
    $user_id  = isset($GET['user_id']) ? ($GET['user_id']) : false ;

    $pdo = $db->prepare('SELECT * FROM user WHERE id=:user_id');
    $data['user_id'] = $user_id;
    $pdo->execute($data);
    if($pdo->rowCount()){
        $user = $pdo->fetch(PDO::FETCH_ASSOC);
    }
?>

<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <nav class="main-menu">
                <a href="list.php?user_id=<?=$_GET['user_id'];?>"><b><u>List</u></></a>
                <a href="konten.php?user_id=<?=$_GET['user_id'];?>"><u><b>Konten</b></u></a>
                <a href="#" class="active"><b><u>Profil</u></b></a>
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