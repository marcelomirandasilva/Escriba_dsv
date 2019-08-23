@extends('gentelella.layouts.app')
 
@section('content')
	

	<div class="x_panel modal-content">
		<div class="x_title">
			<h2> {{ $titulo }} </h2>
			
			<div class="clearfix"></div>
		</div> 
		<div class="x_content">
				
@if( isset($setup))

			<form id="form_loja" method="post" action="{{ url("setups/$setup->id") }}" class="form-horizontal form-label-left" >
					{!! method_field('PUT') !!}
@else
			<form id="form_loja" method="post" action="{{ route('setups.store') }}" class="form-horizontal form-label-left" >
@endif
				{{ csrf_field() }}

				
				<div class="item form-group">
					<div class="col-md-5">
						<label class="control-label " for="potencia_id">Potência*</label>
						<select id="potencia_id" class="form-control col-md-5 " name="potencia_id" placeholder="Nome da Potência" type="text" data-live-search="true" >

							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($potencias as $potencia)
									@if ( $setup->potencia_id == $potencia->id)
										<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
									@else
										<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>  
									@endif
								@endforeach
							@else
								@foreach($potencias as $potencia)
									@if ($potencia->no_potencia == ('Grande Oriente do Brasil'))
										<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
									@else 
										<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>
									@endif
								@endforeach
							@endif
						</select>

					</div>
				</div>
	
				<div class="item form-group">
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="co_titulo">Título*</label>
						<input id="co_titulo" class="form-control col-md-2" name="co_titulo" placeholder="ARLS" type="text"
							style="text-transform: uppercase;" autofocus value="{{$setup->co_titulo or old('co_titulo')}}" >
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12">
						<label class="control-label " for="no_loja">Nome*</label>
						<input type="no_loja" id="no_loja" name="no_loja" placeholder="Nome da Loja" required="required" class="form-control "
							type="text" value="{{$setup->no_loja or old('no_loja')}}" >
					</div>

					<div class="col-md-1 col-sm-1 col-xs-12" >
						<label class="control-label" for="nu_loja">Número*</label>
						<input type="nu_loja" id="nu_loja" name="nu_loja" placeholder="00000" required="required" class="form-control" type="number"
							min="0" max="9999999" step="1" value="{{$setup->nu_loja or old('nu_loja')}}" >
					</div>
					
					<div class="col-md-3 col-sm-3 col-xs-12">
						<label class="control-label" for="ic_rito">Rito*</label>
						<select id="ic_rito" class="form-control" name="ic_rito" placeholder="Rito praticado" type="text">
							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($ritos as $rito)
									@if ( $setup->ic_rito == $rito)
										<option value="{{$rito}}" selected="selected"> {{$rito}} </option>
									@else
										<option value="{{$rito}}"> {{$rito}} </option>    
									@endif
								@endforeach
							@else
								@foreach($ritos as $rito)
									@if ($rito == ('Brasileiro'))
										<option value="{{$rito}}" selected="selected"> {{$rito}} </option>          
									@else 
										<option value="{{$rito}}"> {{$rito}} </option>  
									@endif
								@endforeach
							@endif
						</select>
					</div>
				</div>

				<div class="item form-group">
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="dt_fundacao">Data de Fundação</label>
						<input id="dt_fundacao" class="form-control datas_input " name="dt_fundacao" placeholder="00/00/0000" 
							data-inputmask="'mask': '99/99/9999'" type="date" value="{{$setup->dt_fundacao or  old('dt_fundacao')}}" >
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label col-md-1" for="nu_cnpj"> CNPJ </label>
						<input id="nu_cnpj"  name="nu_cnpj" class="form-control cnpj" 
							{{-- data-inputmask="'mask' : '999.999.999-99', 'numericInput': 'true' " type="text"  --}}
							placeholder="999.999.999-99"  
							value="{{$setup->nu_cnpj or old('nu_cnpj')}}" 
						>
					</div>
				</div>

				<div class="ln_solid"> </div>

				<div class="item form-group">
					<div class="col-md-2 col-sm-2 col-xs-12">
						{{-- Logradouro, Número, Complemento --}}
						<label class="control-label" for="pais_id">Pais</label>
						<select id="pais_id" class="form-control" name="no_pais" placeholder="Nome do Pais" type="text">
							<option value=""  selected style="color: #ccc;"> --- </option>
							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($paises as $pais)
									@if($pais->id == $setup->pais_id )
										<option value="{{ $pais->id }}" selected="selected"> {{ $pais->no_pais }} </option>
									@else
										<option value="{{ $pais->id }}"> {{ $pais->no_pais }} </option>
									@endif
								@endforeach
							@else
								@foreach($paises as $pais)
									@if ($pais->no_pais == ('Brasil'))
										<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
									@else 
										<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
									@endif
								@endforeach
							@endif
						</select>
					</div> 

					<!-- CEP-->
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="nu_cep">CEP</label>
						<input id="cep" name="nu_cep" type="text" placeholder="99.999-999" class="form-control input-md cep" value="{{$setup->nu_cep or old('nu_cep')}}" >
					</div>
					<!-- UF-->
					<div class="col-md-1 col-sm-1 col-xs-12">
						<label class=" control-label" for="sg_uf">UF</label>
						<input id="uf" name="sg_uf" type="text"  class="form-control input-md uf" value="{{$setup->sg_uf or old('sg_uf')}}" >
					</div>
					<!-- Município-->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="control-label" for="pa-municipio">Município</label>
						<input id="cidade" name="no_municipio" type="text" class="form-control input-md"  
							value="{{$setup->no_municipio or old('no_municipio')}}" >
					</div>
					{{-- Bairro --}}
					<div class="col-md-3 col-sm-3 col-xs-12">
						<label class="control-label" for="no_bairro">Bairro</label>
						<input id="bairro" name="no_bairro" type="text" placeholder="Centro" class="form-control input-md" value="{{$setup->no_bairro or old('no_bairro')}}" >
					</div>
				</div>

				<div class="item form-group">
					<!-- Logradouro ...Av...Rua....etc-->
					<div class="col-md-7 col-sm-7 col-xs-12">
						<label class="control-label" for="no_logradouro">Logradouro</label>
						<input id="rua" name="no_logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md" value="{{$setup->no_logradouro or old('no_logradouro')}}" >
					</div>

					<!-- Número da residência-->
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="nu_logradouro">Numero</label>
						<input id="nu_logradouro" name="nu_logradouro" type="text" placeholder="999" class="form-control input-md" value="{{$setup->nu_logradouro or old('nu_logradouro')}}" >
					</div>
					{{-- Complemento --}}
					<div class="col-md-3 col-sm-3 col-xs-12">
						<label class="control-label" for="de_complemento">Complemento</label>
						<input id="de_complemento" name="de_complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md" value="{{$setup->de_complemento or old('de_complemento')}}" >
					</div>
				</div>

				<div class="item form-group">
					{{-- Telefone --}}
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="nu_telefone">Tel.</label>
						<input id="nu_telefone" name="nu_telefone" type="text" placeholder="(99)9999-9999" class="form-control input-md telefone" value="{{$setup->nu_telefone or old('nu_telefone')}}" >
					</div>

					{{-- Email --}}
					<div class="col-md-5 col-sm-5 col-xs-12">
						<label class="control-label" for="email">Email</label>  
						<input id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email"value="{{$setup->email or old('email')}}" >
					</div>
				</div>			

				<div class="ln_solid"> </div>

				<div class="item form-group">
					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="ic_dia_sessao">Dia da Sessão</label>
						<select id="ic_dia_sessao" class="form-control" name="ic_dia_sessao" type="text">
							<option value=""  selected style="color: #ccc;"> --- </option>
							@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
								@foreach($dias_sessao as $dia)
									@if($dia == $setup->ic_dia_sessao )
										<option value="{{ $dia }}" selected="selected"> {{$dia}} </option>
									@else
										<option value="{{ $dia }}"> {{$dia}} </option>
									@endif
								@endforeach
							@else
								@foreach($dias_sessao as $dia)
									<option value="{{$dia}}"> {{$dia}} </option>  
								@endforeach
							@endif
						</select>
					</div> 

					<div class="col-md-4 col-sm-4 col-xs-12">
						<label class="control-label" for="de_complemento_dia_sessao">Complemento</label>
						<input id="de_complemento_dia_sessao" name="de_complemento_dia_sessao" type="text" placeholder="Quinzenal., 1º e 3º,..." class="form-control input-md" value="{{$setup->de_complemento_dia_sessao or old('de_complemento_dia_sessao')}}" >
					</div>

					<div class="col-md-2 col-sm-2 col-xs-12">
						<label class="control-label" for="hh_inicio_sessao">Hora da Sessão</label>  
						<input id="hh_inicio_sessao" name="hh_inicio_sessao" type="time"  class="form-control input-md "value="{{$setup->hh_inicio_sessao or old('hh_inicio_sessao')}}" >
					</div>
				</div>



				<!----------- botoes ----------> 
				<botao_ok_cancel
					url_cancelar="{{ url("lojas") }}"> 
				</botao_ok_cancel>
				<!----------- fim botoes ---------->
			</form>  
				
		</div>
	</div>
