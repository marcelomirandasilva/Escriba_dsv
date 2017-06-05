
<div class="item form-group">
   <label class="control-label col-md-1" for="ic_endereco"> Tipo de Endereço </label>
   <div class="col-md-2">
      <select   name="ic_endereco"
         id="ic_endereco" 
         class="form-control col-md-2" 
         required="required" >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($tipo_endereco as $tipo_endereco)
            <option value="{{$tipo_endereco}}"> {{$tipo_endereco}} </option>    
         @endforeach
      </select>
   </div>

   <label class="control-label col-md-1 " for="no_uf">UF</label>
   <div class="col-md-1 ">
      <input id="no_uf"   
         class="form-control col-md-1 " 
         name="no_uf" 
         required="required" 
         type="text"
      >
   </div>

   <label class="control-label col-md-1 " for="no_bairro">Municipio</label>
   <div class="col-md-5 ">
      <input id="no_municipio"   
         class="form-control col-md-5 " 
         name="no_municipio" 
         placeholder="Municipio do Irmão" 
         required="required" 
         type="text"
      >
   </div>
</div>



<div class="item form-group">
   <label class="control-label col-md-1 " for="no_bairro">Bairro</label>
   <div class="col-md-5 ">
      <input id="no_bairro"   
         class="form-control col-md-5 " 
         name="no_bairro" 
         placeholder="Bairro do Irmão" 
         required="required" 
         type="text"
      >
   </div>

   <label class="control-label col-md-3 " for="ic_endereco"> Tipo Logradouro </label>
   <div class="col-md-2">
      <select   name="ic_logradouro"
         id="ic_logradouro" 
         class="form-control col-md-2" 
         required="required" >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($tipo_logradouro as $tipo_logradouro)
            <option value="{{$tipo_logradouro}}"> {{$tipo_logradouro}} </option>    
         @endforeach
      </select>
  </div>
</div>


<div class="item form-group">

   <label class="control-label col-md-1 " for="no_logradouro">Logradouro</label>
   <div class="col-md-6  ">
      <input id="no_logradouro"   
         class="form-control col-md-6 " 
         name="no_logradouro" 
         placeholder="Logradouro do Irmão" 
         required="required" 
         type="text"
      >
   </div>

   <label class="control-label col-md-2 " for="nu_logradouro">Número</label>
   <div class="col-md-2 ">
      <input id="nu_logradouro"   
         class="form-control col-md-2 num_logradouro " 
         name="nu_logradouro" 
         placeholder="9999.999" 
         required="required" 
         type="text"
      >
   </div>
</div>