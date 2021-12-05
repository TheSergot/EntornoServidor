<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
//Creamos la clase Jugador y definimos sus atributos, constructor y getters	
		class Jugador{
			private int $numeroJug;
			private int $ptos;

			public function __construct ($numeroJug, $ptos){
				$this->numeroJug = $numeroJug;
				$this->ptos = $ptos;
			}
			
			public function getNumJug(): int{
				return $this->numeroJug;
			}

			public function getPtos(): int{
				return $this->ptos;
			}
// Creamos un método para añadir punto al marcador de un jugador
			public function addPtos($ptos){
				if ($ptos > 0) {
					$this->ptos += $ptos;
				}
				else {
					return "ERROR: LA CANTIDAD DE PUNTOS A INTRODUCIR HA DE SER >0";
				}
			}

		}
/**
		$pila = array("naranja", "plátano");
array_push($pila, "manzana", "arándano");
print_r($pila); **/
	?>
</body>
</html>