<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Lovanda | Dating Service</title>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/style.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/materialize.css" />
		<script src="<?php print HTTP; ?>js/materialize.min.js"></script>
	</head>
	<body>
        
<div class="navbar-fixed">
		<nav class="nav-wrapper indigo darken-4">
			<div class="container">
		<a href="#" class="brand-logo">Lovanda</a>
		<a href="#" class="sidenav-trigger" data-target="mobile-links">
			<i class="material-icons">menu</i>
		</a>
				<ul class="right hide-on-med-and-down">
							<li><a href="<?php print HTTP; ?>">Home <span class="sr-only">(current)</span> </a></li>
							<li><a href="<?php print HTTP; ?>dating">Dating</a></li>
							<li><a href="<?php print HTTP; ?>messages">Messages</a></li>
							<li><a href="<?php print HTTP; ?>about">About</a></li>
							<li><a href="<?php print HTTP; ?>contact">Contact</a></li>
				</ul>
</div>

 	</nav>

				<ul class="sidenav" id="mobile-links">
					<li><a href="<?php print HTTP; ?>">Home <span class="sr-only">(current)</span> </a></li>
					<li><a href="<?php print HTTP; ?>dating">Dating</a></li>
					<li><a href="<?php print HTTP; ?>messages">Messages</a></li>
					<li><a href="<?php print HTTP; ?>about">About</a></li>
					<li><a href="<?php print HTTP; ?>contact">Contact</a></li>
				</ul>

</div>



		<!--<div id="wrapper" class="container">-->
			<div id="page" class="container">
				<div id="content" class="row my-row">
					<!--<div class="box">-->
                        <?php if(isset($data)) extract($data);?>
						<?php include 'application/views/' . $content_view; ?>
					<!--</div>-->
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
        <!--</div>-->
		<div id="footer">
			<a href="<?php print HTTP; ?>">Lovanda</a> &copy; 2018
		</div>
	  <script src="<?php print HTTP; ?>js/main.js" type="text/javascript"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

		<script>

  				$(document).ready(function(){
  					$(".sidenav").sidenav();
					});

  	</script>


	</body>
</html>
