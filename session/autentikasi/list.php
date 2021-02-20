<?php
    session_start();
?>
<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <nav class="main-menu">
                <a href="#" class="active"><b><u>List</u></b></a>
                <a href="konten.php"><b><u>Konten</u></b></a>
                <a href="profil.php"><b><u>Profil</u></u></a>
            </nav>
            
            <div class="content">
            <?php if(isset($_SESSION['user_id'])): ?>
            Halaman List
            <?php else: ?>
                <p class="danger">Anda Tidak Dapat Mengakses Halaman Ini</p>
                <a href="login.php" class="btn-login">Login</a>
            <?php endif; ?>
            </div>
        </div>
    </body>
</html>    