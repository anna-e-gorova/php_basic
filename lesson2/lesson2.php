<?php
//Задание №1
$a=4;
$b=7;

if ($a>=0 && $b>=0){
    echo $a-$b;
} elseif ($a<0 && $b<0) {
    echo $a*$b;
} elseif (($a<0 && $b>0) || ($a>0 && $b<0)) {
    echo $a+$b;
} else {
    echo "Ошибка";
}

echo "<hr>";

//Задание №2
$a=rand(0,15);
switch ($a)
{
    case 0:
        echo ($a++ );
    case 1:
        echo ($a++ );
    case 2:
        echo ($a++ ) ;
    case 3:
        echo ($a++ );
    case 4:
        echo ($a++ );
    case 5:
        echo ($a++ ) ;
    case 6:
        echo ($a++ );
    case 7:
        echo ($a++ );
    case 8:
        echo ($a++ );
    case 9:
        echo ($a++);
    case 10:
        echo ($a++ );
    case 11:
        echo ($a++ );
    case 12:
        echo ($a++ ) ;
    case 13:
        echo ($a++ );
    case 14:
        echo ($a++ );
    case 15:
        echo ($a++ ) ;
    break;

}
echo "<hr>";

//Задание №3
function sum($a,$b) {
    return $a+$b;
}
echo sum(1,2);
echo "<br>";

function sub($a,$b) {
    return $a-$b;
}
echo sub(5,4);
echo "<br>";

function div($a,$b) {
    if ($b==0) {
        return "Err";
    }
    return $a/$b;
}
echo div(16,2);
echo "<br>";

function mul($a,$b) {
    return $a*$b;
}
echo mul (10,7);
echo "<hr>";

//Задание №4
$operation="-";
$arg1=2;
$arg2=4;
switch ($operation) {
    case "+":
        echo sum($arg1,$arg2);
        break;
    case "-":
        echo sub($arg1,$arg2);
        break;
    case "/":
        echo div($arg1,$arg2);
        break;
    case "*":
        echo mul($arg1,$arg2);
        break;
}
echo "<hr>";

//Задание №6
function power($val, $pow) {
    if ($pow > 0) {
        $pow--;
        return power($val, $pow) * $val;
    } else {
        return 1;
    }
}
echo power(5,2);
echo "<hr>";

//Задание №7
function correctDate ($hour,$minut){
    if ($hour==1 || $hour==21) {
        $hour = "$hour час";
    } elseif ($hour%20 >= 2 && $hour%20 <=4) {
        $hour = "$hour часа";
    } else {
        $hour = "$hour часов";
    }

    if(($minut%10 >= 2 && $minut%10 <=4 ) &&( ($minut < 5) || ($minut > 20))) {
        $minut = "$minut минуты";
    } elseif (($minut%10 == 1 ) &&( ($minut < 2) || ($minut > 20))) {
        $minut = "$minut минута";
    } else {
        $minut = "$minut минут";
    }
return  "Сейчас  $hour $minut" ;
}

echo correctDate(date("H"),date("i"));

//echo correctDate(1,31);
