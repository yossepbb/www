<div id="age">
	<br>
	<?php 

		$note = 10 ;

		// si l'authorisation est vrai. une autre ecriture de authorization == true
		if ( $note == 0) 
		{
			echo 'Tu es vraiment un gros Zéros !'; 
		}

		// sinon si l'authorisation est fausse. une autre ecriture de authorization == fausse
		elseif( $note == 5)
		{
			echo 'Tu es très mauvais !';	
		}

		elseif ($note == 9)
		{
			echo 'encore des efforts !';
		}

		elseif ($note == 10)
		{
			echo 'tu peux faire mieux !';
		}

		elseif ($note == 12)
		{
			echo 'tu es au dessus de la moyenne !';
		}

		elseif ($note == 15)
		{
			echo 'Bon élève !';
		}

		elseif ($note == 19)
		{
			echo 'Très bien !';
		}

		elseif ($note == 20)
		{
			echo 'Major de la promo !';
		}

		else
		{
			echo 'Absent au devoir !!!';
		}
	?>

	<br>

</div>