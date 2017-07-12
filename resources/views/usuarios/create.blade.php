@extends('layouts.blank')

@push('stylesheets')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')
	<!-- page content -->
	{{-- Mostrar os erros de validação --}}

   
	<div class="right_col" role="main">

		@include('includes/mensagens')
		

		<div class=""> </div>
		<div class="clearfix"></div>
		<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">

			
			
			<div class="x_panel modal-content">
				
				<div class="x_title">
					<h2> {{ $titulo  }} </h2>
					<div class="clearfix"></div>
				</div>

				<div class="x_content">

					<form action="{{ url("usuarios") }}" method="post" class="form-horizontal" id="form-cadastro-usuario">

						{{ csrf_field() }}

						{{-- Campo Nome --}}
						<div class="form-group">

							<label for="nome" class="col-sm-4 control-label">Nome</label>

							<div class="col-sm-4">
								<input value="{{ $usuario->name or old('name') }}" name="name" type="text" class="form-control" id="nome" placeholder="Nome">
							</div>
						</div>

						<!-- Campo Email -->

		    			<div class="form-group">

		    				<label for="email" class="col-sm-4 control-label">Email</label>

		    				<div class="col-sm-4">
		     	 				<input value="{{ $usuario->email or old('email') }}" name="email" type="email" class="form-control" id="email" placeholder="Email">
		    				</div>

		   				</div>

		   				{{-- Campo Senha --}}

						<div class="form-group">
							<label for="senha" class="col-sm-4 control-label">Senha</label>
							<div class="col-sm-4">
								<input value="" name="password" type="password" class="form-control" id="password" placeholder="Senha">
							</div>
						</div>

						{{-- Campo Nova Senha --}}

						<div class="form-group">
							<label for="confirmarsenha" class="col-sm-4 control-label">Confirmar Senha</label>
							<div class="col-sm-4">
								<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmar Senha">
							</div>
						</div>

						
						{{-- Campo de Seleçao --}}

						<div class="form-group">
							<label for="admin" class="col-sm-4 control-label">Tipo de Usuário</label>
							<div class="col-sm-4">
								<select name="admin" class="form-control" id="tipodeususario">
									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($tipo_acesso as $acesso)
											@if ( $usuario->acesso == $acesso)
												<option value="{{$acesso}}" selected="selected"> {{$acesso}} </option>
											@else
												<option value="{{$acesso}}"> {{$acesso}} </option>    
											@endif
										@endforeach
									@else
										<option value=""> ---- </option>  
										@foreach($tipo_acesso as $acesso)
											<option value="{{$acesso}}"> {{$acesso}} </option>  
										@endforeach
									@endif
								</select>
							</div>
						</div>	
						
						<!----------- botoes ----------> 
						<div class="ln_solid"> </div>
						<div class="col-md-3 col-md-offset-9">

							<a href="{{ url("usuarios") }}"
				  				class="btn btn-danger  pull-right" 
				  				data-toggle="tooltip" 
				  				title="Cancela e retorna a tela anterior">  
				  				Cancela
			  				</a>

					  		<button id="send" 
			  					type="submit" 
			  					class="btn btn-success  pull-right"
			  					data-toggle="tooltip" 
			  					title="Confirma a operação">  
						  		Confirma    
					  		</button>							

						</div>
						<!----------- fim botoes ---------->
					</form>
				</div>
			</div>
		</div>
	</div>


@endsection