<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>blog</title>
	<link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
	<!-- Latest compiled and minified CSS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
	@include('inc.slide')
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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