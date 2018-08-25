<!DOCTYPE html>
<html>
<head>
	<title>Arkademy Empat</title>
</head>
<body>

	<?php

	$data = fibo(4,3);

	function fibo($col, $row) {
		$akhir = $col*$row;
		$array = array(0,1);

		for ($i=2; $i < $akhir; $i++) { 
			$array[$i] = $array[$i - 2] + $array[$i - 1];
		}

		printData($array, $akhir);
	}
	function printData($data, $akhir) {
		for ($n=0; $n < $akhir ; $n++) { 
			echo $data[$n].", ";
			if (($n + 1) % 4 == 0) {
				echo "<br>";
			}
		}
	}

	?>
</body>
</html>