<!DOCTYPE html>
<html>
<head>
	<title>Arkademy Satu</title>
</head>
<body>

	<div style="width: 50%; margin: auto; margin-top: 50px;">
		<?php
		$address = "Purwokerto";
		$hobbies = array('ngoding', 'ngedisain');
		$is_married = true;
		$object = new stdClass();
		$object->school = 'High School';

		$skills = array('satu' => "deisgn",
			'dua' => "developer",
			'tiga' => "analis" );

		echo "Address :	".$address."<br>";
		echo "Hobbies :	";
		print_r($hobbies);
		echo "<br>";
		echo "Married :	";
		if ($is_married == true) {
			echo "Married<br>";
		}elseif ($is_married == false) {
			echo "Not Married<br>";
		}
		echo "School :	".$object->school;


		?>
	</div>

</body>
</html>