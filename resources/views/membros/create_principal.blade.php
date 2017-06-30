<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!-- NOME, CIM  -------------------------------------------------------------------------->    
   <div class="item form-group ">
      <label class="control-label col-md-1" for="no_membro">Nome*</label>
      <div class="col-md-5 ">
         <input  id="no_membro"   
            class="form-control col-md-5" 
            name="no_membro" 
            placeholder="Nome completo do Irmão" 
            required="required" 
            type="text"
            autofocus
            value="{{$membro->no_membro or old('no_membro')}}" 
         >
      </div>

      <label class="control-label col-md-1 " for="ic_grau"> Grau* </label>
      <div class="col-md-2">
         <select name="ic_grau" 
            id="ic_grau" 
            class="form-control col-md-1" 
            
            >
            <option value=""  selected style="color: #ccc;"> --- </option>

            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($grau as $ic_grau)
                  @if ( $membro->ic_grau == $ic_grau)
                     <option value="{{$ic_grau}}" selected="selected">{{$ic_grau}}</option>
                  @else
                     <option value="{{$ic_grau}}">{{$ic_grau}}</option>  
                  @endif
               @endforeach
            @else
               @foreach($grau as $ic_grau)
                  <option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
               @endforeach
            @endif

         </select>
      </div>





   </div>


   


   <!-- NASCIMENTO, ESTADO CIVIL, ESCOLARIDADE, PROFISSÃO ------------------------------------>
   <div class="item form-group">



      <label class="control-label col-md-1" for="co_cim">CIM*</label>
      <div  class="col-md-2" >
         <input  id="co_cim"   
            class="form-control col-md-2 cim" 
            name="co_cim" 
            placeholder="1234567" 
            required="required" 
            type="number"
            min="1"
            max="9999999"
            data-inputmask="'mask' : '9.999.999', 'numericInput': 'true' " type="text" 
            value="{{$membro->co_cim or old('co_cim')}}" 
            
         >
      </div>

      <label class="control-label col-md-1 " for="dt_nascimento">Nascim.*</label>
      <div class="col-md-2 ">
         <input id="dt_nascimento"   
            class="form-control col-md-2 datas_input " 
            name="dt_nascimento" 
            placeholder="Data de Nascimento" 
            
            type="date"
            value="{{$membro->dt_nascimento or old('dt_nascimento')}}" 
         >
      </div>

      <label class="control-label col-md-1 " for="ic_grau"> Situação </label>
      <div class="col-md-2">
         <select   name="ic_situacao"
            id="ic_situacao" 
            class="form-control col-md-2" 
            
            >
            <option value=""  selected style="color: #ccc;"> --- </option>
            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($situacao as $ic_situacao)
                  @if ( $membro->ic_situacao == $ic_situacao)
                     <option value="{{$ic_situacao}}" selected="selected">{{$ic_situacao}}</option>
                  @else
                     <option value="{{$ic_situacao}}">{{$ic_situacao}}</option>  
                  @endif
               @endforeach
            @else
               @foreach($situacao as $ic_situacao)
                  <option value="{{$ic_situacao}}"> {{$ic_situacao}} </option>    
               @endforeach
            @endif

         </select>
      </div>

   </div>

   <div class="item form-group">
      
      <label class="control-label alinha_esquerda col-md-1" for="no_nacionalidade">Nacional.*</label>
      <div class="col-md-3 ">
         <input  id="no_nacionalidade"   
            class="form-control col-md-3" 
            name="no_nacionalidade" 
            placeholder="Nacionalidade" 
            type="text"
            value="{{$membro->no_nacionalidade or old('no_nacionalidade')}}" >

      </div>

      <label class="control-label alinha_esquerda col-md-2" for="no_naturalidade">Naturalidade*</label>
      <div class="col-md-3 ">
         <input  id="no_naturalidade"   
            class="form-control col-md-3" 
            name="no_naturalidade" 
            placeholder="Naturalidade" 
            
            type="text"
            value="{{$membro->no_naturalidade or old('no_naturalidade')}}" >
      </div>
   </div>

   <div class="item form-group">
      <label class="control-label col-md-1 " for="ic_estado_civil">E. Civil*</label>
      <div class="col-md-3 ">
         <select   name="ic_estado_civil" 
            id="ic_estado_civil" 
            class="form-control col-md-2"    
            
             >
            <option value=""  selected style="color: #ccc;"> --- </option>

            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($estado_civil as $ic_estado_civil)
                  @if ( $membro->ic_estado_civil == $ic_estado_civil)
                     <option value="{{$ic_estado_civil}}" selected="selected">{{$ic_estado_civil}}</option>
                  @else
                     <option value="{{$ic_estado_civil}}">{{$ic_estado_civil}}</option>  
                  @endif
               @endforeach
            @else
               @foreach($estado_civil as $ic_estado_civil)
                  <option value="{{$ic_estado_civil}}"> {{$ic_estado_civil}} </option>    
               @endforeach
            @endif

         </select>
      </div>

      <label class="control-label col-md-2 " for="dt_casamento">Data casamento</label>
      <div class="col-md-3">
         <input id="dt_casamento"   
            class="form-control col-md-2 datas_input " 
            name="dt_casamento" 
            placeholder="Data de Casamento" 
            disabled
            type="date"
            value="{{$membro->dt_casamento or old('dt_casamento')}}" 
         >
      </div>
   </div>

   <div class="item form-group">
      <label class="control-label col-md-1" for="no_pai">Pai*</label>
      <div class="col-md-5 ">
         <input  id="no_pai"   
            class="form-control col-md-5" 
            name="no_pai" 
            placeholder="Nome do Pai do Irmão" 
            
            type="text"
            value="{{$membro->no_pai or old('no_pai')}}" 
         >
      </div>

      <label class="control-label col-md-1" for="no_pai">Mãe*</label>
      <div class="col-md-5 ">
         <input  id="no_mae"   
            class="form-control col-md-5" 
            name="no_mae" 
            placeholder="Nome da Mãe do Irmão" 
            
            type="text"
            value="{{$membro->no_mae or old('no_mae')}}" 
         >
      </div>

   </div>



   <div class="item form-group">



      <label class="control-label col-md-1 " for="ic_escolaridade"> Instrução* </label>
      <div class="col-md-3">
         <select   name="ic_escolaridade" 
            id="ic_escolaridade" 
            class="form-control col-md-3" 
            
             >
            <option value=""  selected style="color: #ccc;"> --- </option>

            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($escolaridade as $ic_escolaridade)
                  @if ( $membro->ic_escolaridade == $ic_escolaridade)
                     <option value="{{$ic_escolaridade}}" selected="selected">{{$ic_escolaridade}}</option>
                  @else
                     <option value="{{$ic_escolaridade}}">{{$ic_escolaridade}}</option>  
                  @endif
               @endforeach
            @else
               @foreach($escolaridade as $ic_escolaridade)
                  <option value="{{$ic_escolaridade}}"> {{$ic_escolaridade}} </option>    
               @endforeach
            @endif
         
         </select>
      </div>

      <label class="control-label col-md-3 " for="no_profissao">Profissão</label>
      <div class="col-md-4 ">
         <input id="no_profissao"   
            class="form-control col-md-4 " 
            name="no_profissao" 
            placeholder="Profissão do Irmão" 
            
            type="text"
            value="{{$membro->no_profissao or old('no_profissao')}}" 
         >
      </div>



   </div>

   <div class="item form-group">
      <label class="control-label alinha_esquerda col-md-1 " for="no_empregador">Empregador</label>
      <div class="col-md-4 ">
         <input id="no_empregador"   
            class="form-control col-md-4 " 
            name="no_empregador" 
            placeholder="Nome do Empregador" 
            type="text"
            value="{{$membro->no_empregador or old('no_empregador')}}" 
         >
      </div>


      <div class="form-check item form-group">
         <label class="form-check-label" style="padding-left: 80px;">
         Aposentado &nbsp;&nbsp;&nbsp;&nbsp;
            <input class="form-check-input checkbox_ok" type="checkbox" id="aposentado"  name="aposentado"
               style="height: 25px;width: 25px;"

               @if (isset($edita)) 
                  @if($membro->ic_aposentado) 
                     checked 
                  @endif
               @else
                  @if(old('$membro->ic_aposentado')) 
                     checked 
                  @endif 
               @endif
            >
         </label>
      </div>



   </div>


   <div class="item form-group">
      
   </div>
</div>