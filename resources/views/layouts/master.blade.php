<!DOCTYPE html>
<html>

<head>
	<title>
		@yield('title', 'A4')
	</title>

	<meta charset='utf-8'>
	<link href="/css/bootstrap.css" type='text/css' rel='stylesheet'>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type='text/css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coda">
	<link href="/css/a4.css" type='text/css' rel='stylesheet'> @stack('head')

</head>

<body>

	<header>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<a class="navbar-brand" href="/">A4</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if(Auth::check())
						<li class="nav-item"><a href='/home'>Home</a></li>
						<li class="nav-item">
							<form method='POST' id='logout' action='/logout'>
								{{csrf_field()}}
								<a href='#' onClick='document.getElementById("logout").submit();'>Logout</a>
							</form>
						</li>
						@else
						<li><a href='/home'>Home</a></li>
						<li><a href='/login'>Login</a></li>
						<li><a href='/register'>Register</a></li>
						@endif
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>

	<div class="container-fluid">
		<section>
			@yield('content')
		</section>
	</div>

	<footer>
		John Lubinski &copy; {{ date('Y') }}
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	@stack('body')

</body>

</html>
