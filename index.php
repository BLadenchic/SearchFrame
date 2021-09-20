<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<?php if(isset($_COOKIE['user']))
header("Location:./Profil");?>
<title>Тестирование кадров</title>
</head>
<body>
<div class="form">
	<div class='login'>
		<div class="promo"><h5>Тестирование кадров</h5></div>
			<form action="check.php" method="POST" class="login-promo-forma">
				<div class='login-forma'>
					<div class='login-forma-name'>
						<a>Логин: </a>
						<input type='text' name='login' id='name'></input>
					</div>
					<div class='login-forma-password'>
						<a>Пароль: </a>
						<input type='password' name='password' id='password'></input>
					</div>
					<div  class="login-forma-reset">
					<a href="Reset">Забыл пароль</a>
					</div>
				</div>
				<div class="login-promo-submit">
					<input type='submit' value='Войти' class="but"></input>
				</div>
				<div class="login-forma-button">
					<a href="Registration">Зарегистрироватся</a>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>