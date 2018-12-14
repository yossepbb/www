<?php 

	/*

	Un tableau aussi appellé Array est une variable, mais une variable un peu spéciale.
	On distingue deux types de tableaux:

	- Les tableaux numérotés.
	- Les tableaux associatifs.


	1- Un tableau numéroté est une variable qui n'a pas une seule valeur mais plusieurs. Les valeurs sont rangées dans des cases différentes. Chaque case est identifiée par un numéro unique. ce numéro est appellé CLé. Un tableau numéroté commence toujours
	par la case N°0.

	2- Un tableau associatif ou Hash en Ruby 
	C'est le meme principe sauf que au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent.
	Il est très utile d'utiliser un tableau associatif pour par exple enrégistrer les coordonnées d'une personne.

	NOTE:

	- un array numéroté permet de stocker des elements du meme type comme des prénoms
	- un array associatf permet de stocker des elements de type different comme un nom, une adresse, code postal, ville.

	*/

	//  Declaration d'un tableau numéroté de taille = 9 
	$prenoms = array('Joseph', 'Adèle', 'Patrick', 'Emilienne', 'Natacha', 'Joseph', 'Adèle', 'Georges', 'Brice');
	$taille = sizeof($prenoms);

	//  Boucle for pour parcourir le tableau numéroté.

	// for ($i=0; $i < $taille ; $i++)
	// { 
	// 	echo '<br><br> ' . $prenoms[$i] . '<br><br>';
		
	// }
	// echo "------------FIN-----------<br><br>";


	//  Declaration d'un tableau associatif avec système de clé et de valeur.

	$coordonnées = array(

						 'prenom' => 'Joseph',
						 'nom'  => ' Binyoum',
						 'adresse' => ' 30 rue Cajarc Les Tanneries',
						 'code postal' => 47000,
						 'ville' => 'Agen',
						 'Pays' => 'France'

						);

	//  Pour afficher un élément d'un tableau associatif il suffit d'indiquer le nom du tableau avec entre crochets la clé dont 
	// on aimarait obtenir la valeur.  

	// echo '<br><br>Les coordonnées ' . $coordonnées['prenom'] . $coordonnées['nom'] . ' : ' . $coordonnées['adresse']  ; 
	// $coordonées['prenom'] = $prenom[0] = Joseph
	// affichage très long à coder


	// Boucle foreach 

	// foreach ($coordonnées as $element) {  // affecté l'élement à chaque clé du tableau coordonnées.
		

	// 	echo  $element . '  <br><br> ' ;

	// }

	// Autre facon de parcourir le tableau. Pour chaque element du array coordonnées affiche la clé et sa valeur.

	// foreach ($coordonnées as $key => $value)
	// {
	// 	echo  $key . ':' . $value .'  <br><br> ' ;

	// }
	
	// la fonction print_r est une sorte de echo spécialisé pour les tableaux. Cette commande a un défaut, elle ne renvoie pas
	// le code HTML '<br>' pour les retours à la ligne. Pour avoir un affichage plus soft il faut utiliser echo avec la balise '<pre> </pre>';

	// echo '<pre>';
	// print_r($coordonnées);
	// echo '</pre>';
	

	/*
		Verifier qu'une clé existe dans un tableau :  array_key_exists

		synopsis: array_key_exists('clé', $array) 
		
	*/

	if (array_key_exists('région', $coordonnées))
	{
		echo '<br><br> La clé région se trouve dans les coordonnées <br><br>';
	}

	else
	{
		echo '<br><br> La clé région ne se trouve pas dans les coordonnées <br><br>';
	}

	/*
		Vérifier si une valeur existe dans array: in_array 

		 Le principe est le meme que array_key_exists mais cette fois ci on 
		recherche dans les valeurs. in_array renvoi true ou false
		
	*/

		$fruits = array('Banane', 'Mango', 'Apple', 'Orange', 'Pineapple', 'Cassava', 'Avocato', 'Peach' );

		if (in_array('guava', $fruits))
		{
			echo "<br><br>C'est bon la guava <br><br>";
		}

		else
		{
			echo "<br><br>Comment ca vous n'avez pas de guava !!!! <br><br>";
		}


		/*
			récuperer la clé d'une valeur dans l'array: array_search
			si elle trouve la valeur recherchée, elle renvoie la clé correspondante c-a-d un numéro si c'est un array numéroté
			si c'est un array associatif elle renvoie le nom de la clé correspondant à cette valeur.
			si elle n'a pas trouvé la valeur, elle renvoie false.
		*/


		$position = array_search('papaye', $fruits);

		echo '<br> l\'orange se trouve à la position  ' . $position . ' !  ';

 ?>