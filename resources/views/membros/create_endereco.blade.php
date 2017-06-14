
<div class="x_panel modal-content">
   <div class="x_title">  Residencial </div>
   <div class="clearfix"></div>


   <div class="item form-group">
      {{-- Logradouro, Número, Complemento --}}
      <label class="control-label col-md-1 " for="pais_id">Pais</label>
      <div class="col-md-2 ">
         <select id="pais_id"   
            class="form-control col-md-2" 
            name="pais_id" 
            placeholder="Nome do Pais" >

            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($paises as $pais)
                  @if ( $loja->endereco->pais == $pais)
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
                  @else
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
                  @endif
               @endforeach
            @else
               @foreach($paises as $pais)
                  @if ($pais->no_pais == ('Brasil'))
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
                  @else 
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
                  @endif
               @endforeach
            @endif
         </select>
      </div> 

      <!-- CEP-->
      <label class="col-md-1 control-label" for="nu_cep">CEP</label>
      <div class="col-md-2">
         <input id="cep" 
               name="nu_cep" 
               type="text" 
               placeholder="99.999-999" 
               class="form-control input-md cep" 
               value="{{$loja->endereco->nu_cep or old('nu_cep')}}" >

      </div>

      <!-- UF-->
      <label class="col-md-1 control-label" for="sg_uf">UF</label>
      <div class="col-md-1">
         <input id="uf" 
               name="sg_uf" 
               type="text"  
               class="form-control input-md uf"
               value="{{$loja->endereco->sg_uf or old('sg_uf')}}" >
      </div>


      <!-- Município-->
      <label class="col-md-1 control-label" for="pa-municipio">Município</label>
      <div class="col-md-3">
         <input id="cidade" 
               name="no_municipio" 
               type="text" 
               class="form-control input-md" 
               value="{{$loja->endereco->no_municipio or old('no_municipio')}}" >
      </div>
   </div>
   <div class="item form-group">
      {{-- Bairro --}}
      <label class="col-md-1 control-label" for="no_bairro">Bairro</label>
      <div class="col-md-3">
         <input id="bairro" 
               name="no_bairro" 
               type="text" 
               placeholder="Centro" 
               class="form-control input-md"
               value="{{$loja->endereco->no_bairro or old('no_bairro')}}" >
      </div>


      <!-- Logradouro ...Av...Rua....etc-->
      <label class="col-md-1 control-label" for="no_logradouro">Logradouro</label>
      <div class="col-md-7">
         <input id="rua" 
               name="no_logradouro" 
               type="text" 
               placeholder="Av, Rua, Travessa..." 
               class="form-control input-md"
               value="{{$loja->endereco->no_logradouro or old('no_logradouro')}}" >
      </div>

   </div>
   <div class="item form-group">

      <!-- Número da residência-->
      <label class="col-md-1 control-label" for="nu_logradouro">Numero</label>
      <div class="col-md-2">
         <input id="nu_logradouro" 
               name="nu_logradouro" 
               type="text" 
               placeholder="999" 
               class="form-control input-md"
               value="{{$loja->endereco->nu_logradouro or old('nu_logradouro')}}" >
      </div>

      {{-- Complemento --}}
      <label class="col-md-2 control-label" for="de_complemento">Complemento</label>
      <div class="col-md-3">
         <input id="de_complemento" 
               name="de_complemento" 
               type="text" 
               placeholder="Ap., Fundos,..." 
               class="form-control input-md"
               value="{{$loja->endereco->de_complemento or old('de_complemento')}}" >
      </div>
   </div>   

</div>

<!-------------------------------------------------------------------------------------------------------------------------- -->

<br><br>

<div class="x_panel modal-content">
   <div class="x_title">  Comercial </div>
   <div class="clearfix"></div>



   <div class="item form-group">
      {{-- Logradouro, Número, Complemento --}}
      <label class="control-label col-md-1 " for="pais_id">Pais</label>
      <div class="col-md-2 ">
         <select id="pais_id"   
            class="form-control col-md-2" 
            name="pais_id" 
            placeholder="Nome do Pais">

            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($paises as $pais)
                  @if ( $loja->endereco->pais == $pais)
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
                  @else
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
                  @endif
               @endforeach
            @else
               @foreach($paises as $pais)
                  @if ($pais->no_pais == ('Brasil'))
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>          
                  @else 
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>  
                  @endif
               @endforeach
            @endif
         </select>
      </div> 

      <!-- CEP-->
      <label class="col-md-1 control-label" for="nu_cep">CEP</label>
      <div class="col-md-2">
         <input id="cep" 
               name="nu_cep" 
               type="text" 
               placeholder="99.999-999" 
               class="form-control input-md cep" 
               value="{{$loja->endereco->nu_cep or old('nu_cep')}}" >

      </div>

      <!-- UF-->
      <label class="col-md-1 control-label" for="sg_uf">UF</label>
      <div class="col-md-1">
         <input id="uf" 
               name="sg_uf" 
               type="text"  
               class="form-control input-md uf"
               value="{{$loja->endereco->sg_uf or old('sg_uf')}}" >
      </div>


      <!-- Município-->
      <label class="col-md-1 control-label" for="pa-municipio">Município</label>
      <div class="col-md-3">
         <input id="cidade" 
               name="no_municipio" 
               type="text" 
               class="form-control input-md" 
               value="{{$loja->endereco->no_municipio or old('no_municipio')}}" >
      </div>
   </div>
   <div class="item form-group">
      {{-- Bairro --}}
      <label class="col-md-1 control-label" for="no_bairro">Bairro</label>
      <div class="col-md-3">
         <input id="bairro" 
               name="no_bairro" 
               type="text" 
               placeholder="Centro" 
               class="form-control input-md"
               value="{{$loja->endereco->no_bairro or old('no_bairro')}}" >
      </div>


      <!-- Logradouro ...Av...Rua....etc-->
      <label class="col-md-1 control-label" for="no_logradouro">Logradouro</label>
      <div class="col-md-7">
         <input id="rua" 
               name="no_logradouro" 
               type="text" 
               placeholder="Av, Rua, Travessa..." 
               class="form-control input-md"
               value="{{$loja->endereco->no_logradouro or old('no_logradouro')}}" >
      </div>

   </div>
   <div class="item form-group">

      <!-- Número da residência-->
      <label class="col-md-1 control-label" for="nu_logradouro">Numero</label>
      <div class="col-md-2">
         <input id="nu_logradouro" 
               name="nu_logradouro" 
               type="text" 
               placeholder="999" 
               class="form-control input-md"
               value="{{$loja->endereco->nu_logradouro or old('nu_logradouro')}}" >
      </div>

      {{-- Complemento --}}
      <label class="col-md-2 control-label" for="de_complemento">Complemento</label>
      <div class="col-md-3">
         <input id="de_complemento" 
               name="de_complemento" 
               type="text" 
               placeholder="Ap., Fundos,..." 
               class="form-control input-md"
               value="{{$loja->endereco->de_complemento or old('de_complemento')}}" >
      </div>
   </div>   
</div>

