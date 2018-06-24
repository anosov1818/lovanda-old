<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 3.0 License

Name       : Accumen
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120712

Modified by VitalySwipe
-->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Lovanda | Dating Service</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/style.css" />
        <link href="https://fonts.googleapis.com/css?family=Comfortaa|Oxygen|Raleway|Sarala|Work+Sans" rel="stylesheet">
        <script src="<?php print HTTP; ?>js/jquery-1.6.2.js" type="text/javascript"></script
	</head>
	<body>
		<div id="menu">
			<ul>
				<li #id="logo" class="first active"><a href="<?php print HTTP; ?>">Lovanda</a></li>
				<li class="first active"><a href="<?php print HTTP; ?>">Home</a></li>
				<li><a href="<?php print HTTP; ?>services">Dating</a></li>
				<li><a href="<?php print HTTP; ?>portfolio">Messages</a></li>
				<li><a href="<?php print HTTP; ?>contacts">About</a></li>
				<li><a href="<?php print HTTP; ?>contacts">Contacts</a></li>
				<li class="last"><a href="<?php print HTTP; ?>contacts">Login / Sign Up</a></li>
			</ul>
			<br class="clearfix" />
		</div>
		<div id="wrapper">
			<div id="page">
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						<!--
						<h2>Welcome to Accumen</h2>
						<img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
						<p>
							This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
						</p>
						-->
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
		<div id="footer">
			<a href="<?php print HTTP; ?>">Lovanda</a> &copy; 2018</a>
		</div>
	</body>
</html>