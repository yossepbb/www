
<?php 
	// Les requetes préparées

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
	$req = $bdd -> prepare('SELECT nom, possesseur, prix FROM jeux_video
						 	WHERE prix = ?
						 	ORDER BY prix ASC
						 	');

	// Verification si donnée saisie
	if (isset($_POST['prix']))
	{
		// échapper aux injections de code HTML
		// $_POST['nom'] = htmlspecialchars($_POST['nom']);
	
		// transmission des params
		$req -> execute(array( $_POST['prix']));

		echo '<ul>';

		// affichage des données une par une
		while ($data = $req -> fetch())
			{
				echo '<li>Jeu: ' . $data['nom']. '  coute  ' . $data['prix'] . ' EUR</li>';
				echo '<li>Possesseur: ' . $data['possesseur'] . ' </li>';
				echo "---------------------------------";	
			}	
				
		echo '</ul>';

	}
	
	// $rep -> closeCursor();
	// Autre facon de Passage de params avec usage de marqueurs nominatifs
	// cas ou la requete contient beaucoup de parties variables, il peut etre plus pratique
	// de nommer les marqeurs plutot que d'utiliser des pts d'interrogation.

	$req = $bdd ->prepare('SELECT * FROM jeux_video 
							WHERE possesseur= :possesseur AND prix= :prixmax
						');

	$req -> execute(array('possesseur' => $_POST['possesseur'],
							'prixmax' => $_POST['prix']
	 						));


?>
