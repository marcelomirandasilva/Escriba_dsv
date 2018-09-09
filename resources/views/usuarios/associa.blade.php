@extends('layouts.app')

@push('stylesheets')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

	
	<div class="right_col" role="main">

		@include('includes/mensagens')

		<div class=""> </div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel modal-content">
					<div class="x_title">
						<h2> Associação de Membro a Usuário </h2>
						<div class="clearfix"></div>
					</div>

						<div class="x_content">
								<form id="form_associa" method="post" action="{{ url("associa") }}" class="form-horizontal form-label-left" >
										{{ csrf_field() }}

									<div class="row" style="padding-bottom: 20px;">
										<div class="col-md-12">
											<label for="email" class="col-sm-2 control-label">Usuário</label>
											<div class="col-sm-4">
												<input value="{{ $usuario->name }} " name="nome_usuario" class="form-control" id="nome_usuario" disabled>
											</div>
											<input value="{{ $usuario->id }} " name="usuario_id" class="form-control" id="usuario_id" type="hidden">

											<label for="email" class="col-sm-1 control-label">Email</label>
											<div class="col-sm-4">
												<input value="{{ $usuario->email }} " name="email_usuario" class="form-control" id="email_usuario" disabled>
											</div>
										</div>
									</div>
							
									<div class="row" style="padding-bottom: 20px;">
										<div class="col-md-12">
											<label class="col-sm-2 control-label">Membro a associar</label>
											<div class="col-sm-4">
												<select name="membro_id" class="form-control" id="membro_associar" >
													<option value="" selected> ---- </option>  
													@foreach($membros as $membro)
														{{-- somente adiciona se o membro não estiver associado a algum usuário --}}
														@if( ! $membro->user) 
															<option value="{{$membro->id}}"> {{$membro->no_membro}} -  {{ number_format($membro->co_cim,0,",",".")  }}   </option>  
														@endif
													@endforeach
												</select>
											</div>
											<label for="email" class="col-sm-1 control-label">Email</label>
											<div class="col-sm-4">
											<input value="{{ $membro->email }}" name="email_membro"  class="form-control" id="email_membro" disabled>
										</div>
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
		</div>
	</div>



@endsection


@push('scripts')

	<!-- Adicionando JQuery  do correios para pegar endereço-->
	<!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->

	{{-- Script para máscara numérica. Ex.: CPF, RG --}}
	<script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

	{{-- Atualiza os campos do endereço de acordo com o cep digitado --}}
  	<script src="{{ asset("js/endereco.js") }}"></script>


	<!-- Adicionando Javascript -->
	<script type="text/javascript" >


		$(document).ready(function() {
			//quando o batão na tabela for acionado o select será posicionado no primeiro registro, que é o '---'
			$("table#tabela_usuarios").on("click", ".btn_associa",function(){
				document.getElementById("membro_associar").selectedIndex = 0;
				//limpa 
				/* document.getElementById("email_associar").value = ""; */
				document.getElementById("email_v_associar").value = "";
				document.getElementById("id_do_usuario").value = $(this).data('usuario');
				
			})

			//quando o select no modal mudar ele atualiza o input de EMAIL
			$("#membro_associar").change(function() {
				//coloca o conteudo selecionado no select dentro da variável
				var selecionado = $("#membro_associar :selected").text();
				
				// retira do texo tudo o que está após o '-' ficando somente o nome do membro
				var texto = selecionado.substring(0, selecionado.indexOf("-"));
				
				//console.log(texto);
				//coloca o nome do mebro selecionado no valor do input
				/* document.getElementById("email_associar").value = texto; */
				document.getElementById("email_membro").value = texto;

				//coloca os membros vindos do controller na variável
				var me = {!!$membros!!};
				
				//coloca na variável o index do membro selecionado (subtraindo 1 pq o 1º valor do seles é "-----")
				var idx = document.getElementById("membro_associar").selectedIndex - 1;

				//coloca o email do mebro selecionado no valor do input ou nulo caso seja selecionado o '---'
				if( idx < 0){
					/* document.getElementById("email_associar").value = ""; */
					document.getElementById("email_membro").value = "";
				}else{
					/* document.getElementById("email_associar").value = me[idx]['email']; */
					document.getElementById("email_membro").value = me[idx]['email'];
				}

			})
		});

	</script>


@endpush




	