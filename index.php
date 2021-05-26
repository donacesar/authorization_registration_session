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

	<form action="vendor/signin.php" method="post">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите пароль">
		<button type="submit">Войти</button>
		<p>
			У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>!
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