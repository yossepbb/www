<?php  session_start(); 
	
	$_SESSION['prenom'] = 'Joseph';
	$_SESSION['nom'] = 'Binyoum';
	$_SESSION['age'] = 28;

?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('link_bootstrap.html'); ?>
		<title>GAMER'S GALAXY</title>
	</head>
	<body>

		<?php
			include('entete.php');
			include('menu.php');
	 	?>
	 	<h1 style="text-align: center;">Welcome to the gamer galaxy!!!</h1>
	 	<div class="container" style=" border: 1px solid grey; box-shadow: 1px 1px 0.5px black;">
	 		<h3 style="background-color: grey;">Resultats de la recherche:</h3>
	 		<hr>
		 	<?php 

				// Les requetes préparées nous permettent d'éviter les dangeureuses failles d'injection SQL.

				/*
					Le système des réquetes préparées a l'avantage d'etre beaucoup plus sur mais aussi plus rapide pour la base de données
					si la requete est exécutée plusieurs fois. C'est ce système qui est préconisé pour adapter nos requètes par rapport 
					en fonction de nos différents usages.
				*/

				try{

					// initialisation connexion à la base de données.
					$bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
				}

				catch(Exception $e)
				{
					die('Erreur:' . $e -> getMessage());
				}
				
				// preparation d'une requete adaptée sans sa partie variable
				$req = $bdd -> prepare('SELECT nom, possesseur, prix, commentaires FROM jeux_video
									 	WHERE prix = ?
									 	ORDER BY prix ASC
									 	'); 
				// Verification si donnée saisie
				if (isset($_POST['prix']))
				{
					// échapper aux injections de code HTML
					$_POST['prix'] = htmlspecialchars($_POST['prix']);
				
					// transmission des params
					$req -> execute(array( $_POST['prix'])) or die( print_r($req -> errorInfo())); // Traquer les erreurs lies à une mauvaise requete sql
;

					echo '<ul>';

					while ($data = $req -> fetch())
						{
							echo '<li> Jeu: ' . $data['nom']. ' <br> -Prix: ' . $data['prix'] . ' EUR <br> -Possesseur:' . ' ' . $data['possesseur'] . '<br> - Commentaires:' . $data['commentaires'] . '</li>';
							echo "---------------------------------";	
						}	
							
					echo '</ul>';

				}

				else
				{
					echo "Veuillez saisir un prix svp!";
				}

				?>
		</div>
	</body>
</html>