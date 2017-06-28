<div class="x_panel modal-content" >
   <div class="clearfix"></div>

   <div class="item form-group">
    

      <label class="control-label col-md-2 " for="ic_condecoracao">Condecoração</label>
      <div class="col-md-4 ">
         <select id="ic_condecoracao"   
            class="form-control col-md-4 " 
            name="ic_condecoracao" 
            type="text"
            data-live-search="true"
            style="width:90%;"/>

            @foreach($condecoracoes as $condecoracao)
                  <option value="{{$condecoracao}}"> {{$condecoracao}} </option>  
            @endforeach
         </select>
      </div>


      <label class="control-label col-md-1 alinha_esquerda" for="nu_ato">Ato nº </label>
      <div class="col-md-1 ">
         <input id="nu_ato"   
            class="form-control col-md-2 datas_input" 
            name="nu_ato" 
            placeholder="999.999" 
            data-inputmask="'mask' : '999.999', 'numericInput': 'true' " type="text" 
         >
      </div>

      <label class="control-label col-md-1 alinha_esquerda" for="dt_condecoracao">Data </label>
      <div class="col-md-2 ">
         <input id="dt_condecoracao"   
            class="form-control col-md-2 datas_input" 
            name="dt_condecoracao" 
            type="date"
         >
      </div>


         <div class="col-md-1 ">
            <button type="button" onclick="add_cond()"
               name="cad_condecoracao"
               id="cad_condecoracao"
               class="btn btn-default btn-circulo   glyphicon glyphicon-plus" 
               title="Inclui essa condecoração">  
            </button>
         </div>
   </div>
   
   <div class="x_content ">
      <div class="panel-body">
         <table class="table table-bordered table-striped " id="tabela_condecoracoes">
              <thead>
                <tr>
                  <th> Condecoração    </th>
                  <th> Ato             </th>
                  <th> Data            </th>
                  <th> Ações           </th>
                </tr>
              </thead>
              <tbody>
               
              </tbody>
         </table>
      </div>
   </div>      

</div>

@push('scripts')
  <script type="text/javascript">

      function add_cond() {
      
         var newRow = $("<tr>");
         var cols = "";

         cols += '<td>';
         
         cols +=  document.getElementById('ic_condecoracao').value;
         cols += '<td>';

         
         cols +=  document.getElementById('nu_ato').value;
         cols += '<td>';

         
         cols +=  document.getElementById('dt_condecoracao').value;
         cols += '<td>';

         
         cols += '<button onclick="RemoveTableRow(this)" class="btn btn-warning btn-xs action botao_lista_dados pull-right btn-danger glyphicon glyphicon-trash excluir excluir_tel" type="button"></button>';

         cols += '<button onclick="RemoveTableRow(this)" class="btn btn-warning btn-xs action botao_lista_dados pull-right btn-alert glyphicon glyphicon-pencil " type="button"></button>';

         cols += '</td>';



               


         newRow.append(cols);
         $("#tabela_condecoracoes").append(newRow);

         return false;
      };

   </script>
@endpush