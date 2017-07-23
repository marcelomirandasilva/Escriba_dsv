@extends('layouts.blank')

@push('stylesheets')
  <!-- Example -->
  <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

  <!-- page content -->

  <!-- page content -->
  {{-- Mostrar mensagem de sucesso --}}

{{--   @if(session('sucesso'))

      <div class="alert alert-dourado alert-dismissible" style="margin-top: 70px;" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Parabéns!</strong> {!! session('sucesso') !!}
      </div>
  @endif --}}
  
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
            <div class="x_panel modal-content">
               <div class="x_title">
                  <h2> {{ $titulo }} </h2>
               <div class="clearfix"></div>
            </div>
            <!-- conteudo aqui-->
            <div class="col-md-12 ">
               <div class="x_panel">
               <div class="x_content ">
                  <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    
                    @if( isset($edita))

                      <form id="form_membro" method="post" action="{{ url("membros/$membro->id") }}" class="form-horizontal form-label-left" >
                        {!! method_field('PUT') !!}

                    @else
                       <form id="form_membro" method="post" action="{{ route('membros.store') }}" class="form-horizontal form-label-left" >
                    @endif


                    
                        {{ csrf_field() }}
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                           
                           <li role="presentation" class="active">
                              <a href="#tab_content1" role="tab" id="tab_principal" data-toggle="tab">   Principal   </a> 
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content2" role="tab" id="tab_documentos" data-toggle="tab">   Documentos  </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content3" role="tab" id="tab_enderecos" data-toggle="tab">   Endereços   </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content4" role="tab" id="tab_contatos" data-toggle="tab">   Contatos    </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content5" role="tab" id="tab_dependentes" data-toggle="tab">   Dependentes </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content6" role="tab" id="tab_cerimonias" data-toggle="tab">   Cerimonias  </a>
                           </li>
                           
                           <li role="presentation" class="">      
                              <a href="#tab_content7" role="tab" id="tab_condecoracoes" data-toggle="tab">   Condecorações  </a>
                           </li>

                        </ul>

                        <div id="myTabContent" class="tab-content">

                           <div role="tabpanel" class="tab-pane fade active in"  id="tab_content1" aria-labelledby="tab_pri">
                              @include('membros/create_principal')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content2" aria-labelledby="tab_doc">
                              @include('membros/create_documentos')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content3" aria-labelledby="tab_end">
                              @include('membros/create_endereco')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content4" aria-labelledby="tab_con">
                              @include('membros/create_contatos')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content5" aria-labelledby="tab_dep">
                              @include('membros/create_dependentes')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content6" aria-labelledby="tab_cer">
                              @include('membros/create_cerimonias')
                           </div>

                           <div role="tabpanel" class="tab-pane fade"            id="tab_content7" aria-labelledby="tab_condecoracoes">
                              @include('membros/create_condecoracoes')
                           </div>

                        </div>
                        <!-- botoes --> 
                        {{-- <div class="ln_solid"></div> --}}
                        <div class="form-group">
                            <div class="col-md-offset-8">
                               <a href="{{ url("membros") }}" class="btn btn-danger pull-right">  Cancela     </a>
                               <button id="send" type="submit" class="btn btn-success pull-right">  Confirma    </button>
                            </div>
                        </div>
                        <!-- fim botoes --> 
                     </form>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

  <!-- /page content -->
  <!-- /page content -->

 
@endsection


