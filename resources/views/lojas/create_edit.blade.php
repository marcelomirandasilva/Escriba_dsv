@extends('layouts.blank')

@push('stylesheets')
	<!-- Example -->
	<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')
<!-- page content -->


	<!-- page content -->
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



		<div class=""> </div>
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel modal-content">
					<div class="x_title">
						<h2> {{ $titulo }} </h2>
						
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
							
						@if( isset($loja))

							<form id="form_loja" method="post" action="{{ url("lojas/$loja->id") }}" class="form-horizontal form-label-left" >
								{!! method_field('PUT') !!}

						@else
							<form id="form_loja" method="post" action="{{ route('lojas.store') }}" class="form-horizontal form-label-left" >
						@endif

						
							
							{{ csrf_field() }}

							<div class="item form-group">
								<label class="control-label col-md-1 col-sm-1 col-xs-12" for="co_titulo">
									Título <span class="required">*</span>
								</label>
								<div class="col-md-2 ">
									<input id="co_titulo"   
										class="form-control col-md-2" 
										name="co_titulo" 
										placeholder="ARLS" 
										required="required" 
										type="text"
										
										style="text-transform: uppercase;"
										autofocus
										value="{{$loja->co_titulo or old('co_titulo')}}" >
								</div>

								<label class="control-label col-md-1 " for="no_loja">
									Nome 
									<span class="required">*</span>
								</label>
								<div class="col-md-6">
									<input type="no_loja" 
										id="no_loja" 
										name="no_loja" 
										placeholder="Nome da Loja" 
										required="required" 
										class="form-control "
										type="text"
										
										value="{{ $loja->no_loja or old('no_loja')}}" 
										
									>
								</div>

								<label class="control-label col-md-1" for="nu_loja">
									Número 
									<span class="required">*</span>
								</label>
								<div class="col-md-1 nu_loja_input" >
									<input type="nu_loja" 
										id="nu_loja" 
										name="nu_loja" 
										placeholder="00000" 
										required="required" 
										class="form-control "
										type="number"
										min="0"
       								max="9999999"
       								step="1"
										value="{{ $loja->nu_loja or old('nu_loja')}}" 
									>
								</div>
							</div>

							<div class="item form-group">

								<label class="control-label col-md-1 " for="potencia_id">Potência*</label>
								<div class="col-md-5 ">

									<select id="potencia_id"   
										class="form-control col-md-5 " 
										name="potencia_id" 
										placeholder="Nome da Potência" 
										type="text"
										data-live-search="true"
										style="width:90%;"/>


										@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
											@foreach($potencias as $potencia)
												@if ( $loja->potencia_id == $potencia->id)
													<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
												@else
													<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>  
												@endif
											@endforeach
										@else
											@foreach($potencias as $potencia)
												@if ($potencia->no_potencia == ('Grande Oriente do Brasil'))
													<option value="{{$potencia->id}}" selected="selected">{{$potencia->no_potencia}}</option>
												@else 
													<option value="{{$potencia->id}}">{{$potencia->no_potencia}}</option>  
												@endif
											@endforeach
										@endif
									</select>

									<div class="col-md-1 ">
								  		<a 
								  			data-target="#cad_potencia"
						  					class="btn btn-default btn-circulo   glyphicon glyphicon-plus  " 
	                          		data-toggle="modal" 
								  			title="Cria uma nova Potência ">  
							  			</a>
									</div>


									
					
								</div>
								
								<label class="control-label col-md-1 " for="ic_rito">Rito*</label>
								<div class="col-md-2 ">
									<select id="ic_rito"   
										class="form-control col-md-2 " 
										name="ic_rito" 
										placeholder="Rito praticado" 
										type="text">

										@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
											@foreach($ritos as $rito)
												@if ( $loja->ic_rito == $rito)
													<option value="{{$rito}}" selected="selected"> {{$rito}} </option>
												@else
													<option value="{{$rito}}"> {{$rito}} </option>    
												@endif
											@endforeach
										@else
											@foreach($ritos as $rito)
												@if ($rito == ('Brasileiro'))
													<option value="{{$rito}}" selected="selected"> {{$rito}} </option>          
												@else 
													<option value="{{$rito}}"> {{$rito}} </option>  
												@endif
											@endforeach
										@endif
									</select>
								</div>


								<label class="control-label col-md-1 " for="dt_fundacao">Fundação</label>
								<div class="col-md-2 ">
									<input id="dt_fundacao"   
										class="form-control col-md-2 datas_input " 
										name="dt_fundacao" 
										placeholder="00/00/0000" 
										data-inputmask="'mask': '99/99/9999'"
										type="date"
										value="{{$loja->dt_fundacao or  old('dt_fundacao')}}" 

									>
								</div>
							</div>
							<div class="item form-group">
								{{-- Logradouro, Número, Complemento --}}
								<label class="control-label col-md-1 " for="pais_id">Pais</label>
								<div class="col-md-2 ">
									<select id="pais_id"   
										class="form-control col-md-2" 
										name="pais_id" 
										placeholder="Nome do Pais" 
										type="text">

										@if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
											@foreach($paises as $pais)
												@if ( $loja->endereco->pais == $pais)
													<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
												@else
													<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
												@endif
											@endforeach
										@else
											@foreach($paises as $pais)
												@if ($pais->no_pais == ('Brasil'))
													<option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
												@else 
													<option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
												@endif
											@endforeach
										@endif
									</select>
								</div> 

								<!-- CEP-->
								<label class="col-md-1 control-label" for="nu_cep">CEP</label>
								<div class="col-md-2">
									<input id="cep" 
											name="nu_cep" 
											type="text" 
											placeholder="99.999-999" 
											class="form-control input-md cep" 
											value="{{$loja->endereco->nu_cep or old('nu_cep')}}" >

								</div>
						
								<!-- UF-->
								<label class="col-md-1 control-label" for="sg_uf">UF</label>
								<div class="col-md-1">
									<input id="uf" 
											name="sg_uf" 
											type="text"  
											class="form-control input-md uf"
											value="{{$loja->endereco->sg_uf or old('sg_uf')}}" >
								</div>


								<!-- Município-->
								<label class="col-md-1 control-label" for="pa-municipio">Município</label>
								<div class="col-md-3">
									<input id="cidade" 
											name="no_municipio" 
											type="text" 
											class="form-control input-md" 
											value="{{$loja->endereco->no_municipio or old('no_municipio')}}" >
								</div>
							</div>
							<div class="item form-group">
								{{-- Bairro --}}
								<label class="col-md-1 control-label" for="no_bairro">Bairro</label>
								<div class="col-md-3">
									<input id="bairro" 
											name="no_bairro" 
											type="text" 
											placeholder="Centro" 
											class="form-control input-md"
											value="{{$loja->endereco->no_bairro or old('no_bairro')}}" >
								</div>


								<!-- Logradouro ...Av...Rua....etc-->
								<label class="col-md-1 control-label" for="no_logradouro">Logradouro</label>
								<div class="col-md-7">
									<input id="rua" 
											name="no_logradouro" 
											type="text" 
											placeholder="Av, Rua, Travessa..." 
											class="form-control input-md"
											value="{{$loja->endereco->no_logradouro or old('no_logradouro')}}" >
								</div>

							</div>
							<div class="item form-group">
							
								<!-- Número da residência-->
								<label class="col-md-1 control-label" for="nu_logradouro">Numero</label>
								<div class="col-md-2">
									<input id="nu_logradouro" 
											name="nu_logradouro" 
											type="text" 
											placeholder="999" 
											class="form-control input-md"
											value="{{$loja->endereco->nu_logradouro or old('nu_logradouro')}}" >
								</div>

								{{-- Complemento --}}
								<label class="col-md-2 control-label" for="de_complemento">Complemento</label>
								<div class="col-md-3">
									<input id="de_complemento" 
											name="de_complemento" 
											type="text" 
											placeholder="Ap., Fundos,..." 
											class="form-control input-md"
											value="{{$loja->endereco->de_complemento or old('de_complemento')}}" >
								</div>
							</div>	
							<div class="item form-group">

								{{-- Telefone --}}
								<label class="col-md-1 control-label" for="nu_telefone">Tel.</label>
								<div class="col-md-2">
									<input id="nu_telefone" 
											name="nu_telefone" 
											type="text" 
											placeholder="(99)9999-9999" 
											class="form-control input-md telefone"
											value="{{$loja->telefone->nu_telefone or old('nu_telefone')}}" >
								</div>

								{{-- Email --}}
								<label class="col-md-2 control-label" for="de_email">Email</label>  
								<div class="col-md-5">
									<input id="de_email" 
											name="de_email" 
											type="text" 
											placeholder="email@servidor.com.br" 
											class="form-control input-md email"
											value="{{$loja->email->de_email or old('de_email')}}" >
								</div>

							</div>			

							<!----------- botoes ----------> 
							<div class="ln_solid"> </div>
							<div class="col-md-3 col-md-offset-9">

						  		<button id="send" 
				  					type="submit" 
				  					class="btn btn-success btn_acao pull-right"
				  					data-toggle="tooltip" 
				  					title="Confirma a operação">  
							  		Confirma    
						  		</button>							

								<a href="{{ url()->previous() }}"
					  				class="btn btn-danger btn_acao pull-right" 
					  				data-toggle="tooltip" 
					  				title="Cancela e retorna a tela anterior">  
					  				Cancela
				  				</a>
							</div>
							<!----------- fim botoes ---------->
						</form>  
						   
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Modal ---------------------------------------------------------------------------------------------->
	<div class="modal fade" id="cad_potencia" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	        				<span aria-hidden="true">&times;</span>
					</button>
	        		<h4 class="modal-title" id="modalLabel">Cadastro de Potência</h4>
	      		</div>

	      		<div class="modal-body">

					<form id="form_modal" method="post" action="#" class="form-horizontal form-label-left" >

						{{ csrf_field() }}

						<div class="item form-group">
							<label class="control-label col-md-3 " for="no_potencia">
								Potência <span class="required">*</span>
							</label>
							<div class="col-md-8 ">
								<input id="no_potencia"   
									class="form-control col-md-8" 
									name="no_potencia" 
									placeholder="Nome da nova Potência" 
									required="required" 
									type="text"
									autofocus
								>
							</div>
						</div>
					</form>  
		   		</div>
		      	<div class="modal-footer">
					<div class="col-md-11 ">
						
						<a href="#"  
								type="button" 
								class="envia_nova_potencia btn btn-success "
			  					data-toggle="tooltip" 
			  					title="Confirma a operação">  
					  			Confirma    
						</a>

						<button id="fecha_modal"
								type="button" 
						  		data-toggle="tooltip" 
						  		class="btn btn-danger btn_acao"
						  		title="Cancela e retorna a tela anterior"
								data-dismiss="modal">
								Cancela
						</button>
					</div>
		      	</div>
	    	</div>
	  	</div>
	</div> 
	<!-- /Modal ---------------------------------------------------------------------------------------------->


	<!-- footer content -->
	<footer>
		<div class="pull-right">
			Desenvolvido por Marcelo Miranda - 2017</a>
		</div>
		<div class="clearfix"></div>
	</footer>
	<!-- /footer content -->
