<?php session_start(); ?>
<!DOCTYPE html>
<html lang=es>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Logout</title>
</head>
<body class="alert alert-warning">
	<?php
	$_SESSION['acces']=0;
	session_destroy();
	echo "Sortint de la sessió...";
	header ("refresh:2;url=index.html");
	?>
</body>
</html>	
