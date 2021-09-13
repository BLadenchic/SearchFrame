<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<script src='ERROR.js'></script>
<title>Тестирование кадров</title>
</head>
<body>
<?php 
if(!isset($_COOKIE['user'])):
?>


<div class="form">
<div class='login'>
<div class="promo"><h5>Тестирование не кадров</h5></div>
<form action="check.php" method="POST">
	<div class='login-forma'>
		<div class='login-forma-name'>
			<a>Логин: </a>
			<input type='text' name='login' id='name'></input>
		</div>
		<div class='login-forma-password'>
		<a>Пароль: </a>
			<input type='password' name='password' id='password'></input>
		</div>
	</div>
	<div>
	<input type='submit' value='Войти' class="but">
	</input>
	</div>
	</form>
</div>
</div>

<?php 
else:
header("Location:/Profil");
endif;
?>
</body>
</html>