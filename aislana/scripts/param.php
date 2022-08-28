<?php
$server = 'localhost';
$db = 'comp';     // имя базы данных
$user = 'inform';              // имя пользователя
$pass = '!dsm05!';  
$link = @mysqli_connect($server, $user, $pass, $db) or die("Ошибка " . mysqli_error($link));
?>
