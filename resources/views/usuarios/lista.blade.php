@extends('layouts.app')

@section('conteudo')

	<!-- page content -->
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel modal-content animated fadeInUp">
				<div class="x_title">
					<h2> Listagem de Usuários </h2>
					<a href="{{ url('usuarios/create') }}" 
						class="btn-circulo btn btn-primary btn-md   pull-right " 
						data-toggle="tooltip"  
						data-placement="bottom" 
						title="Adiciona um Usuário">
						<span class="fa fa-plus">  </span>
					</a>
					<div class="clearfix"></div>
				</div>
				<div class="x_panel ">
					<div class="x_content">
							 
						<table class="table table-striped " id="tabela_usuarios">
							<thead>
								<tr>
									<th>Nome</th> 
									<th>E-mail</th>
									<th>Membro associado</th>
									<th>Nível de Acesso</th>
									<th>Ações</th>
								</tr>						
							</thead>

							<tbody>
								@foreach($usuarios as $key=> $usuario)
									<tr>
										<td>{{ $usuario->name }}</td> 
										<td>{{ $usuario->email }}</td>
										@if($usuario->membro['no_membro'] != "")
											<td>{{ $usuario->membro['no_membro']}}</td>
										@else
											<td></td>
										@endif
										<td>{{ $usuario->acesso }}</td>
										<td class="actions">
											@if($usuario_logado->acesso == 'ADMINISTRADOR')
												{{-- ATIVO / INATIVO --}}
												@if($usuario->status == 'Ativo')
													<button  
														class="btn_desativa btn btn-danger btn-xs action  pull-right  botao_acao" 
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Desativa a conta do usuario" >  
														<i class="glyphicon glyphicon-remove "></i>
													</button>

													<button  
														class="btn_ativa btn btn-success btn-xs action  pull-right  botao_acao" 
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Ativa a conta do usuario"
														style="display: none">  
														<i class="glyphicon glyphicon-plus "></i>
													</button>
												{{-- @elseif($usuario->status == 'Inativo') --}}
												@else
													<button  
														class="btn_desativa btn btn-danger btn-xs action  pull-right  botao_acao" 
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Desativa a conta do usuario" 
														style="display: none">  
														<i class="glyphicon glyphicon-remove "></i>
													</button>

													<button  
														class="btn_ativa btn btn-success btn-xs action  pull-right  botao_acao" 
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Ativa a conta do usuario" >  
														<i class="glyphicon glyphicon-plus "></i>
													</button>
												@endif

												<button 
													class="btn_email_senha btn btn-info btn-xs action  pull-right  botao_acao" 
													data-toggle="tooltip" 
													data-usuario = {{ $usuario->id }}
													data-placement="bottom" 
													title="Envia NOVA senha por email ao usuario">  
													<i class="glyphicon glyphicon-envelope "></i>
												</button>

												{{-- ASSOCIAÇÃO --}}
												@if($usuario->membro['no_membro'] != "")
													<button  
														class="btn_desassocia btn btn-danger btn-xs action  pull-right  botao_acao" 
														name = "btn_desassocia{{$key}}"
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Desassocia o Membro desse Usuário" >  
														<i class="glyphicon glyphicon-link "></i>
													</button>

													<a href="{{ url('/associa/$usuario->id') }}"
														class="btn_associa btn btn-success btn-xs action  pull-right  botao_acao" 
														title="Associa um Membro a esse Usuário"
														style="display: none">  
														<i class="glyphicon glyphicon-link "></i>
													</a>
												@else
													<button  
														class="btn_desassocia btn btn-danger btn-xs action  pull-right  botao_acao" 
														data-toggle="tooltip" 
														data-usuario = {{ $usuario->id }}
														data-placement="bottom" 
														title="Desassocia o Membro desse Usuário" 
														style="display: none">  
														<i class="glyphicon glyphicon-link "></i>
													</button>

													<a href="{{ url("/associa/$usuario->id") }}"
														class="btn_associa btn btn-success btn-xs action  pull-right  botao_acao" 
														title="Associa um Membro a esse Usuário" >  
														<i class="glyphicon glyphicon-link "></i>
													</a>
												@endif
									
											@endif
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- /page content -->

	<!-- footer content -->
	<footer>
	 <div class="pull-right"> V0.1_2017</a> </div>
	 <div class="clearfix"></div>
	</footer>
	<!-- /footer content -->
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

	<script src="{{ asset('js/funcoes.js') }}"></script>

	<script>
		$(document).ready(function(){
			$.fn.dataTable.moment( 'DD/MM/YYYY' );
			$("#tabela_usuarios").DataTable({

				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
				stateDuration: -1,
			});

			/*  DESATIVAÇÃO do usuário */
			$("table#tabela_usuarios").on("click", ".btn_desativa",function(){
				let id_usuario = $(this).data('usuario');
				let btn = $(this);

				//console.log("botao btn_desativa -> ", $(this).data('usuario'));
				swal({
					title: 'Confirma a DESATIVAÇÃO do usuário?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não',
				}).then((result) => {
					if (result.value) {
						$.post('/mudastatus',{
							_token: 	'{{ csrf_token() }}',
							id: 		id_usuario,
							status: 	'Inativo'
						},function(data){
							btn.css('display', 'none').siblings('button.btn_ativa').css('display', 'block');

							funcoes.notifica("success", "O funcionário foi Desativado");
							//console.log(data)
						})
					}
				})
			});

			/* ATIVAÇÃO do usuário */
			$("table#tabela_usuarios").on("click", ".btn_ativa",function(){
				let id_usuario = $(this).data('usuario');
				let btn = $(this);
				//console.log("botao btn_ativa -> ", $(this).data('usuario'));
				
				swal({
					title: 'Confirma a ATIVAÇÃO do usuário?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não',
				}).then((result) => {
					if (result.value) {
						$.post('/mudastatus',{
							_token: 	'{{ csrf_token() }}',
							id: 		id_usuario,
							status: 	'Ativo'
						},function(data){
							btn.css('display', 'none').siblings('button.btn_desativa').css('display', 'block');

							funcoes.notifica("success", "O funcionário foi Ativado");
							//console.log(data)
						})
					}
				})
			});

			/* ZERA SENHA */
			$(".btn_email_senha").click(function(){
				let id_usuario = $(this).data('usuario');
				swal({
					title: 'Confirma a REINICIALIZAÇÃO da senha do Usuário?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não',
				}).then((result) => {
					if (result.value) {
						//chama a rota para zerar a senha e enviar email ao funcionário
						$.post('/zerarsenhausuario',{
								_token: 	'{{ csrf_token() }}',
								id: 		id_usuario
						},function(data){
							//mostrando o retorno do post
							funcoes.notifica("success", "Email com nova senha enviado para o funcionário");
							console.log(data)
						})
					}
				})

			});

			/* DESASSOCIA USUARIO */
			$("table#tabela_usuarios").on("click", ".btn_desassocia",function(){
				let id_usuario = $(this).data('usuario');
				let btn = $(this);

				swal({
					title: 'Confirma a DESASSOCIAÇÃO do Membro deste Usuário?',
					type: 'question',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Sim',
					cancelButtonText: 'Não',
				}).then((result) => {
					if (result.value) {
						$.post('/desassocia',{
							_token: 	'{{ csrf_token() }}',
							id: 		id_usuario,
						},function(data){
							btn.css('display', 'none').siblings('a.btn_associa').css('display', 'block');
							funcoes.notifica("success", "O usuário foi DESASSOCIADO");
							console.log(data)
						})
					}
				})
			});


			/* =======================  ASSOCIA USUARIO =================================================*/

			

			$(".envia_associacao").click(function(e){ 
				e.preventDefault();
			
				let id_usuario = document.getElementById("id_do_usuario").value;
				let btn = $(this);

				//coloca os membros vindos do controller na variável
				let me = {!!$membros!!};
				//coloca na variável o index do membro selecionado (subtraindo 1 pq o 1º valor do seles é "-----")
				let idx = document.getElementById("membro_associar").selectedIndex - 1;
				//coloca o email do mebro selecionado no valor do input ou nulo caso seja selecionado o '---'
				if( idx < 0){
					console.log("Selecione um Membro");

				}else{
					var id_do_membro = me[idx]['id'];
					console.log('usuario', id_usuario);
					console.log('membro', id_do_membro);


					swal({
						title: 'Confirma a ASSOCIAÇÃO do Membro deste Usuário?',
						type: 'question',
						showCancelButton: true,
						confirmButtonColor: '#3085d6',
						cancelButtonColor: '#d33',
						confirmButtonText: 'Sim',
						cancelButtonText: 'Não',
					}).then((result) => {
						if (result.value) {

							$.post('/associa',{
								_token: 	'{{ csrf_token() }}',
								user_id:		id_usuario,
								membro_id:	id_do_membro,
								
							},function(data){
								if(data==1){
									//btn.css('display', 'none').siblings('button.btn_desassocia').css('display', 'block');
									
									funcoes.notifica("success", "O usuário foi ASSOCIADO");
									console.log(data);
									$('#associar_membro').modal('hide'); 
								}else{
									funcoes.notifica("error", "Falha so ASSOCIAR");
								}
							})
						}
					})



				}


				
			
/* 				$.post("/lojas/nova_ajax", { 			co_titulo	: titulo,
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
 */ 
			});
			/* =================================================================================================== */
			






			
		});
		
	</script>

@endpush



