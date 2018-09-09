@extends('gentelella.layouts.app')

@section('content')

	<!-- page content -->
   <div class="x_panel modal-content animated slideInUp ">
      <div class="x_title">
         <h2> Listagem de Bases </h2>
         <a href="{{ url('base/create') }}" 
            class="btn-circulo btn btn-primary btn-md   pull-right " 
            data-toggle="tooltip"  
            data-placement="bottom" 
            title="Adiciona uma Base">
            <span class="fa fa-plus">  </span>
         </a>
         <div class="clearfix"></div>
      </div>
      <div class="x_panel ">
         <div class="x_content">
                  
            <table class="table table-hover table-striped compact" id="tb_veiculos">
               <thead>
                  <tr>
                     <th>Nome</th> 
                     <th>Endereço</th>
                     <th>Ações</th>
                  </tr>						
               </thead>

               <tbody>
                  @foreach($bases as $key=> $base)
                     <tr>
                        <td>{{ $base->nome }}</td> 
                        <td>{{ $base->endereco }}</td>
   

                        <td class="actions">
                              
                           <button 
                              class="btn_email_senha btn btn-info btn-xs action botao_acao " 
                              data-toggle="tooltip" 
                              data-base = {{ $base->id }}
                              data-placement="bottom" 
                              title="Envia NOVA senha por email ao usuario">  
                              <i class="glyphicon glyphicon-envelope "></i>
                           </button>
                              
                           <a href="{{ url("base/$base->id/edit") }}" 
                              class="btn btn-warning btn-xs action botao_acao " 
                              data-toggle="tooltip" 
                              data-base = {{ $base->id }}
                              data-placement="bottom" 
                              title="Edita essa Base">  
                              <i class="glyphicon glyphicon-pencil "></i>
                           </a>
                              
                           
                        </td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
	<!-- /page content -->

@endsection


@push("scripts")
	<script>
		$(document).ready(function(){
         $.fn.dataTable.moment( 'DD/MM/YYYY' );
         
			$("#tb_veiculos").DataTable({
				language : {
					'url' : '{{ asset('js/portugues.json') }}',
					"decimal": ",",
					"thousands": "."
				}, 
				stateSave: true,
            stateDuration: -1,
            		  		
				"columnDefs": 
				[
               { className: "text-center", "targets": [4] },
               
				]
			});
		});
	</script>

@endpush



