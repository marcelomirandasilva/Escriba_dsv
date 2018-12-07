{{-- 'Honorário', 'Remido', 'Emérito', 'Benemérito', 'Grande Benemérito', 'Maçom Notável', 'Estrela da Distinção Maçônica', 'Cruz da Perfeição Maçônica', 'Comenda Dom Pedro I' --}}

<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="item form-group">
		<div class="row">
			
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_remido">Remido</label>
				<input id="dt_remido" name="dt_remido" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_remido or old('dt_remido')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_remido">Nº do Ato</label>
				<input id="nu_remido" name="nu_remido" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_remido or old('nu_remido')}}" >
			</div>

			
			
			<div class="col-md-3"></div>

			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_emerito">Emérito</label>
				<input id="dt_emerito" name="dt_emerito" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_emerito or old('dt_emerito')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_emerito">Nº do Ato</label>
				<input id="nu_emerito" name="nu_emerito" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_emerito or old('nu_emerito')}}" >      
			</div>
		</div>
   </div>

   <div class="item form-group">
		<div class="row">
			
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_benemerito">Benemérito</label>
				<input   id="dt_benemerito" name="dt_benemerito" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_benemerito or old('dt_benemerito')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_benemerito">Nº do Ato</label>
				<input id="nu_benemerito" name="nu_benemerito" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_benemerito or old('nu_benemerito')}}" >      
			</div>

			<div class="col-md-3"></div>

			
			<div class="col-md-2 ">
				<label class="control-label col-md-12 " for="dt_grande_benemerito">Gde Benemérito</label>
				<input   id="dt_grande_benemerito" name="dt_grande_benemerito" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_grande_benemerito or old('dt_grande_benemerito')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_grande_benemerito">Nº do Ato</label>
				<input id="nu_grande_benemerito" name="nu_grande_benemerito" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_grande_benemerito or old('nu_grande_benemerito')}}" >
			</div>
		</div>
   </div>
 
	<div class="x_title" style="margin-bottom: 15px;">  <div class="clearfix"></div> </div>

   <!------------------------------------>
   <div class="item form-group">
		<div class="row">
			
			<div class="col-md-3 ">
				<label class="control-label col-md-12 " for="dt_estrela_distincao">Estrela da Distinção Maçônica</label>
				<input   id="dt_estrela_distincao" name="dt_estrela_distincao" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_estrela_distincao or old('dt_estrela_distincao')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_estrela_distincao">Nº do Ato</label>
				<input id="nu_estrela_distincao" name="nu_estrela_distincao" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_estrela_distincao or old('nu_estrela_distincao')}}" >
			</div>

			<div class="col-md-1"></div>

			
			<div class="col-md-3 ">
				<label class="control-label col-md-12 " for="dt_cruz_perfeicao">Cruz da Perfeição Macônica</label>
				<input   id="dt_cruz_perfeicao" name="dt_cruz_perfeicao" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_cruz_perfeicao or old('dt_cruz_perfeicao')}}" >
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_cruz_perfeicao">Nº do Ato</label>
				<input id="nu_cruz_perfeicao" name="nu_cruz_perfeicao" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_cruz_perfeicao or old('nu_cruz_perfeicao')}}" >
			</div>
		</div>
   </div>

   <!------------------------------------>
   <div class="item form-group">
		<div class="row">
			
			<div class="col-md-3 ">
				<label class="control-label col-md-12 " for="dt_comanda_DPI">Comenda Dom Pedro I</label>
				<input   id="dt_comanda_DPI" name="dt_comanda_DPI" class="form-control col-md-2 datas_input" 
					type="date" min="1500-01-01" max="2050-01-01"
					value="{{$membro->dt_comanda_DPI or old('dt_comanda_DPI')}}" >
			</div>


			<div class="col-md-2">
				<label class="control-label col-md-12 " for="nu_comanda_DPI">Nº do Ato</label>
				<input id="nu_comanda_DPI" name="nu_comanda_DPI" class="form-control col-md-2"  type="text" 
					value="{{$membro->nu_comanda_DPI or old('nu_comanda_DPI')}}" >
			</div>
		</div>
   </div>
	

   <!------------------------------------>




</div>




