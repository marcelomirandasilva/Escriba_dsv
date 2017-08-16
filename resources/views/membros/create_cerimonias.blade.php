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

      <label class="control-label col-md-2" for="loja_id_iniciacao">Loja Iniciação</label>
      <div class="col-md-5">
         <select   
            name="loja_id_iniciacao" id="loja_id_iniciacao" class="form-control col-md-5">
            <option value=""  selected style="color: #ccc;"> --- </option>
            @foreach($lojas as $loja)
               <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
            @endforeach
         </select>
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

     <label class="control-label col-md-2 " for="loja_id_elevacao">Loja Elevação</label>
      <div class="col-md-5">
         <select 
            name="loja_id_elevacao" id="loja_id_elevacao"  class="form-control col-md-5">
            <option value=""  selected style="color: #ccc;"> --- </option>
            @foreach($lojas as $loja)
               <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
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
            value="{{$membro->dt_exaltacao or old('dt_exaltacao')}}" 
         >
      </div>

      <label class="control-label col-md-2 " for="loja_id_exaltacao">Loja Exaltação</label>
      <div class="col-md-5">
         <select 
            name="loja_id_exaltacao" id="loja_id_exaltacao"  class="form-control col-md-5">
            <option value=""  selected style="color: #ccc;"> --- </option>
            @foreach($lojas as $loja)
               <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
            @endforeach
         </select>
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

      <label class="control-label col-md-2 " for="loja_id_instalacao">Loja Instalação</label>
      <div class="col-md-5">
         <select 
            name="loja_id_instalacao" id="loja_id_instalacao"  class="form-control col-md-5">
            <option value=""  selected style="color: #ccc;"> --- </option>
            @foreach($lojas as $loja)
               <option value="{{$loja->id}}"> {{$loja->no_loja}} - Nº {{$loja->nu_loja}} </option>    
            @endforeach
         </select>
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




