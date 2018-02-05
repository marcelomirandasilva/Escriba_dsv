{{-- 'Honorário', 'Remido', 'Emérito', 'Benemérito', 'Grande Benemérito', 'Maçom Notável', 'Estrela da Distinção Maçônica', 'Cruz da Perfeição Maçônica', 'Comenda Dom Pedro I' --}}

<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <!------------------------------------>


   <div class="item form-group">
      <input type="hidden" name="condecoracoes[0][ic_condecoracao]" value="Remido">
      <label class="control-label col-md-3 " for="dt_remido">Remido</label>
      <div class="col-md-2 ">
         <input id="dt_condecoracao0" name="condecoracoes[0][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            
            type="date" min="1500-01-01" max="2050-01-01"
               value="{{$dt_condecoracao0 or old('condecoracoes.0.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_remido">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato0" name="condecoracoes[0][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato0 or old('condecoracoes.0.nu_ato')}}" >
      </div>
   </div>
 

   <!------------------------------------>

  

   <div class="item form-group">
      <input type="hidden" name="condecoracoes[1][ic_condecoracao]" value="Emérito">
      <label class="control-label col-md-3 " for="dt_emerito">Emérito</label>
      <div class="col-md-2 ">
         <input id="dt_condecoracao1" name="condecoracoes[1][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
               value="{{$dt_condecoracao1 or old('condecoracoes.1.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_emerito">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato1" name="condecoracoes[1][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato1 or old('condecoracoes.1.nu_ato')}}" >      </div>
   </div>
 

   <!------------------------------------>
   <div class="item form-group">
      <input type="hidden" name="condecoracoes[2][ic_condecoracao]" value="Benemérito">
      <label class="control-label col-md-3 " for="dt_benemerito">Benemérito</label>
      <div class="col-md-2 ">
         <input   id="dt_condecoracao2" name="condecoracoes[2][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
                  value="{{$dt_condecoracao2 or old('condecoracoes.2.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_benemerito">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato2" name="condecoracoes[2][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato2 or old('condecoracoes.2.nu_ato')}}" >      
      </div>
   </div>
 

   <!------------------------------------>
   <div class="item form-group">
   <input type="hidden" name="condecoracoes[3][ic_condecoracao]" value="Grande Benemérito">
      <label class="control-label col-md-3 " for="dt_g_benemerito">Grande Benemérito</label>
      <div class="col-md-2 ">
         <input   id="dt_condecoracao3" name="condecoracoes[3][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
                  value="{{$dt_condecoracao3 or old('condecoracoes.3.dt_condecoracao')}}" >
      </div>

      <label class="control-label col-md-2 " for="ato_g_Benemerito">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato3" name="condecoracoes[3][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato3 or old('condecoracoes.3.nu_ato')}}" >
      </div>
   </div>
 

   <!------------------------------------>
   <div class="item form-group">
      <input type="hidden" name="condecoracoes[4][ic_condecoracao]" value="Estrela da Distinção Maçônica">
      <label class="control-label col-md-3 " for="dt_estrela_dis_mac">Estrela da Distinção Maçônica</label>
      <div class="col-md-2 ">
         <input   id="dt_condecoracao4" name="condecoracoes[4][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
                  value="{{$dt_condecoracao4 or old('condecoracoes.4.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_estrela_dis_mac">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato4" name="condecoracoes[4][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato4 or old('condecoracoes.4.nu_ato')}}" >
      </div>
   </div>
 

   <!------------------------------------>
   <div class="item form-group">
      <input type="hidden" name="condecoracoes[5][ic_condecoracao]" value="Cruz da Perfeição Macônica">
      <label class="control-label col-md-3 " for="dt_cruz_perf">Cruz da Perfeição Macônica</label>
      <div class="col-md-2 ">
         <input   id="dt_condecoracao5" name="condecoracoes[5][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
                  value="{{$dt_condecoracao5 or old('condecoracoes.5.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_cruz_perf">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato5" name="condecoracoes[5][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato5 or old('condecoracoes.5.nu_ato')}}" >
      </div>
   </div>
 

   <!------------------------------------>
   <div class="item form-group">
      <input type="hidden" name="condecoracoes[6][ic_condecoracao]" value="Comenda Dom Pedro I">
      <label class="control-label col-md-3 " for="dt_com_dom_pedro">Comenda Dom Pedro I</label>
      <div class="col-md-2 ">
         <input   id="dt_condecoracao6" name="condecoracoes[6][dt_condecoracao]" class="form-control col-md-2 datas_input" 
            type="date" min="1500-01-01" max="2050-01-01"
                  value="{{$dt_condecoracao6 or old('condecoracoes.6.dt_condecoracao')}}" >
      </div>


      <label class="control-label col-md-2 " for="ato_com_dom_pedro">Nº do Ato</label>
      <div class="col-md-2">
         <input id="nu_ato6" name="condecoracoes[6][nu_ato]" class="form-control col-md-2"  type="text" 
               value="{{$nu_ato6 or old('condecoracoes.6.nu_ato')}}" >
      </div>
   </div>
 

   <!------------------------------------>




</div>




