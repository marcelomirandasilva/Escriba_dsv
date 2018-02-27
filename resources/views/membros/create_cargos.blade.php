
<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>

	<div class="item form-group">
		<label class="control-label col-md-1 " for="no_cargo"> Cargo </label>
		<div class="col-md-4">
		   <select   name="no_cargo" id="no_cargo" class="form-control col-md-4 no_cargo" style="padding-right: 6px; padding-left: 6px; padding-bottom: 4px;">
				<option value=""  selected style="color: #ccc;"> --- </option>
				@foreach($cargos as $cargo)
					<option value="{{$cargo->id}}"> {{$cargo->no_cargo}} </option>    
				@endforeach
		   </select>
		</div>

		<label class="control-label col-md-1 " for="dt_inicio">Inicio</label>
		<div class="col-md-1">
		   <input id="dt_inicio" class="form-control col-md-2 datas_input"  type="number" min="1500-01-01" max="2050-01-01"
			name="dt_inicio"   
			data-inputmask="'mask' : '9999', 'numericInput': 'true' " 
			value="{{$membro->cargo->dt_inicio or old('dt_inicio')}}" >
		</div>

		<label class="control-label col-md-1 " for="dt_termino">Término</label>
		<div class="col-md-1">
		   <input id="dt_termino" class="form-control col-md-2 datas_input"  type="number" min="1500-01-01" max="2050-01-01"
			name="dt_termino"   
			data-inputmask="'mask' : '9999', 'numericInput': 'true' " 
			value="{{$membro->cargo->dt_termino or old('dt_termino')}}" >
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
					@foreach($cargos_ocupados as $cargo )
						<tr>
							<td> 111 </td>
							<td> 222 </td>
							<td> 333 </td>
							<td> 444 </td>
							{{--  <td> {{ $cargo->no_cargo  }}  </td>

							@if( $cargo->dt_inicio <> '0000-00-00')
								<td>{{ \Carbon\Carbon::parse( $cargos->dt_inicio)->format('d/m/Y')  }}     </td>
							@else
								<td> -------------- </td>
							@endif

							@if( $cargo->dt_termino <> '0000-00-00')
								<td>{{ \Carbon\Carbon::parse( $cargos->dt_termino)->format('d/m/Y')  }}     </td>
							@else
								<td> -------------- </td>
							@endif
								
							
							<td>
								<a href="{{ url("membros/$membro->id") }}" class="btn btn-primary btn-xs  action botao_lista  "  
									data-toggle="tooltip" data-placement="bottom" title="Visualiza esse Irmão"> 
									<i class="glyphicon glyphicon-eye-open icone_botao_lista"></i>
								</a>
									
								<a href="{{ url("membros/$membro->id/edit") }}" class="btn btn-warning btn-xs action botao_lista  " 
									data-toggle="tooltip" data-placement="bottom" title="Edita esse Irmão">  
									<i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
								</a>
							</td>  --}}
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

