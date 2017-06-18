<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="item form-group">
      <label class="control-label col-md-1 " for="dt_iniciacao">Iniciação</label>
      <div class="col-md-2 ">
         <input id="dt_iniciacao"   
            class="form-control col-md-2 datas_input" 
            name="dt_iniciacao" 
            placeholder="Data da Iniciação" 
            type="date">
      </div>

      <!------------------------------------>

      <label class="control-label col-md-2 " for="fk_loja_iniciacao">Loja Iniciação</label>
      <div class="col-md-5">
         <input id="fk_loja_iniciacao"   
            class="form-control col-md-5"
             
            name="fk_loja_iniciacao" 
            placeholder="Loja em que o Irmão foi Iniciado" 
            type="text">
         
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
            type="date">
      </div>

     <label class="control-label col-md-2 " for="fk_loja_elevacao">Loja Elevação</label>
      <div class="col-md-5">
         <select id="fk_loja_elevacao"   
            class="form-control col-md-5 "
            
            name="fk_loja_elevacao" 
            placeholder="Loja em que o Irmão foi Elevado" 
            type="text">
            <option value="">---------------</option>  
            @foreach($lojas as $loja)
               <option value="{{$loja->id}}">{{$loja->no_loja}}</option>  
            @endforeach
         </select>
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
         >
      </div>

      <label class="control-label col-md-2 " for="fk_loja_exaltacao">Loja Exaltação</label>
      <div class="col-md-5">
         <input id="fk_loja_exaltacao"   
            class="form-control col-md-5" 
            name="fk_loja_exaltacao" 
            placeholder="Loja em que o Irmão foi Exaltado" 
            type="text"
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
            >
         </div>

      <label class="control-label col-md-2 " for="fk_loja_instalacao">Loja Exaltação</label>
      <div class="col-md-5">
         <input id="fk_loja_instalacao"   
            class="form-control col-md-5" 
            name="fk_loja_instalacao" 
            placeholder="Loja em que o Irmão foi Instalado" 
            type="text"
         >
      </div>
   </div>
</div>




