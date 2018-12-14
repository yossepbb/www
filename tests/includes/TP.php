<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire authentification LesProfs</title>
	</head>
	<body>

		<h1>Demande de code secret</h1>
		<!-- inclusion du contenu de la page request_psswd.php -->
			<?php include('request_psswd.php'); ?>
		<div>
			<!-- inclusion de la page qui contient le corps de la fonction CheckPsswd-->
			<?php include('CheckPsswd.php'); ?>
			
		</div>
		
	</body>
</html>
