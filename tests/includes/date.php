
		<!-- date du jour -->
		<div id="date">
			
			<?php 
				$annee = date('Y');
				$jour = date('d');
				$mois = date('m');
				$heure = date('h:i:s');
				echo "Aujourd'hui nous sommes :<br><br>";

				echo '-----------------------------------------------<br>';
				echo  'date_du_jour :' . $jour . '/ ' . $mois . '/ ' . $annee . '  | ' . $heure . ' |<br>' ;
				echo '-----------------------------------------------<br>'; 
			?>

			
		</div>
		
		