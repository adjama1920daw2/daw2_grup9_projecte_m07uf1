<!DOCTYPE html>
<html lang=es>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Redireccionant</title>
</head>
<body class="alert alert-warning">
<?php
  if(($_POST["nom"]!="") && ($_POST["clau"]!="")) {
	$nom_fitxer="usuaris.txt";
	$usuari=$_POST["nom"].":".$_POST["clau"].":"."\r\n";
	if (strlen ($_POST["clau"])< 6)
	{
		echo "No s'ha pogut donar d'alta l'usuari <b><i>".$_POST["nom"]."</i></b>: la contraseña ha de tenir almenys 6 caracters";
		header("refresh: 3; url=register.html");
	}
	else{
		$fitxer=fopen($nom_fitxer,"a") or die ("No s'ha pogut afegir l'usuari");
		fwrite($fitxer,$usuari);
		fclose($fitxer);
		echo "S'ha afegit <b><i>".$_POST["nom"]."</i></b> a la llista d'usuaris de l'aplicació<br>";
		header("refresh: 3; url=index.html");	
	}
  }
	else echo "<b>Has d'introduir dades al formulari per registrar un nou usuari</b><br>";
?>
</body>
</html>