<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
	<head xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
		<!-- boostrap link -->
		<?php include('link_bootstrap.html'); ?>
		<title>LesProfs</title>
	</head>
	<body>
		<div id="wrapper">
			<!-- banner -->
			<?php include('entete.php');?>
			<!-- navbar -->
			<?php include('menu.php'); ?>

			<div id="wrapper-content">

				<h3><strong>Bienvenue dans vore espace membre</strong></h3>
				<p>Ici vous avez la possibilité de:
					<ol>
						<li>Completer votre profil.</li>
						<li>Uploader vos cours.</li>
						<li>Créer aussi des cours pour vos eleves.</li>
					</ol>.
					
				<br>
				</p>
			</div>

		</div>

		<div> <?php include('pied_de_page.php'); ?></div>
	</body>
</html>