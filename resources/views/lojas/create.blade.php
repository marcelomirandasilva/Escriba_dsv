@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

<!-- page content -->





<!-- page content -->
<div class="right_col" role="main">
	<div class=""> </div>
	<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Cadastro de Lojas</h2>
					
					<div class="clearfix"></div>
				</div>
				<div class="x_content">

					<form id="form_loja" method="post" action="{{ url('lojas/store') }}" class="form-horizontal form-label-left" >
						{!! csrf_field() !!}

						<div class="item form-group">
							<label class="control-label col-md-1 col-sm-1 col-xs-12" for="co_titulo">
								Título <span class="required">*</span>
							</label>
							<div class="col-md-2 ">
								<input id="co_titulo"   
									class="form-control col-md-2" 
									name="co_titulo" 
									placeholder="----" 
									required="required" 
									type="text"
									value="ARLS" 
									style="text-transform: uppercase;"
								>
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
								>
							</div>
						</div>

						<div class="item form-group">

							<label class="control-label col-md-1 " for="fk_potencia_id">Potência</label>
							<div class="col-md-5 ">
								<select id="fk_potencia_id"   
									class="form-control col-md-5 " 
									name="fk_potencia_id" 
									placeholder="Nome da Potência" 
									type="text">
									@foreach($potencias as $potencia)
										<option value="{{$potencia->id}}"> {{$potencia->no_potencia}} </option>   
										@if ($potencia->no_potencia == ('Grande Oriente do Brasil'))
											<option value="{{$potencia->id}}" selected="selected"> {{$potencia->no_potencia}} </option>          
										@else 
											<option value="{{$potencia->id}}"> {{$potencia->no_potencia}} </option>  
										@endif
									@endforeach
								</select>
							</div>
							<label class="control-label col-md-4 " for="dt_fundacao">Fundação</label>
							<div class="col-md-2 ">
								<input id="dt_fundacao"   
									class="form-control col-md-2 datas_input " 
									name="dt_fundacao" 
									placeholder="00/00/0000" 
									data-inputmask="'mask': '99/99/9999'"
									type="date"
								>
							</div>
						</div>
						<div class="item form-group">
							{{-- Logradouro, Número, Complemento --}}
							<label class="control-label col-md-1 " for="nu_pais">Pais</label>
							<div class="col-md-3 ">
								<select id="nu_pais"   
									class="form-control col-md-3 " 
									name="nu_pais" 
									placeholder="Nome do Pais" 
									type="text">
									@foreach($paises as $pais)
										@if ($pais->no_pais == ('Brasil'))
											<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
										@else 
											<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
										@endif
									@endforeach
								</select>
							</div> 
					
							<!-- CEP-->
							<label class="col-md-1 control-label" for="nu_cep">CEP</label>
							<div class="col-md-2">
								<input id="cep" name="nu_cep" type="text" placeholder="99999-999" class="form-control input-md cep">
							</div>

							<!-- Município-->
							<label class="col-md-1 control-label" for="pa-municipio">Município</label>
							<div class="col-md-4">
								<input id="cidade" name="no_municipio" type="text" class="form-control input-md" >
							</div>
						</div>
						<div class="item form-group">
							{{-- Bairro --}}
							<label class="col-md-1 control-label" for="no_bairro">Bairro</label>
							<div class="col-md-3">
								<input id="bairro" name="no_bairro" type="text" placeholder="Centro" class="form-control input-md">
							</div>


							<!-- Logradouro ...Av...Rua....etc-->
							<label class="col-md-1 control-label" for="no_logradouro">Logradouro</label>
							<div class="col-md-7">
								<input id="rua" name="no_logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
							</div>

						</div>
						<div class="item form-group">
						
							<!-- Número da residência-->
							<label class="col-md-1 control-label" for="nu_logradouro">Numero</label>
							<div class="col-md-2">
								<input id="nu_logradouro" name="nu_logradouro" type="text" placeholder="999" class="form-control input-md">
							</div>

							{{-- Complemento --}}
							<label class="col-md-2 control-label" for="de_complemento">Complemento</label>
							<div class="col-md-3">
								<input id="de_complemento" name="de_complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
							</div>
						</div>	
						<div class="item form-group">

							{{-- Telefone --}}
							<label class="col-md-1 control-label" for="nu_telefone">Tel.</label>
							<div class="col-md-2">
								<input id="nu_telefone" name="nu_telefone" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
							</div>

							{{-- Email --}}
							<label class="col-md-2 control-label" for="de_email">Email</label>  
							<div class="col-md-5">
								<input id="de_email" name="de_email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
							</div>

						</div>						
						<!- botoes -> 
						<div class="ln_solid"></div>
						
						<div class="col-md-offset-4">
						  <a href="{{ URL::previous()  }}" class="btn btn-danger">  Cancela     </a>
						  <button id="send" type="submit" class="btn btn-success">  Confirma    </button>
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

{{-- Script para máscara numérica. Ex.: CPF, RG --}}
<script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>


<script type="text/javascript">

	{{-- Máscarasa dos campos CPF e RG --}}
	$(document).ready(function(){
		$(".cpf").inputmask("999.999.999-99");
		$(".rg").inputmask("99.999.999-9");
		$(".cep").inputmask("99-999.999");
		$(".data").inputmask("99/99/9999");
		$(".celular").inputmask("(99)99999-9999");
		$(".telefone").inputmask("(99)9999-9999");
	});

</script>



<!-- Adicionando JQuery  do correios para pegar endereço-->
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- Adicionando Javascript -->
<script type="text/javascript" >

	$(document).ready(function() {

		function limpa_formulário_cep() {
			// Limpa valores do formulário de cep.
			$("#rua").val("");
			$("#bairro").val("");
			$("#cidade").val("");
			$("#uf").val("");
			$("#ibge").val("");
		}
		
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
	});

</script>

@endpush




