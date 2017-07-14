@extends('layouts.blank')

@push('stylesheets')
  <link href="{{ asset('datatables/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('datatables/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

  {{-- <!-- Modal -->
  <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modalLabel">Exclusão de Usuário</h4>
        </div>
        <div class="modal-body">
            Deseja realmente excluir essa Usuário?
            <h5><b>{{ $usuario->name }} - {{ $usuario->email }} - {{  $usuario->acesso }} </b> </h5> 
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default btn_acao" data-dismiss="modal">N&atilde;o</button>
            <a href="#"  type="button" class="btn btn-primary botao_deletar btn_acao">Sim</a>       
        </div>
    
        <form action="{{ route("usuarios.destroy", ['id' => $usuario->id]) }}" class="form-excluir" method="post" accept-charset="utf-8">
            <input type="hidden" name="id" id="id_loja">
            {{ method_field("DELETE") }}
            {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div> 
  <!-- /.modal -->
 --}}



  <!-- page content -->
  <div class="right_col" role="main">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel modal-content animated fadeInUp">
        <div class="x_title">
          <h2> Listagem de Usuários </h2>
          <a href="{{ url('usuarios/create') }}" 
            class="btn-circulo btn btn-primary btn-md   pull-right " 
            data-toggle="tooltip"  
            data-placement="bottom" 
            title="Adiciona um Membro">
            <span class="fa fa-plus">  </span>
          </a>
          <div class="clearfix"></div>
        </div>
        <div class="x_panel ">

            <div class="x_content">
               
				<table class="table table-striped " id="tabela_usuarios">

					<thead>
						
						<tr>
              <th>Nome</th> 
              <th>E-mail</th>
							<th>Nível de Acesso</th>
							<th>Ações</th>
						</tr>						

					</thead>

					<tbody>

						@foreach($usuarios as $usuario)
							
							<tr>
							    <td>{{ $usuario->name }}</td> 
							    <td>{{ $usuario->email }}</td>
							    <td>{{ $usuario->acesso }}</td>
							    <td class="actions">
                    <a data-toggle="tooltip" title="Alterar" 
                        class="btn btn-warning btn-xs action botao_lista" 
                        href="{{ url("usuarios/$usuario->id/edit") }}">
                      <i class="fa fa-pencil"></i>
                    </a>

                    <button 
                      data-target="#delete-modal"
                      class="btn  btn-xs action botao_lista btn-danger "  
                      data-toggle="modal" 
                      title="Exclui essa Loja">
                      <i class="fa fa-trash"></i>
                    </button>

                  </td>
							</tr>

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
   <div class="pull-right"> V0.1_2017</a> </div>
   <div class="clearfix"></div>
  </footer>
  <!-- /footer content -->
@endsection

@push("scripts")

  <!-- Datatables -->
  <script src="{{ asset('datatables/datatables.net/js/jquery.dataTables.min.js') }}"                  type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"            type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/dataTables.buttons.min.js') }}"         type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"       type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.flash.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.html5.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-buttons/js/buttons.print.min.js') }}"              type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"       type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-responsive/js/dataTables.responsive.min.js') }}"   type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"     type="text/javascript"></script>
  <script src="{{ asset('datatables/datatables.net-scroller/js/dataTables.scroller.min.js') }}"       type="text/javascript"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"                   type="text/javascript"></script>
  <script src="http://cdn.datatables.net/plug-ins/1.10.15/sorting/datetime-moment.js"                 type="text/javascript"></script>

  <script>
    $(document).ready(function(){
      $.fn.dataTable.moment( 'DD/MM/YYYY' );
      $("#tabela_usuarios").DataTable({

        language : {
          'url' : '{{ asset('js/portugues.json') }}',
          "decimal": ",",
          "thousands": "."
        }, 
        stateSave: true,
        stateDuration: -1,

       

      });
    });


  </script>

@endpush



