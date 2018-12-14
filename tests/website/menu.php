<!-- Menu -->

	<div id="nav">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<div id="nav logo" style="background-color: green; width: 50px; height: 50px; border: 1px solid grey; border-radius: 50%;">
						<img src="" alt="logo">
					</div>
				  <a class="navbar-brand" href="#">QUI SOMMES-NOUS ?<span class="sr-only">(current)</span></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">

				      <li class="nav-item active">
				        <a class="nav-link" href="#">SOLUTIONS ET OFFRES DE SERVICES</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">NOS ENGAGEMENTS</a>
				      </li>
				      <!-- <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Cours
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item " href="membreForm.php">francais</a>


				          <a class="dropdown-item" href="membreForm.php">Mathématiques</a>
				          
				          <a class="dropdown-item" href="membreForm.php">Latin</a>
				          <a class="dropdown-item" href="membreForm.php">Informatique</a>
				        </div>
				      </li> -->
				      <li class="nav-item">
				        <a class="nav-link" href="#">REFERENCES</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">DEVIS</a>
				      </li>
				      <div class="dropdown-divider"></div>
				      <li class="nav-item">
				        <a class="nav-link id" href="cible.php" style="font-weight: bolder; color: green;"><?php if (isset($_SESSION['pseudo'])) {echo $_SESSION['pseudo']; }; ?></a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				  </div>
				</nav>
			</div>
