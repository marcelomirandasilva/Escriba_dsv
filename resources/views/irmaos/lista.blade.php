@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->

@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">







        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Listagem de Irmãos </h2>
                    <a class="pull-right" href="{{ url('irmaos/novo') }}"> Novo Irmão </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="panel-body">
                        <table class="table">
                            <th>Nome</th>
                            <th>CIM</th>
                            <th>CPF</th>
                            <th>Ações</th>
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

                                </td>
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
