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
					<h5> {{ $loja->co_titulo }} {{ $loja->no_loja }} - {{  $loja->nu_loja }} </h5>









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
