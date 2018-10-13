<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<title>Escriba</title>
	
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			
		
		@stack('styles')
		
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">      
</head>

	
	<body class="nav-md">
		<div class="container body"  >

			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
								<a href="{{ url('/') }}" class="site_title"><i class="logo_side_bar" 
									style="background-image: {{ asset('/img/thoth.ico')}}"></i> <span>Escriba</span></a>
						</div>

						<div class="clearfix"></div>

						<!-- menu profile quick info -->
						{{-- @include('gentelella.layouts.partials.htmlprofile') --}}
						<!-- /menu profile quick info -->
						
						<!-- sidebar menu -->
						@include('gentelella.layouts.partials.sidebar')
						<!-- /sidebar menu -->

						<!-- /menu footer buttons -->
						@include('gentelella.layouts.partials.footerbuttons')
						<!-- /menu footer buttons -->
					</div>
				</div>
				<div id="app">
					<!-- top navigation -->
					@include('gentelella.layouts.partials.mainheader')
					<!-- /top navigation -->

					<!-- page content -->
					<div class="right_col" role="main" >
						<div class="clearfix"></div>

						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">

								@yield('content')
									
							</div>
						</div>
					</div>
					<!-- /page content -->
				
				</div>
				<!-- footer content -->
				@include('gentelella.layouts.partials.htmlfooter')
				<!-- /footer content -->
			</div>
		</div>

		<script>
			//variáveis globais ao sistema
			let url_base       = "{{ url("/") }}"; 
		</script>   
		
		<!-- scripts -->
		<script src="{{ mix('/js/app.js')}}"></script>
		{{-- <script src="{{ asset('js/notify.js') }}"></script> --}}
		<script src="{{ mix('/js/components.js')}}"></script>
		
		<script type="text/javascript">
			$(document).ready(function() {
				/* Para que el panel blanco area de contenido ocupe todo el contenedor */
				//$RIGHT_COL.css({'min-height':"100%"});
				$('.right_col').css({'min-height':"100%"});
			});
		</script>
		@yield('scripts_blade')
		@stack('scripts')
  

		
		{{--  Optional script Blades  --}}

	</body>
</html>
