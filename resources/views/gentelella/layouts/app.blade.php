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
		{{-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet"> --}}
		<link href="{{asset('/css/font_google_apis.css')}}" rel="stylesheet">

		{{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> --}}

		<link href="{{asset('/css/font-awesome.css')}}" rel="stylesheet">
			
		
		<link href="{{ asset('datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

		
		<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	
		<link rel="stylesheet" href="{{ mix('/css/app.css') }}">      
	</head>

	
	<body class="nav-md">
		<div class="container body"  >
			<div >

				<div class="main_container" >
					<div class="col-md-3 left_col">
						<div class="left_col scroll-view">
							<div class="navbar nav_title" style="border: 0;">
								<a href="{{ url('/') }}" class="site_title">
									<img class="logo_side_bar" src="{{ asset("img/thoth.ico") }}">
									<span>Escriba</span>
								</a>
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
					
					<!-- top navigation -->
					@include('gentelella.layouts.partials.mainheader')
					<!-- /top navigation -->
					<div id="root">

						<!-- page content -->
						<div class="right_col" role="main" style="min-height: 583px;" >
							<div class="clearfix"></div>

							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">
									<!---------------------- Mostra os erros de validação ------------------------------>
									@if( count($errors) > 0 )
										<div class="alert alert-danger alert-dismissible" role="alert">
											@foreach($errors->all() as $erro)
													<p> {{ $erro }} </p>
											@endforeach
										</div>
									@endif
									<!------------------------------------------------------------------------------------>

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
		</div>
		
		<script>
			//variáveis globais ao sistema
			let url_base       = "{{ url("/") }}"; 
		</script>   
		
		<!-- scripts -->
		<script src="{{ mix('/js/app.js')}}"></script>
		
		<script src="{{ mix('/js/components.js')}}"></script>
		
		@yield('scripts_blade')
		@stack('scripts')
  

		
		{{--  Optional script Blades  --}}

	</body>
</html>
