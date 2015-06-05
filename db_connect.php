<?php
$host="localhost";/*Имя сервера*/
$user="root";/*Имя пользователя*/
$password="root";/*Пароль пользователя*/
$db="schedule";/*Имя базы данных*/
if (!mysql_connect($host, $user, $password)) die (mysql_error());/*Подключение к серверу*/
mysql_select_db($db); /*Подключение к базе данных на сервере*/
?>