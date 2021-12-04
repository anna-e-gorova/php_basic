<?php
require('config.php');
$sql="SELECT id FROM users WHERE `login`='{$_COOKIE['login']}';";
$result = mysqli_query($con, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
$user=$users['0']['id'];

$sql="select * from cart inner join `users` on `cart`.`user_id`=`users`.`id` WHERE `good_id`='{$_POST['product']}' AND `user_id`='$user'";
$result = mysqli_query($con, $sql);
$existGoods = mysqli_fetch_all($result, MYSQLI_ASSOC);
$count= $existGoods['0']['count'];

if (!$existGoods) {
    $sql="INSERT INTO `cart` (`user_id`, `good_id`, `count`) VALUES ('$user', '{$_POST['product']}', '1');";
} else {
    if ($_POST['action'] == "del") {
        $count--;
     }
     else { 
        $count++;
     }
    $sql = "UPDATE `cart` SET `count`=$count WHERE `good_id`='{$_POST['product']}' AND `user_id`='$user'";
}

$res = mysqli_query($con, $sql);
$sql = "DELETE FROM `cart` WHERE `cart`.`count` = 0";
$res = mysqli_query($con, $sql);
header("Location: index.php?page=cart");