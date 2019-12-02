<?php session_start(); ?>
<?php 	
echo '<header>';

	if(isset($_POST["Product"])){
		$listProducts = implode(", ", $_POST["Product"]);
	
		$_SESSION["Cart"] = $listProducts;
		$SessionID = $_SESSION["Cart"];

	} else {
        $usuari = $_SESSION["nom"];
        echo "Hola,  ".$usuari;
	}
	echo '</header>';
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
		integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="CSS/HeaderBotiga.css">
<header>		
    <title>Home</TITLE>
    <a href=logout.php class='btn btn-danger'>Surt de la sessió</a>
</header>
</head>
<body>
	<?php
	$SessionValue = $_SESSION['acces'];
	if(!isset($_SESSION['acces'])){
		echo '<h1 style="font-family: "Poppins", sans-serif;margin-top: 5%; margin-left: 45%; text-align: center">An error has occurred while logging</h1>';
		print '<meta HTTP-EQUIV="refresh" CONTENT="1;URL=./Login.html">';
	}else{
	?>

	<h2 style="text-align: center; font-family: 'Poppins', sans-serif;">PRODUCTES</h2>
	
	<?php
	$comptador=0;
	if (isset($_COOKIE['comptador'])){
		 $comptador = $_COOKIE['comptador'] + 1;
		 setcookie("comptador",$comptador,time() + 3600 * 24);
	}
	else {
		 setcookie("comptador",$comptador);
	}
		
	

		class Product {
			public $brand_product;
			public $model_product;
			public $price_product;
			public $cookie;
			public $esborrarcookie;
			
		

			public function __construct($brand, $model, $price, $cookie, $esborrarcookie){
				$this->brand_product = $brand;
				$this->model_product = $model;
				$this->price_product = $price;
				$this->cookie = $cookie;
				$this->esborrarcookie = $esborrarcookie;
			}

			public function getDescription(){
				$Desc = $this->brand_product ." " .$this->model_product;
				return $Desc;
				
			}

			public function comprararPreu(){
				if ($price_product > 1000){
					echo "Es molt car";
				}else if($price_product > 500){
					echo "Té un preu normal";
				}else if($price_product > 100){
					echo "És una ganga";
				}
			}

			/*public function getImage(){
				$path = "IMATGES/" .$this->img_product;
				return $path;
			} */ 
			
			public function getPrice(){
				return $this->price_product;
			}
		}

		$p1 = new Product("Porsche", "Discos de freno", 250 , "pr1cookie", "pr1esborrarcookie");
		$p2 = new Product("8X18", "Llantas", 500, "pr2cookie" , "pr2esborrarcookie");
		$p3 = new Product("BMW", "Volante", 350, "pr3cookie", "pr3esborrarcookie");
		$p4 = new Product("BMw", "Faro", 400, "pr4cookie", "pr4esborrarcookie");
		$p5 = new Product("Universal", "Aleron", 245, "pr5cookie", "pr5esborrarcookie");
		$p6 = new Product("Rafft", "1L Aceite", 10, "pr6cookie", "pr6esborrarcookie");

	// $ProductList = array($p1, $p2, $p3, $p4, $p5, $p6); crear un array

        echo '<div style="margin-left: 38%; margin-top: 3%;" class="col-sm-3">';
        echo '<img width="400px" height="400" src="IMATGES/Freno.jpg">';
        echo $p1-> getDescription();
        echo '<p>Preu: </p>';
		echo $p1->	getPrice(); 
	echo '<br>';
		echo '<br>';

		if(isset($_POST['pr1cookie'])){
			
			setcookie( 'pr1cookie', $_COOKIE[ 'pr1cookie' ] + 1, time() + 3600 * 24 );			
		}
			if(isset($_COOKIE[ 'pr1cookie' ])!=0){
				echo '<hr style="border: 1px solid black;" width="500px">';
			echo 'Unitats: '.$_COOKIE[ 'pr1cookie' ];
			if(isset($_POST['pr1esborrarcookie'])){
			
				setcookie( 'pr1cookie', $_COOKIE[ 'pr1cookie' ] - 1, time() + 3600 * 24 );			
						}
			}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p1->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p1->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";
			echo '<hr style="border: 1px solid black;" width="500px">';
        echo '<br><br><br><br><br><br>';

        echo '<img width="400px" height="400" src="IMATGES/Llantas.jpg">';
        echo $p2-> getDescription();
        echo '<p>Preu: </p>';
		echo $p2->	getPrice();
		echo '<br>';
		echo '<br>';

		if(isset($_POST['pr2cookie'])){
			
			setcookie( 'pr2cookie', $_COOKIE[ 'pr2cookie' ] + 1, time() + 3600 * 24 );
			
		}
			if(isset($_COOKIE[ 'pr2cookie' ])!=0){
			echo '<hr style="border: 1px solid black;" width="500px">';
			echo 'Unitats: '.$_COOKIE[ 'pr2cookie' ];			
		}
		if(isset($_POST['pr2esborrarcookie'])){
			
			setcookie( 'pr2cookie', $_COOKIE[ 'pr2cookie' ] - 1, time() + 3600 * 24 );			
					}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p2->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p2->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";
			echo '<hr style="border: 1px solid black;" width="500px">';
		echo '<br><br><br><br><br><br>';
		

        echo '<img width="400px" height="400" src="IMATGES/Volante.jpg">';
        echo $p3-> getDescription();
        echo '<p>Preu: </p>';
		echo $p3->	getPrice();
		echo '<br>';
		echo '<br>';
		if(isset($_POST['pr3cookie'])){
			
			setcookie( 'pr3cookie', $_COOKIE[ 'pr3cookie' ] + 1, time() + 3600 * 24 );
			
		}
			if(isset($_COOKIE[ 'pr3cookie' ])!=0){
			echo '<hr style="border: 1px solid black;" width="500px">';
			$mensaje = 'Unitats: '.$_COOKIE[ 'pr3cookie' ];
			echo $mensaje .'<br>';
		}
		if(isset($_POST['pr3esborrarcookie'])){
			
			setcookie( 'pr3cookie', $_COOKIE[ 'pr3cookie' ] - 1, time() + 3600 * 24 );			
					}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p3->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p3->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";
			echo '<hr style="border: 1px solid black;" width="500px">';
        echo '<br><br><br><br><br><br>';

        echo '<img width="400px" height="400" src="IMATGES/Faro.jpg">';
        echo $p4-> getDescription();
        echo '<p>Preu: </p>';
		echo $p4->	getPrice();
		echo '<br>';
		echo '<br>';
		if(isset($_POST['pr4cookie'])){
			
			setcookie( 'pr4cookie', $_COOKIE[ 'pr4cookie' ] + 1, time() + 3600 * 24 );
			
		}
			if(isset($_COOKIE[ 'pr4cookie' ])!=0){
			echo '<hr style="border: 1px solid black;" width="500px">';
			echo 'Unitats: '.$_COOKIE[ 'pr4cookie' ];	
		}
		if(isset($_POST['pr4esborrarcookie'])){
			
			setcookie( 'pr4cookie', $_COOKIE[ 'pr4cookie' ] - 1, time() + 3600 * 24 );			
					}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p4->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p4->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";
			echo '<hr style="border: 1px solid black;" width="500px">';
        echo '<br><br><br><br><br><br>';

        echo '<img width="400px" height="400" src="IMATGES/Aleron.jpg">';
        echo $p5-> getDescription();
        echo '<p>Preu: </p>';
		echo $p5->	getPrice();
		echo '<br>';
		echo '<br>';
		if(isset($_POST['pr5cookie'])){
			
			setcookie( 'pr5cookie', $_COOKIE[ 'pr5cookie' ] + 1, time() + 3600 * 24 );
			
		}
			if(isset($_COOKIE[ 'pr5cookie' ])!=0){
			echo '<hr style="border: 1px solid black;" width="500px">';
			echo 'Unitats: '.$_COOKIE[ 'pr5cookie' ];		
		}
		if(isset($_POST['pr5esborrarcookie'])){
			
			setcookie( 'pr5cookie', $_COOKIE[ 'pr5cookie' ] - 1, time() + 3600 * 24 );			
					}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p5->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p5->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";

		echo '<br>';
		echo '<hr style="border: 1px solid black;" width="500px">';
        echo '<br><br><br><br><br><br>';
        echo '<img width="400px" height="400" src="IMATGES/Aceite.jpg">';
        echo $p6-> getDescription();
        echo '<p>Preu: </p>';
		echo $p6->	getPrice();
		echo '<br>';
		echo '<br>';
		if(isset($_POST['pr6cookie'])){
			
			setcookie( 'pr6cookie', $_COOKIE[ 'pr6cookie' ] + 1, time() + 3600 * 24 );
			
		}
			if(isset($_COOKIE[ 'pr6cookie' ])!=0){
			echo '<hr style="border: 1px solid black;" width="500px">';
			echo 'Unitats: '.$_COOKIE[ 'pr6cookie' ];			
		}
		if(isset($_POST['pr6esborrarcookie'])){
			
			setcookie( 'pr6cookie', $_COOKIE[ 'pr6cookie' ] - 1, time() + 3600 * 24 );			
					}
			echo "<form action='botiganice.php' method='post'>";
			echo "<input type='Submit' class='btn btn-success' name='$p6->cookie' id='button3' value='Afegir al carro'>";
			echo "<input type='Submit' class='btn btn-danger' name='$p6->esborrarcookie' id='button3' value='Esborrar una unitat'>";
			echo "</form>";

		echo '<br>';
		echo '<hr style="border: 1px solid black;" width="500px">';
        echo '</div>';

		echo '<div style="margin-left: 38%; margin-top: 3%;" class="col-sm-3">';
		echo '</form>';
		echo '<img src="IMATGES/Carro.png" width="100px" height="100px">';
		echo '<h1>Carro</h1>';
		if(isset($_COOKIE[ 'pr1cookie' ])!=0){
		echo '<img width="40px" height="40px" src="IMATGES/Freno.jpg">';	
		echo 'Producte 1: '.$_COOKIE[ 'pr1cookie' ];
		}
		echo '<br>';
		if(isset($_COOKIE[ 'pr2cookie' ])!=0){
			echo '<img width="40px" height="40px" src="IMATGES/Llantas.jpg">';
			echo 'Producte 2: '.$_COOKIE[ 'pr2cookie' ] ;
			}
			echo '<br>';
			if(isset($_COOKIE[ 'pr3cookie' ])!=0){
				echo '<img width="40px" height="40px" src="IMATGES/Volante.jpg">';
				echo 'Producte 3: '.$_COOKIE[ 'pr3cookie' ];
				}
				echo '<br>';
				if(isset($_COOKIE[ 'pr4cookie' ])!=0){
					echo '<img width="40px" height="40px" src="IMATGES/Faro.jpg">';
					echo 'Producte 4: '.$_COOKIE[ 'pr4cookie' ];
					}
					echo '<br>';
					if(isset($_COOKIE[ 'pr5cookie' ])!=0){
						echo '<img width="40px" height="40px" src="IMATGES/Aleron.jpg">';
						echo 'Producte 5: '.$_COOKIE[ 'pr5cookie' ];
						}
						echo '<br>';
						if(isset($_COOKIE[ 'pr6cookie' ])!=0){
							echo '<img width="40px" height="40px" src="IMATGES/Aceite.jpg">';
							echo 'Producte 6: '.$_COOKIE[ 'pr6cookie' ];
							}
echo '</div>';
		

	?>
	<br><br>
	<?php

	}
	?>

</body>
</html>