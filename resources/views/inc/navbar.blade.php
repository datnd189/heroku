<nav class="navbar navbar-dark bg-dark" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Blog</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="#">Home</a></li>
				<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="about">About</a></li>
				<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="contact">Contact</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>