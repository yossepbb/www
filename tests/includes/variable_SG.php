<pre>
	
	<?php 
		// initialisation d'un cookie
		// 3 params sont importants:
		/*
		
			1- le nom du cookie: ici pseudo
			2- la valeur du cookie ici Joseph
			3- le timestamp ici est égal à time() + 365*24*3600 qui coorespond à la date de suppression du cookie donc 1 an
			4- les dernieres options servent à sécuriser le cookie du visiteur.
			// Le dernier true permet de reduire les risques de faille XSS en activant le mode httpOnly sur le cookie.Donc de le rendre en quelques sortes plus sécurisé. au cas ou 
			vous aurez oublié d'utiliser la fonction htmlspecialchars()

			A placer toujours avant le code HTML comme sesion_start()
		*/

		setcookie('pseudo', 'johnDoe',time() + 365*24*3600, null, null, false, true);
		setcookie('pays', 'CAMEROUN', time() + 365*24*3600, null, null, false, true);


		print_r($_SERVER);

		echo "<br>";
	
		print_r($_COOKIE);

		echo time() + 365*24*3600;

	 ?>



</pre>