@endsection


@push('scripts')

	<!-- Adicionando JQuery  do correios para pegar endereço-->
	<!-- <script src="//code.jquery.com/jquery-3.2.1.min.js"></script> -->

	{{-- Script para máscara numérica. Ex.: CPF, RG --}}
	<script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

	{{-- Atualiza os campos do endereço de acordo com o cep digitado --}}
  <script src="{{ asset("js/endereco.js") }}"></script>


	<!-- Adicionando Javascript -->
	<script type="text/javascript" >

		$(document).ready(function() {

			$('[data-toggle="modal"][title]').tooltip();

			$(".envia_nova_potencia").click(function(e){ 

				var potencia = $("input#no_potencia").val();
				var token = $("[name='_token']").val();

				$.post("/lojas/potencia/store", { no_potencia : potencia, _token : token }, function(dados){

					if(dados.id)
					{
						
						//$("<option value='dados.id' selected='selected'> dados.no_potencia </option>").appendTo("potencia_id");

						$('#potencia_id').append('<option value="' + dados.id + '" selected="selected">' + dados.no_potencia + '</option>'); 

						//console.log("Gravou a potência");
						//console.log(dados.id);

						 $('.fecha_modal').trigger('click');
						 
					}
				
				}).fail(function(dados){
					console.log(dados);
				});
			});


			{{-- Máscarasa dos campos CPF e RG --}}

			$(".cpf").inputmask("999.999.999-99");
			$(".rg").inputmask("99.999.999-9");
			$(".cep").inputmask("99.999-999");
			$(".data").inputmask("99/99/9999");
			$(".celular").inputmask("(99)99999-9999");
			$(".telefone").inputmask("(99)9999-9999");
		});

	</script>


@endpush




	