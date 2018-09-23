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
					
					
					
					<table id="tb_presenca_sessao"  class="table table-striped" style="width:100%">
						<thead>
								<tr>
									<th>Membro</th>
									<th>Participou</th>
									<th>Cargo</th>
								</tr>
						</thead>
						<tbody>
							@foreach($membros as $membro )
							<tr>
								
								
								
								<td> 
									<input type="text" 		id="nome" 			name="nome" 		value={{ $membro->no_membro}} disabled/> 
									<input type="hidden"		id="membro_id"    name="membro_id"	value={{ $membro->id}}/> 
								
								</td>
								<td> <input type="checkbox" 	id="participou" 	name="participou" value="1" /> </td>
								<td>
									<select id="cargo" 	name="cargo"  >
										<option value=""  selected style="color: #ccc;"> --- </option>
										@foreach($cargos as $cargo)
											<option value="{{$cargo->id}}"> {{$cargo->no_cargo}} </option>    
										@endforeach
									</select>

								</td>
								
								
									

								
							</tr>
						@endforeach

						</tbody>
					</table>




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

	  <!-- Datatables -->
	<script src="{{ asset('datatables/datatables.net/js/jquery.dataTables.min.js') }}"                  type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"            type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}"         type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"       type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-buttons/js/buttons.flash.min.js') }}"              type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-buttons/js/buttons.html5.min.js') }}"              type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-buttons/js/buttons.print.min.js') }}"              type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"       type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}"   type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"     type="text/javascript"></script>
	<script src="{{ asset('datatables/datatables.net-scroller/js/dataTables.scroller.min.js') }}"       type="text/javascript"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"                   type="text/javascript"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"                 type="text/javascript"></script>

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



			var table = $('#tb_presenca_sessao').DataTable();
		
			$('#send').click( function() {
				var data = table.$('input, select').serialize();
				console.log(data);
				alert(
						"The following data would have been submitted to the server: \n\n"+
						data.substr( 0, 120 )+'...'
				);
				return false;
			} );

			
		














		});
	</script>


@endpush




	membro_id=26
	cargo=
	membro_id=31
	participou=1
	cargo=20
	membro_id=36
	
	cargo=&membro_id=28
	cargo=&membro_id=16
	cargo=&membro_id=20
	cargo=&membro_id=3
	cargo=&membro_id=5
	cargo=&membro_id=17
	cargo=&membro_id=37
	cargo=&membro_id=10
	cargo=&membro_id=52
	cargo=&membro_id=49
	cargo=&membro_id=66
	cargo=&membro_id=18
	cargo=