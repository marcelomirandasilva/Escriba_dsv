@extends("layouts.blank")

@section('titulo')

	Alteração de Senha

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
		<h2> Alteração de Senha</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_panel modal-content">
		
		<div class="x_title"> Dados </div>
		
		<div class="x_content">

			<form action="{{ url('/users/alterarsenha') }}" method="POST" class="form-horizontal" id="form-cadastro-usuario">

				{{ csrf_field() }}


				{{-- Campo Senha Atual--}}

				<div class="form-group">

					<label for="senha" class="col-sm-4 control-label">Senha Atual</label>

					<div class="col-sm-4">
						<input name="senhaatual" type="password" class="form-control" id="senha" placeholder="Senha Atual">
					</div>
				</div>

				{{-- Campo Nova Senha --}}

				<div class="form-group">

					<label for="novasenha" class="col-sm-4 control-label">Nova Senha</label>

					<div class="col-sm-4">
						<input name="novasenha" type="password" class="form-control" id="senha" placeholder="Nova Senha">

					</div>
				</div>

				{{-- Campo Confirmar Senha--}}

				<div class="form-group">

					<label for="novasenha_confirmation" class="col-sm-4 control-label">Confirmar Senha</label>

					<div class="col-sm-4">
						<input name="novasenha_confirmation" type="password" class="form-control" id="novasenha_confirmation" placeholder="Confirmar Senha">
					</div>
				</div>

				<div class="form-group" style="text-align: center;">
                    <button type="submit" value="submit" data-toggle="tooltip" title="Salvar nova senha" class="btn btn-lg-circulo btn-cor-padrao fa fa-floppy-o"></button>
           		 </div>

				
			</form>



		</div>
	</div>
</div>


@endsection