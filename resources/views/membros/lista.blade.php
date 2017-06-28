@extends('layouts.blank')

@push('stylesheets')
  <link href="{{ asset('datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

  <!-- page content -->
  <div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel modal-content">
        <div class="x_title">
          <h2> Listagem de Irmãos </h2>
          <a href="{{ url('membros/create') }}" 
            class="btn-circulo btn btn-primary btn-md   pull-right " 
            data-toggle="tooltip"  
            data-placement="bottom" 
            title="Adiciona um Membro">
            <span class="fa fa-plus">  </span>
          </a>
          <div class="clearfix"></div>
        </div>
        <div class="x_content ">
          <div class="panel-body">
            <table class="table table-striped" id="tabela-membros">
              <thead>
                <tr>
                  <th> Nome       </th>
                  <th> CIM        </th>
                  <th> Nascimento </th>
                  <th> Situação   </th>
                  <th> Ações      </th>
                </tr>
              </thead>
              <tbody>
                @foreach($membros as $membro )
                  <tr>
                    <td> {{ $membro->no_membro  }}                                                   </td>
                    <td  > {{ number_format($membro->co_cim,0,",",".")  }}      </td>

                    @if( $membro->dt_nascimento <> '0000-00-00')
                      <td>{{ \Carbon\Carbon::parse( $membro->dt_nascimento)->format('d/m/Y')  }}     </td>
                    @else
                      <td> -------------- </td>
                    @endif
                    <td> {{ $membro->ic_situacao  }}                                                 </td>
                    <td>

                      <a href="{{ url("membros/$membro->id") }}" 
                        class="btn btn-primary btn-xs  action botao_lista  "  
                        data-toggle="tooltip"  
                        data-placement="bottom" 
                        title="Visualiza esse Irmão"> 
                        <i class="glyphicon glyphicon-eye-open icone_botao_lista"></i>
                      </a>

                      <a href="{{ url("membros/$membro->id/edit") }}"
                        class="btn btn-warning btn-xs action botao_lista  " 
                        data-toggle="tooltip" 
                        data-placement="bottom" 
                        title="Edita esse Irmão">  
                        <i class="glyphicon glyphicon-pencil icone_botao_lista"></i>
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
   <div class="pull-right"> V0.1_2017</a> </div>
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
      $("#tabela-membros").DataTable({

        language : {
          'url' : '{{ asset('js/portugues.json') }}',
          "decimal": ",",
          "thousands": "."
        }, 
        stateSave: true,
        stateDuration: -1,

        "columnDefs": 
        [
          { className: "text-center", "targets": [2,4] },
          { className: "text-right",  "targets": [1] }
        ]

      });
    });


  </script>

@endpush



