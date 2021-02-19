<html>
    <head>
        <title>Autentikasi - List</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">

            <nav class="main-menu">
                <a href="list.php?user_id=<?=$_GET['user_id'];?>"><b><u>List</u></b></a>
                <a href="#" class="active"><b><u>Konten</u></b></a>
                <a href="profil.php?user_id=<?=$_GET['user_id'];?>"><b><u>Profil</u></b></a>
            </nav>
            
            <div class="content">
            <?php if(isset($_GET['user_id'])): ?>
            Halaman Konten
            <?php else: ?>
                <p class="danger">Anda Tidak Dapat Mengakses Halaman Ini</p>
                <a href="login.php" class="btn-login">Login</a>
            <?php endif; ?>
            </div>

        </div>
    </body>
</html>