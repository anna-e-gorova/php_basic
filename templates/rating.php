<form action="#" method="post">

    <p>Ваше имя</p>
    <input type="text" name="username">

    <p>Товар</p>
    <select name="good">
    <?php
    foreach ($goods as $product): ?>
        <option value="<?=$product['id']?>"><?=$product['name']?></option>
    <?php endforeach; ?>
    </select>

    <p>Оценка</p>
    <select name="rating">
        <?php 
        for ($i=10;$i>=1;$i--) :?>
            <option value="<?=$i?>"><?=$i?></option>
        <?php endfor;?>
    </select>

    <p>Напишите отзыв</p>
    <textarea name="comment" cols="30" rows="10"></textarea>
    <br><br>
    
    <input type="submit" value="Сохранить">

</form> 
<?php 
if (isset($_POST)){
$sql = "INSERT INTO `rating` (`rating`, `comment`, `good_id`, `username`) VALUES ('{$_POST['rating']}', '{$_POST['comment']}', '{$_POST['good']}', '{$_POST['username']}')";
$res = mysqli_query($con, $sql);
}
?>