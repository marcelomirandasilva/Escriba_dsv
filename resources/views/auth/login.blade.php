<!DOCTYPE html>
<html lang="pt-br">
	@section('htmlheader_title', 'Login')
	@include('gentelella.layouts.partials.htmlheader')

	<body class="login">

		<div id="app"> 
			<a class="hiddenanchor" id="signup"></a>
			<a class="hiddenanchor" id="signin"></a>
			<div class="cor_fundo_menu" style="width:100%; height:150px; text-align: center;">
				<img class="logo_topo" src="{{ asset("img/thoth.ico") }}">
			</div>

			<div class="login_wrapper">
				{{--  login  --}}
				<div class="animate form login_form">
					<section class="login_content">
						<form method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							
							<h1 class="cor_texto_roxo">Escriba</h1>
							
							<div>
								<input id="email" type="email" placeholder="E-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
								
								@if ($errors->has('email'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
							<div>
								<input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
								
								@if ($errors->has('password'))
								<span class="invalid-feedback">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembre de mim
								</label>
							</div>
							<div>
								<button type="submit" class="btn btn-default submit">
									Entrar
								</button>               
								
								
							</div>
							
							<div class="clearfix"></div>
							
							
						</form>
					</section>
				</div>
		
			</div>
		</div>

		<!-- jQuery -->
		@include('gentelella.layouts.partials.scripts_login')  
		
		

	</body>
</html>