
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body style="color: ">
	<div>
		
		<p>
			BONJOUR 
			<?php 
			// tester si une variable existe bien on fait appel à la fonction isset()

			if (isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])) // teste si les val des params existent et ont les val attendues.
			{
				$_GET['repeter'] = (int) $_GET['repeter']; // transtypage du type de $_GET['repeter'] pour eviter les injections de code malveillant dans mon url

				if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 10) // si cette val est conforme entre 1 et 100 alors on boucle
				{
					
					for($i=0 ; $i <$_GET['repeter'] ; $i++)
					{

						echo  $_GET['nom'] . ' * ' . $_GET['prenom']; 
					
					}
				}
			}

			else // alors les valeurs de params n'existent pas
			{

				echo "<br><br> Renseigner le nom et le prenom svp";
			}

			/*

			Vous devez toujours faire TRES ATTENTION et PREVOIR TOUS LES CAS les plus tordus, comme nous venons de le faire:
			 - Verifier que tous les paramètres que nous attendons sont bien la
			 - Verifier que les valeurs de ces params sont bien des val correctes et comprise dans les intervalles raisonnables.

			*/
			?>
		</p>

	</div>
</body>
</html>