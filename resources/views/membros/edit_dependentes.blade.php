<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="col-md-12"  >
		<button  name="submit" value="clonar_dependente" 
			class="btn-circulo btn btn-primary btn-md   pull-right  clonar_dependente"
			data-toggle="tooltip"
			title="Adiciona um dependente">
			<span class="fa fa-plus">  </span>
		</button>   
	
		<div class="col-md-12">
			{{-- se não tiver dependentes criar um formulário oculto para ser clonado --}}
			@if(! isset($dependentes[0]))
				<div class="x_panel clone_dependente">
					<div class="item form-group">

						<label class="col-md-1 control-label" for="dependente[0][no_dependente]">Nome</label>
						<div class="col-md-8">
							<input name="dependentes[0][no_dependente]" type="text" placeholder="Informe o nome do dependente" 
								class="form-control col-md-8 nome-dependente" 
								>
						</div>

					</div>

					<div class="item form-group">
						<label class="control-label col-md-1 " for="dependentes[0][ic_sexo]">Sexo</label>
						<div class="col-md-2 ">
							<select   name="dependentes[0][ic_sexo]"
								class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($sexos as $ic_sexo)
										<option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
								@endforeach
							</select>
						</div>

						<label class="control-label col-md-1 alinha_esquerda" for="dependentes[0][ic_grau_parentesco]">Parentesco</label>
						<div class="col-md-2">
							<select   name="dependentes[0][ic_grau_parentesco]" 
								class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($grau_parentesco as $ic_grau_parentesco)
										<option value="{{$ic_grau_parentesco}}"> {{$ic_grau_parentesco}} </option>    
								@endforeach
							</select>
						</div>

						<label class="control-label  alinha_esquerda col-md-1" for="dependentes[0][dt_nascimento]">Nascimento</label>
						<div class="col-md-2">

						<input name="dependentes[0][dt_nascimento]" class="form-control col-md-2 datas_input nascimento-dependente"  
							placeholder="Data de Nascimento" type="date" min="1500-01-01" max="2050-01-01"
							value="{{$dependente->dt_nascimento or old ('') }}" >
						</div>

						<div class="col-md-3">
						<button name="submit" value="excluir_dependente" 
							data-toggle="tooltip" 
							title="Remover o dependente" 
							class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_dependente" 
							selected style="display:block;">
						</button>
						</div>

					</div>
				</div>
			@endif

			@foreach ($membro->dependentes as $key =>  $dependente )
				<div class="x_panel @if($key==0) clone_dependente @else panel_dependente  @endif">
					<div class="item form-group">

						<label class="col-md-1 control-label" for="dependente[{{$key}}][no_dependente]">Nome</label>
						<div class="col-md-8">
							<input name="dependentes[{{$key}}][no_dependente]" type="text" placeholder="Informe o nome do dependente" 
								class="form-control col-md-8 nome-dependente" 
								value="{{$dependente->no_dependente or old ('no_dependente') }}">
						</div>

					</div>

					<div class="item form-group">
						<label class="control-label col-md-1 " for="dependentes[{{$key}}][ic_sexo]">Sexo</label>
						<div class="col-md-2 ">
							<select   name="dependentes[{{$key}}][ic_sexo]"
								class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
								<option value=""  selected style="color: #ccc;"> --- </option>
								@foreach($sexos as $ic_sexo)
									@if ( $dependente->ic_sexo == $ic_sexo)
										<option value="{{$ic_sexo}}" selected="selected"> {{$ic_sexo}} </option>    
									@else
										<option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
									@endif
								@endforeach
							</select>
						</div>

						<label class="control-label col-md-1 alinha_esquerda" for="dependentes[{{$key}}][ic_grau_parentesco]">Parentesco</label>
						<div class="col-md-2">
							<select   name="dependentes[{{$key}}][ic_grau_parentesco]" 
								class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
								<option value=""  selected style="color: #ccc;"> --- </option>

								@foreach($parentescos as $ic_grau_parentesco)
									@if ( $dependente->ic_grau_parentesco == $ic_grau_parentesco)
										<option value="{{$ic_grau_parentesco}}" selected="selected"> {{$ic_grau_parentesco}} </option>    
									@else
										<option value="{{$ic_grau_parentesco}}"> {{$ic_grau_parentesco}} </option>    
									@endif
								@endforeach
							</select>
						</div>

						<label class="control-label  alinha_esquerda col-md-1" for="dependentes[{{$key}}][dt_nascimento]">Nascimento</label>
						<div class="col-md-2">

						<input name="dependentes[{{$key}}][dt_nascimento]" class="form-control col-md-2 datas_input nascimento-dependente"  
							placeholder="Data de Nascimento" type="date" min="1500-01-01" max="2050-01-01"
							value="{{$dependente->dt_nascimento or old ('') }}" >
						</div>

						<div class="col-md-3">
						<button name="submit" value="excluir_dependente" 
							data-toggle="tooltip" 
							title="Remover o dependente" 
							class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_dependente" 
							selected style="display:block;">
						</button>
						</div>

					</div>
				</div>
			@endforeach
			<div class="local_clone_dependente"></div> 
		</div>
   </div>
</div>