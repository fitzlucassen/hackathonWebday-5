<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >

		<link type="text/css" rel="stylesheet" href="style.css" />
		<title>Défi numéro 5</title>
	</head>
	<body>
		<?php include ('core/targetForm.php'); ?>

		<h1>
		<?php
			echo 	is_numeric($result['letters']) && 
					$result['letters'] >= 0 && 
					is_numeric($result['words']) && 
					$result['words'] >= 0 && 
					is_numeric($result['sections']) && 
					$result['sections'] >= 0 ? 
						"Bravo !" : 
						"Fail...";
		?>
		</h1>
		<p>
			<?php
				echo $result['letters'];
				echo $result['words'];
				echo $result['sections'];
			?>
		</p>
	</body>

	<script src="jquery.js"></script>
</html>
