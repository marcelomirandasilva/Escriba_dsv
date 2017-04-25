@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->

@endpush

@section('conteudo')

    <!-- page content -->
    <div class="right_col" role="main">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> Listagem de Lojas </h2>
                    
                    <a href="{{ url('lojas/create') }}" class="btn btn-primary  pull-right">
                        <span class="glyphicon glyphicon-plus"> Nova Loja </span>
                    </a>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    <div class="panel-body">   
                        <table class="table">
                            <th>Título</th>
                            <th>Loja</th>
                            <th>Num</th>
                            <th>Fundação</th>
                            <th>Potencia</th>
                            <th>Ações</th>
                            <tbody>
                                @foreach($lojas as $loja )
                                <tr>
                                    <td>{{ $loja->co_titulo    }}</td>
                                    <td>{{ $loja->no_loja      }}</td>
                                    <td>{{ $loja->nu_loja      }}</td>
                                    <td>{{ $loja->dt_fundacao  }}</td>
                                    <td>{{ $loja->co_potencia  }}</td>
                                    <td>
                                        <a href="/lojas/{{$loja->id}}/edit" class="edit action">
                                            <span class="glyphicon glyphicon-pencil"></span> 
                                        </a>
 
                                        <a href="/lojas/{{$loja->id}}/destroy" class="destroy action">
                                            <span class="glyphicon glyphicon-trash"></span> 
                                        </a>
 
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
