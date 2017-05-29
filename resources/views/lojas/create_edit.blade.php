@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')
<!-- page content -->
<!-- Modal -->
<div class="modal fade" id="cad_potencia" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Cadastro de Potência</h4>
      </div>
      <div class="modal-body">

			<form id="form_modal" method="post" action="{{ url('lojas/store') }}" class="form-horizontal form-label-left" >

				<div class="item form-group">
					<label class="control-label col-md-3 " for="no_potencia">
						Potência <span class="required">*</span>
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
				<button type="button" 
				  			data-toggle="tooltip" 
				  			class="btn btn-danger"
				  			title="Cancela e retorna a tela anterior"
							data-dismiss="modal">
							Cancela
				</button>
				<a href="#"  
							type="button" 
							class="btn btn-success"
		  					data-toggle="tooltip" 
		  					title="Confirma a operação">  
				  		Confirma    
				</a>

			</div>


      </div>
    </div>
  </div>
</div> 
<!-- /.modal -->



<!-- page content -->
<div class="right_col" role="main">

	<!---------------------- Mostra os erros de validação ------------------------------>

	@if( count($errors) > 0 )
		<div class="alert alert-danger alert-dismissible" role="alert">
			@foreach($errors->all() as $erro)
				<p> {{ $erro }} </p>
			@endforeach
		</div>
	@endif
	<!------------------------------------------------------------------------------------>



	<div class=""> </div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2> {{ $titulo }} </h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					@if( isset($loja))
						<form id="form_loja" method="post" action="{{ url("lojas/update/$loja->id") }}" class="form-horizontal form-label-left" >
							{!! method_field('PUT') !!}
					@else
						<form id="form_loja" method="post" action="{{ url('lojas/store') }}" class="form-horizontal form-label-left" >
					@endif

					
						
						{{ csrf_field() }}

						<div class="item form-group">
							<label class="control-label col-md-1 col-sm-1 col-xs-12" for="co_titulo">
								Título <span class="required">*</span>
							</label>
							<div class="col-md-2 ">
								<input id="co_titulo"   
									class="form-control col-md-2" 
									name="co_titulo" 
									placeholder="ARLS" 
									required="required" 
									type="text"
									
									style="text-transform: uppercase;"
									autofocus
									value="{{$loja->co_titulo or old('co_titulo')}}" >
							</div>

							<label class="control-label col-md-1 " for="no_loja">
								Nome 
								<span class="required">*</span>
							</label>
							<div class="col-md-6">
								<input type="no_loja" 
									id="no_loja" 
									name="no_loja" 
									placeholder="Nome da Loja" 
									required="required" 
									class="form-control "
									type="text"
									
									value="{{ $loja->no_loja or old('no_loja')}}" 
									
								>
							</div>

							<label class="control-label col-md-1" for="nu_loja">
								Número 
								<span class="required">*</span>
							</label>
							<div class="col-md-1 nu_loja_input" >
								<input type="nu_loja" 
									id="nu_loja" 
									name="nu_loja" 
									placeholder="00000" 
									required="required" 
									class="form-control "
									type="number"
									value="{{ $loja->nu_loja or old('nu_loja')}}" 
								>
							</div>
						</div>

						<div class="item form-group">

							<label class="control-label col-md-1 " for="potencia_id">Potência*</label>
							<div class="col-md-5 ">

								<select id="potencia_id"   
									class="form-control col-md-5 " 
									name="potencia_id" 
									placeholder="Nome da Potência" 
									type="text"
									data-live-search="true"
									style="width:90%;"/>


									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($potencias as $potencia)
											@if ( $loja->potencia_id == $potencia->id)
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

								<div class="col-md-1 ">
							  		<button
							  			data-target="#cad_potencia"
					  					class="btn col-md-0  glyphicon glyphicon-plus botao_adiciona_elemento" 
                                		data-toggle="modal" 
                                		
							  			title="Cria uma nova Potência ">  
						  			</button>
								</div>


								
				
							</div>
							
							<label class="control-label col-md-1 " for="ic_rito">Rito*</label>
							<div class="col-md-2 ">
								<select id="ic_rito"   
									class="form-control col-md-2 " 
									name="ic_rito" 
									placeholder="Rito praticado" 
									type="text">

									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($ritos as $rito)
											@if ( $loja->ic_rito == $rito)
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


							<label class="control-label col-md-1 " for="dt_fundacao">Fundação</label>
							<div class="col-md-2 ">
								<input id="dt_fundacao"   
									class="form-control col-md-2 datas_input " 
									name="dt_fundacao" 
									placeholder="00/00/0000" 
									data-inputmask="'mask': '99/99/9999'"
									type="date"
									value="{{$loja->dt_fundacao or  old('dt_fundacao')}}" 

								>
							</div>
						</div>
						<div class="item form-group">
							{{-- Logradouro, Número, Complemento --}}
							<label class="control-label col-md-1 " for="pais_id">Pais</label>
							<div class="col-md-2 ">
								<select id="pais_id"   
									class="form-control col-md-2" 
									name="pais_id" 
									placeholder="Nome do Pais" 
									type="text">

									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($paises as $pais)
											@if ( $loja->endereco->pais == $pais)
												<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
											@else
												<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
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
							<label class="col-md-1 control-label" for="nu_cep">CEP</label>
							<div class="col-md-2">
								<input id="cep" 
										name="nu_cep" 
										type="text" 
										placeholder="99.999-999" 
										class="form-control input-md cep" 
										value="{{$loja->endereco->nu_cep or old('nu_cep')}}" >

							</div>
					
							<!-- UF-->
							<label class="col-md-1 control-label" for="sg_uf">UF</label>
							<div class="col-md-1">
								<input id="uf" 
										name="sg_uf" 
										type="text"  
										class="form-control input-md uf"
										value="{{$loja->endereco->sg_uf or old('sg_uf')}}" >
							</div>


							<!-- Município-->
							<label class="col-md-1 control-label" for="pa-municipio">Município</label>
							<div class="col-md-3">
								<input id="cidade" 
										name="no_municipio" 
										type="text" 
										class="form-control input-md" 
										value="{{$loja->endereco->no_municipio or old('no_municipio')}}" >
							</div>
						</div>
						<div class="item form-group">
							{{-- Bairro --}}
							<label class="col-md-1 control-label" for="no_bairro">Bairro</label>
							<div class="col-md-3">
								<input id="bairro" 
										name="no_bairro" 
										type="text" 
										placeholder="Centro" 
										class="form-control input-md"
										value="{{$loja->endereco->no_bairro or old('no_bairro')}}" >
							</div>


							<!-- Logradouro ...Av...Rua....etc-->
							<label class="col-md-1 control-label" for="no_logradouro">Logradouro</label>
							<div class="col-md-7">
								<input id="rua" 
										name="no_logradouro" 
										type="text" 
										placeholder="Av, Rua, Travessa..." 
										class="form-control input-md"
										value="{{$loja->endereco->no_logradouro or old('no_logradouro')}}" >
							</div>

						</div>
						<div class="item form-group">
						
							<!-- Número da residência-->
							<label class="col-md-1 control-label" for="nu_logradouro">Numero</label>
							<div class="col-md-2">
								<input id="nu_logradouro" 
										name="nu_logradouro" 
										type="text" 
										placeholder="999" 
										class="form-control input-md"
										value="{{$loja->endereco->nu_logradouro or old('nu_logradouro')}}" >
							</div>

							{{-- Complemento --}}
							<label class="col-md-2 control-label" for="de_complemento">Complemento</label>
							<div class="col-md-3">
								<input id="de_complemento" 
										name="de_complemento" 
										type="text" 
										placeholder="Ap., Fundos,..." 
										class="form-control input-md"
										value="{{$loja->endereco->de_complemento or old('de_complemento')}}" >
							</div>
						</div>	
						<div class="item form-group">

							{{-- Telefone --}}
							<label class="col-md-1 control-label" for="nu_telefone">Tel.</label>
							<div class="col-md-2">
								<input id="nu_telefone" 
										name="nu_telefone" 
										type="text" 
										placeholder="(99)9999-9999" 
										class="form-control input-md telefone"
										value="{{$loja->telefone->nu_telefone or old('nu_telefone')}}" >
							</div>

							{{-- Email --}}
							<label class="col-md-2 control-label" for="de_email">Email</label>  
							<div class="col-md-5">
								<input id="de_email" 
										name="de_email" 
										type="text" 
										placeholder="email@servidor.com.br" 
										class="form-control input-md email"
										value="{{$loja->email->de_email or old('de_email')}}" >
							</div>

						</div>						
						<!- botoes -> 
						<div class="ln_solid">
							
						</div>

						<div class="col-md-3 col-md-offset-9">
					  		<a href="{{ URL::previous() }}"
					  			class="btn btn-danger" 
					  			data-toggle="tooltip" 
					  			title="Cancela e retorna a tela anterior">  
					  			Cancela
				  			</a>
					  		<button id="send" 
					  					type="submit" 
					  					class="btn btn-success"
					  					data-toggle="tooltip" 
					  					title="Confirma a operação">  
							  		Confirma    
					  		</button>
						</div>
						

						<!- fim botoes ->
					</form>  
					   
				</div>
			</div>
		</div>
	</div>
