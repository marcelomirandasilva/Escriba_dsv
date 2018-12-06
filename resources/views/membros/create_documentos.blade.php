<div class="x_panel modal-content">
	<div class="clearfix"></div>

	{{---------------------- CPF --------------------------------}}      

	<div class="item form-group">
		<div class="row">
			<div class="col-md-2">
				<label class="control-label col-md-1" for="nu_cpf"> CPF* </label>
				<input id="nu_cpf"  name="nu_cpf" class="form-control col-md-2 cpf" 
					{{-- data-inputmask="'mask' : '999.999.999-99', 'numericInput': 'true' " type="text"  --}}
					placeholder="999.999.999-99"  
					value="{{$membro->nu_cpf or old('nu_cpf')}}" 
				>
			</div>
		</div>
	</div>
	<div class="item form-group">
		<div class="row">
			<div class="col-md-2">
				<label class="col-md-1 control-label" for="rg">RG</label>
				<input id="nu_identidade" name="nu_identidade" class="form-control input-md {{--  rg  --}}"
					placeholder="999.999.999-99" maxlength="20" 
					value="{{$membro->nu_identidade or old('nu_identidade')}}" >
			</div>
			<div class="col-md-2">
				<label class="col-md-12 control-label" for="no_orgao_emissor_idt">Orgão Emissor</label>  
				<input id="no_orgao_emissor_idt" 
					name="no_orgao_emissor_idt" 
					type="text" placeholder="Orgão Emissor" class="form-control input-md" 
					value="{{$membro->no_orgao_emissor_idt or old('no_orgao_emissor_idt')}}" 
				>
			</div>
			<div class="col-md-2">
				<label class="col-md-12 control-label" for="dt_emissao_idt">Data de Emissão</label>  
				<input id="dt_emissao_idt" 
					name="dt_emissao_idt" 
					type="date" min="1500-01-01" max="2050-01-01"
					class="form-control col-md-2 datas_input" 
					value="{{$membro->dt_emissao_idt or old('dt_emissao_idt')}}" 
				>
			</div>
		</div>
	</div>
	<div class="item form-group">
		<div class="row">
			<div class="col-md-2">
				<label class="control-label col-md-1" for="nu_titulo_eleitor"> Título </label>
				<input id="nu_titulo_eleitor"  name="nu_titulo_eleitor" class="form-control col-md-2" 
					{{-- data-inputmask="'mask' : '99.999.999-9', 'numericInput': 'true' " type="text"  --}}
					placeholder="Título de Eleitor"   maxlength="10"
					type="text"
					value="{{$membro->nu_titulo_eleitor or old('nu_titulo_eleitor')}}" 
				>
			</div>

			<div class="col-md-2">
				<label class="col-md-12 control-label" for="rg">Zona Eleitoral</label>
				<input id="nu_zona_eleitoral" name="nu_zona_eleitoral" class="form-control input-md"
					max=9999
					data-inputmask="'mask' : '999.999', 'numericInput': 'true' " type="text" placeholder="999.999"  
					value="{{$membro->nu_zona_eleitoral or old('nu_zona_eleitoral')}}" 
				>
			</div>

			<div class="col-md-2">
				<label class="col-md-12 control-label" for="dt_emissao_titulo">Data de Emissão</label>  
				<input id="dt_emissao_titulo" name="dt_emissao_titulo" 
					type="date" min="1500-01-01" max="2050-01-01"
					class="form-control col-md-2 datas_input" 
					value="{{$membro->dt_emissao_titulo or old('dt_emissao_titulo')}}" 
				>
			</div>
		</div>
	</div>
</div>