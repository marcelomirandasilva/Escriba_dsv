@extends('gentelella.layouts.app')

@section('htmlheader_title', 'Home')

@section('content')

	<!-- page content -->
	 <div class="x_panel modal-content animated slideInUp">
			<div class="x_title">
				 <h2> Listagem de Secretarias </h2>
			<div class="clearfix"></div>
			</div>
			<div class="x_panel ">
				 <div class="x_content">
									
						<table class="table table-hover table-striped compact" id="tb_secretarias">
							 <thead>
									<tr>
										 <th>Nome</th> 
										 <th>Sigla</th>
										 {{--<th>Email</th>--}}
									</tr>						
							 </thead>

							 <tbody>
									 @foreach($obj as $secretaria)
										 <tr>
												<td>{{ $secretaria->nome }}</td> 
												<td>{{ $secretaria->sigla }}</td>
											 {{--<td>{{ $secretaria->email }}</td>--}}
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
         
			$("#tb_secretarias").DataTable({
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

