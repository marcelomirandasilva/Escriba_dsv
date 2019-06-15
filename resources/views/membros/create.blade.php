@extends('gentelella.layouts.app')

@section('content')
	
			
	<div class="modal-content animated  x_panel" >
		<div class="x_title">
			<h2> {{ $titulo }} </h2>
			<div class="clearfix"></div>
		</div>
		<!-- conteudo aqui-->
		<div class="col-md-12 ">
			
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
			
								@include('membros/create_dependentes')
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
						
						<!----------- botoes ----------> 
						<botao_ok_cancel
							url_cancelar="{{ url("membros") }}"> 
						</botao_ok_cancel>
						<!----------- fim botoes ---------->
						
					</form>
				</div> 
			</div>
		</div>
	</div>
</div>

<!-- Modal ---------------------------------------------------------------------------------------------->
{{-- @include('lojas/modal_create_edit') --}}
<!-- /Modal ---------------------------------------------------------------------------------------------->


@endsection


@push('scripts')

	<!-- AutoComplete -->
	<script src="{{ asset('autoComplete/auto-complete.min.js') }}"                  							type="text/javascript"></script>

	  
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
		//var td = "";
		
		
		
		var cont_telefone=1 
		var cont_email=1;
		var cont_dependente=1;
		let contador_linhas_tabela_cargos = 0;
		let contador_linhas_tabela_dependentes = 0;
		
		$(document).ready(function(){
			$("#tel_res").mask("(99)9999-9999");
			$("#tel_com").mask("(99)9999-9999");
			$("#tel_cel").mask("(99)99999-9999");

			$("#nu_cpf").mask('000.000.000-00', {reverse: true});
			$("#nu_titulo_eleitor").mask("99.999.999-9",  {reverse: true});

			$("#co_cim").mask("#.000.000",{reverse: true} );  
			
			
			$.fn.dataTable.moment( 'DD/MM/YYYY' );

			
			//========================================================================================================
			//========================================================================================================
			//==============================            PRINCIPAL                    =================================
			//========================================================================================================
			//========================================================================================================		

			if( $('#send').on( 'click', function (e) {

				if ( $("#ic_grau :selected").text() === "Candidato")
				{
					$("#co_cim").val('0000000');
				}

				if ( $("#no_membro").val() === "")
				{
					e.preventDefault();
					$("#tab_principal").click();
					$("#no_membro").notify("O Nome do Membro deve ser informado",{className: "error",autoHideDelay: 5000});

				}else if ( $("#ic_grau :selected").text() === " --- "){
					e.preventDefault();
					$("#tab_principal").click();
					$("#ic_grau").notify("O Grau do Membro deve ser informado",{className: "error",autoHideDelay: 5000});

				}else if ( $("#co_cim").val() === ""){
					e.preventDefault();
					$("#tab_principal").click();
					$("#co_cim").notify("O Número do CIM deve ser informado",{className: "error",autoHideDelay: 5000});
				};
				
			}));

			//desabilita data de casamento se não for casado
			$("select#ic_estado_civil").change(function(){
				if($("select#ic_estado_civil>option:selected").text().trim() == "Casado")
				{
					console.log("casodo");
					document.getElementById("dt_casamento").disabled = false;
				} else {
					console.log("não casodo");

					document.getElementById("dt_casamento").disabled = true;
				}
			});

			//desabilita campos de acordo com o grau
			$("select#ic_grau").change(function(){ 
				var valor = $(this).val();
				
				$("#tab_cerimonias" ).show();
				$("#tab_cargos" ).show();
				$("#tab_condecoracoes" ).show();                  

				document.getElementById("dt_filiacao").disabled 	= false; //filiação
				document.getElementById("dt_regularizacao").disabled 	= false; //regularização
				document.getElementById("co_cim").disabled 			= false;


				document.getElementById("dt_iniciacao").disabled 	= false;	//iniciação
				document.getElementById("loja_id_iniciacao").disabled 		= false;

				document.getElementById("dt_elevacao").disabled	= false;	//Elevação
				document.getElementById("loja_id_elevacao").disabled 		= false;

				document.getElementById("dt_exaltacao").disabled 	= false;	//Exaltação
				document.getElementById("loja_id_exaltacao").disabled 		= false;

				document.getElementById("dt_instalacao").disabled 	= false;	//Instalação
				document.getElementById("loja_id_instalacao").disabled 		= false;


				if (valor == "Candidato"){
						document.getElementById("co_cim").disabled = true;
						$("#tab_cerimonias" ).hide();
						$("#tab_cargos" ).hide();
						$("#tab_condecoracoes" ).hide();                  
						document.getElementById("co_cim").disabled = true;
						
				} else if (valor == "Aprendiz"){

						$("#tab_cargos" ).hide();
						$("#tab_condecoracoes" ).hide();                  
						
						document.getElementById("dt_elevacao").disabled 			= true;
						document.getElementById("loja_id_elevacao").disabled		= true;
						document.getElementById("dt_exaltacao").disabled 			= true;
						document.getElementById("loja_id_exaltacao").disabled 	= true;
						document.getElementById("dt_instalacao").disabled 			= true;
						document.getElementById("loja_id_instalacao").disabled 	= true;

						document.getElementById("co_cim").disabled 			= false;

				} else if (valor == "Companheiro"){

						$("#tab_cargos" ).hide();
						$("#tab_condecoracoes" ).hide();                  
					
						document.getElementById("dt_exaltacao").disabled 			= true;
						document.getElementById("loja_id_exaltacao").disabled 	= true;
						document.getElementById("dt_instalacao").disabled 			= true;
						document.getElementById("loja_id_instalacao").disabled 	= true;

						document.getElementById("co_cim").disabled 			= false;

				} else if (valor == "Mestre"){
						
						document.getElementById("dt_instalacao").disabled 			= true;
						document.getElementById("loja_id_instalacao").disabled 	= true;

						document.getElementById("co_cim").disabled 			= false;
				}
			});

			//========================================================================================================
			//========================================================================================================
			//==============================            ENDEREÇO                     =================================
			//========================================================================================================
			//========================================================================================================			


			//Atualiza os campos do endereço de acordo com o cep digitado
			
			//Se o pais for diferente de BRASIL, desabilita o cep e UF
			$("#pais_id_res").change(function(){
				if($("#pais_id_res>option:selected").text() == " Brasil ")
				{
						console.log("brasil");
						$("#nu_cep_res, #sg_uf_res").removeAttr('disabled');
				}else{
						$("#nu_cep_res, #sg_uf_res").attr('disabled', 'disabled');
				}
			});

			$("#pais_id_com").change(function(){
				console.log("mudou");
				
				if($("#pais_id_com>option:selected").text() == " Brasil ")
				{
					$("#cep_com, #sg_uf_com").removeAttr('disabled');
				}else{
					$("#cep_com, #sg_uf_com").attr('disabled', 'disabled');
				}
			});
			//==========================================================
			
			//Quando o campo CEP RESIDENCIAL perde o foco.
			$("#nu_cep_res").blur(function() {
				
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
							$("#no_logradouro_res").val("...");
							$("#no_bairro_res").val("...");
							$("#no_municipio_res").val("...");
							$("#sg_uf_res").val("...");
							$("#ibge_res").val("...");

							//Consulta o webservice viacep.com.br/
							$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

									if (!("erro" in dados)) {
										//Atualiza os campos com os valores da consulta.
										$("#no_logradouro_res").val(dados.logradouro);
										$("#no_bairro_res").val(dados.bairro);
										$("#no_municipio_res").val(dados.localidade);
										$("#sg_uf_res").val(dados.uf);
										$("#ibge_res").val(dados.ibge);
									} //end if.
									else {
										//CEP pesquisado não foi encontrado.
										limpa_formulário_cep("_res");
										alert("CEP não encontrado.");
									}
							});
						} //end if.
						else {
							//cep é inválido.
							limpa_formulário_cep("_res");
							alert("Formato de CEP inválido.");
						}
				} //end if.
				else {
						//cep sem valor, limpa formulário.
						limpa_formulário_cep("_res");
				}
			});

			//Quando o campo CEP COMERCIAL perde o foco.
			$("#nu_cep_com").blur(function() {
				
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
							$("#no_logradouro_com").val("...");
							$("#no_bairro_com").val("...");
							$("#no_municipio_com").val("...");
							$("#sg_uf_com").val("...");
							$("#ibge_com").val("...");

							//Consulta o webservice viacep.com.br/
							$.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

									if (!("erro" in dados)) {
										//Atualiza os campos com os valores da consulta.
										$("#no_logradouro_com").val(dados.logradouro);
										$("#no_bairro_com").val(dados.bairro);
										$("#no_municipio_com").val(dados.localidade);
										$("#sg_uf_com").val(dados.uf);
										$("#ibge_com").val(dados.ibge);
									} //end if.
									else {
										//CEP pesquisado não foi encontrado.
										limpa_formulário_cep("_com");
										alert("CEP não encontrado.");
									}
							});
						} //end if.
						else {
							//cep é inválido.
							limpa_formulário_cep("_com");
							alert("Formato de CEP inválido.");
						}
				} //end if.
				else {
						//cep sem valor, limpa formulário.
						limpa_formulário_cep("_com");
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


			//ano do cargo
			$("#aa_inicio").change(function(){
				
				let min = parseInt( $("#aa_inicio").val() ) ;
				let max = min + 2;

				console.log(min, "  -  ", max);
				$("#aa_termino").attr({"min" : min,"max" : max});

				$("#aa_termino").val(max);

			});


			//adiciona cargos na tabela
			//var cargos_na_tabela = [];
			$('#cad_cargo').on( 'click', function () {
				
				var cargo_selecionado 	= $("#no_cargo :selected").val();
				var aa_inicio 				= $("#aa_inicio").val();
				var aa_termino 			= $("#aa_termino").val();
				var aa_i 					= $("#aa_inicio").val();
				var aa_t 					= $("#aa_termino").val();

				
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
					$('#tabela_cargos').DataTable().row.add( [
						$("#no_cargo :selected").text(),
						$("#aa_inicio").val(),
						$("#aa_termino").val(),
						`<a class="btn btn-warning btn-xs action btn_tb_cargo_remove" data-id="${contador_linhas_tabela_cargos}" 
											data-toggle="tooltip" data-placement="bottom" title="Remove esse Cargo">  
											<i class="glyphicon glyphicon-remove"></i>
						</a>`
					] ).draw( true );

					contador_linhas_tabela_cargos++;
				};
			});
			
			//remove cargos da tabela
			$('#tabela_cargos').on('click', '.btn_tb_cargo_remove', function () {
				$('#tabela_cargos').DataTable().row( $(this).parents('tr') )
					.remove()
					.draw();		
			} );

			//========================================================================================================
			//========================================================================================================
			//==============================            DEPENDENTE                   =================================
			//========================================================================================================
			//========================================================================================================		

			//configura a tabela de dependentes
			$("#tabela_dependentes").DataTable({
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

			//adiciona dependentes na tabela
			$('#cad_dependente').on( 'click', function () {
				//td = $('#tabela_dependentes').DataTable();
				var no_dependente 				= $("#no_dependente").val();
				var ic_sexo 						= $("#ic_sexo :selected").val();
				var ic_grau_parentesco 			= $("#ic_grau_parentesco :selected").val();
				var dt_nascimento 				= $("#dt_nascimento_dependente").val();
				
				
				if (no_dependente == ""){
					//testa se o nome está vazio
					$("#no_dependente").notify("O nome deve ser informado",{
						className: "error",
						autoHideDelay: 5000
					});
				}else{
					console.log("adiciona");
					$('#tabela_dependentes').DataTable().row.add( [
						no_dependente,
						ic_sexo,
						ic_grau_parentesco,
						dt_nascimento,
						`<a class="btn btn-warning btn-xs action btn_tb_dependente_remove" data-id="${contador_linhas_tabela_dependentes}" 
											data-toggle="tooltip" data-placement="bottom" title="Remove esse dependente">  
											<i class="glyphicon glyphicon-remove"></i>
						</a>`
					] ).draw( true );

					contador_linhas_tabela_dependentes++;
				};
			} );
			
			//remove dependentes da tabela
			$('#tabela_dependentes').on('click', '.btn_tb_dependente_remove', function () {
				$('#tabela_dependentes').DataTable().row( $(this).parents('tr') )
					.remove()
					.draw();		
			} );


			//========================================================================================================
			//========================================================================================================
			//==============================            SUBMIT FORM                  =================================
			//========================================================================================================
			//========================================================================================================

			$("#form_membro").submit(function(e){
				//e.preventDefault();

				//empacota os CARGOS
				// Remover os cargos pré-existentes
				$("#form_membro .cargos_membros").remove();
				// Iterar por todas as linhas da tabela
				for(i=0; i<$('#tabela_cargos').DataTable().data().length; i++){
					let linha = $('#tabela_cargos').DataTable().data()[i];
					// Stringificar os campos
					let cargos_em_string = JSON.stringify({
						cargo_nome: linha[0].trim(),
						aa_inicio: linha[1], 
						aa_termino: linha[2]});
					// Adicionar o novo cargo no formulário
					$("#form_membro").append("<input type='hidden' class='cargos_membros' name='cargos_membros[]' value='"+cargos_em_string+"'>");
				};
						
				//empacota os DEPENDENTES
				// Remover os dependentes pré-existentes
				$("#form_membro .dependentes_membros").remove();
				// Iterar por todas as linhas da tabela
				for(i=0; i< $('#tabela_dependentes').DataTable().data().length; i++){
					let linha = $('#tabela_dependentes').DataTable().data()[i];
					// Stringificar os campos
					let dependentes_em_string = JSON.stringify({
						no_dependente:		 			linha[0].trim(),
						ic_sexo:		 					linha[1],
						ic_grau_parentesco:		 	linha[2],
						dt_nascimento:					linha[3]
					});
					// Adicionar o novo cargo no formulário
					$("#form_membro").append("<input type='hidden' class='dependentes_membros' name='dependentes_membros[]' value='"+dependentes_em_string+"'>");
				}
		
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

