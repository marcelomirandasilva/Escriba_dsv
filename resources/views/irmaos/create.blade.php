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
    <div class=""> </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="x_panel" style="background-color:  #EDEDED ">
                <div class="x_title">
                    <h2>Cadastro de Irmãos</h2>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <form id="form_loja" method="post" action="" class="form-horizontal form-label-left" >

<!-- NOME, CIM  ------------------------------------------------------------------------------------------>
                  <div class="x_panel">
                    <label class="control-label col-md-1" for="no_irmao">Nome*</label>
                    <div class="col-md-6 ">
                        <input  id="no_irmao"   
                                class="form-control col-md-6" 
                                name="no_irmao" 
                                placeholder="Nome completo do Irmão" 
                                required="required" 
                                type="text">
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-1" for="co_cim">CIM*</label>
                        <div  class="col-md-2" >
                            <input  id="co_cim"   
                                    class="form-control col-md-1 cim" 
                                    name="co_cim" 
                                    placeholder="1234567" 
                                    required="required" 
                                    type="text">
                        </div>
                    </div>

<!-- NASCIMENTO, ESTADO CIVIL, CPF, ESCOLARIDADE, PROFISSÃO -------------------------------------------------------->

                    <div class="item form-group">
                      <label class="control-label col-md-1 " for="dt_nascimento">Nascim.*</label>
                      <div class="col-md-2 ">
                          <input id="dt_nascimento"   
                                  class="form-control col-md-2 datas_input" 
                                  name="dt_nascimento" 
                                  placeholder="Data de Nascimento" 
                                  required="required" 
                                  type="date">
                      </div>

                      <label class="control-label col-md-2 " for="ic_estado_civil">Estado Civil*</label>
                      <div class="col-md-2 ">
                          <select   name="ic_estado_civil" 
                                    id="ic_estado_civil" 
                                    class="form-control col-md-2" 
                                    required="required"  >
                            <option value=""  selected style="color: #ccc;"> --- </option>
                            @foreach($estado_civil as $ic_estado_civil)
                                <option value="{{$ic_estado_civil}}"> {{$ic_estado_civil}} </option>    
                            @endforeach
                          </select>
                      </div>

                      <label class="control-label col-md-1" for="nu_cpf"> CPF* </label>
                      <div class="col-md-2">
                          <input id="nu_cpf"   
                                  class="form-control col-md-2 cpf" 
                                  name="nu_cpf" 
                                  placeholder="999.999.999-99" 
                                  required="required" 
                                  type="text">
                      </div>
                    </div>


                    <div class="item form-group">
                      <label class="control-label col-md-1 " for="ic_escolaridade"> Instrução* </label>
                      <div class="col-md-4">
                          <select   name="ic_escolaridade" 
                                    id="ic_escolaridade" 
                                    class="form-control col-md-4" 
                                    required="required" >
                            <option value=""  selected style="color: #ccc;"> --- </option>
                            @foreach($escolaridade as $ic_escolaridade)
                                <option value="{{$ic_escolaridade}}"> {{$ic_escolaridade}} </option>    
                            @endforeach          
                          </select>
                        </div>
                      
                        <label class="control-label col-md-2 " for="de_profissao">Profissão</label>
                        <div class="col-md-3 ">
                            <input id="de_profissao"   
                                    class="form-control col-md-3 " 
                                    name="de_profissao" 
                                    placeholder="Profissão do Irmão" 
                                    required="required" 
                                    type="text">
                        </div>
                    </div>
                  </div>
