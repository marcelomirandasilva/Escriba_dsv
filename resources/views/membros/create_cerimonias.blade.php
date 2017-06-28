<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>

   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_iniciacao">Iniciação</label>
      <div class="col-md-2 ">
         <input id="dt_iniciacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_iniciacao" 
            placeholder="Data da Iniciação" 
            type="date"
            value="{{$membro->dt_iniciacao or old('dt_iniciacao')}}" >
      </div>


      <label class="control-label col-md-2 " for="fk_loja_iniciacao">Loja Iniciação</label>
      <div class="col-md-5">
         <input id="fk_loja_iniciacao"   
            class="form-control col-md-5"
            name="fk_loja_iniciacao" 
            placeholder="Loja em que o Irmão foi Iniciado" 
            type="text"
            value="{{$membro->fk_loja_iniciacao or old('fk_loja_iniciacao')}}" >
         
      </div>
      <div class="col-md-1 ">
          <a href="{{ url('lojas/create') }}" 
              class="btn-circulo btn btn-primary btn-md   pull-right " 
              data-toggle="tooltip"  
              data-placement="bottom" 
              title="Adiciona uma Loja">
              <span class="fa fa-plus">  </span>
           </a>
      </div>
   </div>
 

   <!------------------------------------>

   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_elevacao">Elevação</label>
      <div class="col-md-2 ">
         <input id="dt_elevacao"   dt_elevacao
            class="form-control col-md-2 datas_input" 
            name="dt_elevacao" 
            placeholder="Data da Elevação" 
            type="date"
            value="{{$membro->dt_elevacao or old('dt_elevacao')}}" >
      </div>

     <label class="control-label col-md-2 " for="fk_loja_elevacao">Loja Elevação</label>
      <div class="col-md-5">
         <input id="fk_loja_elevacao"   
            class="form-control col-md-5 "
            name="fk_loja_elevacao" 
            placeholder="Loja em que o Irmão foi Elevado" 
            type="text"
            value="{{$membro->fk_loja_elevacao or old('fk_loja_elevacao')}}" >
      </div>
   </div>


   <!---------------------------------------------------->

   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_exaltacao">Exaltação</label>
      <div class="col-md-2 ">
         <input id="dt_exaltacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_exaltacao" 
            placeholder="Data da Exaltação" 
            type="date"
            value="{{$membro->dt_exaltacao or old('dt_exaltacao')}}" 
         >
      </div>

      <label class="control-label col-md-2 " for="fk_loja_exaltacao">Loja Exaltação</label>
      <div class="col-md-5">
         <input id="fk_loja_exaltacao"   
            class="form-control col-md-5" 
            name="fk_loja_exaltacao" 
            placeholder="Loja em que o Irmão foi Exaltado" 
            type="text"
            value="{{$membro->fk_loja_exaltacao or old('fk_loja_exaltacao')}}" 
         >
      </div>
   </div>


   <!------------------------------------>
   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_instalacao">Instalação</label>
      <div class="col-md-2 ">
         <input id="dt_instalacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_instalacao" 
            placeholder="Data da Instalação" 
            type="date"
            value="{{$membro->dt_instalacao or old('dt_instalacao')}}" 
         >
      </div>

      <label class="control-label col-md-2 " for="fk_loja_instalacao">Loja Instalação</label>
      <div class="col-md-5">
         <input id="fk_loja_instalacao"   
            class="form-control col-md-5" 
            name="fk_loja_instalacao" 
            placeholder="Loja em que o Irmão foi Instalado" 
            type="text"
            value="{{$membro->fk_loja_instalacao or old('fk_loja_instalacao')}}" 
         >
      </div>
   </div>

   <div class="x_title"></div>
   <div class="clearfix"></div>

   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_filiacao">Filiação</label>
      <div class="col-md-2 ">
         <input id="dt_filiacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_filiacao" 
            placeholder="Data de Filiação" 
            type="date"
            value="{{$membro->dt_filiacao or old('dt_filiacao')}}" 
         >
      </div>

      <label class="control-label col-md-2 alinha_esquerda" for="dt_regularizacao">Regularização</label>
      <div class="col-md-2 ">
         <input id="dt_regularizacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_regularizacao" 
            placeholder="Data de Regularização" 
            type="date"
            value="{{$membro->dt_regularizacao or old('dt_regularizacao')}}" 
         >
      </div>
   </div>
</div>




