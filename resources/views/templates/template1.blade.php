<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">

</head>
<body>
<div style="background-color:#0B3C5D" class="navbar navbar-inverse navbar-fixed-top " >
	<h1 style="color: white;"> @yield('cad')</h1>
	<div class="navbar">
		<ul>
			<li class="nav-item ">
		        <a class="btn btn-link" href="{{url('\login') }}">VOLTAR</a>
		    </li>
		</ul>
	</div>


@yield('content')

</div>
</body>
</html>