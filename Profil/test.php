<?php
	setcookie('id_test',$_POST['testid'],time()+3600,'/');
	header("Location:/Test");
?>