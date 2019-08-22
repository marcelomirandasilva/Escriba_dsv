@extends('gentelella.layouts.app')

@section('content')
	
	{{-- @include('gentelella.layouts.partials.mensagens') --}}

	<div class="x_panel modal-content ">
		<div class="x_title">
			<h2> Presenças na Sessão </h2>
			
			<div class="clearfix"></div>
		</div>
		<div class="x_content animated fadeInUp">
				
@if( isset($presenca))
			<form id="form_presenca_sessao" method="post" action="{{ url("sessoes/$sessao->id") }}" class="form-horizontal form-label-left" >
				{!! method_field('PUT') !!}
@else
			<form id="form_presenca_sessao" method="post" action="{{ route('sessoes.store') }}" class="form-horizontal form-label-left" >
@endif
				{{ csrf_field() }}

				<input id="dados_sessao" name="dados_sessao" type="hidden">  

				<div class="col-md-12  col-xs-12 ">
					<div class=" form-group">
						<div class="col-md-2 col-xs-12  ">
							<label class="control-label" for="dt_sessao">Data da Sessão</label>
							<input type = "date" id="dt_sessao" class="form-control col-md-2" name="dt_sessao"  value="{{$sessao->dt_sessao}}" disabled>
						</div>

						<div class="col-md-1 col-xs-12 ">
							<label class="control-label" for="hh_inicio">Inicio</label>
							<input id="hh_inicio" class="form-control col-md-2 horas_input" name="hh_inicio"  value="{{ $sessao->hh_inicio}}" disabled>
						</div>

						<div class="col-md-1 col-xs-12 ">
							<label class="control-label" for="hh_termino">Término</label>
							<input id="hh_termino" class="form-control col-md-2 horas_input" name="hh_termino"  value="{{$sessao->hh_termino}}" disabled>
						</div>

						<div class=" col-md-6 col-xs-12">
							<label class="control-label " for="ic_tipo_sessao"> Tipo da Sessão </label>
							<input id="ic_tipo_sessao" class="form-control col-md-2" name="ic_tipo_sessao"  value="{{$sessao->ic_tipo_sessao}}" disabled>
						</div>

						<div class="col-md-2 col-xs-12 ">
							<label class="control-label " for="ic_grau"> Grau da Sessão </label>
							<input id="ic_grau" class="form-control col-md-2" name="ic_grau"  value="{{$sessao->ic_grau}}" disabled>
						</div>
					</div>

					

					<div class=" form-group">
							<div class="col-md-5">
							<label class="control-label col-md-1 " for="no_membro"> Membro/visitante </label>
							<select   name="no_membro" id="no_membro" class="form-control col-md-4 no_membro" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($membros as $membro)
									<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
								@endforeach
							</select>
						</div>
	
						<div class="col-md-5">
							<label class="control-label col-md-1 " for="no_cargo"> Cargo </label>
							<select   name="no_cargo" id="no_cargo" class="form-control col-md-4 no_cargo" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($cargos as $cargo)
									<option value="{{$cargo->id}}"> {{$cargo->no_cargo}} </option>    
								@endforeach
							</select>
						</div>

						<div class="col-md-1 ">
							<button id="bt_add_membro_sessao"
								data-target="#bt_add_membro_sessao"
								class="btn-circulo btn btn-primary btn-md   pull-right " 
								data-toggle="tooltip" 
								title="Adiciona o Membro a Sessão"
								style="margin-top: 26px; margin-bottom: 0px;">
									<span class="fa fa-plus">  </span>
							</button> 
						</div>
					</div>
				
				

					<!------------------------------------>

					<div class="x_content ">
						<div class="panel-body">
							<table class="table table-striped display compact" id="tb_presenca_sessao">
								<thead>
									<tr>
										<th> Membro/visitante     </th>
										<th> Cargo    </th>
										<th> Ações     </th>
									</tr>
								</thead>
								<tbody>
									@foreach($dados_tabela as $key => $dados )
										<tr>
											
											<td>{{ $dados['membro']      }}</td>
											<td>{{ $dados['cargo']      }}</td>
											<td>
												<a class="btn btn-warning btn-xs action btn_tb_membro_remove" 
													data-id={{$key}}
													data-membro={{$dados['membro_id']}} 
													data-cargo={{$dados['cargo_id']}} 
													data-toggle="tooltip" data-placement="bottom" title="Remove esse Membro">  
													<i class="glyphicon glyphicon-remove"></i>
												</a>
											</td>
										</tr>
									@endforeach
									
								</tbody>
							</table>
						</div>
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

		let contador_linhas_tabela = 0;
		
		let tabela_membros_id = [];
		let tabela_cargos_id  = [];


		$(document).ready(function() {
			
			
			
			//configura a tabela de cargos
			$("#tb_presenca_sessao").DataTable({
				language : {
									'url' : '{{ asset('js/portugues.json') }}',
									"decimal": ",",
									"thousands": "."
								},
				stateDuration: -1,
				deferRender: true,
				compact: true,
				paginate: false,
				searching: false,
				orderFixed: [ 1, 'asc' ],
        	});

		
			//adiciona cargos na tabela
			$('#bt_add_membro_sessao').on( 'click', function () {
				event.preventDefault();
				t = $('#tb_presenca_sessao').DataTable();
				var membro_id 		= $("#no_membro :selected").val();
				var cargo_id		= $("#no_cargo :selected").val();
				
				/* if (cargo_id == ""){
					//testa se o cargo está vazio
					$(".no_cargo").notify("O cargo deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else */ if (membro_id =="" ){
					//testa se as datas são maiores que 1900
					$(".no_membro").notify("O membro deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else{

					
					//busca se o membro está no array
					if ( tabela_membros_id.indexOf( $("#no_membro :selected").val()) >= 0 ){
						$(".no_membro").notify("Esse Membro já foi adicionado!!!",{
							className: "error",
							autoHideDelay: 5000
						});
					//busca se o cargo está no array
					}else if ( tabela_cargos_id.indexOf( $("#no_cargo :selected").val()) >= 0 ){
						$(".no_cargo").notify("Esse Cargo já foi adicionado!!!",{
							className: "error",
							autoHideDelay: 5000
						});
					}else{
						//se não tiver adicionado na tabela
						t.row.add( [
							$("#no_membro :selected").text(),
							$("#no_cargo :selected").text(),
							`<a class="btn btn-warning btn-xs action btn_tb_membro_remove" data-id="${contador_linhas_tabela}"
												data-membro="${membro_id}" 
												data-cargo="${cargo_id}" 
												data-toggle="tooltip" data-placement="bottom" title="Remove esse Membro">  
												<i class="glyphicon glyphicon-remove"></i>
							</a>`
						] ).draw( true );

						//adiciona o membro e o cargos nos arrays para fazer a busca
						tabela_membros_id.push($("#no_membro :selected").val());
						tabela_cargos_id.push($("#no_cargo :selected").val());

						contador_linhas_tabela++;
					}
				}
			} );
			
			//remove cargos da tabela

			$('#tb_presenca_sessao').on('click', 'tbody  .btn_tb_membro_remove', function () {
				/* https://stackoverflow.com/questions/43435900/get-datatables-row-data-on-button-click */
				//console.log( t.row( $(this).closest('tr') ).data() );

				//remove o membro e o cargo dos arrays de busca
				let dados_linha = t.row( $(this).closest('tr') ).data();
				//console.log(dados_linha);
				
				var index_membro = tabela_membros_id.indexOf(dados_linha[0]);
				tabela_membros_id.splice(index_membro, 1);

				
				var index_cargo = tabela_cargos_id.indexOf(dados_linha[1]);
				tabela_cargos_id.splice(index_cargo, 1);
				
				t.row( $(this).parents('tr') ).remove().draw();		
			} );


			$("#form_presenca_sessao").submit(function(){

//				// Remover os cargos pré-existentes
//				$("#form_presenca_sessao .presencas").remove();
//
//				// Iterar por todas as linhas da tabela
//				for(i=0; i<t.data().length; i++){
//	
//					let linha = t.data()[i];
//
//					// Stringificar os campos
//					let presencas_em_string = JSON.stringify({
//						no_membro:  linha[0].trim(),
//						no_cargo:   linha[1].trim()
//					});
//
//					// Adicionar o novo cargo no formulário
//					$("#form_presenca_sessao").append("<input type='hidden' class='presencas' name='presencas[]' value='"+presencas_em_string+"'>");
//				}
//


				for(i=0; i<tabela_membros_id.length; i++){
	
					// Stringificar os campos
					let presencas_em_string = JSON.stringify({
						membro_id:  tabela_membros_id[i],
						cargo_id:   tabela_cargos_id[i]
					});

					// Adicionar o novo cargo no formulário
					$("#form_presenca_sessao").append("<input type='hidden' class='presencas' name='presencas[]' value='"+presencas_em_string+"'>");
				}

				console.log("ssss");
			
			});
			
			
		

		});
	</script>


@endpush

