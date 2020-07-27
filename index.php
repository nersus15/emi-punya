<?php 
    if(!session_id())
        session_start();
    include_once './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav style="background-color: grey;" class="navabar right">
        <ul class="nav-menu">
            <li class="nav-link"><a href="login.php">Login</a></li>
            <li class="nav-link"><a href="logout.php">Lout</a></li>
        </ul>
    </nav>
    <main>
        <h1 class = 'text-center'>Selamat datang Emi</h1>
        <div class="button-group center">
        <a href="daftar.php" class="btn btn-primary">DAFTAR</a>
        <a href="data.php" class="btn btn-primary">DATA</a>
        </div>  
    </main>
</body>
</html>