@extends("layouts.blank")

@section("conteudo")

<div class="right_col" role="main">
	@include('includes/mensagens')

	<div class=""> </div>
	<div class="clearfix"></div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel modal-content">
			<div class="x_title">
				<h2> {{ $titulo  }} </h2>
				<div class="clearfix"></div>
			</div>
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
</div>

@endsection
