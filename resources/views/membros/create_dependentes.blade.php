
<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>

	<div class="item form-group">
		
		<div class="row">
			<div class="col-md-5">
				<label class="col-md-1 control-label" for="no_dependente">Nome</label>
				<input id="no_dependente" name="no_dependente" type="text" placeholder="Informe o nome do dependente" class="form-control col-md-8 nome-dependente" >
			</div>

			<div class="col-md-2 ">
				<label class="control-label col-md-1 " for="ic_sexo">Sexo</label>
				<select   name="ic_sexo" id="ic_sexo" 
					class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
					<option value=""  selected style="color: #ccc;"> --- </option>
					@foreach($sexos as $ic_sexo)
						<option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
					@endforeach
				</select>
			</div>

			<div class="col-md-2">
				<label class="control-label col-md-1 alinha_esquerda" for="ic_grau_parentesco">Parentesco</label>
				<select   name="ic_grau_parentesco" id="ic_grau_parentesco" 
					class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
					<option value=""  selected style="color: #ccc;"> --- </option>
					@foreach($parentescos as $ic_parentesco)
						<option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
					@endforeach
				</select>
			</div>

			<div class="col-md-2">
				<label class="control-label  alinha_esquerda col-md-1" for="dt_nascimento_dependente">Nascimento</label>

				<input name="dt_nascimento_dependente" id="dt_nascimento_dependente" 
					class="form-control col-md-2 datas_input nascimento-dependente"  
					placeholder="Data de Nascimento" 
					type="date" min="1900-01-01" max="2050-01-01">
			</div>
		
			<div class="col-md-1 ">
				<a id="cad_dependente"
					data-target="#cad_dependente"
					class="btn-circulo btn btn-primary btn-md   pull-right " 
					data-toggle="tooltip" 
					title="Adiciona um dependente">
						<span class="fa fa-plus">  </span>
				</a> 
				
			</div>
		</div>
		

	</div>
	

   
   <!------------------------------------>

	<div class="x_content ">
		<div class="panel-body">
			<table class="table table-striped display compact" id="tabela_dependentes">
				<thead>
					<tr>
						<th> Nome     </th>
						<th> Sexo    </th>
						<th> Parentesco 	</th>
						<th> Nascimento 	</th>
						<th> Ações     </th>
					</tr>
				</thead>
				<tbody>
				@if(isset($edita))
					@foreach($membro->dependentes as $indexKey => $dependente )
						<tr>
							<td> {{$dependente->no_dependente}} </td>
							<td> {{$dependente->ic_sexo}} </td>
							<td> {{$dependente->ic_grau_parentesco}} </td>

							@if( $dependente->aa_inicio <> '0000-00-00')
								<td>{{ \Carbon\Carbon::parse( $dependente->dt_nascimento)->format('d/m/Y')  }}     </td>
							@else
								<td> -------------- </td>
							@endif

							<td>
								<a class="btn btn-warning btn-xs action btn_tb_dependente_remove" 
									data-id="{{$indexKey}}" 
									data-toggle="tooltip" data-placement="bottom" title="Remove esse Cargo">  
									
									<i class="glyphicon glyphicon-remove"></i>
								</a>
							</td>
						</tr>
					@endforeach

				@endif
					
				</tbody>
			</table>
		</div>
	</div>
</div>

