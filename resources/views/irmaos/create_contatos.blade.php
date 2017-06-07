<div class="x_panel"  ">
   <div class="clearfix"></div>

   <div class="col-md-6">
      <div class="x_panel">            

         <div class="x_title" >  Telefone  1  </div>

      
         <div class="form-group">

            <label class="control-label col-md-1 " for="ic_telefone">Rito*</label>
            <div class="col-md-2 ">
               <select id="ic_telefone"   
                  class="form-control col-md-2 " 
                  name="ic_telefone" 
                  placeholder="Tipo de telefone" 
                  type="text">

                  @foreach($tipos_telefone as $tipo_telefone)
                     
                        <option value="{{$tipo_telefone}}"> {{$tipos_telefone}} </option>  
                     
                  @endforeach

               </select>
            </div>




            <label class="col-md-1 control-label" for="nu_telefone">Tel.</label>
            <div class="col-md-2">
               <input id="nu_telefone" 
                     name="nu_telefone" 
                     type="text" 
                     placeholder="(99)9999-9999" 
                     class="form-control input-md telefone"
                     >
            </div>
      
            {{-- Celular --}}
            <label class="col-md-1 control-label" for="pa-celular">Celular</label>
            <div class="col-md-2">
               <input id="pa-celular" name="pa-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
            </div>

            {{-- Telefone --}}
            <label class="col-md-1 control-label" for="pa-telefone1">Tel.</label>
            <div class="col-md-2">
               <input id="pa-telefone1" name="pa-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
            </div>

            </div> {{-- FIM Email, Celular e Telefone --}}
         </div>
      </div>


      <button name="submit" value="clonar" class="btn btn-xs btn-primary clonar "> Adicionar mais um</button>

</div>




      {{-- Email --}}
            <label class="col-md-1 control-label" for="pa-email">Email</label>  
            <div class="col-md-5">
               <input id="pa-email" name="pa-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
            </div>
