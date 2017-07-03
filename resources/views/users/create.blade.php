@extends("layouts.blank")

@section('titulo')

	Cadastro de Usuários

@endsection

@section("main_container")

	{{-- Mostrar os erros de validação --}}

    @if( count($errors) > 0)

        <div class="alert alert-roxo alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>

          <strong>Atenção!</strong><br>

          <ul>

            @foreach($errors->all() as $erro)

              <li>{{ $erro }}</li>

            @endforeach

          </ul>

        </div>

    @endif

    {{-- Mostrar mensagem de sucesso --}}

    @if(session('sucesso'))

        <div class="alert alert-dourado alert-dismissible" style="margin-top: 70px;" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Parabéns!</strong> {{ session('sucesso') }}
        </div>

    @endif

	<div class="col-md-12 col-sm-12 col-xs-12">

		<div class="x_title">
			<h2> Cadastro de Usuário</h2>
			<div class="clearfix"></div>
		</div>
		
		<div class="x_panel modal-content">
			
			<div class="x_title">
				<h2> Dados </h2>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">

				<form action="{{ url("/users/") }}" method="post" class="form-horizontal" id="form-cadastro-usuario">

					{{ csrf_field() }}

					{{-- Campo Nome --}}
					<div class="form-group">

						<label for="nome" class="col-sm-4 control-label">Nome</label>

						<div class="col-sm-4">
							<input value="{{ old('name') }}" name="name" type="text" class="form-control" id="nome" placeholder="Nome">
						</div>
					</div>

					<!-- Campo Email -->

	    			<div class="form-group">

	    				<label for="email" class="col-sm-4 control-label">Email</label>

	    				<div class="col-sm-4">
	     	 				<input value="{{ old('email') }}" name="email" type="email" class="form-control" id="email" placeholder="Email">
	    				</div>

	   				</div>

	   				{{-- Campo Senha --}}

					<div class="form-group">

						<label for="senha" class="col-sm-4 control-label">Senha</label>

						<div class="col-sm-4">
							<input name="password" type="password" class="form-control" id="senha" placeholder="Senha">
						</div>
					</div>

					{{-- Campo Nova Senha --}}

					<div class="form-group">

						<label for="confirmarsenha" class="col-sm-4 control-label">Confirmar Senha</label>

						<div class="col-sm-4">
							<input name="password_confirmation" type="password" class="form-control" id="senha" placeholder="Confirmar Senha">

						</div>
					</div>

					{{-- Campo de Seleçao --}}

					<div class="form-group">

						<label for="admin" class="col-sm-4 control-label">Tipo de Usuário</label>

						<div class="col-sm-4">
						
							<select name="admin" class="form-control" id="tipodeususario">
								<option value="">Selecione</option>
								<option value="Master" @if(old('admin') == "Master") selected="selected" @endif>Master</option>
								<option value="Supervisor" @if(old('admin') == "Supervisor") selected="selected" @endif>Supervisor</option>
								<option value="Padrão" @if(old('admin') == "Padrão") selected="selected" @endif>Padrão</option>
							</select>

						</div>
					</div>	
					<div class="form-group" style="text-align: center;">
						<button type="submit" value="submit" data-toggle="tooltip" title="Criar usuário(a)" class="btn btn-lg-circulo btn-cor-padrao fa fa-floppy-o"></button>
					
					</div>
				</form>
			</div>
		</div>
	</div>


@endsection