@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2 style="width: 100%;"> Abastecimento de Veículos </h2>
			<div class="clearfix"></div>
		</div>

		<div class="x_panel ">
			<div class="x_content">
				@if( isset($abastecimento))
					<form id="frm_abastecimento" class="form-horizontal form-label-left" method="post" action="{{ url("abastecimento/$abastecimento->id") }}">
					{!! method_field('PUT') !!}
				@else
					<form id="frm_abastecimento" class="form-horizontal form-label-left" method="post" action="{{ route('abastecimento.store')  }}">
				@endif
					
					{{ csrf_field() }}
												
					<div class="form-group">
						<input type="hidden" id="veiculo_id" 			name="veiculo_id">
						<input type="hidden" id="valor_combustivel" 	name="valor_combustivel">
						

						<div class="col-md-2 col-sm-6 col-xs-6">
							<label  for="placa">Placa</label>
							<input type="text" id="placa" class="form-control" name="placa" required="" autofocus
							value=" {{ $veiculo->placa or old('placa') }} ">
						</div>

						<div class="col-md-5 col-sm-6 col-xs-6">
							<label >Modelo</label>
							<input type="text" class="form-control" id="modelo" disabled value="">
						</div>
					
						<div class="col-md-2 col-sm-6 col-xs-6">
							<label >Cor</label>
							<input type="text" class="form-control" id="cor" disabled value="">
						</div>

						<div class="col-md-3 col-sm-6 col-xs-6">
							<label >Combustível</label>
							<input type="text" class="form-control" id="combustivel" disabled value="">
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-4 col-sm-12 col-xs-12">
							<label for="posto">Posto</label>
							<select name = "posto" id="posto" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>

								@if (isset($abastecimento))
									@foreach($postos as $posto)
										@if ( $abastecimento->posto_id == $posto->id)
											<option value="{{ $posto->id }}" selected="selected"> {{ $posto->nome }} </option>
										@else
											<option value="{{ $posto->id }}"> {{ $posto->nome }} </option>
										@endif
									@endforeach
								@else
									@foreach($postos as $posto)
											<option value="{{ $posto->id }}"> {{ $posto->nome }} </option>
									@endforeach
								@endif


							</select>	
						</div>


						<div class="col-md-2 col-sm-3 col-xs-3">
							<label >Gasolina</label>
							<input type="text" class="form-control combustiveis" id="gasolina" disabled value="">
						</div>
					
						<div class="col-md-2 col-sm-3 col-xs-3">
							<label >Alcool</label>
							<input type="text" class="form-control combustiveis" id="alcool" disabled value="">
						</div>

						<div class="col-md-2 col-sm-3 col-xs-3">
							<label >Diesel</label>
							<input type="text" class="form-control combustiveis" id="diesel" disabled value="">
						</div>

						<div class="col-md-2 col-sm-3 col-xs-3">
							<label >GNV</label>
							<input type="text" class="form-control combustiveis" id="gnv" disabled value="">
						</div>
					</div>

					<div class="form-group" >
						<label class="col-md-2 col-sm-2 col-xs-2 control-label" style="text-align:left;">Abastecer com: </label>

						<div class="col-md-7 col-sm-9 col-xs-12">
							<div class="radio">
								<label class="col-md-3 col-sm-6 col-xs-6">
									<input type="radio" value="GASOLINA" class="op_comb"	id="op_gas" name="optionsRadios" disabled> Gasolina
								</label>
							
								<label class="col-md-3 col-sm-6 col-xs-6">
									<input type="radio" value="ALCOOL" 	class="op_comb"	id="op_alc" name="optionsRadios" disabled> Alcool
								</label>
							
								<label class="col-md-3 col-sm-6 col-xs-6">
									<input type="radio" value="DIESEL" 	class="op_comb"	id="op_die" name="optionsRadios" disabled> Diesel
								</label>
							
								<label class="col-md-3 col-sm-6 col-xs-6">
									<input type="radio" value="GNV" 		class="op_comb"	id="op_gnv" name="optionsRadios" disabled> GNV
								</label>
							</div>
						</div>
					</div>

					<div class="ln_solid"> </div>

					<div class="form-group">
						<div class="col-md-2 col-sm-6 col-xs-10">
							<label  for="qtd">Quantidade abastecida</label>
							<input {{-- dir="rtl" --}} type="numeric"  id="qtd" class="form-control" name="qtd"
								value="{{ $abastecimento->qtd or old('qtd') }}"   
							>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-10">
							<label >Valor do abastecimento</label>
							<input type="text" class="form-control combustiveis" id="valor"  name="valor" disabled value="">
						</div>
					</div>


					{{-- BOTÕES --}}
					<div class="ln_solid"> </div>
					<div class="footer text-center"> {{-- col-md-3 col-md-offset-9 --}}
						<button id="btn_cancelar" class="botoes-acao btn btn-round btn-primary" >
							<span class="icone-botoes-acao mdi mdi-backburger"></span>   
							<span class="texto-botoes-acao"> CANCELAR </span>
							<div class="ripple-container"></div>
						</button>
					
						<button type="submit" id="btn_salvar" class="botoes-acao btn btn-round btn-success ">
							<span class="icone-botoes-acao mdi mdi-send"></span>
							<span class="texto-botoes-acao"> SALVAR </span>
							<div class="ripple-container"></div>
						</button>
					</div>
					
				</form>
				


			</div>
		</div>
	</div>
