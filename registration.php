<head>
	<?php
		$title = "Регистрация";
			//создаём имя страницы
		require_once "head.php"
			//подключаемся к файлу head.php
	?>
</head>
		<body>
			<form action="query-registration.php" method="post">
				<!--**** Форма из которой данные пользователя отправятся по адресу: query-registration.php , методом "post" ***** -->
				<p>
					<label>Введите логин, не более 15 символов:<br></label><br>
					<input type="text" name="login" placeholder="логин" size="25" maxlength="15"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит свой логин ***** -->
				<p>		
					<label>Введите адрес электронной почты (email):<br></label><br>
					<input type="text" name="email" placeholder="адрес электронной почты"  size="25" maxlength="30"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит свой email ***** -->
				<p>	
					<label>Введите пароль, не более 15 символов:<br></label><br>
					<input type="password" name="password" placeholder="пароль"  size="25" maxlength="15"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит свой пароль ***** -->
				<p>	
					<label>Введите Ваше Имя:<br></label><br>
					<input type="text" name="name" placeholder="имя"  size="25" maxlength="15"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит своё имя ***** -->
				<p>	
					<label>Введите Вашу Фамилию:<br></label><br>
					<input type="text" name="surname" placeholder="фамилия"  size="25" maxlength="15"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит свою фамилию ***** -->
				<p>	
					<label>Введите дату Вашего рождения:<br></label><br>
					<input type="date" name="birthday" placeholder="дата рождения"  size="25" maxlength="10"><br>
				</p>
						<!--**** Текстовое поле, куда пользователь вводит дату своего рождения ***** -->
					<input type="submit" name="submit" value="Зарегистрироваться">
						<!--**** По нажатию - отправляем данные по адресу: query-registration.php ***** -->
			</form>
		</body>
