<?php 
	session_start();
		// Запускаем сесию
	require_once "connection.php";
		//подключаемся к базе данных, с помощью файла connection.php
?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--**** Устанавливаем кодировку страницы, тип документа ***** -->
	<title><?=$title?></title>
		<!--**** Создаем переменную, с помощью которой будем задавать имена страниц ***** -->
