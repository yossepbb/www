<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>LesProfs</title>
	</head>
	<body>
		<h1><strong>Bienvenue sur la plateforme LesProfs</strong></h1>
		<p>
			<?php 

				$mdp = 'kangourou';

				if (isset($_POST['mot_de_passe']))
				{
					$_POST['mot_de_passe'] = htmlspecialchars($_POST['mot_de_passe']);

					if ($_POST['mot_de_passe'] == $mdp)
					{
						echo 'Welcome  ' . $_SESSION['pseudo'] . '!';
					?>
						<p> <em style="color: red;">N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines <br></em></p>

						<p> Si tu veux changer uploader un cours c'est par ici : <a href="upload_file.php">Upload file</a>!</p>
						<p>
							page d'acceuil ici E3~ <a href="LandingPage.php">Page d'acceuil!</a>
							
						</p>
					<?php

					}
					else
					{
						echo "Mot de passe incorrect";
						?>
						<script type="text/javascript">
							alert('Cette page est réservée au personnel de la Plateforme LesProfs')
						</script>
						<?php
					}
				}
			?>
		</p>
	</body>
</html>