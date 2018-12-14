<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap css -->
		<?php include('link_bootstrap.html'); ?>
		<title> Formulaire </title>
	</head>
	<body>
		<div id="form_php">
				<!-- Method POST = les données entrées par user ne s'affichent pas dans url -->
				<!-- un autre avantage est que l'on peut saisir plus de données dans nos formulaire -->
				<!-- action = 'cible.php'  est la page qui recevra les données saisies par l'utilisateur-->
				<p> Veuillez Renseigner vos informations svp! </p>

				<form method="POST" action="cible.php">
					<p>
						<label for="nom">nom</label>
						<input type="text" name="nom"/>
					</p>
					<p>
						<label for="prenom">prenom</label>
						<input type="text" name="prenom"/>
					</p>
					<p>
						<label for="date de naissance">date de naissance</label>
						<input type="" name="date de naissance"/>
					</p>
					<p>
						<label for="email">email</label>
						<input type="email" name="email"/>
					</p>
					<p>
						<label for="mot de passe">mot de passe</label>
						<input type="password" name="mot de passe">
					</p>

					<p>
						<input type="submit" value="Valider"/>
					</p>

					<select name="choix">
						<option value="France">France</option>
						<option value="Espagne">Espagne</option>
						<option value="Italie">Italie</option>
						<option value="Allemagne">Allemagne</option>
						<option value="Grece">Grece</option>
						<option value="Pologne">Pologne</option>
					</select>
				</form>

			</div>

	</body>
</html>