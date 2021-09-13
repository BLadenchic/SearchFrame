<?php
setcookie('user',$user['login'],time()-3600,'/');
setcookie('user_type',$user['id_type'],time()-3600,'/');
header("Location:./");
?>