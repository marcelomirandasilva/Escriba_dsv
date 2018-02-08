<div class="x_panel modal-content" >
	<div class="clearfix"></div>

	<div class="col-md-12"  >
		@for ($i = 0; $i < 7; $i++)
			<div class="x_panel  panel_dependente "> 
				<div class="item form-group">
					<div class="col-md-6">
						<label class="col-md-1 control-label" for="dependente[{{ $i }}][no_dependente]">Nome</label>
						<input id="dependentes[{{ $i }}][no_dependente]" name="dependentes[{{ $i }}][no_dependente]" type="text" placeholder="Informe o nome do dependente" class="form-control col-md-8 nome-dependente" >
					</div>
					<div class="col-md-2">
						<label class="control-label col-md-1 alinha_esquerda" for="dependentes[{{ $i }}][ic_grau_parentesco]">Parentesco</label>
						<select   name="dependentes[{{ $i }}][ic_grau_parentesco]" id="dependentes[{{ $i }}][ic_grau_parentesco]" 
							class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
							<option value=""  selected style="color: #ccc;"> --- </option>
							@foreach($grau_parentesco as $ic_parentesco)
								<option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
							@endforeach
						</select>
					</div>

					<div class="col-md-2">
						<label class="control-label  alinha_esquerda col-md-1" for="dependentes[{{ $i }}][dt_nascimento]">Nascimento</label>
						<input name="dependentes[{{ $i }}][dt_nascimento]" id="dependentes[{{ $i }}][dt_nascimento]" 
							class="form-control col-md-2 datas_input nascimento-dependente"  
							placeholder="Data de Nascimento" 
							type="date" min="1500-01-01" max="2050-01-01">
					</div>
					<div class="col-md-2 ">
						<label class="control-label col-md-1 " for="dependentes[{{ $i }}][ic_sexo]">Sexo</label>
						<select   name="dependentes[{{ $i }}][ic_sexo]" id="dependentes[{{ $i }}][ic_sexo]" 
							class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
							<option value=""  selected style="color: #ccc;"> --- </option>
							@foreach($sexos as $ic_sexo)
								<option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
							@endforeach
						</select>
					</div>
				</div>
			</div>
		@endfor
		
	</div>
</div>