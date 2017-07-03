@extends('layouts.blank')



@section('conteudo')



	<!-- page content -->
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel modal-content">
				<div class="x_title">
					<h2> Listagem de Irmãos </h2>
					<a href="{{ url('membros/create') }}" 
						class="btn-circulo btn btn-primary btn-md   pull-right " 
						data-toggle="tooltip"  
						data-placement="bottom" 
						title="Adiciona um Membro">
						<span class="fa fa-plus">  </span>
					</a>
					<div class="clearfix"></div>
				</div>
			<div class="x_content ">
				<div class="panel-body">



					<div class="login_wrapper">
						 <div class="animate form ">
							  <section class="login_content">
								{!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}
								
								<h1>Criação de Usuário </h1>

								{!! BootForm::text('name', 'Nome', old('name'), ['placeholder' => 'Nome completo']) !!}

								{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}



								{!! BootForm::password('password', 'Senha', ['placeholder' => 'Senha']) !!}

								{!! BootForm::password('password_confirmation', 'Confirmação de Senha', ['placeholder' => 'Confirmação']) !!}
							
								{!! BootForm::submit('Cria', ['class' => 'btn btn-default']) !!}
								
								<div class="clearfix"></div>
								
								
								{!! BootForm::close() !!}
							  </section>
						 </div>
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
