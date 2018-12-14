<!DOCTYPE html>
<html>
	<head>
		<title>  FILE UPLOAD</title>
	</head>
	<body>

		<p>
			MESSAGE: <br>
			<?php 
			
 				// Testons si le fichier a bien été envoyé et s'il n'ya pas eu d'erreur.
				if (isset($_FILES['file']) AND $_FILES['file']['error'] == 0) 
				{
					if ($_FILES['file']['size'] <= 8000000 ) // testons si le fichier n'est pas trop gros.
					{

						$infofichier = pathinfo($_FILES['file']['name']); // La fonction pathinfo() est array contenant en autre l'extension du fichier dans infofichier['extension']

						$extension_upload = $infofichier['extension']; //l'extension du fichier est stocké dans la variable extension_upload
						
						$extensions_autorisées = array('pdf', 'jpeg', 'gif', 'png', 'txt');

						if (in_array($extension_upload, $extensions_autorisées)) // Testons si l'extension du fichier fait partie des extensions autorisées
						{ 
							// si tout est bon on accepte le fichier en appellant la fonction move_uploaded_file()
							move_uploaded_file($_FILES['file']['tmp_name'], 'C:\wamp64\www\tests\uploads\ ' . basename($_FILES['file']['name'])); //  Stockons le fichier d'origine dans le repertoire 'C:\wamp64\www\tests\uploads\. 		Avec basename() on extrait le nom du fichier .

							echo "L'envoie a bien été effectué";
						}

						else
						{
							echo "Aucun fichier n'a été envoyé car l'extension n'est pas autorisée. Veuillez réessayer svp!";
						}
					}
					else
					{
						echo "La taille est superieur à 8 Mo";
					}
				}

				else
				{
					echo "Erreur!!!. Veuillez réessayer svp!";
				}
			 ?>
		</p>
	</body>
</html>