@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->

@endpush

@section('conteudo')

    <!-- page content -->
 




<!-- page content -->
<div class="right_col" role="main">
    <div class=""> </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cadastro de Lojas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li>
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">Settings 1</a>
                                </li>
                                <li>
                                    <a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <form id="form_loja" method="post" action="" class="form-horizontal form-label-left" >
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="co_titulo">
                            Título <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="co_titulo"   
                                    class="form-control col-md-7 col-xs-12" 
                                    name="co_titulo" 
                                    placeholder="Título da Loja" 
                                    required="required" 
                                    type="text"
                            >
                        </div>
                    </div>
    
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_loja">
                            Nome 
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="no_loja" 
                                id="no_loja" 
                                name="no_loja" 
                                placeholder="Nome da Loja" 
                                required="required" 
                                class="form-control col-md-7 col-xs-12"
                                type="text"
                            >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nu_loja">
                            Número 
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="nu_loja" 
                                id="nu_loja" 
                                name="nu_loja" 
                                placeholder="Número da Loja" 
                                required="required" 
                                class="form-control col-md-7 col-xs-12"
                                type="number"
                            >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dt_fundacao">Fundação <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="dt_fundacao" 
                            id="dt_fundacao" 
                            name="dt_fundacao" 
                            placeholder="Data da fundacao da Loja" 
                            required="required" 
                            data-inputmask="'mask': '99/99/9999'"
                            class="form-control col-md-7 col-xs-12"
                            type="date"
                        >
                    </div>
                </form>    
            </div>
        <div class="ln_solid"></div>
        <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button           type="submit" class="btn btn-danger">  Cancela     </button>
            <button id="send" type="submit" class="btn btn-success">  Confirma    </button>
        </div>
    </div>
</div>

        <!-- /page content -->





















 
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
