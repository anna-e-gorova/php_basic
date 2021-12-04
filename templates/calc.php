Задание 1
<form action="server.php" method="post">
<p>Введите первое число</p>
    <input type="text" name="firstNumber">
<p>Введите второе число</p>
    <input type="text" name="secondNumber">
<p>Операция</p>
    <select name="operation">
        <option value="+">сложение</option>
        <option value="-">вычетание</option>
        <option value="*">умножение</option>
        <option value="/">деление</option>
    </select>
    <input type="submit" value="Вычислить">
</form>    
<hr>

Задание 2
<form action="server.php" method="post">
<p>Введите первое число</p>
    <input type="text" name="firstNumber">
<p>Введите второе число</p>
    <input type="text" name="secondNumber">
    <br>
    <input type="submit" value="+" name="operation">
    <input type="submit" value="-" name="operation">
    <input type="submit" value="*" name="operation">
    <input type="submit" value="/" name="operation">
</form>

<?php 
if ($_GET['status'] == 1) {?>
    <h1>Результат</h1>
    <?= $_GET['result']?>
    <?php
    }