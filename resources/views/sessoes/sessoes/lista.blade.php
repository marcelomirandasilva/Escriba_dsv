@extends('gentelella.layouts.app')

@push('styles')

<link href="{{ asset('datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">


@endpush

@section('content')

  <!-- page content -->
    	
	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Listagem de Sessões </h2>

			<a href="{{ url('sessoes/create') }}"
				class="btn-circulo btn btn-primary btn-md   pull-right "
				data-toggle="tooltip"
				data-placement="bottom"
				title="Adiciona uma Sessão">
				<span class="fa fa-plus">  </span>
			</a>
			<div class="clearfix"></div>
		</div>
		<div class="x_content animated fadeInUp">
			<div class="panel-body">
				<table class="table table-striped" id="tabela_sessoes">
					<thead>
						<tr>
							<th>Data</th>
							<th>Tipo</th>
							<th>Grau</th>
							<th>Inicio</th>
							<th>Término</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						@foreach($sessoes as $sessao )
							<tr>
								
								<td>{{ \Carbon\Carbon::parse( $sessao->dt_sessao)->format('d/m/Y')  }}     </td>
								
								<td>{{ $sessao->ic_tipo_sessao      }}</td>
								<td>{{ $sessao->ic_grau             }}</td>

								@if( $sessao->hh_inicio <> '00:00:00')
									<td>{{ $sessao->hh_inicio  }}     </td>
								@else
									<td> --------- </td>
								@endif

								@if( $sessao->hh_termino <> '00:00:00')
									<td>{{ $sessao->hh_termino  }}     </td>
								@else
									<td> --------- </td>
								@endif
		
									

								<td>
									<a href="{{ url("sessoes/$sessao->id/edit") }}"
										class="btn btn-warning btn-xs action botao_lista pull-right "
										data-toggle="tooltip"
										data-placement="bottom"
										title="Edita essa sessao">
										<i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
									</a>
									<a href="{{ url("sessoes/$sessao->id") }}"
										class="btn btn-primary btn-xs  action botao_lista pull-right "
										data-toggle="tooltip"
										data-placement="bottom"
										title="Visualiza essa sessao">
										<i class="glyphicon glyphicon-eye-open icone_botao_lista"></i>
									</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
		
	<!-- /page content -->
@endsection


@push("scripts")

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

	<script>
    	$(document).ready(function(){

			@if (session('sucesso'))
				swal('Parabéns!', '{{ session('sucesso') }}' ,'success');
			@endif


			$.fn.dataTable.moment( 'DD/MM/YYYY' );

        	$("#tabela_sessoes").DataTable({
				language : {
                            'url' : '{{ asset('js/portugues.json') }}',
                            "decimal": ",",
                            "thousands": "."
                          },
				stateSave: true,
				stateDuration: -1,
				  
        	});
    	});
  	</script>
@endpush




