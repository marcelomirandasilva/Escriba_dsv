@extends('layouts.app')


@section('conteudo')


	<!-- page content -->
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel modal-content">
				<div class="x_title">
					<h2> {{ $titulo }} </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content ">
					<form action="{{ url("usuarios/$usuario->id") }}" method="post" class="form-horizontal" id="form-cadastro-usuario">
						{{ method_field('PUT') }}

						{{ csrf_field() }}

						<div class="col-md-2 col-md-offset-10">
				 			<img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; position:absolute; height: 150px; float: right; border-radius: 50%; margin-right: 25px; ">
			        	</div>

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

						{{-- Campo de Seleçao --}}

{{-- 						<div class="form-group">
							<label for="acesso" class="col-sm-4 control-label">Tipo de Usuário</label>
							<div class="col-sm-4">
								<select name="acesso" class="form-control" id="acesso">
									@foreach($tipo_acesso as $acesso)
										@if ( $usuario->acesso == $acesso)
											<option value="{{$acesso}}" selected="selected"> {{$acesso}} </option>
										@else
											<option value="{{$acesso}}"> {{$acesso}} </option>    
										@endif
									@endforeach
								</select>
							</div>
						</div>	
 --}}						
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
	
	<!-- /page content -->

	<!-- footer content -->
	<footer>
			<div class="pull-right"> V0.1_2017</a> </div>
			<div class="clearfix"></div>
	</footer>
  <!-- /footer content -->
@endsection
