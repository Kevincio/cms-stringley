<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stringley Administration</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<div id="wrap">
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/')}}">PurchaseSeal Merchants</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/preRegistration">Register</a></li>
					<li><a href="#about">Login</a></li>
					<li><a href="http://www.purchaseseal.com/" target="_blank">About</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>

	@yield('content')

	<div id="push"></div>
</div>
<div id="footer" class="footer">
	<div class="container">
		<div class="col-md-6">
			<p><a href="#">Terms and Conditions</a></p>
		</div>
		<div class="col-md-6">
			<p class="text-right"><small>&copy; PurchaseSeal 2014</small></p>
		</div>
	</div>
</div>
</body>
</html>