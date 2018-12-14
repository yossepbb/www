<?php session_start(); ?>

<!DOCTYPE html>
<html>

	<head>
		<title> Resultat authentification</title>
	</head>

	<body>
		<div id="welcome">	
			<p> 
				<?php
				// La fonction htmlspecialchars() permet d'echapper les injections de code HTML Par les pirates dans mes formulaires
				// elle transforme les chevrons des balises HTML en &lt et &gt 
				// Penser à utiliser cette fonction sur tous les textes envoyés par l'utilisateur qui sont succeptibles d'etre
				// affichés sur une page web. Sur un forum par exple. Pensez a inclure cette fonction sur tous les messages postés
				// mais aussi les pseudos en brefs tout ce qui est affiché et qui vient à la base d'un utilisateur.

					if ($_POST['pseudo'])
					{
						echo 'Bienvenue ' . htmlspecialchars($_POST['pseudo']) . '!!!<br><br>'; // strip_tags() retire les balises HTML injectées.			
					
					}
					else
					{
						echo "<p> Bonjour! Veillez saisir votre id et email svp! </p>";
					}
				?>
					<a href="LandingPage.php">Page d'acceuil!</a>
			</p>

				<?php 

					$_SESSION['pseudo'] = $_POST['pseudo'];

					echo 'les id de session_user sont:' . $_SESSION['pseudo'];
				 ?>
		</div>

	</body>
</html>