<div class='galery'>
    Задание2<br>
<?php
$files = scandir("small");
for($i=2;$i < count($files);$i++){?>
    <a href="fullImage.php?img=<?= $files[$i]?>" target="_blank"><img class="image" width="150" height="150" src="small/<?= $files[$i]?>" alt=""></a>
<?php
}?>
</div>
<div class='galery'>
    Задание3<br>
<?php
for($i=2;$i < count($files);$i++){?>
    <img class="image modalWindow" width="150" height="150" src="small/<?= $files[$i]?>" alt="">
<?php
}?>
</div>