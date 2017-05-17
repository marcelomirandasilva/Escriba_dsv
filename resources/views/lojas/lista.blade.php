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
            <div class="x_panel">
                <div class="x_title">
                    <h2> Listagem de Lojas </h2>
                    <a href="{{ url('lojas/create') }}" class="btn btn-primary  botao_novo pull-right "  >

                        <span class="glyphicon glyphicon-plus">  </span>

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
                                    <td>{{ $loja->co_titulo             }}</td>
                                    <td>{{ $loja->no_loja               }}</td>
                                    <td>{{ $loja->nu_loja               }}</td>
                                    <td>{{ $loja->dt_fundacao           }}</td>
                                    <td>{{ $loja->potencia->no_potencia  }}</td>
                                    <td>

                                        <a href="/lojas/{{$loja->id}}/show" class="icone_olho action">
                                            <span class="glyphicon glyphicon-eye-open"></span> 
                                        </a>
 
                                        <a href="/lojas/{{$loja->id}}/edit" class="edit action">
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </a>
 
                                        <a href="/lojas/{{$loja->id}}/destroy" class="destroy action">
                                            <span class="glyphicon glyphicon-trash"></span> 
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
            Desenvolvido por Marcelo Miranda - 2017</a>
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
   

    <script>
        
        $(function(){

            $("#tabela-lojas").DataTable({
                'language' : {
                    'url' : '{{ asset('js/portugues.json') }}'
                }
                
            });

        });

    </script>

@endpush