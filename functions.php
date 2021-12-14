<?php

function getGoods($con) {
    $sql = 'SELECT * FROM goods';
	$result = mysqli_query($con, $sql);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
 
function addRating($con, $rating) {
    $sql = "INSERT INTO `rating` (`rating`, `comment`, `good_id`, `username`) VALUES ('{$rating['rating']}', '{$rating['comment']}', '{$rating['good']}', '{$rating['username']}')";
    $result = mysqli_query($con, $sql);
}

function getRatings($con, $goodId) {
    $sql="SELECT * FROM rating WHERE good_id=$goodId";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getCart($con, $id) {
    $sql="SELECT `cart`.`id`, `good_id`,`name`, `count` FROM `cart` inner join `users` on `cart`.`user_id`=`users`.`id` inner join `goods` on `cart`.`good_id`=`goods`.`id` WHERE `users`.`id`='$id';";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getOrders($con, $id) {
    $sql = "SELECT DISTINCT orders.id, date FROM `orders` inner join `goodsorder` on `orders`.`id`=`goodsorder`.`order_id` inner join `users` on `orders`.`user_id`=`users`.`id` inner join `goods` on `goodsorder`.`good_id`=`goods`.`id` WHERE `users`.`id`='$id';";
	$result = mysqli_query($con, $sql);
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>