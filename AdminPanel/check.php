<?php

$login = filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]),FILTER_SANITIZE_STRING);
$link = mysqli_connect('localhost', 'root', '','testing');
					$sql =  'select *
							 from users
							 where login="'.$login.'" AND password="'.$password.'"';
					$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
					$user=$result->fetch_assoc();
if (count($user)==0) {
    echo "Вы ввели неверный логин или пароль.";
	exit;
}
print_r($user);
setcookie('user',$user['login'],time()+3600,'/');
mysqli_close($link);
header("Location:./create");
exit;
?>