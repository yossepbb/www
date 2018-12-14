<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			MEMBER AUTHENTIFICATE
		</title>
	</head>

	<body>
		<div id="form" >
			
			<form method="post" action="cible.php">
				<p>
					<label for="pseudo">pseudo</label>
					<input type="text" name="pseudo" placeholder="joe45@" />
				</p>

				<p>
					<label for="mot_de_passe">mot de passe</label>
					<input type="password" name="mot_de_passe"/>
					<input type="submit" name="Go">
				</p>


			</form>
			
		</div>
	</body>
</html>