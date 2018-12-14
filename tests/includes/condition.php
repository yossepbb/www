<div id="age">


	<br>
	<?php 
		/*
			Les conditions permettent à PHP de prendre des décisions en fonction de la valeur d'une variable
			- La forme de condition la plus courante est if.....elseif...else
			- On peut combiner des conditions avec les mots AND et OR
			- Si une condition comporte de nombreux elseif, il est plus pratique d'utiliser un switch.
		*/
		$age = 22;

		// si l'age est inferieur ou egal a 18 ans
		if ( $age <= 18) 

		{

			echo '<strong> Salut gamin ! Bienvenue sur mon site. Tu deviendras une encyclopedie ici :-) </strong><br> '  ;
			$authorization_enter = 'oui '; 
			
		}

		// Sinon l'age est superieur a 18 ans
		else 
		{
			echo '<strong>Salut Adulte ! Tu n\'es pas le Bienvenue ici :-( </strong><br> ';
			$authorization_enter = 'Non';
		
		}

		echo 'Avez-vous l\'autorisation d\'entrer ?: <br> >>>  ' . $authorization_enter . '.' ;
	?>

	<br>

</div>