	<nav class="navbar navbar-dark unique-color-dark">
		<div class="container">
		    <div class="navbar-expand-md">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarNav">
			        <ul class="navbar-nav">
			            <li class="nav-item">
			                <a class="nav-link" href="#">Home</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link" href="#">News</a>
			            </li>
			            <li class="nav-item">
			                <a class="nav-link" href="#">Pricing</a>
			            </li>
			        </ul>
			    </div>
			</div>
		    <span class="navbar-text">
		    	<?php if(!isset($_SESSION['user'])) { ?>
		    		<a href="index.php?id=log-page&title=Login" class="btn btn-sm btn-outline-white">Login</a>
		    	<?php } else { ?>
		    	<div class="btn-group drop-left">
		    		<a class="btn btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        <?= $_SESSION['user'] ?>
				    </a>
		    		<div class="dropdown-menu">
			        	<a href="logout.php"><button class="btn btn-sm btn-primary">Logout</button></a>
				    </div>
				    <img src="assets/img/bem.png" height="30" style="margin-left:10px">
				</div>
		    	<?php } ?>
		    </span>
		</div>
		
	</nav>