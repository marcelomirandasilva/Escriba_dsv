<div class="col-md-6 "  >
   <div class="clearfix"></div>
   <div class="x_title" style="margin-bottom: 15px;"> Telefone <div class="clearfix"></div> </div>

   <button  name="submit" value="clonar_tel" 
      class="btn-circulo btn btn-primary btn-md   pull-right  clonar_tel "
      data-toggle="tooltip"
      title="Adiciona um telefone">
      <span class="fa fa-plus">  </span>
   </button>   


   <div class="col-md-11">
      <div class="x_panel panel_telefone">            

         {{-- bloco de telefone --}}
         <div class="item form-group">
            
           {{--  TIPO DE TELEFONE  --}}
            <div class="col-md-5" style="top: 4px;">
               <select id="irmao[0][ic_telefone]"  name="irmao[0][ic_telefone]"     data-cip-id="irmao[0][ic_telefone]" 
                  class="form-control col-md-2 "   placeholder="Tipo de telefone"   type="text" >

                  @foreach($tipo_telefone as $tipo)
                     <option value="{{$tipo}}"> {{$tipo}} </option>  
                  @endforeach
               </select>
            </div>

            {{-- NUMERO DO TELEFONE  --}}
            <div class="col-md-6" style="top: 4px;">
               <input id="irmao[0][nu_telefone]"   name="irmao[0][nu_telefone]"     data-cip-id="irmao[0][nu_telefone]"  
                     class="form-control input-md telefone" placeholder="(99)99999-9999"  
                     data-inputmask="'mask' : '(99)[9]9999-9999', 'numericInput': 'false' " type="text">
            </div>

            <div class="col-md-11"></div>
            <button value="excluir_tel" 
               data-toggle="tooltip" 
               title="Remover o telefone" 
               class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir excluir_tel" 
               selected style="display:none;">
            </button>
         </div>
         {{-- FIM bloco de telefone --}}
      </div>

      <div class="local_clone_tel"></div> {{-- Clonagem da div panel_dependentes --}}
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
            <div class="col-md-11" style="top: 4px;">
               <input id="irmao[0][email]"   name="irmao[0][email]"     data-cip-id="irmao[0][email]"  
                     class="form-control input-md telefone" placeholder="email@servidor.com.br"  type="email" >
            </div>

            <div class="col-md-12"></div>
               <button name="submit" value="excluir_email" 
                  data-toggle="tooltip" 
                  title="Remover o email" 
                  class="btn btn-circulo btn-danger glyphicon glyphicon-trash excluir_email" 
                  selected style="display:none;">
               </button>
         </div>
         {{-- FIM bloco de email --}}
      </div>

      <div class="local_clone_email"></div> {{-- Clonagem da div panel_emails --}}

   </div>

</div>

