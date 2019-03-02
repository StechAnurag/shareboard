<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">	
			  <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">Shareboard</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
			      </li>
			    </ul>

			    <ul class="nav navbar-nav navbar-right">
					<?php if (isset($_SESSION['is_user_loggedin'])): ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo ROOT_URL; ?>"><span style="color:#FF5733">Welcome </span><?php echo $_SESSION['user_data']['name']; ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout"><button class="btn btn-outline-warning">Logout</button></a>
						</li>
					<?php else : ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
						</li>
					<?php endif; ?>
			    </ul>
			    <!-- <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form> -->
			</div>
		  </div>
	</nav>
	<main role="main" class="container">
		<?php Messages::displayMsg(); ?>
	    <?php require($view); ?>
	</main>
	
</body>
</html>