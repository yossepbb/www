
<?php 
	session_start();

	$LesProfs = array(

		'prof1' => array(
			'pseudo' => 'GEORGES',

			'mdp' => 123456 ),

		'prof2' => array(
			'pseudo' => 'JOSEPH',

			'mdp' => 654321 )
		 );


	if (isset($_POST['pseudo']) AND $_POST['mot_de_passe']) // test si user a bien saisi un pseudo et psswd
	{ 
		
		// second test si user est repertorié dans la BD
		$_POST['pseudo'] = strtoupper($_POST['pseudo']);

		if ($LesProfs['prof1']['pseudo'] == $_POST['pseudo'] AND $LesProfs['prof1']['mdp'] == $_POST['mot_de_passe'])
		{
			//  si oui il a accès à  l'espace membre alors on crée une session avec son pseudo
			$_SESSION['pseudo'] = $_POST['pseudo'];

			echo 'Yeah Welcome ' . $_SESSION['pseudo'] . ' ! ' ;
			?>
				<p> Vous pouvez acceder à votre espace ici .. <a href="espacemembre.php">Espace Membre</a></p>
			<?php
		}
		else
		{
			// sinon il est redirigé vers la page d'acceuil
			echo "pas membre";

			?>
			<p><a href="form.php">Deviens membre!</a></p>
			<?php
		}
	}

?>