
<?php 

/*
	Une fonction est une série d'instructions qui effectue des actions et soit retourne une valeur ou affiche un résultat.
	Les fonctions sont des robots.
	Imaginons une fonction CalculCube qui calcul le volume d'un cube. Elle prend en params d'entrée sur lequel elle travaille et nous retourne en sortie le résultat.

*/

	$ch = 'Bonjour Tout Le monde !';

	// la fonction strlen(ch) calcul le nombre de caractères d'une chaine. Ici elle prend en arg en params ch.

	$taille = strlen($ch);

	//  affichage du résultat avec la fonction echo.
	echo '<br><br>La phrase suivante  ' . $ch . 'contient ' . $taille . ' caractères: <br><br>' ;


	/*

	str_replace(search, replace, where[,count])
	search = le mot qu'on souhaite remplacer
	replace = le mot qu'on veut mettre à la place
	where[, count] = la phrase ou expression dans laquelle on doit faire ma recherche.

	*/

	$ch2 = str_replace('Bonjour', 'Aurevoir', $ch);

	echo  $ch . ' <br> devient  <br>' . $ch2 . '<br><br>';


	$ch3 = str_shuffle($ch2);

	echo $ch2 . ' <br> va etre mélangée. Etes-vous prèt ? <br> ' . $ch3 . '<br><br>';

	$ch4 = ' TU PARLES TROP FORT !!!!!' ;

	$ch5 = strtolower($ch4);

	$ch6 = strtoupper($ch5);

	echo '<br><br>' . $ch4 . ' en minuscule donne <br><br>' . $ch5 . '<br><br>' ;

	echo '<br><br> l\'inverse' . $ch5 . ' devient <br><br>' . $ch6 . '<br><br>' ; 

 ?>
