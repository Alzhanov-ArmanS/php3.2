<?php
// 1. Определение переменных и констант
$siteName = "Мой Сайт"; // строка
$year = 2024; // число
$isOnline = true; // булево значение

define('SITE_NAME', $siteName); // константа для имени сайта

echo "Имя сайта: " . SITE_NAME . "<br>";
echo "Год: " . $year . "<br>";
echo "Сайт в сети: " . ($isOnline ? 'Да' : 'Нет') . "<br>";

// 2. Преобразование типов
$stringNumber = "123.45"; // строка с числом
$convertedNumber = (float)$stringNumber; // преобразование строки в число

echo "Преобразованное число: " . $convertedNumber . "<br>";
echo "Тип переменной: " . gettype($convertedNumber) . "<br>";

// 3. Использование операторов
$num1 = 10;
$num2 = 5;
$num3 = 20;

// Арифметические операции
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num3;
$quotient = $num3 / $num2;

echo "Сумма: " . $sum . "<br>";
echo "Разность: " . $difference . "<br>";
echo "Произведение: " . $product . "<br>";
echo "Частное: " . $quotient . "<br>";

// Операторы сравнения
$isGreater = $num1 > $num2;
$isEqual = $num1 == $num2;

echo "10 больше 5: " . ($isGreater ? 'Да' : 'Нет') . "<br>";
echo "10 равно 5: " . ($isEqual ? 'Да' : 'Нет') . "<br>";

// Логическое выражение
$logicalExpression = ($num1 > $num2) && ($num3 < 30);
echo "Логическое выражение (10 > 5 И 20 < 30): " . ($logicalExpression ? 'Истина' : 'Ложь') . "<br>";

// 4. Суперглобальная переменная $_SERVER
echo "IP-адрес пользователя: " . $_SERVER['REMOTE_ADDR'] . "<br>";
echo "Браузер пользователя: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

?>

