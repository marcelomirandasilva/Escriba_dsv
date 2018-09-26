@extends('gentelella.layouts.app')

@push('styles')
	<link rel='stylesheet' href="{{ asset('fullcalendar/fullcalendar.css') }}"  />
@endpush

@section('content')


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

  	 	'renderEvent',
    	{
      		
	    },

	  	dayClick: function() {alert('a day has been clicked!');},
	});




	$(document).ready(function() {
	    
	});

</script>



@endpush



