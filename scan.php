
<div class='galery'>
<?php


$sql = "select id,title,alt from images order by count desc";
$res = mysqli_query($connect,$sql);
while($files = mysqli_fetch_assoc($res)){?>
    <a href="fullImage.php?img=<?=$files['id']?>" target="_blank"><img class="image" width="150" height="150" src="small/<?= $files['title']?>" alt="<?= $files['alt']?>"></a>
<?php
}?>
</div>
