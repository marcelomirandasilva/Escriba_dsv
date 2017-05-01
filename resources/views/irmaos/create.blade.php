@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

  <!-- page content -->

  <!-- page content -->

  
  <div class="right_col" role="main">
    <div class="row">
      <div class="col-md-12">
        <div class="x_panel"  ">
          <div class="x_title">
            <h2>Cadastro de Irmãos</h2>
            <div class="clearfix"></div>
          </div>
          <!-- conteudo aqui-->



          <div class="col-md-12">
            <div class="x_panel">
              
              <div class="x_content">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">

                <form id="form_loja" method="post" action="" class="form-horizontal form-label-left" >

                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Principal</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Endereços</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Dependentes</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Cerimonias</a>
                      </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                      <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                             
                       @include('irmaos/create_principal')
                        
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                        @include('irmaos/create_endereco')
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                        @include('irmaos/create_dependentes')
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                        @include('irmaos/create_cerimonias')
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!-- FIM do conteudo -->
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
          <a href="{{ URL::previous()  }}" class="btn btn-danger">  Cancela        </a>
          <button id="send" type="submit" class="btn btn-success">  Confirma    </button>
        </div>
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


@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>


  <script type="text/javascript">

    {{-- Máscarasa dos campos CPF e RG --}}
    $(document).ready(function(){
    $(".cim").inputmask("9.999.999");
    $(".num_logradouro").inputmask("999.999");
    $(".cpf").inputmask("999.999.999-99");
    $(".rg").inputmask("99.999.999-9");
    $(".cep").inputmask("99-999.999");
    $(".data").inputmask("99/99/9999");
    $(".celular").inputmask("(99)99999-9999");
    $(".telefone").inputmask("(99)9999-9999");
    });

    </script>

@endpush