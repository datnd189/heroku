<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>blog</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Latest compiled and minified CSS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
	@include('inc.slide')
		<div id="body" class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				@include('inc.messages')
				@yield('content')
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				@include('inc.sidebar')
			</div>
		</div>
	</div>

	<footer id="footer">
		<div class="text-center">
			<p>Copyright &copy; 2017 by Nguyen Duc Dat</p>
		</div>
	</footer>
</body>
</html>