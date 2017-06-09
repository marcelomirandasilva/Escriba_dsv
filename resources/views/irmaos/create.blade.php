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
      <!---------------------- Mostra os erros de validação ------------------------------>

      @if( count($errors) > 0 )
         <div class="alert alert-danger alert-dismissible" role="alert">
            @foreach($errors->all() as $erro)
               <p> {{ $erro }} </p>
            @endforeach
         </div>
      @endif
      <!------------------------------------------------------------------------------------>

      
      <div class="clearfix"></div>

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
               <div class="x_content ">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    
                     <form id="form_loja" method="post" action="" class="form-horizontal form-label-left" >

                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                           
                           <li role="presentation" class="active">
                              <a href="#tab_content1" role="tab" id="tab_pri" data-toggle="tab">   Principal   </a> 
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content2" role="tab" id="tab_doc" data-toggle="tab">   Documentos  </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content3" role="tab" id="tab_end" data-toggle="tab">   Endereços   </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content4" role="tab" id="tab_con" data-toggle="tab">   Contatos    </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content5" role="tab" id="tab_dep" data-toggle="tab">   Dependentes </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content6" role="tab" id="tab_cer" data-toggle="tab">   Cerimonias  </a>
                           </li>
                        </ul>

                        <div id="myTabContent" class="tab-content">

                           <div role="tabpanel" class="tab-pane fade active in"  id="tab_content1" aria-labelledby="tab_pri">
                              @include('irmaos/create_principal')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content2" aria-labelledby="tab_doc">
                              @include('irmaos/create_documentos')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content3" aria-labelledby="tab_end">
                              @include('irmaos/create_endereco')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content4" aria-labelledby="tab_con">
                              @include('irmaos/create_contatos')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content5" aria-labelledby="tab_dep">
                              @include('irmaos/create_dependentes')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content6 " aria-labelledby="tab_cer">
                              @include('irmaos/create_cerimonias')
                           </div>

                        </div>
                     </form>
                     <!-- botoes --> 
                     <div class="ln_solid"></div>
                     <div class="form-group">
                        <div class="col-md-offset-8">
                           <a href="{{ URL::previous()  }}" class="btn btn-danger">  Cancela     </a>
                           <button id="send" type="submit" class="btn btn-success">  Confirma    </button>
                        </div>
                     </div>
                     <!-- fim botoes --> 
                  </div>
               </div>
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

  {{-- Atualiza os campos do endereço de acordo com o cep digitado --}}
  <script src="{{ asset("js/endereco.js") }}"></script>


  <script type="text/javascript">

      {{-- Máscarasa dos campos CPF e RG --}}
      $(document).ready(function(){

         //desabilita data de casamento se não for casado
         $("select#ic_estado_civil").change(function(){
           if($("select#ic_estado_civil>option:selected").text() == " Casado ")
           {
             document.getElementById("dt_casamento").disabled = false;
           } else {
             document.getElementById("dt_casamento").disabled = true;
           }
         });

         //desabilita orgão emissor  edata de emissão se não tiver RG
         $("input#nu_identidade").change(function(){
           if($("input#nu_identidade").value == "")
           {
             document.getElementById("no_orgao_emissor_idt").disabled = true;
             document.getElementById("dt_emissao_idt").disabled = true;
           } else {
             document.getElementById("no_orgao_emissor_idt").disabled = false;
             document.getElementById("dt_emissao_idt").disabled = false;
           }
         });

         //desabilita zona eleitoral e data de emissão se não tiver titulo
         $("input#nu_titulo_eleitor").change(function(){
           if($("input#nu_titulo_eleitor").value == "")
           {
             document.getElementById("nu_zona_eleitoral").disabled = true;
             document.getElementById("dt_emissao_titulo").disabled = true;
           } else {
             document.getElementById("nu_zona_eleitoral").disabled = false;
             document.getElementById("dt_emissao_titulo").disabled = false;
           }
         });


         //$(".cim").inputmask('#.999.999', { numericInput: true });
         //$('.cim').mask('9.999.999', {reverse: true});
         //$(".num_logradouro").inputmask("999.999");
         //$(".cpf").inputmask("999.999.999-99", { numericInput: true });
         //$(".rg").inputmask("99.999.999-9", { numericInput: true });
         //$(".cep").inputmask("99.999-999", { numericInput: true });
         //$(".data").inputmask("99/99/9999");
         //$(".celular").inputmask("(99)99999-9999");
         //$(".telefone").inputmask("(99)9999-9999");
       });

       function desabilita(){
         if( this.text == 'Casado' ){
             document.getElementById('cep').disabled = false;
             document.getElementById('uf').disabled = false;
         }else{
             document.getElementById('cep').disabled = true;
             document.getElementById('uf').disabled = true;
         }
       }



       var cont_telefone=1 
       var cont_email=1;

      $(function(){
        // Clonar div panel_telefones
         $(".clonar").click(function(e){

            e.preventDefault();

            $(".panel_telefones").clone()

            // Adicionar a classe clone e remover a classe panel_telefones

            .addClass("clone_telefones x_panel")
            .removeClass("panel_telefones")

            // Mostrar o botão excluir

            .find("button.excluir").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().parent().appendTo(".div-clone")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("select[name='irmao[0][ic_telefone]']")
                .attr("name", "irmao["+cont+"][ic_telefone]")
                .attr("id", "irmao["+cont+"][ic_telefone]")
                .val("")
            
            .parent().parent().parent().find("input[name='irmao[0][nu_telefone]']")
                .attr("name", "irmao["+cont+"][nu_telefone]")
                .attr("id", "irmao["+cont+"][nu_telefone]")
                .val("")
            
            

            // Incrementar o contador de dependentes

            cont_telefone++;
         });

         // Botão de excluir telefone

         $("body").on("click", "button.excluir", function(){ 

            $(this).parent().parent().remove(); 

         });
     
      //=================================== clone email====================================================
      $(function(){
        // Clonar div panel_telefones
         $(".clonar_email").click(function(e){

            e.preventDefault();

            $(".panel_emails").clone()

            // Adicionar a classe clone e remover a classe panel_telefones

            .addClass("clone_emails x_panel")
            .removeClass("panel_emails")

            // Mostrar o botão excluir

            .find("button.excluir_email").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().parent().appendTo(".div_clone_emails")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("select[name='irmao[0][email]']")
                .attr("name", "irmao["+cont+"][email]")
                .attr("id", "irmao["+cont+"][email]")
                .val("")
            
            // Incrementar o contador de dependentes

            cont_email++;
         });

         // Botão de excluir telefone

         $("body").on("click", "button.excluir", function(){ 

            $(this).parent().parent().remove(); 

         });
         
      });


   </script>

@endpush

