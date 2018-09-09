<div class="x_panel modal-content panel_sem_margem" >
   <div class="clearfix"></div>
   <div class="col-md-6 ">
		<div class="clearfix"></div>
		<div class="x_title" style="margin-bottom: 15px;"> Telefone <div class="clearfix"></div> </div>

		<button  name="submit" value="clonar_tel" data-toggle="tooltip" title="Adiciona um telefone"
			class="btn-circulo btn btn-primary btn-md pull-right  clonar_tel ">
			<span class="fa fa-plus">  </span>
		</button>   

		<div class="item form-group">
				<div class="row">
					<div class="col-md-5 ">
						<label class="control-label col-md-12" for="no_pai">Pai</label>
						<input  id="no_pai" class="form-control col-md-5" name="no_pai" placeholder="Nome do Pai do Irmão" type="text" 
						value="{{$membro->no_pai or old('no_pai')}}" >
					</div>
		
					<div class="col-md-5 ">
						<label class="control-label col-md-1" for="no_pai">Mãe</label>
						<input  id="no_mae" class="form-control col-md-5" name="no_mae" placeholder="Nome da Mãe do Irmão" type="text"
						value="{{$membro->no_mae or old('no_mae')}}" >
					</div>
				</div>
			</div>
	</div>

   {{-- ==============================================================EMAIL ============================================ --}}

   <div class="col-md-6 ">
		<div class="clearfix"></div>
		<div class="x_title" style="margin-bottom: 15px;"> Email <div class="clearfix"></div> </div>

		<button  name="submit" value="clonar_email" class="btn-circulo btn btn-primary btn-md   pull-right  clonar_email "
			data-toggle="tooltip" title="Adiciona um Email">
			<span class="fa fa-plus">  </span>
		</button>   

		<div class="col-md-11">
			<div class="x_panel panel_emails panel_sem_margem">            
				{{-- bloco de email --}}
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
					<input id="emails[0][email]"   name="emails[0][email]"     data-cip-id="emails[0][email]"  
						class="form-control input-md " placeholder="email@servidor.com.br"  type="email" >
					</div>

					<div class="col-md-12"></div>
					<button name="submit" value="excluir_email" data-toggle="tooltip" title="Remover o email" 
						class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_email" 
						selected style="display:none;">
					</button>
				</div>
				{{-- FIM bloco de email --}}
			</div>
			<div class="local_clone_email"></div> {{-- Clonagem da div panel_emails --}}
		</div>
   </div>
</div>


















			