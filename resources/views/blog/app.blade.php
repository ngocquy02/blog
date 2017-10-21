<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="{{asset('bootstrap-twitter/css/bootstrap.min.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('materialize/css/materialize.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">

</head>
<body>
	<nav class="light-blue lighten-1">
		<div class="nav-wrapper container">
			<a href="#!" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			
			<ul class="right hide-on-med-and-down">
				
				<li><a href="sass.html">Sass</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="sass.html">Sass</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		
	</div>
          

	<script type="text/javascript" src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap-twitter/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
</body>
</html>