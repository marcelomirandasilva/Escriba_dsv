@extends('gentelella.layouts.app')

@push('styles')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('content')
	<div class="right_col" role="main">
		<!---------------------- Mostra os erros de validação ------------------------------>
		@if( count($errors) > 0 )
				<div class="alert alert-danger alert-dismissible" role="alert">
					@foreach($errors->all() as $erro)
							<p> {{ $erro }} </p>
					@endforeach
				</div>
		@endif
		<!------------------------------------------------------------------------------------>
			
		<div class="clearfix"></div>

		<div class="row caixa">
			<div class="col-md-12">
				<div class="x_panel modal-content">
					<div class="x_title">
						<h2> {{ $titulo }} </h2>
						<div class="clearfix"></div>
					</div>
					<!-- conteudo aqui-->
					<div class="col-md-12 ">
						<div class="x_panel">
							<div class="x_content ">
								<div class="" role="tabpanel" data-example-id="togglable-tabs">
									@if( isset($edita))
										<form id="form_membro" method="post" action="{{ url("membros/$membro->id") }}"  >
												{!! method_field('PUT') !!}
									@else
										<form id="form_membro" method="post" action="{{ route('membros.store') }}"  >
									@endif

										{{ csrf_field() }}
										<ul id="myTab" class="nav nav-tabs bar_tabs " role="tablist">
												
											<li role="presentation" class="active">
												<a href="#tab_content1" role="tab" id="tab_principal" data-toggle="tab" class="tab_membro">   Principal   </a> 
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content2" role="tab" id="tab_documentos" data-toggle="tab" class="tab_membro">   Documentos  </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content3" role="tab" id="tab_enderecos" data-toggle="tab" class="tab_membro">   Endereços   </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content4" role="tab" id="tab_contatos" data-toggle="tab" class="tab_membro">   Contatos    </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content5" role="tab" id="tab_dependentes" data-toggle="tab" class="tab_membro">   Dependentes </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content6" role="tab" id="tab_cerimonias" data-toggle="tab" class="tab_membro">   Cerimonias  </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content7" role="tab" id="tab_cargos" data-toggle="tab" class="tab_membro">   Cargos  </a>
											</li>

											<li role="presentation" class="">      
																		<a href="#tab_content8" role="tab" id="tab_condecoracoes" data-toggle="tab" class="tab_membro">   Condecorações  </a>
											</li>
											
											<li role="presentation" class="">      
												<a href="#tab_content9" role="tab" id="tab_observacoes" data-toggle="tab" class="tab_membro">   Anotações  </a>
											</li>
										</ul>

										<div id="myTabContent" class="tab-content">
											<div role="tabpanel" class="tab-pane fade active in"  id="tab_content1" aria-labelledby="tab_pri">
												@include('membros/create_principal')
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content2" aria-labelledby="tab_doc">
												@include('membros/create_documentos')
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content3" aria-labelledby="tab_end">
												@include('membros/create_endereco')
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content4" aria-labelledby="tab_con">
												@include('membros/create_contatos')
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content5" aria-labelledby="tab_dep">
												@if (isset($edita)) 
													@include('membros/edit_dependentes')
												@else
													@include('membros/create_dependentes')
												@endif
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content6" aria-labelledby="tab_cer">
												@include('membros/create_cerimonias')
											</div>

											<div role="tabpanel" class="tab-pane fade"            id="tab_content7" aria-labelledby="tab_carg">
												@if (isset($edita)) 
													@include('membros/edit_cargos')
												@else
													@include('membros/create_cargos')
												@endif
											</div>
							
											<div role="tabpanel" class="tab-pane fade"            id="tab_content8" aria-labelledby="tab_cond">
												@include('membros/create_condecoracoes')
											</div>
							
											<div role="tabpanel" class="tab-pane fade"            id="tab_content9" aria-labelledby="tab_obs">
												@include('membros/create_anotacoes')
											</div>
										</div>
										
										<!-- botoes --> 
										{{-- <div class="ln_solid"></div> --}}
										<div class="form-group">
											<div class="col-md-offset-8">
												<a href="{{ url("membros") }}"  class="btn btn-danger  pull-right">  Cancela     </a>
												<button id="send" type="submit" class="btn btn-success pull-right">  Confirma    </button>
											</div>
										</div>
										<!-- fim botoes --> 
									</form>
								</div> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal ---------------------------------------------------------------------------------------------->
	<div class="modal fade" id="cad_loja" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				
				<div class="alert alert-danger" style="display: none" role="alert">
					This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
				</div>

				<div class="modal-body">

					<form id="form_modal_" method="post" action="#"  >

						{{ csrf_field() }}

						<div class="item form-group">
							<label class="control-label col-md-2 col-sm-2 col-xs-12" for="co_titulo">
								Título <span class="required">*</span>
							</label>
							<div class="col-md-2 ">
								<input id="co_titulo" class="form-control col-md-2"  name="co_titulo" placeholder="ARLS" required="required" type="text" style="text-transform: uppercase;" autofocus>
							</div>
						</div>

						<div class="item form-group">
							<label class="control-label col-md-2 " for="no_loja">
								Nome 
								<span class="required">*</span>
							</label>
							<div class="col-md-9">
								<input type="no_loja" id="no_loja" name="no_loja" placeholder="Nome da Loja" required="required" class="form-control" type="text">
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-2" for="nu_loja">
								Número 
								<span class="required">*</span>
							</label>
							<div class="col-md-2 " >
								<input type="nu_loja" id="nu_loja" name="nu_loja" placeholder="00000" required="required" class="form-control  " type="number" min="0" max="9999999" step="1">
							</div>
						</div>

						<div class="item form-group">
							<label class="control-label col-md-2 " for="potencia_id">Potência*</label>
							<div class="col-md-9" >
								<select id="potencia_id"  class="form-control col-md-5 "  name="potencia_id"  placeholder="Nome da Potência" type="text" data-live-search="true" style="width:90%;">
									@foreach($potencias as $potencia)
										@if ($potencia->no_potencia == ('Grande Oriente do Brasil'))
											<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
										@else 
											<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="item form-group">
							<label class="control-label col-md-2 " for="ic_rito">Rito*</label>
							<div class="col-md-5 ">
								<select id="ic_rito" class="form-control col-md-2" name="ic_rito" placeholder="Rito praticado" type="text">
									@foreach($ritos as $rito)
										@if ($rito == ('Brasileiro'))
											<option value="{{$rito}}" selected="selected"> {{$rito}} </option>          
										@else 
											<option value="{{$rito}}"> {{$rito}} </option>  
										@endif
									@endforeach
								</select>
							</div>
						</div>
					</form>  
				</div>
				<div class="modal-footer">
					<div class="col-md-11 ">
						<button type="button" class="envia_nova_loja btn btn-success" data-toggle="tooltip" title="Confirma a operação"> 
							Confirma    
						</button>

						<button id="fecha_modal_cad_loja" type="button" data-toggle="tooltip" class="btn btn-danger btn_acao" title="Cancela e retorna a tela anterior" data-dismiss="modal">
							Cancela	
						</button>
					</div>
				</div>
			</div>
		</div> 
	</div>
	<!-- /Modal ---------------------------------------------------------------------------------------------->


