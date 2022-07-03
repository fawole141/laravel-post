<!DOCTYPE html>
<html>
<head>
	<title>Post</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-green-100">
	<nav>
	<ul>
		@if(auth()->user())
		<a href="">Home</a> 
			<a href="">Post</a> 
			<a href="">Dashboard</a>
				<li style="float: right;">
			Michael Fawole
			<a href="">Logout</a> 
			
		</li>
@else

<a href="">Register</a> 
			<a href="">Login</a>
		@endif
	
	</ul>
</nav>

@yield('content')
</body>
</html>