
<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>

	<div class="item form-group">
		<div class="col-md-4">
			<label class="control-label col-md-1 " for="no_cargo"> Cargo </label>
		   <select   name="no_cargo" id="no_cargo" class="form-control col-md-4 no_cargo" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
				<option value=""  selected style="color: #ccc;"> --- </option>
				@foreach($cargos as $cargo)
					<option value="{{$cargo->id}}"> {{$cargo->no_cargo}} </option>    
				@endforeach
		   </select>
		</div>

		<div class="col-md-2">
			<label class="control-label col-md-1 " for="aa_inicio">Inicio</label>
		   <input id="aa_inicio" class="form-control col-md-2 datas_input"  type="number" min="1500-01-01" max="2050-01-01"
			name="aa_inicio"   
			data-inputmask="'mask' : '9999', 'numericInput': 'true' " 
			value="{{$membro->cargo->aa_inicio or old('aa_inicio')}}" >
		</div>

		<div class="col-md-2">
			<label class="control-label col-md-1 " for="aa_termino">Término</label>
		   <input id="aa_termino" class="form-control col-md-2 datas_input"  type="number" min="1500-01-01" max="2050-01-01"
			name="aa_termino"   
			data-inputmask="'mask' : '9999', 'numericInput': 'true' " 
			value="{{$membro->cargo->aa_termino or old('aa_termino')}}" >
		</div>
	
		<div class="col-md-1 ">
			<a id="cad_cargo"
				data-target="#cad_cargo"
				class="btn-circulo btn btn-primary btn-md   pull-right " 
				data-toggle="tooltip" 
				title="Adiciona um cargo">
					<span class="fa fa-plus">  </span>
			</a> 
			
		</div>

	</div>
	

   
   <!------------------------------------>

	<div class="x_content ">
		<div class="panel-body">
			<table class="table table-striped display compact" id="tabela_cargos">
				<thead>
					<tr>
						<th> Cargo     </th>
						<th> Início    </th>
						<th> Término 	</th>
						<th> Ações     </th>
					</tr>
				</thead>
				<tbody>
					
				</tbody>
			</table>
		</div>
	</div>
</div>

