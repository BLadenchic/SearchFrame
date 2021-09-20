<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<?php if(isset($_COOKIE['user']))
header("Location:./Profil");
?>
<title>Тестирование кадров</title>
</head>
<body>
<div class="form">
		<form action="check.php" method="POST" class="reg-forma">
			<div class='reg-forma-block'>
				<div class="promo">
					<h5>Регистрация</h5>
				</div>
				<div>
					<a>Логин: </a>
					<input type='text' name='login' id='name'></input>
				</div>
				<div>
					<a>ФИО: </a>
					<input type='text' name='FIO' id='FIO'></input>
				</div>
				<div>
					<a>Номер телефона: </a>
					<input type='telephon' name='telephon' id='telephon'></input>
				</div>
				<div>
					<a>Почта: </a>
					<input type='mail' name='mail' id='mail'></input>
				</div>
				<div>
					<a>Пароль: </a>
					<input type='password' name='password' id='password'></input>
				</div>
				<div>
					<a>Повторите пароль: </a>
					<input type='password' name='password' id='password'></input>
				</div>
				<div class="login-promo-submit"> 
					<input type='submit' value='Зарегистрироватся' class="but"></input>
				</div>
			</div>
		</form>
</div>
</body>
</html>