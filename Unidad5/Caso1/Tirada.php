<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
//Hacemos una llamada al código del fichero "dado.php" mediante la función requiere_once	
		require_once 'Dado.php';
//Creamos un nuevo dado con un valor mínimo de 0 y un máximo de 12
		$dado = new Dado(0, 12);
//Mediandte un bucle for, hacemos 12 tiradas
		for ($i=1; $i < 13 ; $i++) { 
			echo "La tirada " .$i. " da un resultado de: " .$dado->tirarDado();
			echo "<br>";
		}

		echo "<br> Pulsa F5 para volver a tirar"
		
	?>
</body>
</html>