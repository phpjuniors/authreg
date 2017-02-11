<!DOCTYPE html>
<html>
	<head>
		<?php 
			$title = "5 Моих Друзей";
				// Создаём имя страницы
			require_once "head.php";
				// Подключаемся к файлу head.php 
		?>
	</head>

		<body>
			<form action="login.php" method="post">
				<!--**** Форма из которой данные пользователя отправятся по адресу: login.php , методом "post" ***** -->
				<p>
					<label>Введите Ваш логин:<br></label><br>
					<input type="text" name="login" placeholder="Введите логин" size="25" maxlength="15"><br>
				</p>
					<!--**** Текстовое поле, куда пользователь вводит свой логин ***** -->
				<p>
					<label>Введите Ваш пароль:<br></label><br>
					<input type="password" name="password" placeholder="Введите пароль" size="25" maxlength="15"><br>
				</p>
					<!--**** Текстовое поле, куда пользователь вводит свой пароль ***** -->
				<p>
					<input type="submit" name="submit" value="Войти"><br>
						
				</p>
					<!--**** По нажатию - отправляем данные по адресу: login.php ***** -->
			<button formaction="registration.php">Регистрация</button><br>
				<!--**** По нажатию - отправляем пользователя на страницу регистрации: registration.php ***** -->		
		</body>
</html>


