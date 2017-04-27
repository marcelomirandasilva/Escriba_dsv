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
                    <h2>Cadastro de Irmãos</h2>






          <form id="Cadastro_pessoa" class="form-horizontal">

            
{{------------------------------------ Participante --------------------------------------------}}
               
         <div class="x_panel">

            <div class="form-group" id="participante">


            
{{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="pa-nome">Nome</label>
              <div class="col-md-8">
                <input id="pa-nome" name="pa-nome" type="text" placeholder="Informe o nome" class="form-control input-md nome" required="">
              </div>
            </div>


            <div class="form-group" id="participante">


{{-- CPF e Email --}}

   {{-- CIM --}}
              <label class="col-md-1 control-label" for="pa-email">CIM</label>  
              <div class="col-md-2">
                <input id="pa-email" name="pa-email" type="text" placeholder="9.999.999" class="form-control input-md email">
              </div>
              

              {{-- Email --}}
              <label class="col-md-1 control-label" for="pa-email">Email</label>  
              <div class="col-md-5">
                <input id="pa-email" name="pa-email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
              </div>

          </div>



{{-- Data de Nascimento --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="pa-nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="pa-nascimento" name="pa-nascimento" type="date" placeholder="01/01/2000" class="form-control input-md data" required="">

              </div>


            {{-- CIM e CPF --}}

             

              {{-- CPF --}}            
              <label class="col-md-1 control-label" for="pa-cpf">CPF</label>  
              <div class="col-md-2">
                <input id="pa-cpf" name="pa-cpf" type="text" placeholder="999.999.999-99" class="form-control input-md cpf" required="">
              </div>

          </div> {{-- FIM CIM E CPF --}}

{{-- RG, Data de Emissão do RG, Orgão Emissor do RG --}}


            <div class="form-group">

              <!-- RG-->            
              <label class="col-md-1 control-label" for="pa-rg">RG</label>
              <div class="col-md-2">
                <input id="pa-rg" name="pa-rg" type="text" placeholder="99.999.999-9" class="form-control input-md rg" required="">
              </div>

              <!-- Data de Emissão do RG-->
              <label class="col-md-1 control-label" for="pa-emissao">Emissão</label>  
              <div class="col-md-2">
                <input id="pa-emissao" name="pa-emissao" type="text" placeholder="Data de Emissão" class="form-control input-md data" required="">
              </div>

              <!-- Orgão Emissor do RG-->
              <label class="col-md-1 control-label" for="pa-orgao_emissor">Orgão</label>  
              <div class="col-md-2">
                <input id="pa-orgao_emissor" name="pa-orgao_emissor" type="text" placeholder="Orgão Emissor" class="form-control input-md" required="">
              </div>
            
            </div> {{-- FIM RG, Data de Emissão do RG, Orgão Emissor do RG --}}




{{-- Logradouro, Número --}}


            <div class="form-group">

              <!-- Logradouro ...Av...Rua....etc-->
              <label class="col-md-1 control-label" for="pa-logradouro">Logradouro</label>
              <div class="col-md-5">
                <input id="pa-logradouro" name="pa-logradouro" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md">
              </div>
              <!-- Número da residência-->
              <label class="col-md-1 control-label" for="pa-numero">Numero</label>
              <div class="col-md-2">
                <input id="pa-numero" name="pa-numero" type="text" placeholder="999" class="form-control input-md">
              </div>

            </div> {{-- FIM Logradouro, Número --}}            


{{-- Bairro e Complemento --}}

            <div class="form-group">
              {{-- Bairro --}}
              <label class="col-md-1 control-label" for="pa-bairro">Bairro</label>
              <div class="col-md-3">
                <input id="pa-bairro" name="pa-bairro" type="text" placeholder="Centro" class="form-control input-md">
              </div>

              {{-- Complemento --}}
              <label class="col-md-2 control-label" for="pa-complemento">Complemento</label>
              <div class="col-md-3">
                <input id="pa-complemento" name="pa-complemento" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
              </div>

            </div>


{{-- Munícipio e CEP --}}

            <div class="form-group">
            
              <!-- Município-->
              <label class="col-md-1 control-label" for="pa-municipio">Município</label>
              <div class="col-md-5">
                <input id="pa-municipio" name="pa-municipio" type="text" placeholder="Mesquita" class="form-control input-md" required="">
              </div>

              <!-- CEP-->
              <label class="col-md-1 control-label" for="pa-cep">CEP</label>
              <div class="col-md-2">
                <input id="pa-cep" name="cep" type="text" placeholder="99999-999" class="form-control input-md cep" required="">
              </div>

            </div> {{-- FIM Munícipio e CEP --}}


{{-- Celular, Telefone 1 e Telefone 2 --}}

            <div class="form-group">

              {{-- Celular --}}
              <label class="col-md-1 control-label" for="pa-celular">Celular</label>
              <div class="col-md-2">
                <input id="pa-celular" name="pa-celular" type="text" placeholder="(99) 9 9999-9999" class="form-control input-md celular">
              </div>

              {{-- Telefone 1 --}}
              <label class="col-md-1 control-label" for="pa-telefone1">Tel.1</label>
              <div class="col-md-2">
                <input id="pa-telefone1" name="pa-telefone1" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

              {{-- Telefone 2 --}}
              <label class="col-md-1 control-label" for="pa-telefone2">Tel.2</label>
              <div class="col-md-2">
                <input id="pa-telefone2" name="pa-telefone2" type="text" placeholder="(99) 9999-9999" class="form-control input-md telefone">
              </div>

            </div> {{-- FIM Celular, Telefone 1 e Telefone 2 --}}


          </div> {{-- fim Participante --}}



{{------------------------------------ Dependentes ------------------------------------}}
         <div class="x_panel">
            <div class="x_title"> Dependentes </div>

            <div class="form-group" id="dependentes">

            {{-- Nome --}}

            <div class="form-group">
              <label class="col-md-1 control-label" for="de-nome">Nome</label>
              <div class="col-md-8">
                <input id="de-nome" name="de-nome" type="text" placeholder="Informe o ome" class="form-control input-md" required="">
              </div>
            </div>


{{-- Data de Nascimento, Sexo, Deficiente --}}


            <div class="form-group">

            {{-- Data de Nascimento --}}

              <label class="col-md-1 control-label" for="de-nascimento">Nascimento</label>  
              <div class="col-md-2">
                <input id="de-nascimento" name="de-nascimento" type="text" placeholder="01/01/2000" class="form-control input-md data" required="">

              </div>

              {{-- Sexo   --}}
              <label class="col-md-1 control-label" for="de-sexo">Sexo</label>
              <div class="col-md-2">
                <select name="de-sexo" type="text" placeholder="Sexo" class="form-control input-md" required="">
                  <option value=""disabled selected style="display: none;">   </option>
                  <option value="m">Masculino</option>
                  <option value="f">Femino</option>
                </select>
              </div>

              {{-- Deficiente --}}
              <label class="col-md-1 control-label" for="de-deficiente">Deficiente</label>
              <div class="col-md-2">
                <select name="de-deficiente" type="text" placeholder="de-deficiente" class="form-control input-md" required="">
                  <option value=""disabled selected style="display: none;">   </option>
                  <option value="s">Sim</option>
                  <option value="n">Não</option>
                </select>
              </div>
            </div>




            </div>
          </div> {{-- fim Dependente --}}



          <!-- Button (Double) -->
          <div class="form-group">
            <label class="col-md-0 control-label" for="button1id"></label>
            <div class="col-md-8">
              <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
              <button id="Cancelar" name="Cancelar" class="btn btn-danger">Cancelar</button>
            </div>
          </div>

    
      


      </form> {{-- FIM cadastro_pessoa --}}








                    <!--------------------------------------------------------------------------------------------------------
                    -- MENU COM FERRAMENTAS NA LATERAL DIREITA DA DIV 

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
                    ------------------------------------------------------------------------------------------------------
                    -->

                <div class="clearfix"></div>
                </div>
                <div class="x_content">

                <form id="form_loja" method="post" action="" class="form-horizontal form-label-left" >

                    <div class="item form-group">
                        <label                              class="control-label col-md-3 col-sm-3 col-xs-12" 
                            for="no_irmao">
                            Nome 
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input  id="no_irmao"   
                                    class="form-control col-md-7 col-xs-12" 
                                    name="no_irmao" 
                                    placeholder="Nome completo do Irmão" 
                                    required="required" 
                                    type="text"
                            >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="co_cim">
                            CIM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="co_cim"   
                                    class="form-control col-md-7 col-xs-12" 
                                    name="co_cim" 
                                    placeholder="Cadastro de Identificação Maçônica" 
                                    required="required" 
                                    type="text"
                            >
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label 
                            class="control-label col-md-3 col-sm-3 col-xs-12" 
                            for="nu_cpf"> CPF 
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="nu_cpf"   
                                    class="form-control col-md-7 col-xs-12 cpf" 
                                    name="nu_cpf" 
                                    placeholder="999.999.999-99" 
                                    required="required" 
                                    type="text"
                            >
                        </div>
                    </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dt_nascimento">
                            Data de Nascimento <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="dt_nascimento"   
                                    class="form-control col-md-7 col-xs-12" 
                                    name="dt_nascimento" 
                                    placeholder="Data de Nascimento" 
                                    required="required" 
                                    type="date"
                            >
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ic_estado_civil">
                            Estado Civil <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ic_estado_civil" id="ic_estado_civil" class="form-control col-md-7 col-xs-12" required="required"  >
                                <option>Estado Civil</option>
                                @foreach($estado_civil as $ic_estado_civil)
                                    <option value="{{$ic_estado_civil}}"> {{$ic_estado_civil}} </option>    
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ic_grau">
                            Grau <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="ic_grau" id="ic_grau" class="form-control col-md-7 col-xs-12" required="required"  >
                                <option>Grau</option>
                                @foreach($grau as $ic_grau)
                                    <option value="{{$ic_grau}}"> {{$ic_grau}} </option>    
                                @endforeach
                            </select>
                        </div>
                    </div>





                    <input type="text" name="dt_iniciacao" placeholder="Data da Iniciação">
                    <input type="text" name="fk_loja_iniciacao" placeholder="Loja em que o Irmão foi Iniciado">
                    <input type="text" name="dt_elevacao" placeholder="Data da Elevação">
                    <input type="text" name="fk_loja_elevacao" placeholder="Loja em que o Irmão foi Elevado">
                    <input type="text" name="dt_exaltacao" placeholder="Data da Exaltação ">
                    <input type="text" name="fk_loja_exaltacao" placeholder="Loja em que o Irmão foi Exaltado">
                    <input type="text" name="dt_instalacao" placeholder="Data da Instalação">
                    <input type="text" name="fk_loja_instalacao" placeholder="Loja em que o Irmão foi Instalado">
                    <input type="text" name="im_iirmao" placeholder="Foto do Irmão">

                    
                    <select name="ic_situacao">
                        <option>Situação</option>
                        @foreach($situacao as $ic_situacao)
                            <option value="{{$ic_situacao}}"> {{$ic_situacao}} </option>    
                        @endforeach
                    </select>


                    
                    <select name="ic_escolaridade">
                        <option>Escolaridade</option>
                        @foreach($escolaridade as $ic_escolaridade)
                            <option value="{{$ic_escolaridade}}"> {{$ic_escolaridade}} </option>    
                        @endforeach
                    </select>


                    <input type="text" name="de_profissao" placeholder="Profissão do Irmão">
                    
                    <select name="ic_aposentado">
                        <option>Aposentado</option>
                        @foreach($aposentado as $ic_aposentado)
                            <option value="{{$ic_aposentado}}"> {{$ic_aposentado}} </option>    
                        @endforeach
                    </select>



                <!---------------------------------------------------------------------------------------->

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
                            class="form-control input-md data"
                        >
                    </div>
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
        $(".cpf").inputmask("999.999.999-99");
        $(".rg").inputmask("99.999.999-9");
        $(".cep").inputmask("99-999.999");
        $(".data").inputmask("99/99/9999");
        $(".celular").inputmask("(99)99999-9999");
        $(".telefone").inputmask("(99)9999-9999");
        });

    </script>

@endpush