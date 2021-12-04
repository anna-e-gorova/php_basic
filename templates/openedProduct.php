<div id="openedProduct-img">
    <img src="<?= "images/goods/big/{$good['img']}"; ?>">
</div>
<div id="openedProduct-price">
    <h1>Цена: <?= $good['price'] ?></h1>
    </div>
<a href="index.php?page=product&id=<?= $good['id'] ?>" class="shopUnitMore">
            Купить
        </a>
<div id="openedProduct-content">
    <h1 id="openedProduct-name">
        <?= $good['name'] ?>
    </h1>
    <p>Отзывы:</p>
    <div id="ratings">
        <?php
        $sql="select * from rating where good_id={$good['id']}";
        $result = mysqli_query($con, $sql);
        $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($comments as $comment): ?>
        <div id="ratingProduct" >
            <p>Пользователь: <?= $comment['username'] ?></p>
            <p>Оценка: <?= $comment['rating'] ?></p>
            <p>Комментарий: <?= $comment['comment'] ?></p>
        </div>
        <?php endforeach; ?>
        
    </div>
    <a href="index.php?page=rating" class="shopUnitMore">Оставить отзыв</a>
    <div id="openedProduct-description">
        <?= $good['description'] ?>
    </div>
</div>
