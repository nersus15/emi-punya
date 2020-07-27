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
            <li class="nav-link"><a href="daftar.php">Register</a></li>
        </ul>
    </nav>
    <main>
        <h1 class = 'text-center'>Daftar Akun</h1>
        <div class="center">
            <form class="form" action="function.php?act=login" method="post">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Daftar</button>
            </form>
        </div>  
    </main>
</body>
</html>