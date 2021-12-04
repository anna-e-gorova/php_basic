<p>Корзина:</p>
    <div id="ratings">
        <?php
        $sql="SELECT `good_id`,`name`, `count` FROM `cart` inner join `users` on `cart`.`user_id`=`users`.`id` inner join `goods` on `cart`.`good_id`=`goods`.`id` WHERE `users`.`login`='{$_COOKIE['login']}';";
        $result = mysqli_query($con, $sql);
        $cart = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($cart as $good): ?>
        <div id="ratingProduct" >
            <p>Товар: <?= $good['name'] ?></p>
            <p>Кол-во: <?= $good['count'] ?></p>
            <form action="serverCart.php" method="post">
            <input type="hidden" name="product" value="<?=$good['good_id']?>">
            <input type="hidden" name="action" value="del">   
            <a href="#" class="shopUnitMore"><input type="submit" value="Удалить"></a>
            </form>
        </div>
        <?php endforeach; ?>
    </div>