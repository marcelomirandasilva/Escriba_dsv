
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

		<label class="control-label col-md-1 " for="aa_inicio">Inicio</label>
		<div class="col-md-1">
		   <input id="aa_inicio" class="form-control col-md-2 datas_input"  type="number" min="1500-01-01" max="2050-01-01"
			name="aa_inicio"   
			data-inputmask="'mask' : '9999', 'numericInput': 'true' " 
			value="{{$membro->cargo->aa_inicio or old('aa_inicio')}}" >
		</div>

		<label class="control-label col-md-1 " for="aa_termino">Término</label>
		<div class="col-md-1">
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
					@foreach($membro->cargos as $cargo )
						<tr>
							<td> {{$cargo->no_cargo}} </td>
							<td> {{$cargo->pivot->aa_inicio}} </td>
							<td> {{$cargo->pivot->aa_termino}} </td>
							<td> 
								<a class="btn btn-danger  btn-xs action btn_tb_cargo_remove botao_acao" data-id={{$loop->index}} 
											data-toggle="tooltip" data-placement="bottom" title="Remove esse Cargo">  
											<i class="glyphicon glyphicon-remove"></i>
								</a>

								{{--  <a class="btn btn-warning  btn-xs action btn_tb_cargo_edita botao_acao" data-id={{$loop->index}} 
											data-toggle="tooltip" data-placement="bottom" title="Edita esse Cargo">  
											<i class="glyphicon glyphicon-pencil"></i>
								</a>  --}}
								
							</td>
							{{--  <td> {{ $cargo->no_cargo  }}  </td>

							@if( $cargo->aa_inicio <> '0000-00-00')
								<td>{{ \Carbon\Carbon::parse( $cargos->aa_inicio)->format('d/m/Y')  }}     </td>
							@else
								<td> -------------- </td>
							@endif

							@if( $cargo->aa_termino <> '0000-00-00')
								<td>{{ \Carbon\Carbon::parse( $cargos->aa_termino)->format('d/m/Y')  }}     </td>
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

