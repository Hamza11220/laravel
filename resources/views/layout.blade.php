<!DOCTYPE html>
<html>
<head>
	<title>app name - @yield('title')</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
	@section('navbar')
	<nav class="navbar navbar-expand-sm bg-dark">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('welcome')}}">Welcome</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('form')}}">Form</a>
			</li>
			<li class="nav-item">
				<a id="index" class="navbar-brand" href="{{url('info')}}">Info</a>
			</li>
			
		</ul>
		
	</nav>
@show
</body>
</html>