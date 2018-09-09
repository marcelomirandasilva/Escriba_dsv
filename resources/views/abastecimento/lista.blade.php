@extends('gentelella.layouts.app')

@section('content')

	<!-- page content -->
   <div class="x_panel modal-content ">
	  	<div class="x_title">
			 <h2> Listagem de Abastecimentos </h2>
		 	<a href="{{ url('abastecimento/create') }}" 
				class="btn-circulo btn btn-primary btn-md   pull-right " 
				data-toggle="tooltip"  
				data-placement="bottom" 
				title="Adiciona um Veículo">
				<span class="fa fa-plus">  </span>
		 	</a>
		 	<div class="clearfix"></div>
	  	</div>
	  	<div class="x_panel ">
		 	<div class="x_content">
				  
				
				<table class=" table table-hover table-striped compact" id="tb_abastece">
					<thead>
						<tr>
							<th>Data</th> 
							<th>Veículo</th> 
							<th>Posto</th>
							<th>Combustível</th>
							<th>Preço/L</th>
							<th>Abastecido</th>
							<th>Total</th>
							<th>Ações</th>
						</tr>						
					</thead>

					<tbody>
						@foreach($abastecimentos as $key=> $abastecimento)
							<tr>
								<td>{{ $abastecimento->created_at }}</td> 
								@if($abastecimento->veiculo->deleted_at)
									<td style="color:red">{{ $abastecimento->veiculo->placa}}    </td> 
								@else
									<td>{{ $abastecimento->veiculo->placa }}</td> 
								@endif
								<td>{{ $abastecimento->posto->nome }}</td>
								<td>{{ $abastecimento->combustivel }}</td>
								<td>{{ $abastecimento->valor }}</td>
								<td>{{ $abastecimento->qtd }}</td>
								<td>{{ ($abastecimento->qtd * $abastecimento->valor) }}</td>

								<td class="actions">

									
									<a href="{{ url("abastecimento/$abastecimento->id/edit") }}" 
										class="btn btn-warning btn-xs action botao_acao " 
										data-toggle="tooltip" 
										data-abastecimento = {{ $abastecimento->id }}
										data-placement="bottom" 
										title="Edita esse abastecimento">  
										<i class="glyphicon glyphicon-pencil "></i>
									</a>
									
									<a href="#" 
										id="btn_exclui_abastecimento"
										class="btn btn-danger btn-xs  action botao_acao  "  
										data-toggle="tooltip" 
										data-abastecimento = {{ $abastecimento->id }}
										data-placement="bottom" 
										title="Exclui esse Veiculo"> 
										<i class="glyphicon glyphicon-remove "></i>
									</a>
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
   <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" 			type="text/javascript"></script>                   
   <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"   type="text/javascript"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js" type="text/javascript"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.19/dataRender/datetime.js"  	type="text/javascript"></script>



	<script>
		$(document).ready(function(){

			
			@if (session('sucesso'))
				$.notify("{{ session('sucesso') }}", "success");
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

			//configuração da tabela		

			$.fn.dataTable.moment( 'DD.MM.YYYY HH:mm' );
			
			$("#tb_abastece").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
				stateDuration: -1,
							
				"columnDefs": 
				[
					{
						render: function ( data, type, row ) 
						{
							return data.substring(0, 3) +'-'+ data.substring(3, 8);
						},
						targets: 1
					},
					{
						render: function ( data, type, row )             
						{
							return (moment(data).format("DD/MM/YYYY - HH:mm:ss"));
						},
						targets: 0
					},
					{
						render: $.fn.dataTable.render.number( '.', ',', 3, 'R$' ),
						targets: [4,6]
					},
					{
						render: $.fn.dataTable.render.number( '.', ',', 3, '', ' L' ) ,
						targets: 5
					},

					{ targets: 4, className: 'dt-right'},
					{ targets: 5, className: 'dt-right'},
					{ targets: 6, className: 'dt-right'},
					{ targets: 7, className: 'dt-right'},

				]
			});

			

			//botão de exclusão
			$("table#tb_abastece").on("click", "#btn_exclui_veiculo",function(){
				event.preventDefault();
				let id_veiculo = $(this).data('veiculo');
				let btn = $(this);

				//console.log("botao btn_desativa -> ", $(this).data('veiculo'));
				swal({
					title: 'Confirma a EXCLUSÃO deste Veículo?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não'
				}).then((result) => {
					if (result.value) {
						$.post("{{ url('veiculo/') }}/"+id_veiculo, {
							_token  : "{{ csrf_token() }}",
							_method : 'DELETE',
							id: 			id_veiculo,
							},function(data){
								if(data =="ok"){

									//exclui a linha no datatables
									$("table#tb_abastece").DataTable().row( btn.parents('tr') ).remove().draw();
									
									swal(
										'Veículo EXCLUÍDO',
										' ',
										'success'
									)
								}
			
							})         
						
					} else {
						swal(
							'Exclusão Cancelada',
							' ',
							'error'
						)
					}
				});
			});
		});

		
		
	</script>

@endpush



