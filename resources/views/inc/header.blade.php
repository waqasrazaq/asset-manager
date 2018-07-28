<!DOCTYPE html>
<html>
<head>
	<title>Asset Manager</title>
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
	<script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">Asset Manager</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
					</li>
					<li>
						<a href="{{ url('/add') }}">Add</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>