<!------------------------------------------------------------------------------------------------------------>


            <div class="col-md-12 ">
              <div class="x_panel ">
                <div class="x_title"> Iniciação </div>
                
              </div>
            </div>

            <div class="col-md-12 ">
              <div class="x_panel ">
                <div class="x_title"> Elevação </div>
                
              </div>
            </div>

            <div class="col-md-12 ">
              <div class="x_panel ">
                <div class="x_title"> Exaltação </div>
                
              </div>
            </div>
            <div class="col-md-12 ">
              <div class="x_panel ">
                <div class="x_title"> Instalação </div>
                
              </div>
            </div>



                  <div class="x_panel">

                    <div class="item form-group">
                        <label class="control-label col-md-1 " for="ic_grau"> Grau* </label>
                        <div class="col-md-2">
                            <select   name="ic_grau" 
                                      id="ic_grau" 
                                      class="form-control col-md-2" 
                                      required="required" >
                              <option>Grau</option>
                              @foreach($grau as $ic_grau)
                                  <option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
                              @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="x_panel" class="col-md-1">
                      <div class="x_title"> Iniciação </div>


                    </div>


                  </div>





            


                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3" for="fk_loja_iniciacao">
                          Loja Iniciação <span class="required">*</span>
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-3">
                          <input id="fk_loja_iniciacao"   
                                  class="form-control col-md-3 col-xs-3" 
                                  name="fk_loja_iniciacao" 
                                  placeholder="Loja em que o Irmão foi Iniciado" 
                                  required="required" 
                                  type="text"
                          >


                       <label class="control-label col-md-3 col-sm-3 col-xs-3" for="fk_loja_iniciacao">
                          Loja Iniciação <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-3">
                          <input id="fk_loja_iniciacao"   
                                  class="form-control col-md-7 col-xs-3" 
                                  name="fk_loja_iniciacao" 
                                  placeholder="Loja em que o Irmão foi Iniciado" 
                                  required="required" 
                                  type="text"
                          >
                      </div>

                      </div>
                  </div>



                    <input type="text" name="fk_loja_iniciacao" placeholder="Loja em que o Irmão foi Iniciado">

                    <input type="text" name="dt_iniciacao" placeholder="Data da Iniciação">

                    <input type="text" name="fk_loja_elevacao" placeholder="Loja em que o Irmão foi Elevado"> 
                    <input type="text" name="dt_elevacao" placeholder="Data da Elevação">
                    
                    <input type="text" name="fk_loja_exaltacao" placeholder="Loja em que o Irmão foi Exaltado">
                    <input type="text" name="dt_exaltacao" placeholder="Data da Exaltação ">
                    
                    <input type="text" name="fk_loja_instalacao" placeholder="Loja em que o Irmão foi Instalado">
                    <input type="text" name="dt_instalacao" placeholder="Data da Instalação">
                    

                    <input type="text" name="im_iirmao" placeholder="Foto do Irmão">

                    
                    <select name="ic_situacao">
                        <option>Situação</option>
                        @foreach($situacao as $ic_situacao)
                            <option value="{{$ic_situacao}}"> {{$ic_situacao}} </option>    
                        @endforeach
                    </select>



                    <input type="text" name="de_profissao" placeholder="Profissão do Irmão">
                    
                    <select name="ic_aposentado">
                        <option>Aposentado</option>
                        @foreach($aposentado as $ic_aposentado)
                            <option value="{{$ic_aposentado}}"> {{$ic_aposentado}} </option>    
                        @endforeach
                    </select>



                 </form>    
            </div>

        <div class="ln_solid"></div>
        <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <a href="{{ URL::previous()  }}" class="btn btn-danger">  Cancela        </a>
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


@push('scripts')

        {{-- Script para máscara numérica. Ex.: CPF, RG --}}
    <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>


    <script type="text/javascript">

    {{-- Máscarasa dos campos CPF e RG --}}
        $(document).ready(function(){
        $(".cim").inputmask("9.999.999");
        $(".cpf").inputmask("999.999.999-99");
        $(".rg").inputmask("99.999.999-9");
        $(".cep").inputmask("99-999.999");
        $(".data").inputmask("99/99/9999");
        $(".celular").inputmask("(99)99999-9999");
        $(".telefone").inputmask("(99)9999-9999");
        });

    </script>

@endpush