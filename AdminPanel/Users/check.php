<?php
$login = filter_var(trim($_POST["login"]),FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]),FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST["name"]),FILTER_SANITIZE_STRING);
	$link = mysqli_connect('localhost', 'root', '','testing');
					mysqli_query($link,'SET NAMES utf8');
					$sql =  "select login
							 from users
							 where login='".$login."'";
					$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
					while(($row = $result->fetch_assoc()) != FALSE)
					{
						if($row['login']==$login)
						{
							echo 'Такой логин уже существует.';
							exit;
						}
					}
					
					
					$sql =  "insert into users(login,password,name)
							 values ('".$login."','".$password."','".$name."');";
					mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
					
?>