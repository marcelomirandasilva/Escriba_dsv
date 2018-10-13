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
			<form id="form_pressenca_sessao" method="post" action="{{ url("sessoes/$loja->id") }}" class="form-horizontal form-label-left" >
				{!! method_field('PUT') !!}
@else
			<form id="form_pressenca_sessao" method="post" action="{{ route('sessoes.store') }}" class="form-horizontal form-label-left" >
@endif
				{{ csrf_field() }}

				<input id="dados_sessao" name="dados_sessao" type="hidden">  

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
						@if( isset($loja))
							value="{{ $sessao->hh_inicio or old('hh_inicio') }}" >
						@else
							value="{{ $hh_inicio or old('hh_inicio') }}" >
						@endif
					</div>

					<div class="form-group col-md-1 col-xs-12 ">
						<label class="control-label" for="hh_termino">Término</label>
						<input id="hh_termino" class="form-control col-md-2 horas_input" name="hh_termino"  
						type="time" 
						@if( isset($loja))
							value="{{$sessao->hh_termino or old('hh_termino')}}" >
						@else
							value="{{ $hh_termino or old('hh_termino') }}" >
						@endif
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


					<div class=" form-group">
	
						<div class="col-md-4">
							<label class="control-label col-md-1 " for="no_membro"> Membro/visitante </label>
							<select   name="no_membro" id="no_membro" class="form-control col-md-4 no_membro" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($membros as $membro)
									<option value="{{$membro->id}}"> {{$membro->no_membro}} </option>    
								@endforeach
							</select>
						</div>
	
	
						<div class="col-md-4">
							<label class="control-label col-md-1 " for="no_cargo"> Cargo </label>
							<select   name="no_cargo" id="no_cargo" class="form-control col-md-4 no_cargo" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($cargos as $cargo)
									<option value="{{$cargo->id}}"> {{$cargo->no_cargo}} </option>    
								@endforeach
							</select>
						</div>

						<div class="col-md-1 ">
							<a id="bt_add_membro_sessao"
								data-target="#bt_add_membro_sessao"
								class="btn-circulo btn btn-primary btn-md   pull-right " 
								data-toggle="tooltip" 
								title="Adiciona o Membro a Sessão">
									<span class="fa fa-plus">  </span>
							</a> 
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
		let membros_tabela = [];
		let cargos_tabela = [];
		

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
			var cargos_na_tabela = [];
			$('#bt_add_membro_sessao').on( 'click', function () {
				t = $('#tb_presenca_sessao').DataTable();
				var no_membro 				= $("#no_membro :selected").val();
				var cargo_selecionado	 = $("#no_cargo :selected").val();
				
				if (cargo_selecionado == ""){
					//testa se o cargo está vazio
					$(".no_cargo").notify("O cargo deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else if (no_membro =="" ){
					//testa se as datas são maiores que 1900
					$(".no_membro").notify("O membro deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else{

					
					//busca se o membro está no array
					if ( membros_tabela.indexOf( $("#no_membro :selected").text()) >= 0 ){
						$(".no_membro").notify("Esse Membro já foi adicionado!!!",{
							className: "error",
							autoHideDelay: 5000
						});
					//busca se o cargo está no array
					}else if ( cargos_tabela.indexOf( $("#no_cargo :selected").text()) >= 0 ){
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
												data-toggle="tooltip" data-placement="bottom" title="Remove esse Membro">  
												<i class="glyphicon glyphicon-remove"></i>
							</a>`
						] ).draw( true );

						//adiciona o membro e o cargos nos arrays para fazer a busca
						membros_tabela.push($("#no_membro :selected").text());
						cargos_tabela.push($("#no_cargo :selected").text());

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
				
				var index_membro = membros_tabela.indexOf(dados_linha[0]);
				membros_tabela.splice(index_membro, 1);
				
				var index_cargo = cargos_tabela.indexOf(dados_linha[1]);
				cargos_tabela.splice(index_cargo, 1);
				
				t.row( $(this).parents('tr') ).remove().draw();		
			} );

			$("#form_pressenca_sessao").submit(function(){

				// Remover os cargos pré-existentes
				$("#form_pressenca_sessao .presencas").remove();

				// Iterar por todas as linhas da tabela
				for(i=0; i<t.data().length; i++){
	
					let linha = t.data()[i];

					// Stringificar os campos
					let presencas_em_string = JSON.stringify({
						no_membro:  linha[0].trim(),
						no_cargo:   linha[1].trim()
					});


					// Adicionar o novo cargo no formulário
					$("#form_pressenca_sessao").append("<input type='hidden' class='presencas' name='presencas[]' value='"+presencas_em_string+"'>");
				}
			});
			
			
		

		});
	</script>


@endpush

