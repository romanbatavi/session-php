<?php

    session_start();
    session_destroy();
    // print_r();
    // header('location: login.php');
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
                <a href="konten.php"><b><u>Konten</u></b></a>
                <a href="profil.php"><b><u>Profil</u></b></a>
                <a href="logout.php class="active"><u><b>Logout</b></u></a>
            </nav>
            
            <div class="content">
            <?php if(session_status() == PHP_SESSION_NONE): ?>
            <p class="danger">Session Dihancurkan</p>
            <a href="login.php" class="btn-login"><b><u>Login</u></b></a>
            <?php else: ?>
            <p>Session Belum Dihancurkan</p>
            <?php endif; ?>
            </div>
        </div>
    </body>
</html>