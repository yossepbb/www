<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap css -->
		<?php include('link_bootstrap.html'); ?>
		<title>UPLOAD FILE</title>
	</head>
	<body>
		<div id="container">
			<h2>Importer vos cours, agrandir votre bibliothèque</h2>
			<form id="upload_file" enctype="multipart/form-data" action="cible_envoi.php" method="post">
				<p> Selectionner le fichier à uploader ( PDF uniquement de taille max 8 Mo) <br></p>
				<p>
					<label for="file">nom du fichier</label>
					<input type="text" name="nom du fichier">
					<P>Ajouter une description !</P>
					<textarea name="description" rows="1" cols="15" placeholder="saisir texte ici">
					
					</textarea><br>

					<input type="file" name="file"/> <br><br>	

					<input class="btn btn-warning" type="submit" name="Send file">

				</p>
			</form>
		</div>
	</body>
</html>