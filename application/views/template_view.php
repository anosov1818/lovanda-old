<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Lovanda | Dating Service</title>
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php print HTTP; ?>css/style.css" />
	</head>
	<body>
		<div id="menu">
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
		</div>
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