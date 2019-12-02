<!DOCTYPE html>
<html lang=es>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Login</title>
</head>
<body class="alert alert-warning">
<?php
session_start();
  if(($_POST["nom"]!="") && ($_POST["clau"]!="")) {

	$nom_fitxer="usuaris.txt";
	if (file_exists($nom_fitxer)){
		$fitxer=fopen($nom_fitxer,"r") or die ("No es pot accedir al fitxer");
		$validat=false;
		while (!feof($fitxer) && ($validat == false)){
			$usuari=explode(":",fgets($fitxer));
			if (($usuari[0] == $_POST["nom"]) && ($usuari[1] == $_POST["clau"])) $validat=true;
		}
		fclose($fitxer);
		if ($validat) {
			$_SESSION["acces"]=1;
			$_SESSION["nom"] = $_POST["nom"];
			header('Location: botiganice.php'); 
		}
		else $error = "Usuari o Contrassenya incorrectes.  Torna a provar.";
		echo "<script type='text/javascript'>alert('$error');
		</script>";
		header( "refresh:0;url=index.html" );
		
	
	}
}
?>
</body>
</html>