@endsection


@push('scripts')
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
	  
	<script type="text/javascript">
		var t = "";
		@if (session('sucesso'))
		swal({
			title:  'Parabéns',
			text:   ' {!! session('sucesso') !!}',
			type:   'success'
		});
		@endif
		
		
		var cont_telefone=1 
		var cont_email=1;
		var cont_dependente=1;
		let contador_linhas_tabela = 0;
		
		$(document).ready(function(){
			//$("#telefones[0][nu_telefone]").inputmask("(99)9999-9999");
			$("body").find("input.telefone").inputmask('(99)9999-9999');
			
			$.fn.dataTable.moment( 'DD/MM/YYYY' );

			
			//========================================================================================================
			//========================================================================================================
			//==============================            PRINCIPAL                    =================================
			//========================================================================================================
			//========================================================================================================		

			if( $('#send').on( 'click', function (e) {
				//e.preventDefault();
				console.log($("#ic_grau :selected").text());
				//testa se o cargo está vazio

				console.log("entrou candiato");

				if ( $("#ic_grau :selected").text() === "Candidato")
				{
					$("#co_cim").val('0000000');
					console.log("entrou candiato");
				}

				if ( $("#no_membro").val() === "")
				{
					$("#tab_principal").click();
					$("#no_membro").notify("O Nome do Membro deve ser informado",{className: "error",autoHideDelay: 5000});

				}else if ( $("#ic_grau :selected").text() === " --- "){

					$("#tab_principal").click();
					$("#ic_grau").notify("O Grau do Membro deve ser informado",{className: "error",autoHideDelay: 5000});

				}else if ( $("#co_cim").val() === ""){

					$("#tab_principal").click();
					$("#co_cim").notify("O Número do CIM deve ser informado",{className: "error",autoHideDelay: 5000});
				};
				
			}));

			//desabilita data de casamento se não for casado
			$("select#ic_estado_civil").change(function(){
				if($("select#ic_estado_civil>option:selected").text() == " Casado ")
				{
					document.getElementById("dt_casamento").disabled = false;
				} else {
					document.getElementById("dt_casamento").disabled = true;
				}
			});

			//desabilita campos de acordo com o grau
			$("select#ic_grau").change(function(){ 
				var valor = $(this).val();
				
				$("#tab_cerimonias" ).show();
				$("#tab_condecoracoes" ).show();                  

				document.getElementById("dt_cerimonia4").disabled 	= false; //filiação
				document.getElementById("dt_cerimonia5").disabled 	= false; //regularização
				document.getElementById("co_cim").disabled 			= false;


				document.getElementById("dt_cerimonia0").disabled 	= false;	//iniciação
				document.getElementById("loja_id0").disabled 		= false;

				document.getElementById("dt_cerimonia1").disabled	= false;	//Elevação
				document.getElementById("loja_id1").disabled 		= false;

				document.getElementById("dt_cerimonia2").disabled 	= false;	//Exaltação
				document.getElementById("loja_id2").disabled 		= false;

				document.getElementById("dt_cerimonia3").disabled 	= false;	//Instalação
				document.getElementById("loja_id3").disabled 		= false;


				if (valor == "Candidato"){
						document.getElementById("co_cim").disabled = true;
						$("#tab_cerimonias" ).hide();
						$("#tab_condecoracoes" ).hide();                  
						document.getElementById("co_cim").disabled = true;
						
				} else if (valor == "Aprendiz"){

						$("#tab_condecoracoes" ).hide();                  
						
						document.getElementById("dt_cerimonia1").disabled 	= true;
						document.getElementById("loja_id1").disabled		 	= true;
						document.getElementById("dt_cerimonia2").disabled 	= true;
						document.getElementById("loja_id2").disabled 		= true;
						document.getElementById("dt_cerimonia3").disabled 	= true;
						document.getElementById("loja_id3").disabled 		= true;

						document.getElementById("co_cim").disabled 			= false;

				} else if (valor == "Companheiro"){

						$("#tab_condecoracoes" ).hide();                  
					
						document.getElementById("dt_cerimonia2").disabled 	= true;
						document.getElementById("loja_id2").disabled 		= true;
						document.getElementById("dt_cerimonia3").disabled 	= true;
						document.getElementById("loja_id3").disabled 		= true;

						document.getElementById("co_cim").disabled 			= false;

				} else if (valor == "Mestre"){
						
						document.getElementById("dt_cerimonia3").disabled 	= true;
						document.getElementById("loja_id3").disabled 		= true;

						document.getElementById("co_cim").disabled 			= false;
				}
			});


			//========================================================================================================
			//========================================================================================================
			//==============================            CARGOS                       =================================
			//========================================================================================================
			//========================================================================================================

			//configura a tabela de cargos
			$("#tabela_cargos").DataTable({
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
			$('#cad_cargo').on( 'click', function () {
				t = $('#tabela_cargos').DataTable();
				var cargo_selecionado = $("#no_cargo :selected").val();
				var aa_inicio = $("#aa_inicio").val();
				var aa_termino = $("#aa_termino").val();
				var aa_i = $("#aa_inicio").val();
				var aa_t = $("#aa_termino").val();

				if (cargo_selecionado == ""){
					//testa se o cargo está vazio
					$(".no_cargo").notify("O cargo deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else if (aa_inicio < 1900 ){
					//testa se as datas são maiores que 1900
					$("#aa_inicio").notify("Data incorreta",{
						className: "error",
						autoHideDelay: 5000
					});
				}else if (aa_termino < 1900 ){
					//testa se as datas são maiores que 1900
					$("#aa_termino").notify("Data incorreta",{
						className: "error",
						autoHideDelay: 5000
					});
				}else{
					t.row.add( [
						$("#no_cargo :selected").text(),
						$("#aa_inicio").val(),
						$("#aa_termino").val(),
						`<a class="btn btn-warning btn-xs action btn_tb_cargo_remove" data-id="${contador_linhas_tabela}" 
											data-toggle="tooltip" data-placement="bottom" title="Remove esse Cargo">  
											<i class="glyphicon glyphicon-remove"></i>
						</a>`
					] ).draw( true );

					contador_linhas_tabela++;
				};
			} );
			
			//remove cargos da tabela
			$('#tabela_cargos').on('click', '.btn_tb_cargo_remove', function () {
				t.row( $(this).parents('tr') )
					.remove()
					.draw();		
			} );

			$("#form_membro").submit(function(){

				// Remover os cargos pré-existentes
				$("#form_membro .cargos_membros").remove();

				// Iterar por todas as linhas da tabela
				for(i=0; i<t.data().length; i++){
	
					let linha = t.data()[i];

					// Stringificar os campos
					let cargos_em_string = JSON.stringify({
						cargo_id: linha[0],
						aa_inicio: linha[1], 
						aa_termino: linha[2]});

					// Adicionar o novo cargo no formulário
					$("#form_membro").append("<input type='hidden' class='cargos_membros' name='cargos_membros[]' value='"+cargos_em_string+"'>");
				}
			});

			//========================================================================================================
			//========================================================================================================
			//==============================            ENDEREÇO                     =================================
			//========================================================================================================
			//========================================================================================================			


			//Atualiza os campos do endereço de acordo com o cep digitado
			
			//Se o pais for diferente de BRASIL, desabilita o cep e UF
			$("#no_pais0").change(function(){
				if($("#no_pais0>option:selected").text() == " Brasil ")
				{
						console.log("brasil");
						$("#cep0, #sg_uf0").removeAttr('disabled');
				}else{
						$("#cep0, #sg_uf0").attr('disabled', 'disabled');
				}
			});

			$("#no_pais1").change(function(){
				console.log("mudou");
				
				if($("#no_pais1>option:selected").text() == " Brasil ")
				{
					$("#cep1, #sg_uf1").removeAttr('disabled');
				}else{
					$("#cep1, #sg_uf1").attr('disabled', 'disabled');
				}
			});
			//==========================================================
			
			//Quando o campo CEP RESIDENCIAL perde o foco.
			$("#cep0").blur(function() {
				
				//Nova variável "cep" somente com dígitos.
				var cep = $(this).val().replace(/\D/g, '');

				console.log(cep);
				//Verifica se campo cep possui valor informado.
				if (cep != "") {

						//Expressão regular para validar o CEP.
						var validacep = /^[0-9]{8}$/;

						//Valida o formato do CEP.
						if(validacep.test(cep)) {

							//Preenche os campos com "..." enquanto consulta webservice.
							$("#no_logradouro0").val("...");
							$("#no_bairro0").val("...");
							$("#no_municipio0").val("...");
							$("#sg_uf0").val("...");
							$("#ibge0").val("...");

							//Consulta o webservice viacep.com.br/
							$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

									if (!("erro" in dados)) {
										//Atualiza os campos com os valores da consulta.
										$("#no_logradouro0").val(dados.logradouro);
										$("#no_bairro0").val(dados.bairro);
										$("#no_municipio0").val(dados.localidade);
										$("#sg_uf0").val(dados.uf);
										$("#ibge").val(dados.ibge);
									} //end if.
									else {
										//CEP pesquisado não foi encontrado.
										limpa_formulário_cep(0);
										alert("CEP não encontrado.");
									}
							});
						} //end if.
						else {
							//cep é inválido.
							limpa_formulário_cep(0);
							alert("Formato de CEP inválido.");
						}
				} //end if.
				else {
						//cep sem valor, limpa formulário.
						limpa_formulário_cep(0);
				}
			});

			//Quando o campo CEP COMERCIAL perde o foco.
			$("#cep1").blur(function() {
				
				//Nova variável "cep" somente com dígitos.
				var cep = $(this).val().replace(/\D/g, '');

				console.log(cep);
				//Verifica se campo cep possui valor informado.
				if (cep != "") {

						//Expressão regular para validar o CEP.
						var validacep = /^[0-9]{8}$/;

						//Valida o formato do CEP.
						if(validacep.test(cep)) {

							//Preenche os campos com "..." enquanto consulta webservice.
							$("#no_logradouro1").val("...");
							$("#no_bairro1").val("...");
							$("#no_municipio1").val("...");
							$("#sg_uf1").val("...");
							$("#ibge1").val("...");

							//Consulta o webservice viacep.com.br/
							$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

									if (!("erro" in dados)) {
										//Atualiza os campos com os valores da consulta.
										$("#no_logradouro1").val(dados.logradouro);
										$("#no_bairro1").val(dados.bairro);
										$("#no_municipio1").val(dados.localidade);
										$("#sg_uf1").val(dados.uf);
										$("#ibge").val(dados.ibge);
									} //end if.
									else {
										//CEP pesquisado não foi encontrado.
										limpa_formulário_cep(1);
										alert("CEP não encontrado.");
									}
							});
						} //end if.
						else {
							//cep é inválido.
							limpa_formulário_cep(1);
							alert("Formato de CEP inválido.");
						}
				} //end if.
				else {
						//cep sem valor, limpa formulário.
						limpa_formulário_cep(1);
				}
			});

			
			
			//========================================================================================================
			//========================================================================================================
			//==============================            CONTATOS                     =================================
			//========================================================================================================
			//========================================================================================================		

			// Clonar div panel_telefones
			$(".clonar_tel").click(function(e){

				e.preventDefault();

				$(".panel_telefone").clone()

				// Adicionar a classe clone e remover a classe panel_telefones
				.addClass("telefone_clonado x_panel")
				.removeClass("panel_telefone")

				// Mostrar o botão excluir
				.find("button.excluir_tel").css("display","block")

				// Colocar os campos clonados no lugar correto
				.parent().parent().appendTo(".local_clone_tel")

				// Alterar os names dos inputs para preencher o vetor de telefone corretamente
				.find("select[name='telefones[0][ic_telefone]']")
						.attr("name", "telefones["+cont_telefone+"][ic_telefone]")
						.attr("id", "telefones["+cont_telefone+"][ic_telefone]")
						.val("")
				
				.parent().parent().parent().find("input[name='telefones[0][nu_telefone]']")
						.attr("name", "telefones["+cont_telefone+"][nu_telefone]")
						.attr("id", "telefones["+cont_telefone+"][nu_telefone]")
						.val("");
				
				// Incrementar o contador de telefone
				cont_telefone++;
			});
			
			$("body").on("change", ".tipo-telefone",function(){
				//console.log("mudou");
				var itemSelecionado = $(this).val();
				var nomeSelecionado = this.attributes["data-cod"].value;


				console.log(nomeSelecionado);

				if(itemSelecionado == 'Celular')
				{
					console.log("celular");
					$(this).parent().parent().find("input.telefone").inputmask('(99)99999-9999');
				}else{
					console.log("outros");
					$(this).parent().parent().find("input.telefone").inputmask('(99)9999-9999');
				}
			});


			// Botão de excluir telefone

			$("body").on("click", "button.excluir_tel", function(){ 
				$(this).parent().parent().remove(); 
			});

			//=================================== clone email====================================================
			// Clonar div clonar_email
			$(".clonar_email").click(function(e){

				e.preventDefault();

				$(".panel_emails").clone()

				// Adicionar a classe clone e remover a classe 

				.addClass("email_clonado x_panel")
				.removeClass("panel_emails")

				// Mostrar o botão excluir

				.find("button.excluir_email").css("display","block")

				// Colocar os campos clonados no lugar correto

				.parent().parent().appendTo(".local_clone_email")

				// Alterar os names dos inputs para preencher o vetor de dependentes corretamente

				.find("input[name='emails[0][email]']")
						.attr("name", "emails["+cont_email+"][email]")
						.attr("id", "emails["+cont_email+"][email]")
						.val("");
				
				// Incrementar o contador de dependentes
				console.log(cont_email);
				cont_email++;
			});

			// Botão de excluir telefone

			$("body").on("click", "button.excluir_email", function(){ 

				$(this).parent().parent().remove(); 

			});
	
			
			//========================================================================================================
			//========================================================================================================
			//==============================            DEPENDENTE                   =================================
			//========================================================================================================
			//========================================================================================================		

			//=================================== clone DEPENDENTE====================================================

			$(".clonar_dependente").click(function(e){
				e.preventDefault();
				
				//conta quantos paineis existem na tela
				let 	qtd_painel = document.getElementsByClassName('dependente_clonado').length;
				qtd_painel = qtd_painel + document.getElementsByClassName('clone_dependente').length;
				//qtd_painel = qtd_painel + document.getElementsByClassName('panel_dependente').length;

				cont_dependente = qtd_painel+1;

				$(".clone_dependente").clone()

				// Adicionar a classe clone e remover a classe 
				.addClass("dependente_clonado x_panel")
				.removeClass("clone_dependente")

				// Mostrar o botão excluir
				.find("button.excluir_dependente").css("display","block")

				// Colocar os campos clonados no lugar correto
				.parent().parent().parent().appendTo(".local_clone_dependente")

				// Alterar os names dos inputs para preencher o vetor de dependentes corretamente
				.find("input.nome-dependente")
						.attr("name", "dependentes["+cont_dependente+"][no_dependente]")
						.attr("id", "dependentes["+cont_dependente+"][no_dependente]")
						.val("")
						.parent().parent().parent()

				.find("select.sexo-dependente")
						.attr("name", "dependentes["+cont_dependente+"][ic_sexo]")
						.attr("id", "dependentes["+cont_dependente+"][ic_sexo]")
						.val("")

				.parent().parent().find("select.parentesco-dependente")
						.attr("name", "dependentes["+cont_dependente+"][ic_grau_parentesco]")
						.attr("id", "dependentes["+cont_dependente+"][ic_grau_parentesco]")
						.val("")

				.parent().parent().find("input.nascimento-dependente")
						.attr("name", "dependentes["+cont_dependente+"][dt_nascimento]")
						.attr("id", "dependentes["+cont_dependente+"][dt_nascimento]")
						.val("");
				
				// Incrementar o contador de dependentes
				cont_dependente++;
			});

			// Botão de excluir dependente
			$("body").on("click", "button.excluir_dependente", function(e){ 
				var self = this;
				 e.preventDefault();

            swal({
					title: "Atenção!",
					text: "Você realmente deseja excluir o(a) dependente ?",
					type: "warning",
					showCancelButton: true,

					confirmButtonClass: "btn-cor-perigo modal-content",
					confirmButtonText: "Sim, exclua!",
					cancelButtonClass: "btn-cor-padrao modal-content",
					cancelButtonText: "Cancelar",
					confirmButtonClass: 'btn-cor-perigo modal-content',
				 }).then(result => {
					if (result.value) {
						$(self).parent().parent().parent().addClass('animated fadeOut').fadeOut(985).queue(function() { $(self).parent().parent().parent().remove(); })
						
						
						
					}
				})
 			});

			$("#form_membro").submit(function(e){
				//e.preventDefault();
				console.log("Enviou o form", $(this).serializeArray())
			})

		});     

		

		//=========== AUTOCOMPLETE CERIMONIAS ===========================
		new autoComplete({
				selector: 'input[name="fk_loja_iniciacao"]',
				minChars: 1,
				offsetLeft: 1,
				delay: 50,
				source: function(term, suggest){
					term = term.toLowerCase();
					var choices = [];
					@foreach($lojas as $loja)
							choices.push('{{$loja->no_loja}}');  
					@endforeach
						
					var matches = [];
					for (i=0; i<choices.length; i++)
							if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
								suggest(matches);
				}
		});
			
		//--------------------------------------------------------------
		new autoComplete({
				selector: 'input[name="fk_loja_elevacao"]',
				minChars: 1,
				offsetLeft: 1,
				delay: 50,
				source: function(term, suggest){
					term = term.toLowerCase();
					var choices = [];
					@foreach($lojas as $loja)
							choices.push('{{$loja->no_loja}}');  
					@endforeach
						
					var matches = [];
					for (i=0; i<choices.length; i++)
							if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
								suggest(matches);
				}
		});
			
		//--------------------------------------------------------------
		new autoComplete({
				selector: 'input[name="fk_loja_exaltacao"]',
				minChars: 1,
				offsetLeft: 1,
				delay: 50,
				source: function(term, suggest){
					term = term.toLowerCase();
					var choices = [];
					@foreach($lojas as $loja)
							choices.push('{{$loja->no_loja}}');  
					@endforeach
						
					var matches = [];
					for (i=0; i<choices.length; i++)
							if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
								suggest(matches);
				}
		});
			
		//--------------------------------------------------------------
		new autoComplete({
				selector: 'input[name="fk_loja_instalacao"]',
				minChars: 1,
				offsetLeft: 1,
				delay: 50,
				source: function(term, suggest){
					term = term.toLowerCase();
					var choices = [];
					@foreach($lojas as $loja)
							choices.push('{{$loja->no_loja}}');  
					@endforeach
						
					var matches = [];
					for (i=0; i<choices.length; i++)
							if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
								suggest(matches);
				}
		});

		//=======================	MODAL CADASTRO DE LOJA DENTRO DO CADASTRO DE MEMBROS =======================
		$('[data-toggle="modal"][title]').tooltip();


		$("#fecha_modal_cad_loja").click(function(e){ 
			$('.alert').html("");
			$('.alert').hide();
		});

		$(".envia_nova_loja").click(function(e){ 
			e.preventDefault();

			var titulo 		= $("input#co_titulo").val();
			var loja 		= $("input#no_loja").val();
			var numero 		= $("input#nu_loja").val();
			var potencia 	= $("select#potencia_id").val();
			var rito 		= $("select#ic_rito").val();
			var pais 		= "Brasil";
			var token 		= $("[name='_token']").val();

			$.post("/lojas/nova_ajax", { 			co_titulo	: titulo,
												no_loja 		: loja,
												nu_loja		: numero,
												potencia_id : potencia,
												ic_rito	 	: rito,
												no_pais	 	: pais,
											 	_token 		: token }, function(dados){

		 		//console.log(dados.id , dados.no_potencia);

				if(dados.id)
				{
					$('#loja_id0').append('<option value="' + dados.id + '">' + dados.no_loja +' - Nº '+ dados.nu_loja + '</option>'); 
					$('#loja_id1').append('<option value="' + dados.id + '">' + dados.no_loja +' - Nº '+ dados.nu_loja + '</option>'); 
					$('#loja_id2').append('<option value="' + dados.id + '">' + dados.no_loja +' - Nº '+ dados.nu_loja + '</option>');
					$('#loja_id3').append('<option value="' + dados.id + '">' + dados.no_loja +' - Nº '+ dados.nu_loja + '</option>');  

					$('.alert').html("");
					$('.alert').hide();
					$('#fecha_modal_cad_loja').trigger("click");
				} else {
					console.log(dados);
					$('.alert').html('A ' + titulo + ' ' + loja + ' Nº ' + numero + ' já existe!!!');
					$('.alert').show()
				}
			

			}).fail(function(dados){

				console.log(dados.responseJSON);
					
				let mensagem;

				if(dados.responseJSON['no_loja'] )
				{
					mensagem = dados.responseJSON['no_loja']
				}

				if(dados.responseJSON['nu_loja'] )
				{
					mensagem = mensagem + '<br> ' + dados.responseJSON['nu_loja']
				}
				
				if(dados.responseJSON['co_titulo'] )
				{
					mensagem = mensagem + '<br> ' + dados.responseJSON['co_titulo']
				}

				$('.alert').html(mensagem);

				$('.alert').show()

			});
		});

		//===============================================================================================================




		//=======================FUNÇOES===================================
		function limpa_formulário_cep(id) {
				// Limpa valores do formulário de cep.

				$('#no_logradouro'+id).val("");
				$('#no_bairro'+id).val("");
				$('#no_municipio'+id).val("");
				$('#sg_uf'+id).val("");
		}

		function desabilita(){
				if( this.text == 'Casado' ){
					document.getElementById('cep').disabled = false;
					document.getElementById('uf').disabled = false;
				}else{
					document.getElementById('cep').disabled = true;
					document.getElementById('uf').disabled = true;
				}
		}
	</script>
@endpush

