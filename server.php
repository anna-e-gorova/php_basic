<?php
require('config.php');
$login = $_POST['login'] ? strip_tags($_POST['login']) : "";
$pass = $_POST['pass'] ? strip_tags($_POST['pass']) : "";

$sql = "select id from users where login='$login' and pass='$pass'";
$res = mysqli_query($con,$sql) or die("Error: ".mysqli_error($con));

if(mysqli_num_rows($res)){
    setcookie("login",$login);
    setcookie("pass",$pass);
    header("Location: index.php?page=auth&success=true");
}else {
    header("Location: index.php?page=auth&success=false");
}