</div>
</div>
</div>


<!-- Modal ---------------------------------------------------------------------------------------------->
<div class="modal fade" id="cad_potencia" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="modalLabel">Cadastro de Potência</h4>
		</div>

		<div class="modal-body">

		<form id="form_modal" method="post" action="#" class="form-horizontal form-label-left" >

			{{ csrf_field() }}

			<div class="item form-group">
				<label class="control-label col-md-3 " for="no_potencia">
					Potência 
				</label>
				<div class="col-md-8 ">
					<input id="no_potencia"   
						class="form-control col-md-8" 
						name="no_potencia" 
						placeholder="Nome da nova Potência" 
						required="required" 
						type="text"
						autofocus
					>
				</div>
			</div>
		</form>  
		</div>
		<div class="modal-footer">
		<div class="col-md-11 ">
			
			<a href="#"  
					type="button" 
					class="envia_nova_potencia btn btn-success "
					data-toggle="tooltip" 
					title="Confirma a operação">  
					Confirma    
			</a>

			<button id="fecha_modal"
					type="button" 
					data-toggle="tooltip" 
					class="btn btn-danger btn_acao"
					title="Cancela e retorna a tela anterior"
					data-dismiss="modal">
					Cancela
			</button>
		</div>
	</div>

	<!-- /Modal ---------------------------------------------------------------------------------------------->

@endsection


@push('scripts')

	<!-- Adicionando JQuery  do correios para pegar endereço-->
	<!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->

	{{-- Script para máscara numérica. Ex.: CPF, RG --}}
	<script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

	{{-- Atualiza os campos do endereço de acordo com o cep digitado --}}
  	<script src="{{ asset("js/endereco.js") }}"></script>
	{{-- Vanilla Masker --}}
	<script src="{{ asset('js/vanillaMasker.min.js') }}"></script>

	<!-- Adicionando Javascript -->
	<script type="text/javascript" >


		VMasker ($("#nu_cnpj")).maskPattern("99.999.999/9999-99");

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




	