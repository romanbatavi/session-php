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
                <a href="list.php"><b><u>List</u></b></a>
                <a href="#" class="active"><b><u>Konten</u></b></a>
                <a href="profil.php"><b><u>Profil</u></b></a>
                <a href="logout.php"><u><b>Logout</b></u></a>
            </nav>
            
            <div class="content">
            <?php if(isset($_SESSION['user_id'])): ?>
            Halaman Konten
            <?php else: ?>
                <p class="danger">Anda Tidak Dapat Mengakses Halaman Ini</p>
                <a href="login.php" class="btn-login">Login</a>
            <?php endif; ?>
            </div>
        </div>
    </body>
</html>