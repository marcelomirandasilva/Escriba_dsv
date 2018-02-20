<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>

   <div class="item form-group">
		<input type="hidden" name="cerimonias[0][ic_cerimonia]" value="Iniciação">

		<label class="control-label col-md-1 " for="dt_cerimonia">Iniciação</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia0" name="cerimonias[0][dt_cerimonia]" class="form-control col-md-2 datas_input"  
		   type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia0 or old('cerimonias.0.dt_cerimonia')}}" >
		</div>

		<label class="control-label col-md-2" for="loja_id0">Loja Iniciação</label>
		<div class="col-md-5">
		   <select   
				id="loja_id0" name="cerimonias[0][loja_id]"  class="form-control col-md-5">
				<option value="null"  selected style="color: #ccc;"> --- </option>
				@foreach($lojas as $loja)
				   <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
				@endforeach
		   </select>
		</div>

	     
		<div class="col-md-1 ">
			<a 
				data-target="#cad_loja"
				class="btn-circulo btn btn-primary btn-md   pull-right " 
				data-toggle="modal" 
				title="Adiciona uma Loja">
			  	<span class="fa fa-plus">  </span>
			</a>
		</div>
	</div>
	 

   <!------------------------------------>

   <div class="item form-group">
		<input type="hidden" name="cerimonias[1][ic_cerimonia]" value="Elevação">
		<label class="control-label col-md-1 " for="dt_elevacao">Elevação</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia1" name="cerimonias[1][dt_cerimonia]" class="form-control col-md-2 datas_input"  
			type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia1 or old('cerimonias.1.dt_cerimonia')}}" >
		</div>

     	<label class="control-label col-md-2 " for="loja_id_elevacao">Loja Elevação</label>
		<div class="col-md-5">
		   <select id="loja_id1" name="cerimonias[1][loja_id]"  class="form-control col-md-5">
				<option value="null"  selected style="color: #ccc;"> --- </option>
				@foreach($lojas as $loja)
				   <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
				@endforeach
		   </select>
		</div>
   </div>


   <!---------------------------------------------------->

   <div class="item form-group">
		<input type="hidden" name="cerimonias[2][ic_cerimonia]" value="Exaltação">
		<label class="control-label col-md-1 " for="dt_exaltacao">Exaltação</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia2" name="cerimonias[2][dt_cerimonia]" class="form-control col-md-2 datas_input"  
			type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia2 or old('cerimonias.2.dt_cerimonia')}}" >      
	   </div>
		<label class="control-label col-md-2 " for="loja_id_exaltacao">Loja Exaltação</label>
		<div class="col-md-5">
		   <select 
			id="loja_id2" name="cerimonias[2][loja_id]"  class="form-control col-md-5">
			<option value="null"  selected style="color: #ccc;"> --- </option>
			@foreach($lojas as $loja)
			   <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
			@endforeach
		   </select>
		</div>
   </div>


   <!------------------------------------>
   <div class="item form-group">
		<input type="hidden" name="cerimonias[3][ic_cerimonia]" value="Instalação">
		<label class="control-label col-md-1 " for="dt_instalacao">Instalação</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia3" name="cerimonias[3][dt_cerimonia]" class="form-control col-md-2 datas_input" 
			 type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia3 or old('cerimonias.3.dt_cerimonia')}}" >      
		</div>

		<label class="control-label col-md-2 " for="loja_id_instalacao">Loja Instalação</label>
		<div class="col-md-5">
		   <select id="loja_id3" name="cerimonias[3][loja_id]"  class="form-control col-md-5">
			<option value="null"  selected style="color: #ccc;"> --- </option>
				@foreach($lojas as $loja)
				   <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
				@endforeach
		   </select>
		</div>
   </div>

   <div class="x_title"></div>
   <div class="clearfix"></div>

   <div class="item form-group">
		<input type="hidden" name="cerimonias[4][ic_cerimonia]" value="Filiação">
		<label class="control-label col-md-1 " for="dt_filiacao">Filiação</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia4" name="cerimonias[4][dt_cerimonia]" class="form-control col-md-2 datas_input"  
			type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia4 or old('cerimonias.4.dt_cerimonia')}}" >      
		</div>

		<input type="hidden" name="cerimonias[5][ic_cerimonia]" value="Regularização">
		<label class="control-label col-md-2 alinha_esquerda" for="dt_regularizacao">Regularização</label>
		<div class="col-md-2 ">
		   <input id="dt_cerimonia5" name="cerimonias[5][dt_cerimonia]" class="form-control col-md-2 datas_input"  
			type="date" min="1500-01-01" max="2050-01-01" 
			value="{{$dt_cerimonia5 or old('cerimonias.5.dt_cerimonia')}}" >      
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

					<form id="form_modal_" method="post" action="#" class="form-horizontal form-label-left" >

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



















</div>











