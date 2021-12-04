<?php
//print_r($_POST);
//$fio = strip_tags($_POST['fio']);
//echo $fio;

//$id = (int)$_GET['id'];
//$sql = "select * from table where id=$id";
//echo $sql;

//if($_POST['correct'] == $_POST['answer']){
//    header("Location: form.php?status=1");
//}
//else{
//    header("Location: form.php?status=2");
//}

//print_r($_FILES);
for($i=0;$i<count($_FILES['photo']['name']);$i++){
    $path = "files/".$_FILES['photo']['name'][$i];
    if(move_uploaded_file($_FILES['photo']['tmp_name'][$i],$path)){
        echo "Файл {$_FILES['photo']['name'][$i]} успешно загружен<hr>";
    }
}