</div>


<!-- footer content -->
<footer>
	<div class="pull-right">
		Desenvolvido por Marcelo Miranda - 2017</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection


@push('scripts')





<!-- Adicionando JQuery  do correios para pegar endereço-->
<!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->

{{-- Script para máscara numérica. Ex.: CPF, RG --}}
<script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>


<!-- Adicionando Javascript -->
<script type="text/javascript" >

	function global()
	{

	}

	$(document).ready(function() {

		function limpa_formulário_cep() {
			// Limpa valores do formulário de cep.
			$("#rua").val("");
			$("#bairro").val("");
			$("#cidade").val("");
			$("#uf").val("");
			$("#ibge").val("");
		}

		////////////////////////////// Eventos

		$("select#pais_id").change(function(){

			if($("select#pais_id>option:selected").text() == " Brasil ")
			{
				$("input.cep, input.uf").removeAttr('disabled');
			}
			else
			{
				$("input.cep, input.uf").attr('disabled', 'disabled');
			}

		});
		
		//Quando o campo cep perde o foco.
		$("#cep").blur(function() {

			//Nova variável "cep" somente com dígitos.
			var cep = $(this).val().replace(/\D/g, '');

			//Verifica se campo cep possui valor informado.
			if (cep != "") {

				//Expressão regular para validar o CEP.
				var validacep = /^[0-9]{8}$/;

				//Valida o formato do CEP.
				if(validacep.test(cep)) {

					//Preenche os campos com "..." enquanto consulta webservice.
					$("#rua").val("...");
					$("#bairro").val("...");
					$("#cidade").val("...");
					$("#uf").val("...");
					$("#ibge").val("...");

					//Consulta o webservice viacep.com.br/
					$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

						if (!("erro" in dados)) {
							//Atualiza os campos com os valores da consulta.
							$("#rua").val(dados.logradouro);
							$("#bairro").val(dados.bairro);
							$("#cidade").val(dados.localidade);
							$("#uf").val(dados.uf);
							$("#ibge").val(dados.ibge);
						} //end if.
						else {
							//CEP pesquisado não foi encontrado.
							limpa_formulário_cep();
							alert("CEP não encontrado.");
						}
					});
				} //end if.
				else {
					//cep é inválido.
					limpa_formulário_cep();
					alert("Formato de CEP inválido.");
				}
			} //end if.
			else {
				//cep sem valor, limpa formulário.
				limpa_formulário_cep();
			}
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

<script type="text/javascript" charset="utf-8" >
	
	function desabilita(){
 		if( this.text == 'Brasil' ){
    		document.getElementById('cep').disabled = false;
    		document.getElementById('uf').disabled = false;
		}else{
    		document.getElementById('cep').disabled = true;
    		document.getElementById('uf').disabled = true;
		}
  	}

</script>



@endpush




