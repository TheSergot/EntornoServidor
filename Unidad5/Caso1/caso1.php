<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Dado{
			private int $minNumDado;
			private int $maxNumDado;

			public function __construct (int $min, int $max){
				$this->minNumDado = $min;
				$this->maxNumDado = $max;
			}

			public function tirarDado(): int {
				return rand($this->minNumDado, $this->maxNumDado);
			}
		}
	?>
</body>
</html>