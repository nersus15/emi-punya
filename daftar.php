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
    <script src="./jquery.js"></script>
</head>
<body>
    <nav style="background-color: grey;" class="navabar right">
        <ul class="nav-menu">
            <li class="nav-link"><a href="login.php">Login</a></li>
            <li class="nav-link"><a href="daftar.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <h1 class = 'text-center'>Daftar Akun</h1>
        <div class="center">
            <form class="form" action="function.php?act=register" method="post">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control pass">
                </div>
                <div class="form-group">
                    <label for="username" class="form-label">Konfirmasi Password</label>
                    <input type="password" name="pass2" class="form-control pass2">
                    <small id="err" style="display: none; color: red;" for=""></small>
                </div>
                <button style='cursor:pointer' id="submit" class="btn btn-primary" type="submit">Daftar</button>
            </form>
        </div>  
    </main>
</body>
<script>
    $('.pass, .pass2').keyup(function(){
        if($('.pass').val() != $('.pass2').val()){
            $('#submit').prop('disabled', true);
            $('#err').text('Password tidak sama').show();
        }
        else{
            $('#err').text('').hide();
            $('#submit').prop('disabled', false);
        }
    })    
</script>
</html>