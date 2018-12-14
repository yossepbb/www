<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>

	<body>
		<?php 

	// $bdd est un objet qui represente la connexion a la base de données.
	/*
		on créé la connexion en indiquant:
		- le nom de l'hote --- Localhost
		- le nom de la base  de donnée
		- le login du l'utilisateur ---- root
		- le mot de passe --- ici pas de mot de passe.
	*/

	try{

		$bdd = new PDO('mysql:host=localhost; dbname=test', 'root', '' );
		echo 'Connexion de la base de donnée test établie !' ;

		
	}

	catch(Exception $e)
	{

		die('Erreur: ' . $e -> getMessage());
	}

			// pour effectuer une requete nous procedons ainsi:
		/*
			$response = $bdd -> query('tapez une requete sql ici');

			query = requete.

		*/

		$response = $bdd -> query('SELECT * FROM jeux_video') ;

		// echo $response
		// Ne marche pas. c'est normal car Mysql renvoie quelques chose inexploitable
		// beaucoup d'informations qu'il faut organiser.

		
			//la variable $response est un objet qui contient toutes les données issues de la requete Mysql .
			// donc response est un tab avec plusieurs champs et plusieurs entrées.
			// il faut itérer pour afficher toutes les entrées du tab
		
		

		/*
			Pour ne pas tout traiter d'un coup, on extrait cette reponse ligne par ligne c'est à dire entrée par entrée.
			Pour cela on utilise la fonction fetch()

			$données est un array renvoyé par fetch(). il stocke chaque entrée afin de pouvoir l'afficher
		*/

		// tant qu'il y'a des informations dans la var $données, affiche le contenu. Verifie si $données vaut vrai ou faux.
		// fetch() renvoie faux dans $données lorsqu'il arrive à la fin des données.

		while($données = $response -> fetch())
		{

			?>

				<p>
					<strong>Jeu</strong> : <?php echo $données['nom']; ?> <br> 

					Le possesseur de ce jeu est: <?php echo $données['possesseur']; ?> <br>

					Et il le vend à <?php echo $données['prix'] ; ?> euros ! <br>

					Ce jeu fonctionne sur <?php echo  $données['console']; ?> et on peut y jouer à <?php echo $données['nbre_joueurs_max']; ?>
					au maximum <br>

					<?php echo $données['possesseur']; ?> a laissé ces commentaires sur <?php  echo $données['nom']; ?> <em> <?php echo $données['commentaires']; ?></em>
				</p>

			<?php 
		}


		$response -> closeCursor(); // termine le traitement de la requete 
		echo "---------------------------------------------------- END OF QUERY ----------------------------------------- <br>";
		echo "---------------------------------------------------- NEW QUERY ----------------------------------------- <br>";

		try{

			$names = $bdd -> query('SELECT * FROM jeux_video WHERE console=\'Megadrive\''); // requete pour recuperer toutes les entrées du champ nom
			
		}

		// capturer l'erreur et affiche un message plus propre.

		catch(Exception $e )
		{

			die('Erreur: ' . $e -> getMessage());
		}

		// $names -> fetch() retourne un tab stoké dans $data.

		$data = $names -> fetch();

		// tant que $data est vrai affiche le contenu
		while ($data = $names -> fetch())
		{
			?>
			<p>console: <?php echo ' ' . $data['console']; ?></p> <br>
			<p>jeu: <?php echo ' ' . $data['nom']; ?></p> <br>
			<?php
		}

		$names -> closeCursor();
		echo "---------------------------------------------------- END OF QUERY ----------------------------------------- <br>  ";
		echo "---------------------------------------------------- NEW QUERY ----------------------------------------- <br>";

		try{

			// requete ou l'on trie selon le nom du possesseur et le prix 
			$patrickgames = $bdd -> query('SELECT * FROM jeux_video WHERE possesseur= \'Patrick\' AND prix < 20'); // requete pour recuperer toutes les entrées du champ nom
			
		}

		// capturer l'erreur et affiche un message plus propre.

		catch(Exception $e )
		{

			die('Erreur: ' . $e -> getMessage());
		}

		// $names -> fetch() retourne un tab stoké dans $data.

		$data = $patrickgames -> fetch();

		echo "Listing : <br>";

		// tant que $data est vrai affiche le contenu
		while ($data = $patrickgames -> fetch())
		{
			?>
			<p>jeu : <?php echo ' ' . $data['nom']; ?></p> 
			<p>possesseur : <?php echo ' ' . $data['possesseur']; ?></p>
			<p>console : <?php echo ' ' . $data['console']; ?></p>
			<p>commentaires : <?php echo ' ' . $data['commentaires']; ?></p>
			<p>prix : <?php echo ' ' . $data['prix']; ?></p>

			<?php
		}

		$patrickgames -> closeCursor();


		echo "---------------------------------------------------- END OF QUERY ----------------------------------------- <br>  ";
		echo "---------------------------------------------------- NEW QUERY ----------------------------------------- <br>";

		// requete ou l'on ordonne les résultats selon le prix croissant
		try{

			$order_games = $bdd -> query('SELECT * FROM jeux_video ORDER BY prix '); // requete pour recuperer toutes les entrées du champ nom
			
		}

		// capturer l'erreur et affiche un message plus propre.

		catch(Exception $e )
		{

			die('Erreur: ' . $e -> getMessage());
		}

		// $names -> fetch() retourne un tab stoké dans $data.

		$data = $order_games -> fetch();

		echo "Listing par prix croissant: <br>";

		// tant que $data est vrai affiche le contenu
		while ($data = $order_games -> fetch())
		{
			?>
			<p>jeu : <?php echo ' ' . $data['nom']; ?></p> 
			<p>possesseur : <?php echo ' ' . $data['possesseur']; ?></p>
			<p>prix : <?php echo ' ' . $data['prix']; ?></p>

			<?php
		}

		$order_games -> closeCursor();


		echo "---------------------------------------------------- END OF QUERY ----------------------------------------- <br>  ";
		echo "---------------------------------------------------- NEW QUERY ----------------------------------------- <br>";

		// requete ou l'on ordonne les résultats selon le prix decroissant
		try{

			$order_games = $bdd -> query('SELECT nom, possesseur, console, prix FROM jeux_video 
										WHERE console=\'Xbox\' OR console=\'PS2\'
										ORDER BY prix DESC 
										LIMIT 0, 10'); // requete pour recuperer toutes les entrées du champ nom
			
		}

		// capturer l'erreur et affiche un message plus propre.

		catch(Exception $e )
		{

			die('Erreur: ' . $e -> getMessage());
		}

		// $names -> fetch() retourne un tab stoké dans $data.

		$data = $order_games -> fetch();

		echo "Listing par prix decroissant: <br>";

		// tant que $data est vrai affiche le contenu
		while ($data = $order_games -> fetch())
		{
			?>
			<p>jeu : <?php echo ' ' . $data['nom']; ?></p> 
			<p>possesseur : <?php echo ' ' . $data['possesseur']; ?></p>
			<p>console : <?php echo ' ' . $data['console']; ?></p>
			<p>prix : <?php echo ' ' . $data['prix']; ?></p>

			<?php
		}

		$order_games -> closeCursor();
 ?>

	</body>
</html>
