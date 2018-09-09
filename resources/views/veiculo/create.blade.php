@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')
	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Cadastro de Veículos </h2>
			<div class="clearfix"></div>
		</div>

		<div class="x_panel ">
			<div class="x_content">
				@if( isset($veiculo))
					<form id="frm_veiculo" class="form-horizontal form-label-left" method="post" action="{{ url("veiculo/$veiculo->id") }}">
					{!! method_field('PUT') !!}
				@else
					<form id="frm_veiculo" class="form-horizontal form-label-left" method="post" action="{{ route('veiculo.store')  }}">
				@endif

					
					{{ csrf_field() }}
												
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="placa">Placa:</label>
						<div class="col-md-2 col-sm-2 col-xs-12">
							<input type="text" id="placa" class="form-control" name="placa" required="" autofocus
							value=" {{ $veiculo->placa or old('placa') }} ">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="modelo">Modelo:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="modelo" id="modelo" class="form-control" name="modelo" 
							value=" {{ $veiculo->modelo or old('modelo') }} ">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cor">Cor:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="cor" id="cor" class="form-control" name="cor" value=" {{ $veiculo->cor or old('cor') }} ">
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="ano">Ano:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="ano" id="ano" class="form-control" name="ano" value=" {{ $veiculo->ano or old('ano') }} ">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="renavam">Renavam:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input type="renavam" id="renavam" class="form-control" name="renavam" 
								value=" {{ $veiculo->renavam or old('renavam') }} ">
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="combustivel">Combustível:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "combustivel" id="combustivel" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>

								@if (isset($veiculo))
									@foreach($combustiveis as $combustivel)
										@if ( $veiculo->combustivel == $combustivel)
											<option value="{{ $combustivel }}" selected="selected"> {{ $combustivel }} </option>
										@else
											<option value="{{ $combustivel }}"> {{ $combustivel }} </option>
										@endif
									@endforeach
								@else
									@foreach($combustiveis as $combustivel)
											<option value="{{ $combustivel }}"> {{ $combustivel }} </option>
									@endforeach
								@endif


							</select>	
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="secretaria_id">Secretaria:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "secretaria_id" id="secretaria_id" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>

								@if (isset($veiculo))
									@foreach($secretarias as $secretaria)
										@if ( $veiculo->secretaria_id == $secretaria->id)
											<option value="{{ $secretaria->id }}" selected="selected"> {{ $secretaria->nome }} </option>
										@else
											<option value="{{ $secretaria->id }}"> {{ $secretaria->nome }} </option>
										@endif
									@endforeach
								@else
									@foreach($secretarias as $secretaria)
											<option value="{{ $secretaria->id }}"> {{ $secretaria->nome }} </option>
									@endforeach
								@endif

							</select>	
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="base_id">Base:</label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select name = "base_id" id="base_id" class="form-control selectpicker error" 
								data-style="select-with-transition has-dourado" >
								
								<option value=""> Selecione... </option>

								@if (isset($veiculo))
									@foreach($bases as $base)
										@if ( $veiculo->base->id == $base->id)
											<option value="{{ $base->id }}" selected="selected"> {{ $base->nome }} </option>
										@else
											<option value="{{ $base->id }}"> {{ $base->nome }} </option>
										@endif
									@endforeach
								@else
									@foreach($bases as $base)
											<option value="{{ $base->id }}"> {{ $base->nome }} </option>
									@endforeach
								@endif


								
							</select>	
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
			VMasker ($("#ano")).maskPattern("9999");
			VMasker ($("#renavam")).maskPattern("99.999.999.999");

			//foco no 1º input
			$("input#placa").focus();

			//transforma todas as letras do input em MAIÚSCULAS
			$('input').keyup(function() {
        		this.value = this.value.toLocaleUpperCase();
			});


			//botão de cancelar
			$("#btn_cancelar").click(function(){
		      event.preventDefault();
				window.history.back();
	      });
		});
	</script>

@endpush



