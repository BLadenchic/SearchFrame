<?php

$login = filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]),FILTER_SANITIZE_STRING);
$link = mysqli_connect('localhost', 'root', '','testing');
					$sql =  'select *
							 from users
							 where login="'.$login.'" AND password="'.$password.'"';
					$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
					$user=$result->fetch_assoc();
if(!$user)
{
    header("Location:./");
	exit;
}
print_r($user);
setcookie('user',$user['id_user'],time()+3600,'/');
setcookie('user_type',$user['id_type'],time()+3600,'/');
mysqli_close($link);
header("Location:./profil");
exit;
?>
