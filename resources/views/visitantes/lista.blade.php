@extends('gentelella.layouts.app')

@push('styles')

  <link href="{{asset('datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

  
@endpush

@section('content')



	<!-- page content -->
	  	
  	<div class="modal-content x_panel" >
		<div class="x_title">
			<h2> Listagem de Visitantes </h2>
			<a href="{{url('visitantes/create') }}" 
				class="btn-circulo btn btn-primary btn-md   pull-right " data-toggle="tooltip"  data-placement="bottom" title="Adiciona um Membro">
				<span class="fa fa-plus">  </span>
			</a>
			<div class="clearfix"></div>
		</div>
		<div class="x_content animated fadeInUp">
			<div class="panel-body">
				<table class="table table-striped" id="tabela-visitantes">
					<thead>
						<tr>
							<th> Nome       </th>
							<th> CIM        </th>
							<th> Potencia 	</th>
							<th> Loja   	</th>
							<th> Nº Loja  	</th>
							<th> Ações      </th>
						</tr>
					</thead>
					<tbody>
						@foreach($visitantes as $membro )
							<tr>
								<td> {{$membro->no_visitante}}                                                   </td>
								<td> {{$membro->co_cim}}      </td>
								<td> {{$membro->loja->potencia->no_potencia}}                                                 </td>
								<td> {{$membro->loja->no_loja}}                                                 </td>
								<td> {{$membro->loja->nu_loja}}                                                 </td>
								<td>
									<a href="{{url("visitantes/$membro->id") }}" class="btn btn-primary btn-xs  action botao_acao  "  
										data-toggle="tooltip" data-placement="bottom" title="Visualiza esse Membro"> 
										<i class="glyphicon glyphicon-eye-open "></i>
									</a>
										
									<a href="{{url("visitantes/$membro->id/edit") }}" class="btn btn-warning btn-xs action botao_acao  " 
										data-toggle="tooltip" data-placement="bottom" title="Edita esse Membro">  
										<i class="glyphicon glyphicon-pencil "></i>
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
  	<script src="{{asset('datatables/datatables.net/js/jquery.dataTables.min.js') }}"                  type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"            type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}"         type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"       type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-buttons/js/buttons.flash.min.js') }}"              type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-buttons/js/buttons.html5.min.js') }}"              type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-buttons/js/buttons.print.min.js') }}"              type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"       type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}"   type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"     type="text/javascript"></script>
  	<script src="{{asset('datatables/datatables.net-scroller/js/dataTables.scroller.min.js') }}"       type="text/javascript"></script>
  	<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"                   type="text/javascript"></script>
  	<script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"                 type="text/javascript"></script>

  	<script>
	 	$(document).ready(function(){
			@if (session('sucesso'))
				swal({
					title:  'Parabéns',
					text:   ' {!! session('sucesso') !!}',
					type:   'success'
				});
			@endif
			
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			$("#tabela-visitantes").DataTable({

		  	language : {
			 	'url' : '{{asset('js/portugues.json') }}',
			 	"decimal": ",",
			 	"thousands": "."
		  	}, 
		  		stateSave: true,
				stateDuration: -1,
				responsive: true,
				"columnDefs": 
				[
					{ className: "text-center", "targets": [2,4] },
					{ className: "text-right",  "targets": [1] }
				]

			});
		});
  	</script>
@endpush



