<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
//Hacemos una llamada al código de los ficheros "Equipo.php" y "Jugador.PHP" mediante la función requiere_once	
		require_once 'Equipo.php';
		require_once 'Jugador.php';

//Creamos un nuevo equipo, que contendrá un array de jugadores
		$unicaja = new Equipo();
//Mediante la función for() creamos a 9 jugadores, con dorsales del 1 al 9, y le asignaremos una cantidad aleatoria de puntos, entre 20 y 100.
		for ($i=1; $i<10 ; $i++) { 
			$jugador = new Jugador ($i, rand(20, 100));
			$unicaja->addJug($jugador);
			echo "Dorsal número ".$jugador->getNumJug()." | Puntuación personal: ".$jugador->getPtos()." puntos <br>";
		}
		echo "<br>";
//Mediante la función getTotal podemos ver el total de puntos que suma el equipo
		echo "El equipo suma un total de ".$unicaja->getTotal()." puntos <br> <br>";
//Hacemos que la puntuación del jugador 1 aumente en 3 puntos mediante la función addPtos.
		echo "¡El jugador con el dorsal número ".$unicaja->getJug(1)->getNumJug()." ha marcado un triple";
		$unicaja->getJug(1)->addPtos(3);
//Llamamos de nuevo a la puntuación personal del jugador y a la total del equipo mediante los métodos correspondientes.		
		echo " y suma un total de ".$unicaja->getJug(1)->getPtos()." puntos en su marcador personal! <br> <br>";
		echo "Ahora, el equipo suma un total de ".$unicaja->getTotal()." puntos y se pone a la cabeza <br>";

	?>
</body>
</html>