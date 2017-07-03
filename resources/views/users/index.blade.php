@extends("layouts.blank")

@section('titulo')

	Lista de Usuários

@endsection

@push('css')

	<!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

@endpush

@section("main_container")


    <div class="col-md-12 col-sm-12 col-xs-12">
    	<div class="x_title">
        	<h2>Lista de Usuários</h2>
        	<div class="clearfix"></div>
        </div>

        <div class="x_panel modal-content">

            <div class="x_content">
               
				<table class="table table-striped" id="dataTable">

					<thead>
						
						<tr>
						  	<th>ID</th>
						   	<th>Nome</th> 
						   	<th>E-mail</th>
							<th>Nível de Acesso</th>
							<th>Ações</th>
						</tr>						

					</thead>

					<tbody>

						@foreach($usuarios as $usuario)
							
							<tr>
							    <td>{{ $usuario->id }}</td>
							    <td>{{ $usuario->name }}</td> 
							    <td>{{ $usuario->email }}</td>
							    <td>{{ $usuario->admin }}</td>
							    <td class="actions">
				                  	<a data-toggle="tooltip" title="Alterar" class="btn btn-cor-padrao btn-pn-circulo btn-xs" href="{{ url("users/$usuario->id/edit") }}"><i class="fa fa-pencil"></i></a>

									{{-- Não deixar o usuário deletar a si mesmo --}}
	
									@if(Auth::user()->id != $usuario->id)

				                  		<a data-toggle="tooltip" title="Excluir" class="btn btn-excluir btn-cor-perigo btn-pn-circulo btn-xs"  data-id="{{$usuario->id}}" data-nome="{{ $usuario->name }}" href="#" data-toggle="modal" data-target="#modalexcluir"><i class="fa fa-times"></i></a>

				                  	@endif
				                </td>
							</tr>

						@endforeach

					</tbody>

				</table>


            </div>
        </div>
    </div>

{{-- modal do botão excluir --}}

	<div class="modal fade" id="modalexcluir" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Excluir de usuário</h4>
	      </div>
	      <div class="modal-body">
	        <h2>Você realmente desejar excluir o(a) usuário(a) <span id="nome_usuario"></span></h2>
	      </div>
	      <div class="modal-footer">
	        <button type="button" id="btn-excluir-modal" class="btn btn-cor-perigo" data-dismiss="modal">Excluir</button>
	        <button type="button" class="btn btn-cor-padrao" data-dismiss="modal" aria-label="Close">Fechar</button>
	      </div>
	      <input type="hidden" name="id" id="id_usuario">
	      {{ method_field("DELETE") }}
			  {{ csrf_field() }}
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

{{-- fim do modal do botão excluir --}}

@endsection

@push('scripts')

	<!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>

	@include('includes.users.scripts')

@endpush