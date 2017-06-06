<!-- NOME, CIM  -------------------------------------------------------------------------->    
<div class="item form-group">
   <label class="control-label col-md-1" for="no_irmao">Nome*</label>
   <div class="col-md-5 ">
      <input  id="no_irmao"   
         class="form-control col-md-5" 
         name="no_irmao" 
         placeholder="Nome completo do Irmão" 
         required="required" 
         type="text"
         autofocus
      >
   </div>

   <label class="control-label col-md-1" for="co_cim">CIM*</label>
   <div  class="col-md-2" >
      <input  id="co_cim"   
         class="form-control col-md-2 cim" 
         name="co_cim" 
         placeholder="1234567" 
         required="required" 
         type="text"
      >
   </div>

   <label class="control-label col-md-1 " for="ic_grau"> Grau* </label>
   <div class="col-md-2">
      <select   name="ic_grau" 
         id="ic_grau" 
         class="form-control col-md-1" 
         required="required" >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($grau as $ic_grau)
            <option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
         @endforeach
      </select>
   </div>
</div>

<!-- NASCIMENTO, ESTADO CIVIL, ESCOLARIDADE, PROFISSÃO ------------------------------------>
<div class="item form-group">
   <label class="control-label col-md-1 " for="dt_nascimento">Nascim.*</label>
   <div class="col-md-2 ">
      <input id="dt_nascimento"   
         class="form-control col-md-2 datas_input " 
         name="dt_nascimento" 
         placeholder="Data de Nascimento" 
         required="required" 
         type="date"
      >
   </div>

   <label class="control-label col-md-2" for="no_nacionalidade">Nacionalidade*</label>
   <div class="col-md-3 ">
      <input  id="no_nacionalidade"   
         class="form-control col-md-3" 
         name="no_nacionalidade" 
         value="Brasileiro" 
         placeholder="Nacionalidade" 
         required="required" 
         type="text">
   </div>

   <label class="control-label col-md-1" for="no_naturalidade">Naturalidade*</label>
   <div class="col-md-3 ">
      <input  id="no_naturalidade"   
         class="form-control col-md-3" 
         name="no_naturalidade" 
         placeholder="Naturalidade" 
         required="required" 
         type="text">
   </div>

   
</div>

<!-- INSTRUÇÃO, PROFISSÃO ------------------------------------>
<div class="item form-group">

   <label class="control-label col-md-1 " for="ic_estado_civil">Est. Civil*</label>
   <div class="col-md-2 ">
      <select   name="ic_estado_civil" 
         id="ic_estado_civil" 
         class="form-control col-md-2" 
         required="required"  >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($estado_civil as $ic_estado_civil)
            <option value="{{$ic_estado_civil}}"> {{$ic_estado_civil}} </option>    
         @endforeach
      </select>
   </div>

   <label class="control-label col-md-2 " for="dt_casamento">Data casamento</label>
   <div class="col-md-2 ">
      <input id="dt_casamento"   
         class="form-control col-md-2 datas_input " 
         name="dt_casamento" 
         placeholder="Data de Casamento" 
         type="date"
      >
   </div>


   <label class="control-label col-md-2 " for="ic_escolaridade"> Instrução* </label>
   <div class="col-md-3">
      <select   name="ic_escolaridade" 
         id="ic_escolaridade" 
         class="form-control col-md-3" 
         required="required" >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($escolaridade as $ic_escolaridade)
            <option value="{{$ic_escolaridade}}"> {{$ic_escolaridade}} </option>    
         @endforeach          
      </select>
   </div>

</div>

<div class="item form-group">

   <label class="control-label col-md-1 " for="de_profissao">Profissão</label>
   <div class="col-md-4 ">
      <input id="de_profissao"   
         class="form-control col-md-4 " 
         name="de_profissao" 
         placeholder="Profissão do Irmão" 
         required="required" 
         type="text"
      >
   </div>


   <div class="form-check col-md-2">
      <label class="form-check-label">
         Aposentado  
         <input class="form-check-input" type="checkbox" value="" name="ic_aposentado">
      </label>
   </div>



   <label class="control-label col-md-2 " for="ic_grau"> Situação </label>
   <div class="col-md-2">
      <select   name="ic_situacao"
         id="ic_situacao" 
         class="form-control col-md-2" 
         required="required" >
         <option value=""  selected style="color: #ccc;"> --- </option>
         @foreach($situacao as $ic_situacao)
            <option value="{{$ic_situacao}}"> {{$ic_situacao}} </option>    
         @endforeach
      </select>
   </div>
</div>
