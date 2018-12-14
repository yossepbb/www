<?php 

	// $repetitions = 0;

	// // premiere boucle avec while

	// while ( $repetitions < 10) // condition d'arret est repetition inferieur à 10.
	// {
	// 	echo "--------------------------------";

	// 	// instruction à exécuter
	// 	echo '<p> Je suis le seul responsable de la situation dans laquelle je me retrouve actuellement. </p> <br>';
	// 	echo '<p> ca fait  ' . $repetitions . '  fois que tu dis ca ! </p><br>';

	// 	// le pas . ici on incremente la valeur de la variable répetition pour créer la répetition jusqu'a la condition d'arret.
	// 	// cette instruction est obligatoire dans la boucle while.
	// 	$repetitions ++;
	// }


	// Boucle For.

	/* La boucle FOR est identique à la boucle while. 
	 	La différence est que FOR rassemble la condition de départ, d'arret et le pas.
		FOR est bien adapté quand on doit compter le nombre de fois que l'on répète les instructions et permet de ne pas oublier 
		l'incrementation pour augmenter la valeur de la variable. 
	*/

	for ($i=0; $i < 10 ; $i++)
	{ 

		// instruction à exécuter
		?>
		
		<p> -------------------------------- </p> <br>
		<p> Je suis le seul responsable de la situation dans laquelle je me retrouve actuellement. </p> <br>
		<?php 
		echo '<p> ca fait  ' . $i .  ' fois que tu dis ca ! </p><br>';
	}

	/*
	Comment savoir lequel prendre entre while et for?

	Si vous savez d'avance combien de fois je veux que mes instructions soient répétées?
		- Oui alors prendre FOR
		- Non alors prendre while.

	En résumé les boucles demande à PHP de répéter des instructions plusieurs fois
	*/

?>