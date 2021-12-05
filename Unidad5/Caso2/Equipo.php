<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
//Creamos la clase equipo, con el atributo jugadores como array, un constructor vacío y la función getter correspondiente	
		class Equipo{
			private array $jugadores;

			public function __construct(){
			}

			public function getJugadores(){
				return $this->jugadores;
			}
//Creamos la función addJug que nos permitirá añadir jugadores al array y les asignará un número de jugador
			public function addJug(Jugador $jugador){
				$this->jugadores[$jugador->getNumJug()] = $jugador;
			}
//Con la función getJug podemos acceder a un jugador en concreto por su número de dorsal
			public function getJug(int $numJugador): Jugador{
				return $this->jugadores[$numJugador];
			}
//Con la función getTotal obtendremos el total de puntos del equipo, recorriendo el array de jugadores y sumando los puntos de cada uno.
			public function getTotal(): int{
				$total = 0;
				foreach ($this->jugadores as $value) {
					$total += $value->getPtos();
				}
				return $total;
			}
		}			
	?>
</body>
</html>