<?php
    $x = rand(1,10);
    $y = rand(1,10);
    $res = $x + $y;
?>
<form action="server.php" method="post" enctype="multipart/form-data">

    <p>Выберите файлы</p>
    <input type="file" name="photo[]" multiple accept="image/*">


    <input type="hidden" name="correct" value="<?= $res?>">
    <p>Ваше имя</p>
    <input type="text" name="fio">
    <p>Расскажите о себе</p>
    <textarea name="biogr" cols="30" rows="10"></textarea>

    <p>Какие языки программирования Вы знаете</p>
    <input type="checkbox" name="lang[]" value="PHP">PHP <br>
    <input type="checkbox" name="lang[]" value="JAVA">JAVA <br>
    <input type="checkbox" name="lang[]" value="js">js <br>

    <p>В каком городе живете</p>
    <input type="radio" name="city" value="Москва">Москва <br>
    <input type="radio" name="city" value="Казань">Казань <br>
    <input type="radio" name="city" value="Волгоград">Волгоград <br>

    <p>Ваш возраст</p>
    <select name="age">
        <option value="До 30">До 30</option>
        <option value="От 30">От 30</option>
    </select>
    <br><br>
    <p>Вычислите <?= $x?> + <?= $y?> = <input name="answer" style="width: 30px;" type="text" ></p>

    <?php
    if(!isset($_GET['status']) || $_GET['status']== 1) {?>
        <input type="submit" value="Сохранить">
    <?php
    }
    if ($_GET['status'] == 1) {?>
    <h1>Добро пожаловать!</h1>
   <?php
    }
    elseif($_GET['status'] == 2){
    ?>
    <h1>Доступ запрещен!</h1>

    <?php
    }
    ?>
</form>

<a href="server.php?id=1">Link</a>