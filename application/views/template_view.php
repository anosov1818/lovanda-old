<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Lovanda | Dating Service</title>
		<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Oxygen|Raleway|Sarala|Work+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>

		<!-- TODO:FIX PHP LINKS -->

		<!-- <div id="menu">
			<ul>
				<li id="logo" class="first active"><a href="<?php print HTTP; ?>">Lovanda</a></li>
				<li class="first active"><a href="<?php print HTTP; ?>">Home</a></li>
				<li><a href="<?php print HTTP; ?>dating">Dating</a></li>
				<li><a href="<?php print HTTP; ?>message">Messages</a></li>
				<li><a href="<?php print HTTP; ?>about">About</a></li>
				<li><a href="<?php print HTTP; ?>contacts">Contacts</a></li>
				<li class="last"><a href="<?php print HTTP; ?>login">Login / Sign Up</a></li>
			</ul>
			<br class="clearfix" />
		</div> -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">Lovanda</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Dating</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Messages</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="#">About</a>
		      </li>
					<li class="nav-item">
		        <a class="nav-link" href="#">Contacts</a>
		      </li>
		    </ul>
			  <span class="navbar-text">
		      Login/SignUp
		    </span>
		  </div>
		</nav>




		<div id="wrapper">
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
        </div>
		<div id="footer">
			<a href="<?php print HTTP; ?>">Lovanda</a> &copy; 2018
		</div>
        <script src="<?php print HTTP; ?>js/main.js" type="text/javascript"></script>
	</body>
</html>
