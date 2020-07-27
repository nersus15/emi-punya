<?php
    include_once 'connection.php';
    if(isset($_GET['act'])){
        switch($_GET['act']){
            case 'register':
                register();
                break;
            case 'login':
                login();
                break;
        }
    }
    
    function register(){
        $username = $_POST['username'];
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query = mysqli_query($koneksi, 'SELECT * FROM user'); 

        header('Location: data.php');
    }

    function login(){
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'"); 
        $result = $query->mysqli_fetch_array();

        if(!empty($result)){
            if(password_verify($password, $result['password'])){
                $_SESSION['userdata'] = $result;
            }else{
                $_SESSION['err'] = 'PASSWORD SALAH';
            }
        }else{
            $_SESSION['err'] = 'USERNAME TIDAK DITEMUKAN';
        }

        header('Location: localhost/tugasuas');

    }