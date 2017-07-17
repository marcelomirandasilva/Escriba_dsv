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
					<div id="calendar" class="fc fc-unthemed fc-ltr">
						<div class="fc-toolbar fc-header-toolbar">
							<div class="fc-left">
								<div class="fc-button-group">
									<button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
										<span class="fc-icon fc-icon-left-single-arrow"></span>
									</button>
									<button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
										<span class="fc-icon fc-icon-right-single-arrow"></span>
									</button>
								</div>

								<button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">
									today
								</button>
							</div>

							<div class="fc-right">
								<div class="fc-button-group">
									<button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">
										month
									</button>
									<button type="button" class="fc-agendaWeek-button fc-button fc-state-default">
										week
									</button>
									<button type="button" class="fc-agendaDay-button fc-button fc-state-default">
										day
									</button>
									<button type="button" class="fc-listMonth-button fc-button fc-state-default fc-corner-right">
										list
									</button>
								</div>
							</div>

							<div class="fc-center"><h2>July 2017</h2></div>
							<div class="fc-clear"></div></div>
							<div class="fc-view-container">
								<div class="fc-view fc-month-view fc-basic-view">
									<table>
										<thead class="fc-head">
											<tr>
												<td class="fc-head-container fc-widget-header">
													<div class="fc-row fc-widget-header">
														<table>
															<thead>
																<tr>
																	<th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th>
																	<th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th>
																	<th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th>
																	<th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th>
																	<th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th>
																	<th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th>
																	<th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th>
																</tr>
															</thead>
														</table>
													</div>
												</td>
											</tr>
										</thead>

										<tbody class="fc-body">
											<tr>
												<td class="fc-widget-content">
													<div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 671px;">
														<div class="fc-day-grid fc-unselectable">
															<div class="fc-row fc-week fc-widget-content" style="height: 111px;">
																<div class="fc-bg">
																	<table>
																		<tbody>
																			<tr>
																				<td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2017-06-25"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2017-06-26"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2017-06-27"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2017-06-28"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2017-06-29"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2017-06-30"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-07-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2017-06-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-mon fc-other-month fc-past" data-date="2017-06-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-tue fc-other-month fc-past" data-date="2017-06-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-wed fc-other-month fc-past" data-date="2017-06-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-thu fc-other-month fc-past" data-date="2017-06-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-fri fc-other-month fc-past" data-date="2017-06-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-sat fc-past" data-date="2017-07-01"><span class="fc-day-number">1</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">All Day Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 111px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-07-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-07-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-07-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-07-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-07-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-07-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2017-07-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2017-07-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-mon fc-past" data-date="2017-07-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-tue fc-past" data-date="2017-07-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-wed fc-past" data-date="2017-07-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-thu fc-past" data-date="2017-07-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-fri fc-past" data-date="2017-07-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-sat fc-past" data-date="2017-07-08"><span class="fc-day-number">8</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 111px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2017-07-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2017-07-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2017-07-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2017-07-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2017-07-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2017-07-14"></td><td class="fc-day fc-widget-content fc-sat fc-today fc-state-highlight" data-date="2017-07-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2017-07-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-mon fc-past" data-date="2017-07-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-tue fc-past" data-date="2017-07-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-wed fc-past" data-date="2017-07-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-thu fc-past" data-date="2017-07-13"><span class="fc-day-number">13</span></td><td class="fc-day-top fc-fri fc-past" data-date="2017-07-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-sat fc-today fc-state-highlight" data-date="2017-07-15"><span class="fc-day-number">15</span></td></tr></thead><tbody><tr><td></td><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 111px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-16"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-17"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-07-18"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-07-19"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-07-20"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-07-21"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-07-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-07-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-07-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-07-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-07-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-07-20"><span class="fc-day-number">20</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-07-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-07-22"><span class="fc-day-number">22</span></td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 111px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-23"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-24"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2017-07-25"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2017-07-26"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2017-07-27"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2017-07-28"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2017-07-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-07-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-07-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-tue fc-future" data-date="2017-07-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-wed fc-future" data-date="2017-07-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-thu fc-future" data-date="2017-07-27"><span class="fc-day-number">27</span></td><td class="fc-day-top fc-fri fc-future" data-date="2017-07-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-sat fc-future" data-date="2017-07-29"><span class="fc-day-number">29</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" href="http://google.com/"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 116px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2017-07-30"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2017-07-31"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2017-08-01"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2017-08-02"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2017-08-03"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2017-08-04"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2017-08-05"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2017-07-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-mon fc-future" data-date="2017-07-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2017-08-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2017-08-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2017-08-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2017-08-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2017-08-05"><span class="fc-day-number">5</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
					








				
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

<script>

	<script src='{{ asset('fullcalendar/fullcalendar.js') }}'>
	<script src='{{ asset('fullcalendar/moment.js') }}'>
	


	$(document).ready(function() {

	    // page is now ready, initialize the calendar...

	    $('#calendar').fullCalendar({
	        weekends: false
	    });

	});

</script>



@endpush



