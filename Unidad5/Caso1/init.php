<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		require_once 'caso1.php';

		$dado = new Dado(0, 12);

		for ($i=1; $i < 13 ; $i++) { 
			echo "La tirada " .$i. " da un resultado de: " .$dado->tirarDado();
			echo "<br>";
		}
		
	?>
</body>
</html>