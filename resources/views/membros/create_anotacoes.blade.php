{{--  <div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="col-md-12"  >
      <button  name="submit" value="clonar_dependente" 
         class="btn-circulo btn btn-primary btn-md   pull-right  clonar_dependente"
         data-toggle="tooltip"
         title="Adiciona um dependente">
         <span class="fa fa-plus">  </span>
      </button>   


      <div class="col-md-12">
         <div class="x_panel panel_dependente"> 
            <div class="item form-group">

               <label class="col-md-1 control-label" for="dependente[0][no_dependente]">Nome</label>
               <div class="col-md-8">
                  <input id="dependentes[0][no_dependente]" name="dependentes[0][no_dependente]" type="text" placeholder="Informe o nome do dependente" class="form-control col-md-8 nome-dependente" >
               </div>

            </div>

            <div class="item form-group">
               <label class="control-label col-md-1 " for="dependentes[0][ic_sexo]">Sexo</label>
               <div class="col-md-2 ">
                  <select   name="dependentes[0][ic_sexo]" id="dependentes[0][ic_sexo]" 
                     class="form-control col-md-2 diminui_espacos datas_input sexo-dependente" >
                     <option value=""  selected style="color: #ccc;"> --- </option>
                     @foreach($sexos as $ic_sexo)
                        <option value="{{$ic_sexo}}"> {{$ic_sexo}} </option>    
                     @endforeach
                  </select>
               </div>

               <label class="control-label col-md-1 alinha_esquerda" for="dependentes[0][ic_grau_parentesco]">Parentesco</label>
               <div class="col-md-2">
                  <select   name="dependentes[0][ic_grau_parentesco]" id="dependentes[0][ic_grau_parentesco]" 
                     class="form-control col-md-2 diminui_espacos datas_input parentesco-dependente" >
                     <option value=""  selected style="color: #ccc;"> --- </option>
                     @foreach($grau_parentesco as $ic_parentesco)
                        <option value="{{$ic_parentesco}}"> {{$ic_parentesco}} </option>    
                     @endforeach
                  </select>
               </div>

               <label class="control-label  alinha_esquerda col-md-1" for="dependentes[0][dt_nascimento]">Nascimento</label>
               <div class="col-md-2">

                  <input name="dependentes[0][dt_nascimento]" id="dependentes[0][dt_nascimento]" 
                     class="form-control col-md-2 datas_input nascimento-dependente"  
                     placeholder="Data de Nascimento" 
                     type="date" min="1500-01-01" max="2050-01-01">
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
</div>  --}}