<div id="age">

	<br>
	<?php 

		$note = 10 ;
		
		switch ($note) {

			case 0:
				echo 'Tu es vraiment un gros Zéros !'; 
				break;

			case 5:
				echo 'Tu es très mauvais !';
				break;

			case 9:
				echo 'encore des efforts !';
				
				break;

			case 10:
				echo 'tu peux faire mieux !';
				break;

			case 12:
				echo 'tu es au dessus de la moyenne !';
				break;

			case 15:
				echo 'Bon élève !';
				break;

			case 19:
				echo 'Très bien !';
				break;

			case 20:
				echo 'Major de la promo !';
				break;

			default:
				echo 'Absent au DS!';

				break;
		}

		echo "<br> FIN DU SWITCH !";
		
	?>

	<br>

</div>