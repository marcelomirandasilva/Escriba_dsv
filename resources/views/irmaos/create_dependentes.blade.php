<div class="col-md-12 "  >
   <button  name="submit" value="clonar_dependente" 
      class="btn-circulo btn btn-primary btn-md   pull-right  clonar_dependente"
      data-toggle="tooltip"
      title="Adiciona um dependente">
      <span class="fa fa-plus">  </span>
   </button>   


   <div class="col-md-11">
      <div class="x_panel panel_dependente"> 
         <div class="item form-group">

            <label class="col-md-1 control-label" for="dependente[0][nome]">Nome</label>
            <div class="col-md-7">
               <input id="dependente[0][nome]" name="dependente[0][nome]" type="text" placeholder="Informe o nome do dependente" class="form-control input-md" >
            </div>
         </div>
         <div class="item form-group">
            <label class="control-label col-md-1 " for="dependente[0][parentesco]">Parentesco</label>
            <div class="col-md-3 ">
               <select   name="dependente[0][parentesco]" 
                  id="dependente[0][parentesco]" 
                  class="form-control col-md-2 diminui_espacos datas_input" >
                  <option value=""  selected style="color: #ccc;"> --- </option>
                  @foreach($grau_parentesco as $ic_parentesco)
                  <option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
                  @endforeach
               </select>
            </div>

            <label class="control-label col-md-2 " for="dependente[0][nascimento]">Nascimento</label>
            <div class="col-md-2 ">
               <input id="dependente[0][nascimento]" 
                  class="form-control col-md-2 datas_input" 
                  name="dependente[0][nascimento]" 
                  placeholder="Data de Nascimento" 
                  type="date">
            </div>

            <div class="col-md-3">
               <button name="submit" value="excluir_dependente" 
                  data-toggle="tooltip" 
                  title="Remover o dependente" 
                  class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_dependente" 
                  selected style="display:none;">
               </button>
            </div>

         </div>
      </div>
      <div class="local_clone_dependente"></div> 
   </div>
</div>