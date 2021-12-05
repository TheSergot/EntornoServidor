<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
//Creamos la clase dado con sus propiedades, función construct y getters.
		class Dado{
			private int $minNumDado;
			private int $maxNumDado;

			public function __construct (int $min, int $max){
				$this->minNumDado = $min;
				$this->maxNumDado = $max;
			}

			public function getMinimo(){
				return $this->minNumDado;
			}

			public function getMaximo(){
				return $this->maxNumDado;
			}
//Escribimos la función que permitirá "tirar el dado"
			public function tirarDado(): int {
				return rand($this->minNumDado, $this->maxNumDado);
			}
		}
	?>
</body>
</html>