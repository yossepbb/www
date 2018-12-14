<?php session_start(); ?>
<!DOCTYPE html>
<html>

	<head>
		<title>Authentification</title>
	</head>

	<body>

		<!-- Page du formulaire de demande de mot de passe pour acces a la page de connexion -->
		<!-- action TP.php le formulaire renvoie les données saisis sur la meme page -->
		<form name="code_secret" method="post" action="secret.php">
			<label for="pseudo">pseudo</label>
			<input type="text" name="pseudo" placeholder="joe42"/>
			<label for="mot_de_passe">mot de passe</label>
			<input type="password" name="mot_de_passe" />
			<input type="submit" name="valider"/>
		</form>
	</body>
</html>