@endsection

@push("scripts")

	{{-- Vanilla Masker --}}
	<script src="{{ asset('js/vanillaMasker.min.js') }}"></script>


	<script>
		$(document).ready(function(){
			@if (session('sucesso'))
				swal('Parabéns!', '{{ session('sucesso') }}' ,'success');
			@endif

			
	      {{-- Testar se há algum erro, e mostrar a notificação --}}
			var tempo = 0;
			var incremento = 500;
	      @if ($errors->any())
	         @foreach ($errors->all() as $error)
	            setTimeout(function(){funcoes.notificationRight("top", "right", "danger", "{{ $error }}"); }, tempo);
	            tempo += incremento;
	         @endforeach
			@endif
			
			//mascaras dos inputs
			VMasker ($("#placa")).maskPattern("AAA-9999");
			$('#qtd').mask("#.##0,000", {reverse: true});

			
			//foco no 1º input
			$("input#placa").focus();

			//transforma todas as letras do input em MAIÚSCULAS
			$('input').keyup(function() {
        		this.value = this.value.toLocaleUpperCase();
			});


			//busca o veiculo e preenche os campos
			$("input#placa").focusin(function() {
				//limpa os campos
				$("input#modelo").val("");
				$("input#cor").val("");
				$("input#combustivel").val("");

				$(".op_comb").prop('checked', false);
				$(".op_comb").prop('disabled', true);

				//todos os inputs de combustivel
				$(".combustiveis").css( "background", "" );
				$(".combustiveis").css( "color", "" );
				
			});

			$("input#placa").focusout(function() {
				if( $("input#placa").val().length == 8){
					$.get(url_base+'/buscaPlaca/'+$("input#placa").val(), function(res){
						//console.log(res);
						if( res.length == 1)
						{
							//popula o input hidden para ser usado no $request
							$("#veiculo_id").val(res[0]['id']);

							$("input#modelo").val(res[0]['modelo']);
							$("input#cor").val(res[0]['cor']);
							$("input#combustivel").val(res[0]['combustivel']);

							switch(res[0]['combustivel']) {
								case 'GASOLINA':
									$("#op_gas").prop('disabled', false);
									$("#op_gas").prop('checked', true);
									$("input#gasolina").css( "background", "#2c2c53" );
									$("input#gasolina").css( "color", "white" );

									break;

								case 'ALCOOL':
									$("#op_alc").prop('disabled', false);
									$("#op_alc").prop('checked', true);
									$("input#alcool").css( "background", "#2c2c53" );
									$("input#alcool").css( "color", "white" );
									break;

								case 'DIESEL':
									$("#op_die").prop('disabled', false);
									$("#op_die").prop('checked', true);
									$("input#diesel").css( "background", "#2c2c53" );
									$("input#diesel").css( "color", "white" );
									break;

								case 'GNV':
									$("#op_gnv").prop('disabled', false);
									$("#op_gnv").prop('checked', true);
									$("#op_gas").prop('disabled', false);
									$("#op_alc").prop('disabled', false);
									$("#op_gas").prop('checked', true);
									$("input#gasolina").css( "background", "#2c2c53" );
									$("input#gasolina").css( "color", "white" );
									$("input#alcool").css( "background", "#2c2c53" );
									$("input#alcool").css( "color", "white" );

									$("input#gnv").css( "background", "#2c2c53" );
									$("input#gnv").css( "color", "white" );
									break;

								case 'FLEX':
									$("#op_gas").prop('disabled', false);
									$("#op_alc").prop('disabled', false);
									$("#op_gas").prop('checked', true);
									$("input#gasolina").css( "background", "#2c2c53" );
									$("input#gasolina").css( "color", "white" );
									$("input#alcool").css( "background", "#2c2c53" );
									$("input#alcool").css( "color", "white" );
									break;
							}
											
						}else{
							console.log("não");
						}
					});
				}
  			})

			//busca o posto e preenche os campos
			$("input#posto").focusin(function() {
				//limpa os campos
				$("input#modelo").val("");
				$("input#cor").val("");
				$("input#combustivel").val("");
			});

			$("select#posto").change(function() {
				if( $("select#posto option:selected").index() > 0)
				{
					$.get(url_base+'/buscaPosto/'+$("select#posto  option:selected ").val(), function(res){
						$("input#gasolina")	.val(res['gasolina'].toFixed(3).replace(".",","));
						$("input#alcool")		.val(res['alcool'].toFixed(3).replace(".",","));
						$("input#diesel")		.val(res['diesel'].toFixed(3).replace(".",","));
						$("input#gnv")			.val(res['gnv'].toFixed(3).replace(".",","));

					});
				}else{
					//limpa os campos
					$("input#gasolina")	.val("");
					$("input#alcool")		.val("");
					$("input#diesel")		.val("");
					$("input#gnv")			.val("");

				}
  			})

			 $("input[name='optionsRadios']").change(function() {
					$("input#valor").val("");
					$("input#qtd").val("");
				});
			  

			//prenche a quantidade de litros e informa o valor a pagar
			$("input#qtd").focusin(function() {
				$("input#valor").val("");
			});

			$("input#qtd").focusout(function() {
				
				if( ( $("input#placa").val() != "" ) && ( $("select#posto option:selected").index() > 0 ) )
				{
					let combustivel_selecionado;
					let qtd_informada =  $("input#qtd").val().replace(',','.');
					let valor_abastecido;
 
					
					switch($("input[name='optionsRadios']:checked").val()) {
						case 'GASOLINA':
							combustivel_selecionado = parseFloat( $("input#gasolina").val().replace(',','.') );
							break;
						case 'ALCOOL':
							combustivel_selecionado = parseFloat( $("input#alcool").val().replace(',','.') );  
							break;
						case 'DIESEL':
							combustivel_selecionado = parseFloat( $("input#diesel").val().replace(',','.') );  
							break;
						case 'GNV':
							combustivel_selecionado = parseFloat( $("input#gnv").val().replace(',','.') );  
							break;
					}

					//popula o input hidden para ser usado no $request
					$("#valor_combustivel").val( combustivel_selecionado );

					valor_abastecido = combustivel_selecionado * qtd_informada;
					
					let valor_formatado = parseFloat( valor_abastecido ).toFixed(3).replace('.',',');
					$("input#valor").val('R$ ' + valor_formatado);				
				}else{
					console.log($("input#placa").val());
					funcoes.notificationRight("top", "right", "danger", "A PLACA e o POSTO devem estar prenchidos");
				}

			});


			//botão de cancelar
			$("#btn_cancelar").click(function(){
		      event.preventDefault();
				window.history.back();
	      });

			//botão de salvar
			$("#btn_salvar").click(function(){
		      event.preventDefault();
				//$("input#qtd").val().replace(',','.');

				$( "#frm_abastecimento" ).submit();

	      });



			
		});
		
		
	</script>

@endpush



