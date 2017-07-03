@extends('layouts.blank')



@section('conteudo')



	<!-- page content -->
	<div class="right_col" role="main">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel modal-content">
				<div class="x_title">
					<h2> Alteração de Usuário:  {{ Auth::user()->name }} </h2>
					<div class="clearfix"></div>
				</div>
				<div class="x_content ">
					<div class="panel-body">

						
			        <div class="col-md-2 col-md-offset-10">
				 			<img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height: 150px; float: right; border-radius: 50%; margin-right: 25px; ">
			            
			            <form enctype="multipart/form-data" action="/perfil" method="POST">
			                <input type="file" name="avatar">
			                <input type="hidden" name="_token" value="{{ csrf_token() }}">
			                <input type="submit" class="pull-right btn btn-sm btn-primary">
			            </form>
			        </div>
			
									{!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}

									{!! BootForm::text('name', 'Nome', old('name'), ['placeholder' => 'Nome completo']) !!}

									{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}



									{!! BootForm::password('password', 'Senha', ['placeholder' => 'Senha']) !!}

									{!! BootForm::password('password_confirmation', 'Confirmação de Senha', ['placeholder' => 'Confirmação']) !!}

									{!! BootForm::submit('Cria', ['class' => 'btn btn-default']) !!}

									<div class="clearfix"></div>

									<div class="separator">
									<p class="change_link">Já possui cadastro? ?
									<a href="{{ url('/login') }}" class="to_register"> Entre no site! </a>
									</p>

									<div class="clearfix"></div>
									<br />


					
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
