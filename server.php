<?php
$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];
switch ($_POST['operation']) {
    case "+":
        $result =$firstNumber+$secondNumber;
        header("Location: index.php?status=1&result=$result");
        break;
    case "-":
        $result =$firstNumber-$secondNumber;
        header("Location: index.php?status=1&result=$result");
        break;
    case "/":
        if ($secondNumber==0) {
            $result = "Деление на 0 невозможно";
        }else{$result =($firstNumber/$secondNumber);}
        header("Location: index.php?status=1&result=$result");
        break;
    case "*":
        $result =$firstNumber*$secondNumber;
        header("Location: index.php?status=1&result=$result");
        break;
}


