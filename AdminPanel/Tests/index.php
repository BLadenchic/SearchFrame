<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="./style.css">
<script action='script.js'></script>
<title>Добавление нового сотрудника</title>
</head>
<body>
<form action="check.php" method="POST">
<?php if(isset($_COOKIE['user'])):
?>
<div><p>тобы выйти, нажмите <a href='exit.php'>здесь</a></p></div>
<div class='login'>
	<div class='login-forma'>
		<div class='login-forma-name'>
			<a>Логин: </a>
			<input type='text' name='login' id='name' pattern="[A-Za-z0-9]{5,}" title="Пароль может содержать только латинские буквы и цифры."></input>
		</div>
		<div class='login-forma-password'>
		<a>Пароль: </a>
			<input type='text' name='password' id='password' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
			title="Пароль должен содержать 8 или более символов,иметь хотя бы одно число, и одну букву верхнего и нижнего регистра." required></input>
		</div>
		<div class='login-forma-password'>
		<a>Имя: </a>
			<input type='text' name='name' id='password'></input>
		</div>
	</div>
	<input type='submit' value='Добавить'></input>
</div>
<?php 
else:
header("Location:/");
endif;
?>
</form>
</body>
</html>

