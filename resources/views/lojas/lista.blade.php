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
                    <a class="pull-right" href="{{ url('lojas/create') }}"> Nova Loja </a>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                    {{$teste}} - {{$teste2}} - {{$teste3}}

                    {{$teste5 or ''}}

                    @if( $var1 == '123')
                        <p> é igual a {{$var1}} </p>
                    @else
                        <p> é diferente {{$var1}} </p>
                    @endif

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
