<div id="age">
	<br>
	<?php 

		$age = 22;
		$ch1 = 'Majeur';
		$ch2 = 'Mineur';


		// si l'age est superieur ou egal a 18 ans alors vous etes majeur
		// if ( $age >= 18) 

		// {
		// 	echo 'Vous etes ' . $ch1 . ' ! ';
		// }

		// else // sinon vous etes mineur
		// {
		// 	echo 'Vous etes '. $ch2 . ' ! ';
		// }


		/* 
			Remplacons ce test par une expression ternaire
			Un ternaire est une condition condensée qui fait 2 choses sur une ligne:

			- on teste la valeur d'une variable
			- on affecte une valeur à une variable selon que la condition est vraie ou non.

		*/

		 /*
			1- Age est-il sup ou egal à 18 
			2- authorization_vote = oui 
		 */

		$authorization_vote = ( $age >= 18) ? 'Oui' : 'Non';

		echo ' Ai-je le droit de voter ? : <br> >>  ' . $authorization_vote . ' Mr' ;
		
	?>
	<br>

</div>