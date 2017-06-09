<div class="col-md-6 "  >
   <div class="clearfix"></div>
   <div class="x_title" style="margin-bottom: 15px;"> Telefone <div class="clearfix"></div> </div>

   <button  name="submit" value="clonar_telefone" 
      class="btn-circulo btn btn-primary btn-md   pull-right  clonar_telefone "
      data-toggle="tooltip"
      title="Adiciona um telefone">
      <span class="fa fa-plus">  </span>
   </button>   


   <div class="col-md-11">
      <div class="x_panel panel_telefones">            

         {{-- bloco de telefone --}}
         <div class="form-group">
            
           {{--  <label class="control-label col-md-1 " for="irmao[0][ic_telefone]">Tipo</label>  --}}
            <div class="col-md-5" style="top: 4px;">
               <select id="irmao[0][ic_telefone]"  name="irmao[0][ic_telefone]"     data-cip-id="irmao[0][ic_telefone]" 
                  class="form-control col-md-2 "   placeholder="Tipo de telefone"   type="text" >

                  @foreach($tipo_telefone as $tipo)
                     <option value="{{$tipo}}"> {{$tipo}} </option>  
                  @endforeach

               </select>
            </div>
            {{-- <label class="col-md-2 control-label" for="nu_telefone">Numero</label>  --}}
            <div class="col-md-6" style="top: 4px;">
               <input id="irmao[0][nu_telefone]"   name="irmao[0][nu_telefone]"     data-cip-id="irmao[0][nu_telefone]"  
                     class="form-control input-md telefone" placeholder="(99)9999-9999"  type="text" >
            </div>

            <div class="col-md-11"></div>
               <button name="submit" value="excluir" 
                  data-toggle="tooltip" 
                  title="Remover o telefone" 
                  class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir" 
                  selected style="display:none;">
               </button>
         </div>
         {{-- FIM bloco de telefone --}}
      </div>

      <div class="div-clone"></div> {{-- Clonagem da div panel_dependentes --}}

   </div>

</div>

{{-- ==============================================================EMAIL ============================================ --}}

<div class="col-md-6 "  >
   <div class="clearfix"></div>
   <div class="x_title" style="margin-bottom: 15px;"> Email <div class="clearfix"></div> </div>

   <button  name="submit" value="clonar_email" 
      class="btn-circulo btn btn-primary btn-md   pull-right  clonar_email "
      data-toggle="tooltip"
      title="Adiciona um Email">
      <span class="fa fa-plus">  </span>
   </button>   


   <div class="col-md-11">
      <div class="x_panel panel_emails">            

         {{-- bloco de email --}}
         <div class="form-group">
            <div class="col-md-2" style="top: 4px;">
               <input id="irmao[0][email]"   name="irmao[0][email]"     data-cip-id="irmao[0][email]"  
                     class="form-control input-md telefone" placeholder="(99)9999-9999"  type="text" >
            </div>

            <div class="col-md-11"></div>
               <button name="submit" value="excluir_email" 
                  data-toggle="tooltip" 
                  title="Remover o email" 
                  class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_email" 
                  selected style="display:none;">
               </button>
         </div>
         {{-- FIM bloco de email --}}
      </div>

      <div class="div_clone_emails"></div> {{-- Clonagem da div panel_emails --}}

   </div>

</div>