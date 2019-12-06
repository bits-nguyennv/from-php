<?php
session_start();
$username = $_POST['name'];
$pass = $_POST['password'];

if($username == "anhnguyen" and $pass == "123456"){
    echo 'thành công';
    $_SESSION['use'] = $username;
    $_SESSION['pass'] = $pass;
    // var_dump($_SESSION);
    // die();
    header("location:moi.php");
}elseif($pass != 123456){
    echo 'không đăng nhập được';
}
?>

