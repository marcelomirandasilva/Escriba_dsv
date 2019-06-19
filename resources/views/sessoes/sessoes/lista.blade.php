@extends('gentelella.layouts.app')

@section('content')

  <!-- page content -->
    	
	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Listagem de Sessões </h2>
			<botao_adiciona
				url="{{ url('sessoes/create') }}"
				descricao="Adiciona uma Sessão"
			/> 
			
		</div>
		<div class="x_content {{-- animated fadeInUp --}}">
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
										class="btn btn-danger btn-xs action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{$sessao->id}}
										data-placement="bottom"
										title="Apaga essa Sessão">
										<i class="glyphicon glyphicon-remove icone_botao_lista"></i>
									</a>
									<a href="{{ url("sessoes/$sessao->id/edit") }}"
										class="btn btn-warning btn-xs action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{$sessao->id}}
										data-placement="bottom"
										title="Edita essa Sessão">
										<i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
									</a>
									<a href="{{ url("sessoes/$sessao->id") }}"
										class="btn btn-primary btn-xs  action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{$sessao->id}}
										data-placement="bottom"
										title="Visualiza essa Sessão">
										<i class="glyphicon glyphicon-eye-open icone_botao_lista"></i>
									</a>
									<a href="{{ url("sessoes/$sessao->id") }}"
										class="btn btn-info btn-xs  action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{$sessao->id}}
										data-placement="bottom"
										title="Expediente da Sessão">
										<i class="glyphicon glyphicon-envelope icone_botao_lista"></i>
									</a>
									<a href="{{ url("sessoes/$sessao->id") }}"
										class="btn btn-info btn-xs  action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{$sessao->id}}
										data-placement="bottom"
										title="Ata da Sessão">
										<i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
									</a>
									<a href="#"
										id="btn_presenca"
										class="btn btn-success btn-xs action botao_lista pull-right "
										data-toggle="tooltip"
										data-sessao = {{ $sessao->id }}
										data-placement="bottom"
										title="Presença na Sessão">
										<i class="glyphicon glyphicon-hand-up icone_botao_lista"></i>
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


	{{-- REDIRECT JS https://github.com/mgalante/jquery.redirect --}}
	<script src="https://cdn.rawgit.com/mgalante/jquery.redirect/master/jquery.redirect.js"                 type="text/javascript"></script>

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
			  
			$("table#tabela_sessoes").on("click", "#btn_presenca",function(){
				event.preventDefault();
				let id_sessao = $(this).data('sessao');
				let btn = $(this);

				console.log(id_sessao);
				$.redirect(url_base + "/sessoes", {sessao: id_sessao}, "POST", "_blank");

/* 				window.location.href = url_base + "/sessoes/presencas/" + id_sessao;  */
			});


    	});
  	</script>
@endpush




