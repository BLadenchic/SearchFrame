<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./style.css">
<script src='ERROR.js'></script>
<title>Тестирование кадров</title>
</head>
<body>
<?php if(isset($_COOKIE['user'])):
?>
<div></div>
<?php 
else:
header("Location:/");
endif;
?>
</body>
</html>

