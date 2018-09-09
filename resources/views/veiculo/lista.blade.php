@extends('gentelella.layouts.app')

@section('content')

	<!-- page content -->
   <div class="x_panel modal-content ">
	  <div class="x_title">
		 <h2> Listagem de Veículos </h2>
		 <a href="{{ url('veiculo/create') }}" 
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
				  
			<table class="table table-hover table-striped compact" id="tb_veiculos">
			   <thead>
				  <tr>
					 <th>Placa</th> 
					 <th>Modelo</th>
					 <th>Cor</th>
					 <th>Ano</th>
					 <th>Secretaria</th>
					 <th>Base</th>
					 <th>Ações</th>
				  </tr>						
			   </thead>

			   <tbody>
				  @foreach($veiculos as $key=> $veiculo)
					 <tr>
						<td>{{ $veiculo->placa }}</td> 
						<td>{{ $veiculo->modelo }}</td>
						<td>{{ $veiculo->cor }}</td>
						<td>{{ $veiculo->ano }}</td>
						<td>{{ $veiculo->secretaria->sigla }}</td>
						<td>{{ $veiculo->base->nome }}</td>

						<td class="actions">

							<a href="{{ url("abastece/$veiculo->id") }}"  
								id="btn_abastece_veiculo"
								class="btn_email_senha btn btn-info btn-xs action botao_acao " 
								data-toggle="tooltip" 
								data-veiculo = {{ $veiculo->id }}
								data-placement="bottom" 
								title="Abastece esse Veículo">  
								<i class="fas fas-tabela fa-gas-pump"></i>
						   </a>

						   
							<a href="{{ url("veiculo/$veiculo->id/edit") }}" 
								class="btn btn-warning btn-xs action botao_acao " 
								data-toggle="tooltip" 
								data-veiculo = {{ $veiculo->id }}
								data-placement="bottom" 
								title="Edita esse Veiculo">  
								<i class="glyphicon glyphicon-pencil "></i>
						   </a>
							
							<a href="#" 
								id="btn_exclui_veiculo"
								class="btn btn-danger btn-xs  action botao_acao  "  
								data-toggle="tooltip" 
								data-veiculo = {{ $veiculo->id }}
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
   <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>                   
   <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"                   type="text/javascript"></script>
	<script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"                 type="text/javascript"></script>
	

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
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			
			var tabela_veiculos = $("#tb_veiculos").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
				stateDuration: -1,
							
				"columnDefs": 
				[
					{ className: "text-center", "targets": [4] },
					
					{render: function ( data, type, row ) {
						return data.substring(0, 3) +'-'+ data.substring(3, 8);
						},
						targets: 0
					}
				]
			});

			

			//botão de exclusão
			$("table#tb_veiculos").on("click", "#btn_exclui_veiculo",function(){
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
									$("table#tb_veiculos").DataTable().row( btn.parents('tr') ).remove().draw();
									
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



