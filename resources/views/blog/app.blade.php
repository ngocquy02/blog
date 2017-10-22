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
	<link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">

</head>
<body>
	<nav class=" nav-top lighten-1">
		<div class="nav-wrapper container">
			<a href="#!" class="brand-logo">Logo</a>
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<form>
				<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
			</form>
			<ul class="right hide-on-med-and-down">
				
				<li><a href="sass.html">Sass</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
				<li><a href="sass.html">Sass</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
	        <div class="menu-left col-12 col-md-3 col-xl-3">
	        	<div class="info-author">
	        		<h2 class="menu-h2">Danh mục</h2>
	        		<ul class="list-group">
		        		<li class="list-group-item">
							<a href="">salkjáhd</a>
		        		</li>
	        		</ul>
	        	</div>
				
	        	<div class="info-author">
	        		<h2 class="menu-h2">Chuyên mục</h2>
	        		<ul class="list-group">
		        		<li class="list-group-item">
							<a href="">salkjáhd</a>
		        		</li>
	        		</ul>
	        	</div>
	        	
	        </div>
	        <div class="content col-md-9">
	        	
	        </div>
      	</div>
	</div>
          

	<script type="text/javascript" src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('bootstrap-twitter/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('materialize/js/materialize.min.js')}}"></script>
	<script type="text/javascript">
		$(".button-collapse").sideNav();
	</script>
</body>
</html>