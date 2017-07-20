@extends('layouts.blank')

@push('stylesheets')
	<link rel='stylesheet' href="{{ asset('fullcalendar/fullcalendar.css') }}"  />
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
					<h2> Calendário de Sessões </h2>
					<a href="{{ url('sessoes/calendario') }}" 
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

					<div id='calendar'></div>
				
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push("scripts")

	<script src='{{ asset('fullcalendar/moment.js') }}'> 			</script>
	<script src='{{ asset('fullcalendar/fullcalendar.js') }}'>  </script>
	<script src='{{ asset('fullcalendar/pt-br.js') }}'>	</script>
	

<script>

	var zone = "05:30";
	$('#calendar').fullCalendar({
		header: {
	   	left: 'prev,next today',
	   	center: 'title',
	   	right: 'month,agendaWeek,agendaDay'
	  	},
		editable: true,
	  	droppable: true,

	  	dayClick: function() {alert('a day has been clicked!');},


	

	});


	$(document).ready(function() {
	    
	});

</script>



@endpush



