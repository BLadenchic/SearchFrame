<?php
if(isset($_COOKIE['user']))
{
$ball=0;
for($i=0;$i<$_POST['num'];$i++)
{
	$ball+=$_POST['sel'.$i];
}
$procent=($ball/50)*100;
$resul='Тест не пройден';
$link = mysqli_connect('localhost', 'root', '','testing');
			mysqli_query($link,'SET NAMES utf8');
			$sql='select * from tests where id_test="'.$_COOKIE['id_test'].'";';
			$result=mysqli_query($link, $sql) or die("Ошибка: ".mysqli_error($link));
			$res=$result->fetch_assoc();
			if($ball>=$res['prohod'])
			$resul='Тест успешно пройден';
			echo $ball.'    ';
			print_r($res['prohod']);
			$sql =  'INSERT INTO `testing`(`id_user`, `id_test`, `time_start`, `time`, `balls`, `procent`, `result`) 
			VALUES ("'.$_COOKIE['user'].'","'.$_COOKIE['id_test'].'","'.$_POST['date'].'","'.$_POST['time'].'","'.$ball.'","'.$procent.'","'.$resul.'")';
		mysqli_query($link, $sql) or die("Ошибка: ".mysqli_error($link));
header("Location:/profil");
}
else
header("Location:/");
?>