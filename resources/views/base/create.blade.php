@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
	<div class="x_panel modal-content animated slideInUp">
		<div class="x_title">
			<h2> Cadastro de Veículos </h2>
			<div class="clearfix"></div>
		</div>

		<div class="x_panel ">
			<div class="x_content">
				<form id="frm_veiculo" class="form-horizontal form-label-left">

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="placa">Placa:</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input type="text" id="placa" class="form-control" name="placa" required="" autofocus>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">Modelo:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="modelo" id="modelo" class="form-control" name="modelo">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cor">Cor:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="cor" id="cor" class="form-control" name="cor">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ano">Ano:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="ano" id="ano" class="form-control" name="ano">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="renavam">Renavam:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="renavam" id="renavam" class="form-control" name="renavam">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="combustivel">Combustível:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "combustivel" id="combustivel" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>
								@foreach($combustiveis as $combustivel)
									<option value="{{ $combustivel }}">
										{{ $combustivel }}
									</option>
								@endforeach
							</select>	
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="secretaria">Secretaria:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "secretaria" id="secretaria" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>
								@foreach($secretarias as $secretaria)
									<option value="{{ $secretaria->id }}">
										{{ $secretaria->nome }}
									</option>
								@endforeach
							</select>	
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="base">Base:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "base" id="base" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>
								@foreach($bases as $base)
									<option value="{{ $base->id }}">
										{{ $base->nome }}
									</option>
								@endforeach
							</select>	
						</div>
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
			VMasker ($("#placa")).maskPattern("AAA-9999");
			VMasker ($("#ano")).maskPattern("9999");
			VMasker ($("#renavam")).maskPattern("99.999.999.999");

			$("input#placa").focus();

			//transforma todas as letras do input em MAIÚSCULAS
			$('input').keyup(function() {
        		this.value = this.value.toLocaleUpperCase();
			});
		});
	</script>

@endpush



