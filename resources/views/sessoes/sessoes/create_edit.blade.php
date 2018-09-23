@extends('gentelella.layouts.app')

@push('styles')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('content')
	
	{{-- @include('gentelella.layouts.partials.mensagens') --}}

	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Cadastro de Sessão </h2>
			
			<div class="clearfix"></div>
		</div>
		<div class="x_content animated fadeInUp">
				
			@if( isset($loja))
			<form id="form_loja" method="post" action="{{ url("sessoes/$loja->id") }}" class="form-horizontal form-label-left" >
					{!! method_field('PUT') !!}
			@else
			<form id="form_loja" method="post" action="{{ route('sessoes.store') }}" class="form-horizontal form-label-left" >
			@endif
									
				{{ csrf_field() }}

				<div class="col-md-12  col-xs-12 ">
					<div class="form-group col-md-2 col-xs-12  ">
						<label class="control-label" for="dt_sessao">Data da Sessão</label>
						<input id="dt_sessao" class="form-control col-md-2 datas_input" name="dt_sessao"  
						type="date" min="1900-01-01" max="2050-01-01"
						value="{{$sessao->dt_sessao or old('dt_sessao')}}" autofocus>
					</div>

					<div class="form-group col-md-1 col-xs-12 ">
						<label class="control-label" for="hh_inicio">Inicio</label>
						<input id="hh_inicio" class="form-control col-md-2 horas_input" name="hh_inicio"  
						type="time" 
						value="{{$sessao->hh_inicio or old('hh_inicio') }}" >
					</div>

					<div class="form-group col-md-1 col-xs-12 ">
						<label class="control-label" for="hh_termino">Término</label>
						<input id="hh_termino" class="form-control col-md-2 horas_input" name="hh_termino"  
						type="time" 
						value="{{$sessao->hh_termino or old('hh_termino')}}" >
					</div>

					<div class=" form-group col-md-6 col-xs-12">
						<label class="control-label " for="ic_tipo_sessao"> Tipo da Sessão </label>
						<select   name="ic_tipo_sessao" id="ic_tipo_sessao" class="form-control col-md-2"	>
							<option value=""  selected style="color: #ccc;"> --- </option>
							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($tipos_sessao as $tipo)
									@if ( $sessao->ic_tipo_sessao == $tipo)
										<option value="{{$tipo}}" selected="selected">{{$tipo}}</option>
									@else
										<option value="{{$tipo}}">{{$tipo}}</option>  
									@endif
								@endforeach
							@else
								@foreach($tipos_sessao as $tipo)
									<option value="{{$tipo}}"> {{$tipo}} </option>    
								@endforeach
							@endif
						</select>
					</div>

					<div class="form-group col-md-2 col-xs-12 ">
						<label class="control-label " for="ic_grau"> Grau da Sessão </label>
						<select   name="ic_grau" id="ic_grau" class="form-control col-md-2">
							<option value=""  selected style="color: #ccc;"> --- </option>
							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($graus as $grau)
									@if ( $sessao->ic_grau == $grau)
										<option value="{{$grau}}" selected="selected">{{$grau}}</option>
									@else
										<option value="{{$grau}}">{{$grau}}</option>  
									@endif
								@endforeach
							@else
								@foreach($graus as $grau)
									<option value="{{$grau}}"> {{$grau}} </option>    
								@endforeach
							@endif
						</select>
					</div>


				</div>			

				<div class="col-md-12  col-xs-12 ">
					<div class="x_title">
						<h4> Presenças da Sessão </h4>
						<div class="clearfix"></div>
					</div>
					
					
					{{--  veneravel - orador secretario  --}}
					<div class="row">
						<div class="form-group col-md-4 col-xs-12 col-md-offset-1">
							<label class="control-label " for="veneravel"> Venerável </label>
							<select   name="veneravel" id="veneravel" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>


						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="orador"> Orador </label>
							<select   name="orador" id="orador" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>

						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="secretario"> Secretário </label>
							<select   name="secretario" id="secretario" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>
					</div>

					{{--  Tesoureiro - Chanceler - MC  --}}
					<div class="row">
						<div class="form-group col-md-4 col-xs-12 col-md-offset-1">
							<label class="control-label " for="tesoureiro"> Tesoureiro </label>
							<select   name="tesoureiro" id="tesoureiro" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>


						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="chanceler"> Chanceler </label>
							<select   name="chanceler" id="chanceler" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>

						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="mc"> Mestre de Cerimônias </label>
							<select   name="mc" id="mc" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>
					</div>


					{{--  1ºVG - 2ºVG - Cobridor  --}}
					<div class="row">
						<div class="form-group col-md-4 col-xs-12 col-md-offset-1">
							<label class="control-label " for="vg1"> Primeiro Vigilante </label>
							<select   name="vg1" id="vg1" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>


						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="vg2"> Segundo Vigilante </label>
							<select   name="vg2" id="vg2" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>

						<div class="form-group col-md-4 col-xs-12  ">
							<label class="control-label " for="cobridor"> Cobridor Interno </label>
							<select   name="cobridor" id="cobridor" class="form-control col-md-2" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@if (isset($edita)) 
									@foreach($membros as $membro)
										<option value="{{$membro->id}}" 
											@if ( $sessao->membro->no_membro == $membro->no_membro) 
												selected="selected"> 
											@endif
											{{$membro->no_membro}}</option>
									@endforeach
								@else
									@foreach($membros as $membro)
										<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
									@endforeach
								@endif
							</select>
						</div>
					</div>




				</div>


				<div class="clearfix"></div>

				<!----------- botoes ----------> 
				<botao_ok_cancel
					url_cancelar="{{ url("sessoes") }}"> 
				</botao_ok_cancel>
				<!----------- fim botoes ---------->
			</form>  
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
			var tempo = 0;
			var incremento = 500;
			// Testar se há algum erro, e mostrar a notificação
			@if( count($errors) > 0)
			
				@foreach ($errors->all() as $error)
					setTimeout(function(){
						$.notify("{{ $error }}", "warn");
						//demo.notificationRight("top", "right", "rose", "{{ $error }}");   
					}, tempo);
					tempo += incremento;
				@endforeach
			@endif

			
			@if (session('ja_existe'))
				swal('Atenção!', '{{ session('ja_existe') }}' ,'warning');
			@endif


			
			$('[data-toggle="modal"][title]').tooltip();

			$(".envia_nova_potencia").click(function(e){ 

				var potencia = $("input#no_potencia").val();
				var token = $("[name='_token']").val();

				$.post("/lojas/potencia/store", { no_potencia : potencia, _token : token }, function(dados){

					if(dados.id)
					{
						
						//$("<option value='dados.id' selected='selected'> dados.no_potencia </option>").appendTo("potencia_id");

						$('#potencia_id').append('<option value="' + dados.id + '" selected="selected">' + dados.no_potencia + '</option>'); 

						//console.log("Gravou a potência");
						//console.log(dados.id);

						 $('.fecha_modal').trigger('click');
						 
					}
				
				}).fail(function(dados){
					console.log(dados);
				});
			});




			{{-- Máscarasa dos campos CPF e RG --}}

			$(".cpf").inputmask("999.999.999-99");
			$(".rg").inputmask("99.999.999-9");
			$(".cep").inputmask("99.999-999");
			$(".data").inputmask("99/99/9999");
			$(".celular").inputmask("(99)99999-9999");
			$(".telefone").inputmask("(99)9999-9999");
		});

	</script>


@endpush




	