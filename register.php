<?php 
	session_start();
	if ($_SESSION['user']) {
		header('Location: profile.php');
	}

 ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/css/main.css">
	<title>Авторизация и регистрация</title>
</head>
<body>

	<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
		<label>ФИО</label>
		<input type="text" name="full_name" placeholder="Введите полное имя">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Почта</label>
		<input type="email" name="email" placeholder="Введите email">
		<label>Изображение профиля</label>
		<input type="file" name="avatar">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<label>Подтверждение пароля</label>
		<input type="password" name="password_confirm" placeholder="Подтвердите пароль">
		<button>Регистрация</button>
		<p>
			У вас уже есть аккаунт? - <a href=".">Авторизируйтесь</a>!
		</p>

		<?php 
			if ($_SESSION['message']) {
				echo '<p class="msg">' . $_SESSION['message'] . '</p>';
			}
				unset($_SESSION['message']);
		 ?>
		
	</form>
	
</body>
</html>