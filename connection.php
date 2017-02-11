<?php
	$host = "mysql.hostinger.ru";
		// Имя MySQL сервера
	$user = "u721464991_ccff1";
		// Имя пользователя MySQL сервера
	$password = "alba47s";
		// Пароль базы данных MySQL
	$db = "u721464991_cf23b";
		// Имя базы данных MySQL
	$mysqli_connection = new mysqli($host, $user, $password);
		// Создаём новое соединение с MySQL сервером и нашей базой данных
	$select_db = mysqli_select_db($mysqli_connection, $db);
		// Выбираем базу данных, к которой будут обращаться запросы
?>