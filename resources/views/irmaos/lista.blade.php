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
                    <h2> Listagem de Irmãos </h2>
                    <a href="{{ url('irmaos/create') }}" class="btn btn-primary  pull-right">
                        <span class="glyphicon glyphicon-plus"> Novo Irmão </span>
                    </a>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="panel-body">
                        <table class="table" id="tabela-irmaos">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>CIM</th>
                                    <th>CPF</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($irmaos as $irmao )
                                <tr>
                                    <td>{{ $irmao->no_irmao  }}</td>
                                    <td>{{ $irmao->co_cim  }}</td>
                                    <td>{{ $irmao->nu_cpf  }}</td>
                                    <td>
                                        <a href="/irmaos/{{$irmao->id}}/editar" button class="btn btn-sm"> Editar </abutton>
                                        <button class="btn btn-sm"> Excluir </button>
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
    <script src="{{ asset('datatables/datatables.net/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.flash.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.html5.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.print.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-keytable/js/dataTables.keyTable.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('datatables/datatables.net-scroller/js/dataTables.scroller.min.js') }}" type="text/javascript"></script>

    <script>
        
        $(function(){

            $("#tabela-maconica").DataTable({
                'language' : {
                    'url' : '{{ asset('js/portugues.json') }}'
                }
            });

        });

    </script>

@endpush
