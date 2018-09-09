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
		<div class="container body" >

			<div class="main_container">
				<div class="col-md-3 left_col">
					<div class="left_col scroll-view">
						<div class="navbar nav_title" style="border: 0;">
								<a href="{{ url('/') }}" class="site_title"><i class="logo_side_bar" style="background-image: url('../img/thoth.ico')"></i> <span>Escriba</span></a>
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
						<div class="">
							<div class="page-title">
								<div class="title_left">
									<h3>@yield('page_title')</h3>
								</div>

								{{-- @include('gentelella.layouts.partials.htmlsearch') --}}
							</div>
							<div class="clearfix"></div>

							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									@yield('content')
									
								</div>
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
		
		<!-- jQuery -->
		@include('gentelella.layouts.partials.scripts')   

		
		{{--  Optional script Blades  --}}

		@stack('scripts')

	</body>
</html>
