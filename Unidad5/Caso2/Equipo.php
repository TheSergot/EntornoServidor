<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Equipo{
			private array $jugadores;

			public function __construct(){
			}

			public function getJugadores(){
				return $this->jugadores;
			}

			public function addJug(Jugador $jugador){
				$this->jugadores[$jugador->getNumJug()] = $jugador;
			}

			public function getJug(int $numJugador): Jugador{
				return $this->jugadores[$numJugador];
			}

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