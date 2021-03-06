<!DOCTYPE html>
<html>
<head>
	@include('template.partials.head')
	<link rel="shortcut icon" href="{{ asset('dist/img/systemiqa/eternoslimpio.jpg') }}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	@include('template.partials.nav')

	<section>

		@yield('content')

	</section>

	<footer class="main-footer">
	  <div class="pull-right hidden-xs">
	    <b>Version SystemIQA</b> 1.5
	  </div>
	  <div class="pull-left">
	<img src="{{ asset('dist/img/systemiqa/UES.ico')}}"  class="pull-left  img-rounded img-responsive " height="25" width="25	" alt="Responsive image">

	  </div>
	  <strong>Copyright &copy; 2016 - <a href="#">Universidad de El Salvador</a>.</strong>  FIA-UES Todos los derechos reservados.

	</footer>


	@include('template.partials.import_script')
	@include('template.partials.load')

	@yield('js')


</body>
</html>
