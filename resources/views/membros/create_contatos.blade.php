<div class="x_panel modal-content panel_sem_margem" >
   <div class="clearfix"></div>
   <div class="col-md-6 ">
		<div class="clearfix"></div>
		<div class="x_title" style="margin-bottom: 15px;"> Telefones <div class="clearfix"></div> </div>

		<div class="col-md-12">
			<div class="x_panel panel_telefone panel_sem_margem ">            

				{{-- bloco de telefone --}}
				<div class="item form-group">
					<div class="row">
						<div class="col-md-6" style="top: 4px;">
							<label class="control-label col-md-3" for="telefones[0][nu_telefone]"> Residencial </label>
							<input id="telefones[0][nu_telefone]"   name="telefones[0][nu_telefone]" class="form-control input-md telefone " 
								placeholder="(99) 999999-9999" type="text" data-inputmask="'mask' : '(99) 99999-9999'" 
								value="{{$membro->telefones[0]->nu_telefone or old('telefones[0][nu_telefone]')}}">
							<input name="telefones[0][ic_telefone]" type="hidden" value="Residencial">
						</div>
						<div class="col-md-6" style="top: 4px;">
							<label class="control-label col-md-3" for="telefones[1][nu_telefone]"> Celular </label>
							<input id="telefones[1][nu_telefone]"   name="telefones[1][nu_telefone]" class="form-control input-md telefone" 
								placeholder="(99) 999999-9999"  type="text" data-inputmask="'mask' : '(99) 99999-9999'" 
								value="{{$membro->telefones[1]->nu_telefone or old('telefones[1][nu_telefone]')}}">
								<input name="telefones[1][ic_telefone]" type="hidden" value="Celular">
						</div>
					</div>
				</div>

				<div class="item form-group">
					<div class="row">
						<div class="col-md-6" style="top: 4px;">
								<label class="control-label col-md-3" for="telefones[2][nu_telefone]"> Comercial </label>
							<input id="telefones[2][nu_telefone]"   name="telefones[2][nu_telefone]" class="form-control input-md telefone" 
								placeholder="(99) 999999-9999"  type="text" data-inputmask="'mask' : '(99) 99999-9999'" 
								value="{{$membro->telefones[2]->nu_telefone or old('telefones[2][nu_telefone]')}}">

								<input name="telefones[2][ic_telefone]" type="hidden" value="Comercial">
						</div>
						<div class="col-md-6" style="top: 4px;">
								<label class="control-label col-md-3" for="telefones[3][nu_telefone]"> Recado </label>
							<input id="telefones[3][nu_telefone]"   name="telefones[3][nu_telefone]" class="form-control input-md telefone" 
								placeholder="(99) 999999-9999"  type="text" data-inputmask="'mask' : '(99) 99999-9999'" 
								value="{{$membro->telefones[3]->nu_telefone or old('telefones[3][nu_telefone]')}}">

								<input name="telefones[3][ic_telefone]" type="hidden" value="Recado">
						</div>
					</div>
				</div>
				{{-- FIM bloco de telefone --}}
			</div>

		</div>
	</div>

   {{-- ==============================================================EMAIL ============================================ --}}

   <div class="col-md-6 ">
		<div class="clearfix"></div>
		<div class="x_title" style="margin-bottom: 15px;"> Email <div class="clearfix"></div> </div>

		<div class="col-md-12">
			<div class="x_panel panel_emails panel_sem_margem">            
				{{-- bloco de email --}}
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
						<input name="emails[0][email]" class="form-control input-md" placeholder="email@servidor.com.br"  type="email"  value="{{ $membro->emails[0]->email or old('emails[0][email]')}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
						<input name="emails[1][email]" class="form-control input-md" placeholder="email@servidor.com.br"  type="email"  value="{{ $membro->emails[1]->email or old('emails[1][email]')}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
						<input name="emails[2][email]" class="form-control input-md" placeholder="email@servidor.com.br"  type="email"  value="{{ $membro->emails[2]->email or old('emails[2][email]')}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-11" style="top: 4px;">
						<input name="emails[3][email]" class="form-control input-md" placeholder="email@servidor.com.br"  type="email"  value="{{ $membro->emails[3]->email or old('emails[3][email]')}}">
					</div>
				</div>
				{{-- FIM bloco de email --}}
			</div>
		</div>
   </div>
</div>


















			