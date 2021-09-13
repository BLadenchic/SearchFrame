<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="../panel.css">
<script src='ERROR.js'></script>
<title>Тестирование кадров</title>
</head>
<body>
<?php if(isset($_COOKIE['user'])):
$link = mysqli_connect('localhost', 'root', '','testing');
mysqli_query($link,'SET NAMES utf8');
$sql =  'select *
		from users
		where id_user="'.$_COOKIE["user"].'"';
		$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
		$user=$result->fetch_assoc();
?>
<div class="info">
		<div class="profil"><span><?php 
		if($user['Famili']!='') echo $user['Famili'].' ';
		echo $user['name'].' ';
		if($user['Otchesnvo']!='') echo $user['Otchesnvo'];?>
		</span></div>

<div class="exit">
<form action="../exit.php" method="POST">
<input type="submit" value="Выход" class="exit-but"/>
</form>
</div>
</div>
<div class="test">
<div class="name">
<span>Доступные тесты</span>
</div>
<div class="tests">

	<?php 
	
			$sql =  'select * from tests;';
		$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
			while(($row = $result->fetch_assoc()) != FALSE)
					echo '<form action="test.php" method="POST"><input type="submit" value="'.$row['name'].'"/><input type="hidden" value="'.$row['id_Test'].'" name="testid"/></form>';	

	?>
	</div>
	</div>
<div class="test">
<div class="name">
<span>Пройденные тесты</span>
</div>
<?php
$sql =  'select t1.name,t2.time_start,t2.time,t2.balls,t2.procent,t2.result
		 from tests t1,testing t2
		 where(t1.id_test=t2.id_test AND t2.id_user='.$_COOKIE['user'].')';
		$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
		$row=$result->fetch_assoc();

if($row)
{
echo '<div class="result tests">
<table class="table">
  <tr>
    <td>
	<span>Название теста</span>
	</td>
	<td>
	<span>Дата прохождения</span>
	</td>
	<td>
	<span>Время прохождения</span>
	</td>
	<td>
	<span>Количество баллов</span>
	</td>
	<td>
	<span>процент успешности</span>
	</td>
	<td>
	<span>Результат</span>
	</td>
  </tr>';
  $min=round($row['time']/60,0);
  	echo '<tr><td><span>'.$row['name'].'</td></span><td><span>'.$row['time_start'].'</td></span><td><span>'.$min.' минут</td></span><td><span>'.$row['balls'].'</td></span><td><span>'.$row['procent'].'</td></span><td><span>'.$row['result'].'</td></span></tr>';
			
 			while(($row = $result->fetch_assoc()) != FALSE)
			{
				$min=round($row['time']/60,0);
				echo '<tr><td><span>'.$row['name'].'</td></span><td><span>'.$row['time_start'].'</td></span><td><span>'.$min.' минут</td></span><td><span>'.$row['balls'].'</td></span><td><span>'.$row['procent'].'</td></span><td><span>'.$row['result'].'</td></span></tr>';
			}
echo '</table>
	</div>';
}
else
echo '<div class="result tests"><span>Результаты не найдены</span></div>';
	?>
	</div>
<?php 
else:
header("Location:/");
endif;
?>
</body>
</html>

