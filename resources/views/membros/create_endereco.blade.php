
<div class="x_panel modal-content">
   <div class="x_title">  Residencial </div>
   <div class="clearfix"></div>


   <div class="item form-group">

      <label class="control-label col-md-1 " for="endereco[{{ $i }}][pais_id]">Pais</label>
      <div class="col-md-2 ">
         <select id="endereco[{{ $i }}][pais_id]"   
            class="form-control col-md-2" 
            name="endereco[{{ $i }}][pais_id]" 
            placeholder="Nome do Pais" >
            
            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($paises as $pais)
               
                  @if ($membro->endereco->pais->id == $endereco[{{ $i }}][pais_id])
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
                  @else
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
                  @endif

               @endforeach --}}
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
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][nu_cep]">CEP</label>
      <div class="col-md-2">
         <input id="cep" 
               name="endereco[{{ $i }}][nu_cep]" 
               type="text" 
               placeholder="99.999-999" 
               class="form-control input-md cep" 
               value="{{$membro->endereco->endereco[{{ $i }}][nu_cep] or old('endereco.0.nu_cep')}}" >

      </div>

      <!-- UF-->
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][sg_uf]">UF</label>
      <div class="col-md-1">
         <input id="uf" 
               name="endereco[{{ $i }}][sg_uf]" 
               type="text"  
               class="form-control input-md uf"
               value="{{$membro->endereco->endereco[{{ $i }}][sg_uf] or old('endereco.0.sg_uf')}}" >
      </div>


      <!-- Município-->
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][no_municipio]">Município</label>
      <div class="col-md-3">
         <input id="cidade" 
               name="endereco[{{ $i }}][no_municipio]" 
               type="text" 
               class="form-control input-md" 
               value="{{$membro->endereco->endereco[{{ $i }}][no_municipio] or old('endereco.0.no_municipio')}}" >
      </div>
   </div>
   <div class="item form-group">
      {{-- Bairro --}}
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][no_bairro]">Bairro</label>
      <div class="col-md-3">
         <input id="bairro" 
               name="endereco[{{ $i }}][no_bairro]" 
               type="text" 
               placeholder="Centro" 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[{{ $i }}][no_bairro] or old('endereco.0.no_bairro')}}" >
      </div>


      <!-- Logradouro ...Av...Rua....etc-->
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][no_logradouro]">Logradouro</label>
      <div class="col-md-7">
         <input id="rua" 
               name="endereco[{{ $i }}][no_logradouro]" 
               type="text" 
               placeholder="Av, Rua, Travessa..." 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[{{ $i }}][no_logradouro] or old('endereco.0.no_logradouro')}}" >
      </div>

   </div>
   <div class="item form-group">

      <!-- Número da residência-->
      <label class="col-md-1 control-label" for="endereco[{{ $i }}][nu_logradouro]">Numero</label>
      <div class="col-md-2">
         <input id="endereco[{{ $i }}][nu_logradouro]" 
               name="endereco[{{ $i }}][nu_logradouro]" 
               type="text" 
               placeholder="999" 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[{{ $i }}][nu_logradouro] or old('endereco.0.nu_logradouro')}}" >
      </div>

      {{-- Complemento --}}
      <label class="col-md-2 control-label" for="de_complemento">Complemento</label>
      <div class="col-md-3">
         <input id="de_complemento" 
               name="de_complemento" 
               type="text" 
               placeholder="Ap., Fundos,..." 
               class="form-control input-md"
               value="{{$membro->endereco->de_complemento or old('de_complemento')}}" >
      </div>
   </div>   



{{-- ============================================================================== --}}
   <br>


   <div class="x_title">  Comercial </div>
   <div class="clearfix"></div>


   <div class="item form-group">

      <label class="control-label col-md-1 " for="endereco[1][pais_id]">Pais</label>
      <div class="col-md-2 ">
         <select id="endereco[1][pais_id]"   
            class="form-control col-md-2" 
            name="endereco[1][pais_id]" 
            placeholder="Nome do Pais" >
            
            @if (isset($edita)) <!-- variavel para verificar se foi chamado pela edição -->
               @foreach($paises as $pais)
               
                  @if ($membro->endereco->pais->id == $endereco[1][pais_id])
                     <option value="{{$pais->id}}" selected="selected"> {{$pais->no_pais}} </option>
                  @else
                     <option value="{{$pais->id}}"> {{$pais->no_pais}} </option>    
                  @endif

               @endforeach --}}
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
      <label class="col-md-1 control-label" for="endereco[1][nu_cep]">CEP</label>
      <div class="col-md-2">
         <input id="cep" 
               name="endereco[1][nu_cep]" 
               type="text" 
               placeholder="99.999-999" 
               class="form-control input-md cep" 
               value="{{$membro->endereco->endereco[1][nu_cep] or old('endereco.1.nu_cep')}}" >

      </div>

      <!-- UF-->
      <label class="col-md-1 control-label" for="endereco[1][sg_uf]">UF</label>
      <div class="col-md-1">
         <input id="uf" 
               name="endereco[1][sg_uf]" 
               type="text"  
               class="form-control input-md uf"
               value="{{$membro->endereco->endereco[1][sg_uf] or old('endereco.1.sg_uf')}}" >
      </div>


      <!-- Município-->
      <label class="col-md-1 control-label" for="endereco[1][no_municipio]">Município</label>
      <div class="col-md-3">
         <input id="cidade" 
               name="endereco[1][no_municipio]" 
               type="text" 
               class="form-control input-md" 
               value="{{$membro->endereco->endereco[1][no_municipio] or old('endereco.1.no_municipio')}}" >
      </div>
   </div>
   <div class="item form-group">
      {{-- Bairro --}}
      <label class="col-md-1 control-label" for="endereco[1][no_bairro]">Bairro</label>
      <div class="col-md-3">
         <input id="bairro" 
               name="endereco[1][no_bairro]" 
               type="text" 
               placeholder="Centro" 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[1][no_bairro] or old('endereco.1.no_bairro')}}" >
      </div>


      <!-- Logradouro ...Av...Rua....etc-->
      <label class="col-md-1 control-label" for="endereco[1][no_logradouro]">Logradouro</label>
      <div class="col-md-7">
         <input id="rua" 
               name="endereco[1][no_logradouro]" 
               type="text" 
               placeholder="Av, Rua, Travessa..." 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[1][no_logradouro] or old('endereco.1.no_logradouro')}}" >
      </div>

   </div>
   <div class="item form-group">

      <!-- Número da residência-->
      <label class="col-md-1 control-label" for="endereco[1][nu_logradouro]">Numero</label>
      <div class="col-md-2">
         <input id="endereco[1][nu_logradouro]" 
               name="endereco[1][nu_logradouro]" 
               type="text" 
               placeholder="999" 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[1][nu_logradouro] or old('endereco.1.nu_logradouro')}}" >
      </div>

      {{-- Complemento --}}
      <label class="col-md-2 control-label" for="endereco[1][de_complemento]">Complemento</label>
      <div class="col-md-3">
         <input id="endereco[1][de_complemento]" 
               name="endereco[1][de_complemento]" 
               type="text" 
               placeholder="Ap., Fundos,..." 
               class="form-control input-md"
               value="{{$membro->endereco->endereco[1][de_complemento] or old('endereco.1.de_complemento')}}" >
      </div>
   </div>   








</div>

