<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">

	<head>
		<meta http-equiv="Content-Type" content="test/html" charset="iso-8859-1">
		<title>Mon premier site en PHP</title>
	</head>

	<body>
			
		<!-- Inclusion du contenu de la page date -->
			<?php include("includes/date.php"); ?>
			

		<!-- Inclusion du contenu de la page entete.php -->
		<!-- les pages à inclure sont dans un sous dossier nommé includes d'ou l'usage de lien relatif -->
		<?php include("includes/entete.php"); ?>

		<!-- Inclusion du contenu de la page menu.php -->
		<?php include("includes/menu.php"); ?>

		<!-- Le corps -->
		<div id="corps">
			
			<h1>Mon super site</h1>

			<p>
				Bienvenue sur mon super site ! <br>
				Vous allez adorer ici, c'est un site génial qui va parler de E-Formation.<br>
				Comment une idée est devenue un site web !!! :-O .<br>

				<!-- Inclusion du contenu de la page id.php -->
			

				<!-- Intrusion conditions -->
		
				<?php include("includes/Array.php"); ?>
			</p>

		</div>

		<!-- Inclusion du contenu de la page pied_de_page -->
		<!-- Bien plus simple qu'en Ruby ou il faut utiliser des partials ou render -->
		<?php include("includes/pied_de_page.php"); ?>

		
	</body>

</html>