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
				<div class="" role="tabpanel">
					@if( isset($edita))
					
					<form id="form_visitante" method="post" action="{{ url("visitantes/$visitante->id") }}"  >
							{!! method_field('PUT') !!}
					
					@else
					
					<form id="form_visitante" method="post" action="{{ route('visitantes.store') }}"  >
					
					@endif
						{{ csrf_field() }}

						<div class="clearfix"></div>
					
						<div class="item form-group row">
							<div class="col-md-5 ">
								<label class="control-label col-md-1" for="no_visitante">Nome*</label>
								<input  id="no_visitante" class="form-control col-md-5" name="no_visitante" placeholder="Nome completo do Membro" 
								required="required" type="text" autofocus value="{{$visitante->no_visitante or old('no_visitante')}}" >
							</div>
			
							<div class="col-md-1">
								<label class="control-label col-md-2 " for="ic_grau"> Grau* </label>
								<select name="ic_grau" id="ic_grau" class="form-control col-md-1" >
									<option value=""  selected style="color: #ccc;" > --- </option>
									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
										@foreach($grau as $ic_grau)
											@if ( $visitante->ic_grau == $ic_grau)
												<option value="{{$ic_grau}}" selected="selected">{{$ic_grau}}</option>
											@else
												<option value="{{$ic_grau}}">{{$ic_grau}}</option>  
											@endif
										@endforeach
									@else
										@foreach($grau as $ic_grau)
											<option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
										@endforeach
									@endif
								</select>
							</div>
							<div  class="col-md-2" >
								<label class="control-label col-md-1" for="co_cim">CIM*</label>
								<input   id="co_cim" class="form-control col-md-2 cim" placeholder="999.999" 
								required="required" min="1" max="9999999"  
								name="co_cim"  value="{{$visitante->co_cim or old('co_cim')}}" >
							</div>
						</div>
						<div class=" item form-group row">
							<div class="col-md-11">
								<label class="control-label col-md-1 " for="loja_id"> Loja* </label>
								<select name="loja_id" id="loja_id" class="form-control col-md-1" >
									<option value=""  selected style="color: #ccc;" > --- </option>
									@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
									
										@foreach($lojas as $loja)
											@if ( $visitante->loja->id == $loja->id)
												<option value="{{$loja->id}}" selected="selected">{{$loja->no_loja}}</option>
											@else
												<option value="{{$loja->id}}">{{$loja->no_loja}}</option>  
											@endif
										@endforeach
									@else
										@foreach($lojas as $loja)
											<option value="{{$loja->id}}"> {{$loja->no_loja}} -  {{$loja->nu_loja}} -  {{$loja->potencia->no_potencia}}  </option>    
										@endforeach
									@endif
								</select>

							</div>
							<div class="col-md-1 ">
								<a data-target="#cad_loja" class="btn-circulo btn btn-primary btn-md   pull-right " data-toggle="modal" title="Adiciona uma Loja">
									<span class="fa fa-plus">  </span>
								</a>
							</div>
						</div>

						
						<!----------- botoes ----------> 
						<botao_ok_cancel
							url_cancelar="{{ url("visitantes") }}"> 
						</botao_ok_cancel>
						<!----------- fim botoes ---------->
						
					</form>
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
		
		
		
		var cont_telefone=1 
		var cont_email=1;
		var cont_dependente=1;
		let contador_linhas_tabela = 0;
		
		$(document).ready(function(){
			$("#tel_res").mask("(99)9999-9999");
			$("#tel_com").mask("(99)9999-9999");
			$("#tel_cel").mask("(99)99999-9999");

			$("#nu_cpf").mask("999.999.999-99");
			$("#nu_titulo_eleitor").mask("99.999.999-9");

			$("#co_cim").mask("999.999.999",{reverse: true} );  
			
			
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

				if ( $("#no_visitante").val() === "")
				{
					e.preventDefault();
					$("#tab_principal").click();
					$("#no_visitante").notify("O Nome do Membro deve ser informado",{className: "error",autoHideDelay: 5000});

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

			$("#form_visitante").submit(function(){

				// Remover os cargos pré-existentes
				$("#form_visitante .cargos_visitantes").remove();

				// Iterar por todas as linhas da tabela
				for(i=0; i<t.data().length; i++){
	
					let linha = t.data()[i];

					// Stringificar os campos
					let cargos_em_string = JSON.stringify({
						cargo_nome: linha[0].trim(),
						aa_inicio: linha[1], 
						aa_termino: linha[2]});

					// Adicionar o novo cargo no formulário
					$("#form_visitante").append("<input type='hidden' class='cargos_visitantes' name='cargos_visitantes[]' value='"+cargos_em_string+"'>");
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

			$("#form_visitante").submit(function(e){
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

