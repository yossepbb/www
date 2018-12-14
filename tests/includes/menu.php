<!-- Menu -->

	<div id="nav">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="LandingPage.php" target="_blank">Home</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				   <!--  <ul class="navbar-nav mr-auto">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Methodes <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Quiz</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Cours
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item " href="membreForm.php">francais</a>


				          <a class="dropdown-item" href="membreForm.php">Mathématiques</a>
				          
				          <a class="dropdown-item" href="membreForm.php">Latin</a>
				          <a class="dropdown-item" href="membreForm.php">Informatique</a>
				        </div>
				      </li>
				    </ul> -->
				      <div class="dropdown-divider"></div>
				      	<ul class="navbar-nav mr-auto">
				      		
					      <li class="nav-item">
					        <a class="nav-link id" href="cible.php" style="font-weight: bolder; color: green;" >
					        	<?php if (isset($_SESSION['nom'])) {echo $_SESSION['nom']; }; ?>	
					        </a>
					      </li>
				      	</ul>
				      	  
				    <form class="form-inline my-2 my-lg-0" method="POST" action="gamers.php">
				    	<label for="prix">Prix:</label>
				    	<input type="text" name="prix" placeholder="En euros">
				    	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				  </div>
				</nav>
			</div>



