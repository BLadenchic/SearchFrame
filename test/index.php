<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<link rel="stylesheet" type="text/css" href="../panel.css">
<script src="time.js"></script>
<title>Тестирование кадров</title>
</head>
<body onload="Start();">
<?php if(isset($_COOKIE['user'])):
$link = mysqli_connect('localhost', 'root', '','information');
			mysqli_query($link,'SET NAMES utf8');
			$sql =  'select *
		from users
		where id_user="'.$_COOKIE["user"].'"';
		$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
		$user=$result->fetch_assoc();?>
<div class="info">
		<div class="profil"><span><?php 
		if($user['Famili']!='') echo $user['Famili'].' ';
		echo $user['name'].' ';
		if($user['Otchesnvo']!='') echo $user['Otchesnvo'];?>
		</span></div>
<div class="exit">
<form action="../return.php" method="POST">
<input type="submit" value="Вернутся к выбору теста" class="exit-but"/>
</form>
</div>
<div class="exit">
<form action="../exit.php" method="POST">
<input type="submit" value="Выход" class="exit-but"/>
</form>
</div>
</div>
<?php 
	if(!isset($_POST['but']))
	{
		$link = mysqli_connect('localhost', 'root', '','testing');
		$sql =  'select * from tests where tests.id_Test="'.$_COOKIE['id_test'].'"';
			$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
			$row = $result->fetch_assoc();?>
			<form action="end.php" method="POST">
			<?php
			echo '<div class="block">';
			echo '<fieldset class="test">';
			echo '<legend>'.$row['name'].'</legend>';	
			$sql =  'select * from vopros where vopros.id_Test="'.$_COOKIE['id_test'].'"';
			$result=mysqli_query($link, $sql) or die("Ошибка ".mysqli_error($link));
			$a=mysqli_num_rows($result);
			$b=0;
			while(($row = $result->fetch_assoc()) != FALSE)
			{
				
				$sql2 =  'select `otvet`,`ball` 
						  from `vopros-otvet`,`otvet`
						  where `vopros-otvet`.id_Vopros='.$row['id_Vopros'].' AND `otvet`.`id_Otvet`=`vopros-otvet`.`id_Otvet`
						  order by `otvet`desc;';
				$result2=mysqli_query($link, $sql2) or die("Ошибка ".mysqli_error($link));
				echo '<label>'.$row['Vopros'].'</label>';
				echo '<select name="sel'.$b.'">';
				while(($row2 = $result2->fetch_assoc()) != FALSE)
				{
				echo '
					<option value="'.$row2['ball'].'"><span>'.$row2['otvet'].'</span></option>';
				
				}
				echo '</select>';
				$b=$b+1;
			}
	}
	else
	{
		print_r($_POST["sel"]);
	}?>

<input type="submit" value="Закончить" class="but" name="but" onClick="End();">
<input type="hidden" name="num" value="<?php echo $a;?>">
<input type="hidden" name="time" id="time" value="">
<input type="hidden" name="date" id="date" value="">
<?php
echo '</fieldset></div>'; 
?>
</form>
<?php 
else:
header("Location:/");
endif;
?>
</body>
</html>

