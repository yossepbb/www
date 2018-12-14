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

				<h3><strong>Bienvenue chez Nous LesProfs</strong></h3>
				<p> Qui sommes-Nous ? <br> Beaucoup se pose  la question. la réponse est simple, nous sommes une association d'enseignants universités, professeurs de collèges, lycées, qui ont décidés de se regrouper pour faire face à la crise que traverse notre grand pays la France afin de proposer des cours de soutien scolaire à des groupes d'élèves, étudiants.<br></p>

				<p>Nous recrutons toujours de nouveaux bénévoles pour compléter nos rangs tant la mission est longue et gratifiante au bout. <br></p>

				<p> Si tu es intéréssé(e) , tu peux t'inscrire en cliquant sur le lien ci dessous :-) <br></p>

				<a href="membreForm.php">Connectes toi!</a>
				<a href="form.php">Deviens membre!</a>

			</div>

		</div>

	</body>
</html>