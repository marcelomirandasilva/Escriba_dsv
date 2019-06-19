@extends('gentelella.layouts.app')

@section('content')
	
	{{-- @include('gentelella.layouts.partials.mensagens') --}}

	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Cadastro de Sessão </h2>
			
			<div class="clearfix"></div>
		</div>
		<div class="x_content {{-- animated fadeInUp --}}">
				
@if( isset($sessao))
			<form id="form_pressenca_sessao" method="post" action="{{ url("sessoes/$sessao->id") }}" class="form-horizontal form-label-left" >
				{!! method_field('PUT') !!}
@else
			<form id="form_pressenca_sessao" method="post" action="{{ route('sessoes.store') }}" class="form-horizontal form-label-left" >
@endif
				{{ csrf_field() }}

				<input id="dados_sessao" name="dados_sessao" type="hidden">  

				<div class="col-md-12  col-xs-12 ">
					<div class="form-group col-md-2 col-xs-12  ">
						<label class="control-label" for="dt_sessao">Data</label>
						<input id="dt_sessao" class="form-control col-md-2 datas_input" name="dt_sessao"  
						type="date" min="1900-01-01" max="2050-01-01"
						required
						value="{{$sessao->dt_sessao or old('dt_sessao')}}" autofocus>
					</div>

					<div class="form-group col-md-1 col-xs-12 ">
						<label class="control-label" for="hh_inicio">Inicio</label>
						<input id="hh_inicio" class="form-control col-md-2 horas_input" name="hh_inicio"  
						required
						type="time" 
						@if( isset($sessao))
							value="{{ $sessao->hh_inicio or old('hh_inicio') }}" >
						@else
							value="{{ $hh_inicio or old('hh_inicio') }}" >
						@endif
					</div>

					<div class="form-group col-md-1 col-xs-12 ">
						<label class="control-label" for="hh_termino">Término</label>
						<input id="hh_termino" class="form-control col-md-2 horas_input" name="hh_termino"  
						required
						type="time" 
						@if( isset($sessao))
							value="{{$sessao->hh_termino or old('hh_termino')}}" >
						@else
							value="{{ $hh_termino or old('hh_termino') }}" >
						@endif
					</div>


					<div class=" form-group col-md-6 col-xs-12">
						<label class="control-label " for="ic_tipo_sessao"> Tipo</label>
						<select   name="ic_tipo_sessao" id="ic_tipo_sessao" class="form-control col-md-2"	required>
							<option value=""  selected style="color: #ccc;"> --- </option>

							@if (isset($sessao)) <!-- variavel para verificar se foi chamado pela edição -->
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
						<select   name="ic_grau" id="ic_grau" class="form-control col-md-2" required>
							<option value=""  selected style="color: #ccc;"> --- </option>
							@if (isset($sessao)) <!-- variavel para verificar se foi chamado pela edição -->
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



@endsection


@push('scripts')


	<!-- Adicionando Javascript -->
	<script type="text/javascript" >

	
		$(document).ready(function() {
			
			
		

		});
	</script>


@endpush