@push('scripts')

  {{-- Script para máscara numérica. Ex.: CPF, RG --}}
  <script src="{{ asset("js/jquery.inputmask.bundle.min.js") }}"></script>

  {{-- Atualiza os campos do endereço de acordo com o cep digitado --}}
  <script src="{{ asset("js/endereco_array.js") }}"></script>


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

        

         // $("select#ic_grau").change(function(){ 

         //       //console.log($(this).val()); 

         //       //console.log($("select#ic_grau").value))

         //       if($("select#ic_grau").val() == "Candidato")
         //       {
         //          console.log("Candidato");
         //       };

         // });

         //desabilita campos de acordo com o grau



         $("select#ic_grau").change(function(){ 
            console.log("mudou");

            var valor = $(this).val();
            
            $("#tab_cerimonias" ).show();
            $("#tab_condecoracoes" ).show();                  

            document.getElementById("dt_filiacao").disabled = false;
            document.getElementById("dt_regularizacao").disabled = false;
            document.getElementById("co_cim").disabled = false;


            document.getElementById("dt_iniciacao").disabled = false;
            document.getElementById("loja_id_iniciacao").disabled = false;
            document.getElementById("dt_elevacao").disabled = false;
            document.getElementById("loja_id_elevacao").disabled = false;
            document.getElementById("dt_exaltacao").disabled = false;
            document.getElementById("loja_id_exaltacao").disabled = false;
            document.getElementById("dt_instalacao").disabled = false;
            document.getElementById("loja_id_instalacao").disabled = false;


            if (valor == "Candidato"){
               document.getElementById("co_cim").disabled = true;
               $("#tab_cerimonias" ).hide();
               $("#tab_condecoracoes" ).hide();                  
               
            } else if (valor == "Aprendiz"){

               $("#tab_condecoracoes" ).hide();                  
               
               document.getElementById("dt_elevacao").disabled = true;
               document.getElementById("loja_id_elevacao").disabled = true;
               document.getElementById("dt_exaltacao").disabled = true;
               document.getElementById("loja_id_exaltacao").disabled = true;
               document.getElementById("dt_instalacao").disabled = true;
               document.getElementById("loja_id_instalacao").disabled = true;

            } else if (valor == "Companheiro"){

               $("#tab_condecoracoes" ).hide();                  
             
               document.getElementById("dt_exaltacao").disabled = true;
               document.getElementById("loja_id_exaltacao").disabled = true;
               document.getElementById("dt_instalacao").disabled = true;
               document.getElementById("loja_id_instalacao").disabled = true;

            } else if (valor == "Mestre"){
               
               document.getElementById("dt_instalacao").disabled = true;
               document.getElementById("loja_id_instalacao").disabled = true;
            }
         });



         {{-- coloca a mascara no numero de telefone de contato de acordo com o tipo de telefone escolhido --}}



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
      var cont_dependente=1;

      $(function(){
        // Clonar div panel_telefones
         $(".clonar_tel").click(function(e){

            e.preventDefault();

            $(".panel_telefone").clone()

            // Adicionar a classe clone e remover a classe panel_telefones

            .addClass("telefone_clonado x_panel")
            .removeClass("panel_telefone")

            // Mostrar o botão excluir

            .find("button.excluir_tel").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().parent().appendTo(".local_clone_tel")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("select[name='membro[0][ic_telefone]']")
                .attr("name", "membro["+cont_telefone+"][ic_telefone]")
                .attr("id", "membro["+cont_telefone+"][ic_telefone]")
                .val("")
            
            .parent().parent().parent().find("input[name='membro[0][nu_telefone]']")
                .attr("name", "membro["+cont_telefone+"][nu_telefone]")
                .attr("id", "membro["+cont_telefone+"][nu_telefone]")
                .val("")
            
             // Incrementar o contador de dependentes

            cont_telefone++;
         });

         // Botão de excluir telefone

         $("body").on("click", "button.excluir_tel", function(){ 

            $(this).parent().parent().remove(); 

         });
      });

      //=================================== clone email====================================================
      $(function(){
        // Clonar div clonar_email
         $(".clonar_email").click(function(e){

            e.preventDefault();

            $(".panel_emails").clone()

            // Adicionar a classe clone e remover a classe 

            .addClass("email_clonado x_panel")
            .removeClass("panel_emails")

            // Mostrar o botão excluir

            .find("button.excluir_email").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().parent().appendTo(".local_clone_email")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("select[name='membro[0][email]']")
                .attr("name", "membro["+cont_email+"][email]")
                .attr("id", "membro["+cont_email+"][email]")
                .val("")
            
            // Incrementar o contador de dependentes

            cont_email++;
         });

         // Botão de excluir telefone

         $("body").on("click", "button.excluir_email", function(){ 

            $(this).parent().parent().remove(); 

         });
      }); 


      //=================================== clone DEPENDENTE====================================================
      $(function(){
         $(".clonar_dependente").click(function(e){

            
            e.preventDefault();

            $(".panel_dependente").clone()

            // Adicionar a classe clone e remover a classe 

            .addClass("dependente_clonado x_panel")
            .removeClass("panel_dependente")

            // Mostrar o botão excluir

            .find("button.excluir_dependente").css("display","block")

            // Colocar os campos clonados no lugar correto

            .parent().parent().parent().appendTo(".local_clone_dependente")

            // Alterar os names dos inputs para preencher o vetor de dependentes corretamente

            .find("input[name='dependente[0][nome]']")
                .attr("name", "dependente["+cont_dependente+"][nome]")
                .attr("id", "dependente["+cont_dependente+"][nome]")
                .val("")

            .find("select[name='dependente[0][parentesco]']")
                .attr("name", "dependente["+cont_dependente+"][parentesco]")
                .attr("id", "dependente["+cont_dependente+"][parentesco]")
                .val("")

            .find("input[name='dependente[0][nascimento]']")
                .attr("name", "dependente["+cont_dependente+"][nascimento]")
                .attr("id", "dependente["+cont_dependente+"][nascimento]")
                .val("")
            
            // Incrementar o contador de dependentes

            cont_dependente++;
         });

         // Botão de excluir telefone

         $("body").on("click", "button.excluir_dependente", function(){ 

            $(this).parent().parent().parent().remove(); 

         });
      });     


      //================================================================= AUTOCOMPLETE CERIMONIAS ===========================
      new autoComplete({
         selector: 'input[name="fk_loja_iniciacao"]',
         minChars: 1,
         offsetLeft: 1,
         delay: 50,
         source: function(term, suggest){
            term = term.toLowerCase();
            var choices = [];
            @foreach($lojas as $loja)
               choices.push('{{$loja->no_loja}}');  
            @endforeach
              
            var matches = [];
            for (i=0; i<choices.length; i++)
               if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                  suggest(matches);
         }
      });
     
      //--------------------------------------------------------------
      new autoComplete({
         selector: 'input[name="fk_loja_elevacao"]',
         minChars: 1,
         offsetLeft: 1,
         delay: 50,
         source: function(term, suggest){
            term = term.toLowerCase();
            var choices = [];
            @foreach($lojas as $loja)
               choices.push('{{$loja->no_loja}}');  
            @endforeach
              
            var matches = [];
            for (i=0; i<choices.length; i++)
               if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                  suggest(matches);
         }
      });
     
      //--------------------------------------------------------------
      new autoComplete({
         selector: 'input[name="fk_loja_exaltacao"]',
         minChars: 1,
         offsetLeft: 1,
         delay: 50,
         source: function(term, suggest){
            term = term.toLowerCase();
            var choices = [];
            @foreach($lojas as $loja)
               choices.push('{{$loja->no_loja}}');  
            @endforeach
              
            var matches = [];
            for (i=0; i<choices.length; i++)
               if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                  suggest(matches);
         }
      });
     
      //--------------------------------------------------------------
      new autoComplete({
         selector: 'input[name="fk_loja_instalacao"]',
         minChars: 1,
         offsetLeft: 1,
         delay: 50,
         source: function(term, suggest){
            term = term.toLowerCase();
            var choices = [];
            @foreach($lojas as $loja)
               choices.push('{{$loja->no_loja}}');  
            @endforeach
              
            var matches = [];
            for (i=0; i<choices.length; i++)
               if (~choices[i].toLowerCase().indexOf(term)) matches.push(choices[i]);
                  suggest(matches);
         }
      });
     
  
      //================================================================= AUTOCOMPLETE CERIMONIAS ===========================

   </script>
@endpush

