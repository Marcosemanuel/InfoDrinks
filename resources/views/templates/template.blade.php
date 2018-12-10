<!DOCTYPE html>
<html>
<head>
	<title>INFODRINKS</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  @yield('head')
</head>
<body style="background-color:#1D2731">
<!--	<ul class="nav" style="background-color:#122731;">
  <li class="nav-item">
    <a class="nav-link active" href="#" style="color: white">Active</a>
  </li> -->
  <nav id="navbar-example2" class="navbar navbar-light" style=" background-color:#1D2731; position: relative;" >
    <a class="navbar-brand"  style="color: white" href="{{url('/login') }}">INFODRINKS</a>

      <ul class="nav nav">
      @yield('nav')
          
      </ul>
</nav>
<div style="background-color:#1D2731">
	@yield('content')
<div>
 
</body>
</html>









