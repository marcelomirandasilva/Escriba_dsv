<div class="x_panel modal-content"  id="dependentes">
 	<div class="x_content" {{-- style="display: none" --}}>
		 <ul class="nav navbar-right panel_toolbox">
			
			<li>
				<a  name="submit" value="clonar_dependente" data-toggle="tooltip"title="Adiciona um dependente">
					<i class="fa fa-plus btn btn-pn-circulo btn-cor-padrao  clonar_dependente"></i>
				</a>   
			</li>

		</ul>
		<div class="clearfix"></div>

		<div class="col-md-12"  >

			<div class="col-md-12">
				<div class="painel_dependente hide"> 
					<div class="item form-group">
						<div class="row">
							<div class="col-md-5">
								<label class="col-md-1 control-label" for="dependente[0][no_dependente]">Nome</label>
								<input id="dependentes[0][no_dependente]" name="dependentes[0][no_dependente]" type="text" placeholder="Informe o nome do dependente" class="form-control col-md-8 nome-dependente" >
							</div>

							<div class="col-md-2 ">
								<label class="control-label col-md-1 " for="dependentes[0][ic_sexo]">Sexo</label>
								<select   name="dependentes[0][ic_sexo]" id="dependentes[0][ic_sexo]" 
									class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
									<option value=""  selected style="color: #ccc;"> --- </option>
									@foreach($sexos as $ic_sexo)
										<option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
									@endforeach
								</select>
							</div>

							<div class="col-md-2">
								<label class="control-label col-md-1 alinha_esquerda" for="dependentes[0][ic_grau_parentesco]">Parentesco</label>
								<select   name="dependentes[0][ic_grau_parentesco]" id="dependentes[0][ic_grau_parentesco]" 
									class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
									<option value=""  selected style="color: #ccc;"> --- </option>
									@foreach($parentescos as $ic_parentesco)
										<option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
									@endforeach
								</select>
							</div>

							<div class="col-md-2">
								<label class="control-label  alinha_esquerda col-md-1" for="dependentes[0][dt_nascimento]">Nascimento</label>

								<input name="dependentes[0][dt_nascimento]" id="dependentes[0][dt_nascimento]" 
									class="form-control col-md-2 datas_input nascimento-dependente"  
									placeholder="Data de Nascimento" 
									type="date" min="1500-01-01" max="2050-01-01">
							</div>

							<div class="col-md-1">
								<button name="submit" value="excluir_dependente" 
									data-toggle="tooltip" 
									title="Remover o dependente" 
									class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_dependente" 
									selected style="display:none;">
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="local_clone_dependente"></div> 
			</div>
		</div>
	</div>
</div>