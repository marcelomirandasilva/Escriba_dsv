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


<form>
    <div class="form-group">
        <label for="no_irmao">Nome</label>
        <input type="text" class="form-control" id="no_irmao" placeholder="Nome completo">
    </div>

  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>



  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<br><br><br>

<div class="container-fluid" >
   
    <div class="row">
        <div class="col-md-12">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">Default 1</a></li>
                            <li><a href="#tab2default" data-toggle="tab">Default 2</a></li>
                            <li><a href="#tab3default" data-toggle="tab">Default 3</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#tab4default" data-toggle="tab">Default 4</a></li>
                                    <li><a href="#tab5default" data-toggle="tab">Default 5</a></li>
                                </ul>
                            </li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">Default 1aaaa</div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
                    </div>
                </div>
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
