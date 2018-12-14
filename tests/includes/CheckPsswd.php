<?php 

	function CheckPsswd($mdp)
	{
		
		$mdp2 = 'kangourou';  // init var pour verification passwd
		$code_secret = 'kirikou'; // var initialisé au code secret

		if($mdp == $mdp2)  // test si mot de passe est correct
		{

			echo $code_secret; // si c'est bon on affiche le code secret
			?>
				<p> Cette page est réservée au personnel de la Plateforme LesProfs. <em style="color: red;">N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines <br></em></p>
			<?php	
		}

		else  // si le mot de passe n'est pas bon on renvoie le formulaire
		{
			echo "Saisir a nouveau le mot de passe";

			?>
			
			<?php include('request_psswd.php'); ?>
			<?php

		}

	}

 ?>	
