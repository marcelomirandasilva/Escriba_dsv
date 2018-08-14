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

		{{-- faz o include das mesnsagens de erro --}}
		{{-- @include('includes/mensagens') --}}
		

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

						<div class="form-group">
							<label class="col-sm-4 control-label"> 
								Associar a Membro 
							</label>
							<input  class="col-sm-4" type="checkbox" id="associa"  name="associa" checked
								style="height: 25px;width:25px;margin-left: 13px;" value="true">
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label"> 
								Membro Associado
							</label>
							<div class="col-sm-5">
								<select name="membro_id" class="form-control" id="membro" >
									<option value=""> ---- </option>  
									@foreach($membros as $membro)
											<option value="{{$membro->id}}"> {{$membro->no_membro}} -  {{ number_format($membro->co_cim,0,",",".")  }}   </option>  
									@endforeach
								</select>
							</div>
						</div>

						{{-- Campo Nome --}}
						<div class="form-group">

							<label for="nome" class="col-sm-4 control-label">Nome</label>

							<div class="col-sm-5">
								<input value="{{ $usuario->name or old('name') }}" name="name_v" type="text" class="form-control" id="nome_v" placeholder="Nome" disabled>
								<input value="{{ $usuario->name or old('name') }}" name="name" type="hidden" class="form-control" id="nome" >
							</div>
						</div>

						<!-- Campo Email -->

		    			<div class="form-group">

		    				<label for="email" class="col-sm-4 control-label">Email</label>

		    				<div class="col-sm-5">
								<input value="{{ $usuario->email or old('email') }}" name="email_v" type="email" class="form-control" id="email_v" placeholder="Email" disabled>
								<input value="{{ $usuario->email or old('email') }}" name="email" type="hidden" class="form-control" id="email">
		    				</div>

		   				</div>

		   				{{-- Campo Senha --}}

						<div class="form-group">
							<label for="senha" class="col-sm-4 control-label">Senha</label>
							<div class="col-sm-2">
								<input value="" name="password" type="password" class="form-control" id="password" placeholder="Senha">
							</div>
							<label for="confirmarsenha" class="col-sm-1 control-label">Confirmação</label>
							<div class="col-sm-2">
								<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmar Senha">
							</div>
						</div>

						{{-- Campo Nova Senha --}}

						{{-- <div class="form-group">
							<label for="confirmarsenha" class="col-sm-4 control-label">Confirmar Senha</label>
							<div class="col-sm-4">
								<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirmar Senha">
							</div>
						</div> --}}

						
						{{-- Campo de Seleçao --}}

						<div class="form-group">
							<label for="admin" class="col-sm-4 control-label">Tipo de Usuário</label>
							<div class="col-sm-5">
								<select name="acesso" class="form-control" id="tipodeususario">
									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($tipo_acesso as $acesso)
											@if ( $usuario->acesso == $acesso)
												<option value="{{$acesso}}" selected="selected"> {{$acesso}} </option>
											@else
												<option value="{{$acesso}}"> {{$acesso}} </option>    
											@endif
										@endforeach
									@else
										@foreach($tipo_acesso as $acesso)
											@if ( $acesso == "PADRÃO")
												<option value="{{$acesso}}" selected="selected"> {{$acesso}} </option>
											@else
												<option value="{{$acesso}}"> {{$acesso}} </option>    
											@endif
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

@push('scripts')
	<script type="text/javascript" >
		@if (session('sucesso'))
			swal({
				title:  'Parabéns',
				text:   ' {!! session('sucesso') !!}',
				type:   'success'
			});
		@endif

		@if( count($errors) > 0)
			console.log("errrrrr");
			
			@foreach($errors->all() as $erro)
				$.notify({
					icon: 'fas fa-exclamation-triangle',
					message: "{!! $erro !!}" , 
				},{
					type: 'danger',
				});
				
			@endforeach
		@endif

			

		$(function(){

			//testa se o checkbox associa esta marcado 
			$("#associa").change(function() {
				if ($('#associa').is(':checked')){
					document.getElementById("membro").disabled=false;
					document.getElementById("nome_v").disabled=true;
					document.getElementById("email_v").disabled=true;
					
					document.getElementById("nome").value = "";
					document.getElementById("email").value = "";
					document.getElementById("nome_v").value = "";
					document.getElementById("email_v").value = "";

				} else {
					document.getElementById("membro").selectedIndex = "0";
					document.getElementById("nome").value = "";
					document.getElementById("email").value = "";
					document.getElementById("nome_v").value = "";
					document.getElementById("email_v").value = "";
 
					document.getElementById("membro").disabled=true;
					document.getElementById("nome_v").disabled=false;
					document.getElementById("email_v").disabled=false;
				}
			})
			
			$("#membro").change(function() {
				//coloca o conteudo selecionado no slect dentro da variável
				var selecionado = $("#membro :selected").text();
				// retira do texo tudo o que está após o '-' ficando somente o nome do membro
				var texto = selecionado.substring(0, selecionado.indexOf("-"));
				//console.log(texto);
				//coloca o nome do mebro selecionado no valor do input
				document.getElementById("nome").value = texto;
				document.getElementById("nome_v").value = texto;

				//coloca os membros vindos do controller na variável
				var me = {!!$membros!!};
				
				//coloca na variável o index do membro selecionado (subtraindo 1 pq o 1º valor do seles é "-----")
				var idx = document.getElementById("membro").selectedIndex - 1;

				//coloca o email do mebro selecionado no valor do input
				document.getElementById("email").value = me[idx]['email'];
				document.getElementById("email_v").value = me[idx]['email'];

			})
			
		});

	</script>
@endpush


