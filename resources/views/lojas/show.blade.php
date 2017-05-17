@extends('layouts.blank')

@push('stylesheets')
<!-- Example -->
<!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

@endpush

@section('conteudo')

<!-- page content -->
<!-- page content -->
<div class="right_col" role="main">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
				<h2> Visualização de Loja </h2>
				<a href="{{ url('lojas/$loja->id/destroy') }}" class="btn  destroy action botao_novo pull-right "  >
					<span class="glyphicon glyphicon-trash">  </span>
				</a>

				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="panel-body">   
					
					<h5><b>{{ $loja->co_titulo }} {{ $loja->no_loja }} - Nº {{  $loja->nu_loja }} </b> </h5> 

					<br> Pertence a: {{$loja->potencia->no_potencia}}
					<br> Fundada em: {{ date('d-m-Y', strtotime($loja->dt_fundacao)) }}  
					<br> Rito: {{ $loja->ic_rito}} 
					<br><br>

					<div class="x_title"> </div>
					<br> Endereço: {{$loja->endereco->no_logradouro}}, {{$loja->endereco->nu_logradouro}} -
										{{$loja->endereco->no_bairro}} - {{$loja->endereco->no_municipio}} -
										{{$loja->endereco->de_complemento}} - {{$loja->endereco->nu_cep}} - 
										{{$loja->endereco->sg_uf}} - {{$loja->endereco->pais->no_pais}}  
					<br><br>

					<div class="x_title"> </div>
					<br> Telefone: {{$loja->telefone->nu_telefone}}
					<br> Email: {{$loja->email->de_email}}
					






						<!- botoes -> 
						<div class="ln_solid"></div>
						
						<div class="col-md-offset-4">
						  <a href="{{ url('lojas') }}" class="btn btn-danger">  Cancela     </a>
						  <button id="send" type="submit" class="btn btn-success">  Confirma    </button>
						</div>
						<!- fim botoes ->


				</div>
			</div>
		</div>
	</div>
</div>
<!-- page content -->





<!-- footer content -->
<footer>
	<div class="pull-right">
		Desenvolvido por Marcelo Miranda - 2017</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection
