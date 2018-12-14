<?php 

	// Le volume d'un cone est donné par la formule : 3.14*r^2*h/3

	function VolumeCone($rayon, $hauteur) //Declaration de la fonction VolumeCone qui prend en arg d'entrée deux parmas.
	{

		// formule de capture
		$formule = $rayon * $rayon * 3.14 * $hauteur * ( 1.0/3) ;

		// return car on a une argumentd de sorti
		return $formule;

	}

	// Appel de fonction
	$volume = VolumeCone(3,1);

	//  affichage du resulat plus besoin d'inrermédiaire

	echo 'le volume du cone est de :' . $volume. ' <br>';



 ?>