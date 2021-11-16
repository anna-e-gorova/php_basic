<?php
//Задание 2
echo "Hello, World!";
echo "<br>";

$name = "GeekBrains user";
echo "Hello, $name!";
echo "<br>";

define('MY_CONST', 100);
echo MY_CONST;
echo "<br>";

$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
echo "<br>";

$a = 1;
echo "$a";
echo '$a';
echo "<br>";

$a = "text";
$b = (boolean) $a;
echo "$a";
echo "$b";
echo "<br>";

$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;


$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень

$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a­­--;     // Постдекремент
echo --$a;    // Предекремент

$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно

 
//Задание 3

$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? Потому что работает неявное приведение типа.
var_dump((int)'012345');     // Почему 12345? Потому что приводит к целочисленному типу.
var_dump((float)123.0 === (int)123.0); // Почему false? Потому что разные типы данных.
var_dump((int)0 === (int)'hello, world'); // Почему true? Потому что одинаковые типы данных. "hello world" перобразуется в 0.

//Задание 4 в отдельной папке 

//Задание 5

$c = 10;
$d = 20;

$c = $c + $d;
$d = $c - $d;
$c = $c - $d;
echo $c;
echo $d;
?>