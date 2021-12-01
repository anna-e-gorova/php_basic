<h1>Исходное изображение</h1>
<?php
include_once "config.php";
$sql = "select title,alt,count from images where id={$_GET['img']}";
$res = mysqli_query($connect,$sql);
$img = mysqli_fetch_assoc($res);
?>
<img src="big/<?= $img['title']?>" alt="<?= $img['alt']?>">
<?php
$count = $img['count'] + 1;
$sql = "update images set count=$count where id={$_GET['img']}";
mysqli_query($connect,$sql);
?>
<h1>Колличество просмотров: <?=$count?></h1>