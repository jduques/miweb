<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Blog') </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.min.css') }}">	
	<link rel="stylesheet" href="{{ asset('plugins/fileinput/fileinput.min.css') }}">	
	<link rel="stylesheet" href="{{ asset('plugins/fontawesome/css/font-awesome.min.css') }}">	

</head>
<body>
	<div class="container">
		<section>
		@include('admin.template.nav')
		</section>
		<section>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="text-info">@yield('sub-title')</h4>
				</div>
				<div class="panel-body">
					@include('flash::message')
					@include('admin.template.error')
					@yield('content')
				</div>
			</div>
		</section>
		<section>
			
		</section>
	<footer>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="collapse navbar-collapse">
					<p class="navbar-text"> Todos los derechos reservados &copy {{ date('Y')}} </p>
					<p class="navbar-text navbar-right"><i class="fa fa-address-card" aria-hidden="true"></i>
<b>&nbspJavier Duque Sandoval</b></p>
				</div>
			</div>
		</nav>
	</footer>
	</div>

	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js')  }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')  }}"></script>
	<script src="{{ asset('plugins/chosen/chosen.jquery.js')    }}"></script>
	<script src="{{ asset('plugins/trumbowyg/trumbowyg.min.js') }}"></script>
	<script src="{{ asset('plugins/fileinput/fileinput.min.js') }}"></script>

	@yield('js')
</body>
</html>


  
  