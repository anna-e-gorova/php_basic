<?php
//$mas = ["good"=>"Audi","price"=>1000];
//$str = json_encode($mas);
//echo $str;

//$arr = json_decode($str,true);
//print_r($arr);

$src = file_get_contents("https://www.cbr-xml-daily.ru/daily_json.js");
$courses = json_decode($src,true);
//print_r($courses);
?>
Курс доллара по отношению к рублю на сегодня : <?= $courses["Valute"]["USD"]["Value"]?>
