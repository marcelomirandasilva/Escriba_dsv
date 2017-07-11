@extends('layouts.blank')

@push('stylesheets')
  

  
@endpush

@section('conteudo')

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel modal-content animated fadeInUp">
        <div class="x_title">
          <h2> Listagem de Lojas </h2>

           <a href="{{ url('lojas/create') }}" 
              class="btn-circulo btn btn-primary btn-md   pull-right " 
              data-toggle="tooltip"  
              data-placement="bottom" 
              title="Adiciona uma Loja">
              <span class="fa fa-plus">  </span>
           </a>

         <div class="clearfix"></div>
      </div>
      <div class="x_content">
       <div class="panel-body">   
         <table class="table table-striped" id="tabela-lojas">
           <thead>
             <tr>
               <th>Título</th>
               <th>Loja</th>
               <th>Num</th>
               <th>Fundação</th>
               <th>Potencia</th>
               <th>Ações</th>        
            </tr>
         </thead>

         <tbody>
          @foreach($lojas as $loja )
          <tr>
            <td>{{ $loja->co_titulo                                             }}</td>
            <td>{{ $loja->no_loja                                               }}</td>
            <td>{{ $loja->nu_loja                                               }}</td>
            <!---testa se a data de fundação é null -->

            @if( $loja->dt_fundacao <> '0000-00-00')
              <td>{{ \Carbon\Carbon::parse( $loja->dt_fundacao)->format('d/m/Y')  }}</td>
            @else
              <td> -------------- </td>
            @endif

            <td>{{ $loja->potencia->no_potencia                                 }}</td>
            <td>

   
            <a href="{{ url("lojas/$loja->id/edit") }}"
                 class="btn btn-warning btn-xs action botao_lista pull-right " 
                 data-toggle="tooltip" 
                 data-placement="bottom" 
                 title="Edita essa Loja">  
                 <i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
             </a>


             <a href="{{ url("lojas/$loja->id") }}" 
                 class="btn btn-primary btn-xs  action botao_lista pull-right "  
                 data-toggle="tooltip"  
                 data-placement="bottom" 
                 title="Visualiza essa Loja"> 
                 <i class="glyphicon glyphicon-eye-open icone_botao_lista"></i>
             </a>


          </td>

       </tr>
       @endforeach
    </tbody>
  </table>
  </div>

  </div>
  </div>
  </div>




  </div>
  <!-- /page content -->

  <!-- footer content -->
  <footer>
    <div class="pull-right">
      V0.1_2017</a>
    </div>
    <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
@endsection


@push("scripts")

  <!-- Datatables -->
  <script src="{{ asset('datatables/datatables.net/js/jquery.dataTables.min.js') }}"                  type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"            type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}"         type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"       type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.flash.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.html5.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.print.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"       type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}"   type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"     type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-scroller/js/dataTables.scroller.min.js') }}"       type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"                   type="text/javascript"></script>
  <script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"                 type="text/javascript"></script>


  <script>
    $(document).ready(function(){
      
        $.fn.dataTable.moment( 'DD/MM/YYYY' );

        $("#tabela-lojas").DataTable({
              language : {
                            'url' : '{{ asset('js/portugues.json') }}',
                            "decimal": ",",
                            "thousands": "."
                          }, 
              stateSave: true,
              stateDuration: -1,

        "columnDefs": 
        [
          { className: "text-center", "targets": [5] },
          { className: "text-right",  "targets": [2] }
        ]

        });
    });
  </script>
@endpush




