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

	<label class="control-label col-md-2" for="loja_id_iniciacao">Loja Iniciação</label>
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
	   <select 
		id="loja_id1" name="cerimonias[1][loja_id]"  class="form-control col-md-5">
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
	   <select 
		id="loja_id3" name="cerimonias[3][loja_id]"  class="form-control col-md-5">
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
</div>

<!-- Modal ---------------------------------------------------------------------------------------------->
<div class="modal fade" id="cad_loja" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
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


