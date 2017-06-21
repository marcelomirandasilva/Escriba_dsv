<div class="x_panel modal-content">
   <div class="clearfix"></div>

   {{---------------------- CPF --------------------------------}}      

   <div class="item form-group">
      <label class="control-label col-md-1" for="nu_cpf"> CPF* </label>
      <div class="col-md-2">
         <input id="nu_cpf"  name="nu_cpf" class="form-control col-md-2 cpf" 
            data-inputmask="'mask' : '999.999.999-99', 'numericInput': 'true' " type="text" 
            placeholder="999.999.999-99"  
            required="required" 
            value="{{$membro->nu_cpf or old('nu_cpf')}}" 
         >
      </div>

   </div>

   <div class="item form-group">
      {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}

      <!-- RG-->            
      <label class="col-md-1 control-label" for="rg">RG</label>
      <div class="col-md-2">
         <input id="nu_identidade" name="nu_identidade" class="form-control input-md rg"
            data-inputmask="'mask' : '99.999.999-9', 'numericInput': 'true' " type="text" placeholder="99.999.999-9"  
            value="{{$membro->nu_identidade or old('nu_identidade')}}" 
         >
      </div>

      <!-- Orgão Emissor do RG-->
      <label class="col-md-2 control-label" for="no_orgao_emissor_idt">Orgão Emissor</label>  
      <div class="col-md-2">
         <input id="no_orgao_emissor_idt" 
            name="no_orgao_emissor_idt" 
            type="text" placeholder="Orgão Emissor" class="form-control input-md" 
            value="{{$membro->no_orgao_emissor_idt or old('no_orgao_emissor_idt')}}" 
            disabled>
      </div>

      <!-- Data de Emissão do RG-->
      <label class="col-md-1 control-label" for="dt_emissao_idt">Emissão</label>  
      <div class="col-md-2">
         <input id="dt_emissao_idt" 
            name="dt_emissao_idt" 
            type="date" class="form-control input-md global_data" 
            value="{{$membro->dt_emissao_idt or old('dt_emissao_idt')}}" 
            disabled
         >
      </div>

   </div>


   <div class="item form-group">
      <label class="control-label col-md-1" for="nu_titulo_eleitor"> Título </label>
      <div class="col-md-2">
         <input id="nu_titulo_eleitor"  name="nu_titulo_eleitor" class="form-control col-md-2" 
            data-inputmask="'mask' : '99.999.999-9', 'numericInput': 'true' " type="text" 
            placeholder="Título de Eleitor"   
            type="text"
            value="{{$membro->nu_titulo_eleitor or old('nu_titulo_eleitor')}}" 
         >
      </div>


      <label class="col-md-2 control-label" for="rg">Zona Eleitoral</label>
      <div class="col-md-2">
         <input id="nu_zona_eleitoral" name="nu_zona_eleitoral" class="form-control input-md"
            data-inputmask="'mask' : '999.999', 'numericInput': 'true' " type="text" placeholder="999.999"  
            value="{{$membro->nu_zona_eleitoral or old('nu_zona_eleitoral')}}" 
            disabled>
      </div>


      <label class="col-md-1 control-label" for="dt_emissao_titulo">Emissão</label>  
      <div class="col-md-2">
         <input id="dt_emissao_titulo" name="dt_emissao_titulo" 
         type="date" class="form-control input-md global_data" 
         value="{{$membro->dt_emissao_titulo or old('dt_emissao_titulo')}}" 
         disabled
         >
      </div>
   </div>
</div>